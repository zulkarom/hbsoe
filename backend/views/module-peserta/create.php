<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ModulePeserta */

$this->title = 'Create Module Peserta';
$this->params['breadcrumbs'][] = ['label' => 'Module Pesertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="module-peserta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
