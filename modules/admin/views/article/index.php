<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи';
?>
<div class="article-index">
  <h1><?= Html::label($this->title) ?></h1>
  <p>
    <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
  </p>

  <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'tableOptions' => [
      'class' => 'table table-striped'
    ],
    'columns' => [
      ['class' => 'yii\grid\SerialColumn'],
      'id',
      'title:text:Заголовок',
      'description:text:Краткий текст',
      'content:text:Полная статья',
      'date:text:Дата',
      [
        'format' => 'html',
        'label' => 'Image',
        'value' => function($data){
            return Html::img($data->getImage(), ['width'=>200]);
        }
      ],
      //'user_id',
      //'article_category',
      ['class' => 'yii\grid\ActionColumn'],
    ],
  ]); ?>
</div>
