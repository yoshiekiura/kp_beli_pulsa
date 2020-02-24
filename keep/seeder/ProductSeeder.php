<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'nama_produk' => 'Pulsa Reguler'
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Paket Internet'
        ]);
    }
}
