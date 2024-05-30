<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KursusController extends Controller
{
    public function index()
    {
        $kursuses = Kursus::all();
        return view('kursus', ['title' => 'Kursus', 'kursuses' => $kursuses]);
    }
}
