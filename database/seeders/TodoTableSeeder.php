<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bodys = ['掃除する','買い物','VPSで立ち上げをする'];
        foreach ($bodys as $body)  {
            DB::table('todos')->insert([
                'body' => $body,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ]);
        }
    }
}
