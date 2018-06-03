<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fanlar */

$this->title = 'Fanlar';
$this->params['breadcrumbs'][] = ['label' => 'Fanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
