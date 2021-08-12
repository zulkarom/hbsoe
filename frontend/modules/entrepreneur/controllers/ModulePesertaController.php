<?php

namespace frontend\modules\entrepreneur\controllers;

use Yii;
use backend\models\AdminAnjur;
use backend\models\ModulePeserta;
use frontend\modules\entrepreneur\models\ModulePesertaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use yii\db\Expression;
/**
 * ModulePesertaController implements the CRUD actions for ModulePeserta model.
 */
class ModulePesertaController extends Controller
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
     * Lists all ModulePeserta models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ModulePesertaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ModulePeserta model.
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
     * Creates a new ModulePeserta model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ModulePeserta();
        $model->setScenario('daftar');

        if ($model->load(Yii::$app->request->post())) {

            $checkModule = ModulePeserta::find()
            ->where(['user_id' => Yii::$app->user->identity->id])
            ->andWhere(['anjur_id' => $model->anjur_id])
            ->one();

            if($checkModule){
                Yii::$app->session->addFlash('warning', "Modul yang dipilih telah didaftarkan. Sila pilih modul lain.");
                return $this->redirect(['index']);

            }else if($model->getCountPeserta($model->anjur_id) >= $model->adminAnjur->capacity){
                Yii::$app->session->addFlash('warning', "Kapasiti modul penuh. Sila pilih module lain.");
                return $this->redirect(['index']);

            }else{
                $model->user_type = 1;
                $model->user_id = Yii::$app->user->identity->id;
                $model->status = 10;
                $model->submitted_at = new Expression('NOW()');

                if($model->save()){
                    Yii::$app->session->addFlash('success', "Daftar Modul Berjaya");
                    return $this->redirect(['index']);
                }else{
                    $model->flashError();
                }
            }
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ModulePeserta model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if($model->save()){
            Yii::$app->session->addFlash('success', "Data Updated");
            return $this->redirect(['view', 'id' => $model->id]);
        }else{
            $model->flashError();
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ModulePeserta model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if($model->delete()){
            Yii::$app->session->addFlash('danger', "Data Deleted");
        }else{
            $model->flashError();
        }

        return $this->redirect(['index']);
    }

    public function actionGetDetails($id){

        $anjur = AdminAnjur::find()->where(['id' => $id])->one();
        if($anjur)
        {
            $details = array("date_start" => date('d F Y', strtotime($anjur->date_start)), 
                                "date_end" =>date('d F Y', strtotime($anjur->date_end)), 
                                "capacity" =>$anjur->capacity, 
                                "location" =>$anjur->location);
            $result = json_encode($details);
            return $result;
        }
        
    }

    /**
     * Finds the ModulePeserta model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ModulePeserta the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ModulePeserta::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
