<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use App\Models\MemberPerfectSerie;
use App\Models\PlayoffTeam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MemberPerfectSerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { }

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
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member, Request $request)
    {
        $perfectSeries = $member->perfectSeries->sortBy('index_id');
        $perfectSeries->each(function ($item) {
            $item['topTeam'] = PlayoffTeam::getNbaTeams($item->top_team_id);
            $item['downTeam'] = PlayoffTeam::getNbaTeams($item->down_team_id);
        });
        return view('admin.members.perfects.index', compact('perfectSeries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MemberPerfectSerie  $memberPerfectSerie
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberPerfectSerie $memberPerfectSerie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MemberPerfectSerie  $memberPerfectSerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemberPerfectSerie $memberPerfectSerie)
    { }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemberPerfectSerie  $memberPerfectSerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberPerfectSerie $memberPerfectSerie)
    {
        //
    }
}
