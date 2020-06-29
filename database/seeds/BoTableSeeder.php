<?php

use Illuminate\Database\Seeder;
use App\Bo;

class BoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $base1 = new Bo();
        $base1->ae_name = "GRAND AJACCIO";
        $base1->ae_code = "GA";
        $base1->bo_name = "GRAND AJACCIO";
        $base1->bo_code = "GA";
        $base1->color = "#FF6666";
        $base1->zex = "ZEX HTA BOGA";
        $base1->email = "sei-corse-bo-gd-ajaccio@edf.fr";
        $base1->department_id = 1;
        $base1->save();

        $base2 = new Bo();
        $base2->ae_name = "PORTO-VECCHIO";
        $base2->ae_code = "PV";
        $base2->bo_name = "Extrême Sud";
        $base2->bo_code = "ES";
        $base2->color = "#CCCCFF";
        $base2->zex = "ZEX HTA BOES";
        $base2->email = "";
        $base2->department_id = 2;
        $base2->save();
    }
}
