<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arr = [
            [
                'status_id' => '0',
                'meaning' => 'Отказ'
            ],

            [
                'status_id' => '1',
                'meaning' => 'Одобрение'
            ],

            [
                'status_id' => '2',
                'meaning' => 'В работе'
            ]
        ];

        foreach ($arr as $row) {
            DB::table('status')->insert($row);
        }

    }
}
