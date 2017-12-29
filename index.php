<?php

new finalClass();
new WPML_Utility_Date();

function __autoload($className){
      $fileName = 'class-'.$className.'.php';
      $filePath = __DIR__.DIRECTORY_SEPARATOR.'oop'.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.$fileName;
      if(file_exists($filePath)){
          require_once $filePath;
      }
}