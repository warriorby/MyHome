<?php
//require"testeasemob.php";
require"Easemob.class.php";

$client_id = "YXA6ro4MIIECEeSbZZOLho5RoA";
$client_secret = "YXA6TPBdYpn50LBF8vwR9frNnDltdOQ";
$org_name = "ecloudz";
$app_name = "elcoudz";
$app_name2 = "myhome";

$easeMob = new Easemob([
    'client_id'=>$client_id,
    'client_secret'=>$client_secret,
    'org_name'=>$org_name,
    'app_name'=>$app_name2
]);
var_dump($easeMob);
$options = [["username"=>"s","password"=>"11"],["username"=>"c","password"=>"11"]];
$data = $easeMob->accreditRegister($options);
var_dump($data);

/*$data = $easeMob->getToken();
var_dump($data);*/
/*$data = registerToken("wan","123456");
var_dump($data);*/

/*$option = ["groupname" => "同级同学群", "desc" => "同级同学", "public" =>true, "owner" => "admin"];
$datas = $easeMob->createGroups($option);
var_dump($datas);*/
