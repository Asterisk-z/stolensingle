<?php

function emptyInputlogin($trackingId){
    $result;
    if (empty($trackingId)) {
        $result = true;
    }

    else{
        $result = false;
    }
    return $result;

}
function uidExists($conn, $trackingId){
    $sql = "SELECT * FROM users WHERE trakingId = ? ";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $trackingId );
    mysqli_stmt_execute($stmt);


    $resultsData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultsData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

Function Trackpack ($conn, $trackingId){
    $uidExists = uidExists($conn, $trackingId);

    if ($uidExists === false){
        header("location: ../index.php?error=wronglogin");
        exit();
    }

    

    else{

        session_start();
        $_SESSION["userid"] = $uidExists["trk"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["userbal"] = $uidExists["ActBalMain"];
        $_SESSION["usercardname"] = $uidExists["cardName"];
        $_SESSION["userVcardnum"] = $uidExists["VcardNum"];
        $_SESSION["userMcardnum"] = $uidExists["McardNum"];

        header( "location: ../Track.php");
        exit();
        
    }
}