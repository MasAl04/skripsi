<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $fillable = [
        'nama_pekerjaan',
        'upah_per_unit',
    ];

    // Relasi ke hasil kerja
    public function hasilKerjas()
    {
        return $this->hasMany(HasilKerja::class);
    }
}
