<?php

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

  <!-- VK Comments -->
  <script src="https://vk.com/js/api/openapi.js?160"></script>
  <script>
    VK.init({apiId: 7017969, onlyWidgets: true});
  </script>
  <div id="vk_comments"></div>
  <script>
    VK.Widgets.Comments("vk_comments", {limit: 10, width: "350", attach: "*"});
  </script>
</main>