<?php

namespace frontend\modules\ad_section\vehicle_boat_and_spare_part\controllers;

use common\models\Ad;
use Yii;
use frontend\modules\ad_section\vehicle_boat_and_spare_part\models\VehicleBoatAndSparePart;
use frontend\modules\ad_section\vehicle_boat_and_spare_part\models\searchModels\VehicleBoatAndSparePartSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VehicleBoatAndSparePartController implements the CRUD actions for VehicleBoatAndSparePart model.
 */
class VehicleBoatAndSparePartController extends Controller
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
     * Lists all VehicleBoatAndSparePart models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VehicleBoatAndSparePartSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VehicleBoatAndSparePart model.
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
     * Creates a new VehicleBoatAndSparePart model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($cat_id = null)
    {
        if ($cat_id == null) {
            return $this->goBack();
        }

        $model = new VehicleBoatAndSparePart();
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
     * Updates an existing VehicleBoatAndSparePart model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id = null)
    {
        if ($id == null) {
            return $this->goBack();
        }

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
     * Deletes an existing VehicleBoatAndSparePart model.
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
     * Finds the VehicleBoatAndSparePart model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return VehicleBoatAndSparePart the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = VehicleBoatAndSparePart::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
