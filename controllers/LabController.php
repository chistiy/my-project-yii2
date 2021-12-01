<?php

namespace app\controllers;

use yii\web\Controller;

class  LabController extends Controller
{
   public $defaultAction = 'my-test';
    public function actionIndex()
    {
        return 'HELLO WORLD!';
    }
    
    public function actionMyTest()
    {
        return __METHOD__;
    }

}