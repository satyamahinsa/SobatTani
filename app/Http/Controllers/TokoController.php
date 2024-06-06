<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        $barangs = Toko::all();
        return view('toko', ['title' => 'Toko', 'barangs' => $barangs]);
    }
}
