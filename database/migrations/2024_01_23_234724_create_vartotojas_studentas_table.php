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
        Schema::connection('mongodb')->create('vartotojas_studentas', function (Blueprint $collection) {
            $collection->string('vardas');
            $collection->string('pavarde');
            $collection->string('el_pastas');
            $collection->string('slaptazodis');
            $collection->string('telefono_numeris')->nullable();
            $collection->string('aukstoji_mokykla')->nullable();
            $collection->string('fakultetas')->nullable();
            $collection->string('specialybe')->nullable();
            $collection->integer('kursas')->nullable();
            $collection->string('miestas')->nullable();
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vartotojas_studentas');
    }
};
