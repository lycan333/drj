<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Xona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="xona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Xona_Turi')->textInput() ?>

    <?= $form->field($model, 'num')->textInput() ?>

    <?= $form->field($model, 'T_soni')->textInput() ?>

    <?= $form->field($model, 'Korpus_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
