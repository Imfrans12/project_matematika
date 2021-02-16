<?php

namespace App\Http\Controllers;

use App\Tb_materi;
use Illuminate\Http\Request;

class Tb_materiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trigonometris = Tb_materi::latest()->paginate(5);
    
        return view('trigonometri.index',compact('trigonometris'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Tb_materi  $tb_materi
     * @return \Illuminate\Http\Response
     */
    public function show(Tb_materi $tb_materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tb_materi  $tb_materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Tb_materi $tb_materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tb_materi  $tb_materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tb_materi $tb_materi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tb_materi  $tb_materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tb_materi $tb_materi)
    {
        //
    }
}
