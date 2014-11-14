<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function(){
    $data = [
        "pic_swap" => [
            0 => [
                "image_url" => "a.jpg",
                "jump_url" => ""
            ],
            1 => [
                "image_url" => "b.jpg",
                "jump_url" => ""
            ]
        ],

        "side_bar" => [
            "QR_code" => "http://db.jpg",
            "open_shop" => "http://shop",
            "hot_question" => "http://hot_question"
        ]

    ];

	return View::make('template.home.home')->with($data);
});
