<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * 從facebook獲取用戶信息。
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request)
    {
        $user = Socialite::driver('facebook')->user();
        Member::updateOrCreate(
            [
                'fb_id' => $user->id,
            ],
            [
                'fb_name' => $user->name,
                'fb_email' => $user->email,
                'ip' => $request->ip(),
            ]
        );
        session(['fb_id' => $user->id]);
        return back();
    }

    public function memberLogout(Request $request)
    {
        $request->session()->forget('fb_id');
        return redirect('/');
    }
}
