<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<br>
<br>
<br>
<br>
<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::dropDownList('article_category', $selectedArticleCategory, $articleCategories, ['class' => 'form-control']) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>