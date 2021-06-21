<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data=
    [
        'name' => 'Fabrizio',
        'surname' => 'Rozzi',
        'aggettivo' => 'bellissimo',
        'films'=>[
            'American pie',
            'Maial college',
            'Parto col folle',
            'Una notte da leoni',
            'Una notte da leoni 2',
            'Una notte da leoni 3'
        ],
        'menus'=>[
            'home',
            'get started',
            'info',
            'contacts',
            'chi siamo',
            'dove siamo'
        ]
    ];
    return view('home', $data);
});
