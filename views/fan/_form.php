<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fanlar */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title"><?= $this->title ?></div>
    </div>
    <div class="panel-body">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kid')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Kafedra::find()->all(), 'id', 'Nomi')) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>

