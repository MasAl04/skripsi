<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kasbon extends Model
{
    protected $fillable = [
        'karyawan_id',
        'jumlah',
        'tanggal',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
