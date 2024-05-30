<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JualBeli;
use Illuminate\Http\Request;

class JualBeliController extends Controller
{
    public function index()
    {
        $barangs = JualBeli::all();
        return view('jual-beli', ['title' => 'Jual Beli', 'barangs' => $barangs]);
    }
}
