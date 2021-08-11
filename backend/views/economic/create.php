<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Economic */

$this->title = 'Create Economic';
$this->params['breadcrumbs'][] = ['label' => 'Economics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="economic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
