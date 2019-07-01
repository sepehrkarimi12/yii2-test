<?php

namespace frontend\modules\other_rent\controllers;

use common\models\Ad;
use Yii;
use frontend\modules\other_rent\models\OtherRent;
use frontend\modules\other_rent\models\searchModels\OtherRent as OtherRentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OtherRentController implements the CRUD actions for OtherRent model.
 */
class OtherRentController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all OtherRent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OtherRentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OtherRent model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $advertiser = Ad::findOne($model->ad_id);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'ad' => $advertiser,
        ]);
    }

    /**
     * Creates a new OtherRent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($cat_id = null)
    {
        if ($cat_id == null) {
            return $this->goBack();
        }

        $model = new OtherRent();
        $advertiser = new Ad();
        $advertiser->cat_id = $cat_id;

        if ($model->load(Yii::$app->request->post()) && $advertiser->load(Yii::$app->request->post())
            && $model->validate() && $advertiser->validate()
        ) {
            $model->advertiserModel = $advertiser;

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'ad' => $advertiser,
        ]);
    }

    /**
     * Updates an existing OtherRent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $advertiser = Ad::findOne($model->ad_id);

        if ($model->load(Yii::$app->request->post()) && $advertiser->load(Yii::$app->request->post())
            && $model->validate() && $advertiser->validate()
        ) {
            $model->advertiserModel = $advertiser;
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'ad' => $advertiser,
        ]);
    }

    /**
     * Deletes an existing OtherRent model.
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

    /**
     * Finds the OtherRent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OtherRent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OtherRent::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
