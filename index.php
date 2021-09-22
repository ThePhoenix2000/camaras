<?php


include_once ("acceso/usdModena.php");
$usd =json_decode($resUSD, true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <title iconv="">WorldCam
    </title>
    <link rel="shortcut icon" href="./img/icono.ico">


    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Buscador -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<?php include_once ("./header/header.php");
 ?>
<!--Lo mas importante que aparecera en cuando se haga pequeña la pagina-->

<!--Empieza el producto en promocion-->
<!-- Start Promo section -->

<!-- popular section -->
<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">Ofertas Especiales</a></li>



                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content">
                            <!-- Start men popular category -->
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                    <!-- start single product item -->

                                    <?php 
                
                
$token ="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijg0M2FlMDUzYjI5MGU2MzdlNzg5MTEyN2UyYmJlMmU3MGE0NTAwNmMzMzI1NTcyNDNkZDlkNWY2ODk4MjZlMDJkMjE5Y2EyMzI2YmRlMDczIn0.eyJhdWQiOiIyIiwianRpIjoiODQzYWUwNTNiMjkwZTYzN2U3ODkxMTI3ZTJiYmUyZTcwYTQ1MDA2YzMzMjU1NzI0M2RkOWQ1ZjY4OTgyNmUwMmQyMTljYTIzMjZiZGUwNzMiLCJpYXQiOjE2MjY4MTUxMjgsIm5iZiI6MTYyNjgxNTEyOCwiZXhwIjoxNjU4MzUxMTI4LCJzdWIiOiI1NDU3Iiwic2NvcGVzIjpbIm1vYmlsZSJdfQ.GWyWF8E0c9pKBtJ6FNlsb4nyxjiQJpsPvRYl-uQC9trzc6vvPYwl7J03uJJ3ojVZRoBRpVWVtPtShPO0UQ6dFenGyhzpNxGhxCCYf22W_gOoOZZl9aARwjGuhEuMT5EH2b8g8LRrKHq7gRJIiPW2EKX_7-iGD3CbLcYbVShkQTvBrbuR3V05tRyI7mtGjVOlDPT1yTyqLdPrn1kE02vTgjIPKop7JIK60_n8NZoWR0NRQdowyQI00k_KeJmPuW7J-8sqrs8BULcU-bLr4qGHNUKk2QbaCyNUXrj1sdS7Z4r_hujnOxFmzxPk9ulXf1dOAxRB4fAn4cQowt_P59ysviFlgk5o114JTd5VYeLDGy6B3DS_vFY-m_jhcRLQrUO2-ROFEI4bfCz03OEa_Gm_67QeZUVAg0Hb_SrlVwqJkbL355yiRsZE1n1ssleu1OLVe3IZAqbnHoyjhea57vp0NxgB0vQRibvjlaHCilzyhtjdE-64nPiVseHPvPiRYggzLH7YgF-OIwlLL5ksod27SQQ9mD8uVN9n6TulyAlHghMWdf7gWCsHjp_fus05Khz7jx5Nef_BfYon08M1PcI 310XaQS7NSWyZYQGtrV75zkGU9P-Uuzc9R1gs-p73A4CarqSGi1n8TLVy0Eqp8KdYb6S6ijNmCYLQQJ35RJ-OEms";
$url = "http://api.tvc.mx/products?page=30&withMedia&withInventory=simple&withPrice";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: Bearer $token",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);


                
                $item = json_decode($resp);
                $item_aumento = $item->data;

      # code...
 
                for ($i=0; $i <count($item_aumento); $i++) { 
                    $id = $item_aumento[$i]->tvc_id;
                    $res_id =$id;
                    $res_brand =$item_aumento[$i]->brand;
                    $marca=$res_brand;
                
                   
                  ?>
                                    <?php $res_dis =$item_aumento[$i]->total_inventories;
                    if ($res_dis!=Null) {
                  
                  ?>
                                    <li>
                                        <figure class="principal">
                                            <a class="aa-product-img-principal" href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>">
                                                <?php   $res_img =$item_aumento[$i]->media->main_image;
                                 $res_img_url = "http://api.tvc.mx$res_img";
                                 $not_img="img/notavailable.jpg";
                                 if ($res_img!="") {
                                     # code...
                                     echo "<img src='$res_img_url' width='260' height='260'/> &nbsp;&nbsp;&nbsp;&nbsp;";

           
                                 }else{
                                    echo "<img src='$not_img' width='260' height='260'/> &nbsp;&nbsp;&nbsp;&nbsp;";

                                 }?>
                                                <!--<img src="img/man/polo-shirt-2.png" alt="polo shirt img">-->
                                            </a> <?php 
                     
                     
                     $res_brand =$item_aumento[$i]->brand;
                           
                    $marca=$res_brand;
                   
              
                          $res_categoria =$item_aumento[$i]->category;
         
                          $categoria =$res_categoria;
                         
                    ?>

                                            <a class="aa-add-card-btn" href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>"><span class="fa fa-shopping-cart"></span>Comprar</a>
                                            <figcaption>
                                                <h4 class="aa-product-marca"><a href="./product-model.php?brand=<?php
                                             echo $marca;
                             ?>"><?php $res_brand =$item_aumento[$i]->brand;
                               $marca=$res_brand;
                              echo "$marca"; ?> </a></h4>
                                                <h4 class="aa-product-title"><a href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>"><?php $res_name =$item_aumento[$i]->name;
                               $nombre=$res_name;
                              echo "$nombre"; ?> </a></h4>
                                                <span class="aa-product-price"><?php 
                      
                      $res_price =$item_aumento[$i]->list_price;
                     $total = $res_price * $usd;
                        echo "MXN $$total";?></span><span class="aa-product-price"><del></del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                    class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                data-toggle="modal" price="<?php echo $total; ?>"
                                                categoria="<?php echo $categoria; ?>" almacen="<?php echo $res_dis; ?>"
                                                img="<?php echo $res_img_url; ?>" id="<?php echo $id;?>"
                                                name="<?php echo $nombre; ?>" data-target="#quick-view-modal"><span
                                                    class="fa fa-search"></span></a>
                                        </div>

                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale-principal" href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>">Stock: <?php 
                               $res_dis =$item_aumento[$i]->total_inventories;
                               if ($res_dis==NULL) {
                                 # code...
                                 echo "No disponible";
                               }else 
                                 echo "$res_dis";
                               
                              ?></span>
                                    </li><?php }?>
                                    <?php }  ?>
                                    <!-- start single product item -->

                                    <!--rt single product item -->

                                    <!-- start single product item -->

                                    <!-- start single product item -->

                                    <!-- start single product item -->



                                </ul>
                                <a class="aa-browse-btn" href="./product.php?pagina=<?php echo 1;?>">Mas producto <span
                                        class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / popular product category -->

                            <!-- start featured product category -->
                            <!-- Vistas de cada producto -->



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Promo section -->

<!-- BREADCRUMB -->


<!-- Products section -->
<!-- popular section -->
<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">Precios Especiales</a></li>

                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content">
                            <!-- Start men popular category -->
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                    <!-- start single product item -->

                                    <?php 
                
                  
                
$token ="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijg0M2FlMDUzYjI5MGU2MzdlNzg5MTEyN2UyYmJlMmU3MGE0NTAwNmMzMzI1NTcyNDNkZDlkNWY2ODk4MjZlMDJkMjE5Y2EyMzI2YmRlMDczIn0.eyJhdWQiOiIyIiwianRpIjoiODQzYWUwNTNiMjkwZTYzN2U3ODkxMTI3ZTJiYmUyZTcwYTQ1MDA2YzMzMjU1NzI0M2RkOWQ1ZjY4OTgyNmUwMmQyMTljYTIzMjZiZGUwNzMiLCJpYXQiOjE2MjY4MTUxMjgsIm5iZiI6MTYyNjgxNTEyOCwiZXhwIjoxNjU4MzUxMTI4LCJzdWIiOiI1NDU3Iiwic2NvcGVzIjpbIm1vYmlsZSJdfQ.GWyWF8E0c9pKBtJ6FNlsb4nyxjiQJpsPvRYl-uQC9trzc6vvPYwl7J03uJJ3ojVZRoBRpVWVtPtShPO0UQ6dFenGyhzpNxGhxCCYf22W_gOoOZZl9aARwjGuhEuMT5EH2b8g8LRrKHq7gRJIiPW2EKX_7-iGD3CbLcYbVShkQTvBrbuR3V05tRyI7mtGjVOlDPT1yTyqLdPrn1kE02vTgjIPKop7JIK60_n8NZoWR0NRQdowyQI00k_KeJmPuW7J-8sqrs8BULcU-bLr4qGHNUKk2QbaCyNUXrj1sdS7Z4r_hujnOxFmzxPk9ulXf1dOAxRB4fAn4cQowt_P59ysviFlgk5o114JTd5VYeLDGy6B3DS_vFY-m_jhcRLQrUO2-ROFEI4bfCz03OEa_Gm_67QeZUVAg0Hb_SrlVwqJkbL355yiRsZE1n1ssleu1OLVe3IZAqbnHoyjhea57vp0NxgB0vQRibvjlaHCilzyhtjdE-64nPiVseHPvPiRYggzLH7YgF-OIwlLL5ksod27SQQ9mD8uVN9n6TulyAlHghMWdf7gWCsHjp_fus05Khz7jx5Nef_BfYon08M1PcI 310XaQS7NSWyZYQGtrV75zkGU9P-Uuzc9R1gs-p73A4CarqSGi1n8TLVy0Eqp8KdYb6S6ijNmCYLQQJ35RJ-OEms";
$url = "http://api.tvc.mx/products?page=20&withMedia&withInventory=simple&withPrice";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: Bearer $token",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
                $item_dos_modulo = json_decode($resp);
                $item_aumento = $item_dos_modulo->data;

      # code...
 
                for ($i=0; $i <count($item_aumento); $i++) { 
                    $id = $item_aumento[$i]->tvc_id;
                    $res_id =$id;
                  ?>
                                    <?php $res_dis =$item_aumento[$i]->total_inventories;
                    if ($res_dis!=Null) {
                  
                  ?>
                                    <li>
                                        <figure class="principal">
                                            <a class="aa-product-img-principal" href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>">
                                                <?php   $res_img =$item_aumento[$i]->media->main_image;
                                 $res_img_url = "http://api.tvc.mx$res_img";
                                 $not_img="img/notavailable.jpg";
                                 if ($res_img!="") {
                                     # code...
                                     echo "<img src='$res_img_url' width='260' height='260'/> &nbsp;&nbsp;&nbsp;&nbsp;";

           
                                 }else{
                                    echo "<img src='$not_img' width='260' height='260'/> &nbsp;&nbsp;&nbsp;&nbsp;";

                                 }?>
                                                <!--<img src="img/man/polo-shirt-2.png" alt="polo shirt img">-->
                                            </a>
                                            <?php 
                     
                     
                       $res_brand =$item_aumento[$i]->brand;
                             
                      $marca=$res_brand;
                     
                
                            $res_categoria =$item_aumento[$i]->category;
           
                            $categoria =$res_categoria;
                           
                      ?>
                                            <a class="aa-add-card-btn" href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>"><span class="fa fa-shopping-cart"></span>Comprar</a>
                                            <figcaption>
                                                <h4 class="aa-product-marca"><a href="./product-model.php?brand=<?php
                                             echo $marca;
                             ?>"><?php $res_brand =$item_aumento[$i]->brand;
                               $marca=$res_brand;
                              echo "$marca"; ?> </a></h4>
                                                <h4 class="aa-product-title"><a href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>"><?php $res_name =$item_aumento[$i]->name;
                               $nombre=$res_name;
                              echo "$nombre"; ?> </a></h4>
                                                <span class="aa-product-price"><?php 
                      
                      $res_price =$item_aumento[$i]->list_price;
                     $total = $res_price*$usd;
                        echo "MXN $$total";?></span><span class="aa-product-price"><del></del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                    class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                data-toggle="modal" price="<?php echo $total; ?>"
                                                almacen="<?php echo $res_dis; ?>" img="<?php echo $res_img_url; ?>"
                                                categoria="<?php echo $categoria; ?>" id="<?php echo $id;?>"
                                                name="<?php echo $nombre; ?>" data-target="#quick-view-modal"><span
                                                    class="fa fa-search"></span></a>
                                        </div>

                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale-principal" href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>">Stock: <?php 
                               $res_dis =$item_aumento[$i]->total_inventories;
                               if ($res_dis==NULL) {
                                 # code...
                                 echo "No disponible";
                               }else 
                                 echo "$res_dis";
                               
                              ?></span>
                                    </li><?php }?>
                                    <?php }  ?>
                                    <!-- start single product item -->

                                    <!--rt single product item -->

                                    <!-- start single product item -->

                                    <!-- start single product item -->

                                    <!-- start single product item -->



                                </ul>
                                <a class="aa-browse-btn" href="./product.php?pagina=<?php echo 1;?>">Mas producto <span
                                        class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / popular product category -->




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Promo section -->



<!-- banner section -->
<section id="aa-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-banner-area">
                        <a href="#"><img src="img/fashion-banner.jpg" alt="fashion banner img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








<!-- popular section -->
<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">Más Vendidos</a></li>

                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content">
                            <!-- Start men popular category -->
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                    <!-- start single product item -->

                                    <?php 
                

                
                $token ="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijg0M2FlMDUzYjI5MGU2MzdlNzg5MTEyN2UyYmJlMmU3MGE0NTAwNmMzMzI1NTcyNDNkZDlkNWY2ODk4MjZlMDJkMjE5Y2EyMzI2YmRlMDczIn0.eyJhdWQiOiIyIiwianRpIjoiODQzYWUwNTNiMjkwZTYzN2U3ODkxMTI3ZTJiYmUyZTcwYTQ1MDA2YzMzMjU1NzI0M2RkOWQ1ZjY4OTgyNmUwMmQyMTljYTIzMjZiZGUwNzMiLCJpYXQiOjE2MjY4MTUxMjgsIm5iZiI6MTYyNjgxNTEyOCwiZXhwIjoxNjU4MzUxMTI4LCJzdWIiOiI1NDU3Iiwic2NvcGVzIjpbIm1vYmlsZSJdfQ.GWyWF8E0c9pKBtJ6FNlsb4nyxjiQJpsPvRYl-uQC9trzc6vvPYwl7J03uJJ3ojVZRoBRpVWVtPtShPO0UQ6dFenGyhzpNxGhxCCYf22W_gOoOZZl9aARwjGuhEuMT5EH2b8g8LRrKHq7gRJIiPW2EKX_7-iGD3CbLcYbVShkQTvBrbuR3V05tRyI7mtGjVOlDPT1yTyqLdPrn1kE02vTgjIPKop7JIK60_n8NZoWR0NRQdowyQI00k_KeJmPuW7J-8sqrs8BULcU-bLr4qGHNUKk2QbaCyNUXrj1sdS7Z4r_hujnOxFmzxPk9ulXf1dOAxRB4fAn4cQowt_P59ysviFlgk5o114JTd5VYeLDGy6B3DS_vFY-m_jhcRLQrUO2-ROFEI4bfCz03OEa_Gm_67QeZUVAg0Hb_SrlVwqJkbL355yiRsZE1n1ssleu1OLVe3IZAqbnHoyjhea57vp0NxgB0vQRibvjlaHCilzyhtjdE-64nPiVseHPvPiRYggzLH7YgF-OIwlLL5ksod27SQQ9mD8uVN9n6TulyAlHghMWdf7gWCsHjp_fus05Khz7jx5Nef_BfYon08M1PcI 310XaQS7NSWyZYQGtrV75zkGU9P-Uuzc9R1gs-p73A4CarqSGi1n8TLVy0Eqp8KdYb6S6ijNmCYLQQJ35RJ-OEms";
                $url = "http://api.tvc.mx/products?page=10&withMedia&withInventory=simple&withPrice";
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                
                $headers = array(
                   "Accept: application/json",
                   "Authorization: Bearer $token",
                );
                curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                //for debug only!
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                
                $resp = curl_exec($curl);
                curl_close($curl);
                $item_tres_modulo = json_decode($resp);
                $item_aumento = $item_tres_modulo->data;

      # code...
 
                for ($i=0; $i <count($item_aumento); $i++) { 
                    $id = $item_aumento[$i]->tvc_id;
                    $res_id =$id;
                    
                  ?>
                                    <?php $res_dis =$item_aumento[$i]->total_inventories;
                    if ($res_dis!=Null) {
                  
                  ?>
                                    <li>
                                        <figure class="principal">
                                            <a class="aa-product-img-principal" href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>">
                                                <?php   $res_img =$item_aumento[$i]->media->main_image;
                                 $res_img_url = "http://api.tvc.mx$res_img";
                                 $not_img="img/notavailable.jpg";
                                 if ($res_img!="") {
                                     # code...
                                     echo "<img src='$res_img_url' width='260' height='260'/> &nbsp;&nbsp;&nbsp;&nbsp;";

           
                                 }else{
                                    echo "<img src='$not_img' width='260' height='260'/> &nbsp;&nbsp;&nbsp;&nbsp;";

                                 }?>
                                                <!--<img src="img/man/polo-shirt-2.png" alt="polo shirt img">-->
                                            </a>
                                            <?php 
                     
                     
                       $res_brand =$item_aumento[$i]->brand;
                             
                      $marca=$res_brand;
                     
                
                            $res_categoria =$item_aumento[$i]->category;
           
                            $categoria =$res_categoria;
                           
                      ?>
                                            <a class="aa-add-card-btn" href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>"><span class="fa fa-shopping-cart"></span>Comprar</a>
                                            <figcaption>
                                                <h4 class="aa-product-marca"><a href="./product-model.php?brand=<?php
                                             echo $marca;
                             ?>"><?php $res_brand =$item_aumento[$i]->brand;
                               $marca=$res_brand;
                              echo "$marca"; ?> </a></h4>
                                                <h4 class="aa-product-title"><a href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>"><?php $res_name =$item_aumento[$i]->name;
                               $nombre=$res_name;
                              echo "$nombre"; ?> </a></h4>
                                                <span class="aa-product-price"><?php 
                      
                      $res_price =$item_aumento[$i]->list_price;
                     $total = $res_price * $usd;
                        echo "MXN $$total";?></span><span class="aa-product-price"><del></del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                    class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" price="<?php echo $total; ?>"
                                                almacen="<?php echo $res_dis; ?>" img="<?php echo $res_img_url; ?>"
                                                categoria="<?php echo $categoria; ?>" id="<?php echo $id;?>"
                                                name="<?php echo $nombre; ?>" data-placement="top" title="Quick View"
                                                data-toggle="modal" data-target="#quick-view-modal"><span
                                                    class="fa fa-search"></span></a>
                                        </div>

                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale-principal" href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>">Stock: <?php 
                               $res_dis =$item_aumento[$i]->total_inventories;
                               if ($res_dis==NULL) {
                                 # code...
                                 echo "No disponible";
                               }else 
                                 echo "$res_dis";
                               
                              ?></span>
                                    </li><?php }?>
                                    <?php }  ?>
                                    <!-- start single product item -->

                                    <!--rt single product item -->

                                    <!-- start single product item -->

                                    <!-- start single product item -->

                                    <!-- start single product item -->



                                </ul>
                                <a class="aa-browse-btn" href="./product.php?pagina=<?php echo 1;?>">Mas producto <span
                                        class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!--Modal-->
                           
                            <!--Terminal modal-->


                            <!-- / popular product category -->
                            <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                            <div class="row">
                                                <!-- Modal view slider -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-slider">
                                                        <div class="simpleLens-gallery-container" id="demo-1">
                                                           
                                                                <div class="simpleLens-container">
                                                                    <div class="simpleLens-big-image-container">
                                                                        <a class="simpleLens-lens-image"
                                                                            data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                                                            <img src="" id="img"
                                                                                class="simpleLens-big-image" >
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="simpleLens-thumbnails-container">
                                                                    <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                        data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                                                        data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                                                        <img
                                                                            src="img/view-slider/thumbnail/polo-shirt-1.png">
                                                                    </a>
                                                                    <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                        data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                                                        data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                                                        <img
                                                                            src="img/view-slider/thumbnail/polo-shirt-3.png">
                                                                    </a>

                                                                    <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                        data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                                                        data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                                                        <img
                                                                            src="img/view-slider/thumbnail/polo-shirt-4.png">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal view content -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-content">
                                                            <input type="hidden" name="id_producto" id="id_producto"
                                                                required>

                                                            <h3></h3>

                                                            <div class="aa-price-block">
                                                                <span class="aa-product-view-price">MXN $ <span
                                                                        class="total_price"></span></span>
                                                                <p class="aa-product-avilability">Almacen: <span
                                                                        class="total_almacen"></span></p>
                                                            </div>
                                                            <p class="var_name"></p>
                                                            <h4>Tamaños y Dimensiones</h4>
                                                            <div class="aa-prod-view-size">
                                                                <a href="#">S</a>
                                                                <a href="#">M</a>
                                                                <a href="#">L</a>
                                                                <a href="#">XL</a>
                                                            </div>
                                                            <div class="aa-prod-quantity">
                                                                <form action="">
                                                                    <select name="" id="">
                                                                        <option value="0" selected="1">0</option>
                                                                        <?php for ($i=1; $i <50 ; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                  }
                                  ?>
                                                                    </select>
                                                                </form>
                                                                <p class="aa-prod-category">
                                                                    Categoria: <a href="#"> <span
                                                                            class="categoria"></span></a>
                                                                </p>
                                                            </div>
                                                            <div class="aa-prod-view-bottom">
                                                                <a href="#" class="aa-add-to-cart-btn"><span
                                                                        class="fa fa-shopping-cart"></span>Añadir</a>
                                                                <a href="#" class="aa-add-to-cart-btn">Ver más</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- / quick view modal -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- / Promo section -->
<!-- / popular section -->
<!-- Support section -->
<section id="aa-support">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-support-area">
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-truck"></span>
                            <h4>Envios a todo el pais</h4>
                            <P>Los envios son a toda la republica mexicana</P>
                        </div>
                    </div>
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-clock-o"></span>
                            <h4>Lleva el control de tu pedido</h4>
                            <P>Puedes revisar el trayecto de tu pedido</P>
                        </div>
                    </div>
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-phone"></span>
                            <h4>Soporte 24/7 los 365 días del año</h4>
                            <P>Si tienes alguna duda con gusto te apoyamos</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Support section -->
<!-- Testimonial -->
<section id="aa-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-testimonial-area">
                    <ul class="aa-testimonial-slider">
                        <!-- single slide -->

                        <li>
                            <p>
                            <h1>Fabricantes destacados</h1>
                            </p>

                            <div class="aa-testimonial-single">
                                <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg" alt="testimonial img">
                                <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                <p>Fabricantes destacados : descripción</p>
                                <div class="aa-testimonial-info">
                                    <p>Nombre completo</p>
                                    <span>Compañia </span>
                                    <a href="#">Correo@dahuapuebla.com</a>
                                </div>
                            </div>
                        </li>
                        <!-- single slide -->
                        <li>
                            <p>
                            <h1>Fabricantes destacados</h1>
                            </p>

                            <div class="aa-testimonial-single">
                                <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg" alt="testimonial img">
                                <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                <p>Fabricantes destacados : descripción</p>
                                <div class="aa-testimonial-info">
                                    <p>Nombre completo</p>
                                    <span>Compañia </span>
                                    <a href="#">Correo@dahuapuebla.com</a>
                                </div>
                            </div>
                        </li>
                        <!-- single slide -->
                        <li>
                            <p>
                            <h1>Fabricantes destacados</h1>
                            </p>

                            <div class="aa-testimonial-single">
                                <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg" alt="testimonial img">
                                <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                <p>Fabricantes destacados : descripción</p>
                                <div class="aa-testimonial-info">
                                    <p>Nombre completo</p>
                                    <span>Compañia </span>
                                    <a href="#">Correo@dahuapuebla.com</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Testimonial -->

<!-- Latest Blog -->
<section id="aa-latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-latest-blog-area">
                    <h2>Novedades</h2>

                    <div class="row">
                        <?php 
                
                $item = json_decode($resp);
  $item_aumento = $item->data;
                for ($i=2; $i <5; $i++) { 
                 
                  ?>
                        <!-- single latest blog -->
                        <div class="col-md-4 col-sm-4">
                            <div class="aa-latest-blog-single">
                                <figure class="aa-blog-img">
                                    <a href="#">
                                        <?php 
                                      $res_img =$item_aumento[$i]->media->main_image;
                                      $res_img_url = "http://api.tvc.mx/$res_img";
                                     echo "<img src='$res_img_url'width='450' height='450'/> &nbsp;&nbsp;&nbsp;&nbsp;";
                                     ?>
                                    </a>
                                    <figcaption class="aa-blog-img-caption">
                                        <span href="#"><i class="fa fa-eye"></i>5K</span>
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                        <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                        <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                    </figcaption>
                                </figure>
                                <div class="aa-blog-info">
                                    <h3 class="aa-blog-title"><a href="#">
                                            <?php echo $res_brand = $item_aumento[$i]->brand; ?></a></h3>
                                    <p> <?php echo $res_name = $item_aumento[$i]->name; ?></p>
                                    <a href="./blog-single.php" class="aa-read-mor-btn">Read more <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- single latest blog -->

                        <!-- single latest blog -->
                        <?php } ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Latest Blog -->

<!-- Client Brand -->
<section id="aa-client-brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-client-brand-area">
                    <ul class="aa-client-brand-slider">
                        <li><a href="#"><img src="img/paypal.jpg" alt="java img"></a></li>
                        <li><a href="#"><img src="img/mercado-pago.png" alt="jquery img"></a></li>
                        <li><a href="#"><img src="img/tarjeta-de-credito.png" alt="html5 img"></a></li>
                        <li><a href="#"><img src="img/entrega-a-domicilio.jpg" alt="css3 img"></a></li>
                        <li><a href="#"><img src="img/sobrepedido.jpg" alt="wordPress img"></a></li>
                        <li><a href="#"><img src="img/entrega-inmediata.jpg" alt="joomla img"></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Client Brand -->

<!-- Subscribe section -->
<section id="aa-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-subscribe-area">
                    <h3>Suscribete para recibir notificaciones</h3>
                    <p>Para ofertar y promociones te podras registrar con tu correo</p>
                    <form action="" class="aa-subscribe-form">
                        <input type="email" name="" id="" placeholder="Coloca tu Email.">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Subscribe section -->

<?php
include('./header/footer.php');
?>

<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login or Register</h4>
                <form class="aa-login-form" action="">
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password">
                    <button class="aa-browse-btn" type="submit">Login</button>
                    <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me
                    </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    <div class="aa-register-now">
                        Don't have an account?<a href="account.html">Register now!</a>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!--Modal-->
<script src="js/modal.js"></script>
<!--buscador-->
<script src="js/buscador.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="js/jquery.smartmenus.js"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
<!-- To Slider JS -->
<script src="js/sequence.js"></script>
<script src="js/sequence-theme.modern-slide-in.js"></script>
<!-- Product view slider -->
<script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
<script type="text/javascript" src="js/jquery.simpleLens.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="js/slick.js"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="js/nouislider.js"></script>
<!-- Custom js -->
<script src="js/custom.js"></script>

</body>

</html>