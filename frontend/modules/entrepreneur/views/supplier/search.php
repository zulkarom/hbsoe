<?php

use yii\helpers\Html;
use yii\widgets\ListView;

use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EntrepreneurSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Search Suppliers';
$this->params['breadcrumbs'][] = ['label' => 'Suppliers', 'url' => ['index']];
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
        
<?= Html::submitButton('Search Suppliers', ['class' => 'btn btn-primary btn-sm']) ?>
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


  </div>
    </div>
	
	
	</div>
</div>





</div>
