<?php

namespace frontend\modules\usahawan\controllers;

use Yii;
use backend\models\Usahawan;
use backend\models\UsahawanProfile;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use frontend\models\UploadFile;
/**
 * ProfileController implements the CRUD actions for Usahawan model.
 */
class ProfileController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Usahawan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $id = Yii::$app->user->identity->id;
        // echo $id;
        // die();
        $model = $this->findUsahawanProfile($id);

        $model->setScenario('insert');
        if ($model->load(Yii::$app->request->post())) {
            
                $model->longitude = $model->u_longitude;
                $model->latitude = $model->u_latitude;
                $model->location = $model->u_location;

                if($model->save()){
                   Yii::$app->session->addFlash('success', "Maklumat peribadi berjaya disimpan.");

                    return $this->refresh();
                }else{
                    return $model->flashError();

                }
            }

        return $this->render('index', [
            'model' => $model,
        ]);

    }

    public function actionProfileImage($id){
        $model = $this->findModel($id);
        
        UploadFile::profileImage(1,$model);
    }

    /**
     * Finds the Usahawan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Usahawan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Usahawan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findUsahawanProfile($id)
    {
        if (($model = UsahawanProfile::findOne(['user_id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
