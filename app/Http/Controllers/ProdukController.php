<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function eduGames(){
        echo '<center> <h2> Marbel - Educational Games <br> 
           <a href="https://www.educastudio.com/category/marbel-edu-games">Klik </a>'.'Untuk Melanjutkan Ke Halaman Edu Games';
    }

    public function kidsGames(){
        echo '<center> <h2> Marbel & Friends - Kids Games <br> 
           <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Klik </a>'.'Untuk Melanjutkan Ke Halaman Kids Games';
    }

    public function story(){
        echo '<center> <h2> Riri - Story Books <br> 
           <a href="https://www.educastudio.com/category/riri-story-books">Klik </a>'.'Untuk Melanjutkan Ke Halaman Story Books';
    }

    public function songs(){
        echo '<center> <h2> Kolak - Kids Songs <br> 
           <a href="https://www.educastudio.com/category/kolak-kids-songs">Klik </a>'.'Untuk Melanjutkan Ke Halaman Kids Songs';
    }
}
