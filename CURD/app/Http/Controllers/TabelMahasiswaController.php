<?php

namespace App\Http\Controllers;

use App\Models\tabelMahasiswa;
use Illuminate\Http\Request;

class TabelMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tabelMahasiswa::all();
        return view('index',compact('data')) -> with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> except(['_token']);

        tabelMahasiswa::insert($data);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabelMahasiswa  $tabelMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(tabelMahasiswa $tabelMahasiswa, $id)
    {
        $data = tabelMahasiswa::findOrFail($id);

        return view('show')-> with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelMahasiswa  $tabelMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(tabelMahasiswa $tabelMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelMahasiswa  $tabelMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $item = tabelMahasiswa::findOrFail($id);
        $data = $request -> except(['_token']);
        $item -> update($data);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelMahasiswa  $tabelMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabelMahasiswa $tabelMahasiswa, $id)
    {
        $datahapus = tabelMahasiswa::findOrFail($id);
        $datahapus->delete();
        return redirect('/');
    }
}
