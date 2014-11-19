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
				"image_url" => "http://gtms02.alicdn.com/tps/i2/TB1OK_uGXXXXXXwXVXXnLSnFXXX-880-70.png",
				"jump_url" => "1231"
			],
			1 => [
				"image_url" => "http://gtms02.alicdn.com/tps/i2/TB1OK_uGXXXXXXwXVXXnLSnFXXX-880-70.png",
				"jump_url" => "1231231"
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
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],


		"my_store" => [
			"url" => "###",
			"data" => [
				[
					"shop_id" => "123435",
					"place_id" => "589u65487945",
					"shop_url" => "http://www.baidu.com",
					"shop_logo" => url("images/5c81fa9884117928491470659e18djpeg.jpeg"),
					"deliver_time" => "22",
					"deliver_start" => "17:00",
					"shop_name" => "三顾冒菜",
					"shop_type" => "中餐",
					"shop_level" => "4.3",
					"order_count" => "202",
					"is_opening" => "0",
					"is_ready_for_order" => "1"
				],
				[
					"shop_id" => "124124345",
					"place_id" => "234534",
					"shop_url" => "##",
					"shop_logo" => url("images/5c81fa9884117928491470659e18djpeg.jpeg"),
					"deliver_time" => "45",
					"deliver_start" => "",
					"shop_name" => "乐堡王",
					"shop_type" => "中式，西式",
					"shop_level" => "4.3",
					"order_count" => "5134",
					"is_opening" => "0",
					"is_ready_for_order" => "0"
				],
				[
					"shop_id" => "45675656",
					"place_id" => "435456456436346346346",
					"shop_url" => "##",
					"shop_logo" => "",
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
					1 => "新店开张，欢迎光临",
					2 => "首单立减8元",
					3 => "在线支付，10元减5元"
				],
                "shops" => [
                    [
                        "support_activity" => [2,3],       // 所有支持的活动的id
                        "isHot" => true,                  // 是否是热门餐厅
                        "isOnline" => true,                    // 是否营业
                        "isSupportPay" => true,                   // 是否支持在线支付
                        "flavor" => "中式" ,                  // 餐厅口味
                        "shop_id" => "456"    ,                         // 商家id
                        "place_id" => "123"   ,                        // 商家位置id
                        "shop_url" => "http://baidu.com"   ,                       // 点击跳转到相应商家
                        "shop_logo" => ""  ,                      // 商家的logo图片地址
                        "deliver_time" => "22",                     // 送货时间间隔
                        "deliver_start" => "10:00" ,                    // 送货开始时间
                        "shop_name" => "臭脚丫"       ,                   // 商家名称
                        "shop_type" => "美食"        ,                  // 商家类型
                        "shop_level" => "3.8"       ,                 // 总共10个等级, 1个半星一个等级
                        "shop_announce" => "臭脚丫专卖店"      ,                // 商家公告
                        "deliver_state_start" => "100块都不送",
                        "deliver_start_statement" => "顺丰快递,耶"        ,               // 起送价描述, 注意,这是一段话
                        "shop_address" => "黄脚丫"          ,             // 商家地址
                        "is_opening"  => "0"            ,            // 0 是正在营业, 1是打烊了
                        "close_msg"  => "关门啦"             ,           // 关门信息
                        "business_hours" => "08:00"           ,          // 营业时间
                        "shop_summary" => "lalalal"              ,         // 商家简介
                        "order_count"=> "22"               ,       // 订单数量
                        "is_collected" => ""                 ,      // 是否被收藏了
                        "is_ready_for_order" => "1",
                        "additions" => [                          // 额外的内容
                            0 => [
                                "add_img" => ""   ,                 // 额外内容的图片地址, 这里会显示一个配字样的图片
                                "add_content" => "配送费3元"  ,     // 额外内容
                            ]
                        ]
                    ],[
                        "support_activity" => [1,2],       // 所有支持的活动的id
                        "isHot" => true,                  // 是否是热门餐厅
                        "isOnline" => true,                    // 是否营业
                        "isSupportPay" => true,                   // 是否支持在线支付
                        "flavor" => "中式" ,                  // 餐厅口味
                        "shop_id" => "456"    ,                         // 商家id
                        "place_id" => "123"   ,                        // 商家位置id
                        "shop_url" => "http://baidu.com"   ,                       // 点击跳转到相应商家
                        "shop_logo" => ""  ,                      // 商家的logo图片地址
                        "deliver_time" => "22",                     // 送货时间间隔
                        "deliver_start" => "10:00" ,                    // 送货开始时间
                        "shop_name" => "臭脚丫"       ,                   // 商家名称
                        "shop_type" => "美食"        ,                  // 商家类型
                        "shop_level" => "3.8"       ,                 // 总共10个等级, 1个半星一个等级
                        "shop_announce" => "臭脚丫专卖店"      ,                // 商家公告
                        "deliver_state_start" => "100块都不送",
                        "deliver_start_statement" => "顺丰快递,耶"        ,               // 起送价描述, 注意,这是一段话
                        "shop_address" => "黄脚丫"          ,             // 商家地址
                        "is_opening"  => "0"            ,            // 0 是正在营业, 1是打烊了
                        "close_msg "  => "关门啦"             ,           // 关门信息
                        "business_hours" => "08:00"           ,          // 营业时间
                        "shop_summary" => "lalalal"              ,         // 商家简介
                        "order_count"=> "22"               ,       // 订单数量
                        "is_collected" => ""                 ,      // 是否被收藏了
                        "is_ready_for_order" => "1",
                        "additions" => [                          // 额外的内容
                            0 => [
                                "add_img" => ""   ,                 // 额外内容的图片地址, 这里会显示一个配字样的图片
                                "add_content" => "配送费3元"  ,     // 额外内容
                            ]
                        ]
                    ],[
                        "support_activity" => [1,2],       // 所有支持的活动的id
                        "isHot" => true,                  // 是否是热门餐厅
                        "isOnline" => true,                    // 是否营业
                        "isSupportPay" => true,                   // 是否支持在线支付
                        "flavor" => "中式" ,                  // 餐厅口味
                        "shop_id" => "456"    ,                         // 商家id
                        "place_id" => "123"   ,                        // 商家位置id
                        "shop_url" => "http://baidu.com"   ,                       // 点击跳转到相应商家
                        "shop_logo" => ""  ,                      // 商家的logo图片地址
                        "deliver_time" => "22",                     // 送货时间间隔
                        "deliver_start" => "10:00" ,                    // 送货开始时间
                        "shop_name" => "臭脚丫"       ,                   // 商家名称
                        "shop_type" => "美食"        ,                  // 商家类型
                        "shop_level" => "3.8"       ,                 // 总共10个等级, 1个半星一个等级
                        "shop_announce" => "臭脚丫专卖店"      ,                // 商家公告
                        "deliver_state_start" => "100块都不送",
                        "deliver_start_statement" => "顺丰快递,耶"        ,               // 起送价描述, 注意,这是一段话
                        "shop_address" => "黄脚丫"          ,             // 商家地址
                        "is_opening"  => "0"            ,            // 0 是正在营业, 1是打烊了
                        "close_msg "  => "关门啦"             ,           // 关门信息
                        "business_hours" => "08:00"           ,          // 营业时间
                        "shop_summary" => "lalalal"              ,         // 商家简介
                        "order_count"=> "22"               ,       // 订单数量
                        "is_collected" => ""                 ,      // 是否被收藏了
                        "is_ready_for_order" => "1",
                        "additions" => [                          // 额外的内容
                            0 => [
                                "add_img" => ""   ,                 // 额外内容的图片地址, 这里会显示一个配字样的图片
                                "add_content" => "配送费3元"  ,     // 额外内容
                            ]
                        ]
                    ],[
                        "support_activity" => [1,3],       // 所有支持的活动的id
                        "isHot" => true,                  // 是否是热门餐厅
                        "isOnline" => true,                    // 是否营业
                        "isSupportPay" => true,                   // 是否支持在线支付
                        "flavor" => "中式" ,                  // 餐厅口味
                        "shop_id" => "456"    ,                         // 商家id
                        "place_id" => "123"   ,                        // 商家位置id
                        "shop_url" => "http://baidu.com"   ,                       // 点击跳转到相应商家
                        "shop_logo" => ""  ,                      // 商家的logo图片地址
                        "deliver_time" => "22",                     // 送货时间间隔
                        "deliver_start" => "10:00" ,                    // 送货开始时间
                        "shop_name" => "臭脚丫"       ,                   // 商家名称
                        "shop_type" => "美食"        ,                  // 商家类型
                        "shop_level" => "3.8"       ,                 // 总共10个等级, 1个半星一个等级
                        "shop_announce" => "臭脚丫专卖店"      ,                // 商家公告
                        "deliver_state_start" => "100块都不送",
                        "deliver_start_statement" => "顺丰快递,耶"        ,               // 起送价描述, 注意,这是一段话
                        "shop_address" => "黄脚丫"          ,             // 商家地址
                        "is_opening"  => "0"            ,            // 0 是正在营业, 1是打烊了
                        "close_msg "  => "关门啦"             ,           // 关门信息
                        "business_hours" => "08:00"           ,          // 营业时间
                        "shop_summary" => "lalalal"              ,         // 商家简介
                        "order_count"=> "22"               ,       // 订单数量
                        "is_collected" => ""                 ,      // 是否被收藏了
                        "is_ready_for_order" => "1",
                        "additions" => [                          // 额外的内容
                            0 => [
                                "add_img" => ""   ,                 // 额外内容的图片地址, 这里会显示一个配字样的图片
                                "add_content" => "配送费3元"  ,     // 额外内容
                            ]
                        ]
                    ],[
                        "support_activity" => [2,3],       // 所有支持的活动的id
                        "isHot" => true,                  // 是否是热门餐厅
                        "isOnline" => true,                    // 是否营业
                        "isSupportPay" => true,                   // 是否支持在线支付
                        "flavor" => "中式" ,                  // 餐厅口味
                        "shop_id" => "456"    ,                         // 商家id
                        "place_id" => "123"   ,                        // 商家位置id
                        "shop_url" => "http://baidu.com"   ,                       // 点击跳转到相应商家
                        "shop_logo" => ""  ,                      // 商家的logo图片地址
                        "deliver_time" => "22",                     // 送货时间间隔
                        "deliver_start" => "10:00" ,                    // 送货开始时间
                        "shop_name" => "臭脚丫"       ,                   // 商家名称
                        "shop_type" => "美食"        ,                  // 商家类型
                        "shop_level" => "3.8"       ,                 // 总共10个等级, 1个半星一个等级
                        "shop_announce" => "臭脚丫专卖店"      ,                // 商家公告
                        "deliver_state_start" => "100块都不送",
                        "deliver_start_statement" => "顺丰快递,耶"        ,               // 起送价描述, 注意,这是一段话
                        "shop_address" => "黄脚丫"          ,             // 商家地址
                        "is_opening"  => "0"            ,            // 0 是正在营业, 1是打烊了
                        "close_msg "  => "关门啦"             ,           // 关门信息
                        "business_hours" => "08:00"           ,          // 营业时间
                        "shop_summary" => "lalalal"              ,         // 商家简介
                        "order_count"=> "22"               ,       // 订单数量
                        "is_collected" => ""                 ,      // 是否被收藏了
                        "is_ready_for_order" => "1",
                        "additions" => [                          // 额外的内容
                            0 => [
                                "add_img" => ""   ,                 // 额外内容的图片地址, 这里会显示一个配字样的图片
                                "add_content" => "配送费3元"  ,     // 额外内容
                            ]
                        ]
                    ]
                ]
            ]
        ],
        "add_image" => [
            "data" => [
                [
                    "image_url" => "###",
                    "jump_url" => "##",
                ],
                [
                    "image_url" => "###",
                    "jump_url" => "##",
                ],
                [
                    "image_url" => "###",
                    "jump_url" => "##",
                ],
                [
                    "image_url" => "###",
                    "jump_url" => "##",
                ],
                [
                    "image_url" => "###",
                    "jump_url" => "##",
                ]
            ]
        ],
        "more_shop" => [
			"data" => [
                [
                    "shop_id" => "12423235235235",
                    "place_id" => "12423235235235",
                    "support_activity" => [1,2,3],
                    "isHot" => "1",
                    "isOnline" => "1",
                    "isSupportPay" => "1",
                    "shop_url" => "http://www.baidu.com",
                    "shop_logo" => url("images/5c81fa9884117928491470659e18djpeg.jpeg"),
                    "deliver_time" => "22",
                    "deliver_start" => "17:00",
                    "shop_name" => "三顾冒菜",
                    "shop_type" => "中餐",
                    "shop_level" => "4.3",
                    "shop_announce" => "吃吃吃，吃个屁",
                    "deliver_state_start" => "100块都不送",
                    "shop_address" => "堕落街",
                    "business_hours" => "24小时",
                    "shop_summary"  => "吃吃吃",
                    "order_count" => "202",
                    "is_collected" => "0",
                    "is_opening" => "0",
                    "is_ready_for_order" => "1"
                ],
                [
                    "shop_id" => "12423235235235",
                    "place_id" => "12423235235235",
                    "support_activity" => [1,2,3],
                    "isHot" => "1",
                    "isOnline" => "1",
                    "isSupportPay" => "1",
                    "shop_url" => "http://www.baidu.com",
                    "shop_logo" => url("images/5c81fa9884117928491470659e18djpeg.jpeg"),
                    "deliver_time" => "22",
                    "deliver_start" => "17:00",
                    "shop_name" => "三顾冒菜",
                    "shop_type" => "中餐",
                    "shop_level" => "4.3",
                    "shop_announce" => "吃吃吃，吃个屁",
                    "deliver_state_start" => "100块都不送",
                    "shop_address" => "堕落街",
                    "business_hours" => "24小时",
                    "shop_summary"  => "吃吃吃",
                    "order_count" => "202",
                    "is_collected" => "0",
                    "is_opening" => "0",
                    "is_ready_for_order" => "1"
                ],
                [
                    "support_activity" => [1,2,3],
	                "shop_id" => "12423235235235",
	                "place_id" => "12423235235235",
                    "isHot" => "1",
                    "isOnline" => "1",
                    "isSupportPay" => "1",
                    "shop_url" => "##",
                    "shop_logo" => url("images/5c81fa9884117928491470659e18djpeg.jpeg"),
                    "deliver_time" => "45",
                    "deliver_start" => "",
                    "shop_name" => "乐堡王",
                    "shop_type" => "中式，西式",
                    "shop_level" => "4.3",
                    "shop_announce" => "吃吃吃，吃个屁",
                    "deliver_state_start" => "100块都不送",
                    "shop_address" => "堕落街A区",
                    "business_hours" => "24小时",
                    "shop_summary"  => "吃",
                    "is_collected" => "1",
                    "order_count" => "5134",
                    "is_opening" => "0",
                    "is_ready_for_order" => "0"
                ],
                [
                    "shop_id" => "12423235235235",
                    "place_id" => "12423235235235",
                    "support_activity" => [1,2,3],
                    "isHot" => "1",
                    "isOnline" => "1",
                    "isSupportPay" => "1",
                    "shop_url" => "##",
                    "shop_logo" => "",
                    "deliver_time" => "",
                    "deliver_start" => "",
                    "shop_name" => "铁板牛肉",
                    "shop_type" => "中餐",
                    "shop_level" => "3.8",
                    "shop_announce" => "吃吃吃，吃个屁",
                    "deliver_state_start" => "送送送",
                    "shop_address" => "堕落街B区",
                    "business_hours" => "6：00 - 10：00",
                    "shop_summary"  => "吃个屁",
                    "is_collected" => "0",
                    "order_count" => "202",
                    "is_opening" => "2",
                    "is_ready_for_order" => "0"
                ],
                [
					"shop_id" => "12423235235235",
					"place_id" => "12423235235235",
					"support_activity" => [1,2,3],
					"isHot" => "1",
					"isOnline" => "1",
					"isSupportPay" => "1",
					"shop_url" => "##",
					"shop_logo" => "",
					"deliver_time" => "",
					"deliver_start" => "",
					"shop_name" => "铁板牛肉",
					"shop_type" => "中餐",
					"shop_level" => "3.8",
					"shop_announce" => "吃吃吃，吃个屁",
					"deliver_state_start" => "送送送",
					"shop_address" => "堕落街B区",
					"business_hours" => "6：00 - 10：00",
					"shop_summary"  => "吃个屁",
					"is_collected" => "0",
					"order_count" => "202",
					"is_opening" => "2",
					"is_ready_for_order" => "0"
				],
				[
					"shop_id" => "12423235235235",
					"place_id" => "12423235235235",
					"support_activity" => [1,2,3],
					"isHot" => "1",
					"isOnline" => "1",
					"isSupportPay" => "1",
					"shop_url" => "##",
					"shop_logo" => "",
					"deliver_time" => "",
					"deliver_start" => "",
					"shop_name" => "铁板牛肉",
					"shop_type" => "中餐",
					"shop_level" => "3.8",
					"shop_announce" => "吃吃吃，吃个屁",
					"deliver_state_start" => "送送送",
					"shop_address" => "堕落街B区",
					"business_hours" => "6：00 - 10：00",
					"shop_summary"  => "吃个屁",
					"is_collected" => "0",
					"order_count" => "202",
					"is_opening" => "2",
					"is_ready_for_order" => "0"
				]
			]
		]
	];

	return View::make('template.home.home')->with($data);
});

