<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\MemberGodSerie;
use Illuminate\Http\Request;

class MemberGodSerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::where('fb_id', session('fb_id'))->first();
        dd($member->godSeries);
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
     * @param  \App\Models\MemberGodSerie  $memberGodSerie
     * @return \Illuminate\Http\Response
     */
    public function show(MemberGodSerie $memberGodSerie)
    { }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $member = Member::where('fb_id', session('fb_id'))->first();
        MemberGodSerie::updateOrCreate(
            [
                'member_id' => $member->id,
                'index_id' => $request->index_id,
            ],
            [
                'top_team_id' => $request->top_team_id,
                'down_team_id' => $request->down_team_id,
            ]
        );
        return 'ok';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemberGodSerie  $memberGodSerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberGodSerie $memberGodSerie)
    {
        //
    }
}
