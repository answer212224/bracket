<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\PlayoffTeam;
use App\Models\Prize;
use App\Models\Serie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $memberInfo = $this->checkMemberInfo();
        $series = Serie::all();
        $series->each(function ($item) {
            $item['topTeam'] = optional(PlayoffTeam::getNbaTeams($item->top_team_id));
            $item['downTeam'] = optional(PlayoffTeam::getNbaTeams($item->down_team_id));
        });

        $prizes =  Prize::all();
        $islogin = false;
        if ($request->session()->has('fb_id')) {
            $islogin = true;
        }
        $westEightTeam[0] = [
            'matchId' => 1,
            'firstTeam' => [
                'abbr' => $series[0]->topTeam->team_abbr_en,
                'teamId' => $series[0]->top_team_id,
                'teamSeed' => $series[0]->top_team_seed,
                'win' => $series[0]->top_team_win == 4 ? true : false,
                'conjecture' => $series[0]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[0]->downTeam->team_abbr_en,
                'teamId' => $series[0]->down_team_id,
                'teamSeed' => $series[0]->down_team_seed,
                'win' => $series[0]->down_team_win == 4 ? true : false,
                'conjecture' => $series[0]->down_team_win,
            ],
        ];
        $westEightTeam[1] = [
            'matchId' => 2,
            'firstTeam' => [
                'abbr' => $series[1]->topTeam->team_abbr_en,
                'teamId' => $series[1]->top_team_id,
                'teamSeed' => $series[1]->top_team_seed,
                'win' => $series[1]->top_team_win == 4 ? true : false,
                'conjecture' => $series[1]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[1]->downTeam->team_abbr_en,
                'teamId' => $series[1]->down_team_id,
                'teamSeed' => $series[1]->down_team_seed,
                'win' => $series[1]->down_team_win == 4 ? true : false,
                'conjecture' => $series[1]->down_team_win,
            ],
        ];
        $westEightTeam[2] = [
            'matchId' => 3,
            'firstTeam' => [
                'abbr' => $series[2]->topTeam->team_abbr_en,
                'teamId' => $series[2]->top_team_id,
                'teamSeed' => $series[2]->top_team_seed,
                'win' => $series[2]->top_team_win == 4 ? true : false,
                'conjecture' => $series[2]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[2]->downTeam->team_abbr_en,
                'teamId' => $series[2]->down_team_id,
                'teamSeed' => $series[2]->down_team_seed,
                'win' => $series[2]->down_team_win == 4 ? true : false,
                'conjecture' => $series[2]->down_team_win,
            ],
        ];
        $westEightTeam[3] = [
            'matchId' => 4,
            'firstTeam' => [
                'abbr' => $series[3]->topTeam->team_abbr_en,
                'teamId' => $series[3]->top_team_id,
                'teamSeed' => $series[3]->top_team_seed,
                'win' => $series[3]->top_team_win == 4 ? true : false,
                'conjecture' => $series[3]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[3]->downTeam->team_abbr_en,
                'teamId' => $series[3]->down_team_id,
                'teamSeed' => $series[3]->down_team_seed,
                'win' => $series[3]->down_team_win == 4 ? true : false,
                'conjecture' => $series[3]->down_team_win,
            ],
        ];
        $westFourTeam[0] = [
            'matchId' => 9,
            'firstTeam' => [
                'abbr' => $series[8]->topTeam->team_abbr_en,
                'teamId' => $series[8]->top_team_id,
                'teamSeed' => $series[8]->top_team_seed,
                'win' => $series[8]->top_team_win == 4 ? true : false,
                'conjecture' => $series[8]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[8]->downTeam->team_abbr_en,
                'teamId' => $series[8]->down_team_id,
                'teamSeed' => $series[8]->down_team_seed,
                'win' => $series[8]->down_team_win == 4 ? true : false,
                'conjecture' => $series[8]->down_team_win,
            ],
        ];
        $westFourTeam[1] = [
            'matchId' => 10,
            'firstTeam' => [
                'abbr' => $series[9]->topTeam->team_abbr_en,
                'teamId' => $series[9]->top_team_id,
                'teamSeed' => $series[9]->top_team_seed,
                'win' => $series[9]->top_team_win == 4 ? true : false,
                'conjecture' => $series[9]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[9]->downTeam->team_abbr_en,
                'teamId' => $series[9]->down_team_id,
                'teamSeed' => $series[9]->down_team_seed,
                'win' => $series[9]->down_team_win == 4 ? true : false,
                'conjecture' => $series[9]->down_team_win,
            ],
        ];
        $westTwoTeam = [
            'matchId' => 13,
            'firstTeam' => [
                'abbr' => $series[12]->topTeam->team_abbr_en,
                'teamId' => $series[12]->top_team_id,
                'teamSeed' => $series[12]->top_team_seed,
                'win' => $series[12]->top_team_win == 4 ? true : false,
                'conjecture' => $series[12]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[12]->downTeam->team_abbr_en,
                'teamId' => $series[12]->down_team_id,
                'teamSeed' => $series[12]->down_team_seed,
                'win' => $series[12]->down_team_win == 4 ? true : false,
                'conjecture' => $series[12]->down_team_win,
            ],
        ];

        $eastEightTeam[0] = [
            'matchId' => 5,
            'firstTeam' => [
                'abbr' => $series[4]->topTeam->team_abbr_en,
                'teamId' => $series[4]->top_team_id,
                'teamSeed' => $series[4]->top_team_seed,
                'win' => $series[4]->top_team_win == 4 ? true : false,
                'conjecture' => $series[4]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[4]->downTeam->team_abbr_en,
                'teamId' => $series[4]->down_team_id,
                'teamSeed' => $series[4]->down_team_seed,
                'win' => $series[4]->down_team_win == 4 ? true : false,
                'conjecture' => $series[4]->down_team_win,
            ],
        ];
        $eastEightTeam[1] = [
            'matchId' => 6,
            'firstTeam' => [
                'abbr' => $series[5]->topTeam->team_abbr_en,
                'teamId' => $series[5]->top_team_id,
                'teamSeed' => $series[5]->top_team_seed,
                'win' => $series[5]->top_team_win == 4 ? true : false,
                'conjecture' => $series[5]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[5]->downTeam->team_abbr_en,
                'teamId' => $series[5]->down_team_id,
                'teamSeed' => $series[5]->down_team_seed,
                'win' => $series[5]->down_team_win == 4 ? true : false,
                'conjecture' => $series[5]->down_team_win,
            ],
        ];
        $eastEightTeam[2] = [
            'matchId' => 7,
            'firstTeam' => [
                'abbr' => $series[6]->topTeam->team_abbr_en,
                'teamId' => $series[6]->top_team_id,
                'teamSeed' => $series[6]->top_team_seed,
                'win' => $series[6]->top_team_win == 4 ? true : false,
                'conjecture' => $series[6]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[6]->downTeam->team_abbr_en,
                'teamId' => $series[6]->down_team_id,
                'teamSeed' => $series[6]->down_team_seed,
                'win' => $series[6]->down_team_win == 4 ? true : false,
                'conjecture' => $series[6]->down_team_win,
            ],
        ];
        $eastEightTeam[3] = [
            'matchId' => 8,
            'firstTeam' => [
                'abbr' => $series[7]->topTeam->team_abbr_en,
                'teamId' => $series[7]->top_team_id,
                'teamSeed' => $series[7]->top_team_seed,
                'win' => $series[7]->top_team_win == 4 ? true : false,
                'conjecture' => $series[7]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[7]->downTeam->team_abbr_en,
                'teamId' => $series[7]->down_team_id,
                'teamSeed' => $series[7]->down_team_seed,
                'win' => $series[7]->down_team_win == 4 ? true : false,
                'conjecture' => $series[7]->down_team_win,
            ],
        ];
        $eastFourTeam[0] = [
            'matchId' => 11,
            'firstTeam' => [
                'abbr' => $series[10]->topTeam->team_abbr_en,
                'teamId' => $series[10]->top_team_id,
                'teamSeed' => $series[10]->top_team_seed,
                'win' => $series[10]->top_team_win == 4 ? true : false,
                'conjecture' => $series[10]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[10]->downTeam->team_abbr_en,
                'teamId' => $series[10]->down_team_id,
                'teamSeed' => $series[10]->down_team_seed,
                'win' => $series[10]->down_team_win == 4 ? true : false,
                'conjecture' => $series[10]->down_team_win,
            ],
        ];
        $eastFourTeam[1] = [
            'matchId' => 12,
            'firstTeam' => [
                'abbr' => $series[11]->topTeam->team_abbr_en,
                'teamId' => $series[11]->top_team_id,
                'teamSeed' => $series[11]->top_team_seed,
                'win' => $series[11]->top_team_win == 4 ? true : false,
                'conjecture' => $series[11]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[11]->downTeam->team_abbr_en,
                'teamId' => $series[11]->down_team_id,
                'teamSeed' => $series[11]->down_team_seed,
                'win' => $series[11]->down_team_win == 4 ? true : false,
                'conjecture' => $series[11]->down_team_win,
            ],
        ];
        $eastTwoTeam = [
            'matchId' => 14,
            'firstTeam' => [
                'abbr' => $series[13]->topTeam->team_abbr_en,
                'teamId' => $series[13]->top_team_id,
                'teamSeed' => $series[13]->top_team_seed,
                'win' => $series[13]->top_team_win == 4 ? true : false,
                'conjecture' => $series[13]->top_team_win,
            ],
            'lastTeam' => [
                'abbr' => $series[13]->downTeam->team_abbr_en,
                'teamId' => $series[13]->down_team_id,
                'teamSeed' => $series[13]->down_team_seed,
                'win' => $series[13]->down_team_win == 4 ? true : false,
                'conjecture' => $series[13]->down_team_win,
            ],
        ];

        $twoTeam = [
            'matchId' => 15,
            'westTeam' => [
                'abbr' => $series[14]->topTeam->team_abbr_en,
                'teamId' => $series[14]->top_team_id,
                'teamSeed' => $series[14]->top_team_seed,
                'win' => $series[14]->top_team_win == 4 ? true : false,
                'conjecture' => $series[14]->top_team_win,
            ],
            'eastTeam' => [
                'abbr' => $series[14]->downTeam->team_abbr_en,
                'teamId' => $series[14]->down_team_id,
                'teamSeed' => $series[14]->down_team_seed,
                'win' => $series[14]->down_team_win == 4 ? true : false,
                'conjecture' => $series[14]->down_team_win,
            ],
        ];

        $data = [
            'userLogin' => $islogin,
            'userFraction' => 3345678,
            'userConjecture' => [
                'sixteenStatus' => true,
                'eightStatus' => true,
                'fourStatus' => true,
                'finalsStatus' => true,
            ],
            'westMatch' => [
                'eightTeam' => [
                    $westEightTeam[0],
                    $westEightTeam[1],
                    $westEightTeam[2],
                    $westEightTeam[3],
                ],
                'fourTeam' => [
                    $westFourTeam[0],
                    $westFourTeam[1],
                ],

                'twoTeam' => $westTwoTeam,
            ],
            'eastMatch' => [
                'eightTeam' => [
                    $eastEightTeam[0],
                    $eastEightTeam[1],
                    $eastEightTeam[2],
                    $eastEightTeam[3],
                ],
                'fourTeam' => [
                    $eastFourTeam[0],
                    $eastFourTeam[1],
                ],
                'twoTeam' => $eastTwoTeam,

            ],
            'finalsMatch' => $twoTeam,
        ];

        return view('index', compact('data', 'prizes', 'memberInfo'));
    }

    public function checkMemberInfo()
    {
        $member = Member::where('fb_id', session('fb_id'))->first();
        return $member;
    }

    public function getTeamById($teamId)
    {
        // return $team = DB::connection('nba_backend_2020')
        //     ->table('nba_teams')
        //     ->where('nba_team_id', $teamId)
        //     ->first();
        return $team = PlayoffTeam::where('team_id', $teamId)
            ->first();
    }
}