Route::get("shop", function() {
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],

	];

	return View::make("template.shop.shop")->with($data);
});

Route::get("/personal_center", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
            "personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
            "personal_after_month" => url("personal_after_month") , // 一个月之前
            "personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
            "personal_return" => url("personal_return"),     // 退单中的订单
            "personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
            "personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
            "personal_my_site" => url("personal_my_site") ,  // 我的地址
            "personal_change_password" => url("personal_change_password"), // 修改密码
            "personal_secure"=> url("personal_secure"),        // 安全设置
            "personal_details" => url("personal_details")       // 收支明细
        ]
	];

	return View::make("template.personal.personal_center")->with($data);
});

Route::get("/personal_after_month", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		]
	];

	return View::make("template.personal.personal_after_month")->with($data);
});

Route::get("/personal_change_password", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		]
	];

	return View::make("template.personal.personal_change_password")->with($data);
});



Route::get("/personal_change_password", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		]
	];

	return View::make("template.personal.personal_change_password")->with($data);
});


Route::get("/personal_collection_goods", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		]
	];

	return View::make("template.personal.personal_collection_goods")->with($data);
});

Route::get("/personal_collection_shop", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		]
	];

	return View::make("template.personal.personal_collection_shop")->with($data);
});

Route::get("/personal_details", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		]
	];

	return View::make("template.personal.personal_details")->with($data);
});

