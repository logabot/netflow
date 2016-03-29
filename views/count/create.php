<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblCount */

$this->title = 'Create Tbl Count';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Counts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-count-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
