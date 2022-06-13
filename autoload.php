<?php

session_start();

require_once("./bootstrap.php");
spl_autoload_register('autoload');

function autoload($class_name){
    $array_path=array(
  'database/',
  'app/classes/',
  'models/',
  'controllers/',
  'pulic/image/'
    );
  $parts=explode('\\',$class_name);//kat9asm bi \
  $name=array_pop($parts);//akhir element

  foreach($array_path as $path){
    $file=sprintf($path.'%s.php',$name);
   if(is_file($file)){
            include_once $file;
        }
  }
}

