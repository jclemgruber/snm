<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // 
        
        factory(App\Model\InstituicaoTipo::class, 10)->create();
        factory(App\Model\Regiao::class, 5)->create();
    }
}
