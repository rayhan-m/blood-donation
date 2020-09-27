<?php

use App\User;
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
        $user =new User();
        $user->role_id= '1';
        
        $user->name="Super Admin";
        $user->email="admin@gmail.com";
        $user->password=bcrypt('12345678');
        $user->phone="123456789";
        
        $user->save();

        for ($i=1; $i <= 10; $i++) { 
            $user =new User();
            $user->role_id= '2';
            $user->blood_group_id= '1';
            $user->name="Mr. Donar-".$i;
            $user->email="donar"."$i"."@gmail.com";
            $user->password=bcrypt('12345678');
            $user->phone="123456789";
            $user->division_id= '1';
            $user->district_id= '1';
            $user->upozila_id= '1';
            $user->union_id= '1';
            $user->save();
        }
        
    }
}