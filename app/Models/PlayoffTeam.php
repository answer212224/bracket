<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PlayoffTeam extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getNbaTeams($teamsId)
    {
        return $nbaTeams = DB::connection('nba_backend_2020')
            ->table('nba_teams')
            ->where('nba_team_id', $teamsId)->first();
    }
}
