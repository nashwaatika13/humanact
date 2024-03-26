<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $donasi = Donasi::paginate(10);
        return view('admin/donasi/donasi', compact('donasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donasi', [
            "title" => "Donasi"
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
        // dd($request->all());
        $donasi = Donasi ::create($request->all());
        $donasi -> save();

        return redirect()->route('donasi.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('admin/donasi/edit', compact('donasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $donasi = Donasi::findOrFail($id);
        $donasi->update($request->all());
        $donasi->save();

        return redirect()->route('donasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donasi = Donasi::findOrFail($id);
        $donasi->delete();

        return redirect()->route('donasi.index');
    }
}
