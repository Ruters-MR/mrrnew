<?php

ini_set('display_errors', false);
header('Content-Type: text/html; charset=utf-8');
require_once(dirname(__FILE__) . '/lib/TalentLMS.php');

try {
    TalentLMS::setApiKey('3SdctA4bNgERgCL9CPS2qk2dfJ9W9i');
    TalentLMS::setDomain('viperforce.talentlms.com');

//    if(isset($_POST['uname']) && isset($_POST['psw']))
//    {
    $login = TalentLMS_User::login(array(
        'login' => $_POST['uname'],
        'password' => $_POST['psw']));

    session_start();
    $_SESSION['login'] = $_POST['uname'];
    $_SESSION['psw'] = $_POST['psw'];
    $_SESSION['uid'] = $login['user_id'];

    $login_url = $login['login_key'];
    header("Location: ../course_cat/");
    exit();
//}
} catch (Exception $e) {
    echo $e->getMessage();
}

exit();
?>

