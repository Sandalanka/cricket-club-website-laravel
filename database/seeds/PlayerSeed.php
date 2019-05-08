<?php

use Illuminate\Database\Seeder;

class PlayerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $player=new \App\Player([
            'name'=>'Savith Priyantha',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'savith@gmail.com',
            'password'=>'12345',
            'image'=>'image/3.jpg'
      
        ]);
        $player->save();


        $player=new \App\Player([
            'name'=>'Sammilka Perera',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'sammilka@gmail.com',
            'password'=>'12345',
            'image'=>'image/5.jpg'
      
        ]);
        $player->save();




        $player=new \App\Player([
            'name'=>'Delish Gunarathna',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'dilesh@gmail.com',
            'password'=>'12345',
            'image'=>'image/6.jpg'
      
        ]);
        $player->save();




        $player=new \App\Player([
            'name'=>'Nimanda Subasingha',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'savith@gmail.com',
            'password'=>'12345',
            'image'=>'image/26.jpg'
      
        ]);
        $player->save();






        $player=new \App\Player([
            'name'=>'Raminda Nissanka',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'raminda@gmail.com',
            'password'=>'12345',
            'image'=>'image/7.jpg'
      
        ]);
        $player->save();





        $player=new \App\Player([
            'name'=>'Sanjaya Chaturanga',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'sanjaya@gmail.com',
            'password'=>'12345',
            'image'=>'image/8.jpg'
      
        ]);
        $player->save();




        $player=new \App\Player([
            'name'=>'Madura Perera',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'madura@gmail.com',
            'password'=>'12345',
            'image'=>'image/9.jpg'
      
        ]);
        $player->save();



        $player=new \App\Player([
            'name'=>'Milinda Siriwaradna',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'milinda@gmail.com',
            'password'=>'12345',
            'image'=>'image/27.jpg'
      
        ]);
        $player->save();



        $player=new \App\Player([
            'name'=>'Sachith Pathirana',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'sachith@gmail.com',
            'password'=>'12345',
            'image'=>'image/28.jpg'
      
        ]);
        $player->save();


        $player=new \App\Player([
            'name'=>'Pathum Nissanka',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'pathum@gmail.com',
            'password'=>'12345',
            'image'=>'image/12.jpg'
      
        ]);
        $player->save();


        $player=new \App\Player([
            'name'=>'Dananjaya De Silva',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'danajaya@gmail.com',
            'password'=>'12345',
            'image'=>'image/19.jpg'
      
        ]);
        $player->save();


        $player=new \App\Player([
            'name'=>'Salinda Ushan',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'salinda@gmail.com',
            'password'=>'12345',
            'image'=>'image/17.jpg'
      
        ]);
        $player->save();

        $player=new \App\Player([
            'name'=>'Nilantha Rathnayaka',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'nilantha@gmail.com',
            'password'=>'12345',
            'image'=>'image/18.jpg'
      
        ]);
        $player->save();


        $player=new \App\Player([
            'name'=>'Thamara Abayarathna',
            'nic'=>'123456789',
            'contact'=>'119',
            'email'=>'thamara@gmail.com',
            'password'=>'12345',
            'image'=>'image/16.jpg'
      
        ]);
        $player->save();
    }
}
