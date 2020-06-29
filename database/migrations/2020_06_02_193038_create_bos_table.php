<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bos', function (Blueprint $table) {
            $table->id();
            $table->string('ae_name');
             $table->string('ae_code');
            $table->string('bo_code');
            $table->string('bo_name');
            $table->string('color');
            $table->string('zex')->nullable();
            $table->string('email')->nullable();
         
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
        Schema::dropIfExists('bos');
    }
}
