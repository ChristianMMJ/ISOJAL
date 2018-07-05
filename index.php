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
<!--                <span class="w3-center  w3-black w3-xlarge w3-wide w3-animate-opacity">IMPULSO <span class="w3-hide-small">SOCIAL DE</span> JALISCO</span>-->
            </div>
        </div>

        <!-- Container (About Section) -->
        <div class="w3-content w3-container w3-padding-64" id="nosotros">
            <h3 class="w3-center">INTRODUCCIÓN</h3>
            <p class="w3-center"><em>Impulso  Social  de  Jalisco</em></p>
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
                <div class="w3-col m6 w3-center ">
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
                <div class="w3-col m6 w3-center ">
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
                <div class="w3-col m6 w3-center ">
                    <p><b><i class="fa fa-user w3-margin-right"></i>Experiencia:</b></p><br>
<!--                    <img src="img/avatar_hat.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">-->
                </div>

                <!-- Hide this text on small devices -->
                <div class="w3-col m6 w3-hide-small ">
                    <p>La organización cuenta con amplia experiencia en ejecución de proyectos sociales y de evaluación y diagnósticos de programas públicos.</p>
                </div>
            </div>
            <p class="w3-large w3-center w3-padding-16">PROYECTOS REALIZADOS</p>
            <p class="w3-wide"><i class="fa fa-camera"></i> Impulso a la economía</p>
            <div class="w3-light-grey">
                <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
            </div>
            <p class="w3-wide"><i class="fa fa-laptop"></i> Impulso a la cultura</p>
            <div class="w3-light-grey">
                <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
            </div>
            <p class="w3-wide"><i class="fa fa-photo"></i> Impulso a la Educación</p>
            <div class="w3-light-grey">
                <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
            </div>
        </div>

        <div class="w3-row w3-center w3-dark-grey w3-padding-16">
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

            <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
            <div class="w3-row-padding w3-center">
                <div class="w3-col m3">
                    <img src="img/A.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Ilustración 1">
                </div>

                <div class="w3-col m3">
                    <img src="img/B.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Ilustración 2">
                </div>

                <div class="w3-col m3">
                    <img src="img/C.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Ilustración 3">
                </div>

                <div class="w3-col m3">
                    <img src="img/D.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="QuIlustración 4">
                </div>
            </div>

            <div class="w3-row-padding w3-center w3-section">
                <div class="w3-col m3">
                    <img src="img/E.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Ilustración 5">
                </div>

                <div class="w3-col m3">
                    <img src="img/G.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Ilustración 6">
                </div>

                <div class="w3-col m3">
                    <img src="img/H.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Ilustración 7">
                </div>
            </div>
        </div>

        <!-- Modal for full size images on click-->
        <div id="modal01" class="w3-modal w3-black" onclick="this.style.display = 'none'">
            <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-times"></i></span>
            <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                <img id="img01" class="w3-image">
                <p id="caption" class="w3-opacity w3-large"></p>
            </div>
        </div>

        <!-- Third Parallax Image with Portfolio Text -->
        <div class="bgimg-3 w3-display-container w3-opacity-min">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">CONSTRUYAMOS JUNTOS EL NUEVO IMPULSO SOCIAL</span>
            </div>
        </div>

        <!-- Container (Contact Section) -->
        <div class="w3-content w3-container w3-padding-64" id="contacto">
            <h3 class="w3-center">CONTÁCTANOS</h3>
            <p class="w3-center"><em>Mapa de ubicación</em></p>
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.158543393763!2d-103.36536228483874!3d20.703785604168097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae293fbe5871%3A0xdd04892797fbb8e1!2sMar+Blanco+1574%2C+Lomas+del+Country%2C+44610+Guadalajara%2C+Jal.!5e0!3m2!1ses!2smx!4v1529247572427" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="w3-row-padding w3-center">
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

            // Modal Image Gallery
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }

            // Change style of navbar on scroll
            window.onscroll = function () {
                myFunction()
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
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>
    </body>
</html>