<?php 

use yii\widgets\Menu;
use yii\helpers\Html;

?>


<main class="jumbotron container" style="background:#f1db5e">
	<div>
		<h1><span class="glyphicon glyphicon-cog glyphicon-lg"></span></h1>
		<h1><b>Welcome</b></h1>
		<h2>Панель администратора</h2><br>
	</div>
	<article class="container">
		<div>
			<h2>Добавить, удалить, изменить</h2>
			<p>
				<?= Html::a('Статьи', ['/admin/article'], ['class' => 'btn btn-success btn-lg']) ?> 
				<?= Html::a('Категории', ['/admin/article-category'], ['class' => 'btn btn-success btn-lg']) ?>
				<?= Html::a('Комментарии', ['/admin/article-comment'], ['class' => 'btn btn-success btn-lg']) ?>
			</p>
		</div>
		<div>
			<h2>Вернуться домой?</h2>
			<p>
				<?= Html::a('Да!', ['/site'], ['class' => 'btn btn-primary btn-lg']) ?> 
			</p>
		</div>
	</article>
</main>