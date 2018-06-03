<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectsToFlows */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title"><?= $this->title ?></div>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Flow_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Flows::find()->all(), 'id', 'name'))?>

        <?= $form->field($model, 'Subject_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Fanlar::find()->all(), 'id', 'Fan')) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