Route::get("/personal_my_site", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		]
	];

	return View::make("template.personal.personal_my_site")->with($data);
});



Route::get("/personal_recent_month", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		],
        "recent_month" => [
            "deal_count" => "11",
            "deal" => [
                [
                    "shop_id" => "123",
                    "deal_id" => "123",
                    "deal_statue" => "1",
                    "same_again" => "##",
                    "deal_is_retrun" => "1",
                    "deal_return" => "##",
                    "deal_is_pre" => "0",
                    "deal_pre_time" => "2014-11-17 11:45:00",
                    "deal_again" => "##",
                    "shop_name" => "臭脚丫",
                    "deal_number" => "1234567345678",
                    "deal_time" => "2014-11-18 11:11:27",
                    "deal_phone" => "15340525659 15340525659",
                    "deliver_address" => "邮电大学太极操场西6门",
                    "deliver_phone" => "18716625394",
                    "deliver_remark" => "吃吃吃！",
                    "deal_satisfied" => "0",
                    "good" => [
                        [
                            "goods_id" => "123",
                            "goods_name" => "红烧肉",
                            "goods_value" => "12",
                            "goods_amount" => "1",
                            "goods_total" => "12"
                        ],
                        [
                            "goods_id" => "123",
                            "goods_name" => "红烧肉",
                            "goods_value" => "12",
                            "goods_amount" => "1",
                            "goods_total" => "12"
                        ]
                    ],
                    "others" => [
                        [
                            "item_name" => "红烧肉",
                            "item_value" => "-5",
                            "item_amount" => "1",
                            "item_total" => "-5"
                        ]
                    ],
                    "total" => "19"
                ],
                [
                    "shop_id" => "123",
                    "deal_id" => "123",
                    "deal_statue" => "0",
                    "same_again" => "##",
                    "deal_is_retrun" => "0",
                    "deal_return" => "##",
                    "deal_is_pre" => "1",
                    "deal_pre_time" => "2014-11-17 11:45:00",
                    "deal_again" => "##",
                    "shop_name" => "臭脚丫",
                    "deal_number" => "1234567345678",
                    "deal_time" => "2014-11-18 11:11:27",
                    "deal_phone" => "15340525659 15340525659",
                    "deliver_address" => "邮电大学太极操场西6门",
                    "deliver_phone" => "18716625394",
                    "deliver_remark" => "吃吃吃！",
                    "deal_satisfied" => "0",
                    "good" => [
                        [
                            "goods_id" => "123",
                            "goods_name" => "红烧肉",
                            "goods_value" => "12",
                            "goods_amount" => "1",
                            "goods_total" => "12"
                        ],
                        [
                            "goods_id" => "123",
                            "goods_name" => "红烧肉",
                            "goods_value" => "12",
                            "goods_amount" => "1",
                            "goods_total" => "12"
                        ]
                    ],
                    "others" => [
                        [
                            "在线支付立减优惠" => "红烧肉",
                            "item_value" => "-5",
                            "item_amount" => "1",
                            "item_total" => "-5"
                        ]
                    ],
                    "total" => "19"
                ]
            ]
        ]
	];

	return View::make("template.personal.personal_recent_month")->with($data);
});

