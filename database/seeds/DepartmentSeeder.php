<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ajaccio = new Department();

        $ajaccio->department_name = "Corse du sud";
        $ajaccio->department_code = "2A";
        $ajaccio->centre_code = 257;
        $ajaccio->save();


        $bastia = new Department();

        $bastia->department_name = "Haute Corse";
        $bastia->department_code = "2B";
        $bastia->centre_code = 257;
        $bastia->save();
    }
}
