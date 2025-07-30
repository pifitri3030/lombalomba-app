<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;

    // Kolom-kolom yang bisa diisi secara massal
    protected $fillable = [
        'judul',
        'deskripsi',
        'syarat',
        'tanggal_mulai',
        'tanggal_akhir'
    ];
}
