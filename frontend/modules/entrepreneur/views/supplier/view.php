<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use kartik\widgets\ActiveForm;

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
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <?= $form->field($model, 'location')->widget(\kalyabin\maplocation\SelectMapLocationWidget::className(), [
            'attributeLatitude' => 's_latitude',
            'attributeLongitude' => 's_longitude',
            'googleMapApiKey' => 'AIzaSyCdaIFmGh8LWEfbXln7BkPnMfB1RDd9Rj4',
            'draggable' => false,
        ])->label(\Yii::t('app', 'Location'));?>
        <?php ActiveForm::end(); ?>
    </div>
</div>
    
    
    




  </div>
    </div>



</div>
<br />

    <p>
        <?= Html::a('Add To My Supplier', ['add-supplier', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
</p>