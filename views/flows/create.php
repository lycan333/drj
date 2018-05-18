<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Flows */

$this->title = 'Create Flows';
$this->params['breadcrumbs'][] = ['label' => 'Flows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flows-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
