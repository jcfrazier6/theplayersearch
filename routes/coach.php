<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('coach')->user();

    //dd($users);

    return view('coach.home');
})->name('home');

