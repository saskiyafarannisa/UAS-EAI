<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_obat', 'nama_obat', 'deskripsi_obat', 'kadaluarsa', 'tanggal_masuk', 'tanggal keluar'
    ];
}
