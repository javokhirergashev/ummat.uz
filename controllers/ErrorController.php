<?php

namespace app\controllers;

class ErrorController extends GeneralController
{
    public function actionView()
    {
            return $this->render('view');
    }

}