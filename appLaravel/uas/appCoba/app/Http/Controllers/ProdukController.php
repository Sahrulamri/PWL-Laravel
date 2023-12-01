<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::All();
        return view('produk.index', compact('data'));
    }
    public function create()
    {
        return view('produk.create');
    }
    public function store(Request $request)
    {
        $data = new Produk;
        $data->nama = $request->nama;
        $data->harga = $request->harga;
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
    public function edit($id)
    {
        $data = Produk::find($id);
        return view('produk.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        //dd($produk->id);
        $model = Produk::find($id);
        $model->nama = $request->nama;
        $model->harga = $request->harga;
        $model->jml = $request->jml;
        $model->save();
        return redirect('produk');
    }
    public function show($id)
    {
        $data = Produk::find($id);
        return view('produk.show', compact('data'));
    }
    public function destroy($id)
    {
        $model = Produk::find($id);
        $model->delete();
        return redirect('produk');
    }
}