<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RentalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rental-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rental_id') ?>

    <?= $form->field($model, 'rental_date') ?>

    <?= $form->field($model, 'inventory_id') ?>

    <?= $form->field($model, 'customer_id') ?>

    <?= $form->field($model, 'return_date') ?>

    <?php // echo $form->field($model, 'staff_id') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
