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
        User::factory(1)
            ->create()
            ->each(
                function ($user) {
                    // set user's rules
                    $user->rules()->attach([1, 2, 3]);
                }
            );
    }
}
