<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use voime\GoogleMaps\Map;
/* @var $this yii\web\View */
/* @var $model backend\models\Entrepreneur */

$this->title = 'View Beneficiary';
$this->params['breadcrumbs'][] = ['label' => 'Beneficiaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$model->u_latitude = $model->latitude;
$model->u_longitude = $model->longitude;

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
                'format' => 'raw',
                'label' => 'Profile Picture',
                'value' => function($model){
                    if($model->profile_file){

                        return '<img src="'.Url::to(['/entrepreneur/profile-image', 'id' => $model->id]).'" width="90" height="90">';
                    }
                }
            ],
            [
                'label' => 'Name',
                'value' => function($model){
                    return $model->user->fullname;
                }
            ],
            'biz_name',
            'biz_info',
            [
             'label' => 'Date Register',
             'value' => function($model){
                if($model->user){
                    return date('d M Y', $model->user->created_at);
                }
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
             'label' => 'Address',
             'value' => function($model){
                if($model->address){
                    return $model->fullAddress;
                }
             }
            ],  
           'note',   
            [
                'label' => 'Location',
                'format' => 'raw',
                'value' => function($model){
                    return $model->location.
                    '<br/>'.Map::widget([
                        'apiKey'=> 'AIzaSyCdaIFmGh8LWEfbXln7BkPnMfB1RDd9Rj4',
                        'width' => '860px',
                        'height' => '450px',
                        'center' => [$model->u_latitude, $model->u_longitude],
                        'markers' => [
                            ['position' => [$model->u_latitude, $model->u_longitude],
                            'content' => '<strong><b>'.$model->biz_name.'<br/>'.$model->location.'</b></strong>'],
                        ]
                        
                    ]);
                }
            ],
            
        ],
    ]) ?>
 
</div>
</div>
</div>
