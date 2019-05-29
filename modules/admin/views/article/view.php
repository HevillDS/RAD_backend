<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Загрузить изображение', ['set-image' /* Обращаемся к экшену */, 'id' => $model->id], ['class' => 'btn btn-default']) ?> 
        <?= Html::a('Задать категорию', ['set-category', 'id' => $model->id], ['class' => 'btn btn-default']) ?> 
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
            
        ]) ?>
        <?= Html::a('Назад', ['/admin/article-category'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'label' => 'Заголовок',
                'value' => $model->title,
            ],       
            [
                'label' => 'Краткий текст',
                'value' => $model->description,
            ],   
            [
                'label' => 'Полный текст',
                'value' => $model->content,
            ],   
            [
                'label' => 'Идентификатор пользователя',
                'value' => $model->user_id,
            ],   
            [
                'label' => 'Дата',
                'value' => $model->date,
            ],  
            [
                'label' => 'Категория',
                'value' => $model->article_category,
            ], 
        ],
    ]) ?>

</div>
