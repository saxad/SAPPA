<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();

        
        $user1->firstname = "Laetitia THOMAS";
        $user1->nni = "XXXXXX";
        $user1->email = "Laetitia.thomas@edf.fr" ;
        $user1->phone = "XXXXXXXX";
        $user1->password = "123456789";
        $user1->job = "Chef du GR DELCO";
        $user1->hierarchy = "GR DELCO";
        $user1->picture = "img/user/Laetitia_THOMAS.jpg";
        
        $user1->save();

        $user2 = new User();

        
        $user2->firstname = "Dominique SANGUINETTI";
        $user2->nni = "XXXXXX";
        $user2->email = "dominique.sanguinetti@edf.fr" ;
        $user2->phone = "XXXXXXXX";
        $user2->password = "123456789";
        $user2->job = "Assistant du GR DELCO";
        $user2->hierarchy = "GR DELCO";
        $user2->picture = "img/user/Dominique_SANGUINETTI.jpg";
        
        $user2->save();

         $user3 = new User();

        
        $user3->firstname = "Fred LURIE";
        $user3->nni = "XXXXXX";
        $user3->email = "fred.lurie@edf.fr" ;
        $user3->phone = "XXXXXXXX";
        $user3->password = "123456789";
        $user3->job = "CCO HTA";
        $user3->hierarchy = "HTA";
        $user3->picture = "img/user/Frederic_LURIE.jpg";

        $user3->save();


        $user4 = new User();

        
        $user4->firstname = "David ROQUEFORT";
        $user4->nni = "XXXXXX";
        $user4->email = "David.ROQUEFORT@edf.fr" ;
        $user4->phone = "XXXXXXXX";
        $user4->password = "123456789";
        $user4->job = "CCO HTB";
        $user4->hierarchy = "HTB";
        $user4->picture = "img/user/David_ROQUEFORT.jpg";
        $user4->save();

        
        $user5 = new User();

        
        $user5->firstname = "Pierre LONGAU";
        $user5->nni = "XXXXXX";
        $user5->email = "Pierre.LONGAU@edf.fr" ;
        $user5->phone = "XXXXXXXX";
        $user5->password = "123456789";
        $user5->job = "CCO HTB";
        $user5->hierarchy = "HTB";
        $user5->picture = "img/user/Pierre_LONGAU.jpg";
        $user5->save();

        $user6 = new User();

        
        $user6->firstname = "Eric PIALAT";
        $user6->nni = "XXXXXX";
        $user6->email = "Eric.PIALAT@edf.fr" ;
        $user6->phone = "XXXXXXXX";
        $user6->password = "123456789";
        $user6->job = "CCO HTA";
        $user6->hierarchy = "HTA";
        $user6->picture = "img/user/Eric_PIALAT.jpg";
        $user6->save();
    }
}
