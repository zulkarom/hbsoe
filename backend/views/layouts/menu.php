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
            
            ['label' => 'Dashboard', 'level' => 1, 'url' => ['/site/index'], 'icon' => 'fa fa-chart-pie', 'children' => []],
            
            ['label' => 'Announcement', 'level' => 1, 'url' => ['/announcement/index'], 'icon' => 'fa fa-bullhorn', 'children' => []],
            
            ['label' => 'Senarai Pengguna', 'level' => 2 , 'icon' => 'fa fa-user', 'children' => [
                ['label' => 'Usahawan', 'url' => ['/usahawan/index'], 'icon' => 'fa fa-circle'],
                ['label' => 'Pembekal', 'url' => ['/supplier/index'], 'icon' => 'fa fa-circle'],
            ]],
            
            ['label' => 'General', 'level' => 2 , 'icon' => 'fa fa-cog', 'children' => [
                ['label' => 'First', 'url' => ['/city'], 'icon' => 'fa fa-circle'],
                ['label' => 'Second', 'url' => ['/client/prospect-type'], 'icon' => 'fa fa-circle'],
                ['label' => 'Third', 'url' => ['/staff/grade'], 'icon' => 'fa fa-circle'],
            
            ]],
        
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