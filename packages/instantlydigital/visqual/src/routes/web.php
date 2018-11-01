<?php

Route::namespace('InstantlyDigital\Visqual\Controllers')->group(function(){
    Route::get('/visqual', 'VisqualController@index');
});
