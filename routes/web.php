<?php

Route::get('/openai', 'OpenAIController@index');
Route::post('/openai', 'OpenAIController@ask');

