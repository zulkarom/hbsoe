<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Entrepreneur */

$this->title = 'Create Entrepreneur';
$this->params['breadcrumbs'][] = ['label' => 'Entrepreneurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrepreneur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
