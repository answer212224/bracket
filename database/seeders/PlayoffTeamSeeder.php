<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\PlayoffTeamController;
use App\Models\PlayoffTeam;
use Illuminate\Database\Seeder;

class PlayoffTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playoffTeamController = new PlayoffTeamController;
        $teams = $playoffTeamController->getApiTeams();
        foreach ($teams as $team) {
            PlayoffTeam::updateOrCreate(
                [
                    'ranking' => $team['rank'],
                    'conference' => $team['conference'],
                ],
                [
                    'team_id' => $team['teamId'],
                ]
            );
        }
    }
}
