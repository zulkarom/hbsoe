<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Usahawan */

$this->title = 'Create Usahawan';
$this->params['breadcrumbs'][] = ['label' => 'Usahawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usahawan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
