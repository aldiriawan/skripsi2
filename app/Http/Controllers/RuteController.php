<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rute::all();
        return view('admin.rute.index', [
            'title' => 'Data Rute',
            'driver' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rute.create', [
            'title' => 'Tambah Rute Baru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_rute' => 'required|max:10|unique:ao_rute',
            'lokasi_awal' => 'required',
            'lokasi_tujuan' => 'required',
            'jarak_km' => 'required|numeric',
        ]);

        Rute::create($validatedData);

        return redirect('/admin/rute')->with('success', 'Data Rute berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rute  $rute
     * @return \Illuminate\Http\Response
     */
    public function show(Rute $rute)
    {
        return view('admin.rute.show', [
            'rute' => $rute,
            'title' => 'Detail Rute',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rute  $rute
     * @return \Illuminate\Http\Response
     */
    public function edit(Rute $rute)
    {
        return view('admin.rute.edit', [
            'rute' => $rute,
            'title' => 'Edit Rute',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rute  $rute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rute $rute)
    {
        $rules = [
            'lokasi_awal' => 'required',
            'lokasi_tujuan' => 'required',
            'jarak_km' => 'required|numeric',
        ];

        if ($request->nama_rute != $rute->nama_rute) {
            $rules['nama_rute'] = 'required|max:10|unique:ao_rute';
        }

        $validatedData = $request->validate($rules);

        Rute::where('id', $rute->id)
            ->update($validatedData);

        return redirect('/admin/rute')->with('success', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rute  $rute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rute $rute)
    {
        Rute::destroy($rute->id);
        return redirect('/admin/rute')->with('success', 'Data Rute berhasil dihapus');
    }
}
