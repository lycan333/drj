<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Flows */

$this->title = 'Yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Flows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
