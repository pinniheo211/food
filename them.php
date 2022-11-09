

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

    require_once 'config/conn.php'?>
    <?php
        if(isset($_POST['add'])){
            $id = $_POST["id"];
            $tenmonan =$_POST["tenmonan"];
            $mota = $_POST["mota"];
            $tien = $_POST["tien"];
            $hinhanh = $_POST["hinhanh"];
            
            if($conn -> query("INSERT INTO `monan`(`id`, `tenmonan`, `mota`, `tien`, `hinhanh`) VALUES ('$id','$tenmonan','$mota','$tien','$hinhanh')" )){
                echo "<script>alert('them thanh cong !')</script>";


            }else{
                echo "<script>alert('them that bai!')</script>";
            }
        }
        $conn -> close();
    
    ?>

    <div class="container">

        <form method="POST" action="">
            <div class="form-group">
                <label for="id">id</label>
                <input type="text" name="id" class="form-control" placeholder="nhap id">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="tenmonan">ten mon an</label>
                <input name="tenmonan" class="form-control" placeholder="nhap ten san pham">
            </div>
            <div class="form-group">
                <label for="mota">chi tiet san pham</label>
                <input name="mota" class="form-control" placeholder="chi tiet san pham">
            </div>
            <div class="form-group">
                <label for="tien">so tien</label>
                <input name="tien" class="form-control" placeholder="so tien">
            </div>
            <div class="form-group">
                <label for="hinhanh">hinh anh</label>
                <input name="hinhanh" class="form-control" placeholder="hinh anh san pham">
            </div>
            <button type="submit" class="btn btn-primary" name="add">Them</button>
        </form>
    </div>
</body>
</html>