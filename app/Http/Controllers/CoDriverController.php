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
        $rules = [
            'nama_codriver' => 'required|max:100|unique:ao_codriver',
            'nik_codriver' => 'required|numeric|digits:16|unique:ao_codriver',
            'umur_codriver' => 'required|numeric|min:20|max:70',
            'telepon_codriver' => 'required|numeric|min:12',
            'alamat_codriver' => 'required',
        ];

        $validatedData = $request->validate($rules, [
            'nama_codriver.unique' => 'Nama Lengkap Codriver tidak boleh sama dengan codriver lain',
            'nik_codriver.unique' => 'NIK Codriver tidak boleh sama dengan codriver lain',
            'nik_codriver.digits' => 'NIK Codriver harus :digits digit',
            'umur_codriver.required' => 'Umur Codriver harus diisi',
            'umur_codriver.numeric' => 'Umur Codriver harus berupa angka',
            'umur_codriver.min' => 'Umur Codriver harus di atas 20 tahun',
            'umur_codriver.max' => 'Umur Codriver harus di bawah 70 tahun',
            'telepon_codriver.required' => 'Telepon Codriver harus diisi',
            'telepon_codriver.numeric' => 'Telepon Codriver harus berupa angka',
            'telepon_codriver.min' => 'Telepon Codriver minimal :min digit',
            'alamat_codriver.required' => 'Alamat Codriver harus diisi'
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
            'telepon_codriver' => 'required|numeric|min:12',
            'alamat_codriver' => 'required',
        ];

        if ($request->nama_codriver != $codriver->nama_codriver) {
            $rules['nama_codriver'] = 'required|max:100|unique:ao_codriver,nama_codriver,' . $codriver->id;
        }

        if ($request->nik_codriver != $codriver->nik_codriver) {
            $rules['nik_codriver'] = 'required|digits:16|unique:ao_codriver,nik_codriver,' . $codriver->id;
        }

        $validatedData = $request->validate($rules, [
            'nama_codriver.unique' => 'Nama Lengkap Codriver tidak boleh sama dengan codriver lain',
            'nik_codriver.unique' => 'NIK Codriver tidak boleh sama dengan codriver lain',
            'nik_codriver.digits' => 'NIK Codriver minimal :digits digit',
            'umur_codriver.required' => 'Umur Codriver harus diisi',
            'umur_codriver.numeric' => 'Umur Codriver harus berupa angka',
            'umur_codriver.min' => 'Umur Codriver harus di atas 20 tahun',
            'umur_codriver.max' => 'Umur Codriver harus di bawah 70 tahun',
            'telepon_codriver.required' => 'Telepon Codriver harus diisi',
            'telepon_codriver.numeric' => 'Telepon Codriver harus berupa angka',
            'telepon_codriver.min' => 'Telepon Codriver minimal :min digit',
            'alamat_codriver.required' => 'Alamat Codriver harus diisi'
        ]);

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
