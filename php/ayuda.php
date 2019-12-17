<!--CHAT-->
<?php include "includes/chat.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php include "titlePrefix.php"; ?>Acerca de Nosotros</title>
    <?php include "favicon.php" ?>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/4328fe96d6.js" crossorigin="anonymous"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins-->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../plugins/iCheck/all.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include("includes/navbar.php"); ?>

        <div class="content-wrapper">
            <div class="container">
                <section class="content">
                    <div class="box box-info">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <p><span style="color: #276FBF;"><strong>PROCESO DE REGISTRO</strong></span></p>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="margin-left:3%; margin-right:3%;">
                                    <div class="card-body">
                                        <p><span style="color: #000000;"><strong>1. ¿Cómo me registro?</strong></span></p>
                                        <p><span style="color: #ff0000;"><strong>1.1. Si eres cliente</strong></span></p>
                                        <p>En la web&nbsp;www.SMShop.com&nbsp;clicando en el apartado “Accede a tu cuenta”&nbsp;se desplegará un menú. Clicando en el apartado “Registro”, deberás introducir número de Tarjeta SMShop, DNI, número de teléfono y correo electrónico. Una vez hecho esto te redirigirá a la página donde aparecerán tus datos de cliente para verificarlos o modificarlos si ha habido cambios. Una vez confirmado los datos tu tarjeta se activará automáticamente en la web y podrás empezar a comprar.<br>Si no recuerdas tu número de tarjeta, indicándonos tu DNI y número de teléfono, se te enviará el número de tarjeta a tu correo electrónico. Para ello deberás clicar en “El Nº de tarjeta es obligatorio, si no lo recuerdas&nbsp;pulsa aquí&nbsp;” dentro del apartado “Registro”</p>
                                        <p><span style="color: #ff0000;"><strong>1.2. Si no eres cliente</strong></span></p>
                                        <p>En la web&nbsp;www.SMShop.com&nbsp;clicando en el apartado “Accede a tu cuenta”&nbsp;se desplegará un menú. Clicando en el apartado “Registro”&nbsp;se abrirá una ventana donde deberás seleccionar la opción “Si no cuentas con una Tarjeta SMShop” y rellenar el formulario con tus datos y se te creará un usuario y una contraseña que podrás cambiar en ese mismo instante.<br>Una vez hecho esto se te asignará una Tarjeta , que enviaremos a tu domicilio, y que podrás utilizar tanto en la web como en las tiendas físicas.</p>
                                        <p><span style="color: #ff0000;"><strong>1.3. Si ya estas registrado</strong></span></p>SMShop
                                        <p>Si ya estás registrado deberás acceder usando tu DNI y contraseña.</p>
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box box-info">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <p><span style="color: #276FBF;"><strong>REALIZACIÓN DE PEDIDOS</strong></span></p>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="margin-left:3%; margin-right:3%;">
                                        <div class="card-body">
                                            <p><strong>1. ¿Cómo hago un pedido?</strong></p>
                                            <p><span style="color: #ff0000;"><strong>1.1. Selección de dirección de entrega del pedido</strong></span></p>
                                            <p>Para poder realizar un pedido será necesario estar registrado en la web. Al acceder a la tienda online tendrás que elegir entre que te enviemos el pedido a una dirección que tú elijas o recoger el pedido en tienda. Una vez completado este paso se podrá iniciar la realización del pedido.</p>
                                            <p><span style="color: #ff0000;"><strong>1.2. Selección de artículos de la compra online</strong></span></p>
                                            <p>Los artículos están organizados por grandes categorías de productos que se pueden visualizar en el menú rojo de la parte superior. Clicando en éstas grandes categorías se pueden visualizar las familias donde se encuentran los artículos. Aparecerán las familias si se señalan con el ratón las grandes categorías o en el menú vertical de la izquierda si ya estamos dentro de una gran categoría. Dentro de cada familia se podrán visualizar los artículos seleccionables.</p>
                                            <p><span style="color: #ff0000;"><strong>1.3. Selección de artículos mediante buscador</strong></span></p>
                                            <p>La tienda online dispone de un buscador de artículos que permite introducir una o varias palabras identificando entre todos los artículos aquellos que se relacionen con las palabras indicadas y mostrándolos para poder ser elegidos.</p>
                                            <p><span style="color: #ff0000;"><strong>1.4. Selección de artículos a partir de “Mis Listas”</strong></span></p>
                                            <p>La tienda online permite generar listas personalizadas de artículos que podrán cargarse en el pedido.</p>
                                            <p><span style="color: #ff0000;"><strong>1.5. Definición de cantidad de cada artículo</strong></span></p>
                                            <p>Cada artículo mostrado tiene un botón rápido para añadir el artículo al pedido y para incrementar o reducir el número de unidades deseadas o su peso. Pinchando en la foto del artículo se accederá a la ficha con información detallada del artículo y desde la misma también se podrá añadir el artículo al pedido e incrementar o reducir el número de unidades o su peso.</p>
                                            <p><span style="color: #ff0000;"><strong>1.6. Eliminar artículos de la cesta</strong></span></p>
                                            <p>Para eliminar un producto de la cesta de la compra, sitúa el cursor del ratón sobre el botón “Validar carrito”&nbsp;y se desplegará un menú con los productos seleccionados.<br>Para eliminar un determinado producto, basta con poner a cero la cantidad del mismo o hacer click en la imagen del cubo que hay al lado de cada artículo.<br>Para eliminar TODOS los productos de la cesta deberás clicar en la opción “Vaciar carrito”&nbsp;que aparece en la parte superior derecha del menú desplegado.</p>
                                            <p><strong>2. ¿Puedo hacer cambios en mi pedido?</strong></p>
                                            <p>No. Una vez que hayas finalizado tu pedido online no podrás añadir o eliminar productos o cambiar las cantidades. En caso de querer modificar la hora de entrega que habías reservado será necesario que te pongas en contacto con el&nbsp;Servicio de Atención al Cliente.</p>
                                            <p><strong>3. ¿Qué ocurre si no tengo tiempo de terminar mi pedido y lo quiero finalizar más tarde?</strong></p>
                                            <p>Si estando en mitad de la realización de un pedido tienes que parar temporalmente el mismo, debes guardar el pedido en “Mis Listas”&nbsp;y “guardar carrito actual como lista”. Cuando accedas de nuevo, acude a “Mis Listas”, “Ir a mis listas”&nbsp;y añadir la lista al carrito “Añadir al carrito”. Si cierras la web sin salir de tu sesión se te guardará el carrito con los productos añadidos hasta ese momento.</p>
                                            <p><strong>4. ¿Hay un importe mínimo/máximo para realizar un pedido?</strong></p>
                                            <p>No existe un importe mínimo ni máximo de compra. En caso de recibir un pedido con un importe excepcionalmente alto el Servicio de Atención al Cliente se pondrá en contacto contigo para verificar que el pedido realizado es correcto.</p>
                                            <p><strong>5. ¿Puede no haber disponibilidad de artículos en la compra online?</strong></p>
                                            <p>trabajamos para que siempre podamos servirte lo que nos hayas solicitado. En el caso de que al preparar tu pedido nos encontremos que no disponemos algún artículo de los que nos has solicitado nos pondremos en contacto contigo si en el momento de registrarte así nos lo indicaste. Si no quieres que nos pongamos en contacto contigo cuando no dispongamos de un artículo, te lo notificaremos y lamentándolo el pedido te llegará sin dicho artículo.</p>
                                            <p><strong>6. ¿Cómo puedo saber si la Tienda Online sirve a mi domicilio?</strong></p>
                                            <p>Cuando entres en la Tienda Online, a la hora de introducir la dirección de entrega del pedido, te indicaremos si tu dirección está dentro de nuestra área de reparto.</p>
                                            <p>También puedes comprobarlo en el apartado “Consultar código postal” de nuestra página web.</p>
                                            <p><strong>7. ¿Puedo añadir comentarios a mi pedido?</strong></p>
                                            <p>Sí, cuando vayas a finalizar la compra, clica en “Validar carrito”. En ese momento te mostraremos un listado con todos los productos que has añadido a tu compra y podrás añadir un comentario general al pedido rellenando el cuadro “Indicaciones sobre tu pedido” que aparecerá en la zona superior del listado.<br>Además, podrás añadir un comentario específico a cada producto que sea de peso variable (los señalizados con una báscula).</p>
                                            <p><strong>8. ¿Puedo navegar por la web sin estar registrado?</strong></p>
                                            <p>Sí, podrás navegar por la web y ver los diferentes artículos que están disponibles en la Tienda Online. Si además de navegar por la web deseas ir añadiendo productos al carrito te solicitaremos que indiques tu código postal (para poder mostrarte los productos disponibles en tu zona), seleccionar una tienda de recogida o registrarte con tus datos.</p>
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="box box-info">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <p><span style="color: #276FBF;"><strong>GESTIÓN DE MI CUENTA DE USUARIO</strong></span></p>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="margin-left:3%; margin-right:3%;">
                                            <div class="card-body">
                                                <p><strong>1. ¿Cómo incluyo una dirección de envío?</strong></p>
                                                <p>Antes de hacer el primer pedido en la tienda online tendrás que indicar en “Mis datos”&nbsp;la dirección o direcciones a las cuales se te pueden enviar los pedidos. Lo primero que haremos cuando quieras empezar un pedido es preguntarte por la dirección de envío del pedido, que deberá ser una de las que ya has incluido en “Mis datos”. También podrás seleccionar una tienda, de las que ofrecemos como opción, como lugar de recogida.</p>
                                                <p><strong>2. ¿Cómo consulto los pedidos que ya he realizado?</strong></p>
                                                <p>Dentro del apartado “Mis compras” podrás consultar todos aquellos pedidos que hayas realizado en SMShop. Además, a partir de un pedido ya realizado podrás añadir todos sus artículos al pedido que estés realizando.</p>
                                                <p>Además, podrás convertir el pedido en una lista habitual.</p>
                                                <p><strong>3. ¿Qué son&nbsp;Mis Listas?</strong></p>
                                                <p>A la hora de realizar un pedido, muchas veces hay artículos que se repiten en cada uno de ellos. “Mis Listas”&nbsp;te permiten crear una lista o listas con los artículos habituales de manera que puedas añadirlos de forma rápida y sencilla a un nuevo pedido.</p>
                                                <p><strong>4. ¿Puedo cambiar la hora/fecha de entrega?</strong></p>
                                                <p>Sí, para ello es necesario que te pongas en contacto con nuestro&nbsp;Servicio de Atención al Cliente.</p>
                                                <p><strong>5. He olvidado la fecha de entrega del pedido</strong></p>
                                                <p>Cuando hayas pagado el pedido recibirás un mail con toda la información relativa a ese pedido. En ese correo encontrarás la hora y fecha de entrega del pedido.</p>
                                                <p>En caso de que no encuentres el correo te recomendamos que te pongas en contacto con nuestro&nbsp;Servicio de Atención al Cliente.</p>
                                                <p><strong>6. ¿Cómo recupero mi contraseña?</strong></p>
                                                <p>En el apartado de “Accede a tu cuenta”&nbsp;en la web, existe la opción de “olvidé mi contraseña”. Clicando aquí se te pedirán las credenciales oportunas y se te enviará una nueva contraseña a tu mail y se te dará la opción de cambiarla por la que tú desees.</p>
                                                <p><strong>7. ¿Puedo cambiar mi dirección de email?</strong></p>
                                                <p>Puedes cambiar tu dirección de mail las veces que quieras. Para ello deberás acceder a la tienda online y en el apartado “Mis Datos” podrás realizar el cambio de mail.</p>
                                                <p><strong>8. ¿Puedo pedir la factura electrónica?</strong></p>
                                                <p>Sí, podrás pedir factura electrónica de tus pedidos en el momento de seleccionar la dirección y franja de entrega. También podrás solicitar la factura de un pedido anterior poniéndote en contacto con nuestro Servicio de Atención al Cliente. En ambos casos te la enviaremos por correo electrónico en un plazo de 48 horas.</p>
                                                <p><strong>9. ¿Qué ventajas tiene la Tarjeta SMShop?</strong></p>
                                                <p>Con la Tarjeta SMShop consigues grandes ventajas y ahorrarás en la compra sin esfuerzo.<br>Los descuentos puedes obtenerlos por la compra de los artículos señalizados en la tienda con un icono de una Tarjeta SMShop. Los artículos que estén en oferta de Tarjeta SMShop acumularán en tu Tarjeta un porcentaje sobre el precio señalado del producto.</p>
                                                <p>A partir del día 24 de cada mes, al pasar por caja, te emitiremos un bono de descuento con el importe correspondiente a todos los descuentos acumulados hasta el momento (siempre que dicho importe sea superior a 1€).</p>
                                                <p><strong>10. ¿Cómo consigo la Tarjeta SMShop?</strong></p>
                                                <p>Registrándote en la Tienda Online automáticamente se te generará una Tarjeta SMShop que podrás utilizar también en nuestras tiendas físicas.</p>
                                                <p><strong>11. ¿Cómo puedo canjear mis bonos de Tarjeta SMShop?</strong></p>
                                                <p>El bono mensual de Tarjeta SMShop lo podrás cajear a la hora de realizar el pago de cualquier pedido (siempre que el importe del pedido sea superior al del bono). El bono desaparecerá de tu cuenta bien porque lo canjees a la hora de realizar una compra, bien porque realices alguna compra en cualquiera de las tiendas de SMShop y se te entregue de manera física.</p>
                                                <p>&nbsp;</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-info">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                        <p><span style="color: #276FBF;"><strong>PROCESO DE PAGO</strong></span></p>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample" style="margin-left:3%; margin-right:3%;">
                                                <div class="card-body">
                                                    <p><strong>1. ¿Qué es el precio estimado y precio total?</strong></p>
                                                    <p>En los productos frescos, al realizar el pedido, la tienda online toma como referencia el peso teórico introducido para calcular el importe del artículo. Cuando se prepara el pedido se pesa el artículo real y se obtiene su peso. El peso teórico del pedido y el peso real de la preparación del pedido pueden variar ligeramente, por lo que puede haber un pequeño cambio en el precio final del artículo. En el albarán que recibirás con el pedido tendrás detallado el precio final con el peso real del artículo.<br>Aun y todo si tienes dudas sobre tu pedido, no dudes en contactar con el&nbsp;Servicio de Atención al Cliente.</p>
                                                    <p><strong>2. ¿Cuáles son los métodos de pago disponibles?</strong></p>
                                                    <p>Admitimos el pago con tarjeta de crédito y débito.</p>
                                                    <p><strong>3. ¿Qué tarjetas se aceptan para pagar los pedidos?</strong></p>
                                                    <p>Para pagar los pedidos aceptamos tarjetas de crédito y de débito. Los tipos de tarjetas que se pueden usar para realizar el pago son:&nbsp;VISA,&nbsp;VISA Electron, Mastercard y Maestro.</p>
                                                    <p><strong>4. ¿Puedo pagar con una tarjeta que no esté a mi nombre?</strong></p>
                                                    <p>El pedido se entregará al titular de la tarjeta que se ha utilizado para hacer el pago. En el momento de la entrega del pedido podemos solicitar por seguridad la presentación tanto del NIF con el que te registraste, así como el NIF del titular de la tarjeta para comprobar que la entrega es correcta.</p>
                                                    <p>La responsabilidad de autorización para la recepción y firma del albarán de entrega por parte de una tercera persona es responsabilidad del cliente.</p>
                                                    <p><strong>5. ¿Cuándo se carga el pago en la cuenta bancaria?</strong></p>
                                                    <p>El pago se carga en la cuenta el mismo día de la entrega del pedido. Si posteriormente en algún caso hubiera que hacer una devolución que conlleve un abono éste se realizará directamente en tu cuenta.</p>
                                                    <p><strong>6. ¿El precio de los artículos online es el mismo que el de los mismos artículos en las tiendas?</strong></p>
                                                    <p>Las enseñas&nbsp;SMShop&nbsp;y&nbsp;SMShop online&nbsp;llevan políticas comerciales distintas. Los precios, la gama de productos y las promociones no tienen por qué ser exactamente las mismas, pero sí que pueden coincidir o ser muy similares.<br>&nbsp;</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="box box-info">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingFive">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        <p><br><span style="color: #276FBF;"><strong>PROCESO DE ENVÍO DE PEDIDOS</strong></span></p>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample" style="margin-left:3%; margin-right:3%;">
                                                <div class="card-body">
                                                    <p><strong>1. ¿Cómo se transporta el pedido?</strong></p>
                                                    <p>El pedido se transporta en furgonetas especialmente acondicionadas. Los productos frescos y congelados se introducen en cubetas y bolsas isotérmicas especiales, por lo que en ningún momento se rompe la cadena de frío.</p>
                                                    <p>Además, en SMShop nos preocupamos por el medioambiente por lo que todos los pedidos los entregamos en furgonetas eléctricas.</p>
                                                    <p><strong>2. ¿Cuál es el precio de preparación y envío del pedido?</strong></p>
                                                    <p>El coste de preparación y envío es de 7,50€ indistintamente de la hora de entrega que elijas, pero si tu compra supera los 100€ éste coste será gratuito.</p>
                                                    <p>Si elijes la opción de recogida en tienda no se te cobrará nada por la preparación del pedido.</p>
                                                    <p><strong>3. ¿Cuál es el horario de entregas?</strong></p>
                                                    <p>El servicio de entregas es de lunes a sábados dividido en franjas. En función de tu dirección de envío pueden cambiar las horas de las franjas, te recomendamos que mires en la tienda online las franjas para tu dirección.</p>
                                                    <p><strong>4. ¿Qué ocurre si el pedido llega tarde?</strong></p>
                                                    <p>No es normal que ocurra, pero si el pedido va a retrasarse nuestro&nbsp;Servicio de Atención al Cliente&nbsp;se pondrá en contacto contigo por teléfono.</p>
                                                    <p><strong>5. ¿Qué ocurre si no puedo estar en la franja horaria de mi pedido?</strong></p>
                                                    <p>Si eres conocedor de que no vas a estar en la dirección de envío en la franja de entrega seleccionada ponte cuanto antes en contacto con nuestro&nbsp;Servicio de Atención al Cliente. Aun y todo, si no estás cuando llegue el pedido, éste será devuelto a nuestras instalaciones. Ponte en contacto con el&nbsp;Servicio de Atención al Cliente&nbsp;para poder acordar una nueva entrega.</p>
                                                    <p><strong>6. ¿Es posible enviar el pedido a una dirección diferente al titular del pago?</strong></p>
                                                    <p>Sí, en “Mis datos”&nbsp;puedes tener más de una dirección de envío. Cuando inicies un pedido te preguntaremos siempre la dirección de envío a la que llevarlo. El pedido se entregará a la persona que ha realizado el pago del pedido.</p>
                                                    <p><strong>7. ¿Cómo se prepara mi pedido en la tienda?</strong></p>
                                                    <p>Una vez que finalizas el pedido, este se recibe en SMShop donde un equipo de profesionales empieza a trabajar para que tu pedido llegue con la máxima calidad a tu dirección de envío en la franja de entrega que hayas seleccionado.</p>
                                                    <p>&nbsp;</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="box box-info">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingSix">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                        <p><span style="color: #276FBF;"><strong>PROCESO DE DEVOLUCIONES</strong></span></p>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample" style="margin-left:3%; margin-right:3%;">
                                                <div class="card-body">
                                                    <p><strong>1. ¿Cuál es la política de devoluciones?</strong></p>
                                                    <p>Cuando quieras devolver alguno de los artículos deberás ponerte en contacto con nuestro Servicio de Atención al Cliente. Te recordamos que para que puedas devolver un artículo lo debes hacer en los siguientes 14 días desde el pedido para cualquier artículo excepto con los frescos donde tendrás un máximo de 24 horas.</p>
                                                    <p><strong>2. ¿Cómo devuelvo los productos si no me convencen?</strong></p>
                                                    <p>Desde SMShop buscamos tu satisfacción en la compra online, por ello si no quieres un producto nos lo podrás devolver. Para ello se lo puedes dar al personal del servicio a domicilio cuando te entregue el pedido o ponerte en contacto con el&nbsp;Servicio de Atención al Cliente.</p>
                                                    <p><strong>3. ¿En caso de recibir un artículo en mal estado qué es lo que tengo que hacer?</strong></p>
                                                    <p>En el caso de haber recibido un artículo en mal estado desde SMShop te pedimos disculpas. Por favor, ponte en contacto con nuestro&nbsp;servicio de atención al cliente para que podamos solucionar este problema lo antes posible.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                </section>


            </div>

        </div>

        <?php include "includes/footer.php" ?>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../plugins/iCheck/icheck.min.js"></script>

</body>

</html>