<?php

use Illuminate\Database\Seeder;

class AttRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // normal
            ['DIN'=>'2124','Clock'=>'2018-02-01 06:55:00'],
            ['DIN'=>'2124','Clock'=>'2018-02-01 17:10:00'],

            // shify 2s2
            ['DIN'=>'2124','Clock'=>'2018-02-02 19:55:00'],
            ['DIN'=>'2124','Clock'=>'2018-02-03 06:55:00'],
            

            //['DIN'=>'212','Clock'=>'2018-02-03 06:55:00'],

            // absen pulang tanpa absen masuk
            ['DIN'=>'2124','Clock'=>'2018-02-04 17:55:00'],
            // absen masuk tanpa pulang
            ['DIN'=>'2124','Clock'=>'2018-02-05 06:55:00'],

            //['DIN'=>'212','Clock'=>'2018-02-05 20:55:00'],

        ];

        \DB::table('ras_AttRecord')->insert($data);
    }
}
