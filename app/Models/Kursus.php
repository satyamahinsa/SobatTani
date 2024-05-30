<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'slug', 'penulis', 'profesi_penulis', 'kategori', 'deskripsi', 'gambar_kursus', 'gambar_penulis', 'link_video'];
}
