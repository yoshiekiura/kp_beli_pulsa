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
        //UPDATE HARGA TERAKHIR 05 Februari 2020


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
            'status' => 'Kosong'
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
            'kode' => 'KZL1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Keren Zmua)',
            'harga' => 15350,
            'keterangan' => 'Keren Zemua Lho WA+LINE+BBM 1GB 30D',
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
            'kode' => 'KZL3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Keren Zmua)',
            'harga' => 15350,
            'keterangan' => 'Keren Zemua Lho Yonder Music 1GB 30D',
            'status' => 'Ada'
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
            'kode' => 'KZL5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Axis (Keren Zmua)',
            'harga' => 31650,
            'keterangan' => 'Gaul Unlimited FUP 1.5GB,30hari',
            'status' => 'Kosong'
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

            //data indosat fix
        DB::table('prices')->insert([
            'kode' => 'IDF1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat Fix',
            'harga' => 12100,
            'keterangan' => 'ISAT DATA 1GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat Fix',
            'harga' => 24100,
            'keterangan' => 'ISAT DATA 2GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat Fix',
            'harga' => 33600,
            'keterangan' => 'ISAT DATA 3GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat Fix',
            'harga' => 48100,
            'keterangan' => 'ISAT DATA 4GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat Fix',
            'harga' => 59600,
            'keterangan' => 'ISAT DATA 5GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat Fix',
            'harga' => 67600,
            'keterangan' => 'ISAT DATA 6GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat Fix',
            'harga' => 75100,
            'keterangan' => 'ISAT DATA 7GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF8',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat Fix',
            'harga' => 82100,
            'keterangan' => 'ISAT DATA 8GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF9',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat Fix',
            'harga' => 89100,
            'keterangan' => 'ISAT DATA 9GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDF10',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat Fix',
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

        //paket internet indosat mini
        DB::table('prices')->insert([
            'kode' => 'IDM1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Mini)',
            'harga' => 19915,
            'keterangan' => 'INDOSAT DATA MINI 1 GB 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDM2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Mini)',
            'harga' => 34915,
            'keterangan' => 'INDOSAT DATA MINI 2 GB 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Mini)',
            'harga' => 1815,
            'keterangan' => 'ISAT DATA Mini 100MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Mini)',
            'harga' => 3215,
            'keterangan' => 'ISAT DATA Mini 200MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Mini)',
            'harga' => 3615,
            'keterangan' => 'ISAT DATA Mini 250MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Mini)',
            'harga' => 4915,
            'keterangan' => 'ISAT DATA Mini 300MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM9',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Mini)',
            'harga' => 6215,
            'keterangan' => 'ISAT DATA Mini 500MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM13',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Mini)',
            'harga' => 8855,
            'keterangan' => 'ISAT DATA Mini 700MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'IDFM14',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Indosat (Mini)',
            'harga' => 9355,
            'keterangan' => 'ISAT DATA Mini 750MB 30Hr',
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

        //Paket Internet Telkomsel AS
        DB::table('prices')->insert([
            'kode' => 'BULKAS1G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (As)',
            'harga' => 29600,
            'keterangan' => 'INTERNET MURAH, KARTU AS 1GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKAS2G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (As)',
            'harga' => 37600,
            'keterangan' => 'INTERNET MURAH, KARTU AS 2GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKAS3G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (As)',
            'harga' => 44600,
            'keterangan' => 'INTERNET MURAH, KARTU AS 3GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKAS5G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (As)',
            'harga' => 49600,
            'keterangan' => 'INTERNET MURAH, KARTU AS 5GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKAS15G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (As)',
            'harga' => 61600,
            'keterangan' => 'INTERNET MURAH, KARTU AS 15GB/7 hari',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel loop
        DB::table('prices')->insert([
            'kode' => 'BULKL1G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Loop)',
            'harga' => 29600,
            'keterangan' => 'INTERNET MURAH, KARTU LOOP 1GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKL2G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Loop)',
            'harga' => 37600,
            'keterangan' => 'INTERNET MURAH, KARTU LOOP 2GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKL3G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Loop)',
            'harga' => 44600,
            'keterangan' => 'INTERNET MURAH, KARTU LOOP 3GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKL5G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Loop)',
            'harga' => 49600,
            'keterangan' => 'INTERNET MURAH, KARTU LOOP 5GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKL15G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Loop)',
            'harga' => 61600,
            'keterangan' => 'INTERNET MURAH, KARTU LOOP 10GB/7 hari',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel simpati
        DB::table('prices')->insert([
            'kode' => 'BULKS1G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Simpati)',
            'harga' => 29600,
            'keterangan' => 'INTERNET MURAH, KARTU SIMPATI 1GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKS2G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Simpati)',
            'harga' => 37600,
            'keterangan' => 'INTERNET MURAH, KARTU SIMPATI 2GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKS3G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Simpati)',
            'harga' => 44600,
            'keterangan' => 'INTERNET MURAH, KARTU SIMPATI 3GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKS5G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Simpati)',
            'harga' => 49600,
            'keterangan' => 'INTERNET MURAH, KARTU SIMPATI 5GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKS15G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Simpati)',
            'harga' => 61600,
            'keterangan' => 'INTERNET MURAH, KARTU SIMPATI 15GB/7 hari',
            'status' => 'Ada'
        ]);

        //data telkomsel vas
        DB::table('prices')->insert([
            'kode' => 'BULKAD10G3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Vas)',
            'harga' => 5600,
            'keterangan' => 'TELKOMSEL TAMBAH VIDIO MAXstream 10GB 3HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKAD5G1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Vass)',
            'harga' => 5600,
            'keterangan' => 'TELKOMSEL TAMBAH Facebook,Instagram 5GB 1HR',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel hari
        DB::table('prices')->insert([
            'kode' => 'BULKH1G3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Hari)',
            'harga' => 24600,
            'keterangan' => 'INTERNET MURAH HARIAN 3GB/1HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKH3G1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Hari)',
            'harga' => 18600,
            'keterangan' => 'INTERNET MURAH HARIAN 1GB/3HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKH3G2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Hari)',
            'harga' => 24100,
            'keterangan' => 'INTERNET MURAH HARIAN 2GB/3HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKH3G3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Hari)',
            'harga' => 28600,
            'keterangan' => 'INTERNET MURAH HARIAN 3GB/3HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKH3G7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Hari)',
            'harga' => 28600,
            'keterangan' => 'INTERNET MURAH HARIAN 7GB/3HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKH3G15',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Hari)',
            'harga' => 48600,
            'keterangan' => 'INTERNET MURAH HARIAN 15GB/3HR',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel bulan
        DB::table('prices')->insert([
            'kode' => 'BULKB3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulan)',
            'harga' => 22950,
            'keterangan' => 'INTERNET MURAH BULANAN 1GB and 2GB Games/30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKB2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulan)',
            'harga' => 22950,
            'keterangan' => 'INTERNET MURAH BULANAN 1GB and 1GB Music/30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKB4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulan)',
            'harga' => 42250,
            'keterangan' => 'INTERNET MURAH BULANAN 3GB and 1GB OMG/30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKB7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulan)',
            'harga' => 69015,
            'keterangan' => 'INTERNET MURAH BULANAN 5GB and 2GB OMG/30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKB10',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulan)',
            'harga' => 97150,
            'keterangan' => 'INTERNET MURAH BULANAN 8GB and 2GB OMG/30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKB14',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulan)',
            'harga' => 110800,
            'keterangan' => 'INTERNET MURAH BULANAN 12GB and 2GB OMG/30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKB27',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulan)',
            'harga' => 173600,
            'keterangan' => 'INTERNET MURAH BULANAN 25GB and 2GB OMG/30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKB52',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulan)',
            'harga' => 220600,
            'keterangan' => 'INTERNET MURAH BULANAN 50GB and 2GB OMG/30HR',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel combo
        DB::table('prices')->insert([
            'kode' => 'BULKC6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Combo)',
            'harga' => 83400,
            'keterangan' => 'INTERNET MURAH 4.5GB,2GB OMG,100MNT+60SMS Tsel',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKC19',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Combo)',
            'harga' => 146100,
            'keterangan' => 'INTERNET MURAH 17GB,2GB OMG,300MNT+100SMS Tsel',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'BULKC30',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Combo)',
            'harga' => 199400,
            'keterangan' => 'INTERNET MURAH 28GB,2GB OMG,600MNT+200SMS Tsel',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel zona 1-8
        DB::table('prices')->insert([
            'kode' => 'TDBA4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-8)',
            'harga' => 44400,
            'keterangan' => '[4GB] 3GB Flash + 1GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBA7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-8)',
            'harga' => 74100,
            'keterangan' => '[7GB] 5GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBA10',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-8)',
            'harga' => 99100,
            'keterangan' => '[10GB] 8GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBA14',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-8)',
            'harga' => 111100,
            'keterangan' => '[14GB] 12GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBA27',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-8)',
            'harga' => 111100,
            'keterangan' => '[14GB] 12GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBA52',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-8)',
            'harga' => 221600,
            'keterangan' => '[52GB] 50GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBAC6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-8)',
            'harga' => 83600,
            'keterangan' => '[6,5GB] 4,5GB Flash + 2GB OMG!+100mnt+60sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBAC19',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-8)',
            'harga' => 146600,
            'keterangan' => '[19GB] 17GB Flash + 2GB OMG!+300mnt+100sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBAC28',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-8)',
            'harga' => 199600,
            'keterangan' => '[30GB] 28GB Flash+2GB OMG!+600mnt+200sms 30hr',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel zona 1-10
        DB::table('prices')->insert([
            'kode' => 'TDBZ4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-10)',
            'harga' => 53100,
            'keterangan' => '[4GB] 3GB Flash + 1GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBZ7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-10)',
            'harga' => 85100,
            'keterangan' => '[7GB] 5GB Flash + 2GB OMG! 24jam,30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBZ10',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-10)',
            'harga' => 104100,
            'keterangan' => '[10GB] 8GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBZ14',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-10)',
            'harga' => 115100,
            'keterangan' => '[14GB] 12GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBZ27',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-10)',
            'harga' => 195100,
            'keterangan' => '[27GB] 25GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBZ52',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-10)',
            'harga' => 238100,
            'keterangan' => '[52GB] 50GB Flash + 2GB OMG!,24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBZC6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-10)',
            'harga' => 101100,
            'keterangan' => '[6,5GB] 4,5GB Flash + 2GB OMG!+100mnt+60sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBZC17',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-10)',
            'harga' => 157100,
            'keterangan' => '[19GB] 17GB Flash + 2GB OMG!+300mnt+100sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBZC30',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-10)',
            'harga' => 230100,
            'keterangan' => '[30GB] 28GB Flash + 2GB OMG!+600mnt+200sms 30hr',
            'status' => 'Ada'
        ]);

        //paket internet zona 1-11
        DB::table('prices')->insert([
            'kode' => 'TDBMX6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 24300,
            'keterangan' => '1GB Flash + 5GB MAXStream 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBG3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 24300,
            'keterangan' => '1GB + 2GB GAMES 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBM2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 24300,
            'keterangan' => '1GB + 1GB MUSIC 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBF1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 24800,
            'keterangan' => '1GB Flash 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBF4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 54055,
            'keterangan' => '[4GB] 3GB Flash + 1GB OMG! 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBF7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 87350,
            'keterangan' => '[7GB] 5GB Flash + 2GB OMG! 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBF10',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 106955,
            'keterangan' => '[10GB] 8GB Flash + 2GB OMG! 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBF14',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 118750,
            'keterangan' => '[14GB] 12GB Flash + 2GB OMG! 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBF27',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 201055,
            'keterangan' => '[27GB] 25GB Flash + 2GB OMG! 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBF52',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 246095,
            'keterangan' => '[52GB] 50GB Flash + 2GB OMG! 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBC6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 99099,
            'keterangan' => '[6,5GB] 4,5GB Flash + 2GB OMG!+100mnt+60sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBC19',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 153995,
            'keterangan' => '[19GB] 17GB Flash + 2GB OMG!+300mnt+100sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBC30',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Zona 1-11)',
            'harga' => 225615,
            'keterangan' => '[30GB] 28GB Flash + 2GB OMG!+600mnt+200sms 30hr',
            'status' => 'Ada'
        ]);

        //paket internet bulk tsel semua zona
        DB::table('prices')->insert([
            'kode' => 'TDBP4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulk Tsel Semua Zona)',
            'harga' => 54275,
            'keterangan' => '[4GB] 3GB Flash + 1GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBP7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulk Tsel Semua Zona)',
            'harga' => 87765,
            'keterangan' => '[7GB] 5GB Flash + 2GB OMG! 24jam,30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBP10',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulk Tsel Semua Zona)',
            'harga' => 107465,
            'keterangan' => '[10GB] 8GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBP14',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulk Tsel Semua Zona)',
            'harga' => 119285,
            'keterangan' => '[14GB] 12GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBP27',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulk Tsel Semua Zona)',
            'harga' => 202025,
            'keterangan' => '[27GB] 25GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBP52',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulk Tsel Semua Zona)',
            'harga' => 247335,
            'keterangan' => '[52GB] 50GB Flash + 2GB OMG!,24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBPC6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulk Tsel Semua Zona)',
            'harga' => 99585,
            'keterangan' => '[6,5GB] 4,5GB Flash + 2GB OMG!+100mnt+60sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBPC17',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulk Tsel Semua Zona)',
            'harga' => 154745,
            'keterangan' => '[19GB] 17GB Flash+2GB OMG!+300mnt+100sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDBPC30',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Bulk Tsel Semua Zona)',
            'harga' => 226650,
            'keterangan' => '[30GB] 28GB Flash+2GB OMG!+600mnt+200sms 30hr',
            'status' => 'Ada'
        ]);

        //paket telkomsel data malam 00-07
        DB::table('prices')->insert([
            'kode' => 'SDM6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Data Malam 00-07)',
            'harga' => 23615,
            'keterangan' => 'Tsel Data Malam 15GB 30Hr (00-07)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDM4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Data Malam 00-07)',
            'harga' => 13615,
            'keterangan' => 'Tsel Data Malam 15GB 7Hr (00-07)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDM1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Data Malam 00-07)',
            'harga' => 3600,
            'keterangan' => 'Tsel Data Malam 1GB 1Hr (00-07)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDM2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Data Malam 00-07)',
            'harga' => 6615,
            'keterangan' => 'Tsel Data Malam 5GB 1Hr (00-07)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDM5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Data Malam 00-07)',
            'harga' => 16615,
            'keterangan' => 'Tsel Data Malam 5GB 30Hr (00-07)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDM3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Data Malam 00-07)',
            'harga' => 11715,
            'keterangan' => 'Tsel Data Malam 7GB 7Hr (00-07)',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel fix
        DB::table('prices')->insert([
            'kode' => 'SDF025',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Fix)',
            'harga' => 17025,
            'keterangan' => 'TSEL DATA 250MB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDF05',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Fix)',
            'harga' => 20025,
            'keterangan' => 'TSEL DATA 500MB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDF075',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Fix)',
            'harga' => 25750,
            'keterangan' => 'TSEL DATA 750MB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDF1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Fix)',
            'harga' => 28300,
            'keterangan' => 'TSEL DATA 1GB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDF2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Fix)',
            'harga' => 42300,
            'keterangan' => 'TSEL DATA 2GB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDF3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Fix)',
            'harga' => 61325,
            'keterangan' => 'TSEL DATA 3GB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDF4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Fix)',
            'harga' => 97425,
            'keterangan' => 'TSEL DATA 4GB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SDF8',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Telkomsel (Fix)',
            'harga' => 163325,
            'keterangan' => 'TSEL DATA 8GB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);


        // //paket internet telkomsel depok
        // DB::table('prices')->insert([
        //     'kode' => 'BDEPOK4',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Telkomsel (Depok)',
        //     'harga' => 39450,
        //     'keterangan' => '[4GB] 3GB Flash + 1GB OMG! 30hr',
        //     'status' => 'Ada'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'BDEPOK7',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Telkomsel (Depok)',
        //     'harga' => 64015,
        //     'keterangan' => '[7GB] 5GB Flash + 2GB OMG! 30hr',
        //     'status' => 'Ada'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'BDEPOK10',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Telkomsel (Depok)',
        //     'harga' => 90275,
        //     'keterangan' => '[10GB] 8GB Flash + 2GB OMG! 30hr',
        //     'status' => 'Ada'
        // ]);



        //paket internet smartfren
        DB::table('prices')->insert([
            'kode' => 'SMVB1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Smartfren',
            'harga' => 9800,
            'keterangan' => '1,25GB + 1,75GB (01-05) + 1GB Chat, 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SMVB2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Smartfren',
            'harga' => 18800,
            'keterangan' => '2GB + 2GB (01-05) + 1GB Chat, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SMVB3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Smartfren',
            'harga' => 27600,
            'keterangan' => '4GB + 4GB (01-05) + 2GB Chat, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SMVB4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Smartfren',
            'harga' => 55100,
            'keterangan' => '10GB + 20GB (01-05) + Gratis HOOQ, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SMVB5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Smartfren',
            'harga' => 93500,
            'keterangan' => '20GB + 40GB (01-05) + Gratis HOOQ + SmMusic, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SMVB6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Smartfren',
            'harga' => 135100,
            'keterangan' => '30GB + 60GB (01-05) + Gratis HOOQ + SmMusic, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SMVB7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Smartfren',
            'harga' => 180100,
            'keterangan' => '40GB + 80GB (01-05) + Gratis HOOQ + SmMusic, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'SMVB',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Smartfren',
            'harga' => 71836,
            'keterangan' => 'UNLIMITED 4G FUP 1GB/hari, 30Hr',
            'status' => 'Ada'
        ]);

        //aktivasi kpk tri
        DB::table('prices')->insert([
            'kode' => 'JANET',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri KPK(Kartu Perdana Kosong)',
            'harga' => 2850,
            'keterangan' => 'JANET',
            'status' => 'Ada'
        ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TPM10',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri KPK(Kartu Perdana Kosong)',
        //     'harga' => 117600,
        //     'keterangan' => 'Unlock KPK AON 10GB + 20GB 4G 30HR',
        //     'status' => 'Kosong'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TPM1',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri KPK(Kartu Perdana Kosong)',
        //     'harga' => 18615,
        //     'keterangan' => 'Unlock KPK AON 1GB + 1GB 4G 30Hr',
        //     'status' => 'Kosong'
        // ]);
        // DB::table('prices')->insert([
        //     'kode' => 'TPM2',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri KPK(Kartu Perdana Kosong)',
        //     'harga' => 31015,
        //     'keterangan' => 'Unlock KPK AON 2GB + 3GB 4G 30Hr',
        //     'status' => 'Kosong'
        // ]);
        // DB::table('prices')->insert([
        //     'kode' => 'TPM3',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri KPK(Kartu Perdana Kosong)',
        //     'harga' => 45215,
        //     'keterangan' => 'Unlock KPK AON 3GB + 6GB 4G 30Hr',
        //     'status' => 'Kosong'
        // ]);
        // DB::table('prices')->insert([
        //     'kode' => 'TPM4',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri KPK(Kartu Perdana Kosong)',
        //     'harga' => 46615,
        //     'keterangan' => 'Unlock KPK AON 4GB + 4GB 4G 30HR',
        //     'status' => 'Kosong'
        // ]);
        // DB::table('prices')->insert([
        //     'kode' => 'TPM5',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri KPK(Kartu Perdana Kosong)',
        //     'harga' => 65050,
        //     'keterangan' => 'Unlock KPK AON 5GB + 8GB 4G 30HR',
        //     'status' => 'Kosong'
        // ]);
        // DB::table('prices')->insert([
        //     'kode' => 'TPM6',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri KPK(Kartu Perdana Kosong)',
        //     'harga' => 72850,
        //     'keterangan' => 'Unlock KPK AON 6GB + 12GB 4G 30HR',
        //     'status' => 'Kosong'
        // ]);
        // DB::table('prices')->insert([
        //     'kode' => 'TPM8',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri KPK(Kartu Perdana Kosong)',
        //     'harga' => 97600,
        //     'keterangan' => 'Unlock KPK AON 8GB + 14GB 4G 30HR',
        //     'status' => 'Kosong'
        // ]);

        //Paket internet tri mini
        DB::table('prices')->insert([
            'kode' => 'TMH1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Mini)',
            'harga' => 11355,
            'keterangan' => 'TRI DATA MINI 1GB + 2K 5H',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TMH2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Mini)',
            'harga' => 15250,
            'keterangan' => 'TRI DATA MINI 1,5GB + 2K 7H',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TMSV1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Mini)',
            'harga' => 5445,
            'keterangan' => 'MIX SMALL [5 GB] 1GB + 4GB (24-09) 1Hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TMSV2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Mini)',
            'harga' => 10445,
            'keterangan' => 'MIX SMALL [1.5 GB] 500MB + 1GB YOUTBE 3Hari',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TMSV3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Mini)',
            'harga' => 15445,
            'keterangan' => 'MIX SMALL [5 GB] 2.5GB + 2.5GB (01-09) 7Hari',
            'status' => 'Ada'
        ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TMS4',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Mini)',
        //     'harga' => 15015,
        //     'keterangan' => 'MIX SMALL [5 GB] 1GB + 4GB (24-09) 7Hr',
        //     'status' => 'Kosong'
        // ]);
        // DB::table('prices')->insert([
        //     'kode' => 'TMS5',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Mini)',
        //     'harga' => 19915,
        //     'keterangan' => 'MIX SMALL [3 GB] 3Hr',
        //     'status' => 'Kosong'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TMS6',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Mini)',
        //     'harga' => 24915,
        //     'keterangan' => 'MIX SMALL [3.75 GB] 1.75GB + 2GB (4G) + VIU 7Hr',
        //     'status' => 'Kosong'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TMS7',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Mini)',
        //     'harga' => 49015,
        //     'keterangan' => 'MIX SMALL [12GB] 2GB + 10GB (4G) 30Hr',
        //     'status' => 'Kosong'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TMS8',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Mini)',
        //     'harga' => 88015,
        //     'keterangan' => 'MIX SMALL [24GB] 4GB + 20GB (4G) 30Hr',
        //     'status' => 'Kosong'
        // ]);

        //paket internet tri aon
        DB::table('prices')->insert([
            'kode' => 'AON1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Aon)',
            'harga' => 17850,
            'keterangan' => '1,5GB + GRATIS PULSA 2.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'AON2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Aon)',
            'harga' => 20850,
            'keterangan' => '2GB + GRATIS PULSA 2.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'AON3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Aon)',
            'harga' => 28850,
            'keterangan' => '3GB + GRATIS PULSA 2.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'AON6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Aon)',
            'harga' => 36850,
            'keterangan' => '6GB + GRATIS PULSA 2.000',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'AON8',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Aon)',
            'harga' => 51850,
            'keterangan' => '6GB + GRATIS PULSA 2.000 + UNLIMITED APK (01-17)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'AON10',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Aon)',
            'harga' => 77850,
            'keterangan' => '10GB + GRATIS PULSA 2.000 + UNLIMITED APK (01-17)',
            'status' => 'Ada'
        ]);

        //paket internet tri biasa
        DB::table('prices')->insert([
            'kode' => 'TRD1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri',
            'harga' => 20800,
            'keterangan' => '1GB Masa Aktf Kartu + (1GB 30Hr)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TRD2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri',
            'harga' => 33050,
            'keterangan' => '2GB Masa Aktf Kartu + (3GB 30Hr)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TRD3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri',
            'harga' => 47605,
            'keterangan' => '3GB Masa Aktf Kartu + (6GB+UNLI WA&LINE 15Hr)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TRD4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri',
            'harga' => 48855,
            'keterangan' => '4GB Masa Aktf Kartu + (4GB+UNLI WA&LINE 15Hr)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TRD5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri',
            'harga' => 67615,
            'keterangan' => '5GB Masa Aktf Kartu + (8GB+UNLI WA&LINE 15Hr)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TRD6',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri',
            'harga' => 76800,
            'keterangan' => '6GB Masa Aktf Kartu + (12GB+UNLI YTUBE 15Hr)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TRD8',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri',
            'harga' => 100015,
            'keterangan' => '8GB Masa Aktf Kartu + (4GB+UNLI YTUBE 15Hr)',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TRD10',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri',
            'harga' => 121325,
            'keterangan' => '10GB Masa Aktf Kartu + (20GB+UNLI YTUBE 15Hr)',
            'status' => 'Ada'
        ]);

        // //paket internet tri cinta
        // DB::table('prices')->insert([
        //     'kode' => 'TCN6',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Cinta)',
        //     'harga' => 73015,
        //     'keterangan' => '[50GB] 6GB+4GB+20GB Weekend+20GB Kendo 30Hr',
        //     'status' => 'Ada'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TCN10',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Cinta)',
        //     'harga' => 99015,
        //     'keterangan' => '[50GB] 10GB+8GB+32GB Weekend+20GB Kendo 30Hr',
        //     'status' => 'Ada'
        // ]);

        // //paket internet tri anynet
        // DB::table('prices')->insert([
        //     'kode' => 'TNY2',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Anynet)',
        //     'harga' => 34715,
        //     'keterangan' => '2GB + 20Mnt TLP 30Hr',
        //     'status' => 'Kosong'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TNY3',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Anynet)',
        //     'harga' => 59015,
        //     'keterangan' => '2GB + 30GB 4GB(1GB/HARI) + 30Mnt TLP 30Hr',
        //     'status' => 'Kosong'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TNY4',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Anynet)',
        //     'harga' => 78415,
        //     'keterangan' => '5GB + 30GB 4GB(1GB/HARI) + 30Mnt TLP 30Hr',
        //     'status' => 'Kosong'
        // ]);



        //paket internet tri getmore
        DB::table('prices')->insert([
            'kode' => 'TDG5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Getmore)',
            'harga' => 43225,
            'keterangan' => '500MB+5GB 00.00-12.00',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDG7',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Getmore)',
            'harga' => 73225,
            'keterangan' => '2GB+7GB 00.00-12.00 Pulsa 50rb',
            'status' => 'Ada'
        ]);

        //paket internet tri khusus
        DB::table('prices')->insert([
            'kode' => 'TDK9',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Khusus)',
            'harga' => 45050,
            'keterangan' => 'Internet TRI 3GB + (6GB NAS + Youtube 15Hr) 15Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDK12',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Khusus)',
            'harga' => 54055,
            'keterangan' => 'Internet TRI 12GB + Unlimited Youtube 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'TDK33',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Khusus)',
            'harga' => 76215,
            'keterangan' => 'Internet TRI 3GB + 30GB 4G 30Hr',
            'status' => 'Ada'
        ]);
        DB::table('prices')->insert([
            'kode' => 'TDK66',
            'detail_produk' => 'Paket Internet',
            'provider' => 'Three/Tri (Khusus)',
            'harga' => 103215,
            'keterangan' => 'Internet TRI 6GB + 60GB 4G 60Hr',
            'status' => 'Ada'
        ]);

        // //paket internet tri extra kuota
        // DB::table('prices')->insert([
        //     'kode' => 'TD1',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Extra Kuota)',
        //     'harga' => 5095,
        //     'keterangan' => 'TRI KUOTA ++ 80MB',
        //     'status' => 'Kosong'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TD2',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Extra Kuota)',
        //     'harga' => 10015,
        //     'keterangan' => 'TRI KUOTA ++ 300MB',
        //     'status' => 'Kosong'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TD3',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Extra Kuota)',
        //     'harga' => 19015,
        //     'keterangan' => 'TRI KUOTA ++ 650MB',
        //     'status' => 'Kosong'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TD4',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Extra Kuota)',
        //     'harga' => 32615,
        //     'keterangan' => 'TRI KUOTA ++ 1.25GB',
        //     'status' => 'Kosong'
        // ]);

        // DB::table('prices')->insert([
        //     'kode' => 'TD5',
        //     'detail_produk' => 'Paket Internet',
        //     'provider' => 'Three/Tri (Extra Kuota)',
        //     'harga' => 78415,
        //     'keterangan' => 'TRI KUOTA ++ 4.25GB',
        //     'status' => 'Kosong'
        // ]);

        //paket internet xl combo
        DB::table('prices')->insert([
            'kode' => 'XPLUSPLUS1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 53905,
            'keterangan' => 'Combo 5GB REG + 5GB YOUTUBE + 20MNT+30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XPLUSPLUS2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 80605,
            'keterangan' => 'Combo 10GB REG + 10GB YOUTUBE + 30MNT+30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XPLUSPLUS3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 115200,
            'keterangan' => 'Combo 15GB REG + 15GB YOUTUBE + 40MNT+30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XPLUSPLUS4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 162715,
            'keterangan' => 'Combo 20GB REG + 20GB YOUTUBE + 60MNT+30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XPLUSPLUS5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 218435,
            'keterangan' => 'Combo 35GB REG + 35GB YOUTUBE + 90MNT+30HR',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XCVIP2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 85015,
            'keterangan' => 'Cmb VIP 10GB+10GB YTube+Unli Ytube 01-06+30Mnt Tlp',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XCVIP3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 118615,
            'keterangan' => 'Cmb VIP 15GB+15GB YTube+Unli Ytube 01-06+30Mnt Tlp',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XCVIP4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 166015,
            'keterangan' => 'Cmb VIP 20GB+20GB YTube+Unli Ytube 01-06+60Mnt Tlp',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XCVIP5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 221015,
            'keterangan' => 'Cmb VIP 35GB+35GB YTube+Unli Ytube 01-06+90Mnt Tlp',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XCVIP1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 58450,
            'keterangan' => 'Cmb VIP 5GB+5GB YTube+Unli Ytube 01-06+20Mnt Tlp',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XCL1',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 28275,
            'keterangan' => 'XL Combo Lite 1,5GB + 1GB 4G + 1GB YT 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XCL4',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 93100,
            'keterangan' => 'XL Combo Lite 12GB + 8GB 4G + 1GB YT 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XCL5',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 117850,
            'keterangan' => 'XL Combo Lite 18GB + 12GB 4G + 1GB YT 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XCL2',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 38600,
            'keterangan' => 'XL Combo Lite 3GB + 2GB 4G + 1GB YT 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'XCL3',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Combo)',
            'harga' => 61115,
            'keterangan' => 'XL Combo Lite 6GB + 4GB 4G + 1GB YT 30Hr',
            'status' => 'Ada'
        ]);

        //paket internet xl hotrod
        DB::table('prices')->insert([
            'kode' => 'HOTROD38',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Hotrod)',
            'harga' => 29615,
            'keterangan' => 'HotRod 24jm 800MB,30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'HOTROD54',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Hotrod)',
            'harga' => 46015,
            'keterangan' => 'HotRod 24jm 1.5GB, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'HOTROD62',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Hotrod)',
            'harga' => 55815,
            'keterangan' => 'HotRod 24jm 3 GB,30Hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'HOTROD98',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Hotrod)',
            'harga' => 91015,
            'keterangan' => 'HotRod 24jm 6 GB,30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'HOTROD125',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Hotrod)',
            'harga' => 119075,
            'keterangan' => 'HotRod 24jm 8 GB,30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'HOTROD170',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Hotrod)',
            'harga' => 162015,
            'keterangan' => 'HotRod 24jm 12 GB,30hr',
            'status' => 'Ada'
        ]);

        DB::table('prices')->insert([
            'kode' => 'HOTROD206',
            'detail_produk' => 'Paket Internet',
            'provider' => 'XL (Hotrod)',
            'harga' => 197815,
            'keterangan' => 'HotRod 24jm 16 GB,30hr',
            'status' => 'Ada'
        ]);

    }
}
