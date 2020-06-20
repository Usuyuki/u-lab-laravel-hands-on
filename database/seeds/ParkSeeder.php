<?php

use Illuminate\Database\Seeder;

class ParkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ファイルの取得
        $fp = file_get_contents(storage_path('/json/park.json'));
        // ファイルの内容をPHPが解釈できるようにする
        $json = json_decode($fp, true);

        $data = $json["data"];
        //パルクインサート
        $isInsert = \DB::table('parks')->insert($data);

        if (!$isInsert){
            \Log::debug('パルクインサート失敗');
        }
    }
}
