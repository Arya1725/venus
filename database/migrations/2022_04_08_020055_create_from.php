<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('form_pemesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipe_id');
            $table->foreign('tipe_id')->references('id')->on('tipe_ruangan');
            $table->date('tgl_checkin');
            $table->date('tgl_checkout');
            $table->integer('jumlah_kamar');
            $table->string('nama_pemesan');
            $table->string('email')->unique();
            $table->string('no_telepon');
            $table->string('nama_tamu');
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
        Schema::dropIfExists('from_pemesanan');
    }
}
