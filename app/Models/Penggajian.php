<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    protected $fillable = [
        'karyawan_id',
        'periode',
        'total_gaji',
        'total_kasbon',
        'sisa_gaji',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
