<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?= Html::a('Студенты',['/stud/index'],['class' => ['btn btn-primary']]) ?>
    <?= Html::a('Преподаватели',['/prepod/index'],['class' => ['btn btn-primary']]) ?>
    <br><br>
    <?= Html::a('Темы дипломных работ',['/tema/index'],['class' => ['btn btn-primary']]) ?>
    <?= Html::a('Дипломные работы студентов',['/stud-has-tema/index'],['class' => ['btn btn-primary']]) ?>
    <br><br>
    <?= Html::a('Календарь',['/calendar/index'],['class' => ['btn btn-primary']]) ?>
    <?= Html::a('Консультации',['/kons/index'],['class' => ['btn btn-primary']]) ?>
</div>
