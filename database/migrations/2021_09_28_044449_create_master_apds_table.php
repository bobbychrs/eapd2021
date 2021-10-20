<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterApdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_apd', function (Blueprint $table) {
            $table->id_ma();
            $table->string('jenis_apd',50);
            $table->string('merk',50);
            $table->string('ukuran',50);
            $table->string('foto',50);
            $table->string('tahun',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_apd');
    }
}
