<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $arrayAnimales = array(
        array(
            'name' => 'León',
            'scientific' => 'Panthera leo',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/7/73/Lion_waiting_in_Namibia.jpg',
            'description' => 'Es un mamífero carnívoro de la familia de los félidos y una de las cinco especies del género Panthera. Los leones salvajes viven en poblaciones cada vez más dispersas y fragmentadas del África subsahariana.',
            'habitat' => 'Terrestre',
            'region_id' =>1,
            'feeding' => 'Carnívoro',
            'danger' => false
        ),
        array(
            'name' => 'Tigre',
            'scientific' => 'Panthera tigris',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Tigress_at_Jim_Corbett_National_Park.jpg/800px-Tigress_at_Jim_Corbett_National_Park.jpg',
            'description' => 'Es una de las cuatro especies de la subfamilia de los panterinos (familia Felidae) pertenecientes al género Panthera. Se encuentra solamente en el continente asiático.',
            'habitat' => 'Terrestre',
            'region_id' =>2,
            'feeding' => 'Carnívoro',
            'danger' => true
        )
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //self::seedCollection();
        //$this->command->info('Tabla catálogo inicializada con datos!');
        self::seedUsers();
        $this->command->info('Tabla regiones inicializada con datos!');


    }

    public function seedRegions(){
        DB::table('regions')->delete();

        $s = new \App\Region();
        $s->name = 'Sabana';
        $s->save();

        $e = new \App\Region();
        $e->name = 'Bosque';
        $e->save();

        $w = new \App\Region();
        $w->name = 'Desierto';
        $w->save();

        $y = new \App\Region();
        $y->name = 'Tundra';
        $y->save();

        $q = new \App\Region();
        $q->name = 'Selva';
        $q->save();
    }


    public function seedCollection(){
        DB::table('animals')->delete();

        foreach( $this->arrayAnimales as $animal ) {
            $a = new \App\Animal();
            $a->name = $animal['name'];
            $a->scientific = $animal['scientific'];
            $a->photo = $animal['photo'];
            $a->description = $animal['description'];
            $a->habitat = $animal['habitat'];
            $a->region_id = $animal['region_id'];
            $a->feeding = $animal['feeding'];
            $a->danger = $animal['danger'];
            $a->save();
        }
    }

    public function seedUsers(){
        DB::table('users')->delete();

        $u = new \App\User();
        $u->name = "Pepe";
        $u->email = "pepe@gmail.com";
        $u->password = bcrypt("pepe");
        $u->rol = "admin";
        $u->save();

        $v = new \App\User();
        $v->name = "Antonio";
        $v->email = "antonio@gmail.com";
        $v->password = bcrypt("antonio");
        $v->rol = "comun";
        $v->save();
    }
}
