<?php

namespace app\modules\bot\controllers;

use app\modules\bot\components\CommandController as Controller;

/**
 * Class StartController
 *
 * @package app\controllers\bot
 */
class StartController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
