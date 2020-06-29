<?php

use Illuminate\Database\Seeder;
use App\Poste;


class PosteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $poste1 = new Poste();
        $poste1->name = "CALDANICCIA";
        $poste1->code_gdo = "CALDA";
        $poste1->name_gari = "CALDANICCIA";
        $poste1->color = "#FF6666";
        $poste1->schema = " schema_calda";
        $poste1->bo_id = 1;
        $poste1->save();

        $poste2 = new Poste();
        $poste2->name = "ASPRETTO";
        $poste2->code_gdo = "ASPRE";
        $poste2->name_gari = "ASPRETTO";
        $poste2->color = "#FF6666";
        $poste2->schema = "schema_aspretto";
        $poste2->bo_id = 1;
        $poste2->save();

        $poste3 = new Poste();
        $poste3->name = "BONIFACIO";
        $poste3->code_gdo = "BONIF";
        $poste3->name_gari = "BONIFACIO";
        $poste3->color = "#CCCCFF";
        $poste3->schema = "schema_bonif";
        $poste3->bo_id = 2;
        $poste3->save();

                $poste4 = new Poste();
        $poste4->name = "PORTO-VECCHIO";
        $poste4->code_gdo = "PORTO";
        $poste4->name_gari = "PORTO VECCHIO";
        $poste4->color = "#CCCCFF";
        $poste4->schema = "schema_porto";
        $poste4->bo_id = 2;
        $poste4->save();
    }
}
