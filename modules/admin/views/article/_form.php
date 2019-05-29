<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label('Статья') ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 2])->label('Отрывок') ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6])->label('Полная статья') ?>

    <?= $form->field($model, 'date')->textInput()->label('Дата') ?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
