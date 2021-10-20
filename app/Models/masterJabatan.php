<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class masterJabatan extends Model
{
    protected $table = 'master_jabatan';
    public function allData()
    {
        return DB::table('master_jabatan')->get();
    }
}
