<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DarsRejasi */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title"><?= $this->title ?></div>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'kun')->dropDownList([
            'Dushanba',
            'Seshanba',
            'Chorshanba',
            'Payshanba',
            'Juma',
            'Shanba'
        ]) ?>
        <?= $form->field($model, 'Fan_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Fanlar::find()->all(), 'id', 'Fan')) ?>


        <?= $form->field($model, 'para')->dropDownList([
            1, 2, 3, 4, 5, 6
        ]) ?>



        <?= $form->field($model, 'Fantype')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Roomtype::find()->all(), 'id', 'Name')) ?>

        <?= $form->field($model, 'Gid')->textInput() ?>
        <?= $form->field($model, 'xona_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Xona::find()->all(), 'id', 'num')) ?>

        <div class="form-group">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
