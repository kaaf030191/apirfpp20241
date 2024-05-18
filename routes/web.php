<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', function() {
    $data = [
        'Kevin Arnold',
        'Alex Lancho',
        'Darcy',
        'Henry',
        'Lupe',
        'Michael'
    ];

    return response()->json($data);
});