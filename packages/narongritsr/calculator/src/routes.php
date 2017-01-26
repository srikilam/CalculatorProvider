<?php
Route::get('calculator', function () {
    echo 'Hello from the calculator package!';
});


Route::get('calculator', function () {
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Narongritsr\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Narongritsr\Calculator\CalculatorController@subtract');