<?php

namespace Database\Seeders;


use App\Models\MemberPerfectSerie;
use Illuminate\Database\Seeder;

class MemberPerfectSerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 10,
            ],
            [
                'top_team_id' => '1610612749',
                'down_team_id' => '1610612753',
                'top_team_win' => 3,
                'down_team_win' => 4,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 13,
            ],
            [
                'top_team_id' => '1610612749',
                'down_team_id' => '1610612753',
                'top_team_win' => 4,
                'down_team_win' => 0,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 12,
            ],
            [
                'top_team_id' => '1610612749',
                'down_team_id' => '1610612753',
                'top_team_win' => 4,
                'down_team_win' => 1,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 11,

            ],
            [
                'top_team_id' => '1610612749',
                'down_team_id' => '1610612753',
                'top_team_win' => 4,
                'down_team_win' => 1,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 14,
            ],
            [
                'top_team_id' => '1610612749',
                'down_team_id' => '1610612753',
                'top_team_win' => 4,
                'down_team_win' => 1,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 17,
            ],
            [
                'top_team_id' => '1610612738',
                'down_team_id' => '1610612755',
                'top_team_win' => 4,
                'down_team_win' => 1,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 16,
            ],
            [
                'top_team_id' => '1610612738',
                'down_team_id' => '1610612755',
                'top_team_win' => 4,
                'down_team_win' => 1,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 15,
            ],
            [
                'top_team_id' => '1610612738',
                'down_team_id' => '1610612755',
                'top_team_win' => 4,
                'down_team_win' => 1,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 20,
            ],
            [
                'top_team_id' => '1610612738',
                'down_team_id' => '1610612755',
                'top_team_win' => 4,
                'down_team_win' => 1,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 21,
            ],
            [
                'top_team_id' => '1610612738',
                'down_team_id' => '1610612755',
                'top_team_win' => 4,
                'down_team_win' => 3,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 22,
            ],
            [
                'top_team_id' => '1610612738',
                'down_team_id' => '1610612755',
                'top_team_win' => 4,
                'down_team_win' => 2,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 23,
            ],
            [
                'top_team_id' => '1610612738',
                'down_team_id' => '1610612755',
                'top_team_win' => 4,
                'down_team_win' => 1,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 30,
            ],
            [
                'top_team_id' => '1610612738',
                'down_team_id' => '1610612755',
                'top_team_win' => 4,
                'down_team_win' => 2,
                'ip' => '127.0.0.1'
            ]
        );


        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 31,
            ],
            [
                'top_team_id' => '1610612738',
                'down_team_id' => '1610612755',
                'top_team_win' => 4,
                'down_team_win' => 3,
                'ip' => '127.0.0.1'
            ]
        );

        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => 1,
                'index_id' => 40,
            ],
            [
                'top_team_id' => '1610612738',
                'down_team_id' => '1610612755',
                'top_team_win' => 1,
                'down_team_win' => 4,
                'ip' => '127.0.0.1'
            ]
        );
    }
}
