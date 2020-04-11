<?php

use Illuminate\Database\Seeder;

class sampleKehadiran extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // list ID karyawan
        $DIN = [1,2,3,4];
        $data = [];

        // melakukan foreach DIN karyawan
        foreach($DIN as $k)
        {
            // melakukan foreach data dummy kehadiran
            for($i=1;$i<=30;$i++)
            {
                $data[] = ['DIN'=>$k,'Clock'=>'2019-03-'.$i.' 06:45:00'];
                $data[] = ['DIN'=>$k,'Clock'=>'2019-03-'.$i.' 16:45:00'];
            }
        }

        // insert data ke tabel ras_Attrecord
        \DB::table('ras_AttRecord')->insert($data);
    }
}
