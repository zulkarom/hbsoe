<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use kartik\widgets\ActiveForm;
use voime\GoogleMaps\Map;
/* @var $this yii\web\View */
/* @var $model backend\models\EntrepreneurSupplier */

$this->title = 'View '.\Yii::t('app', 'Client');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Clients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$modelEnt = $model->entrepreneur;
$modelEnt->u_latitude = $modelEnt->latitude;
$modelEnt->u_longitude = $modelEnt->longitude;

?>
<div class="entrepreneur-supplier-view">


   <div class="card">
    <div class="card-body">
    
    
    
    <div class="row">
    <div class="col-md-2">    <img width="100%" src="<?php echo Url::to(['/supplier/profile/entrepreneur-image', 'id' => $modelEnt->id])?>" /></div>
    <div class="col-md-4">
    
    
    
<article class="item" data-key="<?= $model->id; ?>">
    <h5 class="title">
    <?= Html::a(Html::encode($modelEnt->biz_name), Url::to(['/supplier/client/view', 'id' => $model->id])) ?>
    </h5>

    <div class="item-excerpt">
    <p><i class="fa fa-phone"></i> <?= Html::encode($modelEnt->phone)?></p>
     
     
    <p><i class="fa fa-map-marker-alt"></i> <?= Html::encode($modelEnt->address)?>, <?= Html::encode($modelEnt->cityModel->daerah_name)?>, 
     <?= Html::encode($modelEnt->stateModel->negeri_name)?></p>
     
    </div>
</article>


<br />
    

<?php 

if($modelEnt->sectorEntrepreneurs){
    echo '<h5 class="title">
  Sector
    </h5>

<ul>';
    foreach($modelEnt->sectorEntrepreneurs as $sector){
        echo '<li><i class="fa fa-check-circle"></i>  '.$sector->sector->sector_name.': '. $sector->description .' </li>'; 
    }
    
    echo '</ul>';
}

?>
    
    
    
    </div>
    <div class="col-md-6">
        <label><?=\Yii::t('app', 'Location')?></label>
        <?= Html::textInput('text', $modelEnt->location, ['class' => 'form-control', 'readonly'=> true])?>
        <br/>
        <?php echo Map::widget([
            'apiKey'=> 'AIzaSyCdaIFmGh8LWEfbXln7BkPnMfB1RDd9Rj4',
            'width' => '860px',
            'height' => '450px',
            'center' => [$modelEnt->u_latitude, $modelEnt->u_longitude],
            'markers' => [
                ['position' => [$modelEnt->u_latitude, $modelEnt->u_longitude],
                'content' => '<strong><b>'.$modelEnt->biz_name.'</b></strong>'],
            ]
            
        ]);?>
    </div>
</div>
    
    
    




  </div>
    </div>



</div>
<br />

    <p>
        <?= Html::a(\Yii::t('app', 'Remove Client'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to remove this client?',
                'method' => 'post',
            ],
        ]) ?>
    </p>