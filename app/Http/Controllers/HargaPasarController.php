<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HargaPasar;
use Illuminate\Http\Request;

class HargaPasarController extends Controller
{
    public function index()
    {
        $komoditases = HargaPasar::all();
        return view('harga-pasar', ['title' => 'Harga Pasar', 'komoditases' => $komoditases]);
    }
}
