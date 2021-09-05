<?php
use backend\models\Entrepreneur;
use backend\models\Supplier;
use backend\models\Competency;
use backend\models\SocialImpact;
use backend\models\Economic;
use backend\models\Agency;
use backend\models\Program;
/* @var $this yii\web\View */

$this->title = 'Admin Dashboard';
?>



    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <!-- page title  -->
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="mb-0" >Dashboard</h3>
                            <p>Dashboard/Crypto currenct</p>
                        </div>
                        <div class="monitor_list_widget">
                            <div class="simgle_monitor_list">
                                <div class="simgle_monitor_count d-flex align-items-center">
                                    <span>Number of Beneficiaries</span>
                                    <div id="monitor_1"></div>
                                </div>
                                <h4 class="counter"><?php echo Entrepreneur::countEntrepreneur()?></h4>
                            </div>
                            <div class="simgle_monitor_list">
                                <div class="simgle_monitor_count d-flex align-items-center">
                                    <span>Number of Suppliers</span>
                                    <div id="monitor_2"></div>
                                </div>
                                <h4 ><span class="counter"><?php echo Supplier::countSupplier()?></span> </h4>
                            </div>
                            <!-- <div class="simgle_monitor_list">
                                <div class="simgle_monitor_count d-flex align-items-center">
                                    <span>Purchase</span>
                                    <div id="monitor_3"></div>
                                </div>
                                <h4 >$ <span class="counter">451.6 </span>M </h4>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-12">
                    <div class="white_card  mb_30">
                        <div class="white_card_header ">
                            <div class="box_header m-0">
                                <ul class="nav  theme_menu_dropdown">
                                    <li class="nav-item">
                                      <a class="nav-link active" href="#">Analytics</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Cryptocurrency</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Campaign</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="#"> Ecommarce Analytics</a>
                                          <a class="dropdown-item" href="#"> Sales</a>
                                          <a class="dropdown-item" href="#"> Performance</a>
                                        </div>
                                    </li>
                                  </ul>
                                  <div class="button_wizerd">
                                      <a href="#" class="white_btn mr_5">ToDo</a>
                                      <a href="#" class="white_btn">Settings</a>
                                  </div>
                            </div>
                        </div>
                        <div class="white_card_body anlite_table p-0">
                            <div class="row">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        <h4>Number of Competency</h4>
                                        <h3><span class="counter"><?php echo Competency::countCompetency()?></span> </h3>
                                        <!-- <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        <h4>Number of Social Impact</h4>
                                        <h3><span class="counter"><?php echo SocialImpact::countSocialImpact()?></span> </h3>
                                        <!-- <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        <h4>Number of Economics</h4>
                                        <h3><span class="counter"><?php echo Economic::countEconomic()?></span> </h3>
                                        <!-- <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        <h4>Number of Agency</h4>
                                        <h3><span class="counter"><?php echo Agency::countAgency()?></span> </h3>
                                        <!-- <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        <h4>Number of Program</h4>
                                        <h3><span class="counter"><?php echo Program::countProgram()?></span> </h3>
                                        <!-- <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This year</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
       
   
                
                
                
                
                
                
                
                
            </div>
        </div>
    </div>


