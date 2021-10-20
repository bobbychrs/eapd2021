<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('AdminWilayah.profile_aw');
    }
}
