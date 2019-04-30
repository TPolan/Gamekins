<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name" => "Tomáš",
                "nickname" => 'Urban',
                "surname" => "Polan",
                "password" => Hash::make("secret"),
            ],
            [
                "name" => "Nikolas",
                "nickname" => 'Nifty',
                "surname" => "Rašín",
                "password" => Hash::make("secret"),
            ],
            [
                "name" => "Jiří",
                "nickname" => 'Štefy',
                "surname" => "Štefanika",
                "password" => Hash::make("secret"),
            ],
            [
                "name" => "Josef",
                "nickname" => 'Pepa',
                "surname" => "Vozáb",
                "password" => Hash::make("secret"),
            ],
            
        ];
    
    foreach($users as $user){

    User::create($user);
    }
}
