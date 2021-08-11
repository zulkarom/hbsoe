<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AdminAnjur */

$this->title = 'Create Admin Anjur';
$this->params['breadcrumbs'][] = ['label' => 'Admin Anjurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-anjur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
