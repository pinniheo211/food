<?php
session_start();
        if(isset($_POST['dangky'])){
            
            $name =$_POST["name"];
            $email=$_POST['email'];
            $pass = $_POST["pass"];
            $repass = $_POST["repass"];
            $user = $_POST["name_user"];
            if($pass != $repass){
                $_SESSION['thongbao'] = "nhap sai mat khau nhap lai";
                header("Location:quanly.php?page_layout=dangky");
                die();
            }

                $sql = "SELECT * FROM `tbl_user` WHERE `name`='$name'";
                $old = mysqli_query($conn,$sql);

            
            
            if(mysqli_num_rows($old)>0){
                $_SESSION['thongbao'] = "ten tai khoan da ton tai";
                header("Location:quanly.php?page_layout=dangky");
                die();
            }

            $sql = "INSERT INTO `tbl_user`(`name`,`user`, `email`, `pass`) VALUES ('$name','$user','$email','$pass')   ";
            mysqli_query($conn,$sql);
            header("location:quanly.php?page_layout=login");
        }
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>dang ky tai khoan</title>
</head>
<body>
<body>
    <div class="main">
        <h2>sign in </h2>
        <?php 
        if(isset($_SESSION['thongbao'])){
            echo $_SESSION['thongbao'];
        };
        
        
        ?>
        <div class="form-login">

            <form action="" method="POST">
                <label for="name">Ten nguoi dung</label>
                <input type="text" name="name" id="" required>
                <label for="name_user">Ten dang nhap</label>
                <input type="text" name="name_user" id="" required>
                <label for="name">email</label>
                <input type="text" name="email" id="" required>
                <label for="pass">Mat khau</label>
                <input type="password" name ="pass" required>
                <label for="repass">nhap lai mat khau</label>
                <input type="password" name ="repass" required>
                <input type="submit" name="dangky">
            </form>
        </div>
    </div>
</body>
</body>
</html>