<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();
   
        $user = new User;
        $user->username = 'Admin';
        $user->email = 'admin@admin.com';
        $user->password = '20242025';
        $user->role = 'admin';

        $user->save();
    }
}