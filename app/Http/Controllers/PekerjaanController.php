<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function index()
    {
        $pekerjaans = Pekerjaan::all();
        return view('pekerjaan.index', compact('pekerjaans'));
    }

    public function create()
    {
        return view('pekerjaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pekerjaan' => 'required',
            'upah_per_unit' => 'required|numeric',
        ]);

        Pekerjaan::create($request->all());
        return redirect('/pekerjaan');
    }

    public function edit($id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        return view('pekerjaan.edit', compact('pekerjaan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pekerjaan' => 'required',
            'upah_per_unit' => 'required|numeric',
        ]);

        $pekerjaan = Pekerjaan::findOrFail($id);
        $pekerjaan->update($request->all());

        return redirect('/pekerjaan');
    }

    public function destroy($id)
    {
        Pekerjaan::destroy($id);
        return redirect('/pekerjaan');
    }
}
