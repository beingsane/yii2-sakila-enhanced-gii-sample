<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Address */

$this->title = $model->address;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Address').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        'address_id',
        'address',
        'address2',
        'district',
        [
            'attribute' => 'city.city',
            'label' => Yii::t('app', 'City'),
        ],
        'postal_code',
        'phone',
        'last_update',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
    $gridColumnCustomer = [
        ['class' => 'yii\grid\SerialColumn'],
        'customer_id',
        [
            'attribute' => 'store.store_id',
            'label' => Yii::t('app', 'Store'),
        ],
        'first_name',
        'last_name',
        'email:email',
        [
            'attribute' => 'address.address',
            'label' => Yii::t('app', 'Address'),
        ],
        'active',
        'create_date',
        'last_update',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerCustomer,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => Html::encode(Yii::t('app', 'Customer').' '. $this->title),
        ],
        'columns' => $gridColumnCustomer
    ]);
?>
    </div>
    
    <div class="row">
<?php
    $gridColumnStaff = [
        ['class' => 'yii\grid\SerialColumn'],
        'staff_id',
        'first_name',
        'last_name',
        [
            'attribute' => 'address.address',
            'label' => Yii::t('app', 'Address'),
        ],
        'picture',
        'email:email',
        'store_id',
        'active',
        'username',
        'password',
        'last_update',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerStaff,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => Html::encode(Yii::t('app', 'Staff').' '. $this->title),
        ],
        'columns' => $gridColumnStaff
    ]);
?>
    </div>
    
    <div class="row">
<?php
    $gridColumnStore = [
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute' => 'staff.staff_id',
            'label' => Yii::t('app', 'Staff'),
        ],
        [
            'attribute' => 'managerStaff.staff_id',
            'label' => Yii::t('app', 'Staff'),
        ],
        [
            'attribute' => 'address.address',
            'label' => Yii::t('app', 'Address'),
        ],
        'last_update',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerStore,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => Html::encode(Yii::t('app', 'Store').' '. $this->title),
        ],
        'columns' => $gridColumnStore
    ]);
?>
    </div>
</div>