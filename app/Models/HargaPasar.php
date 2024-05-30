<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaPasar extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'harga', 'deskripsi', 'persentase', 'kategori', 'gambar_komoditas'];
}
