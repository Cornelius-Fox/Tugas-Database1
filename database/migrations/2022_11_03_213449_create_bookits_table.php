<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookits', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai',255);
            $table->date('tanggal_lahir');
            $table->string('jabatan', 255);
            $table->string('divisi');
            $table->char('tanggal_masuk');
            $table->char('Cuti',0);
            $table->char('Aktif',1);
            $table->char('PHK',2);
            $table->char('Mengundurkan_Diri',3);
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
        Schema::dropIfExists('bookits');
    }
}
