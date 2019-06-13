<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Registry;
use app\models\Login;
use app\models\Article;
use yii\data\Pagination;
use app\models\User;

class AuthController extends Controller
{
    /*=============РЕГИСТРАЦИЯ=============*/
    public function actionRegistry()
    {
        $model = new Registry();
        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            if($model->registry())
            {
                return $this->redirect(['auth/login']);
            }
        }
        return $this->render('registry', ['model'=>$model]);
    }

    /*=============АВТОРИЗАЦИЯ=============*/
    public function actionLogin()
    {
        $login_model = new Login();        
        if(Yii::$app->request->post('Login'))
        {
            $login_model->attributes = Yii::$app->request->post('Login');

            if($login_model->validate())
            {
                Yii::$app->user->login($login_model->getUser());
                return $this->redirect(['/site/articles']);
            }
        }
        if(!Yii::$app->user->isGuest)
        {
            return $this->redirect(['index']);
        }
        return $this->render('login',['login_model'=>$login_model]);
    }  

    /*=============АВТОРИЗАЦИЯ ЧЕРЕЗ ВК=============*/    
    public function actionLoginVk($uid, $first_name, $photo)
    {
        $user = new User();
        if($user->saveFromVk($uid, $first_name, $photo))
        {
            return $this->redirect(['site/articles']);
        }
    }

    /*=============ВЫХОД=============*/
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}
