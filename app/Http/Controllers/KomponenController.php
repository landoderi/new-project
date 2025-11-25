<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Komponen;
use Illuminate\Http\Request;

class KomponenController extends Controller
{
    public function index()
    {
        $komponen = Komponen::latest()->paginate(5)->withQueryString();
        return view('komponen.index', compact('komponen'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('komponen.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_komponen' => 'required|min:5',
            'harga'         => 'required',
            'stok'          => 'required',
            'id_kategori'   => 'nullable|exists:kategoris,id'
        ]);

        $komponen = new Komponen();
        $komponen->nama_komponen = $request->nama_komponen;
        $komponen->harga = $request->harga;
        $komponen->stok = $request->stok;
        $komponen->id_kategori = $request->id_kategori ?? 1;
        $komponen->save();

        return redirect()->route('komponen.index')->with('success', 'Data berhasil disimpan');
    }

    public function show($id)
    {
        $komponen = Komponen::findOrFail($id);
        return view('komponen.show', compact('komponen'));
    }

    public function edit($id)
    {
        $komponen = Komponen::findOrFail($id);
        $kategori = Kategori::all();
        return view('komponen.edit', compact('komponen', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_komponen' => 'required|min:5',
            'harga'         => 'required',
            'stok'          => 'required',
            'id_kategori'   => 'nullable|exists:kategoris,id'
        ]);

        $komponen = Komponen::findOrFail($id);
        $komponen->nama_komponen = $request->nama_komponen;
        $komponen->harga = $request->harga;
        $komponen->stok = $request->stok;
        $komponen->id_kategori = $request->id_kategori ?? 1;
        $komponen->save();

        return redirect()->route('komponen.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $komponen = Komponen::findOrFail($id);
        $komponen->delete();
        return redirect()->route('komponen.index')->with('success', 'Data berhasil dihapus');
    }
}
