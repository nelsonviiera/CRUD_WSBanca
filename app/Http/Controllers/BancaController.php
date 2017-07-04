<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banca;

class BancaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bancas = Banca::orderBy('created_at', 'desc')->get();
        return view('banca.index', compact('bancas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'apresentador'=>'Required',
            'titulo'=>'Required',
            'palavras_chave'=>'Required',
            'membros_banca'=>'Required',
            'horario'=>'Required',
            'resumo'=>'Required'
        ]);

        $banca = $request->all();
        Banca::create($banca);
        return redirect('banca');
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
        $banca = Banca::find($id);
        return view('banca.edit', compact('banca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'apresentador'=>'Required',
            'titulo'=>'Required',
            'palavras_chave'=>'Required',
            'membros_banca'=>'Required',
            'horario'=>'Required',
            'resumo'=>'Required'
        ]);

        $banca = Banca::find($id);
        $bancaUpdate = $request->all();
        $banca->update($bancaUpdate);
        return redirect('banca');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banca = Banca::find($id);
        $banca->delete();
        return redirect('banca');
    }
}
