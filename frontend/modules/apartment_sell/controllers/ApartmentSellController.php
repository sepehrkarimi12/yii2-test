<?php

namespace frontend\modules\apartment_sell\controllers;

use common\models\Ad;
use Yii;
use frontend\modules\apartment_sell\models\ApartmentSell;
use frontend\modules\apartment_sell\models\searchModels\ApartmentSellSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ApartmentSellController implements the CRUD actions for ApartmentSell model.
 */
class ApartmentSellController extends Controller
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
     * Lists all ApartmentSell models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ApartmentSellSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ApartmentSell model.
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
     * Creates a new ApartmentSell model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($cat_id = null)
    {
        if ($cat_id == null) {
            return $this->goBack();
        }

        $model = new ApartmentSell();
        $advertiser = new Ad();
        $advertiser->scenario = Ad::SCENARIO_REQUIRED_PRICE;

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
     * Updates an existing ApartmentSell model.
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
     * Deletes an existing ApartmentSell model.
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
     * Finds the ApartmentSell model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ApartmentSell the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ApartmentSell::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