Route::get("/personal_return", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		]
	];

	return View::make("template.personal.personal_return")->with($data);
});


Route::get("/personal_secure", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		]
	];

	return View::make("template.personal.personal_secure")->with($data);
});


Route::get("/personal_uncomment", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		]
	];

	return View::make("template.personal.personal_uncomment")->with($data);
});

Route::get("/personal_verify_email", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		]
	];

	return View::make("template.personal.personal_verify_email")->with($data);
});



Route::get("/personal_verify_phone", function(){
	$data = [
		"userbar" => [
			"url" => [
				"my_place" => "这里是地址",
				"switch_palce" => "##",
				"logo" => "123" ,                         // 网站主页地址
				"mobile" => "123",                 // 跳转到下载手机APP的地址
				"my_ticket" => "123",                 // 我的饿单的地址
				"my_gift"  => "123",                // 礼品中心地址
				"feedback" => "123",                // 反馈留言地址
				"shop_chart" => "123",                // 购物车地址
				"user_mail" => "123",                // 用户提醒的地址
				"personal" => "123",                // 个人中心地址
				"my_collection" => "123",               // 我的收藏地址
				"my_secure" => "123",              // 安全设置的地址
				"loginout" => "123",              // 退出登录的地址
				"switch_place" => "123"                  // 切换当前地址的地址
			]
		],
		"sidebar" => [  // 左侧栏地址
			"personal_center" => url("/personal_center"),  // 个人中心的地址
			"personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
			"personal_after_month" => url("personal_after_month") , // 一个月之前
			"personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
			"personal_return" => url("personal_return"),     // 退单中的订单
			"personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
			"personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
			"personal_my_site" => url("personal_my_site") ,  // 我的地址
			"personal_change_password" => url("personal_change_password"), // 修改密码
			"personal_secure"=> url("personal_secure"),        // 安全设置
			"personal_details" => url("personal_details")       // 收支明细
		]
	];

	return View::make("template.personal.personal_verify_phone")->with($data);
});

