<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $properties = [
        [
            'id' => 1,
            'title' => 'Rumah Mewah di Jakarta',
            'description' => 'Rumah mewah dengan 4 kamar tidur dan kolam renang.',
            'image' => 'images/property/property1.png',
        ],
        [
            'id' => 2,
            'title' => 'Apartemen Modern di Bandung',
            'description' => 'Apartemen dengan fasilitas lengkap di pusat kota.',
            'image' => 'images/property/property2.png',
        ],
        [
            'id' => 3,
            'title' => 'Villa Asri di Bali',
            'description' => 'Villa dengan pemandangan pantai yang indah.',
            'image' => 'images/property/property11.png',
        ],
        [
            'id' => 4,
            'title' => 'Villa Asri di Bali',
            'description' => 'Villa dengan pemandangan pantai yang indah.',
            'image' => 'images/property/property4.png',
        ],
        [
            'id' => 5,
            'title' => 'Villa Asri di Bali',
            'description' => 'Villa dengan pemandangan pantai yang indah.',
            'image' => 'images/property/property5.png',
        ],
        [
            'id' => 6,
            'title' => 'Villa Asri di Bali',
            'description' => 'Villa dengan pemandangan pantai yang indah.',
            'image' => 'images/property/property6.png',
        ],
        [
            'id' => 7,
            'title' => 'Villa Asri di Bali',
            'description' => 'Villa dengan pemandangan pantai yang indah.',
            'image' => 'images/property/property7.png',
        ],
        [
            'id' => 8,
            'title' => 'Villa Asri di Bali',
            'description' => 'Villa dengan pemandangan pantai yang indah.',
            'image' => 'images/property/property8.png',
        ],
        [
            'id' => 9,
            'title' => 'Villa Asri di Bali',
            'description' => 'Villa dengan pemandangan pantai yang indah.',
            'image' => 'images/property/property9.png',
        ]
      
    ];

    return view('home', compact('properties'));
}
}
