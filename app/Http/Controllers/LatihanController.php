<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function berita(){
        $a = [
            array('home' => 'beranda','berita' => 'berita','olahraga' => 'olaharaga','list' => 'Sepak Bola','list2' => 'Bulu Tangkis', 'politik' => 'politik','manca' => 'Manca Negara','about'=>'Tentang'),
        ];
        return view('pages1.berita',['berita' => $a]);
    }

    public function dosen(){
        $a = [
            array('dosen' => 'Yusuf Bachtiar','matkel' => 'Pemrograman Mobile','mahasiswa' => 'Muhamad Soleh','nilai' => 78),
            array('dosen' => 'Yusuf Bachtiar','matkel' => 'Pemrograman Mobile','mahasiswa' => 'Jujun Junaedi','nilai' => 85),
            array('dosen' => 'Yusuf Bachtiar','matkel' => 'Pemrograman Mobile','mahasiswa' => 'Mamat Alkatiri','nilai' => 90),
            array('dosen' => 'Yusuf Bachtiar','matkel' => 'Pemrograman Mobile','mahasiswa' => 'Uby holbin','nilai' => 87),
            array('dosen' => 'Yusuf Bachtiar','matkel' => 'Pemrograman Mobile','mahasiswa' => 'Fadillah','nilai' => 95),
        ];
        $b = [
            array('dosen' => 'Yaris Riyadi','matkel' => 'Pemrograman Web','mahasiswa' => 'Alfred McTomminay','nilai' => 67),
            array('dosen' => 'Yaris Riyadi','matkel' => 'Pemrograman Web','mahasiswa' => 'Bruno Kasmir','nilai' => 90),
            array('dosen' => 'Yaris Riyadi','matkel' => 'Pemrograman Web','mahasiswa' => 'Akid Hendra','nilai' => 50),
            array('dosen' => 'Yaris Riyadi','matkel' => 'Pemrograman Web','mahasiswa' => 'Dany Irawan','nilai' => 70),
            array('dosen' => 'Yaris Riyadi','matkel' => 'Pemrograman Web','mahasiswa' => 'Chandra Mega Putra','nilai' => 60),
        ];
        return view('pages1.dosen',['dosen' => $a],['dosen2'=> $b]);
    }
    public function tv(){
        $a = [
            array('nama' => 'Net TV','acara'=>'86','waktu'=>'06.00 WIB-07.00 WIB','hari'=>'Senin - Jumat'),
            array('nama' => 'TVRI','acara'=>'Salam Olahraga','waktu'=>'07.00 WIB-07.30 WIB','hari'=>'Sabtu - Minggu'),
            array('nama' => 'BeinSport','acara'=>'Arsenal TV','waktu'=>'14.10 WIB-16.10 WIB','hari'=>'Senin - Jumat'),
            array('nama' => 'Ochannel','acara'=>'Jakarta Food Delights','waktu'=>'11.00 WIB-11.30 WIB','hari'=>'Senin - Minggu'),
            array('nama' => 'Indosiar','acara'=>'Patroli Malam','waktu'=>'02.30 WIB-03.00 WIB','hari'=>'Senin - Minggu'),
        ];
        return view('pages1.tv',['tv' => $a]);
    }
    public function belanja(){
        $a = [
            array('nama' => 'Alfian','pembelian'=> 
            [
                ['jenis'=> 'Sepatu','harga' => 250000],
                ['jenis'=> 'Baju','harga' => 100000],
                ['jenis'=> 'Celana','harga' => 150000],
                ['jenis'=> 'Kupluk','harga' => 100000],
            ]),
            array('nama' => 'Dida','pembelian'=> 
            [
                ['jenis'=> 'Topi','harga' => 100000],
                ['jenis'=> 'Baju','harga' => 75000],
                ['jenis'=> 'Celana','harga' => 125000],
            ]),
        ];
        return view('pages1.belanja',['belanja' => $a]);
    }
}
