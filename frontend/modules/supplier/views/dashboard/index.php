<?php

/* @var $this yii\web\View */
use backend\models\Supplier;
use backend\models\Competency;
use backend\models\SocialImpact;
use backend\models\Economic;
use backend\models\Agency;
use backend\models\Program;

$this->title = \Yii::t('app', 'Dashboard');
?>



    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">

            <div class="row ">
                <div class="col-xl-12">
                    <div class="white_card  mb_30">
      
                        <div class="white_card_body anlite_table p-0">
                            <div class="row">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        <h4>Number of Competency</h4>
                                        <h3><span class="counter"><?php echo Competency::countCompetencyUser()?></span> </h3>
                                        <!-- <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        <h4>Number of Social Impact</h4>
                                        <h3><span class="counter"><?php echo SocialImpact::countSocialImpactUser()?></span> </h3>
                                        <!-- <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        <h4>Number of Economics</h4>
                                        <h3><span class="counter"><?php echo Economic::countEconomicUser()?></span> </h3>
                                        <!-- <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        <h4>Number of Agency</h4>
                                        <h3><span class="counter"><?php echo Agency::countAgencyUser()?></span> </h3>
                                        <!-- <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_analite_content">
                                        <h4>Number of Program</h4>
                                        <h3><span class="counter"><?php echo Program::countProgramUser()?></span> </h3>
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



