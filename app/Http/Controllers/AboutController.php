<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
   
        $members = [
            
            [
                'name' => 'David',
                'role' => 'Leader',
                'umur' => '20',
                'quotes'=>'Setiap baris kode yang kau tulis sebagai mahasiswa pengembang web bukan sekadar memenuhi tugas kuliah—itu adalah pondasi masa depan kariermu.',
                'link' => 'https://github.com/daviezu',
                'image' => 'images/members/Dapid.jpg'
            ],
            [
                'name' => 'Nicholas Nelson',
                'role' => 'Support',
                'umur' => '20',
                'quotes'=>'Belajar pengembangan web saat kuliah ibarat menanam benih yang kelak tumbuh menjadi pohon karier yang kokoh dan berbuah manis.',
                'link' => 'https://github.com/vnnico',
                'image' => 'images/members/Nicholas.png'
            ],
            [
               'name' => 'Kevin Hermanto',
                'role' => 'Support',
                'umur' => '20',
                'quotes'=>'Jangan takut gagal saat mengerjakan proyek web. Setiap "error" adalah batu loncatan yang mengantarmu lebih dekat pada solusi dan pemahaman yang lebih dalam.',
                'link' => 'https://github.com/kvnnh',
                'image' => 'images/members/Kevin.png'
            ],
            [
               'name' => 'Wilson Wijaya',
                'role' => 'Support',
                'umur' => '20',
                'quotes'=>'Setiap tugas pembuatan situs yang diberikan dosen bukan hanya latihan, melainkan kesempatan membangun portofolio yang akan menjadi paspor menuju karier cemerlang.',
                'link' => 'https://github.com/WilsonWijaya',
                'image' => 'images/members/Wilson.jpg'
            ],
            [
                'name' => 'Trinata Suryawan',
                'role' => 'Support',
                'umur' => '20',
                'quotes'=>'Kuliah memberimu dasar ilmu, sementara pengembangan web memberimu ruang untuk merangkai ilmu itu menjadi inovasi yang bermanfaat bagi banyak orang.',
                'link' => 'https://github.com/NataaKuri',
                'image' => 'images/members/Trinata.png'
            ]
        ];

        return view('about', compact('members'));
    }
}
