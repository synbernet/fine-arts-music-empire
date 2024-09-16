<?php
    $email = $_POST["email"];
    $password = $_POST["password"];
    $login = $_POST["login"];
    

    if (isset($email)) {
        if (empty($email)) {
            echo "Complete the username";
        }elseif(empty($password)){
            echo "Password field can not be left empty";
        }else{
            echo "Welcome {$email}";
        }
    }

    
?>