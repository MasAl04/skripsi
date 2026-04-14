<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = [
        'nama',
        'jabatan',
    ];

    // Relasi ke hasil kerja
    public function hasilKerjas()
    {
        return $this->hasMany(HasilKerja::class);
    }

    // Relasi ke kasbon
    public function kasbons()
    {
        return $this->hasMany(Kasbon::class);
    }

    // Relasi ke penggajian
    public function penggajians()
    {
        return $this->hasMany(Penggajian::class);
    }

    // Relasi ke penugasan (mandor)
    public function penugasans()
    {
        return $this->hasMany(Penugasan::class);
    }
}
