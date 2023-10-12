<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard/index', ['active' => 'Dashboard']);
    }

    public function databarang() {
        return view('dashboard/databarang', ['active' => 'Data Barang']);
    }
}
