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
            
            ['label' => 'Dashboard', 'level' => 1, 'url' => ['/site/index'], 'icon' => $dirAssests.'/img/menu-icon/1.svg', 'children' => []],
            
            // ['label' => 'Announcement', 'level' => 1, 'url' => ['/announcement/index'], 'icon' => 'fa fa-bullhorn', 'children' => []],
            
            ['label' => 'Maklumat Supplier', 'level' => 2 , 'icon' => $dirAssests.'/img/menu-icon/4.svg', 'children' => [
                ['label' => 'Maklumat Peribadi', 'url' => ['/supplier/profile/index'], 'icon' => 'fa fa-circle'],
            ]],
            
            // ['label' => 'General', 'level' => 2 , 'icon' => 'fa fa-cog', 'children' => [
            //     ['label' => 'Example 1', 'url' => ['/city'], 'icon' => 'fa fa-circle'],
            //     ['label' => 'Example 2', 'url' => ['/client/prospect-type'], 'icon' => 'fa fa-circle'],
            //     ['label' => 'Example 3', 'url' => ['/staff/grade'], 'icon' => 'fa fa-circle'],
            
            // ]],
        
        ]
    
    )?>

                    
                    
                    
<br /><br /><br /><br /><br /><br />
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
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