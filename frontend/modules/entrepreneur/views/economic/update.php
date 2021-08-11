<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Economic */

$this->title = \Yii::t('app', 'Update Economic');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Economics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="economic-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
