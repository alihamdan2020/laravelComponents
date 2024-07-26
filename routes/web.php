<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/render-component', function () {
    return view('renderComponent');
});

Route::get('/passData', function () {
    $users=[
        ["id"=>1,"name"=>"ali","age"=>25],
        ["id"=>2,"name"=>"jawad","age"=>35]
    ];
    return view('passData',['allUsers'=>$users]);
});


