<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'NIM : 2241720053<br>Nama : M. Tryo Bagus Anugerah Putra';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
}
