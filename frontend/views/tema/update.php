<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Tema $model */

$this->title = 'Изменение темы: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Темы дипломных работ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="tema-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
