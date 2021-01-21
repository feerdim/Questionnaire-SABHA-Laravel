<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('pertanyaans')->insert([
            'id' => '1',
			'pertanyaan' => 'Apakah Anda merasa bahu dan pinggul berukuran sama besar?',
	        'ya' => '2',
	        'tidak' => '3'
		]);
        DB::table('pertanyaans')->insert([
            'id' => '2',
			'pertanyaan' => 'Apakah pinggang Anda terlihat jelas?',
	        'ya' => 'Jam Pasir',
	        'tidak' => '4'
		]);
        DB::table('pertanyaans')->insert([
            'id' => '3',
			'pertanyaan' => 'Apakah bahu Anda lebih besar dari pinggang?',
	        'ya' => 'Segitiga Terbalik',
	        'tidak' => 'Pear'
		]);
        DB::table('pertanyaans')->insert([
            'id' => '4',
			'pertanyaan' => 'Apakah ukuran kaki Anda lebih / sama panjang dari tubuh?',
	        'ya' => 'Persegi',
	        'tidak' => 'Apple'
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
