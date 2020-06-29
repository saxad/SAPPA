<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_gari');
            $table->string('name_sitr');
            $table->string('code_sig');
            $table->string('schema');
            $table->integer('voltage');
            $table->string('comment');
            $table->unsignedBigInteger('poste_id')->default(1);
            $table->foreign('poste_id')->references('id')->on('postes')->onDelete('cascade');
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
        Schema::dropIfExists('departs');
    }
}
