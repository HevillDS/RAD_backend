<?php

$this->title = 'RollAllDay';
?>

<main class="index_page">
  <section> 
    <h2 class="wow fadeInDown" data-wow-duration="0.6s">ДОБРО ПОЖАЛОВАТЬ!</h2>
    <div>
      <p class="wow fadeIn" data-wow-duration="1.2s">
      RollAllDay - ростовское сообщество, одержимое велотемой. "Штабом" является Парк Авиаторов, где участники строят единственную в Ростове-на-Дону трассу
      для МТБ или другими словами - спот, а 
      также каждый день прогрессируют и оттачивают мастество владения велосипедом.        </p>
      <img  class="wow bounceInDown"  src="<?php echo Yii::$app->request->baseUrl;?>/img/index/rider.png" alt="">
    </div>
    <div class="down">
      <a id="next" href="#point"><img class="arrow wow fadeIn" src="<?php echo Yii::$app->request->baseUrl;?>/img/index/arrow.png" alt=""></a>
    </div>
  </section> 
  <section>
    
    <p id="point"></p>
    <h1 class="wow jackInTheBox" data-wow-offset="300" data-wow-duration="1s">На нашем сайте Вы найдете:</h1>
    <article class="wow rollIn" data-wow-offset="250" data-wow-duration="0.6s">
      <a><img src="<?php echo Yii::$app->request->baseUrl;?>/img/index/news.png" alt="news"></a>
      <a href="publications.html"><h2 class="animated">НОВОСТНЫЕ ПУБЛИКАЦИИ</h2></a>
      <p>Новости со стройки спота в Парке Авиаторов, объявления о сборах,</p>
      <p>а также публикации о соревнованиях, </p>
      <p>где выступали участники сообщества</p>
    </article>
    <hr>
    <article class="wow rollIn" data-wow-duration="0.6s">
      <a><img src="<?php echo Yii::$app->request->baseUrl;?>/img/index/article.png" alt="articles"></a>
      <a href="publications.html"><h2 class="animated">ОБУЧАЮЩИЕ СТАТЬИ</h2></a>
      <p>Публикации, которые помогут Вам в повышении навыка владения велосипедом</p>
    </article>    
    <article class="wow rollIn" data-wow-duration="0.6s">
      <a><img src="<?php echo Yii::$app->request->baseUrl;?>/img/index/media.png" alt="articles"></a>
      <a href="publications.html"><h2 class="animated">ОТЧЁТЫ</h2></a>
      <p>Отчёты со спортивных мероприятий, которые посещали</p>
      <p>участники нашего сообщества</p>
    </article>
  </section>
  <div class="join">
    <div>
      <p>
        Небольшая группа смельчаков выросла до целого сообщества.
        Над трассой трудится не два человека, а уже много больше, 
        имеется финансирование от магазин ВелоАС. Также участники посещают соревнования и спортивные сборы, 
        активно развивают свои навыки в сфере экстремального велоспорта. 
      </p>
    </div>
    <div>
    <img src="<?php echo Yii::$app->request->baseUrl;?>/img/index/back2.jpg" alt="">
    </div>
  </div>
</main>
