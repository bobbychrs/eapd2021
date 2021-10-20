<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dashboard extends Model
{
    use HasFactory;
    public function allData()
    {
        return DB::table('master_wilayah')->where('kode_wilayah','=',4)->get();
    }
    public function detailData($kode_wilayah)
    {
        return DB::table('master_sektor')->where('kode_wilayah', $kode_wilayah)->get();
    }
}
