<?php
    require_once('../classes/user.php');

    if(isset($_POST['signup'])){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $address = $_POST['address'];

        $user = new User();
        $result = $user->register($fullname, $email, $phone, $password, $address);
        if($result == 'Register success.'){
            header('Location: ../views/auth/index.php');
            exit();
        }
    }
?>