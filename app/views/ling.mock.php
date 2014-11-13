<?php
/**
 * Created by PhpStorm.
 * User: Liuchenling
 * Date: 11/12/14
 * Time: 22:36
 */
header("Content-type: application/json");
switch($_GET['s']){
    case "userBarSearch":
        $json = [
            "success" => "true",
            "state" => 200,
            "errMsg" => "",
            "no" => "",
            "data" => [
                0 => [
                    "goods_category" => "美食",
                     "shop_result" => [
                        [
                            "goods_name" => "小包才肉汤",
                            "goods_id" => "123",
                            "shop_name" => "XXX商店",
                            "goods_value" => "16",
                            "goods_url" => "http://baidu.com"
                        ]
                    ]
                ]
            ]
        ];
        echo json_encode($json);
}