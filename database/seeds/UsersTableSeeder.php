<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'        =>  1,
            'name'      =>  'Wilson Tan',
            'email'     => 'administrator@gmail.com',
            'password'  => '$2y$10$Lwq2SAWMPVT5aXGxWK/IBuUM52/AUp/QTP2lH5/N5wGPVvfhFCv2m',
            'phone'     => '016-981 2683',
            'address'   => '9, Jalan Damai Rasa 2,
                            Alam Damai,
                            Cheras,
                            56000 KL',
            'country_id'=> '132',
            'gender'    => User::GENDER_MALE,
            'role_id'   => Role::ROLE_ADMINISTRATOR
        ]);
    }
}
