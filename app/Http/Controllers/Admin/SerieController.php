<?php

namespace App\Http\Controllers\Admin;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Models\PlayoffTeam;
use Illuminate\Support\Facades\Log;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::paginate(10);

        $series->each(function ($item) {
            $item['topTeam'] = optional(PlayoffTeam::getNbaTeams($item->top_team_id));
            $item['downTeam'] = optional(PlayoffTeam::getNbaTeams($item->down_team_id));
        });

        return view('admin.series.index', compact('series'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show($teamId)
    {
        $team = $this->getTeamById($teamId);
        dd($team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $serie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $api = $this->fetch();
        $data = collect(collect($api)->get('data'));
        $season = $data->get('Season');

        $index10 = $this->getSerieByIndex(10, $api);
        if ($index10->get('Team1Wins') == 4) {
            $index10_win = $index10->get('Team1ID');
        } else if ($index10->get('Team2Wins') == 4) {
            $index10_win = $index10->get('Team2ID');
        } else {
            $index10_win = NULL;
        }
        $index11 = $this->getSerieByIndex(11, $api);
        if ($index11->get('Team1Wins') == 4) {
            $index11_win = $index11->get('Team1ID');
        } else if ($index11->get('Team2Wins') == 4) {
            $index11_win = $index11->get('Team2ID');
        } else {
            $index11_win = NULL;
        }
        $index12 = $this->getSerieByIndex(12, $api);
        if ($index12->get('Team1Wins') == 4) {
            $index12_win = $index12->get('Team1ID');
        } else if ($index12->get('Team2Wins') == 4) {
            $index12_win = $index12->get('Team2ID');
        } else {
            $index12_win = NULL;
        }
        $index13 = $this->getSerieByIndex(13, $api);
        if ($index13->get('Team1Wins') == 4) {
            $index13_win = $index13->get('Team1ID');
        } else if ($index13->get('Team2Wins') == 4) {
            $index13_win = $index13->get('Team2ID');
        } else {
            $index13_win = NULL;
        }
        $index14 = $this->getSerieByIndex(14, $api);
        if ($index14->get('Team1Wins') == 4) {
            $index14_win = $index14->get('Team1ID');
        } else if ($index14->get('Team2Wins') == 4) {
            $index14_win = $index14->get('Team2ID');
        } else {
            $index14_win = NULL;
        }
        $index15 = $this->getSerieByIndex(15, $api);
        if ($index15->get('Team1Wins') == 4) {
            $index15_win = $index15->get('Team1ID');
        } else if ($index15->get('Team2Wins') == 4) {
            $index15_win = $index15->get('Team2ID');
        } else {
            $index15_win = NULL;
        }
        $index16 = $this->getSerieByIndex(16, $api);
        if ($index16->get('Team1Wins') == 4) {
            $index16_win = $index16->get('Team1ID');
        } else if ($index16->get('Team2Wins') == 4) {
            $index16_win = $index16->get('Team2ID');
        } else {
            $index16_win = NULL;
        }
        $index17 = $this->getSerieByIndex(17, $api);
        if ($index17->get('Team1Wins') == 4) {
            $index17_win = $index17->get('Team1ID');
        } else if ($index17->get('Team2Wins') == 4) {
            $index17_win = $index17->get('Team2ID');
        } else {
            $index17_win = NULL;
        }
        $index20 = $this->getSerieByIndex(20, $api);
        if ($index20->get('Team1Wins') == 4) {
            $index20_win = $index20->get('Team1ID');
        } else if ($index20->get('Team2Wins') == 4) {
            $index20_win = $index20->get('Team2ID');
        } else {
            $index20_win = NULL;
        }
        $index21 = $this->getSerieByIndex(21, $api);
        if ($index21->get('Team1Wins') == 4) {
            $index21_win = $index21->get('Team1ID');
        } else if ($index21->get('Team2Wins') == 4) {
            $index21_win = $index21->get('Team2ID');
        } else {
            $index21_win = NULL;
        }
        $index22 = $this->getSerieByIndex(22, $api);
        if ($index22->get('Team1Wins') == 4) {
            $index22_win = $index22->get('Team1ID');
        } else if ($index22->get('Team2Wins') == 4) {
            $index22_win = $index22->get('Team2ID');
        } else {
            $index22_win = NULL;
        }
        $index23 = $this->getSerieByIndex(23, $api);
        if ($index23->get('Team1Wins') == 4) {
            $index23_win = $index23->get('Team1ID');
        } else if ($index23->get('Team2Wins') == 4) {
            $index23_win = $index23->get('Team2ID');
        } else {
            $index23_win = NULL;
        }

        $index30 = $this->getSerieByIndex(30, $api);
        if ($index30->get('Team1Wins') == 4) {
            $index30_win = $index30->get('Team1ID');
        } else if ($index30->get('Team2Wins') == 4) {
            $index30_win = $index30->get('Team2ID');
        } else {
            $index30_win = NULL;
        }
        $index31 = $this->getSerieByIndex(31, $api);
        if ($index31->get('Team1Wins') == 4) {
            $index31_win = $index31->get('Team1ID');
        } else if ($index31->get('Team2Wins') == 4) {
            $index31_win = $index31->get('Team2ID');
        } else {
            $index31_win = NULL;
        }

        $index40 = $this->getSerieByIndex(40, $api);
        if ($index40->get('Team1Wins') == 4) {
            $index40_win = $index40->get('Team1ID');
        } else if ($index40->get('Team2Wins') == 4) {
            $index40_win = $index40->get('Team2ID');
        } else {
            $index40_win = NULL;
        }




        Serie::updateOrCreate(
            [
                'index_id' => 10,
                'conference' => 'East',
            ],
            [
                'season' => $season,
                'top_team_id' => $index10->get('Team1ID'),
                'top_team_win' => $index10->get('Team1Wins'),
                'down_team_id' => $index10->get('Team2ID'),
                'down_team_win' => $index10->get('Team2Wins'),
                'win_team_id' => $index10_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 11,
                'conference' => 'East',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index11)->get('Team1ID'),
                'top_team_win' => collect($index11)->get('Team1Wins'),
                'down_team_id' => collect($index11)->get('Team2ID'),
                'down_team_win' => collect($index11)->get('Team2Wins'),
                'win_team_id' => $index11_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 12,
                'conference' => 'East',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index12)->get('Team1ID'),
                'top_team_win' => collect($index12)->get('Team1Wins'),
                'down_team_id' => collect($index12)->get('Team2ID'),
                'down_team_win' => collect($index12)->get('Team2Wins'),
                'win_team_id' => $index12_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 13,
                'conference' => 'East',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index13)->get('Team1ID'),
                'top_team_win' => collect($index13)->get('Team1Wins'),
                'down_team_id' => collect($index13)->get('Team2ID'),
                'down_team_win' => collect($index13)->get('Team2Wins'),
                'win_team_id' => $index13_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 14,
                'conference' => 'West',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index14)->get('Team1ID'),
                'top_team_win' => collect($index14)->get('Team1Wins'),
                'down_team_id' => collect($index14)->get('Team2ID'),
                'down_team_win' => collect($index14)->get('Team2Wins'),
                'win_team_id' => $index14_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 15,
                'conference' => 'West',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index15)->get('Team1ID'),
                'top_team_win' => collect($index15)->get('Team1Wins'),
                'down_team_id' => collect($index15)->get('Team2ID'),
                'down_team_win' => collect($index15)->get('Team2Wins'),
                'win_team_id' => $index15_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 16,
                'conference' => 'West',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index16)->get('Team1ID'),
                'top_team_win' => collect($index16)->get('Team1Wins'),
                'down_team_id' => collect($index16)->get('Team2ID'),
                'down_team_win' => collect($index16)->get('Team2Wins'),
                'win_team_id' => $index16_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 17,
                'conference' => 'West',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index17)->get('Team1ID'),
                'top_team_win' => collect($index17)->get('Team1Wins'),
                'down_team_id' => collect($index17)->get('Team2ID'),
                'down_team_win' => collect($index17)->get('Team2Wins'),
                'win_team_id' => $index17_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 20,
                'conference' => 'East',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index20)->get('Team1ID'),
                'top_team_win' => collect($index20)->get('Team1Wins'),
                'down_team_id' => collect($index20)->get('Team2ID'),
                'down_team_win' => collect($index20)->get('Team2Wins'),
                'win_team_id' => $index20_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 21,
                'conference' => 'East',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index21)->get('Team1ID'),
                'top_team_win' => collect($index21)->get('Team1Wins'),
                'down_team_id' => collect($index21)->get('Team2ID'),
                'down_team_win' => collect($index21)->get('Team2Wins'),
                'win_team_id' => $index21_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 22,
                'conference' => 'West',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index22)->get('Team1ID'),
                'top_team_win' => collect($index22)->get('Team1Wins'),
                'down_team_id' => collect($index22)->get('Team2ID'),
                'down_team_win' => collect($index22)->get('Team2Wins'),
                'win_team_id' => $index22_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 23,
                'conference' => 'West',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index23)->get('Team1ID'),
                'top_team_win' => collect($index23)->get('Team1Wins'),
                'down_team_id' => collect($index23)->get('Team2ID'),
                'down_team_win' => collect($index23)->get('Team2Wins'),
                'win_team_id' => $index23_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 30,
                'conference' => 'East',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index30)->get('Team1ID'),
                'top_team_win' => collect($index30)->get('Team1Wins'),
                'down_team_id' => collect($index30)->get('Team2ID'),
                'down_team_win' => collect($index30)->get('Team2Wins'),
                'win_team_id' => $index30_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 31,
                'conference' => 'West',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index31)->get('Team1ID'),
                'top_team_win' => collect($index31)->get('Team1Wins'),
                'down_team_id' => collect($index31)->get('Team2ID'),
                'down_team_win' => collect($index31)->get('Team2Wins'),
                'win_team_id' => $index31_win
            ]
        );

        Serie::updateOrCreate(
            [
                'index_id' => 40,
                'conference' => 'NBA Finals',
            ],
            [
                'season' => $season,
                'top_team_id' => collect($index40)->get('Team1ID'),
                'top_team_win' => collect($index40)->get('Team1Wins'),
                'down_team_id' => collect($index40)->get('Team2ID'),
                'down_team_win' => collect($index40)->get('Team2Wins'),
                'win_team_id' => $index40_win
            ]
        );
        session()->flash('status', 'Playoff Team updated successful!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $serie)
    {
        //
    }

    public function fetch()
    {
        return Http::withHeaders([
            'x-api-key' => env('NBA_UDN_API_KEY')
        ])->get('https://nbafantasynd.udn.com/nba_data/matches/bracket/all')->json();
        // return Http::withHeaders([
        //     'x-api-key' => env('NBA_UDN_API_KEY')
        // ])->get('http://localhost/nba_api/section.json')->json();
    }

    public function getAll()
    {
        return $all = collect($this->fetch());
    }

    public function getData()
    {
        return $data = collect($this->getAll()->get('data'));
    }

    public function getRounds()
    {
        return $rounds = collect($this->getData()->get('Round'));
    }

    public function getRound($round)
    {
        return $round = collect($this->getRounds()->firstWhere('ID', $round));
    }

    public function getSeriesbyRoundAndCon($round, $con)
    {
        return $series = collect(collect(collect($this->getRound($round)->get('Conference'))->firstWhere('Name', $con))->get('Series'));
    }

    public function getWinTeamByIndex($index)
    {
        $api = $this->fetch();
        $serie = $this->getSerieByIndex($index, $api);
        $team1Wins = $serie->get('Team1Wins');
        $team2Wins = $serie->get('Team2Wins');
        if ($team1Wins == 4) {
            return $serie->get('Team1ID');
        } else if ($team2Wins == 4) {
            return $serie->get('Team2ID');
        }
    }

    public function getSerieByIndex($index, $api)
    {
        $all = collect($api);
        $data = collect($all->get('data'));
        $rounds = collect($data->get('Round'));
        switch ($index) {
            case 10:
                $round = collect($rounds->firstWhere('ID', 1));
                if ($round->isEmpty() && $rounds->get('ID') == 1) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'East'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'East') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 1));
                if ($serie->isEmpty() && $series->get('Index') == 1) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 11:
                $round = collect($rounds->firstWhere('ID', 1));
                if ($round->isEmpty() && $rounds->get('ID') == 1) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'East'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'East') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 4));
                if ($serie->isEmpty() && $series->get('Index') == 4) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 12:
                $round = collect($rounds->firstWhere('ID', 1));
                if ($round->isEmpty() && $rounds->get('ID') == 1) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'East'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'East') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 3));
                if ($serie->isEmpty() && $series->get('Index') == 3) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 13:
                $round = collect($rounds->firstWhere('ID', 1));
                if ($round->isEmpty() && $rounds->get('ID') == 1) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'East'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'East') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 2));
                if ($serie->isEmpty() && $series->get('Index') == 2) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 14:
                $round = collect($rounds->firstWhere('ID', 1));
                if ($round->isEmpty() && $rounds->get('ID') == 1) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'West'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'West') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 1));
                if ($serie->isEmpty() && $series->get('Index') == 1) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 15:
                $round = collect($rounds->firstWhere('ID', 1));
                if ($round->isEmpty() && $rounds->get('ID') == 1) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'West'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'West') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 4));
                if ($serie->isEmpty() && $series->get('Index') == 4) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 16:
                $round = collect($rounds->firstWhere('ID', 1));
                if ($round->isEmpty() && $rounds->get('ID') == 1) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'West'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'West') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 3));
                if ($serie->isEmpty() && $series->get('Index') == 3) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 17:
                $round = collect($rounds->firstWhere('ID', 1));
                if ($round->isEmpty() && $rounds->get('ID') == 1) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'West'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'West') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 2));
                if ($serie->isEmpty() && $series->get('Index') == 2) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 20:
                $round = collect($rounds->firstWhere('ID', 2));
                if ($round->isEmpty() && $rounds->get('ID') == 2) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'East'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'East') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 1));
                if ($serie->isEmpty() && $series->get('Index') == 1) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 21:
                $round = collect($rounds->firstWhere('ID', 2));
                if ($round->isEmpty() && $rounds->get('ID') == 2) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'East'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'East') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 2));
                if ($serie->isEmpty() && $series->get('Index') == 2) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 22:
                $round = collect($rounds->firstWhere('ID', 2));
                if ($round->isEmpty() && $rounds->get('ID') == 2) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'West'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'West') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 1));
                if ($serie->isEmpty() && $series->get('Index') == 1) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 23:
                $round = collect($rounds->firstWhere('ID', 2));
                if ($round->isEmpty() && $rounds->get('ID') == 2) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'West'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'West') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 2));
                if ($serie->isEmpty() && $series->get('Index') == 2) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 30:
                $round = collect($rounds->firstWhere('ID', 3));
                if ($round->isEmpty() && $rounds->get('ID') == 3) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'East'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'East') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 1));
                if ($serie->isEmpty() && $series->get('Index') == 1) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 31:
                $round = collect($rounds->firstWhere('ID', 3));
                if ($round->isEmpty() && $rounds->get('ID') == 3) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'West'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'West') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 1));
                if ($serie->isEmpty() && $series->get('Index') == 1) {
                    $serie = $series;
                }
                return $serie;
                break;
            case 40:
                $round = collect($rounds->firstWhere('ID', 4));
                if ($round->isEmpty() && $rounds->get('ID') == 4) {
                    $round = $rounds;
                }

                $conferences = collect($round->get('Conference'));
                $conference = collect($conferences->firstWhere('Name', 'NBA Finals'));
                if ($conference->isEmpty() && $conferences->get('Name') == 'NBA Finals') {
                    $conference = $conferences;
                }

                $series = collect($conference->get('Series'));
                $serie = collect($series->firstWhere('Index', 1));
                if ($serie->isEmpty() && $series->get('Index') == 1) {
                    $serie = $series;
                }
                return $serie;
            default:
                return 'no index research';
                break;
        }
    }
}
