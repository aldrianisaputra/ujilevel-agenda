<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('namaguru');
            $table->string('matapelajaran');
            $table->string('materipelajaran');
            $table->enum('darijampelajaran', ['jam ke-1','jam ke-2','jam ke-3','jam ke-4']);
            $table->enum('sampejampelajaran', ['jam ke-1','jam ke-2','jam ke-3','jam ke-4']);
            $table->text('siswaabsen');
            $table->string('namakelas');
            $table->enum('metodepelajaran', ['offline','online']);
            $table->string('linkpembelajaran');
            $table->string('dokumentasi');
            $table->enum('keterangan', ['hadir','tidakhadir']);
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
        Schema::dropIfExists('agendas');
    }
};
