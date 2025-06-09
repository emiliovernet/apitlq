<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\ProcessData;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dispatch-jobs', function () {
    for ($i = 0; $i < 10; $i++) {
        ProcessData::dispatch();
    }
    return "Dispatched 10 jobs!";
});