<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArticleComment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true])->label('Комментарий') ?>

    <?= $form->field($model, 'user_id')->textInput()->label('Пользователь') ?>

    <?= $form->field($model, 'article')->textInput()->label('Статья') ?>

    <?= $form->field($model, 'status')->textInput()->label('Статус') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
