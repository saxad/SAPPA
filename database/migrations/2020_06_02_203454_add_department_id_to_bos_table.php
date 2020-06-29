<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDepartmentIdToBosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bos', function (Blueprint $table) {

            $table->unsignedBigInteger('department_id')->default(1);
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bos', function (Blueprint $table) {
            //
        });
    }
}
