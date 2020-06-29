<?php

use Illuminate\Database\Seeder;
use App\Tools;

class ToolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tool1 = new Tools();
        $tool1->name = 'Gari';
        $tool1->description = 'lorem ipsum';
        $tool1->url = 'www.google.com';
        $tool1->category_id = '1';
        $tool1->save();

        $tool2 = new Tools();
        $tool2->name = 'Lulu';
        $tool2->description = 'lorem ipsum';
        $tool2->url = 'www.google.com';
        $tool2->category_id = '2';
        $tool2->save();

        $tool3 = new Tools();
        $tool3->name = 'Astreinte';
        $tool3->description = 'lorem ipsum';
        $tool3->url = 'www.google.com';
        $tool3->category_id = '2';
        $tool3->save();

        $tool3 = new Tools();
        $tool3->name = 'Etareso';
        $tool3->description = 'lorem ipsum';
        $tool3->url = 'www.google.com';
        $tool3->category_id = '1';
        $tool3->save();        

    }
}
