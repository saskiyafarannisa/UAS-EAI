<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Resep extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_resep';
    public $timestamps = false;
    protected $guarded = ['id_resep'];
    public function penyedia(): HasOne
    {
        return $this->hasOne(Penyedia::class);
    }
}
