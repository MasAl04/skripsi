<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penugasan extends Model
{
    protected $fillable = [
        'karyawan_id',
        'pekerjaan_id',
        'jumlah_target',
        'tanggal',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function hasilKerjas()
    {
        return $this->hasMany(HasilKerja::class);
    }
}
