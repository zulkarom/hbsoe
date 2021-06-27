<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
use backend\assets\CryptoAsset;
use backend\assets\AppAsset;

AppAsset::register($this);
CryptoAsset::register($this);


$dirAssests = Yii::$app->assetManager->getPublishedUrl('@backend/assets/crypto');


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- <title>BitCrypto</title> -->
    <title><?= Html::encode($this->title) ?></title>

    <link rel="icon" href="<?= $dirAssests?>/img/mini_logo.png" type="image/png">

    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>

</head>

<body class="crm_body_bg">
<?php $this->beginBody() ?>


    <?=$this->render('menu', [    
        'dirAssests' => $dirAssests,
    ]);
    ?>

    <section class="main_content dashboard_part large_header_bg">
    <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="line_icon open_miniSide d-none d-lg-block">
                        <img src="<?= $dirAssests?>/img/line_img.png" alt="">
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a class="CHATBOX_open nav-link-notify" href="#"> <img src="<?= $dirAssests?>/img/icon/msg.svg" alt="">   </a>
                            </li>
                            <li>
                                <a class="bell_notification_clicker nav-link-notify" href="#"> <img src="<?= $dirAssests?>/img/icon/bell.svg" alt="">
                                    <!-- <span>2</span> -->
                                </a>
                                <!-- Menu_NOtification_Wrap  -->
                            <div class="Menu_NOtification_Wrap">
                                <div class="notification_Header">
                                    <h4>Notifications</h4>
                                </div>
                                <div class="Notification_body">
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="<?= $dirAssests?>/img/staf/2.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#"><h5>Cool Marketing </h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="<?= $dirAssests?>/img/staf/4.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#"><h5>Awesome packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="<?= $dirAssests?>/img/staf/3.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#"><h5>what a packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="<?= $dirAssests?>/img/staf/2.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#"><h5>Cool Marketing </h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="<?= $dirAssests?>/img/staf/4.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#"><h5>Awesome packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="<?= $dirAssests?>/img/staf/3.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#"><h5>what a packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nofity_footer">
                                    <div class="submit_button text-center pt_20">
                                        <a href="#" class="btn_1 green">See More</a>
                                    </div>
                                </div>
                            </div>
                            <!--/ Menu_NOtification_Wrap  -->
                            </li>
                            
                        </div>
                        <div class="profile_info d-flex align-items-center">
                            <div class="profile_thumb mr_20">
                                <img src="<?= $dirAssests?>/img/transfer/4.png" alt="#">
                            </div>
                            <div class="author_name">
                                <h4 class="f_s_15 f_w_500 mb-0">Jiue Anderson</h4>
                                <p class="f_s_12 f_w_400">Manager</p>
                            </div>
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>Manager</p>
                                    <h5>Jiue Anderson</h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="#">My Profile </a>
                                    <a href="#">Settings</a>
                                    <a href="#">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ menu  -->
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
                                    <span>Purchase</span>
                                    <div id="monitor_1"></div>
                                </div>
                                <h4 class="counter">6,250</h4>
                            </div>
                            <div class="simgle_monitor_list">
                                <div class="simgle_monitor_count d-flex align-items-center">
                                    <span>Purchase</span>
                                    <div id="monitor_2"></div>
                                </div>
                                <h4 >$ <span class="counter">55,250</span> </h4>
                            </div>
                            <div class="simgle_monitor_list">
                                <div class="simgle_monitor_count d-flex align-items-center">
                                    <span>Purchase</span>
                                    <div id="monitor_3"></div>
                                </div>
                                <h4 >$ <span class="counter">451.6 </span>M </h4>
                            </div>
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
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Total Income</h4>
                                        <h3>$ <span class="counter">14,025</span> </h3>
                                        <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This year</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Sessions</h4>
                                        <h3><span class="counter">2025</span> </h3>
                                        <div class="d-flex">
                                            <div>3.78<i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Ethereum Wallet</h4>
                                        <h3><span class="counter">8025</span> </h3>
                                        <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Number of Clients</h4>
                                        <h3><span class="counter">5645</span> </h3>
                                        <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left mb_10">
                            <h3 class="mb-0" >Overview</h3>
                            <p>Statistics, Predictive Analytics Data Visualization, Big Data Analytics, etc.</p>
                        </div>
                        <div class="page_title_right">
                            <div class="dropdown CRM_dropdown  mr_5 mb_10">
                                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    14 March 2020
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Today</a>
                                  <a class="dropdown-item" href="#">This Week</a>
                                  <a class="dropdown-item" href="#">Last week</a>
                                </div>
                              </div>
                            <a href="#" class="white_btn mb_10">Export</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="white_card   card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0 flex-wrap">
                                <div class="main-title mb_10">
                                    <h3 class="m-0">254856 USD </h3>
                                    <p>125648 USD (20%)</p>
                                </div>
                                <div class="view_btns">
                                    <a href="#" class="mr_5 mb_10  small_blue_btn active">All</a>
                                    <a href="#" class="mr_5 mb_10  small_blue_btn active">1M</a>
                                    <a href="#" class="mr_5 mb_10  small_blue_btn">6M</a>
                                    <a href="#" class="mr_5 mb_10  small_blue_btn">1Y</a>
                                    <a href="#" class="mr_5 mb_10  small_blue_btn">YTD</a>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body"  >
                            <div id="areaLine_chart1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Your Portfolio</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                          <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="row justify-content-center mb_30  ">
                                <div class="col-12 text-center">
                                    <h4 class="f_s_22 f_w_700 mb-0">$63411.00</h4>
                                    <p class="f_s_11 f_w_400" >Total Balance</p>
                                </div>
                            </div>
                            <div class="social_media_list">
                                <div class="single_media d-flex justify-content-between align-items-center">
                                    <span class="mediaName"> <img src="<?= $dirAssests?>/img/currency/1.svg" alt=""> Bitcoin</span>
                                    <span class="earning_amount">
                                        <h4>0.000242 BTC</h4>
                                        <p>0.125 USD</p>    
                                    </span>
                                </div>
                                <div class="single_media d-flex justify-content-between align-items-center">
                                    <span class="mediaName"> <img src="<?= $dirAssests?>/img/currency/2.svg" alt=""> Litecoin</span>
                                    <span class="earning_amount">
                                        <h4>0.000242 BTC</h4>
                                        <p>0.125 USD</p>    
                                    </span>
                                </div>
                                <div class="single_media d-flex justify-content-between align-items-center">
                                    <span class="mediaName"> <img src="<?= $dirAssests?>/img/currency/3.svg" alt=""> Ripple</span>
                                    <span class="earning_amount">
                                        <h4>0.000242 BTC</h4>
                                        <p>0.125 USD</p>    
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Exchange</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                          <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="exchange_widget">
                                <form  name="myform" class="currency_validate">
                                    <div class="form-group">
                                        <label >Currency</label>
                                        <div class="input-group ">
                                            <select  name="currency" class="form-control nice_Select">
                                                <option data-display="Bitcoin" value="bitcoin">Bitcoin</option>
                                                <option value="litecoin">Litecoin</option>
                                            </select>
                                            <input type="text" name="usd_amount" class="form-control" value="125.00 USD">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Payment Method</label>
                                        <div class="input-group ">
                                            <select name="currency" class="form-control nice_Select">
                                                <option data-display="Bitcoin" value="bitcoin">Bitcoin</option>
                                                <option value="litecoin">Litecoin</option>
                                            </select>
                                            <input type="text" name="usd_amount" class="form-control" value="125.00 USD">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Enter your amount</label>
                                        <div class="input-group">
                                            <input type="text" name="currency_amount" class="form-control" placeholder="0.0214 BTC">
                                            <input type="text" name="usd_amount" class="form-control" placeholder="125.00 USD">
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <p class="mb-0">Monthly Limit</p>
                                            <h6 class="mb-0">$49750 remaining</h6>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn_1 w-100">Exchange Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8">
                    <div class="white_card mb_30 card_height_100">
                        <div class="white_card_header ">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Recent Activities</h3>
                                </div>
                                <a href="#">
                                    <p>View all</p>
                                </a>
                            </div>
                        </div>
                        <div class="white_card_body pt-0">
                            <div class="QA_section">
                                <div class="QA_table mb-0 transaction-table">
                                    <!-- table-responsive -->
                                    <div class="table-responsive">
                                        <table class="table  ">
                                            <tbody>
                                                <tr>
                                                    <td scope="row"> 
                                                        <span class="sold-thumb"><i class="ti-arrow-up"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">Sold</span>
                                                    </td>
                                                    <td> <img class="small_img" src="img/currency/1.svg" alt=""> Bitcoin </td>
                                                    <td>Using - Bank......4585 </td>
                                                    <td>-0.000234 BTC</td>
                                                    <td>-0.454 USD</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"> 
                                                        <span class="buy-thumb"><i class="ti-arrow-down"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success">Buy</span>
                                                    </td>
                                                    <td> <img class="small_img" src="img/currency/2.svg" alt=""> Bitcoin </td>
                                                    <td>Using - Bank......4585 </td>
                                                    <td>-0.000234 BTC</td>
                                                    <td>-0.454 USD</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"> 
                                                        <span class="sold-thumb"><i class="ti-arrow-up"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">Sold</span>
                                                    </td>
                                                    <td> <img class="small_img" src="img/currency/4.svg" alt=""> Bitcoin </td>
                                                    <td>Using - Bank......4585 </td>
                                                    <td>-0.000234 BTC</td>
                                                    <td>-0.454 USD</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"> 
                                                        <span class="sold-thumb"><i class="ti-arrow-up"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">Sold</span>
                                                    </td>
                                                    <td> <img class="small_img" src="img/currency/3.svg" alt=""> Bitcoin </td>
                                                    <td>Using - Bank......4585 </td>
                                                    <td>-0.000234 BTC</td>
                                                    <td>-0.454 USD</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"> 
                                                        <span class="sold-thumb"><i class="ti-arrow-up"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">Sold</span>
                                                    </td>
                                                    <td> <img class="small_img" src="img/currency/1.svg" alt=""> Bitcoin </td>
                                                    <td>Using - Bank ......4585 </td>
                                                    <td>-0.000234 BTC</td>
                                                    <td>-0.454 USD</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="white_card mb_30 card_height_100">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Quick Transfer</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                          <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body pb-0">
                            <div class="recent_transfer_wrapper">
                                <div class="transfer_thumb_conatnt">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="f_s_14 f_w_400 mb_10" >Recent Cantact</p>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a href="#">
                                                <p class="f_s_14 f_w_400 mb_10" >View More</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="single_transfer_pro text-center">
                                                <div class="thumb">
                                                    <img src="<?= $dirAssests?>/img/transfer/1.png" alt="">
                                                </div>
                                                <h5 class="f_s_14 f_w_400 mb-0">Samuel</h5>
                                                <p class="f_s_11 f_w_400">@samuel15</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single_transfer_pro text-center">
                                                <div class="thumb">
                                                    <img src="<?= $dirAssests?>/img/transfer/2.png" alt="">
                                                </div>
                                                <h5 class="f_s_14 f_w_400 mb-0">Samuel</h5>
                                                <p class="f_s_11 f_w_400">@samuel15</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single_transfer_pro text-center">
                                                <div class="thumb">
                                                    <img src="<?= $dirAssests?>/img/transfer/3.png" alt="">
                                                </div>
                                                <h5 class="f_s_14 f_w_400 mb-0">Samuel</h5>
                                                <p class="f_s_11 f_w_400">@samuel15</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single_transfer_pro text-center">
                                                <div class="thumb">
                                                    <img src="<?= $dirAssests?>/img/transfer/4.png" alt="">
                                                </div>
                                                <h5 class="f_s_14 f_w_400 mb-0">Samuel</h5>
                                                <p class="f_s_11 f_w_400">@samuel15</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="eth_amount_number text-center">
                                                <p>Amount ETH</p>
                                                <h3>8,124.52</h3>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <a href="#" class="btn_1 w-100">Send Money</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 ">
                    <div class="white_card mb_30 card_height_100">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Revenue Statistics</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                          <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body pb-0">
                            <div id="bar_chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="white_card mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Earning</h3>
                                        </div>
                                        <div class="erning_btn d-flex">
                                            <a href="#" class="small_blue_btn radius_0 border-right-0">Month</a>
                                            <a href="#" class="small_blue_btn radius_0">Week</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="white_card_body">
                                    <div class="QA_section">
                                        <div class="QA_table mb-0">
                                            <!-- table-responsive -->
                                            <table class="table lms_table_active2  ">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">Currency</th>
                                                        <th scope="col">Plateform</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td> <img src="<?= $dirAssests?>/img/currency/1.svg" alt=""> </td>
                                                        <td>bitcoin.com</td>
                                                        <td>Using - Bank</td>
                                                        <td>-0.454 USD</td>
                                                        <td>$25.00</td>
                                                        <td><a href="#" class="status_btn pending_btn">Pending</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td> <img src="<?= $dirAssests?>/img/currency/2.svg" alt=""> </td>
                                                        <td>bitcoin.com</td>
                                                        <td>Using - Bank</td>
                                                        <td>-0.454 USD</td>
                                                        <td>$25.00</td>
                                                        <td><a href="#" class="status_btn pending_btn">Pending</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td> <img src="<?= $dirAssests?>/img/currency/3.svg" alt=""> </td>
                                                        <td>bitcoin.com</td>
                                                        <td>Using - Bank</td>
                                                        <td>-0.454 USD</td>
                                                        <td>$25.00</td>
                                                        <td><a href="#" class="status_btn pending_btn">Pending</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td> <img src="<?= $dirAssests?>/img/currency/4.svg" alt=""> </td>
                                                        <td>bitcoin.com</td>
                                                        <td>Using - Bank</td>
                                                        <td>-0.454 USD</td>
                                                        <td>$25.00</td>
                                                        <td><a href="#" class="status_btn">Success</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Exchange</h3>
                                        </div>
                                        <div class="header_more_tool">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                                  <i class="ti-more-alt"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                                  <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                                  <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                                  <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                                  <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="white_card_body">
                                    <div class="Activity_timeline">
                                        <ul>
                                            <li>
                                                <div class="activity_bell"></div>
                                                <div class="timeLine_inner d-flex align-items-center">
                                                    <div class="activity_wrap">
                                                        <h6>5 min ago</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="activity_bell "></div>
                                                <div class="timeLine_inner d-flex align-items-center">
                                                    <div class="activity_wrap">
                                                        <h6>6 min ago</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="activity_bell bell_lite"></div>
                                                <div class="timeLine_inner d-flex align-items-center">
                                                    <div class="activity_wrap">
                                                        <h6>7 min ago</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="activity_bell bell_lite"></div>
                                                <div class="timeLine_inner d-flex align-items-center">
                                                    <div class="activity_wrap">
                                                        <h6>8 min ago</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="white_card card_height_100 mb_30">
                                <div class="date_picker_wrapper">
                                    <div class="default-datepicker">
                                        <div class="datepicker-here" data-language='en'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="white_card mb_30">
                        <div class="white_card_header mb_20 pb-0">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Market News</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body ">
                            <div class="news_widget_wrap">
                                <div class="single_news mb_20">
                                    <div class="thumb mb_20">
                                        <a href="#"><img class="img-fluid" src="img/news/1.svg" alt=""></a>
                                    </div>
                                    <a href="#">
                                        <p class="f_s_18 f_w_400" >Aorem psum dolor sit amet, consect
                                            adipisci Quisque scelerisq.</p>
                                    </a>
                                </div>
                                <div class="single_news mb_20">
                                    <div class="thumb mb_20">
                                        <a href="#"><img class="img-fluid" src="img/news/2.svg" alt=""></a>
                                    </div>
                                    <a href="#">
                                        <p class="f_s_18 f_w_400" >Aorem psum dolor sit amet, consect
                                            adipisci Quisque scelerisq.</p>
                                    </a>
                                </div>
                                <div class="single_news mb_20">
                                    <div class="thumb mb_20">
                                        <a href="#"><img class="img-fluid" src="img/news/1.svg" alt=""></a>
                                    </div>
                                    <a href="#">
                                        <p class="f_s_18 f_w_400" >Aorem psum dolor sit amet, consect
                                            adipisci Quisque scelerisq.</p>
                                    </a>
                                </div>
                                <div class="single_news mb_20">
                                    <div class="thumb mb_20">
                                        <a href="#"><img class="img-fluid" src="img/news/2.svg" alt=""></a>
                                    </div>
                                    <a href="#">
                                        <p class="f_s_18 f_w_400" >Aorem psum dolor sit amet, consect
                                            adipisci Quisque scelerisq.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- footer part -->