Route::get("/personal_change_phone", function(){
    $data = [
        "userbar" => [
            "url" => [
                "my_place" => "这里是地址",
                "switch_palce" => "##",
                "logo" => "123" ,                         // 网站主页地址
                "mobile" => "123",                 // 跳转到下载手机APP的地址
                "my_ticket" => "123",                 // 我的饿单的地址
                "my_gift"  => "123",                // 礼品中心地址
                "feedback" => "123",                // 反馈留言地址
                "shop_chart" => "123",                // 购物车地址
                "user_mail" => "123",                // 用户提醒的地址
                "personal" => "123",                // 个人中心地址
                "my_collection" => "123",               // 我的收藏地址
                "my_secure" => "123",              // 安全设置的地址
                "loginout" => "123",              // 退出登录的地址
                "switch_place" => "123"                  // 切换当前地址的地址
            ]
        ],
        "sidebar" => [  // 左侧栏地址
            "personal_center" => url("/personal_center"),  // 个人中心的地址
            "personal_recent_month" => url("personal_recent_month"), // 最近一个月的地址
            "personal_after_month" => url("personal_after_month") , // 一个月之前
            "personal_uncomment" => url("personal_uncomment") ,  // 未点评的订单
            "personal_return" => url("personal_return"),     // 退单中的订单
            "personal_collection_shop" => url("personal_collection_shop"),// 我收藏的餐厅的地址
            "personal_collection_goods" => url("personal_collection_goods"), // 我收藏的商品的地址
            "personal_my_site" => url("personal_my_site") ,  // 我的地址
            "personal_change_password" => url("personal_change_password"), // 修改密码
            "personal_secure"=> url("personal_secure"),        // 安全设置
            "personal_details" => url("personal_details"),       // 收支明细
            "personal_change_phone" => url("personal_change_phone")
        ]
    ];
    return View::make("template.personal.personal_change_phone")->with($data);
});


