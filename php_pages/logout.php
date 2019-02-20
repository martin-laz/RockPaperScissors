<?php
    include_once("../connectDB.php");
    $_db=null;
    session_destroy();
    $output = array("msg"=>"you are logged out", "loggedin"=>"false");
    echo json_encode($output);
?>
