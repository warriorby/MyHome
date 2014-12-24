<?php
require("../include/conn.php");
require("../include/get_data.php");

$subject = $arr['subject'];
$uid = $arr['uid'];
if (isset($subject) && isset($uid)) {
    $timestamp = time();
    $sub_id = $d2b->insert("score_profile", ["subject" => $subject, "uid" => $uid, "status" => 1, "updated" => $timestamp]);
    $return_arr = ["sub_id" => $sub_id, "uid" => $uid, "subject" => $subject];
    include("../include/return_data.php");
} else {
    echo json_encode(0);
}
