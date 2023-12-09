<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_peserta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nama', 255);
            $table->binary('foto')->nullable(); // Kolom untuk upload foto
            $table->string('email', 100)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->string('nomor_telepon', 20)->nullable();
            $table->enum('jenis_kelamin', ['wanita', 'pria'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_peserta');
    }
}

