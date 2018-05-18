<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kafedra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kafedra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
