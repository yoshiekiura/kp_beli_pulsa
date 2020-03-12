<?php

use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('banks')->insert([
        //     'nama' => 'MUH ILYAS ISTIQAMA M',
        //     'no_rekening' => '0452579637',
        //     'atas_nama' => 'MUH ILYAS ISTIQAMA M',
        //     'bank' => 'BNI'
        // ]);

        DB::table('banks')->insert([
            'nama_bank' => 'BPD Jatim',
            'no_rekening' => '0743086236',
            'atas_nama' => 'MUH ILYAS ISTIQAMA M'
        ]);
    }
}
