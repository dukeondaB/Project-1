<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<?php require '../layout/slide.php'; ?>
    <div class="container">
        <div class="content">
          <div class="title">
            <h3>SẢN PHẨM NỔI BẬT NHẤT</h3>
          </div>
          <div class="sp">
              <?php foreach($itemss as $item){
                extract($item);
              ?>
             
                <div class="sanpham">
                  <a href="../hang-hoa/chi-tiet.php?id_sanpham=<?=$id_sanpham?>">
                 
                  <img src="../../admin/assets/images/products/<?=$anh_sp?>" width="220px" height="220px" alt="">
                
                  <h4><?=$ten_sanpham?></h4>
                  <h5><?=number_format($gia, 0,'',".")?> VNĐ</h5></a>
                  
                </div>
             
              <?php
            } ?>
             
            
          </div>
        </div>
        <div class="content">
          <div class="title">
            <h3>ĐIỆN THOẠI NỔI BẬT NHẤT</h3>
          </div>
          <div class="sp">
           
              <?php foreach($itemsdt as $dt){
                extract($dt);
              ?>
              
                <div class="sanpham">
                  <a href="../hang-hoa/chi-tiet.php?id_sanpham=<?=$id_sanpham?>"><img src="../../admin/assets/images/products/<?=$anh_sp?>" width="220px" height="220px" alt="">
                  <h4><?=$ten_sanpham?></h4>
                  <h5><?=number_format($gia, 0,'',".")?> VNĐ</h5></a>
                  
                </div>
             
              <?php
            } ?>
             
           
          </div>
        </div>
        <div class="content">
          <div class="title">
            <h3 style="text-align: left;">LAPTOP NỔI BẬT NHẤT</h3>
          </div>
          <div class="sp">
           
              <?php foreach($itemslt as $lt){
                extract($lt);
              ?>
              
                <div class="sanpham">
                  <a href="../hang-hoa/chi-tiet.php?id_sanpham=<?=$id_sanpham?>"><img src="../../admin/assets/images/products/<?=$anh_sp?>" width="220px" height="220px" alt="">
                  <h4><?=$ten_sanpham?></h4>
                  <h5><?=number_format($gia, 0,'',".")?> VNĐ</h5></a>
                  
                </div>
              
              <?php
            } ?>
             
           
          </div>
        </div>
        <div class="content">
          <div class="title">
            <h3 style="text-align: left;">PHỤ KIỆN NỔI BẬT NHẤT</h3>
          </div>
          <div class="sp">
           
              <?php foreach($itemspk as $pk){
                extract($pk);
              ?>
             
                <div class="sanpham">
                  <a href="../hang-hoa/chi-tiet.php?id_sanpham=<?=$id_sanpham?>"><img src="../../admin/assets/images/products/<?=$anh_sp?>" width="220px" height="220px" alt="">
                  <h4><?=$ten_sanpham?></h4>
                  <h5><?=number_format($gia, 0,'',".")?> VNĐ</h5></a>
                  
                </div>
             
              <?php
            } ?>
             
            
            </div>
          </div>
        </div>
      </div>
      <style>
          body{
              color: black;
          }
      </style>
</body>
</html>