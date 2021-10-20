<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class masterPos extends Model
{
    protected $table = 'master_pos';
    public function allData()
    {
        return DB::table('master_pos')->get();
    }
}
