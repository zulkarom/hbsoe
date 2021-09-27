<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Entrepreneur */

$this->title = 'View Beneficiary';
$this->params['breadcrumbs'][] = ['label' => 'Beneficiaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <br/>
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="entrepreneur-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Name',
                'value' => function($model){
                    return $model->user->fullname;
                }
            ],
            [
                'label' => 'Email',
                'value' => function($model){
                    return $model->user->email;
                }
            ],
            [
                'label' => 'Age',
                'value' => function($model){
                    return $model->age;
                }
            ],
            [
             'format' => 'html',
             'label' => 'Address',
             'value' => function($model){
                if($model->address){
                    return $model->address.'<br/>'.$model->postcode.', '.$model->city.', '.$model->state;
                }
             }
            ],            
            [
                'label' => 'Location',
                'value' => function($model){
                    return $model->location;
                }
            ],
            [
                'format' => 'raw',
                'label' => 'Profile Picture',
                'value' => function($model){
                    if($model->profile_file){
                        return Html::a(' Download <span class="glyphicon glyphicon-download-alt"></span>', ['profile-image', 'id' => $model->id], [
                                   'target' => '_blank']);
                    }
                }
            ],
        ],
    ]) ?>

</div>
</div>
</div>
