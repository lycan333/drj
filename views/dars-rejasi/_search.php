<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Searchmodels\DarsRejasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dars-rejasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Fan_id') ?>

    <?= $form->field($model, 'xona_id') ?>

    <?= $form->field($model, 'para') ?>

    <?= $form->field($model, 'kun') ?>

    <?php // echo $form->field($model, 'Fantype') ?>

    <?php // echo $form->field($model, 'Gid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
