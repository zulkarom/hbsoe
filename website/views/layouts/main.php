<?php
use website\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
$dirAssests=Yii::$app->assetManager->getPublishedUrl('@website/views/myassets');
//hai

?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
    <title>HubSoe</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">        
        
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
        <?php $this->head() ?>
        <?php $this->registerCsrfMetaTags() ?>
 
   </head>

   <body  data-spy="scroll" data-target="#main-menu">
    <?php $this->beginBody() ?>

   
      
   <!--Start Navigation-->
        <header id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-bars"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--Start Logo -->
                            <div class="logo-nav">
                                <a href="index.html">
                                    <img src="<?= $dirAssests?>/images/logo.png" alt="Company logo" />
                                </a>
                            </div>
                            <!--End Logo -->
                            <div class="clear-toggle"></div>
                            <div id="main-menu" class="collapse scroll navbar-right">
                                <ul class="nav">
                                
                                    <li class="active"> <a href="#home">Home</a> </li>
                      
                            
                                    <li> <a href="#services">Services</a> </li>
                                    
                                    <li> <a href="<?php echo Url::to(['member/user/login'])?>">Login</a> </li>
                                    
                                     <li> <a href="<?php echo Url::to(['member/user/register'])?>">Register</a> </li>
                                  
             
                                        
                                </ul>
                            </div><!-- end main-menu -->
                        </div>
                    </div>
                </div>
            </header>
    <!--End Navigation-->

      
        <!-- Start Slider  -->
        <section id="home" class="home">
             <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    <li class="first">
                        <div class="slider-text-wrapper">  
                            <div class="container">
                                <div class="big">HubSoE </div>          
                                <div class="small">Hub for Social Entrepreneur</div>
                                 <a href="<?php echo Url::to(['member/user/login'])?>" class="middle btn btn-white">JOIN US NOW!</a> 
                            </div>       
                        </div>
                        <img src="<?= $dirAssests?>/images/slider/1.jpg" alt="">
                    </li>
                    
                    <li class="secondary">
                        <div class="slider-text-wrapper"> 
                            <div class="container">                       
                                <div class="big">HubSoE </div>          
                                <div class="small">Hub for Social Entrepreneur</div>
                                <a href="<?php echo Url::to(['member/user/login'])?>" class="middle btn btn-white">JOIN US NOW!</a> 
                            </div>
                         </div>
                        <img src="<?= $dirAssests?>/images/slider/2.jpg" alt="">
                    </li>
                    
   
                </ul>
            </div>
        </section>
          <!-- End Slider  -->


 
  <!--Start Services-->
   <section id="services" class="section">
        <div class="container">
            <div class="row">
            
                 <div class="title-box text-center">
                    <h2 class="title">Services</h2>
                 </div>
              
               <!--Services Item-->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-basket"></i> </div> 
                       <div class="services-desc">
                          <h4>Social Entrepreneurship</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
                <!--End services Item-->
                
                <!--Services Item-->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-shield"></i> </div> 
                       <div class="services-desc">
                          <h4>Collaboration</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
               <!--End services Item-->
               
               <!--Services Item-->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-hotairballoon"></i> </div> 
                       <div class="services-desc">
                          <h4>Networking</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
                <!--End services Item-->
                
              
              
            </div> <!--/.row-->
        </div> <!--/.container-->
   </section> 
  <!--End Services-->

 
  
 
    <!--Start clients-->
    <section id="clients" class="section">
           <div class="container">
               <div class="row">
               
            <div class="title-box text-center">
                <h2 class="title">Our Partners</h2>
             </div>
                
                   <div class="clients-carousel">
                   
                       <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                    <img src="<?= $dirAssests?>/images/clients-logo/client1.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                       <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                      <img src="<?= $dirAssests?>/images/clients-logo/client2.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                        <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                      <img src="<?= $dirAssests?>/images/clients-logo/client3.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                        <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                     <img src="<?= $dirAssests?>/images/clients-logo/client4.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                       <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                      <img src="<?= $dirAssests?>/images/clients-logo/client2.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                       <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                      <img src="<?= $dirAssests?>/images/clients-logo/client5.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                        <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                     <img src="<?= $dirAssests?>/images/clients-logo/client4.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                        <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                     <img src="<?= $dirAssests?>/images/clients-logo/client1.png" alt="" />
                                </figure>
                            </a>
                        </div>
                 </div>
               </div> <!--/.row-->
         </div> <!--/.container-->
    </section>
   <!--End clients-->
   

   
   
   <!--Start Footer-->
   <footer>
       <div class="container">
           <div class="row">
               <!--Start copyright-->
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="copyright"><p>Copyright © HubSoE 2021 All Rights reserved </a>
                 </p></div>
               </div>
               <!--End copyright-->
               
               <!--start social icons-->
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="social-icons">
                       <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                       </ul>
                    </div>
               </div>
               <!--End social icons-->
           </div> <!-- /.row-->
       </div> <!-- /.container-->
   </footer>
   <!--End Footer-->

   <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    
 </body>
</html>



    <?php $this->endBody() ?>
   </body>
</html>

<?php $this->endPage() ?>