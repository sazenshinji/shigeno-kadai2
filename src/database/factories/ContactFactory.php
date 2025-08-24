<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Contact::class;

    public function definition()
    {
        $first_names = ['翔太', '芽衣',  '拓也',  '陽菜',  '翔平',  '美穂',  '健太',  '沙織',  '達也',  '舞',  '大樹',  '瞳',  '健太郎',  '成美',  '雄太',  '愛',  '亮',  'さくら',  '蓮',  '葵'];
        $last_names = ['鈴木', '佐藤', '田中', '小林', '木村', '高橋', '伊藤', '渡辺', '山本', '加藤', '吉田', '山田', '佐々木', '山口', '松本'];
        $addresses = ['東京都港区1-1-1', '東京都千代田区2-2-2', '東京都中央区3-3-3', '東京都新宿区4-4-4', '東京都目黒区5-5-5'];
        $buildings = ['AAAビル', 'BBBビル', 'CCCビル', 'DDDビル', 'EEEビル'];

        return [
            //
            'category_id' => $this->faker->numberBetween(1, 5),
            'first_name' => $this->faker->randomElement($first_names),
            'last_name' => $this->faker->randomElement($last_names),
            'gender' => $this->faker->numberBetween(1, 3),
            'email' => $this->faker->safeEmail,
            'tel' => $this->faker->numberBetween(1000010001, 9999999999),
            'address' => $this->faker->randomElement($addresses),
            'building' => $this->faker->randomElement($buildings),
            'detail' => $this->faker->text(10)
        ];
    }
}