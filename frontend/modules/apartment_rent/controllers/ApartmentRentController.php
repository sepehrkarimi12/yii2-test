<?php

namespace frontend\modules\apartment_rent\controllers;

use common\models\Ad;
use Yii;
use frontend\modules\apartment_rent\models\ApartmentRent;
use frontend\modules\apartment_rent\models\searchModels\ApartmentRentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ApartmentRentController implements the CRUD actions for ApartmentRent model.
 */
class ApartmentRentController extends Controller
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
     * Lists all ApartmentRent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ApartmentRentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ApartmentRent model.
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
     * Creates a new ApartmentRent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($cat_id)
    {
        $model = new ApartmentRent();
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
     * Updates an existing ApartmentRent model.
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
     * Deletes an existing ApartmentRent model.
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
     * Finds the ApartmentRent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ApartmentRent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ApartmentRent::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
