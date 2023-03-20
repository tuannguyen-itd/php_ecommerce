<?php 
    require_once('../classes/user.php');

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User();
        $result = $user->login($email, $password);
        if($result == 'Đăng nhập thành công'){
            header('Location: ../views/admin/index.php');
            exit();
        }
    }
?>