<?php

namespace App\Http\Controllers\Admin;

use App\Models\PlayoffTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class PlayoffTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playoffTeams = PlayoffTeam::paginate(8);
        $playoffTeams->each(function ($item) {
            $item['detail'] = PlayoffTeam::getNbaTeams($item->team_id);
        });
        return view('admin.playoff.index', compact('playoffTeams'));
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
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlayoffTeam  $playoffTeam
     * @return \Illuminate\Http\Response
     */
    public function show(PlayoffTeam $playoffTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlayoffTeam  $playoffTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayoffTeam $playoffTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlayoffTeam  $playoffTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $teams = $this->getApiTeams();
        foreach ($teams as $team) {
            PlayoffTeam::updateOrCreate(
                [
                    'ranking' => $team['rank'],
                    'conference' => $team['conference']
                ],
                [
                    'team_id' => $team['teamId'],
                ]
            );
        }
        $request->session()->flash('status', 'Playoff Team updated successful!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlayoffTeam  $playoffTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayoffTeam $playoffTeam)
    {
        //
    }

    public function fetch()
    {
        return Http::withHeaders([
            'x-api-key' => env('NBA_UDN_API_KEY')
        ])->get('https://nbafantasynd.udn.com/nba_data/team/standings')->json();
    }

    public function getApiTeams()
    {
        return $teams = collect($this->fetch())->collapse();
    }
}
