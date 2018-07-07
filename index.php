<!DOCTYPE html>
<html>
    <title>ISOJAL</title>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/web/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/web/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/web/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/web/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="img/web/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/web/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="img/web/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/web/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="img/web/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="img/web/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="img/web/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/web/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="img/web/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="img/web/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="img/web/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="img/web/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="img/web/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="img/web/mstile-310x310.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/isojal.css" rel="stylesheet" type="text/css"/>
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <script src="js/fontawesome-all.js" type="text/javascript"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <style>
        .w3-bar-item{
            color: #fff !important;
        }
        .w3-button:hover{
            background-color: #000 !important;
            color: #fff !important;
        }
        /*thumbs*/

        .row {
            margin: 8px -16px;
        }

        /* Add padding BETWEEN each column */
        .row,
        .row > .column {
            padding: 8px;
        }

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 25%;
        }

        /* Clear floats after rows */ 
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Content */
        .content {
            background-color: white;
            padding: 10px;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 900px) {
            .column {
                width: 50%;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }
        .sr{
            cursor: pointer;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .w3-modal{
            padding-top: 0px;
        }
        body.modal-open {
            overflow: hidden;
        }
    </style>
    <body>

        <!-- Navbar (sit on top) -->
        <div class="w3-top">
            <div class="w3-bar animated fadeInDown" id="myNavbar">
                <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="#inicio" class="w3-bar-item w3-button"><i class="fa fa-home"></i> INICIO</a>
                <a href="#nosotros" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> NOSOTROS</a>
                <a href="#proyectos" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PROYECTOS</a>
                <a href="#contacto" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACTO</a>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
                <a href="#nosotros" class="w3-bar-item w3-button" onclick="toggleFunction()">INICIO</a>
                <a href="#proyectos" class="w3-bar-item w3-button" onclick="toggleFunction()">PROYECTOS</a>
                <a href="#contacto" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACTO</a>
            </div>
        </div>

        <!-- First Parallax Image with Logo Text -->
        <div class="bgimg-1 w3-display-container w3-opacity-min" id="inicio">
            <div class="w3-display-middle" style="white-space:nowrap;">
                <img src="img/isojal/ISOJAL_FULL.png" class="imgLogo animated fadeIn" alt="" width="950px" />
<!--                <span class="w3-justify  w3-black w3-xlarge w3-wide w3-animate-opacity">IMPULSO <span class="w3-hide-small">SOCIAL DE</span> JALISCO</span>-->
            </div>
        </div>

        <!-- Container (About Section) -->
        <div class="w3-content w3-container w3-padding-64" id="nosotros">
            <h3 class="w3-justify">INTRODUCCIÓN</h3>
            <p class="w3-justify"><em>Impulso  Social  de  Jalisco</em></p>
            <p>
                Surge  en  el  año  2011  a  iniciativa  de  sus fundadores con  el propósito de diseñar y
                ejecutar proyectos que favorezcan la generación de capital social en el medio urbano y rural.
                Aunado a lo anterior y derivado de su integración por profesionistas con
                experiencia en diversas áreas del conocimiento, nos hemos especializado en la
                conformación y capacitación de comités de contraloría social, así como en la
                implementación de acciones que favorezcan el emprendurismo para contribuir a la
                disminución de los niveles de incidencia delictiva y el consumo de sustancias prohibidas
                en los jóvenes en situación de riesgo.
            </p>
            <div class="w3-row">
                <div class="w3-col m6 w3-justify ">
                    <p><b><i class="fa fa-user w3-margin-right"></i>Misión</b></p><br>
<!--                    <img src="img/avatar_hat.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">-->
                </div>

                <!-- Hide this text on small devices -->
                <div class="w3-col m6 w3-hide-small ">
                    <p>
                        Promover y brindar, mediante un servicio de consultoría, los diagnósticos
                        y la sistematización de experiencias precisas para la evaluación y la toma
                        de decisiones necesarias a fin de crear, mantener y fortalecer
                        el diseño y la ejecución de programas y políticas públicas,
                        orientadas a mejorar la calidad de vida de la sociedad a la
                        que van dirigidas, inspiradas en valores como la equidad y la
                        ética profesional; motivando la participación ciudadana.
                    </p>
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col m6 w3-justify ">
                    <p><b><i class="fa fa-user w3-margin-right"></i>Equipo</b></p><br>
<!--                    <img src="img/avatar_hat.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">-->
                </div>

                <!-- Hide this text on small devices -->
                <div class="w3-col m6 w3-hide-small ">
                    <p>Nuestro equipo de trabajo está conformado por colaboradores de diversos perfiles
                        académicos y profesionales, tales como: economistas, abogados, agrónomos,
                        psicólogos, administradores  gubernamentales,   contadores,
                        sociólogos   entre  otros,   lo  cual  nos permite brindar
                        servicios de análisis y consultoría multidisciplinaria.</p>
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col m6 w3-justify ">
                    <p><b><i class="fa fa-user w3-margin-right"></i>Experiencia:</b></p><br>
<!--                    <img src="img/avatar_hat.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">-->
                </div>

                <!-- Hide this text on small devices -->
                <div class="w3-col m6 w3-hide-small ">
                    <p>La organización cuenta con amplia experiencia en ejecución de proyectos sociales y de evaluación y diagnósticos de programas públicos.</p>
                </div>
            </div>
            <p class="w3-large w3-justify w3-padding-16">PROYECTOS REALIZADOS</p>
            <p class="w3-wide"><i class="fa fa-camera"></i> Impulso a la economía</p>
            <div class="w3-light-grey">
                <div class="w3-container w3-padding-small w3-dark-grey w3-justify" style="width:90%">90%</div>
            </div>
            <p class="w3-wide"><i class="fa fa-laptop"></i> Impulso a la cultura</p>
            <div class="w3-light-grey">
                <div class="w3-container w3-padding-small w3-dark-grey w3-justify" style="width:85%">85%</div>
            </div>
            <p class="w3-wide"><i class="fa fa-photo"></i> Impulso a la Educación</p>
            <div class="w3-light-grey">
                <div class="w3-container w3-padding-small w3-dark-grey w3-justify" style="width:75%">75%</div>
            </div>
        </div>

        <div class="w3-row w3-justify w3-dark-grey w3-padding-16">
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">14+</span><br>
                Educación
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">55+</span><br>
                Laboral
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">89+</span><br>
                Social
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">150+</span><br>
                Económico
            </div>
        </div>

        <!-- Second Parallax Image with Portfolio Text -->
        <div class="bgimg-2 w3-display-container w3-opacity-min">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">JUNTOS CONSTRUIMOS EL JALISCO QUE QUEREMOS </span>
            </div>
        </div>

        <!-- Container (Portfolio Section) -->
        <div class="w3-content w3-container w3-padding-64" id="proyectos">
            <!-- Portfolio Gallery Grid -->
            <div class="w3-row">
                <div class="w3-col s12 m6 l6 w3-justify">
                    <div class="w3-display-container">
                        <img src="img/P1/P1.png" alt="1" style="width:100%; cursor: pointer;" class="w3-image w3-round sr" 
                             onclick="document.getElementById('P1').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black"><h3>Proyecto 1</h3></div>
                    </div>
                    <div class="content">
                        <h3>Métodos alternativos de producción</h3>
                        <p>Se han realizado talleres de capacitación en aquellas comunidades en donde es complicado acceder a espacios abiertos de cultivo para impulsar el uso de métodos alternativos de producción, mediante los cuales los beneficiarios han aprendido los conceptos básicos de la hidroponia y su funcionamiento para producir sus propias hortalizas mediante el establecimiento de huertos familiares, mismos que se han establecido en diversas comunidades de municipios como: Zapopan, Poncitlán, Jamay, Cuquío, Ixtlahuacán del Río, Villa Corona, Ocotlán, Gómez Farías, Autlán de Navarro, Magdalena, San Marcos, Lagos de Moreno, sólo por mencionar algunos.</p>
                        <button class="w3-button w3-black w3-right w3-section" type="submit">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div> 
                </div>
                <div class="w3-col s12 m6 l6 w3-justify">
                    <div class="w3-display-container">
                        <img src="img/P2/P2.png" alt="2" style="width:100%" class="w3-image w3-round sr"
                             onclick="document.getElementById('P2').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black"><h3>Proyecto 2</h3></div>
                    </div>
                    <div class="content">
                        <h3>Producción y Engorda de Tilapia</h3>
                        <p>Se han elaborado proyectos productivos para la instalación de infraestructura para la producción y engorda de tilapia, con lo cual se ha logrado mejorar la dieta nutrimental de 100 familias, dotando a los beneficiarios no solo de los insumos, sino también de un completo programa de capacitación para que ellos mismos se dediquen de forma autónoma a esta actividad.</p>
                        <button class="w3-button w3-black w3-right w3-section" type="submit">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div>
                </div>  
            </div>  
            <div class="w3-row">
                <div class="w3-col s12 m6 l6 w3-justify">
                    <div class="w3-display-container">
                        <img src="img/P3/P3.png" alt="3" style="width:100%" class="w3-image w3-round sr"
                             onclick="document.getElementById('P3').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black"><h3><h3>Proyecto 3</h3></h3></div>
                    </div>
                    <div class="content">
                        <h3>Producción Autosustentable de Hortalizas</h3>
                        <p>En conjunto con la Secretaria de Medio Ambiente y Recursos Naturales, se desarrolló un proyecto de producción de hortalizas totalmente autosustentable para habitantes de la zona de la barranca en Zapopan, mediante el cual se instaló un sistema de agricultura protegida en microclima, con sistema de riego focalizado por goteo, mismo que funciona gracias a un método de captación de agua pluvial y energía solar.</p>
                        <button class="w3-button w3-black w3-right w3-section" type="submit">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div> 
                </div>  
                <div class="w3-col s12 m6 l6 w3-justify">
                    <div class="w3-display-container">
                        <img src="img/P4/P4.png" alt="Lights" style="width:100%" class="w3-image w3-round sr"
                             onclick="document.getElementById('P4').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black"><h3>Proyecto 4</h3></div>
                    </div>
                    <div class="content">
                        <h3>Instalación de Invernaderos</h3>
                        <p>Se dotó de infraestructura adecuada para la autogeneración de alimentos, instalando varios invernaderos para la producción de diferentes tipos de hortalizas en municipios como Teuchitlán y San Marcos, por citar algunos</p>
                        <button class="w3-button w3-black w3-right w3-section" type="submit">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div>
                </div> 
            </div> 
            <div class="w3-row">
                <div class="w3-col s12 m6 l6 w3-justify">
                    <div class="w3-display-container">
                        <img src="img/P5/P5.png" alt="Lights" style="width:100%" class="w3-image w3-round sr"
                             onclick="document.getElementById('P5').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black"><h3>Proyecto 5</h3></div>
                    </div>
                    <div class="content">
                        <h3>Proyectos de Valor Agregado</h3>
                        <p>Se han impulsado diversos proyectos referentes a la aplicación de valor agregado en la producción, usando materia prima de la cual disponen los beneficiarios, como es el caso de capacitación para la elaboración de mermeladas y encurtidos artesanales.</p>
                        <button class="w3-button w3-black w3-right w3-section" type="submit">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div>
                </div> 
                <div class="w3-col s12 m6 l6 w3-justify">
                    <div class="w3-display-container"> 
                        <img src="img/P6/P61.png" alt="Lights" style="width:100%" class="w3-image w3-round sr"
                             onclick="document.getElementById('P6').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black"><h3>Proyecto 6</h3></div>
                    </div>
                    <div class="content">
                        <h3>Elaboración de productos lácteos</h3>
                        <p>En municipios de los altos del estado, como Lagos de Moreno, Tepatitlán y Teocaltiche se han desarrollado talleres sobre elaboración de diferentes tipos de quesos y yogurt, aprovechando la vocación ganadera de la región y la materia prima existente, facilitándoles el generar de esta forma, productos con valor agregado que permiten a nuestros beneficiarios capacitados obtener un mejor ingreso para sus familias, además de poder aprovechar la proteína, incluyéndola en su dieta diaria.</p>
                        <button class="w3-button w3-black w3-right w3-section" type="submit">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div> 
                </div> 
            </div> 
            <div class="w3-row">
                <div class="w3-col s12 m12 l12 w3-justify">
                    <div class="w3-display-container"> 
                        <img src="img/P7/P7.png" alt="Lights" style="width:100%" class="w3-image w3-round sr"
                             onclick="document.getElementById('P7').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black"><h3>Proyecto 7</h3></div>
                    </div>
                    <div class="content">
                        <h3>Talleres y Foros de Capacitación</h3>
                        <p>Se han desarrollado diferentes proyectos de capacitación en diferentes áreas, desde la elaboración de proyectos productivos, identificación de planes de negocio, desarrollo de planes de negocio, emprendimiento productivo, financiamiento en el medio rural, así como talleres para dar a conocer las reglas de operación de diversos programas.</p>
                        <button class="w3-button w3-black w3-right w3-section" type="submit">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for full size images on click--> 
        <?php
        for ($index = 1; $index < 8; $index++) {
            print '<div id="P' . $index . '" class="w3-modal w3-black" onclick="this.style.display = \'none\'">
                <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-times"></i></span>
            <div class="w3-modal-content w3-animate-zoom w3-justify w3-transparent w3-padding-64">
                <img id="img0' . $index . '" class="w3-image" src="img/P' . $index . '/P' . $index . '.jpg">
                <p id="caption" class="w3-opacity w3-large"></p>
            </div>
        </div>';
        }
        ?>

        <!-- Third Parallax Image with Portfolio Text -->
        <div class="bgimg-3 w3-display-container w3-opacity-min">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">CONSTRUYAMOS JUNTOS EL NUEVO IMPULSO SOCIAL</span>
            </div>
        </div>

        <!-- Container (Contact Section) -->
        <div class="w3-content w3-container w3-padding-64" id="contacto">
            <h3 class="w3-justify">CONTÁCTANOS</h3>
            <p class="w3-justify"><em>Mapa de ubicación</em></p>
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.158543393763!2d-103.36536228483874!3d20.703785604168097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae293fbe5871%3A0xdd04892797fbb8e1!2sMar+Blanco+1574%2C+Lomas+del+Country%2C+44610+Guadalajara%2C+Jal.!5e0!3m2!1ses!2smx!4v1529247572427" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="w3-row-padding w3-justify">
                <br>
                <div class="w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Guadalajara, Jalisco, México<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Tel: +33 30700348<br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: impulsosocialjalisco@gmail.com<br>
                </div>
                <p>Mar Blanco #1574, Col. Lomas del Country, CP 44610</p>
                <form action="/action_page.php" target="_blank">
                    <input class="w3-input w3-border" type="text" placeholder="Nombre" required name="Name" style="margin-bottom: 1em;">
                    <input class="w3-input w3-border" type="text" placeholder="Correo" required name="Email" style="margin-bottom: 1em;">
                    <input class="w3-input w3-border" type="text" placeholder="Mensaje" required name="Message" style="margin-bottom: 1em;">
                    <button class="w3-button w3-black w3-right w3-section" type="submit">
                        <i class="fa fa-paper-plane"></i> ENVIAR MENSAJE
                    </button>
                </form>
            </div>
        </div>
        <!-- Footer -->
        <footer class="w3-justify w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
            <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Regresar al Inicio</a>
            <div class="w3-xlarge w3-section">
                <i class="fab fa-facebook w3-hover-opacity"></i>
                <i class="fab fa-instagram w3-hover-opacity"></i>
                <i class="fab fa-twitter w3-hover-opacity"></i>
                <i class="fab fa-linkedin w3-hover-opacity"></i>
            </div>
            <p>Impulsado por <a href="https://www.gob.mx/sagarpa" title="Gobierno de Jalisco" target="_blank" class="w3-hover-text-green">SAGARPA</a></p>
        </footer>

        <!-- Add Google Maps -->
        <script>
            window.sr = ScrollReveal();
            sr.reveal('p');
            sr.reveal('h3');
            sr.reveal('input');
            sr.reveal('button');
            sr.reveal('.sr');

            // Modal Image Gallery
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }

            // Change style of navbar on scroll
            window.onscroll = function () {
                myFunction();
            };
            function myFunction() {
                var navbar = document.getElementById("myNavbar");
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-black";
                } else {
                    navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-black", "");
                }
            }

            // Used to toggle the menu on small screens when clicking on the menu button
            function toggleFunction() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") === -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script> 
    </body>
</html>