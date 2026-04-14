<?php

namespace App\Http\Controllers;

use App\Models\HasilKerja;
use App\Models\Karyawan;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class HasilKerjaController extends Controller
{
    public function index()
    {
        $data = HasilKerja::with(['karyawan', 'pekerjaan'])->get();
        return view('hasil.index', compact('data'));
    }

    public function create()
    {
        $karyawans = Karyawan::all();
        $pekerjaans = Pekerjaan::all();

        return view('hasil.create', compact('karyawans', 'pekerjaans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required',
            'pekerjaan_id' => 'required',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required',
        ]);

        HasilKerja::create($request->all());

        return redirect('/hasil');
    }
}