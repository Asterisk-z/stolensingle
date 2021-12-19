<?php


if(isset($_POST["submit"])){

    $trackingId = $_POST["trk"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputlogin($trackingId) !== false){
        header("location: ../index.php?error=Null");
        exit();

    }


      
    Trackpack ($conn, $trackingId);

}
else{
    header("location: ../index.php");
}