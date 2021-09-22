<?php


include_once ("acceso/usdModena.php");
$usd =json_decode($resUSD, true);



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title iconv="">WorldCam
    </title>    <link rel="shortcut icon" href="./img/logo.png">

    
    
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
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

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
  <?php include_once ("./header/header_not_slider.php");
 ?>

  <!-- / catg header banner section -->
<!-- BREADCRUMB -->
 <?php
 
 $buscar = $_GET['id'];      
 $token ="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijg0M2FlMDUzYjI5MGU2MzdlNzg5MTEyN2UyYmJlMmU3MGE0NTAwNmMzMzI1NTcyNDNkZDlkNWY2ODk4MjZlMDJkMjE5Y2EyMzI2YmRlMDczIn0.eyJhdWQiOiIyIiwianRpIjoiODQzYWUwNTNiMjkwZTYzN2U3ODkxMTI3ZTJiYmUyZTcwYTQ1MDA2YzMzMjU1NzI0M2RkOWQ1ZjY4OTgyNmUwMmQyMTljYTIzMjZiZGUwNzMiLCJpYXQiOjE2MjY4MTUxMjgsIm5iZiI6MTYyNjgxNTEyOCwiZXhwIjoxNjU4MzUxMTI4LCJzdWIiOiI1NDU3Iiwic2NvcGVzIjpbIm1vYmlsZSJdfQ.GWyWF8E0c9pKBtJ6FNlsb4nyxjiQJpsPvRYl-uQC9trzc6vvPYwl7J03uJJ3ojVZRoBRpVWVtPtShPO0UQ6dFenGyhzpNxGhxCCYf22W_gOoOZZl9aARwjGuhEuMT5EH2b8g8LRrKHq7gRJIiPW2EKX_7-iGD3CbLcYbVShkQTvBrbuR3V05tRyI7mtGjVOlDPT1yTyqLdPrn1kE02vTgjIPKop7JIK60_n8NZoWR0NRQdowyQI00k_KeJmPuW7J-8sqrs8BULcU-bLr4qGHNUKk2QbaCyNUXrj1sdS7Z4r_hujnOxFmzxPk9ulXf1dOAxRB4fAn4cQowt_P59ysviFlgk5o114JTd5VYeLDGy6B3DS_vFY-m_jhcRLQrUO2-ROFEI4bfCz03OEa_Gm_67QeZUVAg0Hb_SrlVwqJkbL355yiRsZE1n1ssleu1OLVe3IZAqbnHoyjhea57vp0NxgB0vQRibvjlaHCilzyhtjdE-64nPiVseHPvPiRYggzLH7YgF-OIwlLL5ksod27SQQ9mD8uVN9n6TulyAlHghMWdf7gWCsHjp_fus05Khz7jx5Nef_BfYon08M1PcI 310XaQS7NSWyZYQGtrV75zkGU9P-Uuzc9R1gs-p73A4CarqSGi1n8TLVy0Eqp8KdYb6S6ijNmCYLQQJ35RJ-OEms";
 $url = "http://api.tvc.mx/products?tvcIds[]=$buscar&withMedia&withCategoryBreadcrumb&withOverviews&withPrice&withInventory=simple&withWeightsAndDimensions";
 
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
 $datos = json_decode($resp);

 
                      $item_aumento = $datos->data;

      
                   for ($i=0; $i <count($item_aumento) ; $i++) { 
                     
                      
                     
             
                       
                        ?>
        <div id="breadcrumb" class="section">
              <!-- container -->
              <div class="container">
                <!-- row -->
                <div class="row">
                  <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                      <li><a href="./index.php"> <button> Home</button></a></li>
                      <li><a href="#"><?php  
                       $res_categoria =$item_aumento[$i]->category_breadcrumb_tree->name; 
                            echo "<button>$res_categoria</button>";
                      ?></a></li>
                      <li><a href="#"><?php  
                       $res_categoria_amplia =$item_aumento[$i]->category_breadcrumb_tree->parent->name; 
                            echo "<button>$res_categoria_amplia</button>";
                      ?></a></li>
                      <li class="active"><?php 
                      $res_name_menu =$item_aumento[$i]->category_breadcrumb_tree->parent->parent->name; 
                            echo "<button>$res_name_menu</button>";
                      ?></li>
                    </ul>
                  </div>
                </div>
                <!-- /row -->
              </div>
              <!-- /container -->
            </div>
            <!-- /BREADCRUMB -->
          <!-- product category -->
          <section id="aa-product-details">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="aa-product-details-area">
                    <div class="aa-product-details-content">
                      <div class="row">
                           
                        <!-- Modal view slider -->
                        <div class="col-md-5 col-sm-5 col-xs-12">                              
                          <div class="aa-product-view-slider">                                
                            <div id="demo-1" class="simpleLens-gallery-container">
                              <div class="simpleLens-container">
                                  
                                <div class="simpleLens-big-image-container">
                                 <?php   $res_img =$item_aumento[$i]->media->main_image;
                                         $res_img_url = "http://api.tvc.mx/$res_img";
                                         $not_img="img/notavailable.jpg";
                                         if ($res_img!="") {
                                             # code...
                                             echo "<img src='$res_img_url' width='260' height='260'/> &nbsp;&nbsp;&nbsp;&nbsp;";
        
                   
                                         }else{
                                            echo "<img src='$not_img' width='260' height='260'/> &nbsp;&nbsp;&nbsp;&nbsp;";
        
                                         }?>
                                <a data-lens-image="" class="simpleLens-lens-image">
                                
                              </a></div>
                              </div>
                              <div class="simpleLens-thumbnails-container">
                             
                                  <a class="simpleLens-thumbnail-wrapper" href="#">
                                 
                                  </a>                                    
                                
                                  
                              </div>
                            </div>
                          </div>
                        </div>
                      
                        <!-- Modal view content -->
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <div class="aa-product-view-content">
                            <h3>
                      
                            <?php
                            $res_model =$item_aumento[$i]->provider_model; 
                            $res_marca =$item_aumento[$i]->brand; 
        
                            echo "Modelo: $res_model <br> Marca: $res_marca";
                            ?></h3>
                            <h4>   
        
                            <?php $res_name =$item_aumento[$i]->name; 
                            echo "$res_name"; ?>
                            </h4>
                           
                            <div class="aa-price-block">
                              <span class="aa-product-view-price"><h3> <?php $res_price =$item_aumento[$i]->list_price; 
                              $total = $res_price*$usd;
                            echo "MXN: $ $total"; ?></h3></span>
                              <p class="aa-product-avilability">Stock: 
                                  <?php $res_inventario =$item_aumento[$i]->total_inventories; 
                            echo "$res_inventario"; ?> <span></span></p>
                            </div>
                            
                            <p>Sat Key:  <?php $res_sat_key =$item_aumento[$i]->sat_key; 
                            echo "$res_sat_key"; ?></p>
                           
                            <h4>Pesos y Dimenciones</h4>
                            <div class="aa-prod-view-size">
                              <a href="#"><?php $res_box =$item_aumento[$i]->weights_and_dimensions->pieces_per_box; 
                            echo "Piezas por caja: $res_box"; ?>
                            </a>
                              <a href="#"><?php $res_altura_piezas =$item_aumento[$i]->weights_and_dimensions->piece_height; 
                            echo "Altura de Piezas: $res_altura_piezas"; ?></a>
                              <a href="#"><?php $res_longitud_piezas =$item_aumento[$i]->weights_and_dimensions->piece_length; 
                            echo "Longitud de Piezas: $res_longitud_piezas"; ?></a>
                              <a href="#"><?php $res_ancho_pieza =$item_aumento[$i]->weights_and_dimensions->piece_width; 
                            echo "Ancho de la Pieza: $res_ancho_pieza"; ?></a>
                             <a href="#"><?php $res_peso_piezas =$item_aumento[$i]->weights_and_dimensions->piece_weight; 
                            echo "Peso de la Pieza: $res_peso_piezas"; ?></a>
        
                            <a href="#"><?php $res_altura_caja =$item_aumento[$i]->weights_and_dimensions->box_height; 
                            echo "Altura de la caja: $res_altura_caja"; ?></a>
                             <a href="#"><?php $res_longitud_caja =$item_aumento[$i]->weights_and_dimensions->box_length; 
                            echo "Longitud de la caja: $res_longitud_caja"; ?></a>
                              <a href="#"><?php $res_ancho_caja =$item_aumento[$i]->weights_and_dimensions->box_width; 
                            echo "Ancho de la caja: $res_ancho_caja"; ?></a>
                             <a href="#"><?php $res_peso_caja =$item_aumento[$i]->weights_and_dimensions->box_weight; 
                            echo "Peso de la caja: $res_peso_caja"; ?></a>
        
        
                            </div>
                          
                            <h4>Color</h4>
                            <div class="aa-color-tag">
                              <a href="#" class="aa-color-green"></a>
                              <a href="#" class="aa-color-yellow"></a>
                              <a href="#" class="aa-color-pink"></a>                      
                              <a href="#" class="aa-color-black"></a>
                              <a href="#" class="aa-color-white"></a>                      
                            </div>
                            <div class="aa-prod-quantity">
                              <form action="">
                                <select id="" name="">
                                  <option selected="1" value="0">1</option>
                                  <option value="1">2</option>
                                  <option value="2">3</option>
                                  <option value="3">4</option>
                                  <option value="4">5</option>
                                  <option value="5">6</option>
                                </select>
                              </form>
                              <p class="aa-prod-category">
                                Category: <a href="#"> <?php 
                                $res_cat =$item_aumento[$i]->category;
                                echo "$res_cat";
                                ?></a>
                              </p>
                            </div>
                           
                            <div class="aa-prod-view-bottom">
                              <a class="aa-add-to-cart-btn" href="#">Add To Cart</a>
                              <a class="aa-add-to-cart-btn" href="#">Wishlist</a>
                              <a class="aa-add-to-cart-btn" href="#">Compare</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="aa-product-details-bottom">
                      <ul class="nav nav-tabs" id="myTab2">
                        <li><a href="#overviews" data-toggle="tab">Resumen</a></li>
                        <li><a href="#documentos" data-toggle="tab">Documentos</a></li>  
                        <li><a href="#video" data-toggle="tab">
                        <?php 
                        $res_video =$item_aumento[$i]->media->videos; 
                        if ($res_video!="") {
                          # code...
                          echo "Videos"; 
        
                        }else {
                          echo "";
                        }
                        ?></a></li>                
                      
                      </ul>
        
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane fade in active" id="overviews">
                          
                          <?php
                          $over= $item_aumento[$i]->overviews;
                            for ($j=0; $j <count($over) ; $j++) { 
                                     ?>
                              
                             <?php
                          $res_titulo =$over[$j]->title; 
                            echo "<h2>$res_titulo</h2> <br>"; ?>     
                          
                          
                          <?php $res_descripcion =$over[$j]->description; 
                            echo "<h4>$res_descripcion</h4> <br>"; ?>
                            <p>
                             </p>
                            <center>
                            <?php   $res_img =$over[$j]->image_path;
                                         $res_img_url = "http://api.tvc.mx$res_img";
                                         $not_img="img/notavailable.jpg";
                                         if ($res_img!=NULL) {
                                             # code...
                                             echo "<img src='$res_img_url' width='50%' height='50%'/> &nbsp;&nbsp;&nbsp;&nbsp;<br>";
        
                   
                                         }else{
                                            echo "<br>";
                                         }?>
                                          <?php   $res_img_movil =$over[$j]->mobile_image_path;
                                         $res_img_url_movil = "http://api.tvc.mx$res_img_movil";
                                         $not_img="img/notavailable.jpg";
                                         if ($res_img_movil!=NULL) {
                                             # code...
                                             echo "<img src='$res_img_url_movil' width='50%' height='50%'/> &nbsp;&nbsp;&nbsp;&nbsp;";
        
                   
                                         }else{
                                            echo "<br>";
                                         }?>
                            </center>
        
                            <?php }?>     
                          
             
                                            </div>
        <!-- inicia otro item-->
        
                      <!-- Tab panes -->
        
        
        <div class="tab-pane fade " id="documentos">
                         <div class="aa-product-review-area">
                           <h4>Documentos</h4> 
                          
                           <?php 
                              $documentos=$item_aumento[$i]->media->documents;
                           for ($k=0; $k <count($documentos) ; $k++) { 
                             ?>
                           
                           <?php   $res_doc =$documentos[$k];
                                         $res_doc_url = "http://api.tvc.mx$res_doc";
                                         $not_img="img/notavailable.jpg";
                                         if ($res_doc!=NULL) {
                                             # code...
                                             echo "<a href='$res_doc_url'><h5>Manuales <img src='./img/pdf.png' width='25' height='20' ></h5></a><br>";
                                                 
                                         }else{
                                            echo "<br>";
                                         }?>
                                         <?php  }
                           ?>
                         </div>
                        </div>
         <!-- Tab panes -->
                        <div class="tab-pane fade " id="video">
                         <div class="aa-product-review-area">
                          
                           <?php $res_video =$item_aumento[$i]->media->videos; 
                           for ($v=0; $v <count($res_video) ; $v++) { 
                         $ver_videos=$item_aumento[$i]->media->videos[$v]; 
                           $res_video_url = "$ver_videos";
                        if ($res_video!="") {
                          # code...
                          //echo "<iframe width='560' height='315' src='{$res_video_url}' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
                         // echo "<center><video src='$res_video_url' controls='controls' width='500' heigth='500' /><center>"; 
                        // echo "<iframe width='560' height='315' src='$res_video_url' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
        
                        echo  "<video width='70%' height='65%' controls><source src='{$res_video_url}' type='video/mp4'>Your browser does not support the video tag.</video>";
        
        
                        }else {
                          echo "";
                        }
                      }
                        ?>
                         </div>
                        </div>            
                      </div>
                    </div>
                    <?php }  ?> 
                    <!--aqui cierra el php de la busqqueda-->



            <!--No tocar-->
            
            <!-- Related product -->
            <div class="aa-product-related-item">
              <h3>Productos relacionados</h3>
              <ul class="aa-product-catg aa-related-item-slider">
                <!-- start single product item -->
                <?php 
                
               $toke = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijg0M2FlMDUzYjI5MGU2MzdlNzg5MTEyN2UyYmJlMmU3MGE0NTAwNmMzMzI1NTcyNDNkZDlkNWY2ODk4MjZlMDJkMjE5Y2EyMzI2YmRlMDczIn0.eyJhdWQiOiIyIiwianRpIjoiODQzYWUwNTNiMjkwZTYzN2U3ODkxMTI3ZTJiYmUyZTcwYTQ1MDA2YzMzMjU1NzI0M2RkOWQ1ZjY4OTgyNmUwMmQyMTljYTIzMjZiZGUwNzMiLCJpYXQiOjE2MjY4MTUxMjgsIm5iZiI6MTYyNjgxNTEyOCwiZXhwIjoxNjU4MzUxMTI4LCJzdWIiOiI1NDU3Iiwic2NvcGVzIjpbIm1vYmlsZSJdfQ.GWyWF8E0c9pKBtJ6FNlsb4nyxjiQJpsPvRYl-uQC9trzc6vvPYwl7J03uJJ3ojVZRoBRpVWVtPtShPO0UQ6dFenGyhzpNxGhxCCYf22W_gOoOZZl9aARwjGuhEuMT5EH2b8g8LRrKHq7gRJIiPW2EKX_7-iGD3CbLcYbVShkQTvBrbuR3V05tRyI7mtGjVOlDPT1yTyqLdPrn1kE02vTgjIPKop7JIK60_n8NZoWR0NRQdowyQI00k_KeJmPuW7J-8sqrs8BULcU-bLr4qGHNUKk2QbaCyNUXrj1sdS7Z4r_hujnOxFmzxPk9ulXf1dOAxRB4fAn4cQowt_P59ysviFlgk5o114JTd5VYeLDGy6B3DS_vFY-m_jhcRLQrUO2-ROFEI4bfCz03OEa_Gm_67QeZUVAg0Hb_SrlVwqJkbL355yiRsZE1n1ssleu1OLVe3IZAqbnHoyjhea57vp0NxgB0vQRibvjlaHCilzyhtjdE-64nPiVseHPvPiRYggzLH7YgF-OIwlLL5ksod27SQQ9mD8uVN9n6TulyAlHghMWdf7gWCsHjp_fus05Khz7jx5Nef_BfYon08M1PcI 310XaQS7NSWyZYQGtrV75zkGU9P-Uuzc9R1gs-p73A4CarqSGi1n8TLVy0Eqp8KdYb6S6ijNmCYLQQJ35RJ-OEms";
               mt_srand(time());
