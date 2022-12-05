<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Prepod $model */

$this->title = 'Добавить преподавателя';
$this->params['breadcrumbs'][] = ['label' => 'Преподаватели', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prepod-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
