<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data=[
            'title'=>'Home | Web Klub Menggambar',
            'tes'=> ['satu', 'dua', 'tiga']
        ];
        
        return view('pages/home', $data);
        
    }
    public function about()
    {
        $data=[
            'title'=>'About Me | Web Klub Menggambar'
        ];
        
        return view('pages/about', $data);
        
    }
    public function contact()
    {
        $data=[
            'title'=>'Contact Us| Web Klub Menggambar',
            'alamat'=>[
                [
                    'Email'=>'drawingclub@gmail.com',
                    'Instagram'=>'@drawing_club',
                    'Linkedin'=>'drawing_club',
                    'Alamat'=>'Jl. Hero No. 99',
                    'Kota'=>'Palu'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
    public function profil(){
        $data=[
            'title'=>'About Me | Web Klub Menggambar'
        ];
        return view('pages/profil', $data);
    }
}
?>