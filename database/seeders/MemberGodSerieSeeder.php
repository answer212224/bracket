<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use App\Models\MemberGodSerie;

class MemberGodSerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = Member::all();
        foreach ($members as $member) {
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 10,
                ],
                [
                    'team_id' => '1610612749',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 11,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 12,
                ],
                [
                    'team_id' => '1610612749',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 13,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 14,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 15,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 16,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 17,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 20,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 21,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 22,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 23,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 30,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 31,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
            MemberGodSerie::updateOrCreate(
                [
                    'member_id' => $member->id,
                    'index_id' => 40,
                ],
                [
                    'team_id' => '1610612738',
                    'ip' => '127.0.0.1'
                ]
            );
        }
    }
}
