<?php


ini_set('display_errors', false);
header('Content-Type: text/html; charset=utf-8');
require_once(dirname(__FILE__) . '/lib/TalentLMS.php');
try {
    TalentLMS::setApiKey('3SdctA4bNgERgCL9CPS2qk2dfJ9W9i');
    TalentLMS::setDomain('viperforce.talentlms.com');

    $course = TalentLMS_Course::retrieve(126);

    TalentLMS_Course::removeUser(array('user_id' => '1', 'course_id' => '126'));

    print_r($course);
}

catch (Exception $e){
    echo $e->getMessage();
}

?>
