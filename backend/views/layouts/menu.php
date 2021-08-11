<?php 

use yii\helpers\Url;
use common\widgets\Menu_crypto;

?> 
<nav class="sidebar dark_sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="index.html"><img src="<?= $dirAssests?>/img/logo_white.png" alt=""></a>
        <a class="small_logo" href="index.html"><img src="<?= $dirAssests?>/img/mini_logo.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu"> 
                

    <?=Menu_crypto::widget(
    [
            
            ['label' => \Yii::t('app', 'Dashboard'), 'level' => 1, 'url' => ['/site/index'], 'icon' => $dirAssests.'/img/menu-icon/1.svg', 'children' => []],
        
        ['label' => \Yii::t('app', 'Entrepreneurs'), 'level' => 1, 'url' => ['/entrepreneur/index'], 'icon' => $dirAssests.'/img/menu-icon/4.svg', 'children' => []],
        
        ['label' => \Yii::t('app', 'Suppliers'), 'level' => 1, 'url' => ['/supplier/index'], 'icon' => $dirAssests.'/img/menu-icon/4.svg', 'children' => []],
        
        ['label' => \Yii::t('app', 'Sectors'), 'level' => 2 , 'icon' => $dirAssests.'/img/menu-icon/17.svg', 'children' => [
             ['label' => 'Entrepreneurs', 'url' => ['/sector-entrepreneur/index'], 'icon' => 'fa fa-circle'],
             ['label' => 'Suppliers', 'url' => ['/sector-supplier/index'], 'icon' => 'fa fa-circle'],
            ['label' => 'Categories', 'url' => ['/sector/index'], 'icon' => 'fa fa-circle'],
        
         ]],
        
        
      //  ['label' => \Yii::t('app', 'Sectors'), 'level' => 1, 'url' => ['/sector/index'], 'icon' => $dirAssests.'/img/menu-icon/17.svg', 'children' => []],
        ['label' => \Yii::t('app', 'Competency'), 'level' => 1, 'url' => ['/competency/index'], 'icon' => $dirAssests.'/img/menu-icon/icon.svg', 'children' => []],
        
        ['label' => \Yii::t('app', 'Social Impact'), 'level' => 1, 'url' => ['/social-impact/index'], 'icon' => $dirAssests.'/img/menu-icon/14.svg', 'children' => []],
        
        ['label' => \Yii::t('app', 'Economics'), 'level' => 1, 'url' => ['/economic/index'], 'icon' => $dirAssests.'/img/menu-icon/2.svg', 'children' => []],
        ['label' => \Yii::t('app', 'Agency'), 'level' => 1, 'url' => ['/agency/index'], 'icon' => $dirAssests.'/img/menu-icon/10.svg', 'children' => []],
        ['label' => \Yii::t('app', 'Module Program'), 'level' => 1, 'url' => ['/site/xx'], 'icon' => $dirAssests.'/img/menu-icon/Pages.svg', 'children' => []],
            

            
            // ['label' => 'General', 'level' => 2 , 'icon' => 'fa fa-cog', 'children' => [
            //     ['label' => 'First', 'url' => ['/city'], 'icon' => 'fa fa-circle'],
            //     ['label' => 'Second', 'url' => ['/client/prospect-type'], 'icon' => 'fa fa-circle'],
            //     ['label' => 'Third', 'url' => ['/staff/grade'], 'icon' => 'fa fa-circle'],
            
            // ]],
        
        ]
    
    )?>

                    
            
                    
    </ul>
</nav>
<?php 
/* 
$this->registerJs('

$(".has-treeview").click(function(){
    
    if($(this.hasClass("menu-open") == false){
        $(".has-treeview").each(function(i, obj) {
            $(this).removeClass("menu-open");
        });
    }
    
    
});

');


 */
?>