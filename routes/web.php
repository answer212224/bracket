<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;

use App\Http\Controllers\Admin\MemberController as AdminMemberController;
use App\Http\Controllers\Member\MemberController as MemberMemberController;
use App\Http\Controllers\Admin\MemberPerfectSerieController as AdminMemberPerfectSerieController;
use App\Http\Controllers\Member\MemberPerfectSerieController as MemberMemberPerfectSerieController;
use App\Http\Controllers\Admin\MemberGodSerieController as AdminMemberGodSerieController;
use App\Http\Controllers\Member\MemberGodSerieController as MemberMemberGodSerieController;
use App\Http\Controllers\Admin\PlayoffTeamController as AdminPlayoffTeamController;
// use App\Http\Controllers\Admin\PrizeController as AdminPrizeController;
use App\Http\Controllers\Admin\ScheduleController as AdminScheduleController;
use App\Http\Controllers\Admin\SerieController as AdminSerieController;
use App\Http\Controllers\WebHookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/web_hook', [WebHookController::class, 'store'])->middleware('hook');
Route::prefix('facebook')->group(function () {
    Route::get('/redirect', [SocialController::class, 'redirectToProvider'])->name('fblogin');
    Route::get('/callback', [SocialController::class, 'handleProviderCallback']);
    Route::get('/logout', [SocialController::class, 'memberLogout'])->name('fblogout');
});

Route::prefix('member')->name('member.')->group(function () {
    Route::resource('/perfect_series', MemberMemberPerfectSerieController::class)->except('update');
    Route::put('/perfect_series', [MemberMemberPerfectSerieController::class, 'update'])->name('perfect_series.update');
    Route::resource('/god_series', MemberMemberGodSerieController::class)->except('update');
    Route::put('/god_series', [MemberMemberGodSerieController::class, 'update'])->name('god_series.update');
    Route::get('/info', [MemberMemberController::class, 'index'])->name('member.index');
});
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    // Route::resource('/prizes', AdminPrizeController::class);
    Route::resource('/schedules', AdminScheduleController::class);
    Route::resource('/playoff', AdminPlayoffTeamController::class)->except('update');
    Route::put('/playoff', [AdminPlayoffTeamController::class, 'update'])->name('playoff.update');
    Route::resource('/series', AdminSerieController::class)->except('update');
    Route::put('/series', [AdminSerieController::class, 'update'])->name('series.update');
    Route::resource('/members', AdminMemberController::class);
    Route::resource('/perfect_series', AdminMemberPerfectSerieController::class)->except('show');
    Route::get('/perfect_series/{member}', [AdminMemberPerfectSerieController::class, 'show'])->name('perfect_series.show');
    Route::resource('/god_series', AdminMemberGodSerieController::class)->except('show', 'update');
    Route::get('/god_series/{member}', [AdminMemberGodSerieController::class, 'show'])->name('god_series.show');
    Route::put('/god_series', [AdminMemberGodSerieController::class, 'update'])->name('god_series.update');
    Route::get('/export/members', [AdminMemberController::class, 'export']);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/icons', function () {
        return view('pages.icons');
    })->name('icons');
    Route::get('/blank', function () {
        return view('pages.blank');
    })->name('blank');
});
