<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Obat extends Model
{
    use HasFactory;
    protected $primaryKey = "id_obat";
    public $timestamps = false;
    protected $fillable = ['nama_obat', 'deskripsi_obat', 'kadaluarsa', 'tanggal_masuk', 'tanggal_keluar'];
    public function pelaporan(): HasMany
    {
        return $this->hasMany(Pelaporan::class);
    }
}
