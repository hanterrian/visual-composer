<?php

namespace VisualComposer\controllers;

use yii\web\Controller;

/**
 * Class AdminController
 *
 * @package VisualComposer\controllers
 */
class AdminController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
