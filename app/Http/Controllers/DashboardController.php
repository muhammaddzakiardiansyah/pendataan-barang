<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Support\Facades\URL;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard/index', ['active' => 'Dashboard']);
    }

    public function databarang() {
        return view('dashboard/databarang', [
            'active' => 'Data Barang',
            'items' => Items::all()
        ]);
    }

    public function detaildatabarang(string $id) {
        $item = Items::find($id);

        return view('dashboard/detailbarang', ['active' => 'Detail Data Barang'])->with('item', $item);
    }
}
