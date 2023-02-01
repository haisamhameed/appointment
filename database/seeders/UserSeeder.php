<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<4;$i++)
        {
            $user = new User();
            $user->name = 'User '.$i;
            $user->email = 'user'.$i.'@gmail.com';
            $user->password = bcrypt('123456');
            $user->timezone = 'UTC';
            if($i<2)
            {
                $user->role = 'doctor';
            }
            else
            {
                $user->role = 'patient';
            }
            $user->save();
        }
    }
}
