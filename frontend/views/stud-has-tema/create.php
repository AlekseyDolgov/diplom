<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\StudHasTema $model */

$this->title = 'Назначение темы дипломной работы';
$this->params['breadcrumbs'][] = ['label' => 'Дипломные работы студентов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stud-has-tema-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
