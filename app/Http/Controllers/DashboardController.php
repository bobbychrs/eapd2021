<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->Dashboard = new Dashboard();
    }

    public function index()
    {
        $data = [
            'master_wilayah'=> $this->Dashboard->allData(),
        ];
        return view('AdminWilayah.dashboard_aw', $data);
    }

    // public function detail($kode_dinas)
    // {
    //     $data = [
    //         'master_sektor'=> $this->Dashboard->detailData($kode_dinas),
    //     ];
    //     return view('AdminWilayah.sudinselatan', $data);
    // }
}
