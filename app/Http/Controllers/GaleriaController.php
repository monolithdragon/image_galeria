<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriaController extends Controller
{  
    public function gallery()
    {
        $images =[
            '1.jpg' => 'Fák A Réten',
            '2.jpg' => 'Fával Borított Hegység',
            '3.jpg' => 'Tavaszi Virágok',
            '4.jpg' => 'Hegyi Tó',
            '5.jpg' => 'Kínai Erdő',
            '6.jpg' => 'Tó A Fehér Szikláknál',
            '7.jpg' => 'Thor Forrássa',
            '8.jpg' => 'Vízesés Az Erdőben',
            '9.jpg' => 'Vízesés'
        ];

        return view('home', ['images' => $images]);
    }
}
