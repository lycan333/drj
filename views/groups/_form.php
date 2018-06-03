<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Groups */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title"><?= $this->title ?></div>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nomi')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'kurs')->textInput() ?>

        <?= $form->field($model, 'Fakul_ID')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Fakulted::find()->all(), 'id', 'nomi'))?>

        <?= $form->field($model, 'tsoni')->textInput() ?>

        <?= $form->field($model, 'flow_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Flows::find()->all(), 'id', 'name')) ?>

        <?= $form->field($model, 'study_year')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
