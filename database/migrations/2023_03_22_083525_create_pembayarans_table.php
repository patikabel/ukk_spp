<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->integer('id_pembayaran');

            $table->unsignedBiginteger('id_petugas');
            $table->foreignKey('id_petugas')->references('id_petugas')->on('petugas')->onDelete('cascade')->onUpdate('cascade');

            $table->char('nisn', 10);
            $table->foreign('nisn')->references('nisn')->on('siswas')->onDelete('cascade')->onUpdate('cascade');

            $table->date('tgl_bayar');
            $table->string('bulan_dibayar', 8);
            $table->string('tahun_dibayar', 4);

            $table->unsignedBiginteger('id_spp');
            $table->foreign('id_spp')->references('id_spp')->on('spps')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('jumlah_bayar');

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
        Schema::dropIfExists('pembayarans');
    }
}
