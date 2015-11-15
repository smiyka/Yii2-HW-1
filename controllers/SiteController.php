<?php

namespace app\controllers;

use app\models\Contact;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
      public function actionIndex()
    {
        $phone = Yii::$app->request->get('phone');
        $email = Yii::$app->request->get('email');

        $contact = new Contact();

        $contact->setEmail($email);
        $contact->setPhone($phone);


        return $this->render('index', ["contact"=>$contact]);
    }



}
