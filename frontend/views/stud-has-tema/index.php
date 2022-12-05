<?php

use common\models\StudHasTema;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Дипломные работы студентов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stud-has-tema-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Назначить тему дипломной работы', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        'columns' => [

            'id',
            'stud.name',
            'tema.tema',
            [
                'label' => 'Одобрена',
                'value' => function ($model) {
                    return $model->approved ? 'Нет' : 'Да';
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, StudHasTema $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