$aleatorio=mt_rand(1,30);
                $completa="http://api.tvc.mx/products?page=$aleatorio&withPrice&withMedia&withInventory=simple"; //inicial
              
                $url_original = "$completa";
              
              
              
                $curl = curl_init($url_original);
                curl_setopt($curl, CURLOPT_URL, $url_original);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                
                $headers = array(
                   "Accept: application/json",
                   "Authorization: Bearer $toke",
                );
                curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                //for debug only!
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                
                $resp_pagina = curl_exec($curl);
                curl_close($curl);
            
$datos = json_decode($resp_pagina);
                $item_aumento = $datos->data;

      # code...
 
                for ($i=0; $i <count($item_aumento); $i++) { 
                  $id = $item_aumento[$i]->tvc_id;
                  $res_id =$id;
                  ?>
                                    <?php $res_dis =$item_aumento[$i]->total_inventories;
                    if ($res_dis!=Null) {
                  
                  ?>
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#">
                                                <?php   $res_img =$item_aumento[$i]->media->main_image;
                                 $res_img_url = "http://api.tvc.mx/$res_img";
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
                             ?>"><span class="fa fa-shopping-cart"></span>Comprar sd</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>"><?php $res_name =$item_aumento[$i]->name;
                               $nombre=$res_name;
                              echo "$nombre"; ?> </a></h4>
                                                <span class="aa-product-price"><?php 
                      
                      $res_dis =$item_aumento[$i]->list_price;
                     $total = $res_dis*$usd;
                        echo "MXN $$total";?></span><span class="aa-product-price"><del></del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                    class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                data-toggle="modal" data-target="#quick-view-modal-ofertas-especiales"><span
                                                    class="fa fa-search"></span></a>
                                        </div>

                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">Stock: <?php 
                               $res_dis =$item_aumento[$i]->total_inventories;
                               if ($res_dis==NULL) {
                                 # code...
                                 echo "No disponible";
                               }else {
                                 echo "$res_dis";
                              }
                              ?></span>
                                    </li><?php }?>
                                    <?php }  ?>
                                                                                               
              </ul>
              <!-- quick view modal -->                  
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">                      
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <div class="row">
                        <!-- Modal view slider -->
                        <div class="col-md-6 col-sm-6 col-xs-12">                              
                          <div class="aa-product-view-slider">                                
                            <div class="simpleLens-gallery-container" id="demo-1">
                              <div class="simpleLens-container">
                                  <div class="simpleLens-big-image-container">
                                      <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                          <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                      </a>
                                  </div>
                              </div>
                              <div class="simpleLens-thumbnails-container">
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                  </a>                                    
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                  </a>

                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal view content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="aa-product-view-content">
                            <h3>T-Shirt</h3>
                            <div class="aa-price-block">
                              <span class="aa-product-view-price">$34.99</span>
                              <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                            <h4>Size</h4>
                            <div class="aa-prod-view-size">
                              <a href="#">S</a>
                              <a href="#">M</a>
                              <a href="#">L</a>
                              <a href="#">XL</a>
                            </div>
                            <div class="aa-prod-quantity">
                              <form action="">
                                <select name="" id="">
                                  <option value="0" selected="1">1</option>
                                  <option value="1">2</option>
                                  <option value="2">3</option>
                                  <option value="3">4</option>
                                  <option value="4">5</option>
                                  <option value="5">6</option>
                                </select>
                              </form>
                              <p class="aa-prod-category">
                                Category: <a href="#">Polo T-Shirt</a>
                              </p>
                            </div>
                            <div class="aa-prod-view-bottom">
                              <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <a href="#" class="aa-add-to-cart-btn">View Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                        
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
              <!-- / quick view modal -->   
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!-- footer -->  
 
<?php
include('./header/footer.php');
?>
  <!-- / footer -->
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
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

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