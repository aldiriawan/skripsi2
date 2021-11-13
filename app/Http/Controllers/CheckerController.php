<?php

namespace App\Http\Controllers;

use App\Models\Checker;
use App\Models\Armada;
use App\Models\Driver;
use App\Models\Codriver;
use App\Models\Trip;
use Illuminate\Http\Request;

class CheckerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Trip::all();
        return view('checker.index', [
            'title' => 'Laporan Checker',
            'active' => 'checker',
            'trip' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('checker.create', [
            'title' => 'Tambah Laporan Checker',
            'trips' => Trip::all(),
            'armadas' => Armada::all(),
            'drivers' => Driver::all(),
            'codrivers' => Codriver::all()
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
            'jumlah_penumpang_checker' => 'required|numeric',
            'jumlah_minus' => 'required|numeric',
            'gambar_bukti_minus' => ''

        ]);

        Trip::create($validatedData);

        return redirect('/checker')->with('success', 'Laporan Checker Baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checker  $checker
     * @return \Illuminate\Http\Response
     */
    public function show(Checker $checker)
    {
        $data = Trip::all();
        return view('trip.show', [
            'trip' => $data,
            'title' => 'Detail Trip',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checker  $checker
     * @return \Illuminate\Http\Response
     */
    public function edit(Checker $checker)
    {
        return view('trip.edit', [
            'checker' => $checker,
            'title' => 'Edit Trip',
            'armadas' => Armada::all(),
            'drivers' => Driver::all(),
            'codrivers' => Codriver::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checker  $checker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checker $checker)
    {
        $rules = [
            'jumlah_penumpang_checker' => 'required|numeric',
            'jumlah_minus' => 'required|numeric',
            'gambar_bukti_minus' => ''
        ];

        $validatedData = $request->validate($rules);

        Trip::where('id', $checker->id)
            ->update($validatedData);

        return redirect('/checker')->with('success', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checker  $checker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checker $checker)
    {
        Trip::destroy($checker->id);
        return redirect('/admin')->with('success', 'Laporan Checker berhasil dihapus');
    }
}
