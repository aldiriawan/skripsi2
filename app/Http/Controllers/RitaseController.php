<?php

namespace App\Http\Controllers;

use App\Models\Ritase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rute;

class RitaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ritase::all();
        return view('admin.ritase.index', [
            'title' => 'Data Ritase',
            'ritase' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ritase.create', [
            'title' => 'Tambah Ritase Baru',
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ritase  $ritase
     * @return \Illuminate\Http\Response
     */
    public function show(Ritase $ritase)
    {
        return view('admin.ritase.show', [
            'ritase' => $ritase,
            'title' => 'Detail Ritase',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ritase  $ritase
     * @return \Illuminate\Http\Response
     */
    public function edit(Ritase $ritase)
    {
        return view('admin.ritase.edit', [
            'ritase' => $ritase,
            'title' => 'Edit Ritase',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ritase  $ritase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ritase $ritase)
    {
        $rules = [
            'kode_ritase' => 'required|numeric|unique:ao_ritase',
        ];

        $validatedData = $request->validate($rules);

        Ritase::where('id', $ritase->id)
            ->update($validatedData);

        return redirect('/admin/ritase')->with('success', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ritase  $ritase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ritase $ritase)
    {
        Ritase::destroy($ritase->id);
        return redirect('/admin/ritase')->with('success', 'Data Ritase berhasil dihapus');
    }
}
