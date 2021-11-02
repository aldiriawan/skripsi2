<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use App\Models\TipeArmada;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Armada::all();
        return view('admin.armada.index', [
            'title' => 'Data Armada',
            'armadas' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.armada.create', [
            'title' => 'Tambah Data Armada',
            'tipe_armadas' => TipeArmada::all(),
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
            'kode_armada' => 'required|max:255|unique:ao_armada',
            'id_tipe_armada' => 'required',
            'merek_armada' => 'required|max:255'
        ]);

        Armada::create($validatedData);

        return redirect('/admin/armada')->with('success', 'Data Armada berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function show(Armada $armada)
    {
        return view('admin.armada.show', [
            'armada' => $armada,
            'title' => 'Detail Armada',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function edit(Armada $armada)
    {
        return view('admin.armada.edit', [
            'armada' => $armada,
            'title' => 'Edit Armada',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Armada $armada)
    {
        $rules = [
            'kode_armada' => 'required|max:255|unique:ao_armada',
            'merek_armada' => 'required|max:255',
            'tipe_armada' => 'required'
        ];

        if ($request->kode_armada != $armada->kode_armada) {
            $rules['kode_armada'] = 'required|max:255|unique:ao_armada';
        }

        $validatedData = $request->validate($rules);

        Armada::where('id', $armada->id)
            ->update($validatedData);

        return redirect('/admin/armada')->with('success', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Armada $armada)
    {
        Armada::destroy($armada->id);
        return redirect('/admin/armada')->with('success', 'Data Armada berhasil dihapus');
    }
}
