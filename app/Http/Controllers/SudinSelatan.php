<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\SudinSelatanModel;

class SudinSelatan extends Controller
{
    public function index()
    {
        return view('AdminWilayah.sudinselatan');
    }
}
