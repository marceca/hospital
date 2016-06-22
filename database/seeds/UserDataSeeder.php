<?php

use Illuminate\Database\Seeder;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserData::class, 50)->create()->each(function($u) {
            $u->post()->save(factory(App\UserData::class)->make());
        });
    }
}
