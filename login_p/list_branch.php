<?php

ini_set('display_errors', false);
header('Content-Type: text/html; charset=utf-8');
require_once(dirname(__FILE__) . '/lib/TalentLMS.php');
try {
    TalentLMS::setApiKey('3SdctA4bNgERgCL9CPS2qk2dfJ9W9i');
    TalentLMS::setDomain('viperforce.talentlms.com');
    $users = TalentLMS_User::all();
    foreach ($users as $user) {
        if ($user['status'] != 'active')
            TalentLMS_User::setStatus(array('user_id' => $user['id'],
                'status' => 'active'));
        }
    foreach ($user as $usr) {
        echo $usr . "<br>";
    }
}

catch (Exception $e){
        echo $e->getMessage();
}

?>

