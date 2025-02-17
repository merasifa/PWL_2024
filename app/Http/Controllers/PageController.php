<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama: Tiara Mera Sifa <br> NIM: 2341720247';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
}
