<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\EntrepreneurSupplier */

$this->title = 'View Supplier';
$this->params['breadcrumbs'][] = ['label' => 'Entrepreneur Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="entrepreneur-supplier-view">


   <div class="card">
    <div class="card-body">
    
    
    
    <div class="row">
	<div class="col-md-3">    <img width="100%" src="<?php echo Url::to(['/entrepreneur/profile/supplier-image', 'id' => $model->id])?>" /></div>
	<div class="col-md-6">
	
	
    
<article class="item" data-key="<?= $model->id; ?>">
    <h5 class="title">
    <?= Html::a(Html::encode($model->biz_name), Url::to(['/entrepreneur/supplier/view', 'id' => $model->id])) ?>
    </h5>

    <div class="item-excerpt">
    <p><i class="fa fa-phone"></i> <?= Html::encode($model->phone)?></p>
     
     
    <p><i class="fa fa-map-marker-alt"></i> <?= Html::encode($model->address)?>, <?= Html::encode($model->cityModel->daerah_name)?>, 
     <?= Html::encode($model->stateModel->negeri_name)?></p>
     
    </div>
</article>


<br />
    

<?php 

if($model->sectorSuppliers){
    echo '<h5 class="title">
  Sector
    </h5>

<ul>';
    foreach($model->sectorSuppliers as $sector){
        echo '<li><i class="fa fa-check-circle"></i>  '.$sector->sector->sector_name.': '. $sector->description .' </li>'; 
    }
    
    echo '</ul>';
}

?>
	
	
	
	</div>
</div>
    
    
    




  </div>
    </div>



</div>
<br />

    <p>
        <?= Html::a('Add To My Supplier', ['add-supplier', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
</p>