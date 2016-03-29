<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblCount */

$this->title = 'Update Tbl Count: ' . $model->ip;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Counts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ip, 'url' => ['view', 'ip' => $model->ip, 'date' => $model->date]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-count-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
