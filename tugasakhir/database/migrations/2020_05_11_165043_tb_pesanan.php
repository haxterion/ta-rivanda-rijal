<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbPesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pesanan', function (Blueprint $table) {
            
            $table->bigIncrements('id');
			$table->integer('id_user', 10)->nullable();
			$table->string('acara', 255)->nullable();
			$table->date('tanggal')->nullable();
			$table->string('lokasi', 255)->nullable();
			$table->text('catatan')->nullable();
			$table->integer('id_paket', 10)->nullable();
			$table->string('konfirmasi', 255)->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pesanan');
    }
}
