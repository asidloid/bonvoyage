<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodmenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podmenu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pod')->nullable()->default(null);
            $table->string('name')->unique();
            $table->longText('stat')->nullable()->default(null);
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
        Schema::dropIfExists('podmenu');
    }
}
