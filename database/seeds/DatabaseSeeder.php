<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Group::class, 3)->create();
        factory(App\Level::class, 3)->create();
        factory(App\Group::class, 3)->create(['name' => 'Oro']);
        factory(App\Group::class, 3)->create(['name' => 'Plata']);
        factory(App\Group::class, 3)->create(['name' => 'Bronce']);


    }
}
