<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penyedia extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_obat_disiapkan';
    public $timestamps = false;
    protected $guarded = ['id_obat_disiapkan'];
    public function resep(): BelongsTo
    {
        return $this->belongsTo(Resep::class, 'id_resep', 'id_resep');
    }
}
