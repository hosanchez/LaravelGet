<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

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

    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'http://localhost:1290',
        // You can set any number of default request options.
        'timeout'  => 2.0,
    ]);

    // $client = new Client([
    //     'base_uri' => 'http://localhost:1290',
    //     'timeout' => 2.0,
    // ])

    $response = $client->request('GET', '/weatherforecast');

    $data = json_decode($response->getBody()->getContents());

    return view('index',compact('data'));
});


