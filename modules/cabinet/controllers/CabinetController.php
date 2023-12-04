<?php

namespace app\modules\cabinet\controllers;

use app\models\LoginForm;
use Yii;
use yii\web\Controller;

/**
 * Default controller for the `cabinet` module
 */
class CabinetController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
}
