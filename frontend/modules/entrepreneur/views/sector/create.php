<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SectorEntrepreneur */

$this->title = \Yii::t('app', 'New Sector');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'My Sector'), 'url' => ['index']];
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

