<?php

require_once 'config/conn.php';

                        session_start();
                        if(isset($_SESSION['user'])==""){
                            header('location:quanly.php?page_layout=login');
                        }
                        $_SESSION['user'];
                        // $_admin = header('location:quanly.php?page_layout=danhsach');
                        // if($_SESSION['role']==1){
                        //     $_admin = true;
                        // }
                        // else{
                        //     $_admin = false;
                        // }
                        // $_SESSION['role'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="shopping.css">
<style>
    .item p{
        height:11px;
    }
    .item{

        padding:10px 30px;
    }

    .list-items{
        margin-top:40px;
    }
    .wrapper{
        overflow-y: scroll;
        scroll-behavior: smooth;
        scroll-snap-type: y mandatory;
    }
    #footer{
        scroll-snap-align: center;
        height:100%;
    }

    .row{
        width:61%;
    }

</style>
</head>
<body>
    <div class="wrapper">
        <div class="menu-bar">
            <div class="menu-bar-list">
                <div class="icon">
                    <img src="./img/logo.png" alt="">
                </div>
                <div class="menu-list">
                    <ul>
                        <li><a href="quanly.php?page_layout=index">HOME</a></li>
                        <li><a href="#footer">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <div class="title">
                <h1>Shop Page</h1>
                <p><a href="">Home</a> <span>SHOP PAGE</span> </p>
    
            </div>
           
            
            
        </div>
        
        <div class="items-show">
            <div class="showing">
                <h1>CÁC MÓN ĂN</h1>
            </div>
            <div class="list-items">
            <?php
                
                $i =1;
                while($row = mysqli_fetch_assoc($query)){?>

                    <div style="width:300px;" class="item">
                        <img style="height:198px;width:100%; margin-bottom: 30px;" src="shopping_img/<?php echo $row['hinhanh'] ?>" alt="">
                        <h3><?php echo $row['tenmonan']; ?></h3>
                        <p ><?php echo $row['mota']; ?></p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <p><?php echo $row ['tien']; ?> VND</p>
                        <a  class="btn btn-warning my-3 px-4"  href="">Mua</a>
                    </div>
                    <!-- <div class="item">
                        <img style="width:100%;" src="" alt="">
                        <h3></h3>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <p> k</p>
                    </div> -->
                    <!-- <div class="item">
                        <img style="width:100%;" src="" alt="">
                        <h3></h3>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <p> k</p>
                    </div> -->
                    <!-- <div class="item">
                        <img style="width:100%;" src="" alt="">
                        <h3></h3>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <p> k</p>
                    </div> -->
                    <!-- <div class="item">
                        <img style="width:100%;" src="" alt="">
                        <h3></h3>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <p> k</p>
                    </div> -->
                    <!-- <div class="item">
                        <img style="width:100%;" src="" alt="">
                        <h3></h3>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <p> k</p>
                    </div> -->
                    <!-- <div class="item">
                        <img style="width:100%;" src="" alt="">
                        <h3></h3>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <p> k</p>
                    </div> -->
                    <!-- <div class="item">
                        <img style="width:100%;" src="" alt="">
                        <h3></h3>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <p> k</p>
                    </div> -->
                    <?php  $i++; ?>
            <?php }?>
                
            </div>
            
        </div>

    </div>
    <div id="footer">
        <div class="row">
            <div class="footer-title">
                <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/04/logo.png" alt="">
            </div>
            <div class="text">
                <P>If you are searching for great tasting, healthy meal plans in Saigon, we have a selection of dishes that will keep you energetic during the week. Our extensive menu is good for about 45 days without repeating a combination.
                
            </div>
        
        </div>
        <div class="row">
            <div class="footer-title"><h2>CONTRACT INFO</h2></div>
           <div class="text">
            <i class="fa-solid fa-location-dot">  LOCATION</i>
            <p>16/5 Mai Xuân Thương , Phường 11 , Quận Bình Thạnh , TP Hồ Chí Minh</p>
            <i class="fa-solid fa-envelope">  EMAIL US</i>
            <p>support@gmail.com</p>
            <i class="fa-solid fa-headphones">  CALL US</i>
            <p>0901328277</p>
            
           </div>
        </div>
        <div class="row">
            <div class="footer-title"><h2 class="hh2">OUR GALLERY</h2></div>
           
            <div class="text">
                <div class="icon">
                    <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/05/instagram1.jpg" alt="">
                    <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/05/instagram2.jpg" alt="">
                    <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/05/instagram3.jpg" alt="">
                    <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/05/instagram4.jpg" alt="">
                    <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/05/instagram5.jpg" alt="">
                    <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/05/instagram6.jpg" alt="">
            
                </div>
            </div>
            
        </div>
        
    </div>
    
</body>
</html>

