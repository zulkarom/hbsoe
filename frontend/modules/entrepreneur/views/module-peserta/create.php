<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\modulePeserta */

$this->title = 'Register Modul';
$this->params['breadcrumbs'][] = ['label' => 'Module Registration', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="module-peserta-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
