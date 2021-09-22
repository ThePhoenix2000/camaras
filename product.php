
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
    </title>    <link rel="shortcut icon" href="./img/logo.ico">
    
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
  <!-- !Important notice -->
  <!-- Only for product page body tag have to added .productPage class -->
  <body class="productPage">  
   <!-- wpf loader Two -->
  <?php include_once ("./header/header_not_slider.php") ?>
  <!-- product category -->
  <!-- BREADCRUMB -->

		<!-- /BREADCRUMB -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-14 col-sm-13 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default" id="misdatos" name="misdatos">Buscar</option>
<?php 
 
//$uno = $datos->data[0]->tvc_model;
$dato = json_decode($resp);
  $datos = $dato->data;
  for ($i= 0; $i <10 ; $i++) { 
    
      echo "<option>{$datos[$i]->brand}</option>";


    


  }
  
?>
                    
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select name="by" id="by">
                    <option value="1" selected="20">20</option>
                    <option value="2" selected="20">50</option>
                    <option value="3" selected="20">100</option>
                  </select>
                </form>
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
                <?php 
                if (isset($_GET['pagina'])) {
    
$pag=$_GET['pagina'];

if ($pag >0) {
  

    $toke = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijg0M2FlMDUzYjI5MGU2MzdlNzg5MTEyN2UyYmJlMmU3MGE0NTAwNmMzMzI1NTcyNDNkZDlkNWY2ODk4MjZlMDJkMjE5Y2EyMzI2YmRlMDczIn0.eyJhdWQiOiIyIiwianRpIjoiODQzYWUwNTNiMjkwZTYzN2U3ODkxMTI3ZTJiYmUyZTcwYTQ1MDA2YzMzMjU1NzI0M2RkOWQ1ZjY4OTgyNmUwMmQyMTljYTIzMjZiZGUwNzMiLCJpYXQiOjE2MjY4MTUxMjgsIm5iZiI6MTYyNjgxNTEyOCwiZXhwIjoxNjU4MzUxMTI4LCJzdWIiOiI1NDU3Iiwic2NvcGVzIjpbIm1vYmlsZSJdfQ.GWyWF8E0c9pKBtJ6FNlsb4nyxjiQJpsPvRYl-uQC9trzc6vvPYwl7J03uJJ3ojVZRoBRpVWVtPtShPO0UQ6dFenGyhzpNxGhxCCYf22W_gOoOZZl9aARwjGuhEuMT5EH2b8g8LRrKHq7gRJIiPW2EKX_7-iGD3CbLcYbVShkQTvBrbuR3V05tRyI7mtGjVOlDPT1yTyqLdPrn1kE02vTgjIPKop7JIK60_n8NZoWR0NRQdowyQI00k_KeJmPuW7J-8sqrs8BULcU-bLr4qGHNUKk2QbaCyNUXrj1sdS7Z4r_hujnOxFmzxPk9ulXf1dOAxRB4fAn4cQowt_P59ysviFlgk5o114JTd5VYeLDGy6B3DS_vFY-m_jhcRLQrUO2-ROFEI4bfCz03OEa_Gm_67QeZUVAg0Hb_SrlVwqJkbL355yiRsZE1n1ssleu1OLVe3IZAqbnHoyjhea57vp0NxgB0vQRibvjlaHCilzyhtjdE-64nPiVseHPvPiRYggzLH7YgF-OIwlLL5ksod27SQQ9mD8uVN9n6TulyAlHghMWdf7gWCsHjp_fus05Khz7jx5Nef_BfYon08M1PcI 310XaQS7NSWyZYQGtrV75zkGU9P-Uuzc9R1gs-p73A4CarqSGi1n8TLVy0Eqp8KdYb6S6ijNmCYLQQJ35RJ-OEms";
    $completa="http://api.tvc.mx/products?page=$pag&withInventory=simple&withPrice&withMedia"; //inicial
  
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
    
    $resp = curl_exec($curl);
    curl_close($curl);

    
                $item = json_decode($resp);
  $item_aumento = $item->data;
 
                for ($i=0; $i <count($item_aumento) ; $i++) { 
                 
                  
                                                 
                  ?>
                 <?php $res_dis =$item_aumento[$i]->total_inventories;
                    if ($res_dis!=Null) {
                  
                  ?>
                
                <li>
                  <figure>
                    <a class="aa-product-img" href="#">
                      <?php 
                       $res_img =$item_aumento[$i]->media->main_image;
                      $res_img_url = "http://api.tvc.mx$res_img";
                      $not_img="img/notavailable.jpg";
                      if ($res_img_url!="") {
                          # code...
                          echo "<img src='$res_img_url' width='260' height='260'/> &nbsp;&nbsp;&nbsp;&nbsp;";


                      }else{
                         echo "<img src='$not_img' width='260' height='260'/> &nbsp;&nbsp;&nbsp;&nbsp;";

                      }
                      ?>               
                    
                 </a>
                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#"> <?php echo $item_aumento[$i]->brand;
                       ?> </a></h4>
                      <span class="aa-product-price"> <?php 
                      
                      $res_price=$item_aumento[$i]->list_price;
                     $total = $res_price*$usd;
                    
                        echo "MXN $$total";
                      
                        ?></span><span class="aa-product-price"><del></del></span>
                      <p class="aa-product-descrip"><?php $res_name =$item_aumento[$i]->name;
                       $categoria = $item_aumento[$i]->category;
                               $nombre=$res_name;
                              echo "$nombre"; 
                               ?></p>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                    <a href="#" data-toggle2="tooltip" price="<?php echo $total; ?>"
                                                almacen="<?php echo $res_dis; ?>" img="<?php echo $res_img_url; ?>"
                                                categoria="<?php echo $categoria; ?>" id="<?php echo $id;?>"
                                                name="<?php echo $nombre; ?>" data-placement="top" title="Quick View"
                                                data-toggle="modal" data-target="#quick-view-modal"><span
                                                    class="fa fa-search"></span></a>
                  </div>
                  <!-- product badge -->
                  <span class="aa-badge aa-sale" href="#">Stock: <?php 
                      $res_stock=$item_aumento[$i]->total_inventories;
                      if ($res_stock==NULL) {
                        # code...
                        echo "No disponible";
                      }else 
                        echo "$res_stock";
                              
                      ?></span>
                </li>
                <!-- start single product item -->
               <?php } ?>
                 <?php } ?> <?php } ?>
<?php } ?>





                <!--aqui son los 14 item-->
              </ul>
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
                                                                <span class="aa-product-view-price">MXN $ <p
                                                                        class="total_price"></p></span>
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
            <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <!--Es la parte donde direcciona a otras paginas -->
                  <?php 
                  if (isset($_GET['pagina'])) {
                    $cargar = $_GET['pagina'];
                    $next = (4 + $cargar);

                    for ($i=$cargar; $i < $next ; $i++) { ?>
                  
                    
                  <li><a href="./product.php?pagina=<?php echo $i; ?>"><?php  echo $i; ?></a></li>
                  
                    <?php }  }  ?>
                  
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Category</h3>
              <ul class="aa-catg-nav">
              <?php 
                for ($i=0; $i <20 ; $i++) { 
                  
              
                
                ?>
                <li><a href="#"><?php echo $item_aumento[$i]->category;?></a></li>
                
                <?php } ?>
              </ul>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Marcas</h3>
              <div class="tag-cloud">
              <?php
                for ($i=0; $i <10 ; $i++) { 
                  
                ?>
                <a href="#"><?php echo $item_aumento[$i]->brand; ?></a>
               
                <?php } ?>
              </div>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <!--<h3>Shop By Price</h3>-->
              <!-- price range 
              <div class="aa-sidebar-price-range">
               <form action="">
                  <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>
                  <span id="skip-value-lower" class="example-val">30.00</span>
                 <span id="skip-value-upper" class="example-val">100.00</span>
                 <button class="aa-filter-btn" type="submit">Filter</button>
               </form>
              </div>     -->         

            </div>
            <!-- single sidebar
            <div class="aa-sidebar-widget">
              <h3>Shop By Color</h3>
              <div class="aa-color-tag">
                <a class="aa-color-green" href="#"></a>
                <a class="aa-color-yellow" href="#"></a>
                <a class="aa-color-pink" href="#"></a>
                <a class="aa-color-purple" href="#"></a>
                <a class="aa-color-blue" href="#"></a>
                <a class="aa-color-orange" href="#"></a>
                <a class="aa-color-gray" href="#"></a>
                <a class="aa-color-black" href="#"></a>
                <a class="aa-color-white" href="#"></a>
                <a class="aa-color-cyan" href="#"></a>
                <a class="aa-color-olive" href="#"></a>
                <a class="aa-color-orchid" href="#"></a>
              </div>                            
            </div>
            single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Recently Views</h3>
              <div class="aa-recently-views">
                <ul>
                <?php
               
               $toke = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijg0M2FlMDUzYjI5MGU2MzdlNzg5MTEyN2UyYmJlMmU3MGE0NTAwNmMzMzI1NTcyNDNkZDlkNWY2ODk4MjZlMDJkMjE5Y2EyMzI2YmRlMDczIn0.eyJhdWQiOiIyIiwianRpIjoiODQzYWUwNTNiMjkwZTYzN2U3ODkxMTI3ZTJiYmUyZTcwYTQ1MDA2YzMzMjU1NzI0M2RkOWQ1ZjY4OTgyNmUwMmQyMTljYTIzMjZiZGUwNzMiLCJpYXQiOjE2MjY4MTUxMjgsIm5iZiI6MTYyNjgxNTEyOCwiZXhwIjoxNjU4MzUxMTI4LCJzdWIiOiI1NDU3Iiwic2NvcGVzIjpbIm1vYmlsZSJdfQ.GWyWF8E0c9pKBtJ6FNlsb4nyxjiQJpsPvRYl-uQC9trzc6vvPYwl7J03uJJ3ojVZRoBRpVWVtPtShPO0UQ6dFenGyhzpNxGhxCCYf22W_gOoOZZl9aARwjGuhEuMT5EH2b8g8LRrKHq7gRJIiPW2EKX_7-iGD3CbLcYbVShkQTvBrbuR3V05tRyI7mtGjVOlDPT1yTyqLdPrn1kE02vTgjIPKop7JIK60_n8NZoWR0NRQdowyQI00k_KeJmPuW7J-8sqrs8BULcU-bLr4qGHNUKk2QbaCyNUXrj1sdS7Z4r_hujnOxFmzxPk9ulXf1dOAxRB4fAn4cQowt_P59ysviFlgk5o114JTd5VYeLDGy6B3DS_vFY-m_jhcRLQrUO2-ROFEI4bfCz03OEa_Gm_67QeZUVAg0Hb_SrlVwqJkbL355yiRsZE1n1ssleu1OLVe3IZAqbnHoyjhea57vp0NxgB0vQRibvjlaHCilzyhtjdE-64nPiVseHPvPiRYggzLH7YgF-OIwlLL5ksod27SQQ9mD8uVN9n6TulyAlHghMWdf7gWCsHjp_fus05Khz7jx5Nef_BfYon08M1PcI 310XaQS7NSWyZYQGtrV75zkGU9P-Uuzc9R1gs-p73A4CarqSGi1n8TLVy0Eqp8KdYb6S6ijNmCYLQQJ35RJ-OEms";
               mt_srand(time());
