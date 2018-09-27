<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('player')->user();

    //dd($users);

    return view('player.home');
})->name('home');

