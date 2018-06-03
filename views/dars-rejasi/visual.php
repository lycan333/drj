<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\Searchmodels\DarsRejasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$a = [
    'Dushanba',
    'Seshanba',
    'Chorshanba',
    'Payshanba',
    'Juma',
    'Shanba'
];
$this->title = 'Dars Rejasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dars-rejasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?
    ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Dars Jadvali qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="row">
        <? foreach ($a as $k => $v) { ?>
            <div class="col-md-4">
                <h4><?= $v ?></h4>

                <table class="table table-condensed table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Fan</th>
                        <th>Xona</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?
                    for($i=1;$i<7;$i++){
                        ?>
                        <tr>
                            <td><?=$i?></td>
                            <td><?=$data[$k][$i]['fan']?></td>
                            <td><?=$data[$k][$i]['xona']?></td>
                        </tr>
                        <?
                    }

                    ?>

                    </tbody>
                </table>

            </div>
        <? } ?>
    </div>

</div>
