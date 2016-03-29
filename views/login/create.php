<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblLogin */

$this->title = 'Create Tbl Login';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Logins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-login-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
