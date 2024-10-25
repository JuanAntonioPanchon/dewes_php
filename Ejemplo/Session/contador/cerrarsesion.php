<?php
/** codigo para cerrar sesión */
//cuando quiera hacer uso tiene que aparecer session_Start
    session_start();
    //si quiero cerrar sesion tengo que poner eso
    session_destroy();
    
    
   //redirect
   //Para redirigir, necesitas poner eso y la direccion que quiera y despues die para que mate el proceso que está
    /*Este redirecciona a google
    header("Location: https://www.google.com/");
    */
     header("Location: contador.php");
     die();
?>
