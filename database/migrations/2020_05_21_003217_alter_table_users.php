<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('users', function (Blueprint $table) {
        $table->string('job')->nullable()->default(null);
        $table->string('hierarchy')->nullable()->default(null);
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                if (Schema::hasColumn('users', 'job'))

        {

            Schema::table('users', function (Blueprint $table)

            {

                $table->dropColumn('job');

            });


        }

                if (Schema::hasColumn('users', 'hierarchy'))

        {

            Schema::table('users', function (Blueprint $table)

            {

                $table->dropColumn('hierarchy');

            });


        }
        
        // $table->dropColumn('job');
        // $table->dropColumn('hierarchy');
    }
}
