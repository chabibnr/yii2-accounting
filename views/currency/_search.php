<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CurrenciesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="currencies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>
    <?= $form->field($model, 'code') ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'created_by') ?>
    <?php // echo $form->field($model, 'created_on') ?>
    <?php // echo $form->field($model, 'modified_by') ?>
    <?php // echo $form->field($model, 'modified_on') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
