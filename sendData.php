<?php 
    date_default_timezone_set("Africa/Cairo");
    $filePath = "chatlog.txt";

    $msg = $_POST['nm']."#".$_POST['m']."#". date('h:i A')."\n";

    file_put_contents($filePath,$msg,FILE_APPEND);
?>