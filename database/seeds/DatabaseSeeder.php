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
        $this->call(TypesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuTypeTableSeeder::class);
        $this->call(FacultadesTableSeeder::class);
        $this->call(SedesTableSeeder::class);
        $this->call(SedeFacultadesTableSeeder::class);
        /*
        $this->call(UsersTableSeeder::class);
        $this->call(DataUsersTableSeeder::class);
        $this->call(AccesosTableSeeder::class);
        $this->call(FranjasTableSeeder::class);
        */
    }
}
