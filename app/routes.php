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
        ],

        "userbar" => [
            "url" => [
                "my_place" => "这里是地址",
                "switch_palce" => "##"
            ]
        ],

        "my_store" => [
            "url" => "###",
            "date" => [
                0 => [
                    "shop_url" => "##",
                    "shop_logo" => "../../../../images/5c81fa9884117928491470659e18djpeg.jpeg",
                    "deliver_time" => "22",
                    "deliver_start" => "17:00",
                    "shop_name" => "三顾冒菜",
                    "shop_type" => "中餐",
                    "shop_level" => "4.3",
                    "order_count" => "202",
                    "is_opening" => "0",
                    "is_ready_for_order" => "1"
                ],
                1 => [
                    "shop_url" => "##",
                    "shop_logo" => "../../../../images/5c81fa9884117928491470659e18djpeg.jpeg",
                    "deliver_time" => "45",
                    "deliver_start" => "",
                    "shop_name" => "乐堡王",
                    "shop_type" => "中式，西式",
                    "shop_level" => "4.7",
                    "order_count" => "5134",
                    "is_opening" => "0",
                    "is_ready_for_order" => "0"
                ],
                2 => [
                    "shop_url" => "##",
                    "shop_logo" => "../../../../images/5c81fa9884117928491470659e18djpeg.jpeg",
                    "deliver_time" => "",
                    "deliver_start" => "",
                    "shop_name" => "铁板牛肉",
                    "shop_type" => "中餐",
                    "shop_level" => "3.8",
                    "order_count" => "202",
                    "is_opening" => "2",
                    "is_ready_for_order" => "0"
                ]
            ]
        ]

    ];

	return View::make('template.home.home')->with($data);
});
