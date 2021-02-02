<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MPrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ch = curl_init("https://opendata.resas-portal.go.jp/api/v1/prefectures");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-API-KEY:bxNCiOoGbvQH97ImcMqnc7LvvsLjzOBZzYv2oSCk']);

        $response = curl_exec($ch);
        curl_close($ch);

        $formatData = json_decode($response, true);

        $count = count($formatData['result']);

        $values = [];

        for ($i = 0; $i < $count; $i++) {
            $name = $formatData['result'][$i]['prefName'];
            array_push($values, ['name' => $name]);
        }

        //dd($values);


        \DB::table('m_prefectures')->insert($values);
        // \DB::table('m_areas')->insert([
        //     ['name' => '未選択'],
        //     ['name' => '北海道'],
        //     ['name' => '青森県'],
        //     ['name' => '岩手県'],
        //     ['name' => '宮城県'],
        //     ['name' => '秋田県'],
        //     ['name' => '山形県'],
        //     ['name' => '福島県'],
        //     ['name' => '茨城県'],
        //     ['name' => '栃木県'],
        //     ['name' => '群馬県'],
        //     ['name' => '埼玉県'],
        //     ['name' => '千葉県'],
        //     ['name' => '東京都'],
        //     ['name' => '神奈川県'],
        //     ['name' => '新潟県'],
        //     ['name' => '富山県'],
        //     ['name' => '石川県'],
        //     ['name' => '福井県'],
        //     ['name' => '山梨県'],
        //     ['name' => '長野県'],
        //     ['name' => '岐阜県'],
        //     ['name' => '静岡県'],
        //     ['name' => '愛知県'],
        //     ['name' => '三重県'],
        //     ['name' => '滋賀県'],
        //     ['name' => '京都府'],
        //     ['name' => '大阪府'],
        //     ['name' => '兵庫県'],
        //     ['name' => '奈良県'],
        //     ['name' => '和歌山県'],
        //     ['name' => '鳥取県'],
        //     ['name' => '島根県'],
        //     ['name' => '岡山県'],
        //     ['name' => '広島県'],
        //     ['name' => '山口県'],
        //     ['name' => '徳島県'],
        //     ['name' => '香川県'],
        //     ['name' => '愛媛県'],
        //     ['name' => '高知県'],
        //     ['name' => '福岡県'],
        //     ['name' => '佐賀県'],
        //     ['name' => '長崎県'],
        //     ['name' => '熊本県'],
        //     ['name' => '大分県'],
        //     ['name' => '宮崎県'],
        //     ['name' => '鹿児島県'],
        //     ['name' => '沖縄県'],
        //     ['name' => '海外'],
        // ]);
    }
}
