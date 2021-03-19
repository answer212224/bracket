<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
        Member::factory(100)->create();
        $this->call([PrizeSeeder::class]);
        $this->call([ScheduleSeeder::class]);
        $this->call([SerieSeeder::class]);
        $this->call([PlayoffTeamSeeder::class]);
        $this->call([MemberPerfectSerieSeeder::class]);
        $this->call([MemberGodSerieSeeder::class]);
    }
}
