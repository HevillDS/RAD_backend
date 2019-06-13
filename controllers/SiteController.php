<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Registry;
use app\models\Login;
use app\models\Article;
use yii\data\Pagination;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionArticles()
    {
        
        $query = Article::find();
        $count = $query->count();
        // подключаем класс Pagination, выводим по 1 пунктов на страницу
        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 3]);
        // приводим параметры в ссылке к ЧПУ
        $articles = $query->offset($pagination->offset)
        ->limit($pagination ->limit)
        ->all();


        return $this->render('articles', [
            'articles'=> $articles,
            'pagination'=>$pagination,
        ]);
    }


    public function actionArticle($id)
    {
        $article = Article::findOne($id);
        return $this->render('article', [
            'article'=>$article
        ]);
    }

    public function actionSpotmap()
    {
        return $this->render('spotmap');
    }
}
