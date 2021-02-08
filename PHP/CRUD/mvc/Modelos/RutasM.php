<?php

class Modelo{

    static public function RutasModelo($rutas){

        If($rutas == "ingreso" || $rutas == "registrar" || $rutas == "empleados"  || $rutas == "editar"|| $rutas == "salir") {

            $pagina ="Vistas/Modulos/". $rutas.".php";
            
        }else if ($rutas == "index"){

            $pagina = "Vistas/Modulos/ingreso.php";

        }else{

            $pagina = "Vistas/Modulos/ingreso.php";

        }
        return $pagina;

    }
  
}
