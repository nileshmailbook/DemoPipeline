<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {	
    	User::create([
    		'name'=> 'admin',
    		'email' => 'admin@admin.com',
    		'password' => Hash::make('password'),
    		]);

        $this->call(ProductsTableSeeder::class);
    }
}
