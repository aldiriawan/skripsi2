<?php

namespace App\Http\Controllers;

use App\Models\Codriver;
use Illuminate\Http\Request;

class CodriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Codriver::all();
        return view('admin.codriver.index', [
            'title' => 'Data Co-Driver',
            'codriver' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.codriver.create', [
            'title' => 'Tambah Co-Driver Baru',
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
            'nama_codriver' => 'required|max:100|unique:ao_codriver',
            'nik_codriver' => 'required|numeric|unique:ao_codriver',
            'umur_codriver' => 'required|numeric|min:20|max:70',
            'telepon_codriver' => 'required|numeric',
            'alamat_codriver' => 'required',
        ]);

        Codriver::create($validatedData);

        return redirect('/admin/codriver')->with('success', 'Data Co-Driver berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\codriver  $codriver
     * @return \Illuminate\Http\Response
     */
    public function show(Codriver $codriver)
    {
        return view('admin.codriver.show', [
            'codriver' => $codriver,
            'title' => 'Detail Co-Driver',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Codriver  $codriver
     * @return \Illuminate\Http\Response
     */
    public function edit(Codriver $codriver)
    {
        return view('admin.codriver.edit', [
            'codriver' => $codriver,
            'title' => 'Edit Co-Driver',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Codriver  $codriver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Codriver $codriver)
    {
        $rules = [
            'umur_codriver' => 'required|numeric|min:20|max:70',
            'telepon_codriver' => 'required|numeric',
            'alamat_codriver' => 'required',
        ];

        if ($request->nama_codriver != $codriver->nama_codriver) {
            $rules['nama_codriver'] = 'required|max:100|unique:ao_codriver';
        }

        if ($request->nik_codriver != $codriver->nik_codriver) {
            $rules['nik_codriver'] = 'required|unique:ao_codriver';
        }

        $validatedData = $request->validate($rules);

        Codriver::where('id', $codriver->id)
            ->update($validatedData);

        return redirect('/admin/codriver')->with('success', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Codriver  $codriver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Codriver $codriver)
    {
        Codriver::destroy($codriver->id);
        return redirect('/admin/codriver')->with('success', 'Data Co-Driver berhasil dihapus');
    }
}
