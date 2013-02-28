<!DOCTYPE html>
<html>
    <head>
        <title>TaxLegal Servicios</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="TaxLegal Ecuador" />
        <meta name="keywords" content="taxlegal, legal, ecuador, guayaquil, consultores, auditoria, empresa, consultora, outsourcing" />
        <meta name="author" content="Edson Jonathan Franco Borja" />
        <meta name="robots" content="index,follow" />
        <meta name="distribution" content="global" /> 
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
        <link rel="shortcut icon" href="images/icono_taxlegal.ico"/>
        <script type="text/javascript" src="js/cufon.js"></script>
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/coin-slider.min.js"></script>
        
        
        <!-- INICIO: css y js de acordion servicios-->
        <link rel="stylesheet" href="css/acordion.css" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery-1.6.min.js"></script>
        <script>
            
            function capacitacion(){
                $("#cons-wrapper").slideUp();
                $("#anex-wrapper").slideUp();
                $("#ases-wrapper").slideUp();
                $("#capa-wrapper").slideToggle("slow");
                document.getElementById("capacitacion").setAttribute("style", "font-weight: bold; background: #F8F8F8;");
                document.getElementById("asesoria_tributaria").setAttribute("style", "font-weight: none; background: none repeat scroll 0 0 transparent;");
                document.getElementById("anexos_cumplimiento").setAttribute("style", "font-weight: none; background: none repeat scroll 0 0 transparent;");
                document.getElementById("consultoria").setAttribute("style", "font-weight: none; background: none repeat scroll 0 0 transparent;");
            }
            
            function asesoria_tributaria(){
                $("#cons-wrapper").slideUp();
                $("#anex-wrapper").slideUp();
                $("#capa-wrapper").slideUp();
                $("#ases-wrapper").slideToggle("slow");
                document.getElementById("asesoria_tributaria").setAttribute("style", "font-weight: bold; background: #F8F8F8;");
                document.getElementById("capacitacion").setAttribute("style", "font-weight: none; background: none repeat scroll 0 0 transparent;");
                document.getElementById("anexos_cumplimiento").setAttribute("style", "font-weight: none; background: none repeat scroll 0 0 transparent;");
                document.getElementById("consultoria").setAttribute("style", "font-weight: none; background: none repeat scroll 0 0 transparent;");
            }
            
            function anexos_cumplimiento(){
                $("#cons-wrapper").slideUp();
                $("#ases-wrapper").slideUp();
                $("#capa-wrapper").slideUp();
                $("#anex-wrapper").slideToggle("slow");
                document.getElementById("anexos_cumplimiento").setAttribute("style", "font-weight: bold; background: #F8F8F8;");
                document.getElementById("capacitacion").setAttribute("style", "font-weight: none; background: none repeat scroll 0 0 transparent;");
                document.getElementById("asesoria_tributaria").setAttribute("style", "font-weight: none; background: none repeat scroll 0 0 transparent;");
                document.getElementById("consultoria").setAttribute("style", "font-weight: none; background: none repeat scroll 0 0 transparent;");
            }
            
            function consultoria(){
                $("#anex-wrapper").slideUp();
                $("#ases-wrapper").slideUp();
                $("#capa-wrapper").slideUp();
                $("#cons-wrapper").slideToggle("slow");
                document.getElementById("consultoria").setAttribute("style", "font-weight: bold; background: #F8F8F8;");
                document.getElementById("capacitacion").setAttribute("style", "font-weight: none; background: none repeat scroll 0 0 transparent;");
                document.getElementById("asesoria_tributaria").setAttribute("style", "font-weight: none; background: none repeat scroll 0 0 transparent;");
                document.getElementById("anexos_cumplimiento").setAttribute("style", "font-weight: none; background: none repeat scroll 0 0 transparent;");
            }
            
        </script>
        <!-- FIN: css y js de acordion servicios-->
    </head>
    
    <body>
        <div class="menu">            
                <div class="header_resize" style="width:1000px">
                    <div class="menu_nav">
                        <ul>
                            <li><a href="index.html" style="border-radius: 18px 18px 18px 18px;"><span>Inicio</span></a></li>
                            <li><a href="quienes_somos.html" style="border-radius: 18px 18px 18px 18px;"><span>Quienes Somos</span></a></li>
                            <li><a href="equipo.php" style="border-radius: 18px 18px 18px 18px;"><span>Equipo</span></a></li>
                            <li><a href="recursos_internacionales.html" style="border-radius: 18px 18px 18px 18px;"><span>Recursos Internacionales</span></a></li>
                            <li class="active"><a href="#" style="border-radius: 18px 18px 18px 18px;"><span>Servicios</span></a></li>
                            <li><a href="clientes.html" style="border-radius: 18px 18px 18px 18px;"><span>Clientes</span></a></li>
                            <li><a href="contactenos.html" style="border-radius: 18px 18px 18px 18px;"><span>Cont&aacute;ctenos</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="header">
            <div class="header_resize">
                <div class="clr"></div>
        
                <div class="logo">
                    <img src="images/logo-taxlegal.png">
                </div>
        
                <div class="clr"></div>
            </div>
        </div>
        <div class="content">
            <div class="content_resize">
                <div class="mainbar">
                    <div class="article">
                          <div class="clr"></div>
                          <h2>Servicios</h2>
                          <!-- ********************************* -->
                          <!-- ****Inicio Acordion Servicios**** -->
                          <!-- ********************************* -->
                            <div class="acordion_header" id="consultoria" onclick="consultoria();">Consultor&iacute;a Tributaria<div class="down" ></div></div>
                			<div id="cons-wrapper" class="wrapper">
                				<figure class="img-indent5">
                					<img src="images/cons-tributaria.png" alt="" />
                				</figure>
                				<div class="extra-wrap2">
                					<div class="indent2">
                						<p class="acordion_p">Nuestra pr&aacute;ctica tributaria tiene como premisa el cumplimiento total de las normas de la legislaci&oacute;n vigente, considerando que dentro de este marco legal pueden ser aplicadas alternativas tendientes a racionalizar la carga tributaria.</p>
                                        <p class="acordion_p">Nuestra asistencia profesional consistir&aacute; en la absoluci&oacute;n de consultas tributarias, laborales y legales relacionadas con las operaciones de su empresa y contar&aacute;n en cualquier momento con nuestros servicios profesionales para atender sus requerimientos, atendidos por los socios de la firma y sus respectivos asociados. As&iacute; mismo, informaremos a los ejecutivos de la Compa&ntilde;&iacute;a respecto de los cambios  tributarios, laborales y societarios que fuesen emitidos por los organismos competentes.</p>
                					</div>
                				</div>
                			</div>
                			<div class="acordion_header" id="anexos_cumplimiento" onclick="anexos_cumplimiento();">Anexos de Cumplimiento Tributario (ICT)<div class="down" ></div></div>
                			<div id="anex-wrapper" class="wrapper">
                				<figure class="img-indent5">
                					<img src="images/aud-tributaria.png" alt="" />
                				</figure>
                				<div class="extra-wrap2">
                					<div class="indent2">
                						<p class="acordion_p">Revisaremos los Anexos de Cumplimiento Tributario por el ejercicio fiscal del 2011 con el prop&oacute;sito de asegurarnos de la presentaci&oacute;n adecuada que elimine cualquier potencial riesgo de alg&uacute;n requerimiento de informaci&oacute;n. De igual forma, proporcionaremos a ustedes con antelaci&oacute;n los borradores de los Anexos preparado por nosotros para vuestra aprobaci&oacute;n.</p>
                					</div>
                				</div>
                			</div>
                			<div class="acordion_header" id="asesoria_tributaria" onclick="asesoria_tributaria();">Asesor&iacute;a Tributaria Mensual<div class="down" ></div></div>
                			<div id="ases-wrapper" class="wrapper">
                				<figure class="img-indent5">
                					<img src="images/serv-cont.png" alt="" />
                				</figure>
                				<div class="extra-wrap2">
                					<div class="indent2">
                						<p class="acordion_p">La revisi&oacute;n tributaria comprender&aacute;:</p>
                						<ul>
                							<li class="item_texto">Revisi&oacute;n selectiva de transacciones con el prop&oacute;sito de asegurarnos el cumplimiento de las obligaciones tributarias, tales como retenciones por pagos locales y al exterior, as&iacute; como su oportuna declaraci&oacute;n y pago.</li>
                							<li class="item_texto">Verificaci&oacute;n del cumplimiento de las obligaciones tributarias relacionadas con las retenciones de impuesto a la renta de empleados en relaci&oacute;n de dependencia, referente a los pagos por sueldos, comisiones y otros ingresos recibidos en el a&ntilde;o 2011.</li>
                							<li class="item_texto">Revisi&oacute;n de la declaraci&oacute;n de impuesto a la renta de los empleados en relaci&oacute;n de dependencia, observando su respectiva documentaci&oacute;n soporte, c&aacute;lculo y anexos respectivos.</li>
                							<li class="item_texto">Revisi&oacute;n de las declaraciones del Impuesto al Valor Agregado y la correcta aplicaci&oacute;n del cr&eacute;dito tributario ( Prorrateo del cr&eacute;dito tributario, en caso de que este deba ser aplicado por la compa&ntilde;&iacute;a) con revisi&oacute;n de la declaraci&oacute;n del IVA retenido a sus proveedores en la compra de bienes o pago de servicios y su respectiva documentaci&oacute;n soporte.</li>
                							<li class="item_texto">Revisi&oacute;n y an&aacute;lisis de los &uacute;ltimos estados financieros presentados ante los organismos de control (Direcci&oacute;n General del Servicio de Rentas Internas y Superintendencia de Compa&ntilde;&iacute;a).</li>
                                            <li class="item_texto">Revisi&oacute;n y an&aacute;lisis de las declaraciones de impuesto a la renta determinando las respectivas partidas conciliatorias.</li>
                                            <li class="item_texto">Revisi&oacute;n y c&aacute;lculo del anticipo de impuesto a la renta que deber&aacute; ser realizado por la Compa&ntilde;&iacute;a por los ejercicios fiscales del 2011; Y, Verificaci&oacute;n del cr&eacute;dito tributario registrado por la empresa respecto de los comprobantes de retenci&oacute;n recibidos por la empresa.</li>
                                            <li class="item_texto">Revisi&oacute;n de la correcta determinaci&oacute;n del Anticipo de Impuesto a la Renta, su declaraci&oacute;n y pago en los plazos determinados por las normas legales vigentes.</li>
                                            <li class="item_texto">Revisi&oacute;n del cumplimiento con el Seguro Social respecto de la informaci&oacute;n y documentaci&oacute;n requerida (13avo, 14avo, Fondo de Reserva, Aportes Personales y  Patronales etc).</li>
                                            <li class="item_texto">Verificaci&oacute;n de la presentaci&oacute;n de los estados financieros a la Superintendencia de Compa&ntilde;&iacute;as, as&iacute; como el c&aacute;lculo y pago de contribuci&oacute;n.</li>
                						</ul>
                					</div>
                				</div>
                			</div>
                			<div class="acordion_header" id="capacitacion" onclick="capacitacion();">Capacitaci&oacute;n<div class="down" ></div></div>
                			<div id="capa-wrapper" class="wrapper">
                				<figure class="img-indent5">
                					<img src="images/out-nom.png" alt="" />
                				</figure>
                				<div class="extra-wrap2">
                					<div class="indent2">
                						<p class="acordion_p">Como parte de nuestra asistencia profesional, proporcionaremos a ustedes una charla de impuesto; como actualizaci&oacute;n tributaria la cual ser&aacute; dictada en las instalaciones de su empresa en las fechas previamente acordada con ustedes.</p> 
                                        <p class="acordion_p">Esta charla no tendr&aacute; costo alguno de honorarios, solo se solicitar&aacute; el reembolso de los gastos incurridos en la ejecuci&oacute;n del trabajo antes propuesto.</p>
                					</div>
                				</div>
                			</div>
                          <!-- *****Fin Acordion Servicios****** -->
                    </div>
                </div>
                <div class="sidebar">
                    <div class="gadget">
                        <h2 class="star">Nuestro Equipo</h2>
                        <div class="clr"></div>
                        <ul class="sb_menu">
                            <a href="equipo.php?cesar_holguin"><li>Dr. C&eacute;sar R. Holgu&iacute;n</li></a>
                            <a href="equipo.php?fausto_adanaque"><li>Dr. Fausto Adanaqu&eacute; Eugenio</li></a>
                            <a href="equipo.php?marco_mariduena"><li>Ing. Marco Maridue&ntilde;a</li></a>
                            <a href="equipo.php?danny_aguillon"><li>Ing. Danny F. Aguill&oacute;n</li></a>
                            <a href="equipo.php?edward_aguillon"><li>Ing. Edward F. Aguill&oacute;n</li></a>
                        </ul>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <div class="fbg">
            <div class="fbg_resize">
                <div class="col c1">
                    <h3>&iquest; Qui&eacute;nes Somos ?</h3>
                    <li><p style="text-align:left; line-height: 1.7em;">Somos una empresa dedicada a la consultar&iacute;a tributaria, reclamos administrativos, impugnaciones ante el SRI, elaboraci&oacute;n de estructuras tributarias, manejo de n&oacute;minas confidenciales, verificando el adecuado cumplimiento fiscal, convirti&eacute;ndonos en un verdadero asesor de negocios.</p>
                </div>
                <div class="col c2">
                    <h3>&iquest; Por Qu&eacute; Nosotros ?</h3>
                    <ul class="fbg_ul">
                        <li><p style="text-align:left; padding: 0 10px;">Enfoque metodol&oacute;gico derivado de las mejores pr&aacute;cticas mundiales.</p></li>
                        <li><p style="text-align:left; padding: 0 10px;">Grupo consultor de gran experiencia en actividades de l&iacute;nea.</p></li>
                        <li><p style="text-align:left; padding: 0 10px;">Permanentemente actualizaci&oacute;n en temas t&eacute;cnicos y empresariales..</p></li>
                        <li><p style="text-align:left; padding: 0 10px;">Herramientas de an&aacute;lisis del negocio de nuestros clientes.</p></li>
                    </ul>
                </div>
                <div class="col c3">
                    <h3><span>Cont&aacute;ctenos</h3>
                    <p>Cu&eacute;ntanos tus dudas.</p>
                    <p class="contact_info"> <span>Direcci&oacute;n:</span>&nbsp;Av. 9 de Octubre y  
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            Malec&oacute;n Sim&oacute;n Bol&iacute;var
                                            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            Edificio PREVISORA 
                                            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            Piso 25 oficina 2502 <br />
                    <span>Lugar:</span>Guayaquil - Ecuador<br />
                    <span>Telefax:</span> (593-4) 2309020<br /> </p>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <div class="footer">
            <div class="footer_resize">
                <p class="lf">&copy; Copyright <a href="#"> TaxLegal</a> - Todos los Derechos Reservados 2013</p>
                <p class="rf">Design by <a href="http://www.furs.com"> FurS</a> - Web Templates</p>
                <div style="clear:both;"></div>
            </div>
        </div>
    </body>
</html>
<?php
    if(isset($_REQUEST["consultoria"])){
        echo '<script type="text/javascript">';
        echo 'consultoria()';
        echo '</script>';
    }else{
        if(isset($_REQUEST["anexos_cumplimiento"])){
            echo '<script type="text/javascript">';
            echo 'anexos_cumplimiento()';
            echo '</script>';
        }
        else{
            if(isset($_REQUEST["asesoria_tributaria"])){
                echo '<script type="text/javascript">';
                echo 'asesoria_tributaria()';
                echo '</script>';   
            }
            else{
                if(isset($_REQUEST["capacitacion"])){
                    echo '<script type="text/javascript">';
                    echo 'capacitacion()';
                    echo '</script>';   
                }
            }
        }
    }
?>