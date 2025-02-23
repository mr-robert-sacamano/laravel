<?php

use Illuminate\Support\Facades\Route;
use App\Service\ApiCurl;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/raydium/price/{addresses}', function (string $addresses) {
    $raydiumApiUrl = 'https://api-v3.raydium.io/mint/price';

    $apiCurl = new ApiCurl();
    $response = $apiCurl->curlUrl($raydiumApiUrl . '?mints=' . $addresses);

    return response()->json(json_decode($response));
});