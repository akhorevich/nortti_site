<?php


Route::get('/', 'MyController@index');
Route::get('/date', function() {

    $date=date("d.m.y");

    return view('date',['date'=>$date]);

});