Route::get('/userBarSearch', function(){
	$data = [
		"success" => "true", // 成功返回true, 失败返回false
		"state"   => 200,  // HTTP 状态码
		"nextSrc" => "",  // 登录成功后的跳转地址
		"errMsg"  => "",  // 如果出现错误, 错误信息就出现在这, 如果没有, 那内容为空.
		"no"      => 0,  // 错误号 ,错误号就出现在这, 如果没有, 那内容为空.
		"data"    => [
			[
				"goods_category" => "美食", // 商品种类
				"shop_result" => [
					[
						"goods_name" => "小包才肉汤", // 商品名称
						"goods_id" => "",             // 商品的id
						"shop_name" => "XXX商店",    // 商家名称(如果是本店搜索, 这个为空)
						"goods_value" => "16",        // 商品价格
						"goods_url" => "",          // 跳转到这个商家的某个商品 (商品定位采用hash路径表示, 页面中id元素可以用hash来进行定位, 后端只需将对应的id拼接到相应的路径中去)
						"img_url" => "",            // 商家logo地址 , 如果是种类是商家的话
					]
				]
			]
		]
	];


	return Response::json($data);
});

Route::get("/userBarCart", function(){
	$data = [
		"success" => "true"  ,                              // 成功
		"state"  => 200     ,                               // HTTP 状态码
		"errMsg"  => ""    ,                                // 如果出现错误, 错误信息就出现在这, 如果没有, 那内容为空.
		"no"      => 0      ,                               // 错误号 ,错误号就出现在这, 如果没有, 那内容为空.
		"data" => [
			"url" => [
				"shop_url" => "商店URL"   ,                         // 点击商家, 跳转到相应的商家页面
			],
			"shop_name" => "商店名称"     ,                         // "商店名称"
			"all_value" => "16"   ,                         // 商品总价格
			"goods" => [
				[
					"good_name" => "泡椒鸡胗煲仔饭",       // 名称
					"good_value" => "8",                   // 价格
					"good_count" => "1"                    // 数量
				],
				[
					"good_name" => "泡椒鸡-=仔饭",       // 名称
					"good_value" => "222",                   // 价格
					"good_count" => "12"                    // 数量
				]
			],
			"shop_state" => "0"  ,                          // 0 是可以付款买外卖, 1 是由于某种原因, 买不了外卖
			"state_msg" => ""  ,                            // 为啥买不了, 如果能买, 就位空
		]
	];

	return Response::json($data);

});


Route::get("/userBarMsg", function(){
	$data = [
		"success" => "true"  ,                              // 成功
		"state"  => 200     ,                               // HTTP 状态码
		"errMsg"  => ""    ,                                // 如果出现错误, 错误信息就出现在这, 如果没有, 那内容为空.
		"no"      => 0      ,                               // 错误号 ,错误号就出现在这, 如果没有, 那内容为空.
		"data" => []
	];

	return Response::json($data);

});
