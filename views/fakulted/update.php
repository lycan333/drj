<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fakulted */

$this->title = 'Update Fakulted: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fakulteds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fakulted-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
