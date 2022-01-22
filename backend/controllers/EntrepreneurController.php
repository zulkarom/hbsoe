<?php

namespace backend\controllers;

use Yii;
use backend\models\Entrepreneur;
use backend\models\EntrepreneurProfile;
use backend\models\EntrepreneurSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\UploadFile;
use common\models\User;
/**
 * EntrepreneurController implements the CRUD actions for Entrepreneur model.
 */
class EntrepreneurController extends Controller
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
     * Lists all Entrepreneur models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EntrepreneurSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Entrepreneur model.
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
     * Creates a new Entrepreneur model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Entrepreneur();
        $modelUser = new User();

        $model->setScenario('admin_insert');
        $modelUser->setScenario('create');
        if ($model->load(Yii::$app->request->post()) && $modelUser->load(Yii::$app->request->post())) {
            
            //kena find dah ada user ke belum 
            $user = User::findOne(['email' => $modelUser->email]);
            if($user){
                $modelUser = $user;
                $modelUser->updated_at = time();
            }else{
                $modelUser->role = 1;
                $modelUser->status = 10;
                $modelUser->username = $modelUser->email;
                if($modelUser->rawPassword){
                    $modelUser->setPassword($modelUser->rawPassword);
                }else{
                    $modelUser->setPassword(Yii::$app->security->generateRandomString(5));
                }
            }
            
            $transaction = Yii::$app->db->beginTransaction();
            try {
                if($modelUser->save()){
                    //$bene = Entrepreneur::findOne(['user_id' => $modelUser->id]);
                    $model->user_id = $modelUser->id;
                    if($model->save()){
                        $transaction->commit();
                        Yii::$app->session->addFlash('success', "A new beneficiary created");
                        return $this->redirect(['view', 'id' => $model->id]);
                    }else{
                        $model->flashError();
                    }
                }else{
                    $modelUser->flashError();
                }
                
                
                
            }
            catch (\Exception $e)
            {
                $transaction->rollBack();
                Yii::$app->session->addFlash('error', $e->getMessage());
            }
            
            
        }

        return $this->render('create', [
            'model' => $model,
            'modelUser' => $modelUser,
        ]);
    }

    /**
     * Updates an existing Entrepreneur model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        // $model = $this->findModel($id);
        $model = $this->findModel($id);
        $modelUser = User::findOne($model->user_id);
        

        $modelUser->scenario = 'update';
        $model->scenario = 'admin_insert';

        if ($modelUser->load(Yii::$app->request->post()) 
            && $model->load(Yii::$app->request->post())) {

            $modelUser->username = $modelUser->email;
            if($modelUser->rawPassword){
                $modelUser->setPassword($modelUser->rawPassword);
            }            
            
            if($modelUser->save()){
                if($model->save()){
                    Yii::$app->session->addFlash('success', "Data Updated");
                    return $this->redirect(['view', 'id' => $id]);
                }else{
                    $model->flashError();
                }
            }else{
                $modelUser->flashError();
            }
        }

        return $this->render('update', [
            'model' => $model,
            'modelUser' => $modelUser,
        ]);
    }

    /**
     * Deletes an existing Entrepreneur model.
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

    protected function findEntrepreneurProfile($id)
    {
        if (($model = EntrepreneurProfile::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
