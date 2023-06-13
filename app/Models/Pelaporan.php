<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelaporan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pelaporan';
    public $timestamps = false;
    protected $guarded = ['id_pelaporan'];
    public function obat(): BelongsTo
    {
        return $this->belongsTo(Obat::class, 'id_obat', 'id_obat');
    }
}
