<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>

  <?php $this->head() ?>
</head>
<body>
  <?php $this->beginBody() ?>  
  <div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => "Панель администратора",
        'brandUrl' => '/admin'  
    ]);
    echo Nav::widget([
      'options' => ['class' => 'navbar-nav navbar-right'],
      'items' => [
        ['label' => 'Статьи', 'url' => ['/admin/article/index']],
        ['label' => 'Категории', 'url' => ['/admin/article-category/index']],
        ['label' => 'Комментарии', 'url' => ['/admin/article-comment/index']],
      ],
    ]);
    NavBar::end();
    ?>
    <div class="container">
      <?= $content ?>
    </div>
    <footer>
      <div class="container">
        <p>
          Stage 1
        </p>
      </div>
    </footer>
  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
