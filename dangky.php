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

                $sql = "SELECT * FROM `tbl_user` WHERE `user`='$user'";
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
    <style>
        .form-login input[type="text"],
        .form-login input[type="password"]{
            display:block;
            margin-left:40px;
            margin-bottom:10px;
        }
        .btn{
            margin-left: calc(50% - 44px );

        }
    </style>
</head>
<body>
<body>
    <div class="container d-flex justify-content-center pt-5">
        <div  class="form-log p-5 rounded" style="width:400px;background-color:aquamarine;">
            <h2 class="text-center">dangky</h2>
            <?php 
            if(isset($_SESSION['thongbao'])){
                echo $_SESSION['thongbao'];
            };
            
            
            ?>
            <div class="form-login">
    
                <form action="" method="POST">
                    <label class="form-label mb-3" for="name">Ten nguoi dung</label>
                    <input type="text" name="name" id="" required>
                    <label class="form-label mb-3" for="name_user">Ten dang nhap</label>
                    <input type="text" name="name_user" id="" required>
                    <label class="form-label mb-3" for="name">email</label>
                    <input type="text" name="email" id="" required>
                    <label class="form-label mb-3" for="pass">Mat khau</label>
                    <input type="password" name ="pass" required>
                    <label class="form-label mb-3" for="repass">nhap lai mat khau</label>
                    <input type="password" name ="repass" required>
                    <input class="btn btn-primary mt-5 mt-x-auto" type="submit" name="dangky">
                </form>
            </div>
        </div>
    </div>
</body>
</body>
</html>