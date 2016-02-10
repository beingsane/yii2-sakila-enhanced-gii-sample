<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\FilmList */

$this->title = Yii::t('app', 'Create Film List');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Film Lists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>