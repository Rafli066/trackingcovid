<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_negara');
            $table->foreign('id_negara')->references('id')
                  ->on('negaras')->onDelete('cascade');
            $table->string('jpositif');
            $table->string('jmeninggal');
            $table->string('jsembuh');
            $table->date('tanggal');
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
        Schema::dropIfExists('kasuses');
    }
}
