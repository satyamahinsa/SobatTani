<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KoordinatTanah;
use App\Http\Controllers\Controller;

class TitikKesuburanTanahController extends Controller
{
    public function index()
    {
        $koordinats = KoordinatTanah::all();
        return view('titik-kesuburan-tanah', ['title' => 'Titik Kesuburan Tanah', 'koordinats' => $koordinats]);
    }
}
