<?php
function nav(){
    echo '<nav>';
    echo '<div id="mySidenav" class="sidenav">';
    echo '        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>';
    echo '        <a href="index.php"   >Inicio</a>';
    echo '        <a href="faq.php"     >Preguntas Frecuentes</a>';
    echo '        <a href="foros.php"   >Foros</a>';
    echo '        <a href="carreras.php">Carreras</a>';
    echo '        <a href="mapa.php"    >Mapa</a>';
    echo '        <a href=""></a>';
    echo '        <a href=""></a>';
    echo '        <a href=""></a>';
    echo '        <a href="sign_in.html">Inicio de Sesión</a>';
    echo '        <a href="sign_up.html">Registro</a>';
    echo '</div>';
    echo '</nav>';
    echo '      <!-- Boton de Navegacion -->';
    echo '      <span onclick="openNav()" class="boton"><button class="btn"><i class="fa fa-bars fa-3x"></i></button></span>';

}
?>
