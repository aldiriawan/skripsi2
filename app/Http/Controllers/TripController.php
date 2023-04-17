<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Armada;
use App\Models\Driver;
use App\Models\Codriver;
use App\Models\Ritase;
use App\Models\Rute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Trip::select('tanggal_trip', DB::raw('MAX(created_at) as created_at'))
            ->groupBy('tanggal_trip')
            ->orderBy('tanggal_trip', 'desc')
            ->get();

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
            'rutes' => Rute::all(),
            'ritases' => Ritase::all(),
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
            'id_rute' => 'required',
            'id_ritase' => 'required',
            'id_driver' => 'required',
            'id_codriver' => 'required',
            'jumlah_penumpang_admin' => 'required|numeric',
            'catatan' => ''
        ]);

        Trip::create($validatedData);

        return redirect('/admin')->with('success', 'Laporan Admin Baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip, $tanggal_trip)
    {
        $data = Trip::where('tanggal_trip', $tanggal_trip)->get();
        return view('trip.show', [
            'trip' => $data,
            'title' => 'Detail Trip',
            'tanggal_trip' => $tanggal_trip
        ]);

        // $data = Trip::all();
        // return view('trip.show', [
        //     'trip' => $data,
        //     'title' => 'Detail Trip',
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        return view('trip.edit', [
            'trip' => $trip,
            'title' => 'Edit Trip',
            'armadas' => Armada::all(),
            'rutes' => Rute::all(),
            'ritases' => Ritase::all(),
            'drivers' => Driver::all(),
            'codrivers' => Codriver::all(),
        ]);
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
        $rules = [
            'tanggal_trip' => 'required',
            'id_armada' => 'required',
            'id_rute' => 'required',
            'id_ritase' => 'required',
            'id_driver' => 'required',
            'id_codriver' => 'required',
            'jumlah_penumpang_admin' => 'required|numeric',
            'catatan' => ''
        ];

        $validatedData = $request->validate($rules);

        Trip::where('id', $trip->id)
            ->update($validatedData);

        return redirect('/admin')->with('success', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        Trip::destroy($trip->id);
        return redirect('/admin')->with('success', 'Laporan Admin berhasil dihapus');
    }
}
