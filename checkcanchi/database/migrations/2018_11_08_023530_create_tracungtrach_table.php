<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracungtrachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracungtrach', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_battrach');
            $table->foreign('id_battrach')->references('id')->on('battrach');
            $table->unsignedInteger('id_cungtrai');
            $table->foreign('id_cungtrai')->references('id')->on('cungtrach');
            $table->unsignedInteger('id_cunggai');
            $table->foreign('id_cunggai')->references('id')->on('cungtrach');
            $table->string('ketqua');
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
        Schema::dropIfExists('tracungtrach');
    }
}
