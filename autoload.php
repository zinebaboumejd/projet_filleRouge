<?php

session_start();

require_once("./bootstrap.php");
spl_autoload_register('autoload'); // Register autoload function

function autoload($class_name){  
    $array_path=array(   //tablaeu de correspondance  les noms de classes
  'database/',
  'app/classes/',
  'models/',
  'controllers/',
  'pulic/image/'
    );
  $parts=explode('\\',$class_name);// exploser le nom de la classe pour obtenir le chemin du fichier \
  $name=array_pop($parts);// dernier element

  foreach($array_path as $path){
    $file=sprintf($path.'%s.php',$name);  //construire le chemin du fichier
   if(is_file($file)){
            include_once $file;
        }
  }
}

