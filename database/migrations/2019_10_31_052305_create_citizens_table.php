<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik', 20)->unique();
            $table->string('nama', 150);
            $table->string('kelamin', 20);
            $table->string('tempatlahir', 100);
            $table->string('tgllahir', 100);
            $table->string('agama', 50);
            $table->string('alamat', 190);
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
        Schema::dropIfExists('wargas');
    }
}
