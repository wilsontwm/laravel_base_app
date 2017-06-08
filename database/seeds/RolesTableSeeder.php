<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id'    =>  Role::ROLE_ADMINISTRATOR,
            'name'  =>  'Administrator'
        ]);

        Role::create([
            'id'    =>  Role::ROLE_USER,
            'name'  =>  'User'
        ]);
    }
}
