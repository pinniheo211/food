<?php

        if(isset($_POST['dangnhap'])){
            $user = $_POST['name'];
            $pass=$_POST['pass'];
            $sql_acc ="SELECT * FROM `tbl_user` WHERE `user`='$user' AND `pass`='$pass';";
            $query_acc = mysqli_query($conn,$sql_acc);
            $row_acc = mysqli_fetch_assoc($query_acc);
            if(mysqli_num_rows($query_acc)>0){
                if($row_acc['role']==1){
                    header('location:quanly.php?page_layout=danhsach');
                }else if($row_acc['role']==0){
                    header('location:quanly.php?page_layout=index');
                }
            }else{
                echo "<script>alert('ban nhap sai tai khoan hoac mat khau')</script>";
            }
            // if($conn){

            //     if ($row_acc['role']==1){
            //         header('location:quanly.php?page_layout=index');
                    


            // }else if($row_acc['role']==0){
            //     header('location:quanly.php?page_layout=danhsach');
            //     }
            //     echo "<script>alert(' dang nhap thanh cong')</script>";
            // }else{
            //     echo "tai khoan hoac mat khau khong dung";
            // }
        }
        if(isset($_POST['dangky'])){
            header("Location:quanly.php?page_layout=dangky");
        }
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Login-admin</title>
</head>
<body>
    <div class="main">
        <div class="form-log">
            <h2>Login </h2>
            <div class="form-login">
    
                <form action="" method="POST">
                    <label for="name">Ten dang nhap</label>
                    <input type="text" name="name" id="">
                    <label for="pass">Mat khau</label>
                    <input type="password" name ="pass">
                    <input type="submit" name="dangnhap" value="dang nhap">
                    <input type="submit" name="dangky" value="dang ky">
                </form>
            </div>

        </div>
    </div>
</body>
</html>