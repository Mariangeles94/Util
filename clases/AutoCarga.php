<?php

class AutoCarga {
  static function cargar($clase){
      $clase=  str_replace("\\", "/", $clase);
      $archivo = "clases/" . str_replace('\\', '/', $clase) . ".php";
        if (file_exists($archivo)) {
            require $archivo;
        }
     }
}
spl_autoload_register('AutoCarga::cargar');//Tiene que estar fuera de la clase copyright Jonatan
