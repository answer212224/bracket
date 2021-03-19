<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\SerieController;
use App\Models\Serie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $serieController = new SerieController;
        $api = $serieController->fetch();
        $data = collect(collect($api)->get('data'));
        $season = $data->get('Season');

        $index10 = $serieController->getSerieByIndex(10, $api);
        if ($index10->get('Team1Wins') == 4) {
            $index10_win = $index10->get('Team1ID');
        } else if ($index10->get('Team2Wins') == 4) {
            $index10_win = $index10->get('Team2ID');
        } else {
            $index10_win = NULL;
        }
        $index11 = $serieController->getSerieByIndex(11, $api);
        if ($index11->get('Team1Wins') == 4) {
            $index11_win = $index11->get('Team1ID');
        } else if ($index11->get('Team2Wins') == 4) {
            $index11_win = $index11->get('Team2ID');
        } else {
            $index11_win = NULL;
        }
        $index12 = $serieController->getSerieByIndex(12, $api);
        if ($index12->get('Team1Wins') == 4) {
            $index12_win = $index12->get('Team1ID');
        } else if ($index12->get('Team2Wins') == 4) {
            $index12_win = $index12->get('Team2ID');
        } else {
            $index12_win = NULL;
        }
        $index13 = $serieController->getSerieByIndex(13, $api);
        if ($index13->get('Team1Wins') == 4) {
            $index13_win = $index13->get('Team1ID');
        } else if ($index13->get('Team2Wins') == 4) {
            $index13_win = $index13->get('Team2ID');
        } else {
            $index13_win = NULL;
        }
        $index14 = $serieController->getSerieByIndex(14, $api);
        if ($index14->get('Team1Wins') == 4) {
            $index14_win = $index14->get('Team1ID');
        } else if ($index14->get('Team2Wins') == 4) {
            $index14_win = $index14->get('Team2ID');
        } else {
            $index14_win = NULL;
        }
        $index15 = $serieController->getSerieByIndex(15, $api);
        if ($index15->get('Team1Wins') == 4) {
            $index15_win = $index15->get('Team1ID');
        } else if ($index15->get('Team2Wins') == 4) {
            $index15_win = $index15->get('Team2ID');
        } else {
            $index15_win = NULL;
        }
        $index16 = $serieController->getSerieByIndex(16, $api);
        if ($index16->get('Team1Wins') == 4) {
            $index16_win = $index16->get('Team1ID');
        } else if ($index16->get('Team2Wins') == 4) {
            $index16_win = $index16->get('Team2ID');
        } else {
            $index16_win = NULL;
        }
        $index17 = $serieController->getSerieByIndex(17, $api);
        if ($index17->get('Team1Wins') == 4) {
            $index17_win = $index17->get('Team1ID');
        } else if ($index17->get('Team2Wins') == 4) {
            $index17_win = $index17->get('Team2ID');
        } else {
            $index17_win = NULL;
        }
        $index20 = $serieController->getSerieByIndex(20, $api);
        if ($index20->get('Team1Wins') == 4) {
            $index20_win = $index20->get('Team1ID');
        } else if ($index20->get('Team2Wins') == 4) {
            $index20_win = $index20->get('Team2ID');
        } else {
            $index20_win = NULL;
        }
        $index21 = $serieController->getSerieByIndex(21, $api);
        if ($index21->get('Team1Wins') == 4) {
            $index21_win = $index21->get('Team1ID');
        } else if ($index21->get('Team2Wins') == 4) {
            $index21_win = $index21->get('Team2ID');
        } else {
            $index21_win = NULL;
        }
        $index22 = $serieController->getSerieByIndex(22, $api);
        if ($index22->get('Team1Wins') == 4) {
            $index22_win = $index22->get('Team1ID');
        } else if ($index22->get('Team2Wins') == 4) {
            $index22_win = $index22->get('Team2ID');
        } else {
            $index22_win = NULL;
        }
        $index23 = $serieController->getSerieByIndex(23, $api);
        if ($index23->get('Team1Wins') == 4) {
            $index23_win = $index23->get('Team1ID');
        } else if ($index23->get('Team2Wins') == 4) {
            $index23_win = $index23->get('Team2ID');
        } else {
            $index23_win = NULL;
        }

        $index30 = $serieController->getSerieByIndex(30, $api);
        if ($index30->get('Team1Wins') == 4) {
            $index30_win = $index30->get('Team1ID');
        } else if ($index30->get('Team2Wins') == 4) {
            $index30_win = $index30->get('Team2ID');
        } else {
            $index30_win = NULL;
        }
        $index31 = $serieController->getSerieByIndex(31, $api);
        if ($index31->get('Team1Wins') == 4) {
            $index31_win = $index31->get('Team1ID');
        } else if ($index31->get('Team2Wins') == 4) {
            $index31_win = $index31->get('Team2ID');
        } else {
            $index31_win = NULL;
        }

        $index40 = $serieController->getSerieByIndex(40, $api);
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
    }
}
