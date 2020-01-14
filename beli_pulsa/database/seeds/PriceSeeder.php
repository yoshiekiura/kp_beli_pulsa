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
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Axis & XL',
            'harga' => 5890,
            'keterangan' => 'AXIS & XL Reguler 5.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X10',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Axis & XL',
            'harga' => 10830,
            'keterangan' => 'AXIS & XL Reguler 10.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X15',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Axis & XL',
            'harga' => 15015,
            'keterangan' => 'AXIS & XL Reguler 15.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X25',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Axis & XL',
            'harga' => 24855,
            'keterangan' => 'AXIS & XL Reguler 25.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X30',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Axis & XL',
            'harga' => 29815,
            'keterangan' => 'AXIS & XL Reguler 30.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X50',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Axis & XL',
            'harga' => 49415,
            'keterangan' => 'AXIS & XL Reguler 50.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X100',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Axis & XL',
            'harga' => 98615,
            'keterangan' => 'AXIS & XL Reguler 100.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X300',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Axis & XL',
            'harga' => 296815,
            'keterangan' => 'AXIS & XL Reguler 300.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'X500',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Axis & XL',
            'harga' => 497000,
            'keterangan' => 'AXIS & XL Reguler 500.000',
            'status' => 'Ada'
        ]);

        //pulsa reguler indosat
        DB::table('prices')->insert([
            'kode' => 'I5',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 5900,
            'keterangan' => 'Indosat Reguler 5.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I10',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 10900,
            'keterangan' => 'Indosat Reguler 10.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I12',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 12205,
            'keterangan' => 'Indosat Reguler 12.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I15',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 15325,
            'keterangan' => 'Indosat Reguler 15.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I20',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 19955,
            'keterangan' => 'Indosat Reguler 20.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I25',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 24825,
            'keterangan' => 'Indosat Reguler 25.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I30',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 29815,
            'keterangan' => 'Indosat Reguler 30.000',
            'status' => 'Ada'
        ]);


        DB::table('prices')->insert([
            'kode' => 'I40',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 39600,
            'keterangan' => 'Indosat Reguler 40.000',
            'status' => 'Ada'
        ]);


        DB::table('prices')->insert([
            'kode' => 'I50',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 48925,
            'keterangan' => 'Indosat Reguler 50.000',
            'status' => 'Ada'
        ]);


        DB::table('prices')->insert([
            'kode' => 'I60',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 59750,
            'keterangan' => 'Indosat Reguler 60.000',
            'status' => 'Ada'
        ]);


        DB::table('prices')->insert([
            'kode' => 'I80',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 78925,
            'keterangan' => 'Indosat Reguler 80.000',
            'status' => 'Ada'
        ]);


        DB::table('prices')->insert([
            'kode' => 'I90',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 87250,
            'keterangan' => 'Indosat Reguler 90.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I100',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 96805,
            'keterangan' => 'Indosat Reguler 100.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I125',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 119800,
            'keterangan' => 'Indosat Reguler 125.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I175',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 167800,
            'keterangan' => 'Indosat Reguler 175.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'I200',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Indosat',
            'harga' => 186100,
            'keterangan' => 'Indosat Reguler 200.000',
            'status' => 'Ada'
        ]);

        //pulsa reguler telkomsel
        DB::table('prices')->insert([
            'kode' => 'S1',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 1495,
            'keterangan' => 'Telkomsel Reguler 1Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S5',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 5700,
            'keterangan' => 'Telkomsel Reguler 5Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S10',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 10325,
            'keterangan' => 'Telkomsel Reguler 10Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S15',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 14850,
            'keterangan' => 'Telkomsel Reguler 15Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S20',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 20125,
            'keterangan' => 'Telkomsel Reguler 20Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S25',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 24815,
            'keterangan' => 'Telkomsel Reguler 25Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S30',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 30075,
            'keterangan' => 'Telkomsel Reguler 30Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S35',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 34855,
            'keterangan' => 'Telkomsel Reguler 35Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S40',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 39805,
            'keterangan' => 'Telkomsel Reguler 40Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S45',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 44755,
            'keterangan' => 'Telkomsel Reguler 45Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S50',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 49415,
            'keterangan' => 'Telkomsel Reguler 50Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S55',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 54715,
            'keterangan' => 'Telkomsel Reguler 55Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S60',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 59850,
            'keterangan' => 'Telkomsel Reguler 60Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S65',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 64750,
            'keterangan' => 'Telkomsel Reguler 65Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S70',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 69945,
            'keterangan' => 'Telkomsel Reguler 70Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S75',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 74600,
            'keterangan' => 'Telkomsel Reguler 75Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S80',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 79525,
            'keterangan' => 'Telkomsel Reguler 80Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S85',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 84475,
            'keterangan' => 'Telkomsel Reguler 85Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S90',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 89525,
            'keterangan' => 'Telkomsel Reguler 90Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S95',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 94450,
            'keterangan' => 'Telkomsel Reguler 95Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S100',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 96995,
            'keterangan' => 'Telkomsel Reguler 100Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S150',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 148075,
            'keterangan' => 'Telkomsel Reguler 150Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S200',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 197800,
            'keterangan' => 'Telkomsel Reguler 200Rb',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'S300',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Telkomsel',
            'harga' => 295700,
            'keterangan' => 'Telkomsel Reguler 300Rb',
            'status' => 'Ada'
        ]);

        //pulsa reguler smartfren
        DB::table('prices')->insert([
            'kode' => 'SM5',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 5045,
            'keterangan' => 'Smartfren Reguler 5.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SM10',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 9945,
            'keterangan' => 'Smartfren Reguler 10.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SM20',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 19775,
            'keterangan' => 'Smartfren Reguler 20.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SM25',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 24675,
            'keterangan' => 'Smartfren Reguler 25.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SM30',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 29650,
            'keterangan' => 'Smartfren Reguler 30.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SM50',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 49200,
            'keterangan' => 'Smartfren Reguler 50.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SM60',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 59000,
            'keterangan' => 'Smartfren Reguler 60.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SM100',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 98200,
            'keterangan' => 'Smartfren Reguler 100.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SM150',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 148100,
            'keterangan' => 'Smartfren Reguler 150.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SM200',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 197600,
            'keterangan' => 'Smartfren Reguler 200.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SM300',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 295600,
            'keterangan' => 'Smartfren Reguler 300.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SM500',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 495600,
            'keterangan' => 'Smartfren Reguler 500.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SM1000',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Smartfren',
            'harga' => 987100,
            'keterangan' => 'Smartfren Reguler 1.000.000',
            'status' => 'Ada'
        ]);

        //paket reguler tri
        DB::table('prices')->insert([
            'kode' => 'T1',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 1271,
            'keterangan' => 'TRI Reguler 1.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T2',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 2247,
            'keterangan' => 'TRI Reguler 2.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T3',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 3223,
            'keterangan' => 'TRI Reguler 3.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T4',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 4394,
            'keterangan' => 'TRI Reguler 4.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T5',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 5370,
            'keterangan' => 'TRI Reguler 5.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T6',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 6326,
            'keterangan' => 'TRI Reguler 6.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T7',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 7322,
            'keterangan' => 'TRI Reguler 7.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T8',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 8298,
            'keterangan' => 'TRI Reguler 8.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T9',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 9274,
            'keterangan' => 'TRI Reguler 9.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T10',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 10250,
            'keterangan' => 'TRI Reguler 10.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T15',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 14740,
            'keterangan' => 'TRI Reguler 15.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T20',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 19620,
            'keterangan' => 'TRI Reguler 20.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T25',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 24500,
            'keterangan' => 'TRI Reguler 25.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T30',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 29380,
            'keterangan' => 'TRI Reguler 30.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T50',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 48900,
            'keterangan' => 'TRI Reguler 50.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T75',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 73300,
            'keterangan' => 'TRI Reguler 75.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'T100',
            'detail_produk' => 'Pulsa Reguler',
            'provider' => 'Tri',
            'harga' => 97700,
            'keterangan' => 'TRI Reguler 100.000',
            'status' => 'Ada'
        ]);

        //paket data axis bronet
        DB::table('prices')->insert([
            'kode' => 'BROSIS15',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Bronet)',
            'harga' => 10250,
            'keterangan' => 'AXIS BRONET 300MB 24jam 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BROSIS27',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Bronet)',
            'harga' => 17700,
            'keterangan' => 'AXIS BRONET 1GB 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BROSIS35',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Bronet)',
            'harga' => 25915,
            'keterangan' => 'AXIS BRONET 2GB 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BROSIS45',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Bronet)',
            'harga' => 34915,
            'keterangan' => 'AXIS BRONET 3GB 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BROSIS62',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Bronet)',
            'harga' => 52915,
            'keterangan' => 'AXIS BRONET 5GB 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BROSIS80',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Bronet)',
            'harga' => 72715,
            'keterangan' => 'AXIS BRONET 8GB 24jam 30Hr',
            'status' => 'Ada'
        ]);

        //paket internet axis keren zmua
        DB::table('prices')->insert([
            'kode' => 'KZL5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Keren Zmua)',
            'harga' => 31650,
            'keterangan' => 'Gaul Unlimited FUP 1.5GB,30hari',
            'status' => 'Kosong'
        ]);

        DB::table('prices')->insert([
            'kode' => 'KZL4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Keren Zmua)',
            'harga' => 20450,
            'keterangan' => 'Keren Zemua Lho WA+LINE+BBM+FB+Twitter+Path 1GB 30D',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'KZL2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Keren Zmua)',
            'harga' => 15350,
            'keterangan' => 'Keren Zemua Lho FB+Twitter+Path 1GB 30D',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'KZL1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Keren Zmua)',
            'harga' => 15350,
            'keterangan' => 'Keren Zemua Lho WA+LINE+BBM 1GB 30D',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'KZL3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Keren Zmua)',
            'harga' => 15350,
            'keterangan' => 'Keren Zemua Lho Yonder Music 1GB 30D',
            'status' => 'Ada'
        ]);

        //paket internet axis owsem
        DB::table('prices')->insert([
            'kode' => 'DAO1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Owsem)',
            'harga' => 20350,
            'keterangan' => 'OWSEM 1GB+1GB(4G) + 2GB (Games+ Music) 30H',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'DAO2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Owsem)',
            'harga' => 32350,
            'keterangan' => 'OWSEM 1GB+3GB(4G) + 4GB (Games+ Music) 30H',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'DAO3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Owsem)',
            'harga' => 52100,
            'keterangan' => 'OWSEM 2GB+6GB(4G) + 8GB (Games+ Music) 30H',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'DAO4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Owsem)',
            'harga' => 66650,
            'keterangan' => 'OWSEM 3GB+9GB(4G) + 12GB (Games+ Music) 30H',
            'status' => 'Ada'
        ]);

        //paket internet indosat
        DB::table('prices')->insert([
            'kode' => 'IDFM1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 1815,
            'keterangan' => 'ISAT DATA Mini 100MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 3215,
            'keterangan' => 'ISAT DATA Mini 200MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 3615,
            'keterangan' => 'ISAT DATA Mini 250MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 4915,
            'keterangan' => 'ISAT DATA Mini 300MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM9',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 6215,
            'keterangan' => 'ISAT DATA Mini 500MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM13',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 8855,
            'keterangan' => 'ISAT DATA Mini 700MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM14',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 9355,
            'keterangan' => 'ISAT DATA Mini 750MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 12100,
            'keterangan' => 'ISAT DATA 1GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 24100,
            'keterangan' => 'ISAT DATA 2GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 33600,
            'keterangan' => 'ISAT DATA 3GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 48100,
            'keterangan' => 'ISAT DATA 4GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 59600,
            'keterangan' => 'ISAT DATA 5GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 67600,
            'keterangan' => 'ISAT DATA 6GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 75100,
            'keterangan' => 'ISAT DATA 7GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF8',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 82100,
            'keterangan' => 'ISAT DATA 8GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF9',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 89100,
            'keterangan' => 'ISAT DATA 9GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF10',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat',
            'harga' => 90600,
            'keterangan' => 'ISAT DATA 10GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        //paket internet indosat unlimit
        DB::table('prices')->insert([
            'kode' => 'ID1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (unlimit)',
            'harga' => 24355,
            'keterangan' => '1GB + Unlimited WA,FB,TWIT,LINE,GOJEK,GRAB, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'ID2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (unlimit)',
            'harga' => 38355,
            'keterangan' => '2GB + Unlimited, WA,FB,TWIT,LINE,GOJEK,GRAB 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'ID3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (unlimit)',
            'harga' => 57355,
            'keterangan' => '3GB + Unlimited, APLIKASI Dan YOUTUBE 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'ID4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (unlimit)',
            'harga' => 64050,
            'keterangan' => '4GB 24JAM + 4GB apl + 20GB 00-06 (30HR)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'ID7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (unlimit)',
            'harga' => 76215,
            'keterangan' => '7GB + Unlimited, APLIKASI, YOUTUBE Dan IG 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'ID10',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (unlimit)',
            'harga' => 96215,
            'keterangan' => '10GB + Unlimited, APLIKASI, YOUTUBE Dan IG 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'ID15',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (unlimit)',
            'harga' => 123215,
            'keterangan' => '15GB + Unlimited, APLIKASI, YOUTUBE Dan IG 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'ULH2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (unlimit)',
            'harga' => 15715,
            'keterangan' => 'Unlimited+1GB 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDJUMBO',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (unlimit)',
            'harga' => 150600,
            'keterangan' => 'Unlimited + Unlimited 30hr',
            'status' => 'Ada'
        ]);

        //paket indosat new freedom 30 hr
        DB::table('prices')->insert([
            'kode' => 'INF4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (New Freedom 30Hr)',
            'harga' => 26350,
            'keterangan' => '2GB+1GB(01-06)+1GB LOKAL-Jabodetabek+ 5MntTlp',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'INF8',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (New Freedom 30Hr)',
            'harga' => 35350,
            'keterangan' => '4GB+2GB(01-06)+2GB LOKAL-Jabodetabek+20MntTlp',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'INF14',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (New Freedom 30Hr)',
            'harga' => 48775,
            'keterangan' => '7.5GB+3GB(01-06)+3.5GB LOKAL-Jabodetabek+30MntTlp',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'INF20',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (New Freedom 30Hr)',
            'harga' => 68550,
            'keterangan' => '11GB+4GB(01-06)+5GB LOKAL-Jabodetabek+40MntTlp',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'INF30',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (New Freedom 30Hr)',
            'harga' => 99650,
            'keterangan' => '16GB+6GB(01-06)+8GB LOKAL-Jabodetabek+60MntTlp',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'INF50',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (New Freedom 30Hr)',
            'harga' => 151550,
            'keterangan' => '25GB+10GB(01-06)+15GB LOKAL-Jabodetabek+60MntTlp',
            'status' => 'Ada'
        ]);

        //paket indosat yellow
        DB::table('prices')->insert([
            'kode' => 'IDN1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Yellow)',
            'harga' => 3675,
            'keterangan' => 'Yellow 1GB, 1hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDN3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Yellow)',
            'harga' => 5175,
            'keterangan' => 'Yellow 1GB, 3hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDN7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Yellow)',
            'harga' => 10175,
            'keterangan' => 'Yellow 1GB, 7hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDN15',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Yellow)',
            'harga' => 13055,
            'keterangan' => 'Yellow 1GB, 7hr',
            'status' => 'Ada'
        ]);

        //paket internet indosat lainnya
        DB::table('prices')->insert([
            'kode' => 'IDM1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Lainnya)',
            'harga' => 19915,
            'keterangan' => 'INDOSAT DATA MINI 1 GB 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDM2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Lainnya)',
            'harga' => 34915,
            'keterangan' => 'INDOSAT DATA MINI 2 GB 30hr',
            'status' => 'Ada'
        ]);

        //paket internet indosat freedom
        DB::table('prices')->insert([
            'kode' => 'IF2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Freedom)',
            'harga' => 60300,
            'keterangan' => 'M 2GB + 3GB 4G + 5GB MIDN + 2GB APK/APPS+Tel',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IF4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Freedom)',
            'harga' => 90300,
            'keterangan' => 'L 4GB + 8GB 4G + 10GB MIDN + 4GB APK/APPS+Tel',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IF8',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Freedom)',
            'harga' => 149100,
            'keterangan' => 'XL 8GB + 12GB 4G + 15GB MIDN + 6GB APK/APPS+Tel',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IF12',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Freedom)',
            'harga' => 199100,
            'keterangan' => 'XXL 12GB + 25GB 4G + 20GB MIDN + 8GB APK/APPS+Tel',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IFF1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Freedom)',
            'harga' => 14855,
            'keterangan' => 'FREEDOM NON UNLIMITED 2GB (3G/4G) 24 Jam 15 hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IFF2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Freedom)',
            'harga' => 24855,
            'keterangan' => 'FREEDOM NON UNLIMITED 3GB (3G/4G) 24 Jam 30 hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IFF3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Freedom)',
            'harga' => 47715,
            'keterangan' => 'FREEDOM NON UNLIMITED 10GB (3G/4G) 24 Jam 30 hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IFF4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Freedom)',
            'harga' => 69615,
            'keterangan' => 'FREEDOM NON UNLIMITED 18GB (3G/4G) 24 Jam 30 hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IFF5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Freedom)',
            'harga' => 95715,
            'keterangan' => 'FREEDOM NON UNLIMITED 25GB (3G/4G) 24 Jam 30 hr',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel mini
        DB::table('prices')->insert([
            'kode' => 'TDM1H',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Mini)',
            'harga' => 11350,
            'keterangan' => 'FLASH 1GB 24h, 1Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDM1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Mini)',
            'harga' => 13200,
            'keterangan' => 'FLASH 1GB 24h, 3Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDM2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Mini)',
            'harga' => 16015,
            'keterangan' => 'FLASH 2GB 24h, 3Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDM5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Mini)',
            'harga' => 29800,
            'keterangan' => 'FLASH 5GB 24h, 3Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDM10',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Mini)',
            'harga' => 46950,
            'keterangan' => 'FLASH 10GB 24h, 3Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDM5M',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Mini)',
            'harga' => 46550,
            'keterangan' => 'FLASH 5GB 24h, 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDM10M',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Mini)',
            'harga' => 57500,
            'keterangan' => 'FLASH 10GB 24h, 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDM025B',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Mini)',
            'harga' => 17300,
            'keterangan' => 'FLASH 250MB 24h, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDM1B',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Mini)',
            'harga' => 39125,
            'keterangan' => 'FLASH 1GB 24h, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDM2B',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Mini)',
            'harga' => 49350,
            'keterangan' => 'FLASH 2GB 24h, 30Hr',
            'status' => 'Ada'
        ]);

        //paket internet telkosel 369
        DB::table('prices')->insert([
            'kode' => 'SDHOT5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 5725,
            'keterangan' => 'Telkomsel 35MB 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDHOT10',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 10215,
            'keterangan' => 'Telkomsel 100MB 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDHOT20',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 19055,
            'keterangan' => 'Telkomsel 250MB 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDHOT25',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 23915,
            'keterangan' => 'Telkomsel 400MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDHOT50',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 48615,
            'keterangan' => 'Telkomsel 2GB Aktif 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDHOT100',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 97600,
            'keterangan' => 'Telkomsel 3.5GB 3G/4G + Midnight 2GB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 1750,
            'keterangan' => 'Telkomsel 30MB 1HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD12',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 3750,
            'keterangan' => 'Telkomsel 100MB 1HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD13',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 4750,
            'keterangan' => 'Telkomsel 150MB 1HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD14',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 13215,
            'keterangan' => 'Telkomsel 1GB 3HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD15',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 16700,
            'keterangan' => 'Telkomsel 2GB 3HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD16',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 29550,
            'keterangan' => 'Telkomsel 5GB 3HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD17',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 37550,
            'keterangan' => 'Telkomsel 10GB 3HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 10950,
            'keterangan' => 'Telkomsel 400MB 7HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 22650,
            'keterangan' => 'Telkomsel 1GB 7HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD18',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 45750,
            'keterangan' => 'Telkomsel 10GB 7HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 31750,
            'keterangan' => 'Telkomsel 1,5GB 14HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 43815,
            'keterangan' => 'Telkomsel 2GB 14HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 61650,
            'keterangan' => 'Telkomsel 3GB 30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TSD8',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 102045,
            'keterangan' => 'Telkomsel 5GB 30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'FLASH1GB',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 25650,
            'keterangan' => 'TELKOMSEL FLASH 1 GB 24Jam 30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'FLASH2GB',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 49650,
            'keterangan' => 'TELKOMSEL FLASH 2 GB 24Jam 30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'FLASH4GB',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (369)',
            'harga' => 97650,
            'keterangan' => 'TELKOMSEL FLASH 4 GB 24Jam 30HR',
            'status' => 'Ada'
        ]);

        //paket internet zona 1-11
    }
}
