<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('testimonials')->insert([
            'id_user' => 1,
            'komentar' => 'Masakannya Kemanisan mas',
            'buat_komentar' => Carbon::now()
        ]);
    }
}
