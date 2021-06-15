<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
        <title>Polications - Mapa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/mapa.css">
        <link rel="stylesheet" type="text/css" href="../styles/plantilla-mapa.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../images/icono.png" type="image/png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="description" content="Esta página muestra un mapa de la Escuela Politécnica de 
        Guadalajara, este mapa contiene llos lugares de mayor relevancia dentro de la escuela y una
        descripción de estos.">
        <meta name="author" content="Rob Mckenna">
    </head>
    
    

        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <script src = "../bootstrap/js/bootstrap.min.js" ></script>

    <body class="cuerpo" >

        <?php 
            session_start();
            if (isset($_SESSION["usuario"])){
                require '../scripts/PHP/nav-user.php';
                nav();
            }else{
                require '../scripts/PHP/nav.php';
                nav();
            }
        ?>


            <main>
                
                <section class="seccion-mapa">

                    
                    <div id="mapa-cont" class="mapa-cont">
                        <img src="../images/MAPA.png" usemap="#mapa" class="mapa" alt="Mapa de la Escuela Politécnica de Guadalajara">
                    </div>

                    <map name="mapa">
                        
                        <area id="direccion" shape="rect" coords="1035,606,1064,620" class="area" title="Dirección" 
                        onclick="info($('#direccion').attr('title'))" href="#">

                        <area id="control" shape="rect" coords="1070,600,1095,615" class="area" title="Control Escolar" 
                        onclick="info($('#control').attr('title'))" href="#">

                        <area id="sala_maes" shape="rect" coords="1038,589,1064,604" class="area" title="Sala de Maestros" 
                        onclick="info($('#sala_maes').attr('title'))" href="#">

                        <area id="enfermeria" shape="rect" coords="1149,586,1174,602" class="area" title="Enfermería" 
                        onclick="info($('#enfermeria').attr('title'))" href="#">

                        <area id="lab_fis" shape="rect" coords="1107,603,1137,629" class="area" title="Laboratorio de Física" 
                        onclick="info($('#lab_fis').attr('title'))" href="#">

                        <area id="lab_bio" shape="rect" coords="1143,629,1173,605" class="area" title="Laboratorio de Biotecnología" 
                        onclick="info($('#lab_bio').attr('title'))" href="#">

                        <area id="almacen" shape="rect" coords="867,482,900,511" class="area" title="Almacén" 
                        onclick="info($('#almacen').attr('title'))" href="#">

                        <area id="lab_qui_A" shape="rect" coords="793,510,823,486" class="area" title="Laboratorio de Análisis Químicos A" 
                        onclick="info($('#lab_qui_A').attr('title'))" href="#">

                        <area id="lab_qui_B" shape="rect" coords="726,511,758,485" class="area" title="Laboratorio de Análisis Químicos B" 
                        onclick="info($('#lab_qui_B').attr('title'))" href="#">
                        
                        <area id="lab_qui_C" shape="rect" coords="649,512,682,485" class="area" title="Laboratorio de Análisis Químicos C" 
                        onclick="info($('#lab_qui_C').attr('title'))" href="#">

                        <area id="lab_qui_E" shape="rect" coords="582,510,613,485" class="area" title="Laboratorio de Análisis Químicos E" 
                        onclick="info($('#lab_qui_E').attr('title'))" href="#">

                        <area id="oficialia" shape="rect" coords="974,641,998,627" class="area" title="Oficialía Mayor" 
                        onclick="info($('#oficialia').attr('title'))" href="#">

                        <area id="biblioteca" shape="rect" coords="973,624,999,604" class="area" title="Biblioteca" 
                        onclick="info($('#biblioteca').attr('title'))" href="#">

                        <area id="auditorio" shape="rect" coords="1002,623,1024,600" class="area" title="Auditorio" 
                        onclick="info($('#auditorio').attr('title'))" href="#">

                        <area id="finanzas" shape="rect" coords="968,618,945,602" class="area" title="Finanzas" 
                        onclick="info($('#finanzas').attr('title'))" href="#">

                        <area id="b14" shape="rect" coords="597,620,622,636" class="area" title="B14 (Coordinación de Carreras)" 
                        onclick="info($('#b14').attr('title'))" href="#">

                        <area id="coordinacion" shape="rect" coords="1003,647,1026,663" class="area" title="Coordinación Académica" 
                        onclick="info($('#coordinacion').attr('title'))" href="#">

                        <area id="lab_ali" shape="rect" coords="659,778,689,751" class="area" title="Laboratorio de Análisis de Alimentos" 
                        onclick="info($('#lab_ali').attr('title'))" href="#">

                        <area id="tall_ali" shape="rect" coords="618,751,643,777" class="area" title="Taller de Tecnología de Alimentos" 
                        onclick="info($('#tall_ali').attr('title'))" href="#">

                        <area id="tall_lac" shape="rect" coords="577,751,600,776" class="area" title="Taller de Lácteos" 
                        onclick="info($('#tall_lac').attr('title'))" href="#">

                        <area id="lab_micro" shape="rect" coords="719,775,750,751" class="area" title="Laboratorío de Microbiología" 
                        onclick="info($('#lab_micro').attr('title'))" href="#">

                        <area id="lab_info" shape="rect" coords="570,895,602,871" class="area" title="Laboratorio de Informática" 
                        onclick="info($('#lab_info').attr('title'))" href="#">

                        <area id="lab_micro_2" shape="rect" coords="799,896,828,871" class="area" title="Laboratorío de Microbiología II" 
                        onclick="info($('#lab_micro_2').attr('title'))" href="#">
                        
                        <area id="lab_com" shape="rect" coords="984,922,1014,898" class="area" title="Laboratorio de Cómputo" 
                        onclick="info($('#lab_com').attr('title'))" href="#">

                        <area id="lab_red" shape="rect" coords="987,870,1014,896" class="area" title="Laboratorio de Redes" 
                        onclick="info($('#lab_red').attr('title'))" href="#">

                        <area id="tall_electro" shape="rect" coords="896,901,922,922" class="area" title="Taller de Electrónica" 
                        onclick="info($('#tall_electro').attr('title'))" href="#">

                        <area id="tall_electri" shape="rect" coords="845,901,869,922" class="area" title="Taller de Electricidad" 
                        onclick="info($('#tall_electri').attr('title'))" href="#">

                        <area id="coor_tuto" shape="rect" coords="781,906,807,922" class="area" title="Coordinación de Tutorías" 
                        onclick="info($('#coor_tuto').attr('title'))" href="#">

                        <area id="lab_instru" shape="rect" coords="717,923,748,900" class="area" title="Laboratorio de Análisis Instrumental" 
                        onclick="info($('#lab_instru').attr('title'))" href="#">

                        <area id="lab_qui_F" shape="rect" coords="636,922,667,898" class="area" title="Laboratorio de Análisis Químicos F" 
                        onclick="info($('#lab_qui_F').attr('title'))" href="#">

                        <area id="lab_com_2" shape="rect" coords="570,1015,601,989" class="area" title="Laboratorio de Cómputo II" 
                        onclick="info($('#lab_com_2').attr('title'))" href="#">

                        <area id="lab_com_esp" shape="rect" coords="614,1014,644,989" class="area" title="Laboratorio de Cómputo Especializado" 
                        onclick="info($('#lab_com_esp').attr('title'))" href="#">

                        <area id="aula_comi" shape="rect" coords="736,971,759,987" class="area" title="Aula de comisión" 
                        onclick="info($('#aula_comi').attr('title'))" href="#">

                        <area id="orien_edu" shape="rect" coords="571,986,595,970" class="area" title="Orientación Educativa" 
                        onclick="info($('#orien_edu').attr('title'))" href="#">

                        <area id="aula_ext" shape="rect" coords="661,1009,686,985" class="area" title="Aula Extendida" 
                        onclick="info($('#aula_ext').attr('title'))" href="#">

                        <area id="aula_mult" shape="rect" coords="370,869,395,848" class="area" title="Aula de Usos Múltiples" 
                        onclick="info($('#aula_mult').attr('title'))" href="#">

                        <area id="lab_hard" shape="rect" coords="648,128,682,103" class="area" title="Laboratorio de Hardware" 
                        onclick="info($('#lab_hard').attr('title'))" href="#">

                        <area id="lab_metal" shape="rect" coords="438,487,469,461" class="area" title="Laboratorio de Análisis Metalúrgicos" 
                        onclick="info($('#lab_metal').attr('title'))" href="#">

                        <area id="tall_sold" shape="rect" coords="290,460,314,484" class="area" title="Taller de Soldadura" 
                        onclick="info($('#tall_sold').attr('title'))" href="#">

                        <area id="tall_hidr" shape="rect" coords="289,669,313,694" class="area" title="Taller de Hidráulica y Neumática" 
                        onclick="info($('#tall_hidr').attr('title'))" href="#">

                        <area id="tall_dom" shape="rect" coords="364,671,389,697" class="area" title="Taller de Domótica y Sensórica" 
                        onclick="info($('#tall_dom').attr('title'))" href="#">

                        <area id="tall_mec_cep" shape="rect" coords="443,672,469,697" class="area" title="Taller Mecánico, Cepillo y Fresadora" 
                        onclick="info($('#tall_mec_cep').attr('title'))" href="#">

                        <area id="tall_maq" shape="rect" coords="290,735,314,760" class="area" title="Taller de Centros de Maquinado" 
                        onclick="info($('#tall_maq').attr('title'))" href="#">

                        <area id="tall_ref" shape="rect" coords="362,737,386,761" class="area" title="Taller de Refrigeración" 
                        onclick="info($('#tall_ref').attr('title'))" href="#">

                        <area id="tall_aju" shape="rect" coords="443,738,468,762" class="area" title="Taller de Ajuste de Banco y Taladro" 
                        onclick="info($('#tall_aju').attr('title'))" href="#">

                        <area id="lab_tec" shape="rect" coords="260,385,291,358" class="area" title="Laboratorio de Tecnología Industrial" 
                        onclick="info($('#lab_tec').attr('title'))" href="#">



                        <area id="lab_ens" shape="rect" coords="222,368,253,343" class="area" title="Laboratorio de Ensayos Metalográficos" 
                        onclick="info($('#lab_ens').attr('title'))" href="#">

                        <area id="lab_are" shape="rect" coords="219,337,248,311" class="area" title="Laboratorio de Prueba de Arenas" 
                        onclick="info($('#lab_are').attr('title'))" href="#">

                        <area id="tall_fun" shape="rect" coords="215,338,192,316" class="area" title="Taller de Fundición" 
                        onclick="info($('#tall_fun').attr('title'))" href="#">

                        <area id="tall_emb" shape="rect" coords="178,291,201,313" class="area" title="Taller de Embobinado" 
                        onclick="info($('#tall_emb').attr('title'))" href="#">

                        <area id="tall_ins" shape="rect" coords="174,314,152,292" class="area" title="Taller de Instalación Eléctrica Residenciales" 
                        onclick="info($('#tall_ins').attr('title'))" href="#">

                        <area id="tall_sub" shape="rect" coords="143,264,166,287" class="area" title="Taller de Subestaciones Eléctricas" 
                        onclick="info($('#tall_sub').attr('title'))" href="#">

                        <area id="tall_mec" shape="rect" coords="115,265,138,287" class="area" title="Taller Mecánico" 
                        onclick="info($('#tall_mec').attr('title'))" href="#">

                        
                        
                        <area id="cafe" shape="rect" coords="972,495,942,470" class="area" title="Cafetería Módulo A" 
                        onclick="info($('#cafe').attr('title'))" href="#">
                        
                        <area id="papeleria" shape="rect" coords="1055,258,1031,239" class="area" title="Papelería" 
                        onclick="info($('#papeleria').attr('title'))" href="#">
                        
                        <area id="cafe_carpa" shape="rect" coords="488,372,516,397" class="area" title="Cafetería (Carpa Roja)" 
                        onclick="info($('#cafe_carpa').attr('title'))" href="#">

                        <area id="bibli_nue" shape="rect" coords="103,398,136,423" class="area" title="Biblioteca Nueva" 
                        onclick="info($('#bibli_nue').attr('title'))" href="#">

                        <area id="emprendurismo" shape="rect" coords="707,67,734,86" class="area" title="Emprendurismo" 
                        onclick="info($('#emprendurismo').attr('title'))" href="#">

                        <area id="lab_plasti" shape="rect" coords="528,222,559,195" class="area" title="Laboratorio de Plásticos" 
                        onclick="info($('#lab_plasti').attr('title'))" href="#">

                        <area id="edi_nue" shape="rect" coords="376,328,401,346" class="area" title="Edificio Nuevo" 
                        onclick="info($('#edi_nue').attr('title'))" href="#">

                        

                    </map>

                </section>
                <section>
                    <div class="info">
                        <h3>INFORMACIÓN</h3>
                        <?php
                            echo '<p class="info_db" id="infor"></p>';
                        ?>
                    </div>
                </section>
                

            </main>

        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>

        

        <script src="../scripts/js/mapa.js"></script>
        <script src="../scripts/js/plantilla.js"></script>

    </body>
    
</html>
