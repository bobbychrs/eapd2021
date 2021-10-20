<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_test', function (Blueprint $table) {
            $table->id();
            $table->string('NIP', 50);
            $table->string('NRK', 50);
            $table->string('phl', 5);
            $table->string('nama', 50);
            $table->string('jabatan_id', 50);
            $table->string('kode_pos', 15);
            $table->string('no_telepon', 50);
            $table->string('group_piket', 5);
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
        Schema::dropIfExists('pegawai_test');
    }
}
