<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use App\Models\Serie;
use App\Models\MemberGodSerie;
use App\Models\PlayoffTeam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberGodSerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $godSeries = MemberGodSerie::all();

        $godSeries->each(function ($item) {
            $series = Serie::where('index_id', $item->index_id)->first();
            if ($series->win_team_id == $item->team_id) {
                $result = 1;
            } else {
                $result = 0;
            };
        });
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
     * @param  \App\Models\MemberGodSerie  $MemberGodSerie
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        $godSeries = $member->godSeries->sortBy('index_id');
        $godSeries->each(function ($item) {
            $item['team'] = PlayoffTeam::getNbaTeams($item->team_id);
        });

        return view('admin.members.gods.index', compact('godSeries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MemberGodSerie  $MemberGodSerie
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberGodSerie $MemberGodSerie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MemberGodSerie  $MemberGodSerie
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $godSeries = MemberGodSerie::all();

        $godSeries->each(function ($item) {
            $series = Serie::where('index_id', $item->index_id)->first();
            if ($series->win_team_id == $item->team_id) {
                $item->result = 1;
                $item->save();
            } else {
                $item->result = 0;
                $item->save();
            };
        });
        session()->flash('status', 'Member God Series updated successful!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemberGodSerie  $MemberGodSerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberGodSerie $MemberGodSerie)
    {
        //
    }
}
