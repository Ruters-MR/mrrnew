<?php

session_start();
$username = $_SESSION['login'];
$pass = $_SESSION['psw'];
$uid = $_SESSION['uid'];
$btn_id = $_POST['btn_id'];

$userid_arr = array();

ini_set('display_errors', false);
header('Content-Type: text/html; charset=utf-8');
require_once(dirname(__FILE__) . '/lib/TalentLMS.php');
try {
    TalentLMS::setApiKey('3SdctA4bNgERgCL9CPS2qk2dfJ9W9i');
    TalentLMS::setDomain('viperforce.talentlms.com');

    $course = TalentLMS_Course::retrieve($btn_id);

    $user_array = $course['users'];
    foreach($user_array as $item) {
        $userid_arr[] = $item['id'];
    }

    if (!in_array($uid, $userid_arr)){
        TalentLMS_Course::addUser(array('user_id' => $uid, 'course_id' => $btn_id, 'role' => 'learner'));
    }

    $to_course = TalentLMS_Course::gotoCourse(array(
        'user_id' => $uid,
        'course_id' => $btn_id,
        'logout_redirect' => 'https://www.mrr.lv'));

    $goto = $to_course['goto_url'];
    header("Location: $goto");
    exit();

} catch (Exception $e) {
    echo $e->getMessage();
}
exit();
?>


