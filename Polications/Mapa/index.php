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
                        <img src="../images/MAPACI.png" usemap="#mapa" class="mapa" alt="Mapa de la Escuela Politécnica de Guadalajara">
                    </div>

                    <map name="mapa">
                        
                        <area id="direccion" shape="rect" coords="1046,611,1067,630" class="area" title="Dirección" 
                        onclick="info($('#direccion').attr('title'))" href="#">

                        <area id="recepcion" shape="rect" coords="876,493,903,542" class="area" title="Recepción" 
                        onclick="info($('#recepcion').attr('title'))" href="#">

                        <area id="lab_fis" shape="rect" coords="876,493,903,542" class="area" title="Laboratorio de Física" 
                        onclick="info($('#lab_fis').attr('title'))" href="#">
                        
                        <area id="control" shape="rect" coords="876,493,903,542" class="area" title="Control Escolar" 
                        onclick="info($('#control').attr('title'))" href="#">

                        <area id="lab_bio" shape="rect" coords="876,493,903,542" class="area" title="Laboratorio de Biotecnología" 
                        onclick="info($('#lab_bio').attr('title'))" href="#">

                        <area id="almacén" shape="rect" coords="876,493,903,542" class="area" title="Almacén" 
                        onclick="info($('#almacén').attr('title'))" href="#">

                        <area id="lab_qui_A" shape="rect" coords="876,493,903,542" class="area" title="Laboratorio de Análisis Químicos A" 
                        onclick="info($('#lab_qui_A').attr('title'))" href="#">

                        <area id="lab_qui_B" shape="rect" coords="876,493,903,542" class="area" title="Laboratorio de Análisis Químicos B" 
                        onclick="info($('#lab_qui_B').attr('title'))" href="#">
                        
                        <area id="lab_qui_C" shape="rect" coords="876,493,903,542" class="area" title="Laboratorio de Análisis Químicos C" 
                        onclick="info($('#lab_qui_C').attr('title'))" href="#">

                        <area id="lab_qui_E" shape="rect" coords="876,493,903,542" class="area" title="Laboratorio de Análisis Químicos E" 
                        onclick="info($('#lab_qui_E').attr('title'))" href="#">

                        <area id="oficialia" shape="rect" coords="876,493,903,542" class="area" title="Oficialía Mayor" 
                        onclick="info($('#oficialia').attr('title'))" href="#">

                        <area id="biblioteca" shape="rect" coords="876,493,903,542" class="area" title="Biblioteca" 
                        onclick="info($('#biblioteca').attr('title'))" href="#">

                        <area id="finanzas" shape="rect" coords="876,493,903,542" class="area" title="Finanzas" 
                        onclick="info($('#finanzas').attr('title'))" href="#">

                        <area id="b14" shape="rect" coords="876,493,903,542" class="area" title="B14 (Coordinación de Carreras)" 
                        onclick="info($('#b14').attr('title'))" href="#">

                        <area id="coordinacion" shape="rect" coords="876,493,903,542" class="area" title="Coordinación Académica" 
                        onclick="info($('#coordinacion').attr('title'))" href="#">

                        <area id="lab_ali" shape="rect" coords="876,493,903,542" class="area" title="Laboratorio de Análisis de Alimentos" 
                        onclick="info($('#lab_ali').attr('title'))" href="#">

                        <area id="tall_ali" shape="rect" coords="876,493,903,542" class="area" title="Taller de Tecnología de Alimentos" 
                        onclick="info($('#tall_ali').attr('title'))" href="#">

                        <area id="tall_lac" shape="rect" coords="876,493,903,542" class="area" title="Taller de Lácteos" 
                        onclick="info($('#tall_lac').attr('title'))" href="#">

                        <area id="lab_micro" shape="rect" coords="876,493,903,542" class="area" title="Laboratorío de Microbiología" 
                        onclick="info($('#lab_micro').attr('title'))" href="#">

                        <area id="lab_info" shape="rect" coords="876,493,903,542" class="area" title="Laboratorio de Informática" 
                        onclick="info($('#lab_info').attr('title'))" href="#">

                        <area id="lab_ana_info" shape="rect" coords="876,493,903,542" class="area" title="Laboratorio de Análisis de Informática" 
                        onclick="info($('#lab_ana_info').attr('title'))" href="#">

                        <area id="lab_micro_2" shape="rect" coords="876,493,903,542" class="area" title="Laboratorío de Microbiología II" 
                        onclick="info($('#lab_micro_2').attr('title'))" href="#">
                        
                        <area id="lab_com" shape="rect" coords="" class="area" title="Laboratorio de Cómputo" 
                        onclick="info($('#lab_com').attr('title'))" href="#">

                        <area id="lab_red" shape="rect" coords="974,870,1007,899" class="area" title="Laboratorio de Redes" 
                        onclick="info($('#lab_red').attr('title'))" href="#">

                        <area id="lab_elec" shape="rect" coords="" class="area" title="Laboratorio de Electrónica" 
                        onclick="info($('#lab_elec').attr('title'))" href="#">

                        <area id="tall_elec" shape="rect" coords="" class="area" title="Taller de Electricidad" 
                        onclick="info($('#tall_elec').attr('title'))" href="#">

                        <area id="coor_tuto" shape="rect" coords="" class="area" title="Coordinación de Tutorías" 
                        onclick="info($('#coor_tuto').attr('title'))" href="#">

                        <area id="lab_instru" shape="rect" coords="" class="area" title="Laboratorio de Análisis Instrumental" 
                        onclick="info($('#lab_instru').attr('title'))" href="#">

                        <area id="lab_qui_F" shape="rect" coords="876,493,903,542" class="area" title="Laboratorio de Análisis Químicos F" 
                        onclick="info($('#lab_qui_F').attr('title'))" href="#">

                        <area id="lab_com_2" shape="rect" coords="" class="area" title="Laboratorio de Cómputo II" 
                        onclick="info($('#lab_com_2').attr('title'))" href="#">

                        <area id="lab_com_esp" shape="rect" coords="" class="area" title="Laboratorio de Cómputo Especializado" 
                        onclick="info($('#lab_com_esp').attr('title'))" href="#">

                        <area id="tall_hidr" shape="rect" coords="" class="area" title="Taller de Hidráulica y Neumática" 
                        onclick="info($('#tall_hidr').attr('title'))" href="#">

                        <area id="tall_dom" shape="rect" coords="" class="area" title="Taller de Domótica y Sensórica" 
                        onclick="info($('#tall_dom').attr('title'))" href="#">

                        <area id="tall_mec_cep" shape="rect" coords="" class="area" title="Taller Mecánico, Cepillo y Fresadora" 
                        onclick="info($('#tall_mec_cep').attr('title'))" href="#">

                        <area id="tall_maq" shape="rect" coords="" class="area" title="Taller de Centros de Maquinado" 
                        onclick="info($('#tall_maq').attr('title'))" href="#">

                        <area id="tall_ref" shape="rect" coords="" class="area" title="Taller de Refrigeración" 
                        onclick="info($('#tall_ref').attr('title'))" href="#">

                        <area id="tall_aju" shape="rect" coords="" class="area" title="Taller de Ajuste de Banco y Taladro" 
                        onclick="info($('#tall_aju').attr('title'))" href="#">

                        <area id="tall_sold" shape="rect" coords="" class="area" title="Taller de Soldadura" 
                        onclick="info($('#tall_sold').attr('title'))" href="#">

                        <area id="lab_metal" shape="rect" coords="" class="area" title="Laboratorio de Análisis Metalúrgicos" 
                        onclick="info($('#lab_metal').attr('title'))" href="#">

                        <area id="lab_tec" shape="rect" coords="" class="area" title="Laboratorio de Tecnología Industrial" 
                        onclick="info($('#lab_tec').attr('title'))" href="#">

                        <area id="lab_ens" shape="rect" coords="" class="area" title="Laboratorio de Ensayos Metalográficos" 
                        onclick="info($('#lab_ens').attr('title'))" href="#">

                        <area id="lab_are" shape="rect" coords="" class="area" title="Laboratorio de Prueba de Arenas" 
                        onclick="info($('#lab_are').attr('title'))" href="#">

                        <area id="tall_fun" shape="rect" coords="" class="area" title="Taller de Fundición" 
                        onclick="info($('#tall_fun').attr('title'))" href="#">

                        <area id="tall_emb" shape="rect" coords="" class="area" title="Taller de Embobinado" 
                        onclick="info($('#tall_emb').attr('title'))" href="#">

                        <area id="tall_ins" shape="rect" coords="" class="area" title="Taller de Instalación Eléctrica Residenciales" 
                        onclick="info($('#tall_ins').attr('title'))" href="#">

                        <area id="tall_sub" shape="rect" coords="" class="area" title="Taller de Subestaciones Eléctricas" 
                        onclick="info($('#tall_sub').attr('title'))" href="#">

                        <area id="tall_mec" shape="rect" coords="" class="area" title="Taller Mecánico" 
                        onclick="info($('#tall_mec').attr('title'))" href="#">

                        <area id="lab_hard" shape="rect" coords="" class="area" title="Laboratorio de Hardware" 
                        onclick="info($('#lab_hard').attr('title'))" href="#">

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
