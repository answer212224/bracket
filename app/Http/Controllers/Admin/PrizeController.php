<?php

namespace App\Http\Controllers\Admin;

use App\Models\Prize;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prizes = Prize::get();
        return view('prizes.index', [
            'prizes' => $prizes
        ]);
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
     * @param  \App\Models\Prize  $prize
     * @return \Illuminate\Http\Response
     */
    public function show(Prize $prize)
    {
        dd($prize);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prize  $prize
     * @return \Illuminate\Http\Response
     */
    public function edit(Prize $prize)
    {

        return view('prizes.edit', compact('prizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prize  $prize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prize $prize)
    {

        if (!empty($request->file('input-img'))) {
            $name = $request->file('input-img')->getClientOriginalName();
            $path = $request->file('input-img')->storeAs(
                '',
                $name,
                'public'
            );

            $prize->update([
                'title' => $request->input('input-title'),
                'content' => $request->input('input-content'),
                'quantity' => $request->input('input-quantity'),
                'img' => $path,
            ]);
        } else {
            $prize = Prize::find($prize->id);
            $prize->update([
                'title' => $request->input('input-title'),
                'content' => $request->input('input-content'),
                'quantity' => $request->input('input-quantity'),
            ]);
        }

        return redirect()->route('admin.prizes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prize  $prize
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prize $prize)
    {
        //
    }
}
