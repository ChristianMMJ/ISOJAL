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
<!--    <script src="js/fontawesome-all.js" type="text/javascript"></script>-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="js/scrollreveal.min.js" type="text/javascript"></script>
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
                <a href="#informes" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-file-alt"></i> INFORMES</a>
                <a href="#proyectos" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PROYECTOS</a>
                <a href="#contacto" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACTO</a>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
                <a href="#nosotros" class="w3-bar-item w3-button" onclick="toggleFunction()">INICIO</a>
                <a href="#informes" class="w3-bar-item w3-button" onclick="toggleFunction()">INFORMES</a>
                <a href="#proyectos" class="w3-bar-item w3-button" onclick="toggleFunction()">PROYECTOS</a>
                <a href="#contacto" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACTO</a>
            </div>
        </div>
        <!-- First Parallax Image with Logo Text -->
        <div class="bgimg-1 w3-display-container " id="inicio">
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
                    <p><b><i class="fas fa-tasks w3-margin-right"></i>Misión</b></p><br>
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
                    <p><b><i class="fa fa-users w3-margin-right"></i>Equipo</b></p><br>
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
                    <p><b><i class="fas fa-blind w3-margin-right"></i>Experiencia:</b></p><br>
<!--                    <img src="img/avatar_hat.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">-->
                </div>

                <!-- Hide this text on small devices -->
                <div class="w3-col m6 w3-hide-small ">
                    <p>La organización cuenta con amplia experiencia en ejecución de proyectos sociales y de evaluación y diagnósticos de programas públicos.</p>
                </div>
            </div>

        </div>
        <div class="w3-row w3-justify w3-dark-grey w3-padding-16" align="center">
            <div class=" w3-section" align="center">
                <span class="w3-xlarge">- TODO EL IMPULSO SOCIAL -</span><br>
                <i class="far fa-handshake fa-2x"></i> <br>¡A quien más lo necesita!
            </div>
        </div>
        <!-- Container (Informes Section) -->
        <div class="w3-content w3-container w3-padding-64" id="informes" >
            <!-- Portfolio Gallery Grid -->
            <div class="w3-row">
                <p class="w3-large w3-justify w3-padding-16">INFORMES DE ACTIVIDADES</p>
                <p class="w3-wide"><i class="fab fa-leanpub"></i> Folleto Informativo</p>
                <button onclick="window.open('adjuntos/Folleto informativo.pdf', '_blank'); return false;" class="w3-container w3-button w3-padding-small w3-dark-grey w3-justify" style="width:95%" type="submit">
                    <i class="far fa-file-pdf"></i> Ver Informe
                </button>
                <p class="w3-wide"><i class="fas fa-images"></i> Lonas y Display</p>
                <button onclick="window.open('adjuntos/Lonas y Display.pdf', '_blank'); return false;" class="w3-container w3-button w3-padding-small w3-dark-grey w3-justify" style="width:95%" type="submit">
                    <i class="far fa-file-pdf"></i> Ver Informe
                </button>
                <p class="w3-wide"><i class="fas fa-chart-line"></i> Programa de Trabajo</p>
                <button onclick="window.open('adjuntos/Programa de Trabajo.pdf', '_blank'); return false;" class="w3-container w3-button w3-padding-small w3-dark-grey w3-justify" style="width:95%" type="submit">
                    <i class="far fa-file-pdf"></i> Ver Informe
                </button>
            </div>
        </div>
        <!-- Second Parallax Image with Portfolio Text -->
        <div class="bgimg-2 w3-display-container ">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">JUNTOS CONSTRUIMOS EL JALISCO QUE QUEREMOS </span>
            </div>
        </div>
        <!-- Container (Proyectos Section) -->
        <div class="w3-content w3-container w3-padding-64" id="proyectos" >
            <!-- Portfolio Gallery Grid -->
            <div class="w3-row">
                <div class="w3-col s12 m5 l5 w3-justify">
                    <div class="w3-display-container">
                        <img src="img/P1/P1.jpg" alt="1" style="width:100%; cursor: pointer;" class="w3-image w3-round sr"
                             onclick="document.getElementById('P1').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black w3-opacity-min"><h3>Proyecto 1</h3></div>
                    </div>
                    <div class="content">
                        <h3 style="text-align: left;">Métodos alternativos de producción</h3>
                        <p>Se han realizado talleres de capacitación en aquellas comunidades en donde es complicado acceder a espacios abiertos de cultivo para impulsar el uso de métodos alternativos de producción, mediante los cuales los beneficiarios han aprendido los conceptos básicos de la hidroponia y su funcionamiento para producir sus propias hortalizas mediante el establecimiento de huertos familiares, mismos que se han establecido en diversas comunidades de municipios como: Zapopan, Poncitlán, Jamay, Cuquío, Ixtlahuacán del Río, Villa Corona, Ocotlán, Gómez Farías, Autlán de Navarro, Magdalena, San Marcos, Lagos de Moreno, sólo por mencionar algunos.</p>
                        <button class="w3-button w3-black w3-right w3-section" type="button" onclick="document.getElementById('P1').style.display = 'block'">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div>
                </div>
                <div class="w3-col s12 m1 l1 w3-justify w3-padding-small"></div>
                <div class="w3-col s12 m5 l5 w3-justify">
                    <div class="w3-display-container">
                        <img src="img/P2/P2.jpg" alt="2" style="width:100%" class="w3-image w3-round sr"
                             onclick="document.getElementById('P2').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black w3-opacity-min"><h3>Proyecto 2</h3></div>
                    </div>
                    <div class="content">
                        <h3 style="text-align: left;">Producción y Engorda de Tilapia</h3>
                        <p>Se han elaborado proyectos productivos para la instalación de infraestructura para la producción y engorda de tilapia, con lo cual se ha logrado mejorar la dieta nutrimental de 100 familias, dotando a los beneficiarios no solo de los insumos, sino también de un completo programa de capacitación para que ellos mismos se dediquen de forma autónoma a esta actividad.</p>
                        <button class="w3-button w3-black w3-right w3-section" type="button" onclick="document.getElementById('P2').style.display = 'block'">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div>
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col s12 m5 l5 w3-justify">
                    <div class="w3-display-container">
                        <img src="img/P3/P3.jpg" alt="3" style="width:100%" class="w3-image w3-round sr"
                             onclick="document.getElementById('P3').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black w3-opacity-min"><h3><h3>Proyecto 3</h3></h3></div>
                    </div>
                    <div class="content">
                        <h3 style="text-align: left">Producción Autosustentable de Hortalizas</h3>
                        <p>En conjunto con la Secretaria de Medio Ambiente y Recursos Naturales, se desarrolló un proyecto de producción de hortalizas totalmente autosustentable para habitantes de la zona de la barranca en Zapopan, mediante el cual se instaló un sistema de agricultura protegida en microclima, con sistema de riego focalizado por goteo, mismo que funciona gracias a un método de captación de agua pluvial y energía solar.</p>
                        <button class="w3-button w3-black w3-right w3-section" type="button" onclick="document.getElementById('P3').style.display = 'block'">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div>
                </div>
                <div class="w3-col s12 m1 l1 w3-justify w3-padding-small"></div>
                <div class="w3-col s11 m5 l5 w3-justify">
                    <div class="w3-display-container">
                        <img src="img/P4/P4.jpg" alt="Lights" style="width:100%" class="w3-image w3-round sr"
                             onclick="document.getElementById('P4').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black w3-opacity-min"><h3>Proyecto 4</h3></div>
                    </div>
                    <div class="content">
                        <h3 style="text-align: left;">Instalación de Invernaderos</h3>
                        <p>Se dotó de infraestructura adecuada para la autogeneración de alimentos, instalando varios invernaderos para la producción de diferentes tipos de hortalizas en municipios como Teuchitlán y San Marcos, por citar algunos</p>
                        <button class="w3-button w3-black w3-right w3-section" type="button" onclick="document.getElementById('P4').style.display = 'block'">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div>
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col s12 m5 l5 w3-justify">
                    <div class="w3-display-container">
                        <img src="img/P5/P5.jpg" alt="Lights" style="width:100%" class="w3-image w3-round sr"
                             onclick="document.getElementById('P5').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black w3-opacity-min"><h3>Proyecto 5</h3></div>
                    </div>
                    <div class="content">
                        <h3 style="text-align: left;">Proyectos de Valor Agregado</h3>
                        <p>Se han impulsado diversos proyectos referentes a la aplicación de valor agregado en la producción, usando materia prima de la cual disponen los beneficiarios, como es el caso de capacitación para la elaboración de mermeladas y encurtidos artesanales.</p>
                        <button class="w3-button w3-black w3-right w3-section" type="button" onclick="document.getElementById('P5').style.display = 'block'">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div>
                </div>
                <div class="w3-col s12 m1 l1 w3-justify w3-padding-small"></div>
                <div class="w3-col s12 m5 l5 w3-justify">
                    <div class="w3-display-container">
                        <img src="img/P6/P6.jpg" alt="Lights" style="width:100%" class="w3-image w3-round sr"
                             onclick="document.getElementById('P6').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black w3-opacity-min"><h3>Proyecto 6</h3></div>
                    </div>
                    <div class="content">
                        <h3 style="text-align: left;">Elaboración de productos lácteos</h3>
                        <p>En municipios de los altos del estado, como Lagos de Moreno, Tepatitlán y Teocaltiche se han desarrollado talleres sobre elaboración de diferentes tipos de quesos y yogurt, aprovechando la vocación ganadera de la región y la materia prima existente, facilitándoles el generar de esta forma, productos con valor agregado que permiten a nuestros beneficiarios capacitados obtener un mejor ingreso para sus familias, además de poder aprovechar la proteína, incluyéndola en su dieta diaria.</p>
                        <button class="w3-button w3-black w3-right w3-section" type="button" onclick="document.getElementById('P6').style.display = 'block'">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div>
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col s12 m12 l12 w3-justify">
                    <div class="w3-display-container">
                        <img src="img/P7/P7.jpg" alt="Lights" style="width:100%" class="w3-image w3-round sr"
                             onclick="document.getElementById('P7').style.display = 'block'">
                        <div class="w3-display-topleft w3-container w3-black w3-opacity-min"><h3>Proyecto 7</h3></div>
                    </div>
                    <div class="content">
                        <h3 style="text-align: left;">Talleres y Foros de Capacitación</h3>
                        <p>Se han desarrollado diferentes proyectos de capacitación en diferentes áreas, desde la elaboración de proyectos productivos, identificación de planes de negocio, desarrollo de planes de negocio, emprendimiento productivo, financiamiento en el medio rural, así como talleres para dar a conocer las reglas de operación de diversos programas.</p>
                        <button class="w3-button w3-black w3-right w3-section" type="button" onclick="document.getElementById('P7').style.display = 'block'">
                            <i class="fa fa-eye"></i> Ver más...
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for full size images on click-->
        <!--MODAL 1-->
        <div id="P1" class="w3-modal w3-black" >
            <div class="w3-modal-content w3-animate-zoom w3-justify w3-transparent w3-padding-64">
                <div class="w3-content w3-display-container">
                    <div class="w3-display-container slidex1">
                        <img src="img/P1/1/20140826_094343.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 1</div>
                    </div>
                    <div class="w3-display-container slidex1">
                        <img src="img/P1/1/20140912_182027.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 2</div>
                    </div>
                    <div class="w3-display-container slidex1">
                        <img src="img/P1/1/20141003_200021.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 3</div>
                    </div>
                    <div class="w3-display-container slidex1">
                        <img src="img/P1/1/20141024_183507.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 4</div>
                    </div>
                    <div class="w3-display-container slidex1">
                        <img src="img/P1/1/IMG_0521.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 5</div>
                    </div>
                    <div class="w3-display-container slidex1">
                        <img src="img/P1/1/IMG_1293.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 6</div>
                    </div>
                    <span class="w3-button w3-display-topright w3-black w3-opacity w3-hover-opacity-off" title="Close Modal Image" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                        <i class="fa fa-times"></i>
                    </span>
                    <button class="w3-button w3-display-left w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;" onclick="plusDivs(-1, 'slidex1')">&#10094;</button>
                    <button class="w3-button w3-display-right w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;"  onclick="plusDivs(1, 'slidex1')">&#10095;</button>
                </div>
            </div>
        </div>
        <!--MODAL 2-->
        <div id="P2" class="w3-modal w3-black">
            <div class="w3-modal-content w3-animate-zoom w3-justify w3-transparent w3-padding-64">
                <div class="w3-content w3-display-container">
                    <div class="w3-display-container slidex2">
                        <img src="img/P2/2/20140903_144658.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 1</div>
                    </div>
                    <div class="w3-display-container slidex2">
                        <img src="img/P2/2/20140909_175810.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 2</div>
                    </div>
                    <div class="w3-display-container slidex2">
                        <img src="img/P2/2/20141006_173307.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 3</div>
                    </div>
                    <div class="w3-display-container slidex2">
                        <img src="img/P2/2/IMG_1128.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 4</div>
                    </div>
                    <div class="w3-display-container slidex2">
                        <img src="img/P2/2/IMG_1336.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 5</div>
                    </div>
                    <div class="w3-display-container slidex2">
                        <img src="img/P2/2/IMG_1343.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 6</div>
                    </div>
                    <div class="w3-display-container slidex2">
                        <img src="img/P2/2/IMG_8365.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 7</div>
                    </div>
                    <div class="w3-display-container slidex2">
                        <img src="img/P2/2/IMG_8720.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 8</div>
                    </div>
                    <span class="w3-button w3-display-topright w3-black w3-opacity w3-hover-opacity-off" title="Close Modal Image" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                        <i class="fa fa-times"></i>
                    </span>
                    <button class="w3-button w3-display-left w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;" onclick="plusDivs(-1, 'slidex2')">&#10094;</button>
                    <button class="w3-button w3-display-right w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;"  onclick="plusDivs(1, 'slidex2')">&#10095;</button>
                </div>
            </div>
        </div>
        <!--MODAL 3-->
        <div id="P3" class="w3-modal w3-black" >
            <div class="w3-modal-content w3-animate-zoom w3-justify w3-transparent w3-padding-64">
                <div class="w3-content w3-display-container">
                    <div class="w3-display-container slidex3">
                        <img src="img/P3/3/IMG_5784.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 1</div>
                    </div>
                    <div class="w3-display-container slidex3">
                        <img src="img/P3/3/IMG_6293.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 2</div>
                    </div>
                    <div class="w3-display-container slidex3">
                        <img src="img/P3/3/IMG_6359.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 3</div>
                    </div>
                    <div class="w3-display-container slidex3">
                        <img src="img/P3/3/IMG_6361.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 4</div>
                    </div>
                    <div class="w3-display-container slidex3">
                        <img src="img/P3/3/IMG_6368.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 5</div>
                    </div>
                    <div class="w3-display-container slidex3">
                        <img src="img/P3/3/IMG_6454.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 6</div>
                    </div>
                    <span class="w3-button w3-display-topright w3-black w3-opacity w3-hover-opacity-off" title="Close Modal Image" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                        <i class="fa fa-times"></i>
                    </span>
                    <button class="w3-button w3-display-left w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;" onclick="plusDivs(-1, 'slidex3')">&#10094;</button>
                    <button class="w3-button w3-display-right w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;"  onclick="plusDivs(1, 'slidex3')">&#10095;</button>
                </div>
            </div>
        </div>
        <!--MODAL 4-->
        <div id="P4" class="w3-modal w3-black"  >
            <div class="w3-modal-content w3-animate-zoom w3-justify w3-transparent w3-padding-64">
                <div class="w3-content w3-display-container">
                    <div class="w3-display-container slidex4">
                        <img src="img/P4/4/20150511_171407.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 1</div>
                    </div>
                    <div class="w3-display-container slidex4">
                        <img src="img/P4/4/20150609_190612.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 2</div>
                    </div>
                    <div class="w3-display-container slidex4">
                        <img src="img/P4/4/20150701_175450.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 3</div>
                    </div>
                    <div class="w3-display-container slidex4">
                        <img src="img/P4/4/20150707_122017.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 4</div>
                    </div>
                    <div class="w3-display-container slidex4">
                        <img src="img/P4/4/20150715_190138.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 5</div>
                    </div>
                    <div class="w3-display-container slidex4">
                        <img src="img/P4/4/IMG_9768.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 6</div>
                    </div>
                    <span class="w3-button w3-display-topright w3-black w3-opacity w3-hover-opacity-off" title="Close Modal Image" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                        <i class="fa fa-times"></i>
                    </span>
                    <button class="w3-button w3-display-left w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;" onclick="plusDivs(-1, 'slidex4')">&#10094;</button>
                    <button class="w3-button w3-display-right w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;"  onclick="plusDivs(1, 'slidex4')">&#10095;</button>
                </div>
            </div>
        </div>
        <!--MODAL 5-->
        <div id="P5" class="w3-modal w3-black"   >
            <div class="w3-modal-content w3-animate-zoom w3-justify w3-transparent w3-padding-64">
                <div class="w3-content w3-display-container">
                    <div class="w3-display-container slidex5">
                        <img src="img/P5/5/IMG_7003.JPG">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 1</div>
                    </div>
                    <div class="w3-display-container slidex5">
                        <img src="img/P5/5/IMG_7013.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 2</div>
                    </div>
                    <div class="w3-display-container slidex5">
                        <img src="img/P5/5/IMG_7017.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 3</div>
                    </div>
                    <div class="w3-display-container slidex5">
                        <img src="img/P5/5/IMG_7583.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 4</div>
                    </div>
                    <div class="w3-display-container slidex5">
                        <img src="img/P5/5/IMG_7596.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 5</div>
                    </div>
                    <div class="w3-display-container slidex5">
                        <img src="img/P5/5/IMG_7693.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 6</div>
                    </div>
                    <div class="w3-display-container slidex5">
                        <img src="img/P5/5/IMG_7694.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 7</div>
                    </div>
                    <span class="w3-button w3-display-topright w3-black w3-opacity w3-hover-opacity-off" title="Close Modal Image" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                        <i class="fa fa-times"></i>
                    </span>
                    <button class="w3-button w3-display-left w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;" onclick="plusDivs(-1, 'slidex5')">&#10094;</button>
                    <button class="w3-button w3-display-right w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;"  onclick="plusDivs(1, 'slidex5')">&#10095;</button>
                </div>
            </div>
        </div>
        <!--MODAL 6-->
        <div id="P6" class="w3-modal w3-black"  >
            <div class="w3-modal-content w3-animate-zoom w3-justify w3-transparent w3-padding-64">
                <div class="w3-content w3-display-container">
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/20131118_170338.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 1</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/20131118_172419 (2).jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 2</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/20131118_181035.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 3</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/20131118_183219.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 4</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/20131118_183301.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 5</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/20131118_183341.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 6</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/20131118_183351.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 7</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/20131118_184437.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 8</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/20131118_184524.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 9</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/20131118_184831.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 10</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/20131119_183817.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 11</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/20131119_183904.jpg" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 12</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/IMG_6629.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 13</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/IMG_6644.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 14</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/IMG_6717.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 15</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/IMG_6722.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 16</div>
                    </div>
                    <div class="w3-display-container slidex6">
                        <img src="img/P6/6/IMG_6723.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 17</div>
                    </div>
                    <span class="w3-button w3-display-topright w3-black w3-opacity w3-hover-opacity-off" title="Close Modal Image" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                        <i class="fa fa-times"></i>
                    </span>
                    <button class="w3-button w3-display-left w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;" onclick="plusDivs(-1, 'slidex6')">&#10094;</button>
                    <button class="w3-button w3-display-right w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;"  onclick="plusDivs(1, 'slidex6')">&#10095;</button>
                </div>
            </div>
        </div>
        <!--MODAL 7-->
        <div id="P7" class="w3-modal w3-black">
            <div class="w3-modal-content w3-animate-zoom w3-justify w3-transparent w3-padding-64">
                <div class="w3-content w3-display-container">
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/IMG_4162.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 1</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/IMG_4165.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 2</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/IMG_4734.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 3</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/IMG_4740.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 4</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/IMG_4824.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 5</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/IMG_4858.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 6</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/IMG_4875.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 7</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/P1050436.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 8</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/P1050867.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 9</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/P1050869.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 10</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/P1050908.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 11</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/P1060322.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 12</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/P1060326.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 13</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/P1060331.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 14</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/P1060346.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 15</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/P1060357.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 16</div>
                    </div>
                    <div class="w3-display-container slidex7">
                        <img src="img/P7/7/P1060382.JPG" class="w3-image">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-8 w3-black">FOTO 17</div>
                    </div>
                    <span class="w3-button w3-display-topright w3-black w3-opacity w3-hover-opacity-off" title="Close Modal Image" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                        <i class="fa fa-times"></i>
                    </span>
                    <button class="w3-button w3-display-left w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;" onclick="plusDivs(-1, 'slidex7')">&#10094;</button>
                    <button class="w3-button w3-display-right w3-black w3-opacity w3-hover-opacity-off" style="opacity: 1 !important;"  onclick="plusDivs(1, 'slidex7')">&#10095;</button>
                </div>
            </div>
        </div>
        <script>
            window.onload = function (e) {
                showDivs(1, "slidex1");
                showDivs(1, "slidex2");
                showDivs(1, "slidex3");
                showDivs(1, "slidex4");
                showDivs(1, "slidex5");
                showDivs(1, "slidex6");
                showDivs(1, "slidex7");
            };

            function onOpenFolletoInf() {

            }
        </script>
        <!--FIN MODALES-->
        <!-- Third Parallax Image with Portfolio Text -->
        <div class="bgimg-3 w3-display-container ">
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
                <div class="w3-large w3-margin-bottom" style="text-align: left;">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Guadalajara, Jalisco, México<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a href="tel:3330700348" style="text-decoration: none;">Tel: +33 30700348</a><br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> impulsosocialjalisco@gmail.com<br>
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
        <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
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
            //SLIDESHOW
            var slideIndex = 1;
            function plusDivs(n, classname) {
                showDivs(slideIndex += n, classname);
            }
            function showDivs(n, classname) {
                var i;
                var x = document.getElementsByClassName(classname);
                if (n > x.length) {
                    slideIndex = 1;
                }
                if (n < 1) {
                    slideIndex = x.length;
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex - 1].style.display = "block";
            }
        </script>
        <style>
            div.w3-display-container[class*="slidex"]> img{
                width:100%;
                min-height: 225px;
                max-height:600px;
            }
        </style>
    </body>
</html>