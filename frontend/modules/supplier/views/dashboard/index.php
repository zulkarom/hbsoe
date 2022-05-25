<?php

/* @var $this yii\web\View */
use backend\models\SectorSupplier;
use backend\models\EntrepreneurSupplier;

$this->title = \Yii::t('app', 'Dashboard');
?>



    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">

            <div class="row ">
                <div class="col-xl-12">
                    <div class="white_card  mb_30">
      
                        <div class="white_card_body anlite_table p-0">
                            <div class="row">
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        <h4>Number of Sectors</h4>
                                        <h3><span class="counter"><?php echo SectorSupplier::countSectorSupplier()?></span> </h3>
                                        <!-- <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        <h4>Number of Clients</h4>
                                        <h3><span class="counter"><?php echo EntrepreneurSupplier::countClient()?></span> </h3>
                                        <!-- <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div> -->
                                    </div>
                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
       
   
                
                
                
                
                
                
                
                
            </div>
        </div>
    </div>



