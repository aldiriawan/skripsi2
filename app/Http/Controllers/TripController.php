<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Armada;
use App\Models\Driver;
use App\Models\Codriver;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Trip::all();
        return view('trip.index', [
            'title' => 'Laporan Admin',
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
        return view('trip.create', [
            'title' => 'Tambah Laporan Admin',
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
            'tanggal_trip' => 'required',
            'id_armada' => 'required',
            'rute' => 'required',
            'id_driver' => 'required',
            'id_codriver' => 'required',
            'jumlah_penumpang_admin' => 'required|numeric'
        ]);

        $validatedData['id_user'] = auth()->user()->id;

        Trip::create($validatedData);

        return redirect('/admin')->with('success', 'Laporan Admin Baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
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
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
