<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['userid']) && isset($_POST['username'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $userid = validate($_POST['userid']);

    $username = validate($_POST['username']);

    if (empty($userid)) {

        header("Location: index1.php?error=User ID is required");

        exit();

    }else if(empty($username)){

        header("Location: index1.php?error=User Name is required");

        exit();

    }else{

        $sql = "SELECT * FROM user WHERE userid='$userid' AND username='$username'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['userid'] === $userid && $row['username'] === $username) {

                echo "Logged in!";

                $_SESSION['userid'] = $row['userid'];

                $_SESSION['username'] = $row['username'];

                $_SESSION['id'] = $row['id'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: index1.php?error=Incorect User name or User ID");

                exit();

            }

        }else{

            header("Location: index1.php?error=Incorect User name or User ID");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}