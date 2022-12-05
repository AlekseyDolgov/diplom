<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Tema $model */

$this->title = 'Добавить тему';
$this->params['breadcrumbs'][] = ['label' => 'Темы дипломных работ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tema-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
