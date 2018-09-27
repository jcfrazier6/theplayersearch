<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('parental')->user();

    //dd($users);

    return view('parental.home');
})->name('home');

