<?php

ini_set('display_errors', false);
header('Content-Type: text/html; charset=utf-8');
require_once(dirname(__FILE__) . '/lib/TalentLMS.php');

try {
    TalentLMS::setApiKey('3SdctA4bNgERgCL9CPS2qk2dfJ9W9i');
    TalentLMS::setDomain('viperforce.talentlms.com');

    $login = TalentLMS_User::signup(array(
        'first_name' => $_POST['r_name'],
        'last_name' => $_POST['r_sname'],
        'email' => $_POST['r_email'],
        'login' => $_POST['r_uname'],
        'password' => $_POST['r_psw']));

    TalentLMS_User::setStatus(array('user_id' => $login['id'], 'status' => 'active'));

    TalentLMS_User::login(array('login' => $_POST['r_uname'], 'password' => $_POST['r_psw'], 'logout_redirect' => 'https://www.mrr.lv'));

    header("Location: ../course_cat/");

    session_start();
    $_SESSION['login'] =$_POST['r_uname'];
    $_SESSION['psw'] = $_POST['r_psw'];
    $_SESSION['uid'] = $login['id'];

} catch (Exception $e) {
    echo $e->getMessage();
}

exit();
?>
