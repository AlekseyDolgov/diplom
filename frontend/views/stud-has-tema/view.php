<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\StudHasTema $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Дипломные работы студентов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="stud-has-tema-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'stud.name',
            'tema.tema',
            [
                    'label' => 'Одобрена',
                'value' => function ($model) {
                    return $model->approved ? 'Нет' : 'Да';
                }
            ],
        ],
    ]) ?>

</div>
