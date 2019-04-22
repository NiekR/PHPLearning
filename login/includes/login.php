<?php

if (isset($_POST['login-submit'])) {
    require 'dbh.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || (empty($password)) ) {
        header("Location: ../index.php?error=emptyfields");
        exit();

    }
    else {
        $sql = "SELECT * FROM users WHERE username=? OR email=?;";

        // Initalize connection
        $stmt = mysqli_stmt_init($conn);

        // Check is statement prepared
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else{
            // Pass in given params from users
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);


            // Get data in assoc array
            if( $row = mysqli_fetch_assoc($result)) {
                // Compare and check psswords
                $pwdCheck = password_verify($password, $row['passw']);
                if ($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongpw");
                    exit();
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['íd'];
                    $_SESSION['userName'] = $row['username'];
                }
                else{
                    header("Location: ../index.php?error=wrongpw");
                    exit();
                }
            }
            else {
                header("Location: ../index.php?error=nouser");
                exit();
            }

        }



    }

}
else {
    header("Location: ../index.php");
    exit();
}
