<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Economic */

$this->title = \Yii::t('app', 'New Economic');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Economics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="economic-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
