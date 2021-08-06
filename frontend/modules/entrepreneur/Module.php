<?php

namespace frontend\modules\entrepreneur;

/**
 * entrepreneur module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\entrepreneur\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        if(!\Yii::$app->user && !\Yii::$app->user->identity->entrepreneur) {
            throw new \yii\web\NotFoundHttpException('The page is meant for an entrepreneur');
        }
    }
}
