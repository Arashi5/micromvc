<?php

namespace app\controllers;

use app\components\Session;
use app\models\User;

class MainController extends Controller
{
    public function homeAction() {
        $user = new User();
        $user->setFirstname('Роман');
        $user->setLastname('Ястребов');

        $this->render('home.php', 'Главная', [
            'user' => $user,
            'time' => time(),
        ]);
    }

    public function regAction() {
        $param = $_POST;
        $user = new User();
        if ( isset($param['is_agree']) ) {
            // Создание пользователя
            $user->setFirstname($param['firstname']);
            $user->setLastname($param['lastname']);
            $user->setPassword($param['password']);
            $user->setSex($param['sex']);
            $user->setAge($param['age']);
            $user->setGrowth($param['growth']);
            if (isset($param['stack_learn'])) {
                $user->setStackLearn($param['stack_learn']);
            }
            Session::addFlash(Session::FLASH_SUCCESS, 'Пользователь успешно зарегистрирован');
        }
        $this->render('reg.php', 'Регистрация', [
            'user' => $user,
        ]);
    }
}