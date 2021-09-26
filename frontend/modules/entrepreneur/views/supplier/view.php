<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use kartik\widgets\ActiveForm;
use voime\GoogleMaps\Map;
/* @var $this yii\web\View */
/* @var $model backend\models\EntrepreneurSupplier */

$this->title = \Yii::t('app', 'View Supplier');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Supplier'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$model->s_latitude = $model->latitude;
$model->s_longitude = $model->longitude;

?>
<div class="entrepreneur-supplier-view">


   <div class="card">
    <div class="card-body">
    
    
    
    <div class="row">
	<div class="col-md-2">    <img width="100%" src="<?php echo Url::to(['/entrepreneur/profile/supplier-image', 'id' => $model->id])?>" /></div>
	<div class="col-md-4">
	
	
    
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
    <div class="col-md-6">
        <label><?=\Yii::t('app', 'Location')?></label>
        <?= Html::textInput('text', $model->location, ['class' => 'form-control', 'readonly'=> true])?>
        <br/>
        <?php echo Map::widget([
            'apiKey'=> 'AIzaSyCdaIFmGh8LWEfbXln7BkPnMfB1RDd9Rj4',
            'width' => '760px',
            'height' => '450px',
            'center' => [$model->s_latitude, $model->s_longitude],
            'markers' => [
                ['position' => [$model->s_latitude, $model->s_longitude],
                'content' => '<strong><b>'.$model->biz_name.'</b></strong>'],
            ]
            
        ]);?>
    </div>
</div>
    
    
    




  </div>
    </div>



</div>
<br />

    <p>
        <?= Html::a(\Yii::t('app', 'Add To My Supplier'), ['add-supplier', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
</p>