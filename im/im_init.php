<?php
//require"testeasemob.php";
require"Easemob.class.php";

$client_id = "YXA6RuQo8H6sEeStiMnD1orqvQ";
$client_secret = "YXA6LmyUOP0uC1UB3OkEtpoyWTbS3VQ";
$org_name = "ecloudz";
$app_name = "elcoudz";

$easeMob = new Easemob([
    'client_id'=>$client_id,
    'client_secret'=>$client_secret,
    'org_name'=>$org_name,
    'app_name'=>$app_name
]);
/*$options = [["username"=>"d3","password"=>"d"],["username"=>"c3","password"=>"c"]];
$data = $easeMob->accreditRegister($options);
var_dump($data);*/

/*$data = registerToken("wan","123456");
var_dump($data);*/

/*$option = ["groupname" => "同级同学群", "desc" => "同级同学", "public" =>true,"approval"=>true, "owner" => "445"];
$datas = $easeMob->createGroups($option);
var_dump($datas);*/

