<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DarsRejasi */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Dars Rejasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>
