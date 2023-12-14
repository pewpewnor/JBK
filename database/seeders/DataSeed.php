<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSeed extends Seeder
{

    public function run(): void
    {
        DB::table('data')->insert(
            [
                'itemName' => 'Bugatti Chiron',
                'description' => 'Mobil keren dari surabaya',
                'image' => 'Bugatti.jpg',
                'location' => 'Surabaya',
                'shopName' => 'New Agung Jaya',
                'type' => 'mobil',
                'price' => '10000000',
            ],
        );

        DB::table('data')->insert(
            [
                'itemName' => 'McClaren 720s',
                'description' => 'Mobil Elegan yang bisa diajak kemana mana',
                'image' => 'McClaren.jpg',
                'location' => 'Surabaya',
                'shopName' => 'New Agung Jaya',
                'type' => 'mobil',
                'price' => '20000000',
            ],
        );

        DB::table('data')->insert(
            [
                'itemName' => 'Mc Claren',
                'description' => 'Ini merupakan mobil yang merupakan adik dari McClaren 720s',
                'image' => 'Picture1.jpeg',
                'location' => 'Surabaya',
                'shopName' => 'New Agung Jaya',
                'type' => 'mobil',
                'price' => '18000000',
            ],
        );

        DB::table('data')->insert(
            [
                'itemName' => 'Aventador',
                'description' => 'Mobil ini sangat kencang dan sangat elegan',
                'image' => 'aventador.jpg',
                'location' => 'Surabaya',
                'shopName' => 'New Agung Jaya',
                'type' => 'mobil',
                'price' => '19000000',
            ],
        );

        // ini database buat yang motor
        DB::table('data')->insert(
            [
                'itemName' => 'Yamaha R25',
                'description' => 'Motor gagah idaman para lelaki yang sangat bisa mendapatkan hati wanita yang dilewatinya.',
                'image' => 'R25.jpeg',
                'location' => 'Surabaya',
                'shopName' => 'Toko Sinar Jaya',
                'type' => 'motor',
                'price' => '15000000',
            ],
        );

        DB::table('data')->insert(
            [
                'itemName' => 'FOX R',
                'description' => 'Mobil Elegan yang bisa diajak kemana mana',
                'image' => 'FoxR3.jpg',
                'location' => 'Surabaya',
                'shopName' => 'Toko Sinar Jaya',
                'type' => 'motor',
                'price' => '2500000',
            ],
        );

        DB::table('data')->insert(
            [
                'itemName' => 'Yamaha RM1',
                'description' => 'motor keren yang bisa membawa 2 penumpang.',
                'image' => 'R1M.jpg',
                'location' => 'Surabaya',
                'shopName' => 'Toko Sinar Jaya',
                'type' => 'motor',
                'price' => '28000000',
            ],
        );

        DB::table('data')->insert(
            [
                'itemName' => 'Kawasaki H2R',
                'description' => 'Motor keren yang dikeluarkan langsung dari kawasaki yang membuat anda menjadi raja jalanan',
                'image' => 'h2r.jpg',
                'location' => 'Surabaya',
                'shopName' => 'Toko Sinar Jaya',
                'type' => 'motor',
                'price' => '19000000',
            ],
        );
    }
}
