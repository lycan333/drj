<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Flows */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title"><?= $this->title ?></div>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'faku_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Fakulted::find()->all(), 'id', 'nomi'))?>

        <?= $form->field($model, 'course')->textInput() ?>

        <?= $form->field($model, 'Study_year')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
