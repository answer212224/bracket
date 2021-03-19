<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\MemberPerfectSerie;
use Illuminate\Http\Request;

class MemberPerfectSerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $member = Member::where('fb_id', session('fb_id'))->first();
        if (empty($member->name)) {
            return 'no name';
        }
        dd($member->perfectSeries);
        // $member->save();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $member = Member::where('fb_id', session('fb_id'))->first();
        if (empty($member->phone)) {
            return 'no phone';
        }
        MemberPerfectSerie::updateOrCreate(
            [
                'member_id' => $request->member_id,
                'index_id' => $request->index_id,
            ],
            [
                'top_team_id' => $request->top_team_id,
                'top_team_win' => $request->top_tean_win,
                'down_team_id' => $request->down_team_id,
                'down_team_win' => $request->down_team_win,
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
