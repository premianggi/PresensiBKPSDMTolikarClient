<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class KehadiranController extends Controller
{
    function index()
    {
        return view('welcome');
    }

    function store(Request $request)
    {
        $mulai      = $request->mulai;
        $selesai    = $request->selesai;


        $sql = "select DIN,min(Clock) as masuk, max(Clock) as keluar 
        from ras_AttRecord
        where LEFT(CONVERT(date,Clock),10) between '$mulai' and '$selesai'
        group by LEFT(Clock,9),DIN";

        // $sql = "select DIN,min(Clock) as masuk, max(Clock) as keluar 
        // from ras_AttRecord
        // where DIN='75' and LEFT(CONVERT(date,Clock),10) between '$mulai' and '$selesai'
        // group by LEFT(Clock,9),DIN";

        //return $sql;

        

        //$sql = "select * from ras_AttRecord"

        $data = \DB::select($sql);

        //return count($data);

        // dd($data);

        $split = array_chunk($data,200);

    

        $client = new \GuzzleHttp\Client();
        
        $url = "http://localhost:8000/kehadiran/api";


        foreach($split as $row)
        {
            
            //dd($row);
            $response = $client->post($url, [
                'form_params' => [
                    'data'      =>  $row,
                    'mulai'     =>  $mulai,
                    'selesai'   =>  $selesai,
                    'total_data'=>  count($data)
                ]
            ]);

            //return $response->getBody()->getContents();
        }

        $jmlDataLog = count($data);
        return redirect('/')->with('status',' Log Sudah Berhasil Terkirim');
    }


































    function generateCsv($data, $delimiter = ',', $enclosure = '"') {
       $handle = fopen('php://temp', 'r+');
       foreach ($data as $line) {
               fputcsv($handle, $line, $delimiter, $enclosure);
       }
       rewind($handle);
       while (!feof($handle)) {
               $contents .= fread($handle, 8192);
       }
       fclose($handle);
       return $contents;
}


    function users()
    {
        $sql = "select DIN,PIN,UserName  from ras_Users";
        $users = \DB::select($sql);


        $client = new \GuzzleHttp\Client();
        $url = "http://localhost:1234/kehadiran/user_api";

        foreach($users as $row)

        {
           
            $response = $client->get($url, ['query' => ['DIN' => $row->DIN,'PIN'=>$row->PIN,'Name'=>$row->UserName]]);
             //return $response->getBody()->getContents();
        }


        // return $response->getBody()->getContents();
    }



    
}