<div class="footer_part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_iner text-center">
                    <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> DashboardPack</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- ### CHAT_MESSAGE_BOX   ### -->

<div class="CHAT_MESSAGE_POPUPBOX">
    <div class="CHAT_POPUP_HEADER">
    <div class="MSEESAGE_CHATBOX_CLOSE">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z" fill="white"/>
    </svg>

    </div>
        <h3>Chat with us</h3>
        <div class="Chat_Listed_member">
            <ul>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                         <img src="<?= $dirAssests?>/img/staf/1.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                         <img src="<?= $dirAssests?>/img/staf/2.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                         <img src="<?= $dirAssests?>/img/staf/3.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                         <img src="<?= $dirAssests?>/img/staf/4.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                         <img src="<?= $dirAssests?>/img/staf/5.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <div class="more_member_count">
                                <span>90+</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="CHAT_POPUP_BODY">
        <p class="mesaged_send_date">
        Sunday, 12 January
        </p>
    
    <div class="CHATING_SENDER">
        <div class="SMS_thumb">
            <img src="<?= $dirAssests?>/img/staf/1.png" alt="">
        </div>
        <div class="SEND_SMS_VIEW">
            <P>Hi! Welcome .
            How can I help you?</P>
        </div>
    </div>
    
    <div class="CHATING_SENDER CHATING_RECEIVEr">
        
        <div class="SEND_SMS_VIEW">
            <P>Hello</P>
        </div>
        <div class="SMS_thumb">
            <img src="<?= $dirAssests?>/img/staf/1.png" alt="">
        </div>
    </div>
    
    </div>
    <div class="CHAT_POPUP_BOTTOM">
        <div class="chat_input_box d-flex align-items-center">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Write your message" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn " type="button"> 
                        <!-- svg      -->
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z" fill="#707DB7"/>
                        </svg>

                        <!-- svg      -->
                    </button>
                    <button class="btn" type="button">
                         <!-- svg  -->
                         <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z" fill="#707DB7"/>
                        </svg>

                         <!-- svg  -->
                         <input type="file">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/### CHAT_MESSAGE_BOX  ### -->

<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>