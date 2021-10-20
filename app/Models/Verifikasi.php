<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Verifikasi extends Model
{
    use HasFactory;
    public function allData()
    {
        return DB::table('apd')
        ->leftJoin('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.id_mj')
        ->leftJoin('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.id_mk')
        ->leftJoin('master_status', 'master_status.id_stat', '=', 'apd.status_verifikasi')
        // ->where('apd.nrk', $nrk)
        ->get();
    }
}
