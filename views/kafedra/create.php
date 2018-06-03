<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kafedra */

$this->title = 'Kafedra';
$this->params['breadcrumbs'][] = ['label' => 'Kafedras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
