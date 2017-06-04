<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AlpinasJucar :: Contruccion de Alpinas</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <meta name="Content-Language" content="es">
    <meta name="robots" content="all" />
    <meta name="description" content="Construccion de cabañas alpinas en todo el pais" />
    <meta name="keywords" content="contruccion, cabañas, alpinas, construye" />
    <meta name="copyright" content="PuraCreativa">
    <!-- MENU RESPONSIVO -->
    <link href="css/component.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-animate.js"></script>

    <script src="node_modules/ng-image-gallery/dist/ng-image-gallery.min.js"></script>
    <link href="node_modules/ng-image-gallery/dist/ng-image-gallery.min.css" rel="stylesheet" type="text/css">
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script>
        var app = angular.module("myApp", ['ngAnimate', 'thatisuday.ng-image-gallery']);

        app.controller("myCtrl", function($scope, $http) {
            $scope.inicio = true;
            $scope.modelos = false;
            $scope.description = false;
            $scope.medias = false;
            $scope.contact = false;
            $scope.contacto = {};
            $scope.classA = '';

            $scope.images = [{
                    id: 1,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/001.jpg',
                    url: 'img/slider/001.jpg'
                },
                {
                    id: 2,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/002.jpg',
                    url: 'img/slider/002.jpg'
                },
                {
                    id: 3,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/003.jpg',
                    url: 'img/slider/003.jpg'
                },
                {
                    id: 4,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/004.jpg',
                    url: 'img/slider/004.jpg'
                },
                {
                    id: 5,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/005.jpg',
                    url: 'img/slider/005.jpg'
                },
                {
                    id: 6,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/006.jpg',
                    url: 'img/slider/006.jpg'
                },
                {
                    id: 7,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/007.jpg',
                    url: 'img/slider/007.jpg'
                },
                {
                    id: 8,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/008.jpg',
                    url: 'img/slider/008.jpg'
                },
                {
                    id: 9,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/009.jpg',
                    url: 'img/slider/009.jpg'
                },
                {
                    id: 10,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/011.jpg',
                    url: 'img/slider/011.jpg'
                },
                {
                    id: 12,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/012.jpg',
                    url: 'img/slider/012.jpg'
                },
                {
                    id: 13,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/013.jpg',
                    url: 'img/slider/013.jpg'
                },
                {
                    id: 14,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/014.jpg',
                    url: 'img/slider/014.jpg'
                },
                {
                    id: 15,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/015.jpg',
                    url: 'img/slider/015.jpg'
                },
                {
                    id: 16,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/016.jpg',
                    url: 'img/slider/016.jpg'
                },
                {
                    id: 17,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/017.jpg',
                    url: 'img/slider/017.jpg'
                },
                {
                    id: 18,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/018.jpg',
                    url: 'img/slider/018.jpg'
                },
                {
                    id: 19,
                    title: 'Alpinas Jucar',
                    alt: 'Alpinas Jucar',
                    thumbUrl: 'img/slider/019.jpg',
                    url: 'img/slider/019.jpg'
                }
            ];
            $scope.submit = function() {
                $http.post('sendemail.php', $scope.contacto)
                    .then(function(data) {
                        alert('mensaje enviado');
                    });

            };
        });
    </script>
    <script src="js/modernizr.custom.js"></script>
    <link rel="icon" href="favicon.ico">
    <!--SLIDER -->

</head>

