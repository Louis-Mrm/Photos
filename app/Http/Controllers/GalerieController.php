<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalerieController extends Controller
{
    function afficherGalerie() {
        return view('galerie');
    }
}
