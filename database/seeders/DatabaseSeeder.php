<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
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
        // DB::table('pengisis')->insert([
		// 	'nama' => 'Ferdian Maulana',
	    //     'email' => 'ferdi.maulana@gmail.com',
		// ]);
        // DB::table('jawabans')->insert([
		// 	'pengisis_id' => '1',
        //     'pertanyaans_id' => '1',
        //     'jawaban' => '1'
		// ]);
        // DB::table('jawabans')->insert([
		// 	'pengisis_id' => '1',
        //     'pertanyaans_id' => '2',
        //     'jawaban' => '1'
		// ]);
    }
}
