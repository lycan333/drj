<?php

namespace app\controllers;

use app\models\Xona;
use Yii;
use app\models\DarsRejasi;
use app\Searchmodels\DarsRejasiSearch;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DarsRejasiController implements the CRUD actions for DarsRejasi model.
 */
class DarsRejasiController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
        ];
    }

    public function beforeAction($i)
    {
        $this->layout = "app";
        return parent::beforeAction($i);

    }

    /**
     * Lists all DarsRejasi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DarsRejasiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionVisual($id)
    {
        $data = DarsRejasi::find()->where("Gid=" . $id)->all();
        $arr = [];
        foreach ($data as $k => $v) {
            if ($v->para % 2 == 0) {
                $arr[$v->kun][$v->para / 2]['fan'] = $v->fan->Fan;
                $arr[$v->kun][$v->para / 2]['xona'] = $v->xona->num . $v->xona->korpus->nomi;
            }
        }
        return $this->render('visual', [
            'data' => $arr
        ]);
    }

    public function actionRooms($kun, $para)
    {
       $room  = Xona::findBySql("
            SELECT * from Xona
             WHERE num NOT IN
             (SELECT Xona.num as num FROM `Xona`
             INNER JOIN DarsRejasi on DarsRejasi.xona_id=Xona.id
             WHERE DarsRejasi.para=$para AND DarsRejasi.kun=$kun)
        ")->all();
        $r = [];
        foreach ($room as $k=>$v ) {
            $a['value'] = $v->id;
            $a['text'] = $v->num.$v->korpus->nomi;
            $r[] = $a;
        }
        return Json::encode($r);

    }

    public function actionVisualAdd($id)
    {
        $model = new DarsRejasi();
        $model->Gid = $id;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('createVisual', [
            'model' => $model,
        ]);
    }

    /**
     * Displays a single DarsRejasi model.
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
     * Creates a new DarsRejasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DarsRejasi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DarsRejasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DarsRejasi model.
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
     * Finds the DarsRejasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DarsRejasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DarsRejasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
