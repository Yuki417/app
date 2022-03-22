<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追加　

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->delete();

        $data = [
            ['id'=>1,
            'user_id'=> 1,
            'name'=>'ユーザー１',
            'birthday'=> '1978-07-17',
            'gender'=> 0,
            'height'=> 180.2],
            ['id'=>2,
            'user_id'=> 1,
            'name'=>'ユーザー2',
            'birthday'=> '1989-07-02',
            'gender'=> 0,
            'height'=> 175.4],
            ['id'=>3,
            'user_id'=> 1,
            'name'=>'ユーザー3',
            'birthday'=> '1989-09-27',
            'gender'=> 1,
            'height'=> 168],
        ];
        DB::table('customers')->insert($data);
    }
}
