<?php

require_once 'config/conn.php'


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
        height:70px;
    }
    .item{

        padding:10px 30px;
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
                        <li><a href="quanly.php?page_layout=index">Home</a></li>
                        <li><a href="">Home</a></li>
                        <li><a href="">Home</a></li>
                        <li><a href="">Home</a></li>
                        <li><a href="">Home</a></li>
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
                        <img style="height:240px;width:100%; margin-bottom: 30px;" src="shopping_img/<?php echo $row['hinhanh'] ?>" alt="">
                        <h3><?php echo $row['tenmonan']; ?></h3>
                        <p ><?php echo $row['mota']; ?></p>
                        <p><?php echo $row ['tien']; ?> k</p>
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
                <P>Lorem ipsum dolor amet 
                    coadipisicing elit sed do <br>
                     eiusmod tempor incididunt <br>
                     ut labore et dolore magna aliqua. <br>
                     Ut enim ad minim veniam quis nostrud <br>
                      exercitation ullamco laboris nisi ut.</P>
                
            </div>
        
        </div>
        <div class="row">
            <div class="footer-title"><h2>CONTRACT INFO</h2></div>
           <div class="text">
            <i class="fa-solid fa-location-dot">  LOCATION</i>
            <p>205 Olazu Familia, Herba
                Street Front USA</p>
            <i class="fa-solid fa-envelope">  EMAIL US</i>
            <p>support@gmail.com</p>
            <i class="fa-solid fa-headphones">  CALL US</i>
            <p>002- 01008431112</p>
            
           </div>
        </div>
        <div class="row">
            <div class="footer-title"><h2 class="hh2">OUR GALLERY</h2></div>
           
          <div class="text">
            <div class="icon">

                <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/05/instagram1.jpg" alt="">
                    <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/05/instagram2.jpg" alt="">
                    <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/05/instagram3.jpg" alt=""><br>
                    <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/05/instagram4.jpg" alt="">
                    <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/05/instagram5.jpg" alt="">
                    <img src="https://shtheme.info/demosd/orgafe/wp-content/uploads/2019/05/instagram6.jpg" alt="">
            
       </div>
          </div>
            
        </div>
        
    </div>
    
</body>
</html>