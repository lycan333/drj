<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Xona */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title"><?= $this->title ?></div>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'Xona_Turi')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Roomtype::find()->all(), 'id', 'Name')) ?>

        <?= $form->field($model, 'num')->textInput() ?>

        <?= $form->field($model, 'T_soni')->textInput() ?>

        <?= $form->field($model, 'Korpus_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Korpus::find()->all(), 'id', 'nomi')) ?>

        <?= $form->field($model, 'status')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
