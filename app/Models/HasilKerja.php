<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilKerja extends Model
{
     protected $fillable = [
        'karyawan_id',
        'pekerjaan_id',
        'penugasan_id',
        'jumlah',
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

    public function penugasan()
    {
        return $this->belongsTo(Penugasan::class);
    }
}
