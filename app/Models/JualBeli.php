<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JualBeli extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'harga', 'penilaian', 'deskripsi'];
}
