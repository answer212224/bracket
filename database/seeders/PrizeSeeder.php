<?php

namespace Database\Seeders;

use App\Models\Prize;
use Illuminate\Database\Seeder;

class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prize::updateOrCreate([
            'title' => 'NBA 衣服',
            'content' => '款式隨機',
            'quantity' => mt_rand(1, 10),
        ]);
    }
}
