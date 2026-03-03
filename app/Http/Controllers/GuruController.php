<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();
        return view('guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required',
            'nip' => 'required|unique:gurus',
            'mapel' => 'required',
            'no_hp' => 'nullable'
        ]);

        Guru::create($request->all());

        return redirect()->route('guru.index')
                         ->with('success', 'Data guru berhasil ditambahkan');
    }

    public function show(Guru $guru)
    {
        return view('guru.show', compact('guru'));
    }

    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama_guru' => 'required',
            'nip' => 'required|unique:gurus,nip,' . $guru->id,
            'mapel' => 'required',
            'no_hp' => 'nullable'
        ]);

        $guru->update($request->all());

        return redirect()->route('guru.index')
                         ->with('success', 'Data guru berhasil diupdate');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()->route('guru.index')
                         ->with('success', 'Data guru berhasil dihapus');
    }
}