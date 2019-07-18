<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::Table('users')->insert(
       	[
       		'name'		=>	'admin',
       		'email'		=>	'admin@admin.com',
       		'password'	=>	bcrypt('password'),

       	]);
    }
}
