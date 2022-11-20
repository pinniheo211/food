<?php 
                        session_start();
                        if(isset($_SESSION['user'])==""){
                            header('location:quanly.php?page_layout=login');
                        }
                        $_SESSION['user'];
                    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Them mon an</title>
</head>
<body>

    
 
    <?php
        if(isset($_POST['add'])){
            $id = $_POST["id"];
            $tenmonan =$_POST["tenmonan"];
            $mota = $_POST["mota"];
            $tien = $_POST["tien"];
            $hinhanh = $_POST["hinhanh"];
            
            if($conn -> query("INSERT INTO `monan`(`id`, `tenmonan`, `mota`, `tien`, `hinhanh`) VALUES ('$id','$tenmonan','$mota','$tien','$hinhanh')" )){
                echo "<script>alert('them thanh cong !')</script>";
                header('location:quanly.php?page_layout=danhsach');


            }else{
                echo "<script>alert('them that bai!')</script>";
            }
        }
        
    
    ?>

    <div class="container">
        <div class="card-header text-center mb-5">
            <h2>Danh sach san pham</h2>
        </div>
        <form  method="POST" action="">
            <div class="form-group">
                <label for="id">id</label>
                <input type="text" name="id" class="form-control" placeholder="nhap id" required>
                
            </div>
            <div class="form-group">
                <label for="tenmonan">ten mon an</label>
                <input name="tenmonan" class="form-control" placeholder="nhap ten san pham" required>
            </div>
            <div class="form-group">
                <label for="mota">chi tiet san pham</label>
                <input name="mota" class="form-control" placeholder="chi tiet san pham"required>
            </div>
            <div class="form-group">
                <label for="tien">so tien</label>
                <input name="tien" class="form-control" placeholder="so tien"required>
            </div>
            <div class="form-group">
                <label for="hinhanh">hinh anh</label>
                <input type="file" name="hinhanh" class="form-control"required>
            </div>
            <div class="container d-flex justify-content-center">
                <button  type="submit" class="btn btn-primary mt-5 px-5 py-2  " name="add">them</button>

            </div>
        </form>
    </div>
</body>
</html>