<?php

namespace frontend\modules\entrepreneur\controllers;

use Yii;
use backend\models\Entrepreneur;
use backend\models\EntrepreneurProfile;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use frontend\models\UploadFile;
use backend\models\Supplier;
/**
 * ProfileController implements the CRUD actions for Entrepreneur model.
 */
class ProfileController extends Controller
{
    public $layout = '//main';
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
     * Lists all Entrepreneur models.
     * @return mixed
     */
    public function actionIndex()
    {
        $id = Yii::$app->user->identity->id;
        // echo $id;
        // die();
        $model = $this->findEntrepreneurProfile($id);

        $model->setScenario('insert');
        if ($model->load(Yii::$app->request->post())) {

                if($model->save()){
                   Yii::$app->session->addFlash('success', "Information Saved");

                    return $this->refresh();
                }else{
                    $model->flashError();

                }
            }

        return $this->render('index', [
            'model' => $model,
        ]);

    }
    
    public function actionLocation()
    {
        $id = Yii::$app->user->identity->id;
        // echo $id;
        // die();
        $model = $this->findEntrepreneur($id);
        
        $model->setScenario('insert');
        if ($model->load(Yii::$app->request->post())) {
            
            $model->longitude = $model->u_longitude;
            $model->latitude = $model->u_latitude;
            $model->location = $model->u_location;
            
            if($model->save()){
                Yii::$app->session->addFlash('success', "Information Saved");
                
                return $this->refresh();
            }else{
                return $model->flashError();
                
            }
        }
        
        return $this->render('location', [
            'model' => $model,
        ]);
        
    }

    public function actionProfileImage($id){
        $model = $this->findModel($id);
        
        UploadFile::profileImage(1,$model);
    }
    
    public function actionSupplierImage($id){
        $model = $this->findSupplier($id);
        
        UploadFile::profileImage(2, $model);
    }

    /**
     * Finds the Entrepreneur model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Entrepreneur the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Entrepreneur::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    protected function findSupplier($id)
    {
        if (($model = Supplier::findOne($id)) !== null) {
            return $model;
        }
        
        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    protected function findEntrepreneur($id)
    {
        if (($model = Entrepreneur::findOne(['user_id' => $id])) !== null) {
            return $model;
        }
        
        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findEntrepreneurProfile($id)
    {
        if (($model = EntrepreneurProfile::findOne(['user_id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
