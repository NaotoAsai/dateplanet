<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('m_categories')->insert([
            ['name' => '飲食店'],
            ['name' => 'ショッピング'],
            ['name' => 'レジャー施設'],
            ['name' => 'ホテル'],
            ['name' => 'ラブホテル'],
            ['name' => '散歩'],
            ['name' => '運動系'],
            ['name' => 'カフェ'],
            ['name' => 'バー'],
            ['name' => '居酒屋'],
            ['name' => 'ランチ'],
            ['name' => 'ディナー'],
            ['name' => 'その他'],
        ]);
    }
}
