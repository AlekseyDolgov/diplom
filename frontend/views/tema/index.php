<?php

use common\models\Tema;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Темы дипломных работ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tema-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить тему', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        'columns' => [
            'id',
            [
                    'label' => 'Имя преподавателя',
                    'attribute' => 'prepod.name',
            ],
            'tema',
            [
                'label' => 'Свободна',
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->status ? 'Нет' : 'Да';
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tema $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
