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
            "QR_code" => "http=>//db.jpg",
            "open_shop" => "http=>//shop",
            "hot_question" => "http=>//hot_question"
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
                    "shop_logo" => url("images/5c81fa9884117928491470659e18djpeg.jpeg"),
                    "deliver_time" => "22",
                    "deliver_start" => "17=>00",
                    "shop_name" => "三顾冒菜",
                    "shop_type" => "中餐",
                    "shop_level" => "4.3",
                    "order_count" => "202",
                    "is_opening" => "0",
                    "is_ready_for_order" => "1"
                ],
                1 => [
                    "shop_url" => "##",
                    "shop_logo" => url("images/5c81fa9884117928491470659e18djpeg.jpeg"),
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
                    "shop_logo" => url("images/5c81fa9884117928491470659e18djpeg.jpeg"),
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
        ],

        "shop_list" => [
            "data" =>  [
                // 考虑到以后活动会换， 在前端进行筛选的时候， 会通过activity_id 进行筛选
                "activity" => [
                    0 => [
                        "activity_id" => "123",
                        "activity_name"  => "11元管饱又管好(重庆)"
                    ],
                    1 => [
                        "activity_id" => "456",
                        "activity_name" => "10元管饱"
                    ]
                ],
            
                "shops" => [
                    0 => [
                        "support_activity" => ["123", "456"],       // 所有支持的活动的id
                        "isHot" => true,                  // 是否是热门餐厅
                        "isOnline" => true,                    // 是否营业
                        "isSupportPay" => true,                   // 是否支持在线支付
                        "flavor" => "中式" ,                  // 餐厅口味
                        "shop_id" => ""    ,                         // 商家id
                        "place_id" => ""   ,                        // 商家位置id
                        "shop_url" => ""   ,                       // 点击跳转到相应商家
                        "shop_logo" => ""  ,                      // 商家的logo图片地址
                        "deliver_time" => "",                     // 送货时间间隔
                        "deliver_start" => "" ,                    // 送货开始时间
                        "shop_name" => ""       ,                   // 商家名称
                        "shop_type" => ""        ,                  // 商家类型
                        "shop_level" => "9"       ,                 // 总共10个等级, 1个半星一个等级
                        "shop_announce" => ""      ,                // 商家公告
                        "deliver_start_statement" => ""        ,               // 起送价描述, 注意,这是一段话
                        "shop_address" => ""          ,             // 商家地址
                        "is_opening"  => ""            ,            // 0 是正在营业, 1是打烊了
                        "close_msg "  => ""             ,           // 关门信息
                        "business_hours" => ""           ,          // 营业时间
                        "shop_summary" => ""              ,         // 商家简介
                        "order_count "=> "20"               ,       // 订单数量
                        "is_collected" => ""                 ,      // 是否被收藏了
                        "additions" => [                          // 额外的内容
                            0 => [
                                "add_img" => ""   ,                 // 额外内容的图片地址, 这里会显示一个配字样的图片
                                "add_content" => "配送费3元"  ,     // 额外内容
                            ]
                        ]
                    ]
                ]
            ]   
        ]
    ];

	return View::make('template.home.home')->with($data);
});
