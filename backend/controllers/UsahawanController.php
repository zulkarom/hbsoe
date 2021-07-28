<?php

namespace backend\controllers;

use Yii;
use backend\models\Usahawan;
use backend\models\UsahawanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\UploadFile;
use common\models\User;
/**
 * UsahawanController implements the CRUD actions for Usahawan model.
 */
class UsahawanController extends Controller
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
        $searchModel = new UsahawanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usahawan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Usahawan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
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

    /**
     * Updates an existing Usahawan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $usahawan = $this->findModel($id);
        $model = User::findOne($usahawan->user_id);
        $model->scenario = 'update';
        // $model->updated_at = new Expression('NOW()');
        if ($model->load(Yii::$app->request->post())) {
            
            if($model->rawPassword){
                $model->setPassword($model->rawPassword);
            }            
            
            if($model->save()){
                Yii::$app->session->addFlash('success', "Data Updated");
                return $this->redirect(['view', 'id' => $id]);
            }
            
            
            
        } else {
            return $this->render('update', [
                'model' => $model,
                'usahawan' => $usahawan,
            ]);
        }
    }

    /**
     * Deletes an existing Usahawan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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
}
