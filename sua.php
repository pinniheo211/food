

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
        $id_up = $_GET['id'];
        $sql_up ="SELECT * FROM `monan` where `id` = $id_up";
        $query_up = mysqli_query($conn,$sql_up);
        $row_up = mysqli_fetch_assoc($query_up);
        if(isset($_POST['add'])){
            $id = $_POST["id"];
            $tenmonan =$_POST["tenmonan"];
            $mota = $_POST["mota"];
            $tien = $_POST["tien"];
            if($FILES['hinhanh']['name']==''){
                $hinhanh = $row_up['hinhanh'];
            }else{

                $hinhanh = $_FILES['hinhanh']['name'];
                $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
                move_uploaded_file($hinhanh_tmp,'shopping_img/.$hinhanh');
            }
            $hinhanh =$_POST['hinhanh'];

            // $sql = "UPDATE  `monan` SET `id` = $id , `tenmonan` = $tenmonan, `mota` = $mota, `tien` = $tien, `hinhanh` = $hinhanh";
            // $query = mysqli_query($conn,$sql);
            // header('location:quanly.php?page_layout=danhsach');
             
            if($conn -> query("UPDATE `monan` SET `tenmonan` = '$tenmonan', `mota` = '$mota' , `tien` = '$tien' , `hinhanh` = '$hinhanh' WHERE `monan`.`id` = $id_up" )){
                echo "<script>alert('them thanh cong !')</script>";
                header('location:quanly.php?page_layout=danhsach');


            }else{
                echo "<script>alert('sua that bai!')</script>";
            }
        }
        
    
    ?>

    <div class="container">

        <form method="POST" action="">
            <div class="form-group">
                <label for="id">id</label>
                <input type="text" name="id" class="form-control" placeholder="nhap id" required value="<?php echo $row_up['id'];?>">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="tenmonan">ten mon an</label>
                <input name="tenmonan" class="form-control" placeholder="nhap ten san pham" required value="<?php echo $row_up['tenmonan'];?>">
            </div>
            <div class="form-group">
                <label for="mota">chi tiet san pham</label>
                <input name="mota" class="form-control" placeholder="chi tiet san pham"required value="<?php echo $row_up['mota'];?>">
            </div>
            <div class="form-group">
                <label for="tien">so tien</label>
                <input name="tien" class="form-control" placeholder="so tien"required value="<?php echo $row_up['tien'];?>">
            </div>
            <div class="form-group">
                <label for="hinhanh">hinh anh</label>
                <input type="file" name="hinhanh" class="form-control" required >
            </div>
            <button  type="submit" class="btn btn-primary" name="add">sua</button>
        </form>
    </div>
</body>
</html>