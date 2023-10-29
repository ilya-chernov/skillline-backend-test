<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BanksSeeder extends Seeder
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
                'bank_id' => '1',
                'bank_name' => 'Сбербанк',
                'entity' => 'ПАО Сбербанк',
                'email' => 'sberbank@sberbank.ru',
                'website' => 'sberbank.ru',
                'phone' => '900',
                'address' => 'Россия, Москва, 117312, ул. Вавилова, д. 19'
            ],

            [
                'bank_id' => '2',
                'bank_name' => 'Открытие',
                'entity' => 'ПАО Банк "Финансовая корпорация Открытие"',
                'email' => 'info@open.ru',
                'website' => 'open.ru',
                'phone' => '88004444400',
                'address' => 'Российская Федерация, 115114, г. Москва, ул. Летниковская, д.2, стр.4'
            ],

            [
                'bank_id' => '3',
                'bank_name' => 'Тинькофф',
                'entity' => 'АО "Тинькофф Банк"',
                'email' => 'info@tinkoff.ru',
                'website' => 'tinkoff.ru',
                'phone' => '9502555',
                'address' => 'Москва, 127287, ул. Хуторская 2-я, д. 38А, стр. 26'
            ]
        ];

        foreach($arr as $row) {
            DB::table('banks')->insert($row);
        }
    }
}
