<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspirasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirasi', function (Blueprint $table) {
            $table->increments('id_aspirasi');
            $table->string('nama_aspirasi');
            $table->string('email_aspirasi');
            $table->string('no_telp_aspirasi');
            $table->text('alamat_aspirasi');
            $table->string('instansi_aspirasi');
            $table->text('isi_aspirasi');


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
        Schema::dropIfExists('aspirasi');
    }
}
