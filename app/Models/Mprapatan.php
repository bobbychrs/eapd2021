<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mprapatan extends Model
{
    public function allData()
    {
        return DB::table('master_pegawai')->where('kode_pos','>=',4.13)->where('kode_pos','<',4.14)->get();
    }
}
