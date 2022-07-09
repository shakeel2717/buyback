<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Shakeel Ahmad";
        $user->email = "shakeel2717@gmail.com";
        $user->password = bcrypt('asdfasdf');
        $user->save();


        $user = new User();
        $user->name = "Test";
        $user->email = "test@gmail.com";
        $user->password = bcrypt('asdfasdf');
        $user->save();

        Customer::factory()->count(50)->create();
    }
}
