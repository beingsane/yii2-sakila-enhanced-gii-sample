<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\City */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'City',
]) . ' ' . $model->city;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->city, 'url' => ['view', 'id' => $model->city_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="city-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
