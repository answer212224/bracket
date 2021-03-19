<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::updateOrCreate([
            'title' => '完美預測',
            'start' => now(),
            'end' => now(),
        ]);
        Schedule::updateOrCreate([
            'title' => '神預測 Round 1',
            'start' => now(),
            'end' => now(),
        ]);
        Schedule::updateOrCreate([
            'title' => '神預測 Round 2',
            'start' => now(),
            'end' => now(),
        ]);
        Schedule::updateOrCreate([
            'title' => '神預測 Round 3',
            'start' => now(),
            'end' => now(),
        ]);
        Schedule::updateOrCreate([
            'title' => '神預測 Round 4',
            'start' => now(),
            'end' => now(),
        ]);

        Schedule::updateOrCreate([
            'title' => '神預測槓龜獎 Round 1',
            'start' => now(),
            'end' => now(),
        ]);

        Schedule::updateOrCreate([
            'title' => '神預測槓龜獎 Round 2',
            'start' => now(),
            'end' => now(),
        ]);

        Schedule::updateOrCreate([
            'title' => '神預測槓龜獎 Round 3',
            'start' => now(),
            'end' => now(),
        ]);

        Schedule::updateOrCreate([
            'title' => '神預測槓龜獎 Round 4',
            'start' => now(),
            'end' => now(),
        ]);

    }
}
