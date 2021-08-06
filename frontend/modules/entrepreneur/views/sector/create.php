<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SectorEntrepreneur */

$this->title = 'New Sector';
$this->params['breadcrumbs'][] = ['label' => 'Sector Entrepreneurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>



   <div class="card">
    <div class="card-body">
<div class="sector-entrepreneur-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

  </div>
    </div>

