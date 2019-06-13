<?php

use yii\helpers\Html;
use \yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'Регистрация';
?>

<main class="signUp__page">
  <h1>Регистрация</h1>
  <?php
    $form = ActiveForm::begin([
      'class'=>'horizontal',
    ]);
  ?>
  <div>
    <?= $form->field($model,'name')->textInput(['autofocus'=>true])->label('Имя') ?>
  </div>
  <div>
    <?= $form->field($model,'email')->textInput()->label('Почта') ?>
  </div>
  <div>  
    <?= $form->field($model,'password')->passwordInput()->label('Пароль')?>
  </div>
  <button type="submit">Зарегистрироваться</button>
  
  <?php
      ActiveForm::end();
  ?>
  <div class="vk_auth" id="vk_auth"></div>
  <!-- VK Login -->
  <script src="https://vk.com/js/api/openapi.js?160"></script>
  <script>
    VK.init({apiId: 7017969});
  </script>
  <script>
    VK.Widgets.Auth("vk_auth", {"width":300, "authUrl":"/auth/login-vk"});
  </script>
</main>

