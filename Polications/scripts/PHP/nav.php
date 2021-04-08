<?php
function nav(){
    echo '<nav>';
    echo '<div id="mySidenav" class="sidenav">';
    echo '        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>';  /*Configuracion de Boton*/
    echo '        <a href="/GIT/DIROJ.github.io/Polications/"   >Inicio</a>';                                  /*Navegacion de Páginas*/
    echo '        <a href="/GIT/DIROJ.github.io/Polications/FAQ/"     >Preguntas Frecuentes</a>';
    echo '        <a href="/GIT/DIROJ.github.io/Polications/Foros/"   >Foros</a>';
    echo '        <a href="/GIT/DIROJ.github.io/Polications/Carreras/">Carreras</a>';
    echo '        <a href="/GIT/DIROJ.github.io/Polications/Mapa/"    >Mapa</a>';
    echo '        <a href=""></a>';
    echo '        <a href=""></a>';
    echo '        <a href=""></a>';
    echo '        <a href="/GIT/DIROJ.github.io/Polications/sign_in.php">Inicio de Sesión</a>';
    echo '        <a href="/GIT/DIROJ.github.io/Polications/registro.php">Registro</a>';
    echo '</div>';
    echo '</nav>';
                                                                                                    /*Boton de Navegación*/
    echo '      <span onclick="openNav()" class="boton"><button class="btn"><i class="fa fa-bars fa-3x"></i></button></span>';

}
?>
