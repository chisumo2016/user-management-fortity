<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Assigning role to user via many to many
        $roles = Role::all(); //this is collection
        User::all()->each(function ($user) use ($roles){
            //attach the roles from user table
            $user->roles()->attach(
                $roles->random(1)->pluck('id')  //1,2,3
            );
        });
    }
}
