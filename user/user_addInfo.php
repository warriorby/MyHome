<?php
require("../include/conn.php");
require("../include/get_data.php");

$uName = $arr['uname'];
$sex = $arr['sex'];
$birth = $arr['birth'];
$pid = $arr['pid']; //01
$cid = $arr['cid']; //021
$zid = $arr['zid']; //01
$sid = $arr['sid']; //001
$gid = $arr['gid']; //01
$class_id = $arr['class_id']; //01
$realName_c = $arr['real_name_c'];
$uid_c = $arr['uid_c'];
$role = $arr['role'];


if (isset($role)) {
    $timestamp = time();
    switch ($role) {
        case 1:
            $uid_p = $arr['uid_p'];
            $realName_p = $arr['real_name_p'];
            $d2b->update("user_main", ["uname" => $uName], ["uid" => $uid_p]);
            $d2b->update("user_main", ["uname" => $uName], ["uid" => $uid_c]);
            $d2b->update("user_profile", [ "real_name" => $realName_p,"sex" => $sex, "birth" => $birth],["uid" => $uid_p]);
            $d2b->update("user_profile", [ "real_name" => $realName_c, "sex" => $sex, "birth" => $birth],["uid" => $uid_c]);
            $d2b->update("user_education",["pid"=>$pid,"zid"=>$zid,"cid"=>$cid,"sid"=>$sid,"gid"=>$gid,"class_id"=>$class_id],["uid"=>$uid_c]);
            include "../im/im-group.php";
            $d2b->update("user_im_group",["group_gid"=>$to_groupGid,"group_classid"=>$to_groupClassId],["AND"=>["uid"=>$uid_p,"role"=>$role]]);
            $d2b->update("user_im_group",["group_gid"=>$group_gid,"group_classid"=>$group_classId],["AND"=>["uid"=>$uid_c,"role"=>$role]]);
            $return_arr= ["uid_c" => $uid_c,"group_gid"=>$group_gid,"group_classid"=>$group_classId,"uid_p"=>$uid_p,"to_groupGid"=>$to_groupGid,
                "to_groupClassId"=>$to_groupClassId,"uname"=>$uName];
            break;
        case 2:
            $d2b->update("user_main", ["uname" => $uName], ["uid" => $uid_c]);
            $d2b->update("user_profile", [ "real_name" => $realName_c, "sex" => $sex, "birth" => $birth],["uid" => $uid_c]);
            $d2b->update("user_education",["pid"=>$pid,"zid"=>$zid,"cid"=>$cid,"sid"=>$sid,"gid"=>$gid,"class_id"=>$class_id],["uid"=>$uid_c]);
            include "../im/im-group.php";
            $d2b->update("user_im_group",["group_gid"=>$group_gid,"group_classid"=>$group_classId],["AND"=>["uid"=>$uid_c,"role"=>$role]]);
            $return_arr= ["uid" => $uid_c,"group_gid"=>$group_gid,"group_classid"=>$group_classId];
            break;
        default:
            echo json_encode(0);
            break;
    }
    include("../include/return_data.php");
} else {
    echo json_encode(0);
}