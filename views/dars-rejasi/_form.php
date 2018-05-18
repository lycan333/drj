<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DarsRejasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dars-rejasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fan_id')->textInput() ?>

    <?= $form->field($model, 'xona_id')->textInput() ?>

    <?= $form->field($model, 'para')->textInput() ?>

    <?= $form->field($model, 'kun')->textInput() ?>

    <?= $form->field($model, 'Fantype')->textInput() ?>

    <?= $form->field($model, 'Gid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
