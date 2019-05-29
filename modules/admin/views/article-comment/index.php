<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleCommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Комментарии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-comment-index">

    <h1><?= Html::label($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
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
            'text:text:Комментарий',
            'user_id:text:Пользователь',
            'article:text:Статья',
            'status:text:Статус',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