$aleatorio=mt_rand(1,30);
                $completa="http://api.tvc.mx/products?page=$aleatorio&withPrice&withMedia"; //inicial
              
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
                
                $resp = curl_exec($curl);
                curl_close($curl);
            
                
                            $item = json_decode($resp);
              $item_aumento = $item->data;
                  for ($i=0; $i <5 ; $i++) { 
                    $id = $item_aumento[$i]->tvc_id;
                    $res_id =$id;
                  ?>
                  <li>
                    <a href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>" class="aa-cartbox-img">

                    <?php $res_img =$item_aumento[$i]->media->main_image;
                                 $res_img_url = "http://api.tvc.mx/$res_img";
                                 $not_img="img/notavailable.jpg";
                                 if ($res_img!="") {
                                     # code...
                                     echo "<img src='$res_img_url' width='10' height='10'/> &nbsp;&nbsp;&nbsp;&nbsp;";

           
                                 }else{
                                    echo "<img src='$not_img' width='10' height='10'/> &nbsp;&nbsp;&nbsp;&nbsp;";

                                 }
                                 
                                 ?>
                    </a>
                    <div class="aa-cartbox-info">
                      <h4><a href="./product-detail.php?id=<?php
                                             echo $res_id;
                             ?>"><?php echo $item_aumento[$i]->name; ?></a></h4>
                      <p><?php 
                      
                      $res_recomendado=$item_aumento[$i]->list_price;
                     $total_rec = $res_recomendado*$usd;
                    
                        echo "MXN $$total_rec";
                      
                        ?></p>
                    </div>                    
                  </li>
                  
                  <?php } ?>                                     
                </ul>
              </div>                            
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Top Rated Products</h3>
              <div class="aa-recently-views">
                <ul>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>                    
                  </li>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>                    
                  </li>
                   <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>                    
                  </li>                                      
                </ul>
              </div>                            
            </div>
          </aside>
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

<!--modal-->
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