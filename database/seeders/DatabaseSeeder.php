<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
		// \App\Models\User::factory(10)->create();
		DB::table('users')->insert([
			'name' => 'Admin',
			'email' => 'admin@sabhaindonesia.id',
			'password' => Hash::make('sabha123')
		]);
        DB::table('questions')->insert([
            'id' => '1',
			'question' => 'Apakah Anda merasa bahu dan pinggul berukuran sama besar?',
	        'yes' => '2',
	        'no' => '3'
		]);
        DB::table('questions')->insert([
            'id' => '2',
			'question' => 'Apakah pinggang Anda terlihat jelas?',
	        'yes' => 'Jam Pasir',
	        'no' => '4'
		]);
        DB::table('questions')->insert([
            'id' => '3',
			'question' => 'Apakah bahu Anda lebih besar dari pinggang?',
	        'yes' => 'Segitiga Terbalik',
	        'no' => 'Pear'
		]);
        DB::table('questions')->insert([
            'id' => '4',
			'question' => 'Apakah ukuran kaki Anda lebih / sama panjang dari tubuh?',
	        'yes' => 'Persegi',
	        'no' => 'Apple'
		]);
    }
}
