<?php

  use yii\helpers\Html;
  use yii\helpers\Url;
  use yii\widgets\LinkPager;
  use yii\bootstrap\ActiveForm;

  $this->title = 'Статьи';
?>

<main class="articles__main">
  <aside>
    <h2>Категории</h2>
    <ul>
      <li><a href=""><?= $category->title ?></a></li>
      <li><a href="">Обучающие</a></li>
      <li><a href="">Путешествия</a></li>
      <li><a href="">Новости</a></li>
    </ul>
  </aside>
  <article>
    <?php foreach($articles as $article):?>
    <section class="post">
      <h2><a href="<?= Url::toRoute(['site/article', 'id'=>$article->id])?>"><?= $article->title?></a></h2>
      <img src="<?= $article->getImage();?>" alt="">
      <p>
        <?= $article->description?>
      </p>
      <p>
        <a href="<?= Url::toRoute(['site/article', 'id'=>$article->id])?>"><b>Продолжение</b></a>
      </p>
      <hr>
    </section>
    <?php endforeach;?>
    <?php
      echo LinkPager::widget([
        'pagination' => $pagination,
        'nextPageLabel' => '>',
        'prevPageLabel' => '<',
      ]);
    ?> 
  </article>
</main>
