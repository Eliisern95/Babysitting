<?php

use Illuminate\Database\Seeder;
use App\AnuncisCangurs;
class AnuncisCangursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array ([
            'usuaris' => 1,
            'titol' => 'Anunci1',
            'descripcio' => 'descripcio de cangurs molt xulos perque si i axixii genero text aleatori',
            'preu' => 32
        ]
      );
    AnuncisCangurs::insert($data);  
    }
  }

