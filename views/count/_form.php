<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblCount */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-count-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ip')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'count')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
