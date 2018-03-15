<?php

require_once 'app/models/User.php';
require_once 'app/components/Weather.php';


class MainController extends Controller
{
    public function homeAction() {
        $user = new User();
        $user->setFirstname('Vadim');
        $user->setLastname('Ara');

        $this->render('home.php', 'Главная', [
            'user' => $user,
            'time' => time(),
        ]);
    }

    public function regAction() {
        $param = $_POST;
        $user = new User();
        if (isset($param['is_agree'])) {
            $user->setFirstname($param['firstname']);
            $user->setLastname($param['lastname']);
            $user->setGrowth($param['growth']);
            $user->setPassword($param['password']);
            $user->setSex($param['sex']);
            $user->setAge($param['age']);
            if (isset($param['stack_learn'])) {
                $user->setStackLearn($param['stack_learn']);
            }
        }
        $this->render('reg.php', 'Регистрация', [
            'user'=> $user,
        ]);
    }

    public function weatherAction() {
        $city = 'Saint Petersburg,ru';
        try {
            $weather = new Weather('012e34537b328a78762f56bb13b7ac8c');
        } catch (Exception $e) {
            $error = 'Error!';
        }
        $this->render('weather.php', 'Погода', [
            'weatherByCity'=> $weather->getWeatherByCity($city),
        ]);
    }
}