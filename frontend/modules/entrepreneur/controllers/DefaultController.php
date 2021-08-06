<?php

namespace frontend\modules\entrepreneur\controllers;

use yii\web\Controller;

/**
 * Default controller for the `entrepreneur` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
