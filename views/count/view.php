<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblCount */

$this->title = $model->ip;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Counts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-count-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ip' => $model->ip, 'date' => $model->date], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ip' => $model->ip, 'date' => $model->date], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ip:ntext',
            'count',
            'date',
        ],
    ]) ?>

</div>
