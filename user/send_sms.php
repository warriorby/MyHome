<?php
require "../include/SendTemplateSMS.php";
require "../include/get_data.php";

$phone = $arr['phone'];
$auth_code = rand(1000, 9999);
if ($phone != null) {
    sendTemplateSMS($phone, array($auth_code), 1);
//sendTemplateSMS("15800651149",array('7863','4'),1);
    $return_arr = ["phone" => $phone, "auth_code" => (string)$auth_code];
    include "../include/return_data.php";
} else {
    echo json_encode(0);
}