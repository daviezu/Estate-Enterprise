<?php

namespace App\Utils;

use Illuminate\Support\Facades\Http;

class Helper
{

    public static function convertMapLinkToIFrame(string $link): ?string
    {
        try {
            // Resolve URL jika itu adalah link pendek
            $resolvedUrl = self::resolveUrl($link);

            if (!$resolvedUrl) {
                \Log::warning("Failed to resolve URL: {$link}");
                return null;
            }

            \Log::info("Resolved URL: {$resolvedUrl}");

            $parsedUrl = parse_url($resolvedUrl);

            // Validasi host
            if (!isset($parsedUrl['host']) || !in_array($parsedUrl['host'], ['www.google.com', 'google.com', 'maps.google.com'])) {
                \Log::warning("Invalid host in resolved URL: {$resolvedUrl}");
                return null;
            }

            // Mendapatkan API Key dari konfigurasi
            $apiKey = config('services.google_maps.embed_key');
            if (empty($apiKey)) {
                \Log::error('Google Maps Embed API key is not set.');
                return null;
            }

            // Cek apakah URL mengandung parameter 'q' untuk pencarian
            if (isset($parsedUrl['query'])) {
                parse_str($parsedUrl['query'], $queryParams);
                if (isset($queryParams['q'])) {
                    $query = urlencode($queryParams['q']);
                    \Log::info("Creating embed URL with 'place' using query: {$query}");
                    return "https://www.google.com/maps/embed/v1/place?key={$apiKey}&q={$query}";
                }

                // Cek apakah ada Place ID
                if (isset($queryParams['cid'])) {
                    $placeId = $queryParams['cid']; // CID mungkin bukan Place ID
                    \Log::info("Creating embed URL with 'place' using place_id: {$placeId}");
                    return "https://www.google.com/maps/embed/v1/place?key={$apiKey}&place_id={$placeId}";
                }

                if (isset($queryParams['ll'])) {
                    list($latitude, $longitude) = explode(',', $queryParams['ll']);
                    \Log::info("Creating embed URL with 'view' using coordinates from 'll': {$latitude}, {$longitude}");
                    return "https://www.google.com/maps/embed/v1/view?key={$apiKey}&center={$latitude},{$longitude}&zoom=15";
                }
            }

            // Ekstrak koordinat dari path
            if (isset($parsedUrl['path'])) {
                // Contoh path: /maps/place/Monas/@-6.200000,106.816666,15z/
                if (preg_match('/@(-?\d+\.\d+),(-?\d+\.\d+)/', $parsedUrl['path'], $matches)) {
                    $latitude = $matches[1];
                    $longitude = $matches[2];
                    \Log::info("Creating embed URL with 'view' using coordinates: {$latitude}, {$longitude}");
                    return "https://www.google.com/maps/embed/v1/view?key={$apiKey}&center={$latitude},{$longitude}&zoom=15";
                }
            }

            // Jika tidak ada parameter 'q', 'll', atau koordinat yang dapat diekstrak, kembalikan null
            \Log::warning("No coordinates or Place ID found in resolved URL: {$resolvedUrl}");
            return null;
        } catch (\Exception $e) {
            // Log error jika terjadi pengecualian
            \Log::error('Error converting Google Maps URL: ' . $e->getMessage());
            return null;
        }
    }

    
    private static function resolveUrl(string $url): ?string
    {
        try {
            $response = Http::withOptions([
                'allow_redirects' => [
                    'max' => 10, // Jumlah redirect maksimum
                    'strict' => true,
                    'referer' => true,
                    'protocols' => ['http', 'https'],
                ],
                'timeout' => 5, // Waktu tunggu 5 detik
            ])->get($url);

            if ($response->successful()) {
                $finalUrl = $response->effectiveUri()->__toString();
                \Log::info("URL resolved to: {$finalUrl}");
                return $finalUrl;
            }

            \Log::warning("Failed to resolve URL: {$url}, status: " . $response->status());
            return null;
        } catch (\Exception $e) {
            \Log::error('Error resolving URL: ' . $e->getMessage());
            return null;
        }
    }


    public static function convertPhoneNumberFormat($phoneNumber): ?string {

        
        $cleanedNumber = preg_replace('/[^\d+]/', '', $phoneNumber);

        if (strpos($cleanedNumber, '+62') === 0) {
            return $cleanedNumber;
        }
        
        if (strpos($cleanedNumber, '62') === 0) {
            return '+' . $cleanedNumber;
        }

        if (strpos($cleanedNumber, '0') === 0) {
            return '+62' . substr($cleanedNumber, 1);
        }

    
        return null;
    }

}
