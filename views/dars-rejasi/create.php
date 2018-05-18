<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DarsRejasi */

$this->title = 'Create Dars Rejasi';
$this->params['breadcrumbs'][] = ['label' => 'Dars Rejasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dars-rejasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
