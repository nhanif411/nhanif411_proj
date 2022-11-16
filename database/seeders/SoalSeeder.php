<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soals')->insert([
            'nama_mk' => 'Apa makulnya?',
            'dosen' => 'Dosennya siapa?',
            'jumlah_soal' => '10',
            'keterangan' => 'keterangannya gimana?'
        ]);
    }
}
