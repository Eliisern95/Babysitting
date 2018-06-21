<?php

use Illuminate\Database\Seeder;
use App\Consells;
class consellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $data = array ([
            'consell' => "Sigui educada, que no fumi, que parli anglès, que tingui horari fexible",
            'pare' => 'Yolanda Carpio(Encarregada de la secció de PAE ISERN Electrodomèstics)'
        ],
           [
            'consell' => "Que parli anglès, que tingui cotxe",
            'pare' => 'Yaiza Rodriguez(Dependenta de la secció de Post Venda ISERN Electrodomèstics'
           ],
           [
            'consell' => "Que tingui entre uns 22 i 30 anys. Que sugui educada",
            'pare' => 'Olga Prims(Fisiotrapeuta del centre FisioCat)'
           ]   
               
      );
    Consells::insert($data);  
    }
}
