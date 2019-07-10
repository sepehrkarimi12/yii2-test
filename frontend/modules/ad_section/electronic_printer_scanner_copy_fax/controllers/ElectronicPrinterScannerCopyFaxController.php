<?php

namespace frontend\modules\ad_section\electronic_printer_scanner_copy_fax\controllers;

use common\models\Ad;
use Yii;
use frontend\modules\ad_section\electronic_printer_scanner_copy_fax\models\ElectronicPrinterScannerCopyFax;
use frontend\modules\ad_section\electronic_printer_scanner_copy_fax\models\searchModels\ElectronicPrinterScannerCopyFaxSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ElectronicPrinterScannerCopyFaxController implements the CRUD actions for ElectronicPrinterScannerCopyFax model.
 */
class ElectronicPrinterScannerCopyFaxController extends Controller
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
     * Lists all ElectronicPrinterScannerCopyFax models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ElectronicPrinterScannerCopyFaxSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ElectronicPrinterScannerCopyFax model.
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
     * Creates a new ElectronicPrinterScannerCopyFax model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($cat_id = null)
    {
        if ($cat_id == null) {
            return $this->goBack();
        }

        $model = new ElectronicPrinterScannerCopyFax();
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
     * Updates an existing ElectronicPrinterScannerCopyFax model.
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
     * Deletes an existing ElectronicPrinterScannerCopyFax model.
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
     * Finds the ElectronicPrinterScannerCopyFax model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ElectronicPrinterScannerCopyFax the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ElectronicPrinterScannerCopyFax::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
