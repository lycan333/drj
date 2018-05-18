<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectsToFlows */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subjects-to-flows-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Flow_id')->textInput() ?>

    <?= $form->field($model, 'Subject_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
