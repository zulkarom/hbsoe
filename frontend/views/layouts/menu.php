<?php 

use yii\helpers\Url;
use common\widgets\Menu;

?> 
  <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    	<li class="nav-devider"></li>
                        <?=Menu::widget([
			['label' => 'Dashboard', 'level' => 1, 'url' => ['/site/index'], 'icon' => 'mdi mdi-gauge', 'children' => []],

			['label' => 'Maklumat Usahawan', 'level' => 1,'url' => ['/usahawan/profile/index'], 'icon' => 'mdi mdi-settings-box'],			
		
		]
	
	)?>
                       
                    </ul>
                </nav>