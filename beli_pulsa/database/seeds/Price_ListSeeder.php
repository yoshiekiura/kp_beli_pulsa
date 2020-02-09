<?php

use Illuminate\Database\Seeder;

class Price_ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //pulsa reguler axis & xl
        DB::table('price_lists')->insert([
            'kode' => 'X5',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 5890,
            'keterangan' => 'AXIS & XL Reguler 5.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X10',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 10830,
            'keterangan' => 'AXIS & XL Reguler 10.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X15',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 15015,
            'keterangan' => 'AXIS & XL Reguler 15.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X25',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 24855,
            'keterangan' => 'AXIS & XL Reguler 25.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X30',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 29815,
            'keterangan' => 'AXIS & XL Reguler 30.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X50',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 49415,
            'keterangan' => 'AXIS & XL Reguler 50.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X100',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 98615,
            'keterangan' => 'AXIS & XL Reguler 100.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X300',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 296815,
            'keterangan' => 'AXIS & XL Reguler 300.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X500',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 497000,
            'keterangan' => 'AXIS & XL Reguler 500.000',
            'status' => 'Ada'
        ]);

    }
}
