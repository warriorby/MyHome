<?php
require("../include/conn.php");
require("../include/get_data.php");
require("../IM/im_init.php");

$cid = $arr['cid'];
$zid = $arr["zid"];
$sid = $arr['sid'];
$gid = $arr['gid'];
$class_id = $arr['class_id'];
$uid_c = $arr['uid_c'];
$school_type = $arr['school_type'];

if (isset($uid_c) && isset($sid) && isset($gid) && isset($class_id)) {
$local_group_id = $cid.$zid.$school_type.$sid."1".$gid.$class_id.$uid_c;
$options = [["groupname" => "同级同学群", "desc" => "同级同学", "public" => true, "owner" => $uid_c],
    ["groupname" => "同班同学群", "desc" => "同班同学", "public" => true, "owner" => $uid_c]
];
    $datas = $easeMob->createGroups($options);
    $group_gid = $datas['data']['groupid'];
    $group_class_id = $datas['data'][''];
    $d2b->update("im_group", ["group_id" => $group_gid], ["sid" => $sid], ["gid" => $gid], ["class_id" => "00"]);
    $d2b->update("im_group", ["group_id" => $group_class_id], ["sid" => $sid], ["gid" => $gid], ["class_id" => $class_id]);
    $d2b->update("user_im_group", ["group_gid" => $group_gid, "group_classid" => $group_class_id], ["uid" => $uid_c]);

    $return_arr = array("uid_c" => $uid_c, "group_gid" => $group_gid, "group_classid" => $group_class_id);
    include("../include/return_data.php");
} else {
    echo json_encode(0);
}

