<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::All();
        return view('produk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Produk;
        $data->nama = $request->nama;
        $data->hrg = $request->hrg;
        $data->jml = $request->jml;
        $data->save();
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Produk::find($id);
        return view('produk.edit', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //dd($produk->id);
        $model = Produk::find($id);
        $model->nama = $request->nama;
        $model->hrg = $request->hrg;
        $model->jml = $request->jml;
        $model->save();
        return redirect('produk');
    }


    public function show($id)
    {
        $data = Produk::find($id);
        return view('produk.show', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Produk::find($id);
        $model->delete();
        return redirect('produk');
    }
}
