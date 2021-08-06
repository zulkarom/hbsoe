<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<article class="item" data-key="<?= $model->id; ?>">
    <h5 class="title">
    <?= Html::a(Html::encode($model->supplier->biz_name), Url::to(['/entrepreneur/supplier/view', 'id' => $model->supplier->id])) ?>
    </h5>

    <div class="item-excerpt" style="margin-bottom: 10px;">
    <?= Html::encode($model->description); ?>
     <br /><i class="fa fa-map-marker-alt"></i> <?= Html::encode($model->supplier->cityModel->daerah_name)?>, 
     <?= Html::encode($model->supplier->stateModel->negeri_name)?>
    </div>
</article>