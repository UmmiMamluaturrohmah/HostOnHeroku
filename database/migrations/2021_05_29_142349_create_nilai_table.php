<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nilaiagama');
            $table->string('nilaimtk');
            $table->string('nilaiindo');
            $table->string('nilaieng');
            $table->string('nilaiipa');
            $table->string('nilaiips');
            $table->string('nilaipkn');
            $table->string('nilaiakhir');
            $table->string('grade');
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
        Schema::dropIfExists('nilai');
    }
}
