<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

Route::get('/data', function() {
	$data = [];

	for($i = 0; $i < 50000000; $i++) {
		$data[] = $i;
	}

	return response()->json($data);
});
?>