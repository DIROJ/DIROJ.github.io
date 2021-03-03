<?php
function nav(){
    echo '<nav>';
    echo '<div id="mySidenav" class="sidenav">';
    echo '        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>';  /*Configuracion de Boton*/
    echo '        <a href="/Polications/index.php"   >Inicio</a>';                                  /*Navegacion de Páginas*/
    echo '        <a href="/Polications/FAQ/faq.php"     >Preguntas Frecuentes</a>';
    echo '        <a href="/Polications/Foros/foros.php"   >Foros</a>';
    echo '        <a href="/Polications/Carreras/carreras.php">Carreras</a>';
    echo '        <a href="/Polications/Mapa/mapa.php"    >Mapa</a>';
    echo '        <a href=""></a>';
    echo '        <a href=""></a>';
    echo '        <a href=""></a>';
    echo '        <a href="/Polications/sign_in.php">Inicio de Sesión</a>';
    echo '        <a href="/Polications/sign_up.php">Registro</a>';
    echo '</div>';
    echo '</nav>';
                                                                                                    /*Boton de Navegación*/
    echo '      <span onclick="openNav()" class="boton"><button class="btn"><i class="fa fa-bars fa-3x"></i></button></span>';

}
?>
