<?php

use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //punya reguler axis dan xl
        DB::table('prices')->insert([
            'kode' => 'X5',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Axis & XL',
            'harga' => 5890,
            'keterangan' => 'AXIS & XL Reguler 5.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X10',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Axis & XL',
            'harga' => 10830,
            'keterangan' => 'AXIS & XL Reguler 10.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X15',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Axis & XL',
            'harga' => 15015,
            'keterangan' => 'AXIS & XL Reguler 15.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X25',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Axis & XL',
            'harga' => 24855,
            'keterangan' => 'AXIS & XL Reguler 25.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X30',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Axis & XL',
            'harga' => 29815,
            'keterangan' => 'AXIS & XL Reguler 30.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X50',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Axis & XL',
            'harga' => 49415,
            'keterangan' => 'AXIS & XL Reguler 50.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X100',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Axis & XL',
            'harga' => 98615,
            'keterangan' => 'AXIS & XL Reguler 100.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X300',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Axis & XL',
            'harga' => 296815,
            'keterangan' => 'AXIS & XL Reguler 300.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X500',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Axis & XL',
            'harga' => 497000,
            'keterangan' => 'AXIS & XL Reguler 500.000',
            'status' => 'ada'
        ]);

        //pulsa reguler indosat
        DB::table('prices')->insert([
            'kode' => 'I5',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 5900,
            'keterangan' => 'Indosat Reguler 5.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I10',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 10900,
            'keterangan' => 'Indosat Reguler 10.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I12',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 12205,
            'keterangan' => 'Indosat Reguler 12.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I15',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 15325,
            'keterangan' => 'Indosat Reguler 15.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I20',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 19955,
            'keterangan' => 'Indosat Reguler 20.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I25',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 24825,
            'keterangan' => 'Indosat Reguler 25.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I30',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 29815,
            'keterangan' => 'Indosat Reguler 30.000',
            'status' => 'ada'
        ]);


        DB::table('prices')->insert([
            'kode' => 'I40',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 39600,
            'keterangan' => 'Indosat Reguler 40.000',
            'status' => 'ada'
        ]);


        DB::table('prices')->insert([
            'kode' => 'I50',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 48925,
            'keterangan' => 'Indosat Reguler 50.000',
            'status' => 'ada'
        ]);


        DB::table('prices')->insert([
            'kode' => 'I60',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 59750,
            'keterangan' => 'Indosat Reguler 60.000',
            'status' => 'ada'
        ]);


        DB::table('prices')->insert([
            'kode' => 'I80',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 78925,
            'keterangan' => 'Indosat Reguler 80.000',
            'status' => 'ada'
        ]);


        DB::table('prices')->insert([
            'kode' => 'I90',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 87250,
            'keterangan' => 'Indosat Reguler 90.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I100',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 96805,
            'keterangan' => 'Indosat Reguler 100.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I125',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 119800,
            'keterangan' => 'Indosat Reguler 125.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I175',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 167800,
            'keterangan' => 'Indosat Reguler 175.000',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I200',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Indosat',
            'harga' => 186100,
            'keterangan' => 'Indosat Reguler 200.000',
            'status' => 'ada'
        ]);

        //pulsa reguler telkomsel
        DB::table('prices')->insert([
            'kode' => 'S1',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 1495,
            'keterangan' => 'Telkomsel Reguler 1Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S5',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 5700,
            'keterangan' => 'Telkomsel Reguler 5Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S10',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 10325,
            'keterangan' => 'Telkomsel Reguler 10Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S15',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 14850,
            'keterangan' => 'Telkomsel Reguler 15Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S20',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 20125,
            'keterangan' => 'Telkomsel Reguler 20Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S25',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 24815,
            'keterangan' => 'Telkomsel Reguler 25Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S30',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 30075,
            'keterangan' => 'Telkomsel Reguler 30Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S35',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 34855,
            'keterangan' => 'Telkomsel Reguler 35Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S40',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 39805,
            'keterangan' => 'Telkomsel Reguler 40Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S45',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 44755,
            'keterangan' => 'Telkomsel Reguler 45Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S50',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 49415,
            'keterangan' => 'Telkomsel Reguler 50Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S55',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 54715,
            'keterangan' => 'Telkomsel Reguler 55Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S60',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 59850,
            'keterangan' => 'Telkomsel Reguler 60Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S65',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 64750,
            'keterangan' => 'Telkomsel Reguler 65Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S70',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 69945,
            'keterangan' => 'Telkomsel Reguler 70Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S75',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 74600,
            'keterangan' => 'Telkomsel Reguler 75Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S80',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 79525,
            'keterangan' => 'Telkomsel Reguler 80Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S85',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 84475,
            'keterangan' => 'Telkomsel Reguler 85Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S90',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 89525,
            'keterangan' => 'Telkomsel Reguler 90Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S95',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 94450,
            'keterangan' => 'Telkomsel Reguler 95Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S100',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 96995,
            'keterangan' => 'Telkomsel Reguler 100Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S150',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 148075,
            'keterangan' => 'Telkomsel Reguler 150Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S200',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 197800,
            'keterangan' => 'Telkomsel Reguler 200Rb',
            'status' => 'ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S300',
            'detail_produk' => 'pulsa reguler',
            'provider' => 'Telkomsel',
            'harga' => 295700,
            'keterangan' => 'Telkomsel Reguler 300Rb',
            'status' => 'ada'
        ]);

        //pulsa reguler smartfren

    }
}
