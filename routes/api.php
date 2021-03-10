<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('profissional', 'api\ProfissionalController');
Route::get('procurar/{titulo}','api\ProfissionalController@show');
Route::post('gravar', 'api\ProfissionalController@store');




//<a href="{{ route('nota', ['k' => $k, 'parcelas' => $parcelas]) }}">link</a>