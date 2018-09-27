<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('organization')->user();

    //dd($users);

    return view('organization.home');
})->name('home');

