<?php

use Illuminate\Database\Seeder;
use App\Categories;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new Categories();
        $category1->name= 'outils acr';
        $category1->save();

        $category2 = new Categories();
        $category2->name= 'outils acr2';
        $category2->save();

    }
}
