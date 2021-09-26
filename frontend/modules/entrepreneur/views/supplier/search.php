<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use voime\GoogleMaps\Map;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EntrepreneurSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = \Yii::t('app', 'Search Suppliers');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Suppliers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrepreneur-supplier-index">



<?php $form = ActiveForm::begin([
    'action' => ['search'],
    'method' => 'get',
]); ?>
    
<div class="row">
<div class="col-md-6"><?= $form->field($searchModel, 'sector', [
    'addon' => ['prepend' => ['content'=>'<span class="fa fa-search"></span>']]])->label(false)->textInput(['placeholder' => "Search Sector"]) ?> 
    

    
    </div>
<div class="col-md-6">    <?= $form->field($searchModel, 'location', [
    'addon' => ['prepend' => ['content'=>'<span class="fa fa-search"></span>']]])->label(false)->textInput(['placeholder' => "Search Location"]) ?></div>
</div>
<div class="form-group">
        
<?= Html::submitButton(\Yii::t('app', 'Search Suppliers'), ['class' => 'btn btn-primary btn-sm']) ?>
    </div>

<?php ActiveForm::end(); ?>


<div class="row">
	<div class="col-md-6">
	   <div class="card">
    <div class="card-body">
  <?= ListView::widget([
    'dataProvider' => $dataProvider,
    'options' => [
        'tag' => 'div',
        'class' => 'list-wrapper',
        'id' => 'list-wrapper',
    ],
    'layout' => "{items}\n{pager}",
    'itemView' => function ($model, $key, $index, $widget) {
        return $this->render('_list_item',['model' => $model]);

        // or just do some echo
        // return $model->title . ' posted by ' . $model->author;
    },
]);?>

  </div>
    </div>
	  
	
	</div>
	<div class="col-md-6">
	    <div class="card">
    <div class="card-body">
    <h4 class="card-title">Map</h4>
      <br />
      <?php

        $location = array();
        $cen = '';
        $zm = '';
        $count = 0;
        foreach($dataProvider->models as $model){
            $location[] = ['position' => [$model->supplier->latitude, $model->supplier->longitude], 'content' => '<strong><b>'.$model->supplier->biz_name.'</b></strong>'];
            if($model->supplier->state != 1){
                $count++;
            }
        }
        //Tunjuk map Kelantan @ Malaysia
        if($count != 0){
            $cen = [4.210484, 101.975769];
            $zm = 7;
        }else{
            $cen = [6.124785, 102.254379];
            $zm = 12;
        }
      ?>

      <?php echo Map::widget([
            'apiKey'=> 'AIzaSyCdaIFmGh8LWEfbXln7BkPnMfB1RDd9Rj4',
            'width' => '760px',
            'height' => '450px',
            'zoom' => $zm,
            'center' => $cen,
            'markers' => $location
        ]);?>

  </div>
    </div>
	
	
	</div>
</div>





</div>
