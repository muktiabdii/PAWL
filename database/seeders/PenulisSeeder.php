<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // data faker indonesia
        $faker = Faker::create('id_ID');

        // membuat data dummy sebanyak 50 record
        for ($i = 1; $i <= 50; $i++) { 
            
            // insert data dummy pegawai dgn faker
            DB::table('penulis')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address
            ]);
        }
    }
}
