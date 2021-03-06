<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code_gdo');
            $table->string('name_gari');
            $table->string('color')->nullable();
            $table->string('schema');

            $table->unsignedBigInteger('bo_id')->default(1);
            $table->foreign('bo_id')->references('id')->on('bos')->onDelete('cascade');

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
        Schema::dropIfExists('postes');
    }
}
