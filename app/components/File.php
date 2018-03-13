<?php


class File
{
     const ROOT_PATH = __DIR__ . '/../../';

     public static function getCache($uniqDate, $prefix) {
         $fileName = md5($uniqDate);
         $dir="var/cache/$prefix/";
         $filePath = self::ROOT_PATH.$dir.$fileName;
         if(file_exists($filePath)) {
             return null;
         }
      return file_get_contents($filePath);
     }

     public static function cache($data, $uniqDate, $prefix) {
         $fileName = md5($uniqDate);
         $dir="var/cache/$prefix/";
         self::createFile($fileName, $dir, $data);
     }

     public static function createFile($fileName, $dir, $data) {
        self::createDir($dir);
        $result = file_put_contents(self::ROOT_PATH.$dir.$fileName, $data);
        chmod(self::ROOT_PATH.$dir.$fileName, 0777);
        return $result;
     }

     public static function createDir($dir) {
         $dir = self::ROOT_PATH . $dir;
         if(!file_exists($dir)) {
             mkdir($dir, 0777, true);
             chmod($dir, 0777);
         }
     }
}