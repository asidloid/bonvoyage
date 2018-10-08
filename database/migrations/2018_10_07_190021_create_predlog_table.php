<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predlog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->longText('stat')->nullable()->default(null);
            $table->string('imag')->nullable()->default(null);
            $table->string('galer')->nullable()->default(null);
            $table->string('hidden')->nullable()->default(null);
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
        Schema::dropIfExists('predlog');
    }
}
