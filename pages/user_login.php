<?php
include '../database/connection.php';

if($db){
    echo "connected";
}else{
    echo "not connected";
}

$user =$db->prepare("select * from users where user_email = :user and user_password = :password");
$user->bindParam(':user', $_POST['email'], PDO::PARAM_STR);
$user->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
$user->execute();
echo 10;

if($user->rowCount()){

    $thisUser =$user->fetch();
    $priviledgeLevel =$thisUser['user_role'];
    echo $priviledgeLevel;

    switch($priviledgeLevel){
        case 1:

            echo '<script>
                alert("welcome admin");                
                </script>';
            header("Location: ../admin/index.php");
        exit;

        case 2:

            echo '<script>
                alert("welcome landlord");                
                </script>';
            header("Location: ../landlord/index.php");
        exit;

        case 3:
            echo '<script>
                alert("welcome renter");                
                </script>';
            header("Location: ../renter/index.php");
        exit;
    }

}else{
    echo '<script>
        alert("welcome member");                
    </script>';
    header("Location: ../");
}

