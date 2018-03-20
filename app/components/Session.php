<?php

namespace app\components;

class Session
{
    const FLASH_SUCCESS = 'success';
    const FLASH_DANGER = 'danger';

    public static function start() {
        session_start();
    }

    public static function destroy() {
        session_destroy();
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        return $_SESSION[$key];
    }

    public static function addFlash($type, $message) {
        $_SESSION['flash_messages'][$type][] = $message;
    }

    public static function getFlashes($type = null) {
        $result = [];
        if (isset($_SESSION['flash_messages'])) {
            $result = $_SESSION['flash_messages'];
            if ($type) {
                $result = $result[$type];
                unset($_SESSION['flash_messages'][$type]);
            } else {
                unset($_SESSION['flash_messages']);
            }
        }
        return $result;
    }
}