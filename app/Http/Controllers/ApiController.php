<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexjual()
    {
        return view('menucontent/penjualan');
    }

    public function indexbayar()
    {
        return view('menucontent/pembayaran');
    }

    public function indexpiutang()
    {
        return view('menucontent/piutang');
    }
}
