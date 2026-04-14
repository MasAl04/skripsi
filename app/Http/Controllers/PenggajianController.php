<?php

namespace App\Http\Controllers;

use App\Models\HasilKerja;
use App\Models\Kasbon;
use App\Models\Penggajian;
use Illuminate\Http\Request;

class PenggajianController extends Controller
{
    public function index()
    {
        $data = Penggajian::with('karyawan')->get();
        return view('gaji.index', compact('data'));
    }

    public function generate($karyawan_id)
    {
        $periode = date('Y-m');
        $bulan = date('m');
        $tahun = date('Y');

        // Ambil hasil kerja
        $hasil = HasilKerja::with('pekerjaan')
            ->where('karyawan_id', $karyawan_id)
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->get();

        // Validasi
        if ($hasil->isEmpty()) {
            return back()->with('error', 'Belum ada hasil kerja');
        }

        // Hitung total gaji
        $total_gaji = $hasil->sum(function ($h) {
            return $h->jumlah * $h->pekerjaan->upah_per_unit;
        });

        // Hitung kasbon
        $total_kasbon = Kasbon::where('karyawan_id', $karyawan_id)
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->sum('jumlah');

        // Hitung sisa
        $sisa = $total_gaji - $total_kasbon;

        if ($sisa < 0) {
            $sisa = 0;
        }

        // Simpan / update
        Penggajian::updateOrCreate(
            [
                'karyawan_id' => $karyawan_id,
                'periode' => $periode,
            ],
            [
                'total_gaji' => $total_gaji,
                'total_kasbon' => $total_kasbon,
                'sisa_gaji' => $sisa,
            ]
        );

        return redirect('/gaji')->with('success', 'Gaji berhasil dihitung');
    }
}