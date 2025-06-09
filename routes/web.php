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

Route::get('/simulate-load', function () {
    while (true) {
        for ($i = 0; $i < 10; $i++) {
            ProcessData::dispatch();
        }
        sleep(1); // 10 jobs por segundo
    }
});