<body ng-app="myApp" ng-controller="myCtrl">
   <div id="pagina-contenido" class="marco-rosa">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="{{classA}}" >
            <tbody>
                <tr>
                    <td>
                        <?php include 'header.php';?>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <!-- SLIDER -->
                        <div class="texto-inicio-slider" ng-show="inicio">
                            CABAÑAS ALPINAS JUCAR <br> INICIO y EMPRESA <br> <br>
                            <p>
                                La empresa JUCAR, división ALPINAS se dedica a la construcción de cabañas de calidad en los modelos ALPINA CLASICA y ALPINA KICHO.
                                <br> <br> Iniciada la obra, el cliente solo debe disfrutar del avance del trabajo, sin necesitar estar en obra ya que ALPINAS JUCAR se encarga de todo lo necesario para que la obra resulte tal cual lo planificado en las charlas previas con los clientes dentro de un contrato pre acordado por escrito. ALPINAS JUCAR se hará cargo del acopio de materiales, verificación de calidades y montaje en obra según el acuerdo pactado entre ambas partes.
                                <br> <br> Contamos con personal con gran experiencia en obras de este tipo, quienes podrán asesorarlo para optimizar la inversión de recursos y dinero.
                                <br> <br> Somos líderes en construcción de cabañas alpinas de calidad con 100% de satisfacción en nuestros clientes.
                                <br> <br></p>
                        </div>
                        <div class="texto-inicio-slider" ng-show="modelos">
                            CABAÑAS ALPINAS JUCAR <br> Modelos <br> <br>
                            <p>
                                Contamos con 2 modelos de cabañas que pueden construirse con superficies de 54m2 y 68m2 según la conveniencia del cliente. Optimizamos los diseños a solicitud de los interesados.
                                <br> <br> MODELO CLASICA: se trata de una cabaña con techo triangular invertido de gran resistencia al viento y agua, por tener un perfil aerodinámico. Su pared perimetral de 80cm aísla a la cabaña de la humedad y aumenta la superficie de la cabaña. Esta confeccionada en 2 plantas. Planta baja: baño, amplia cocina y living-comedor con porche. Planta alta: puede construirse con 1 o 2 habitaciones según requerimientos y conveniencia del cliente. La terminación superior del techo en la cabaña MODELO CLASICA es en forma triangular
                                <br> <br> MODELO KICHO: se trata de una cabaña similar a la MODELO CLASICA pero con variación en la pendiente de los tirantes oblicuos, aumentando el area de la planta alta generando mayor capacidad para alojar mobiliarios. Su pared perimetral de 80cm aísla a la cabaña de la humedad y aumenta la superficie de la cabaña. Esta confeccionada en 2 plantas. Planta baja: baño, amplia cocina y living-comedor con porche. Planta alta: puede construirse con 1 o 2 habitaciones según requerimientos y conveniencia del cliente. La terminación superior del techo en la cabaña MODELO KICHO es trunca/chata.
                            </p>
                        </div>
                        <div class="texto-inicio-slider" ng-show="description">
                            DESCRIPCION TECNICA
                            <br> <br>
                            <p>
                                <ul>
                                    <li>
                                        Platea de hormigón de 10cm de espesor con carpeta lista para pegar cerámicos. Pared lateral de ladrillos revocados de 80 cm de altura. El resto de las paredes se conforma de machimbre de 0.5”. <br> <br></li>
                                    <li>
                                        Paredes de frente y contra frente de ladrillo revocado o rasado hasta la altura del entrepiso (2,40m). Desde los 2,4m hasta arriba, madera de 1” exterior y de 0,5” interior (tabique) o ladrillo. Tirantes en pino de 2”x5” para el techo, entrepiso 2”x6”, piso superior en machimbre de 1”. Escalera marinera de 0,60m de ancho en madera de 2”x8”. <br> <br></li>
                                    <li>
                                        Baño de paredes de ladrillo revocado con puerta placa o plegable.</li>
                                    <li>
                                        Cocina y baño con cañería de desagüe hasta el borde de la cabaña. <br> <br></li>
                                    <li>
                                        Cañerías para agua caliente y agua fría amuradas, lista para colocar la grifería. Cañería para instalación eléctrica con sus respectivas cajas amuradas. <br> <br></li>
                                    <li>
                                        Puerta principal de chapa inyectada color a elección. <br> <br></li>
                                    <li>
                                        Aberturas: 3 ventanas y una ventana balcón corredizas de aluminio natural (con vidrios). Chapa trapezoidal color gris natural. <br> <br></li>
                                    <li>
                                        Aislante hidrófugo y térmico aluminizado de 5 mm de espesor. <br> <br></li>
                                    <li>
                                        Madera curada con preservador para evitar el ataque de hongos e insectos.<br> <br>
                                    </li>
                                </ul>
                            </p>
                        </div>

                        <div class="texto-inicio-slider" ng-show="contact">
                            <form id="contact" method="POST" action="sendemail.php">
                                <div class="container">
                                    <div class="head">
                                        <h2>Solicita tu Presupuesto</h2>
                                    </div>
                                    <input type="text" name="name" ng-model="contacto.name" placeholder="Nombre" required /><br />
                                    <input type="email" name="email" ng-model="contacto.email" placeholder="Email" required/><br />
                                    <input type="text" name="telefono" ng-model="contacto.telefono" placeholder="Telefono" required/><br />

                                    <textarea type="text" name="message" ng-model="contacto.message" placeholder="Mensaje" required></textarea><br />
                                    <div class="g-recaptcha" style="width: 50%;margin-left: 25%;" ng-model="contacto.recaptcha" data-sitekey="6Lf96iMUAAAAAM2plJ8Jbf4N068KlcAhjMoyLR5X"></div>

                                    <button id="submit" type="submit">Solicitar</button>
                                 </div>
                            </form>
                        </div>
                        <div class="texto-inicio-slider" ng-show="medias">

                                FOTOGRAFIAS Y VIDEOS DE NUESTRAS OBRAS
                                <br>
                                <br>
                                <ng-image-gallery images="images" thumbnails="true" thumb-size="165" bubbles="true" bubble-size="80" img-bubbles="true" bg-close="true" piracy="true" img-anim="fadeup"></ng-image-gallery>
                        </div>
                            <!-- SLIDER -->
                        <div class="texto-inicio-slider">
                                UNA AMPLIA TRAYECTORIA PROFESIONAL AVALAN NUESTROS TRABAJOS
                        </div>
                        <div class="texto-inicio-slider"><?php include 'footer.php';?>  </div>
                    </td>
                </tr>
            </tbody>
        </table>
        
   </div>
        
        <!--SCRITP MENU RESPONSIVO-->
        <script>
            //  The function to change the class
            var changeClass = function(r, className1, className2) {
                var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
                if (regex.test(r.className)) {
                    r.className = r.className.replace(regex, ' ' + className2 + ' ');
                } else {
                    r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"), ' ' + className1 + ' ');
                }
                return r.className;
            };

            //  Creating our button in JS for smaller screens
            var menuElements = document.getElementById('menu');
            menuElements.insertAdjacentHTML('afterBegin', '<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i>Menu</button>');

            //  Toggle the class on click to show / hide the menu
            document.getElementById('menutoggle').onclick = function() {
                changeClass(this, 'navtoogle active', 'navtoogle');
            }

            // http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
            document.onclick = function(e) {
                var mobileButton = document.getElementById('menutoggle'),
                    buttonStyle = mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

                if (buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
                    changeClass(mobileButton, 'navtoogle active', 'navtoogle');
                }
            }
        </script>
        <!--SCRITP MENU RESPONSIVO-->
        <!-- SLIDER -->

        <!-- SLIDER -->
</body>

</html>