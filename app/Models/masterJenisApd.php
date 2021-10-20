<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class masterJenisApd extends Model
{
    protected $table = 'master_jenis_apd';
    public function allData()
    {
        return DB::table('master_jenis_apd')->get();
    }
}
