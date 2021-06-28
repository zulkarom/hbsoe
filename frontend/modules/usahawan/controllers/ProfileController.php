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
        $model = $this->findUsahawanProfile($id);

        $model->setScenario('insert');
        if ($model->load(Yii::$app->request->post())) {
                // $model->profile_file;
                // die();
                if($model->save()){
                   Yii::$app->session->addFlash('success', "Maklumat peribadi berjaya disimpan.");

                    return $this->refresh();
                }else{
                    echo "<pre>";
print_r(Yii::$app->request->post());
die();

                }
            }

        return $this->render('index', [
            'model' => $model,
        ]);

    }

    public function actionCreate()
    {
        $model = new Usahawan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
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
