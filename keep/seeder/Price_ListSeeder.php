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

        DB::table('price_lists')->insert([
            'kode' => 'X10',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 10830,
            'keterangan' => 'AXIS & XL Reguler 10.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'X15',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 15015,
            'keterangan' => 'AXIS & XL Reguler 15.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'X25',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 24855,
            'keterangan' => 'AXIS & XL Reguler 25.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'X30',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 29815,
            'keterangan' => 'AXIS & XL Reguler 30.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'X50',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 49415,
            'keterangan' => 'AXIS & XL Reguler 50.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'X100',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 98615,
            'keterangan' => 'AXIS & XL Reguler 100.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'X300',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 296815,
            'keterangan' => 'AXIS & XL Reguler 300.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'X500',
            'id_product' => 1,
            'id_provider' => 1,
            'harga' => 497000,
            'keterangan' => 'AXIS & XL Reguler 500.000',
            'status' => 'Ada'
        ]);

        //pulsa reguler indosat
        DB::table('price_lists')->insert([
            'kode' => 'I5',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 5900,
            'keterangan' => 'Indosat Reguler 5.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'I10',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 10900,
            'keterangan' => 'Indosat Reguler 10.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'I12',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 12205,
            'keterangan' => 'Indosat Reguler 12.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'I15',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 15325,
            'keterangan' => 'Indosat Reguler 15.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'I20',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 19955,
            'keterangan' => 'Indosat Reguler 20.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'I25',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 24825,
            'keterangan' => 'Indosat Reguler 25.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'I30',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 29815,
            'keterangan' => 'Indosat Reguler 30.000',
            'status' => 'Ada'
        ]);


        DB::table('price_lists')->insert([
            'kode' => 'I40',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 39600,
            'keterangan' => 'Indosat Reguler 40.000',
            'status' => 'Ada'
        ]);


        DB::table('price_lists')->insert([
            'kode' => 'I50',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 48925,
            'keterangan' => 'Indosat Reguler 50.000',
            'status' => 'Ada'
        ]);


        DB::table('price_lists')->insert([
            'kode' => 'I60',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 59750,
            'keterangan' => 'Indosat Reguler 60.000',
            'status' => 'Ada'
        ]);


        DB::table('price_lists')->insert([
            'kode' => 'I80',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 78925,
            'keterangan' => 'Indosat Reguler 80.000',
            'status' => 'Ada'
        ]);


        DB::table('price_lists')->insert([
            'kode' => 'I90',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 87250,
            'keterangan' => 'Indosat Reguler 90.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'I100',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 96805,
            'keterangan' => 'Indosat Reguler 100.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'I125',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 119800,
            'keterangan' => 'Indosat Reguler 125.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'I175',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 167800,
            'keterangan' => 'Indosat Reguler 175.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'I200',
            'id_product' => 1,
            'id_provider' => 2,
            'harga' => 186100,
            'keterangan' => 'Indosat Reguler 200.000',
            'status' => 'Ada'
        ]);

        //pulsa reguler telkomsel
        DB::table('price_lists')->insert([
            'kode' => 'S1',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 1495,
            'keterangan' => 'Telkomsel Reguler 1Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S5',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 5700,
            'keterangan' => 'Telkomsel Reguler 5Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S10',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 10325,
            'keterangan' => 'Telkomsel Reguler 10Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S15',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 14850,
            'keterangan' => 'Telkomsel Reguler 15Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S20',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 20125,
            'keterangan' => 'Telkomsel Reguler 20Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S25',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 24815,
            'keterangan' => 'Telkomsel Reguler 25Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S30',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 30075,
            'keterangan' => 'Telkomsel Reguler 30Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S35',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 34855,
            'keterangan' => 'Telkomsel Reguler 35Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S40',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 39805,
            'keterangan' => 'Telkomsel Reguler 40Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S45',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 44755,
            'keterangan' => 'Telkomsel Reguler 45Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S50',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 49415,
            'keterangan' => 'Telkomsel Reguler 50Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S55',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 54715,
            'keterangan' => 'Telkomsel Reguler 55Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S60',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 59850,
            'keterangan' => 'Telkomsel Reguler 60Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S65',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 64750,
            'keterangan' => 'Telkomsel Reguler 65Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S70',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 69945,
            'keterangan' => 'Telkomsel Reguler 70Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S75',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 74600,
            'keterangan' => 'Telkomsel Reguler 75Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S80',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 79525,
            'keterangan' => 'Telkomsel Reguler 80Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S85',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 84475,
            'keterangan' => 'Telkomsel Reguler 85Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S90',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 89525,
            'keterangan' => 'Telkomsel Reguler 90Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S95',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 94450,
            'keterangan' => 'Telkomsel Reguler 95Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S100',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 96995,
            'keterangan' => 'Telkomsel Reguler 100Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S150',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 148075,
            'keterangan' => 'Telkomsel Reguler 150Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S200',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 197800,
            'keterangan' => 'Telkomsel Reguler 200Rb',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'S300',
            'id_product' => 1,
            'id_provider' => 3,
            'harga' => 295700,
            'keterangan' => 'Telkomsel Reguler 300Rb',
            'status' => 'Ada'
        ]);

        //pulsa reguler smartfren
        DB::table('price_lists')->insert([
            'kode' => 'SM5',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 5045,
            'keterangan' => 'Smartfren Reguler 5.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SM10',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 9945,
            'keterangan' => 'Smartfren Reguler 10.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SM20',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 19775,
            'keterangan' => 'Smartfren Reguler 20.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SM25',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 24675,
            'keterangan' => 'Smartfren Reguler 25.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SM30',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 29650,
            'keterangan' => 'Smartfren Reguler 30.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SM50',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 49200,
            'keterangan' => 'Smartfren Reguler 50.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SM60',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 59000,
            'keterangan' => 'Smartfren Reguler 60.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SM100',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 98200,
            'keterangan' => 'Smartfren Reguler 100.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SM150',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 148100,
            'keterangan' => 'Smartfren Reguler 150.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SM200',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 197600,
            'keterangan' => 'Smartfren Reguler 200.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SM300',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 295600,
            'keterangan' => 'Smartfren Reguler 300.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SM500',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 495600,
            'keterangan' => 'Smartfren Reguler 500.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SM1000',
            'id_product' => 1,
            'id_provider' => 4,
            'harga' => 987100,
            'keterangan' => 'Smartfren Reguler 1.000.000',
            'status' => 'Ada'
        ]);

        //paket reguler tri
        DB::table('price_lists')->insert([
            'kode' => 'T1',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 1271,
            'keterangan' => 'TRI Reguler 1.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T2',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 2247,
            'keterangan' => 'TRI Reguler 2.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T3',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 3223,
            'keterangan' => 'TRI Reguler 3.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T4',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 4394,
            'keterangan' => 'TRI Reguler 4.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T5',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 5370,
            'keterangan' => 'TRI Reguler 5.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T6',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 6326,
            'keterangan' => 'TRI Reguler 6.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T7',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 7322,
            'keterangan' => 'TRI Reguler 7.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T8',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 8298,
            'keterangan' => 'TRI Reguler 8.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T9',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 9274,
            'keterangan' => 'TRI Reguler 9.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T10',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 10250,
            'keterangan' => 'TRI Reguler 10.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T15',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 14740,
            'keterangan' => 'TRI Reguler 15.000',
            'status' => 'Kosong'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T20',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 19620,
            'keterangan' => 'TRI Reguler 20.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T25',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 24500,
            'keterangan' => 'TRI Reguler 25.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T30',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 29380,
            'keterangan' => 'TRI Reguler 30.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T50',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 48900,
            'keterangan' => 'TRI Reguler 50.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T75',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 73300,
            'keterangan' => 'TRI Reguler 75.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'T100',
            'id_product' => 1,
            'id_provider' => 5,
            'harga' => 97700,
            'keterangan' => 'TRI Reguler 100.000',
            'status' => 'Ada'
        ]);

        //paket data
        //paket data axis bronet
        DB::table('price_lists')->insert([
            'kode' => 'BROSIS15',
            'id_product' => 2,
            'id_provider' => 6,
            'harga' => 10250,
            'keterangan' => 'AXIS BRONET 300MB 24jam 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BROSIS27',
            'id_product' => 2,
            'id_provider' => 6,
            'harga' => 17700,
            'keterangan' => 'AXIS BRONET 1GB 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BROSIS35',
            'id_product' => 2,
            'id_provider' => 6,
            'harga' => 25915,
            'keterangan' => 'AXIS BRONET 2GB 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BROSIS45',
            'id_product' => 2,
            'id_provider' => 6,
            'harga' => 34915,
            'keterangan' => 'AXIS BRONET 3GB 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BROSIS62',
            'id_product' => 2,
            'id_provider' => 6,
            'harga' => 52915,
            'keterangan' => 'AXIS BRONET 5GB 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BROSIS80',
            'id_product' => 2,
            'id_provider' => 6,
            'harga' => 72715,
            'keterangan' => 'AXIS BRONET 8GB 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BROSIS100',
            'id_product' => 2,
            'id_provider' => 6,
            'harga' => 89350,
            'keterangan' => 'AXIS BRONET 10GB 24Jam 30Hr',
            'status' => 'Ada'
        ]);

        //paket internet axis keren zmua

        DB::table('price_lists')->insert([
            'kode' => 'KZL1',
            'id_product' => 2,
            'id_provider' => 7,
            'harga' => 15350,
            'keterangan' => 'Keren Zemua Lho WA+LINE+BBM 1GB 30D',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'KZL2',
            'id_product' => 2,
            'id_provider' => 7,
            'harga' => 15350,
            'keterangan' => 'Keren Zemua Lho FB+Twitter+Path 1GB 30D',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'KZL3',
            'id_product' => 2,
            'id_provider' => 7,
            'harga' => 15350,
            'keterangan' => 'Keren Zemua Lho Yonder Music 1GB 30D',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'KZL4',
            'id_product' => 2,
            'id_provider' => 7,
            'harga' => 20450,
            'keterangan' => 'Keren Zemua Lho WA+LINE+BBM+FB+Twitter+Path 1GB 30D',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'KZL5',
            'id_product' => 2,
            'id_provider' => 7,
            'harga' => 31650,
            'keterangan' => 'Gaul Unlimited FUP 1.5GB,30hari',
            'status' => 'Kosong'
        ]);

        //paket internet axis owsem
        DB::table('price_lists')->insert([
            'kode' => 'DAO1',
            'id_product' => 2,
            'id_provider' => 8,
            'harga' => 20350,
            'keterangan' => 'OWSEM 1GB+1GB(4G) + 2GB (Games+ Music) 30H',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'DAO2',
            'id_product' => 2,
            'id_provider' => 8,
            'harga' => 32350,
            'keterangan' => 'OWSEM 1GB+3GB(4G) + 4GB (Games+ Music) 30H',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'DAO3',
            'id_product' => 2,
            'id_provider' => 8,
            'harga' => 52100,
            'keterangan' => 'OWSEM 2GB+6GB(4G) + 8GB (Games+ Music) 30H',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'DAO4',
            'id_product' => 2,
            'id_provider' => 8,
            'harga' => 66650,
            'keterangan' => 'OWSEM 3GB+9GB(4G) + 12GB (Games+ Music) 30H',
            'status' => 'Ada'
        ]);

         //data indosat fix
         DB::table('price_lists')->insert([
            'kode' => 'IDF1',
            'id_product' => 2,
            'id_provider' => 9,
            'harga' => 12100,
            'keterangan' => 'ISAT DATA 1GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDF2',
            'id_product' => 2,
            'id_provider' => 9,
            'harga' => 24100,
            'keterangan' => 'ISAT DATA 2GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDF3',
            'id_product' => 2,
            'id_provider' => 9,
            'harga' => 33600,
            'keterangan' => 'ISAT DATA 3GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDF4',
            'id_product' => 2,
            'id_provider' => 9,
            'harga' => 48100,
            'keterangan' => 'ISAT DATA 4GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDF5',
            'id_product' => 2,
            'id_provider' => 9,
            'harga' => 59600,
            'keterangan' => 'ISAT DATA 5GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDF6',
            'id_product' => 2,
            'id_provider' => 9,
            'harga' => 67600,
            'keterangan' => 'ISAT DATA 6GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDF7',
            'id_product' => 2,
            'id_provider' => 9,
            'harga' => 75100,
            'keterangan' => 'ISAT DATA 7GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDF8',
            'id_product' => 2,
            'id_provider' => 9,
            'harga' => 82100,
            'keterangan' => 'ISAT DATA 8GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDF9',
            'id_product' => 2,
            'id_provider' => 9,
            'harga' => 89100,
            'keterangan' => 'ISAT DATA 9GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDF10',
            'id_product' => 2,
            'id_provider' => 9,
            'harga' => 90600,
            'keterangan' => 'ISAT DATA 10GB All Band 24h, 30hr',
            'status' => 'Ada'
        ]);

        //paket internet indosat unlimit
        DB::table('price_lists')->insert([
            'kode' => 'ID1',
            'id_product' => 2,
            'id_provider' => 10,
            'harga' => 24355,
            'keterangan' => '1GB + Unlimited WA,FB,TWIT,LINE,GOJEK,GRAB, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'ID2',
            'id_product' => 2,
            'id_provider' => 10,
            'harga' => 38355,
            'keterangan' => '2GB + Unlimited, WA,FB,TWIT,LINE,GOJEK,GRAB 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'ID3',
            'id_product' => 2,
            'id_provider' => 10,
            'harga' => 57355,
            'keterangan' => '3GB + Unlimited, APLIKASI Dan YOUTUBE 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'ID4',
            'id_product' => 2,
            'id_provider' => 10,
            'harga' => 64050,
            'keterangan' => '4GB 24JAM + 4GB apl + 20GB 00-06 (30HR)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'ID7',
            'id_product' => 2,
            'id_provider' => 10,
            'harga' => 76215,
            'keterangan' => '7GB + Unlimited, APLIKASI, YOUTUBE Dan IG 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'ID10',
            'id_product' => 2,
            'id_provider' => 10,
            'harga' => 96215,
            'keterangan' => '10GB + Unlimited, APLIKASI, YOUTUBE Dan IG 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'ID15',
            'id_product' => 2,
            'id_provider' => 10,
            'harga' => 123215,
            'keterangan' => '15GB + Unlimited, APLIKASI, YOUTUBE Dan IG 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'ULH2',
            'id_product' => 2,
            'id_provider' => 10,
            'harga' => 15715,
            'keterangan' => 'Unlimited+1GB 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDJUMBO',
            'id_product' => 2,
            'id_provider' => 10,
            'harga' => 150600,
            'keterangan' => 'Unlimited + Unlimited 30hr',
            'status' => 'Ada'
        ]);

        //paket indosat new freedom 30 hr
        DB::table('price_lists')->insert([
            'kode' => 'INF4',
            'id_product' => 2,
            'id_provider' => 11,
            'harga' => 26350,
            'keterangan' => '2GB+1GB(01-06)+1GB LOKAL-Jabodetabek+ 5MntTlp',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'INF8',
            'id_product' => 2,
            'id_provider' => 11,
            'harga' => 35350,
            'keterangan' => '4GB+2GB(01-06)+2GB LOKAL-Jabodetabek+20MntTlp',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'INF14',
            'id_product' => 2,
            'id_provider' => 11,
            'harga' => 48775,
            'keterangan' => '7.5GB+3GB(01-06)+3.5GB LOKAL-Jabodetabek+30MntTlp',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'INF20',
            'id_product' => 2,
            'id_provider' => 11,
            'harga' => 68550,
            'keterangan' => '11GB+4GB(01-06)+5GB LOKAL-Jabodetabek+40MntTlp',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'INF30',
            'id_product' => 2,
            'id_provider' => 11,
            'harga' => 99650,
            'keterangan' => '16GB+6GB(01-06)+8GB LOKAL-Jabodetabek+60MntTlp',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'INF50',
            'id_product' => 2,
            'id_provider' => 11,
            'harga' => 151550,
            'keterangan' => '25GB+10GB(01-06)+15GB LOKAL-Jabodetabek+60MntTlp',
            'status' => 'Ada'
        ]);

        //paket indosat yellow
        DB::table('price_lists')->insert([
            'kode' => 'IDN1',
            'id_product' => 2,
            'id_provider' => 12,
            'harga' => 3675,
            'keterangan' => 'Yellow 1GB, 1hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDN3',
            'id_product' => 2,
            'id_provider' => 12,
            'harga' => 5175,
            'keterangan' => 'Yellow 1GB, 3hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDN7',
            'id_product' => 2,
            'id_provider' => 12,
            'harga' => 10175,
            'keterangan' => 'Yellow 1GB, 7hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDN15',
            'id_product' => 2,
            'id_provider' => 12,
            'harga' => 13055,
            'keterangan' => 'Yellow 1GB, 7hr',
            'status' => 'Ada'
        ]);

        //paket internet indosat mini
        DB::table('price_lists')->insert([
            'kode' => 'IDM1',
            'id_product' => 2,
            'id_provider' => 13,
            'harga' => 19915,
            'keterangan' => 'INDOSAT DATA MINI 1 GB 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDM2',
            'id_product' => 2,
            'id_provider' => 13,
            'harga' => 34915,
            'keterangan' => 'INDOSAT DATA MINI 2 GB 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDFM1',
            'id_product' => 2,
            'id_provider' => 13,
            'harga' => 1815,
            'keterangan' => 'ISAT DATA Mini 100MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDFM3',
            'id_product' => 2,
            'id_provider' => 13,
            'harga' => 3215,
            'keterangan' => 'ISAT DATA Mini 200MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDFM4',
            'id_product' => 2,
            'id_provider' => 13,
            'harga' => 3615,
            'keterangan' => 'ISAT DATA Mini 250MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDFM5',
            'id_product' => 2,
            'id_provider' => 13,
            'harga' => 4915,
            'keterangan' => 'ISAT DATA Mini 300MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDFM9',
            'id_product' => 2,
            'id_provider' => 13,
            'harga' => 6215,
            'keterangan' => 'ISAT DATA Mini 500MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDFM13',
            'id_product' => 2,
            'id_provider' => 13,
            'harga' => 8855,
            'keterangan' => 'ISAT DATA Mini 700MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IDFM14',
            'id_product' => 2,
            'id_provider' => 13,
            'harga' => 9355,
            'keterangan' => 'ISAT DATA Mini 750MB 30Hr',
            'status' => 'Ada'
        ]);

        //paket internet indosat freedom
        DB::table('price_lists')->insert([
            'kode' => 'IF2',
            'id_product' => 2,
            'id_provider' => 14,
            'harga' => 60300,
            'keterangan' => 'M 2GB + 3GB 4G + 5GB MIDN + 2GB APK/APPS+Tel',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IF4',
            'id_product' => 2,
            'id_provider' => 14,
            'harga' => 90300,
            'keterangan' => 'L 4GB + 8GB 4G + 10GB MIDN + 4GB APK/APPS+Tel',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IF8',
            'id_product' => 2,
            'id_provider' => 14,
            'harga' => 149100,
            'keterangan' => 'XL 8GB + 12GB 4G + 15GB MIDN + 6GB APK/APPS+Tel',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IF12',
            'id_product' => 2,
            'id_provider' => 14,
            'harga' => 199100,
            'keterangan' => 'XXL 12GB + 25GB 4G + 20GB MIDN + 8GB APK/APPS+Tel',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IFF1',
            'id_product' => 2,
            'id_provider' => 14,
            'harga' => 14855,
            'keterangan' => 'FREEDOM NON UNLIMITED 2GB (3G/4G) 24 Jam 15 hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IFF2',
            'id_product' => 2,
            'id_provider' => 14,
            'harga' => 24855,
            'keterangan' => 'FREEDOM NON UNLIMITED 3GB (3G/4G) 24 Jam 30 hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IFF3',
            'id_product' => 2,
            'id_provider' => 14,
            'harga' => 47715,
            'keterangan' => 'FREEDOM NON UNLIMITED 10GB (3G/4G) 24 Jam 30 hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IFF4',
            'id_product' => 2,
            'id_provider' => 14,
            'harga' => 69615,
            'keterangan' => 'FREEDOM NON UNLIMITED 18GB (3G/4G) 24 Jam 30 hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'IFF5',
            'id_product' => 2,
            'id_provider' => 14,
            'harga' => 95715,
            'keterangan' => 'FREEDOM NON UNLIMITED 25GB (3G/4G) 24 Jam 30 hr',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel mini
        DB::table('price_lists')->insert([
            'kode' => 'TDM1H',
            'id_product' => 2,
            'id_provider' => 15,
            'harga' => 11350,
            'keterangan' => 'FLASH 1GB 24h, 1Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDM1',
            'id_product' => 2,
            'id_provider' => 15,
            'harga' => 13200,
            'keterangan' => 'FLASH 1GB 24h, 3Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDM2',
            'id_product' => 2,
            'id_provider' => 15,
            'harga' => 16015,
            'keterangan' => 'FLASH 2GB 24h, 3Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDM5',
            'id_product' => 2,
            'id_provider' => 15,
            'harga' => 29800,
            'keterangan' => 'FLASH 5GB 24h, 3Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDM10',
            'id_product' => 2,
            'id_provider' => 15,
            'harga' => 46950,
            'keterangan' => 'FLASH 10GB 24h, 3Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDM5M',
            'id_product' => 2,
            'id_provider' => 15,
            'harga' => 46550,
            'keterangan' => 'FLASH 5GB 24h, 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDM10M',
            'id_product' => 2,
            'id_provider' => 15,
            'harga' => 57500,
            'keterangan' => 'FLASH 10GB 24h, 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDM025B',
            'id_product' => 2,
            'id_provider' => 15,
            'harga' => 17300,
            'keterangan' => 'FLASH 250MB 24h, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDM1B',
            'id_product' => 2,
            'id_provider' => 15,
            'harga' => 39125,
            'keterangan' => 'FLASH 1GB 24h, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDM2B',
            'id_product' => 2,
            'id_provider' => 15,
            'harga' => 49350,
            'keterangan' => 'FLASH 2GB 24h, 30Hr',
            'status' => 'Ada'
        ]);

        //paket internet telkosel 369
        DB::table('price_lists')->insert([
            'kode' => 'SDHOT5',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 5725,
            'keterangan' => 'Telkomsel 35MB 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDHOT10',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 10215,
            'keterangan' => 'Telkomsel 100MB 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDHOT20',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 19055,
            'keterangan' => 'Telkomsel 250MB 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDHOT25',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 23915,
            'keterangan' => 'Telkomsel 400MB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDHOT50',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 48615,
            'keterangan' => 'Telkomsel 2GB Aktif 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDHOT100',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 97600,
            'keterangan' => 'Telkomsel 3.5GB 3G/4G + Midnight 2GB 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD1',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 1750,
            'keterangan' => 'Telkomsel 30MB 1HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD12',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 3750,
            'keterangan' => 'Telkomsel 100MB 1HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD13',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 4750,
            'keterangan' => 'Telkomsel 150MB 1HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD14',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 13215,
            'keterangan' => 'Telkomsel 1GB 3HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD15',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 16700,
            'keterangan' => 'Telkomsel 2GB 3HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD16',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 29550,
            'keterangan' => 'Telkomsel 5GB 3HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD17',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 37550,
            'keterangan' => 'Telkomsel 10GB 3HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD3',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 10950,
            'keterangan' => 'Telkomsel 400MB 7HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD4',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 22650,
            'keterangan' => 'Telkomsel 1GB 7HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD18',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 45750,
            'keterangan' => 'Telkomsel 10GB 7HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD5',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 31750,
            'keterangan' => 'Telkomsel 1,5GB 14HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD6',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 43815,
            'keterangan' => 'Telkomsel 2GB 14HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD7',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 61650,
            'keterangan' => 'Telkomsel 3GB 30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TSD8',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 102045,
            'keterangan' => 'Telkomsel 5GB 30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'FLASH1GB',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 25650,
            'keterangan' => 'TELKOMSEL FLASH 1 GB 24Jam 30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'FLASH2GB',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 49650,
            'keterangan' => 'TELKOMSEL FLASH 2 GB 24Jam 30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'FLASH4GB',
            'id_product' => 2,
            'id_provider' => 16,
            'harga' => 97650,
            'keterangan' => 'TELKOMSEL FLASH 4 GB 24Jam 30HR',
            'status' => 'Ada'
        ]);

        //Paket Internet Telkomsel AS
        DB::table('price_lists')->insert([
            'kode' => 'BULKAS1G7',
            'id_product' => 2,
            'id_provider' => 17,
            'harga' => 29600,
            'keterangan' => 'INTERNET MURAH, KARTU AS 1GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKAS2G7',
            'id_product' => 2,
            'id_provider' => 17,
            'harga' => 37600,
            'keterangan' => 'INTERNET MURAH, KARTU AS 2GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKAS3G7',
            'id_product' => 2,
            'id_provider' => 17,
            'harga' => 44600,
            'keterangan' => 'INTERNET MURAH, KARTU AS 3GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKAS5G7',
            'id_product' => 2,
            'id_provider' => 17,
            'harga' => 49600,
            'keterangan' => 'INTERNET MURAH, KARTU AS 5GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKAS15G7',
            'id_product' => 2,
            'id_provider' => 17,
            'harga' => 61600,
            'keterangan' => 'INTERNET MURAH, KARTU AS 15GB/7 hari',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel loop
        DB::table('price_lists')->insert([
            'kode' => 'BULKL1G7',
            'id_product' => 2,
            'id_provider' => 18,
            'harga' => 29600,
            'keterangan' => 'INTERNET MURAH, KARTU LOOP 1GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKL2G7',
            'id_product' => 2,
            'id_provider' => 18,
            'harga' => 37600,
            'keterangan' => 'INTERNET MURAH, KARTU LOOP 2GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKL3G7',
            'id_product' => 2,
            'id_provider' => 18,
            'harga' => 44600,
            'keterangan' => 'INTERNET MURAH, KARTU LOOP 3GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKL5G7',
            'id_product' => 2,
            'id_provider' => 18,
            'harga' => 49600,
            'keterangan' => 'INTERNET MURAH, KARTU LOOP 5GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKL15G7',
            'id_product' => 2,
            'id_provider' => 18,
            'harga' => 61600,
            'keterangan' => 'INTERNET MURAH, KARTU LOOP 10GB/7 hari',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel simpati
        DB::table('price_lists')->insert([
            'kode' => 'BULKS1G7',
            'id_product' => 2,
            'id_provider' => 19,
            'harga' => 29600,
            'keterangan' => 'INTERNET MURAH, KARTU SIMPATI 1GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKS2G7',
            'id_product' => 2,
            'id_provider' => 19,
            'harga' => 37600,
            'keterangan' => 'INTERNET MURAH, KARTU SIMPATI 2GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKS3G7',
            'id_product' => 2,
            'id_provider' => 19,
            'harga' => 44600,
            'keterangan' => 'INTERNET MURAH, KARTU SIMPATI 3GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKS5G7',
            'id_product' => 2,
            'id_provider' => 19,
            'harga' => 49600,
            'keterangan' => 'INTERNET MURAH, KARTU SIMPATI 5GB/7 hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKS15G7',
            'id_product' => 2,
            'id_provider' => 19,
            'harga' => 61600,
            'keterangan' => 'INTERNET MURAH, KARTU SIMPATI 15GB/7 hari',
            'status' => 'Ada'
        ]);

        //data telkomsel vas
        DB::table('price_lists')->insert([
            'kode' => 'BULKAD10G3',
            'id_product' => 2,
            'id_provider' => 20,
            'harga' => 5600,
            'keterangan' => 'TELKOMSEL TAMBAH VIDIO MAXstream 10GB 3HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKAD5G1',
            'id_product' => 2,
            'id_provider' => 20,
            'harga' => 5600,
            'keterangan' => 'TELKOMSEL TAMBAH Facebook,Instagram 5GB 1HR',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel hari
        DB::table('price_lists')->insert([
            'kode' => 'BULKH1G3',
            'id_product' => 2,
            'id_provider' => 21,
            'harga' => 24600,
            'keterangan' => 'INTERNET MURAH HARIAN 3GB/1HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKH3G1',
            'id_product' => 2,
            'id_provider' => 21,
            'harga' => 18600,
            'keterangan' => 'INTERNET MURAH HARIAN 1GB/3HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKH3G2',
            'id_product' => 2,
            'id_provider' => 21,
            'harga' => 24100,
            'keterangan' => 'INTERNET MURAH HARIAN 2GB/3HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKH3G3',
            'id_product' => 2,
            'id_provider' => 21,
            'harga' => 28600,
            'keterangan' => 'INTERNET MURAH HARIAN 3GB/3HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKH3G7',
            'id_product' => 2,
            'id_provider' => 21,
            'harga' => 28600,
            'keterangan' => 'INTERNET MURAH HARIAN 7GB/3HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKH3G15',
            'id_product' => 2,
            'id_provider' => 21,
            'harga' => 48600,
            'keterangan' => 'INTERNET MURAH HARIAN 15GB/3HR',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel bulan
        DB::table('price_lists')->insert([
            'kode' => 'BULKB3',
            'id_product' => 2,
            'id_provider' => 22,
            'harga' => 22950,
            'keterangan' => 'INTERNET MURAH BULANAN 1GB and 2GB Games/30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKB2',
            'id_product' => 2,
            'id_provider' => 22,
            'harga' => 22950,
            'keterangan' => 'INTERNET MURAH BULANAN 1GB and 1GB Music/30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKB4',
            'id_product' => 2,
            'id_provider' => 22,
            'harga' => 42250,
            'keterangan' => 'INTERNET MURAH BULANAN 3GB and 1GB OMG/30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKB7',
            'id_product' => 2,
            'id_provider' => 22,
            'harga' => 69015,
            'keterangan' => 'INTERNET MURAH BULANAN 5GB and 2GB OMG/30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKB10',
            'id_product' => 2,
            'id_provider' => 22,
            'harga' => 97150,
            'keterangan' => 'INTERNET MURAH BULANAN 8GB and 2GB OMG/30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKB14',
            'id_product' => 2,
            'id_provider' => 22,
            'harga' => 110800,
            'keterangan' => 'INTERNET MURAH BULANAN 12GB and 2GB OMG/30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKB27',
            'id_product' => 2,
            'id_provider' => 22,
            'harga' => 173600,
            'keterangan' => 'INTERNET MURAH BULANAN 25GB and 2GB OMG/30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKB52',
            'id_product' => 2,
            'id_provider' => 22,
            'harga' => 220600,
            'keterangan' => 'INTERNET MURAH BULANAN 50GB and 2GB OMG/30HR',
            'status' => 'Ada'
        ]);

         //paket internet telkomsel combo
         DB::table('price_lists')->insert([
            'kode' => 'BULKC6',
            'id_product' => 2,
            'id_provider' => 23,
            'harga' => 83400,
            'keterangan' => 'INTERNET MURAH 4.5GB,2GB OMG,100MNT+60SMS Tsel',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKC19',
            'id_product' => 2,
            'id_provider' => 23,
            'harga' => 146100,
            'keterangan' => 'INTERNET MURAH 17GB,2GB OMG,300MNT+100SMS Tsel',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'BULKC30',
            'id_product' => 2,
            'id_provider' => 23,
            'harga' => 199400,
            'keterangan' => 'INTERNET MURAH 28GB,2GB OMG,600MNT+200SMS Tsel',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel zona 1-8
        DB::table('price_lists')->insert([
            'kode' => 'TDBA4',
            'id_product' => 2,
            'id_provider' => 24,
            'harga' => 44400,
            'keterangan' => '[4GB] 3GB Flash + 1GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBA7',
            'id_product' => 2,
            'id_provider' => 24,
            'harga' => 74100,
            'keterangan' => '[7GB] 5GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBA10',
            'id_product' => 2,
            'id_provider' => 24,
            'harga' => 99100,
            'keterangan' => '[10GB] 8GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBA14',
            'id_product' => 2,
            'id_provider' => 24,
            'harga' => 111100,
            'keterangan' => '[14GB] 12GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBA27',
            'id_product' => 2,
            'id_provider' => 24,
            'harga' => 111100,
            'keterangan' => '[14GB] 12GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBA52',
            'id_product' => 2,
            'id_provider' => 24,
            'harga' => 221600,
            'keterangan' => '[52GB] 50GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBAC6',
            'id_product' => 2,
            'id_provider' => 24,
            'harga' => 83600,
            'keterangan' => '[6,5GB] 4,5GB Flash + 2GB OMG!+100mnt+60sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBAC19',
            'id_product' => 2,
            'id_provider' => 24,
            'harga' => 146600,
            'keterangan' => '[19GB] 17GB Flash + 2GB OMG!+300mnt+100sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBAC28',
            'id_product' => 2,
            'id_provider' => 24,
            'harga' => 199600,
            'keterangan' => '[30GB] 28GB Flash+2GB OMG!+600mnt+200sms 30hr',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel zona 1-10
        DB::table('price_lists')->insert([
            'kode' => 'TDBZ4',
            'id_product' => 2,
            'id_provider' => 25,
            'harga' => 53100,
            'keterangan' => '[4GB] 3GB Flash + 1GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBZ7',
            'id_product' => 2,
            'id_provider' => 25,
            'harga' => 85100,
            'keterangan' => '[7GB] 5GB Flash + 2GB OMG! 24jam,30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBZ10',
            'id_product' => 2,
            'id_provider' => 25,
            'harga' => 104100,
            'keterangan' => '[10GB] 8GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBZ14',
            'id_product' => 2,
            'id_provider' => 25,
            'harga' => 115100,
            'keterangan' => '[14GB] 12GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBZ27',
            'id_product' => 2,
            'id_provider' => 25,
            'harga' => 195100,
            'keterangan' => '[27GB] 25GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBZ52',
            'id_product' => 2,
            'id_provider' => 25,
            'harga' => 238100,
            'keterangan' => '[52GB] 50GB Flash + 2GB OMG!,24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBZC6',
            'id_product' => 2,
            'id_provider' => 25,
            'harga' => 101100,
            'keterangan' => '[6,5GB] 4,5GB Flash + 2GB OMG!+100mnt+60sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBZC17',
            'id_product' => 2,
            'id_provider' => 25,
            'harga' => 157100,
            'keterangan' => '[19GB] 17GB Flash + 2GB OMG!+300mnt+100sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBZC30',
            'id_product' => 2,
            'id_provider' => 25,
            'harga' => 230100,
            'keterangan' => '[30GB] 28GB Flash + 2GB OMG!+600mnt+200sms 30hr',
            'status' => 'Ada'
        ]);

        //paket internet zona 1-11
        DB::table('price_lists')->insert([
            'kode' => 'TDBMX6',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 24300,
            'keterangan' => '1GB Flash + 5GB MAXStream 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBG3',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 24300,
            'keterangan' => '1GB + 2GB GAMES 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBM2',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 24300,
            'keterangan' => '1GB + 1GB MUSIC 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBF1',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 24800,
            'keterangan' => '1GB Flash 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBF4',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 54055,
            'keterangan' => '[4GB] 3GB Flash + 1GB OMG! 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBF7',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 87350,
            'keterangan' => '[7GB] 5GB Flash + 2GB OMG! 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBF10',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 106955,
            'keterangan' => '[10GB] 8GB Flash + 2GB OMG! 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBF14',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 118750,
            'keterangan' => '[14GB] 12GB Flash + 2GB OMG! 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBF27',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 201055,
            'keterangan' => '[27GB] 25GB Flash + 2GB OMG! 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBF52',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 246095,
            'keterangan' => '[52GB] 50GB Flash + 2GB OMG! 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBC6',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 99099,
            'keterangan' => '[6,5GB] 4,5GB Flash + 2GB OMG!+100mnt+60sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBC19',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 153995,
            'keterangan' => '[19GB] 17GB Flash + 2GB OMG!+300mnt+100sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBC30',
            'id_product' => 2,
            'id_provider' => 26,
            'harga' => 225615,
            'keterangan' => '[30GB] 28GB Flash + 2GB OMG!+600mnt+200sms 30hr',
            'status' => 'Ada'
        ]);

        //paket internet bulk tsel semua zona
        DB::table('price_lists')->insert([
            'kode' => 'TDBP4',
            'id_product' => 2,
            'id_provider' => 27,
            'harga' => 54275,
            'keterangan' => '[4GB] 3GB Flash + 1GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBP7',
            'id_product' => 2,
            'id_provider' => 27,
            'harga' => 87765,
            'keterangan' => '[7GB] 5GB Flash + 2GB OMG! 24jam,30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBP10',
            'id_product' => 2,
            'id_provider' => 27,
            'harga' => 107465,
            'keterangan' => '[10GB] 8GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBP14',
            'id_product' => 2,
            'id_provider' => 27,
            'harga' => 119285,
            'keterangan' => '[14GB] 12GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBP27',
            'id_product' => 2,
            'id_provider' => 27,
            'harga' => 202025,
            'keterangan' => '[27GB] 25GB Flash + 2GB OMG!, 24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBP52',
            'id_product' => 2,
            'id_provider' => 27,
            'harga' => 247335,
            'keterangan' => '[52GB] 50GB Flash + 2GB OMG!,24jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBPC6',
            'id_product' => 2,
            'id_provider' => 27,
            'harga' => 99585,
            'keterangan' => '[6,5GB] 4,5GB Flash + 2GB OMG!+100mnt+60sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBPC17',
            'id_product' => 2,
            'id_provider' => 27,
            'harga' => 154745,
            'keterangan' => '[19GB] 17GB Flash+2GB OMG!+300mnt+100sms 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDBPC30',
            'id_product' => 2,
            'id_provider' => 27,
            'harga' => 226650,
            'keterangan' => '[30GB] 28GB Flash+2GB OMG!+600mnt+200sms 30hr',
            'status' => 'Ada'
        ]);

        //paket telkomsel data malam 00-07
        DB::table('price_lists')->insert([
            'kode' => 'SDM6',
            'id_product' => 2,
            'id_provider' => 28,
            'harga' => 23615,
            'keterangan' => 'Tsel Data Malam 15GB 30Hr (00-07)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDM4',
            'id_product' => 2,
            'id_provider' => 28,
            'harga' => 13615,
            'keterangan' => 'Tsel Data Malam 15GB 7Hr (00-07)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDM1',
            'id_product' => 2,
            'id_provider' => 28,
            'harga' => 3600,
            'keterangan' => 'Tsel Data Malam 1GB 1Hr (00-07)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDM2',
            'id_product' => 2,
            'id_provider' => 28,
            'harga' => 6615,
            'keterangan' => 'Tsel Data Malam 5GB 1Hr (00-07)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDM5',
            'id_product' => 2,
            'id_provider' => 28,
            'harga' => 16615,
            'keterangan' => 'Tsel Data Malam 5GB 30Hr (00-07)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDM3',
            'id_product' => 2,
            'id_provider' => 28,
            'harga' => 11715,
            'keterangan' => 'Tsel Data Malam 7GB 7Hr (00-07)',
            'status' => 'Ada'
        ]);

        //paket internet telkomsel fix
        DB::table('price_lists')->insert([
            'kode' => 'SDF025',
            'id_product' => 2,
            'id_provider' => 29,
            'harga' => 17025,
            'keterangan' => 'TSEL DATA 250MB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDF05',
            'id_product' => 2,
            'id_provider' => 29,
            'harga' => 20025,
            'keterangan' => 'TSEL DATA 500MB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDF075',
            'id_product' => 2,
            'id_provider' => 29,
            'harga' => 25750,
            'keterangan' => 'TSEL DATA 750MB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDF1',
            'id_product' => 2,
            'id_provider' => 29,
            'harga' => 28300,
            'keterangan' => 'TSEL DATA 1GB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDF2',
            'id_product' => 2,
            'id_provider' => 29,
            'harga' => 42300,
            'keterangan' => 'TSEL DATA 2GB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDF3',
            'id_product' => 2,
            'id_provider' => 29,
            'harga' => 61325,
            'keterangan' => 'TSEL DATA 3GB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDF4',
            'id_product' => 2,
            'id_provider' => 29,
            'harga' => 97425,
            'keterangan' => 'TSEL DATA 4GB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SDF8',
            'id_product' => 2,
            'id_provider' => 29,
            'harga' => 163325,
            'keterangan' => 'TSEL DATA 8GB, 24 Jam 30Hr',
            'status' => 'Ada'
        ]);

        //paket internet smartfren
        DB::table('price_lists')->insert([
            'kode' => 'SMVB1',
            'id_product' => 2,
            'id_provider' => 30,
            'harga' => 9800,
            'keterangan' => '1,25GB + 1,75GB (01-05) + 1GB Chat, 7Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SMVB2',
            'id_product' => 2,
            'id_provider' => 30,
            'harga' => 18800,
            'keterangan' => '2GB + 2GB (01-05) + 1GB Chat, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SMVB3',
            'id_product' => 2,
            'id_provider' => 30,
            'harga' => 27600,
            'keterangan' => '4GB + 4GB (01-05) + 2GB Chat, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SMVB4',
            'id_product' => 2,
            'id_provider' => 30,
            'harga' => 55100,
            'keterangan' => '10GB + 20GB (01-05) + Gratis HOOQ, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SMVB5',
            'id_product' => 2,
            'id_provider' => 30,
            'harga' => 93500,
            'keterangan' => '20GB + 40GB (01-05) + Gratis HOOQ + SmMusic, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SMVB6',
            'id_product' => 2,
            'id_provider' => 30,
            'harga' => 135100,
            'keterangan' => '30GB + 60GB (01-05) + Gratis HOOQ + SmMusic, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SMVB7',
            'id_product' => 2,
            'id_provider' => 30,
            'harga' => 180100,
            'keterangan' => '40GB + 80GB (01-05) + Gratis HOOQ + SmMusic, 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'SMVB',
            'id_product' => 2,
            'id_provider' => 30,
            'harga' => 71836,
            'keterangan' => 'UNLIMITED 4G FUP 1GB/hari, 30Hr',
            'status' => 'Ada'
        ]);

        //aktivasi kpk tri
        DB::table('price_lists')->insert([
            'kode' => 'JANET',
            'id_product' => 2,
            'id_provider' => 31,
            'harga' => 2850,
            'keterangan' => 'JANET',
            'status' => 'Ada'
        ]);

        //Paket internet tri mini
        DB::table('price_lists')->insert([
            'kode' => 'TMH1',
            'id_product' => 2,
            'id_provider' => 32,
            'harga' => 11355,
            'keterangan' => 'TRI DATA MINI 1GB + 2K 5H',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TMH2',
            'id_product' => 2,
            'id_provider' => 32,
            'harga' => 15250,
            'keterangan' => 'TRI DATA MINI 1,5GB + 2K 7H',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TMSV1',
            'id_product' => 2,
            'id_provider' => 32,
            'harga' => 5445,
            'keterangan' => 'MIX SMALL [5 GB] 1GB + 4GB (24-09) 1Hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TMSV2',
            'id_product' => 2,
            'id_provider' => 32,
            'harga' => 10445,
            'keterangan' => 'MIX SMALL [1.5 GB] 500MB + 1GB YOUTBE 3Hari',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TMSV3',
            'id_product' => 2,
            'id_provider' => 32,
            'harga' => 15445,
            'keterangan' => 'MIX SMALL [5 GB] 2.5GB + 2.5GB (01-09) 7Hari',
            'status' => 'Ada'
        ]);

        //paket internet tri aon
        DB::table('price_lists')->insert([
            'kode' => 'AON1',
            'id_product' => 2,
            'id_provider' => 33,
            'harga' => 17850,
            'keterangan' => '1,5GB + GRATIS PULSA 2.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'AON2',
            'id_product' => 2,
            'id_provider' => 33,
            'harga' => 20850,
            'keterangan' => '2GB + GRATIS PULSA 2.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'AON3',
            'id_product' => 2,
            'id_provider' => 33,
            'harga' => 28850,
            'keterangan' => '3GB + GRATIS PULSA 2.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'AON6',
            'id_product' => 2,
            'id_provider' => 33,
            'harga' => 36850,
            'keterangan' => '6GB + GRATIS PULSA 2.000',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'AON8',
            'id_product' => 2,
            'id_provider' => 33,
            'harga' => 51850,
            'keterangan' => '6GB + GRATIS PULSA 2.000 + UNLIMITED APK (01-17)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'AON10',
            'id_product' => 2,
            'id_provider' => 33,
            'harga' => 77850,
            'keterangan' => '10GB + GRATIS PULSA 2.000 + UNLIMITED APK (01-17)',
            'status' => 'Ada'
        ]);

        //paket internet tri biasa
        DB::table('price_lists')->insert([
            'kode' => 'TRD1',
            'id_product' => 2,
            'id_provider' => 34,
            'harga' => 20800,
            'keterangan' => '1GB Masa Aktf Kartu + (1GB 30Hr)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TRD2',
            'id_product' => 2,
            'id_provider' => 34,
            'harga' => 33050,
            'keterangan' => '2GB Masa Aktf Kartu + (3GB 30Hr)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TRD3',
            'id_product' => 2,
            'id_provider' => 34,
            'harga' => 47605,
            'keterangan' => '3GB Masa Aktf Kartu + (6GB+UNLI WA&LINE 15Hr)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TRD4',
            'id_product' => 2,
            'id_provider' => 34,
            'harga' => 48855,
            'keterangan' => '4GB Masa Aktf Kartu + (4GB+UNLI WA&LINE 15Hr)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TRD5',
            'id_product' => 2,
            'id_provider' => 34,
            'harga' => 67615,
            'keterangan' => '5GB Masa Aktf Kartu + (8GB+UNLI WA&LINE 15Hr)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TRD6',
            'id_product' => 2,
            'id_provider' => 34,
            'harga' => 76800,
            'keterangan' => '6GB Masa Aktf Kartu + (12GB+UNLI YTUBE 15Hr)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TRD8',
            'id_product' => 2,
            'id_provider' => 34,
            'harga' => 100015,
            'keterangan' => '8GB Masa Aktf Kartu + (4GB+UNLI YTUBE 15Hr)',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TRD10',
            'id_product' => 2,
            'id_provider' => 34,
            'harga' => 121325,
            'keterangan' => '10GB Masa Aktf Kartu + (20GB+UNLI YTUBE 15Hr)',
            'status' => 'Ada'
        ]);

         //paket internet tri getmore
         DB::table('price_lists')->insert([
            'kode' => 'TDG5',
            'id_product' => 2,
            'id_provider' => 35,
            'harga' => 43225,
            'keterangan' => '500MB+5GB 00.00-12.00',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDG7',
            'id_product' => 2,
            'id_provider' => 35,
            'harga' => 73225,
            'keterangan' => '2GB+7GB 00.00-12.00 Pulsa 50rb',
            'status' => 'Ada'
        ]);

        //paket internet tri khusus
        DB::table('price_lists')->insert([
            'kode' => 'TDK9',
            'id_product' => 2,
            'id_provider' => 36,
            'harga' => 45050,
            'keterangan' => 'Internet TRI 3GB + (6GB NAS + Youtube 15Hr) 15Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDK12',
            'id_product' => 2,
            'id_provider' => 36,
            'harga' => 54055,
            'keterangan' => 'Internet TRI 12GB + Unlimited Youtube 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'TDK33',
            'id_product' => 2,
            'id_provider' => 36,
            'harga' => 76215,
            'keterangan' => 'Internet TRI 3GB + 30GB 4G 30Hr',
            'status' => 'Ada'
        ]);
        DB::table('price_lists')->insert([
            'kode' => 'TDK66',
            'id_product' => 2,
            'id_provider' => 36,
            'harga' => 103215,
            'keterangan' => 'Internet TRI 6GB + 60GB 4G 60Hr',
            'status' => 'Ada'
        ]);

        //paket internet xl combo
        DB::table('price_lists')->insert([
            'kode' => 'XPLUSPLUS1',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 53905,
            'keterangan' => 'Combo 5GB REG + 5GB YOUTUBE + 20MNT+30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XPLUSPLUS2',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 80605,
            'keterangan' => 'Combo 10GB REG + 10GB YOUTUBE + 30MNT+30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XPLUSPLUS3',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 115200,
            'keterangan' => 'Combo 15GB REG + 15GB YOUTUBE + 40MNT+30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XPLUSPLUS4',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 162715,
            'keterangan' => 'Combo 20GB REG + 20GB YOUTUBE + 60MNT+30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XPLUSPLUS5',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 218435,
            'keterangan' => 'Combo 35GB REG + 35GB YOUTUBE + 90MNT+30HR',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XCVIP2',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 85015,
            'keterangan' => 'Cmb VIP 10GB+10GB YTube+Unli Ytube 01-06+30Mnt Tlp',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XCVIP3',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 118615,
            'keterangan' => 'Cmb VIP 15GB+15GB YTube+Unli Ytube 01-06+30Mnt Tlp',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XCVIP4',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 166015,
            'keterangan' => 'Cmb VIP 20GB+20GB YTube+Unli Ytube 01-06+60Mnt Tlp',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XCVIP5',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 221015,
            'keterangan' => 'Cmb VIP 35GB+35GB YTube+Unli Ytube 01-06+90Mnt Tlp',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XCVIP1',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 58450,
            'keterangan' => 'Cmb VIP 5GB+5GB YTube+Unli Ytube 01-06+20Mnt Tlp',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XCL1',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 28275,
            'keterangan' => 'XL Combo Lite 1,5GB + 1GB 4G + 1GB YT 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XCL4',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 93100,
            'keterangan' => 'XL Combo Lite 12GB + 8GB 4G + 1GB YT 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XCL5',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 117850,
            'keterangan' => 'XL Combo Lite 18GB + 12GB 4G + 1GB YT 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XCL2',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 38600,
            'keterangan' => 'XL Combo Lite 3GB + 2GB 4G + 1GB YT 30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'XCL3',
            'id_product' => 2,
            'id_provider' => 37,
            'harga' => 61115,
            'keterangan' => 'XL Combo Lite 6GB + 4GB 4G + 1GB YT 30Hr',
            'status' => 'Ada'
        ]);

        //paket internet xl hotrod
        DB::table('price_lists')->insert([
            'kode' => 'HOTROD38',
            'id_product' => 2,
            'id_provider' => 38,
            'harga' => 29615,
            'keterangan' => 'HotRod 24jm 800MB,30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'HOTROD54',
            'id_product' => 2,
            'id_provider' => 38,
            'harga' => 46015,
            'keterangan' => 'HotRod 24jm 1.5GB, 30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'HOTROD62',
            'id_product' => 2,
            'id_provider' => 38,
            'harga' => 55815,
            'keterangan' => 'HotRod 24jm 3 GB,30Hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'HOTROD98',
            'id_product' => 2,
            'id_provider' => 38,
            'harga' => 91015,
            'keterangan' => 'HotRod 24jm 6 GB,30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'HOTROD125',
            'id_product' => 2,
            'id_provider' => 38,
            'harga' => 119075,
            'keterangan' => 'HotRod 24jm 8 GB,30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'HOTROD170',
            'id_product' => 2,
            'id_provider' => 38,
            'harga' => 162015,
            'keterangan' => 'HotRod 24jm 12 GB,30hr',
            'status' => 'Ada'
        ]);

        DB::table('price_lists')->insert([
            'kode' => 'HOTROD206',
            'id_product' => 2,
            'id_provider' => 38,
            'harga' => 197815,
            'keterangan' => 'HotRod 24jm 16 GB,30hr',
            'status' => 'Ada'
        ]);

    }
}
