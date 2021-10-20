<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verifikasi;

class VerifikasiController extends Controller
{
    //
    public function __construct()
    {
        $this->Verifikasi = new Verifikasi();
    }

    public function index()
    {
        $data = [
            'verifikasi'=> $this->Verifikasi->allData(),
        ];
        return view('AdminWilayah.verifikasi', $data);
    }
}
