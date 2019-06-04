<?php

  /* @var $this yii\web\View */
  /* @var $form yii\bootstrap\ActiveForm */
  /* @var $model app\models\LoginForm */

  use yii\helpers\Html;
  use yii\helpers\Url;
  use yii\widgets\LinkPager;
  use yii\bootstrap\ActiveForm;

  $this->title = 'Статьи';
?>

<main class="article__main">
    <article class="article">
        <h1><?= $article->title; ?></h1>
        <img src="<?= $article->getImage()  ?>" alt="">
        <p>
            <?= $article->content; ?>
        </p>
        <p class="date">
          <?= $article->date ?>
        </p>
    </article>
    <article class="commentary">
        <h2>Комментарии</h2>
        <section class="writeComment">
            <textarea name="" id="" placeholder="Оставьте комментарий"></textarea><br>
            <button><a href="">Отправить</a></button>
        </section>
        <section class="comments">
            <h3>Дмитрий</h3>
            <p>Классная статья, спасибо!</p>
            <hr>
        </section>
    </article>
  </main>