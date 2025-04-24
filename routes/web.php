<?php

use App\Http\Controllers\TransformerController;
use Illuminate\Support\Facades\Route;

Route::get('/transformer/source', function () {
    return view('news');
});
Route::get('transformer/text', [TransformerController::class, 'toText']);
