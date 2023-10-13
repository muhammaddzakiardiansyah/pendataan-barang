<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/tambahdatabarang', ['active' => 'Tambah Barang']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'item_name' => 'required',
            'status' => 'required',
            'condition' => 'required',
            'jumlah' => 'required',
            'other_equipment' => 'required'
        ]);

        Items::create($input);
        return redirect('/databarang')->with('success', 'Barang berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Items::find($id);
        return view('dashboard/editdatabarang', ['active' => 'Edit Data Barang'])->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Items::find($id);
        $input = $request->validate([
            'item_name' => 'required',
            'status' => 'required',
            'condition' => 'required',
            'jumlah' => 'required',
            'other_equipment' => 'required'
        ]);
        $item->update($input);
        return redirect('/detaildatabarang/'.$item->id)->with('success', 'Berhasil mengubah data barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Items::find($id);
        Items::destroy($item);
        return redirect('/databarang')->with('success', 'Berhasil menghapus data barang');
    }
}
