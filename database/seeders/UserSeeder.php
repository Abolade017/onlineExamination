<?php

namespace Database\Seeders;

use App\Models\User;
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
        
        $superAdmin = new User;
        
        $superAdmin->name = 'Adeola Abdulazeez';
        $superAdmin->username = 'abdulazeez01';
        $superAdmin->email = 'abdulazeezadeola40@gmail.com';
        $superAdmin->is_admin = true;
        $superAdmin->password = bcrypt('abdul@01');
        $superAdmin->save();

        
        $normalUser = new User;

        $normalUser->name = 'Ogo';
        $normalUser->username = 'ogo';
        $normalUser->email = 'ogo@hello.com';
        $normalUser->is_admin = false;
        $normalUser->password = bcrypt('hello12345');

        $normalUser->save();

    }
}
