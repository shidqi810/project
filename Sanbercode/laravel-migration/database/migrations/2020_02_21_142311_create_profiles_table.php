<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap');
            $table->string('pendidikan');
            $table->string('pengalaman');
            $table->string('cv');
            $table->integer('telp');
            $table->string('alamat');
            $table->string('email');
            $table->string('foto');
            $table->string('status_bekerja');
            $table->string('status_project');
            $table->string('preferensi_kerja');
            $table->string('preferensi_gaji');
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
        Schema::dropIfExists('profiles');
    }
}
