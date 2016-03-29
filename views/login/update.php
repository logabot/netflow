<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblLogin */

$this->title = 'Update Tbl Login: ' . $model->login;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Logins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->login, 'url' => ['view', 'id' => $model->login]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-login-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
