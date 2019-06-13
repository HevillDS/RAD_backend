<?php

use yii\helpers\Html;
use \yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'Авторизация';
// ?>

<main class="signUp__page">
  <h1>Авторизация</h1>
  <?php
    $form = ActiveForm::begin([
      'class'=>'horizontal',
    ]);
  ?>
  <div>
    <?= $form->field($login_model,'email')->textInput(['autofocus'=>true])->label('Почта') ?>
  </div>
  <div>
    <?= $form->field($login_model,'password')->passwordInput()->label('Пароль')?>
  </div>
  <div>
    <button type="submit">Вход</button><br>
  </div>
  <?php ActiveForm::end(); ?>

    <!-- VK Login -->
    <script src="https://vk.com/js/api/openapi.js?160"></script>
  <script>
    VK.init({apiId: 7017969});
  </script>
  <div id="vk_auth"></div>
  <script>
    VK.Widgets.Auth("vk_auth", {"width":300, "authUrl":"/auth/login-vk"});
  </script>

</main>
