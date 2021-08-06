<?php

namespace frontend\modules\supplier;

/**
 * supplier module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\supplier\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        if(!\Yii::$app->user && !\Yii::$app->user->identity->supplier) {
            throw new \yii\web\NotFoundHttpException('The page is meant for a supplier');
        }
    }
}
