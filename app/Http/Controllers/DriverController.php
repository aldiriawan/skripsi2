<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Driver::all();
        return view('admin.driver.index', [
            'title' => 'Data Driver',
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
        return view('admin.driver.create', [
            'title' => 'Tambah Driver Baru',
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
        $rules = [
            'nama_driver' => 'required|max:100|unique:ao_driver',
            'nik_driver' => 'required|numeric|digits:16|unique:ao_driver',
            'umur_driver' => 'required|numeric|min:20|max:70',
            'telepon_driver' => 'required|numeric|min:12',
            'alamat_driver' => 'required',
        ];

        $validatedData = $request->validate($rules, [
            'nama_driver.unique' => 'Nama Lengkap Driver tidak boleh sama dengan Driver lain',
            'nik_driver.unique' => 'NIK Driver tidak boleh sama dengan Driver lain',
            'nik_driver.digits' => 'NIK Driver minimal :digits digit',
            'umur_driver.required' => 'Umur Driver harus diisi',
            'umur_driver.numeric' => 'Umur Driver harus berupa angka',
            'umur_driver.min' => 'Umur Driver harus di atas :min tahun',
            'umur_driver.max' => 'Umur Driver harus di bawah :max tahun',
            'telepon_driver.required' => 'Telepon Driver harus diisi',
            'telepon_driver.numeric' => 'Telepon Driver harus berupa angka',
            'telepon_driver.min' => 'Telepon Driver minimal :min digit',
            'alamat_driver.required' => 'Alamat Driver harus diisi'
        ]);

        Driver::create($validatedData);

        return redirect('/admin/driver')->with('success', 'Data Driver berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        return view('admin.driver.show', [
            'driver' => $driver,
            'title' => 'Detail Driver',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('admin.driver.edit', [
            'driver' => $driver,
            'title' => 'Edit Driver',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $rules = [
            'umur_driver' => 'required|numeric|min:20|max:70',
            'telepon_driver' => 'required|numeric|min:12',
            'alamat_driver' => 'required',
        ];

        if ($request->nama_driver != $driver->nama_driver) {
            $rules['nama_driver'] = 'required|max:100|unique:ao_driver';
        }

        if ($request->nik_driver != $driver->nik_driver) {
            $rules['nik_driver'] = 'required|digits:16|unique:ao_driver';
        }

        $validatedData = $request->validate($rules, [
            'nama_driver.unique' => 'Nama Lengkap Driver tidak boleh sama dengan Driver lain',
            'nik_driver.unique' => 'NIK Driver tidak boleh sama dengan Driver lain',
            'nik_driver.digits' => 'NIK Driver minimal :digits digit',
            'umur_driver.required' => 'Umur Driver harus diisi',
            'umur_driver.numeric' => 'Umur Driver harus berupa angka',
            'umur_driver.min' => 'Umur Driver harus di atas :min tahun',
            'umur_driver.max' => 'Umur Driver harus di bawah :max tahun',
            'telepon_driver.required' => 'Telepon Driver harus diisi',
            'telepon_driver.numeric' => 'Telepon Driver harus berupa angka',
            'telepon_driver.min' => 'Telepon Driver minimal :min digit',
            'alamat_driver.required' => 'Alamat Driver harus diisi'
        ]);

        Driver::where('id', $driver->id)
            ->update($validatedData);

        return redirect('/admin/driver')->with('success', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        Driver::destroy($driver->id);
        return redirect('/admin/driver')->with('success', 'Data Driver berhasil dihapus');
    }
}
