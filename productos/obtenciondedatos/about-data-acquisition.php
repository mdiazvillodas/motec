<script type="text/javascript">
  var slider;
  window.addEvent('domready', function(){
 slider = new Fx.Tween(('float'), {duration: 250,link: 'chain',transition: Fx.Transitions.Circ.easeOut});
  
 $('1').addEvent('click', function(){
 slider.start('left','0px');
 });
  
 $('2').addEvent('click', function(){
 slider.start('left','-580px');
 });
  
 $('3').addEvent('click', function(){
 slider.start('left','-1160px');
 });
  
 $('4').addEvent('click', function(){
 slider.start('left','-1740px');
 });

  
 
 
  });
</script>
<div id="Acerca-de">
  <h3>About Data Acquisition</h3>
  <img src="./img/productos/about-data-acquisition.jpg"/>
  <div class="slider">
    <div class="tabs">
      <div id="1" class="first-child tabItem active">Vista General</div> 
      <div id="2" class="tabItem">Modelos</div>  
      <div id="3" class="tabItem">Comparación</div>
      <div id="4" class="tabItem">Cómo elegir</div>
    </div>
    <div class="mask">
      <div id="float">
	<div class="sec">
	  <div class = "articlecontent">
	  <p> Un sistema mide de adquisición de datos y registros de los parámetros importantes del vehículo a través de sensores. Estos parámetros pueden ser analizados para comprender mejor el comportamiento del motor, el chasis y el conductor, que en última instancia, puede dar lugar a una mayor previsibilidad y un mejor rendimiento en el día de la raza. En los últimos años, los sistemas de adquisición de datos se han convertido en poderosas herramientas que son vitales para el éxito en todos los niveles del deporte del motor. </p>
	  <p class = "MsoNormal"> Los requisitos básicos de hardware incluyen un dispositivo de registro, los sensores y el cableado, además de un PC para la descarga de datos y análisis. Programa de software de gestión de la rociada de MoTeC se utiliza para configurar el dispositivo de registro. </p>
	  <h2> Sensores </h2>
	  <p class = "MsoNormal"> Varios sensores se pueden utilizar para medir los parámetros vitales del motor y del chasis. Por ejemplo: </p>
	  <ul>
	  <li> velocidades de ruedas </li>
	  </ul>
	  <ul>
	  <li> aceleración lateral y longitudinal </li>
	  <li> temperaturas de neumáticos </li>
	  <li> presiones de freno </li>
	  <li>
	  La velocidad del motor (
	  <acronym title = "Revolutions Per Minute"> RPM </acronym>
	  )
	  </li>
	  <li> Temperatura del motor </li>
	  <li> Presión de aceite </li>
	  <li>
	  GPS
	  <br>
	  </li>
	  </ul>
	  <p class = "MsoNormal"> Entrada del controlador también se puede medir. Por ejemplo: </p>
	  <ul>
	  <li> posición de la mariposa </li>
	  <li>
	  la fuerza de frenado
	  <br>
	  </li>
	  <li>
	  ángulo de dirección
	  <br>
	  </li>
	  </ul>
	  <p>
	  Los sensores están conectados para enviar mediciones para el dispositivo de adquisición de datos, que registra esta información para su posterior análisis y también lo utiliza para funciones inmediatas. Por ejemplo, las mediciones de los sensores pueden activar alarmas programadas (por ejemplo, baja presión de aceite) y se pueden utilizar para calcular los valores pertinentes, como los tiempos de vuelta, velocidad de avance y de deslizamiento de las ruedas.
	  <br>
	  </p>
	  <h2> Display </h2>
	  <p>
	  Los datos seleccionados se pueden mostrar al conductor en un tablero digital en la cabina del piloto. Comúnmente esto incluye información de tiempo de vuelta y detalles vitales del motor, en combinación con las luces de cambio y las luces de advertencia. MoTeC menudo integra la visualización y el registrador en una unidad Logger Dash.
	  <br>
	  </p>
	  <h2> Inicio de sesión </h2>
	  <p class = "MsoNormal"> Los datos registrados en el dispositivo de registro se descarga en un PC, o bien cada vez que el vehículo entra en los boxes o al final de una sesión de carrera, rally, carrera de arrastre o de prueba. La memoria disponible varía mucho de un sistema a otro y más dispositivos de registro reciente utilizan la comunicación USB o Ethernet para la descarga rápida. </p>
	  <p class = "MsoNormal"> La frecuencia de cada muestra de registro dependerá del parámetro que se está midiendo. Por ejemplo, los cambios de temperatura del refrigerante del motor lentamente por lo que necesita estar conectado a cada segundo, mientras que las RPM del motor o velocidad de la rueda cambia muy rápidamente y la necesidad de estar conectado a 20-50 Hz (20 a 50 veces por segundo). Si la temperatura del refrigerante se registra a 20 Hz se pierda el registro de la memoria; y si RPM se registra en sólo 1 Hz no será útil como le falta un montón de detalles. </p>
	  <p class = "MsoNormal"> Resolución de Inicio de sesión es otra variable clave en la adquisición de datos, ya que puede afectar la calidad de sus datos. Aunque es innecesario para registrar las temperaturas del motor en fracciones de grados, que puede ser muy importante tener este nivel de detalle al analizar, por ejemplo, cambios en la posición de suspensión. Resolución es un punto clave de la diferencia al comparar las marcas de adquisición de datos. </P>
	  <p class = "MsoNormal"> </p>
	  <p class = "MsoNormal"> </p>
	  <p class = "MsoNormal"> </p>
	  <h2> Análisis de Datos </h2>
	  <p class = "MsoNormal">
	  La fuerza real de adquisición de datos se encuentra en el análisis de la información registrada. ver
	  Herramientas de análisis de datos
	  para más información sobre el software especializado para el análisis y la telemetría.
	  <br>
	  </p>
	  <h2></h2>
	  <ul>
	  <li>
	  <strong>
	  Vigilar la salud del vehículo
	  <br>
	  </strong>
	  La adquisición de datos puede ayudar a mejorar la fiabilidad de un vehículo y prolongar la vida del motor y otros componentes. Los problemas potenciales que no se pueden observar con medidas estándar se pueden detectar mediante el control de la transmisión en todas las partes de una pista y la identificación de irregularidades. Por ejemplo:
	  </li>
	  <ul>
	  <li>
	  Un manómetro de aceite estándar está muy amortiguado y no muestra caídas breves y sobretensiones. Incluso si se produce un chapuzón en cada esquina es posible que no se active una alarma, pero que puede dañar el motor en el largo plazo. Análisis de los datos pone de relieve estos pequeños cambios, asegurando el problema se aborda temprano y se evitan reparaciones costosas.
	  <br>
	  </li>
	  <li> datos de telemetría pueden mostrar de bloqueo de la rueda que el conductor no puede darse cuenta. El equipo puede advertir al conductor y evitar el fallo de los neumáticos antes de tiempo. </Li>
	  </ul>
	  <li>
	  <strong>
	  Mejorar la técnica de conductor
	  <br>
	  </strong>
	  </li>
	  <ul>
	  <li> las acciones del conductor, tales como puntos de posición del acelerador y del freno se pueden monitorizar en contra de una vuelta de referencia. Los tiempos del sector resultantes pueden analizarse para la eficacia del estilo de conducir, en comparación con otros conductores o con los datos anteriores desde el mismo controlador. </Li>
	  <li>
	  El uso de
	  <acronym title = "Sistema de Posición Global"> GPS </acronym>
	  cartografía pista permite a los conductores se superponen y se comparan las líneas impulsadas para determinar el enfoque más eficaz de una esquina o sección de la vía particular.
	  <br>
	  </li>
	  </ul>
	  <li>
	  <strong> Eliminar las pruebas de ensayo y error y acelerar mejoras </strong>
	  <br>
	  Cuando los datos se registran durante las pruebas y analizado sobre el terreno, un valioso tiempo de pista se puede utilizar de manera más eficiente. En lugar de basarse en un enfoque inconsistente para establecer cambios, los resultados pueden ser revisados ​​inmediatamente con los datos cuantitativos para confirmar o añadir a los comentarios de conductor. Por ejemplo:
	  <br>
	  </li>
	  <ul>
	  <li> sobreviraje y subviraje se pueden medir en esquinas individuales y se utilizan para determinar los ajustes del chasis. </li>
	  <li>
	  Ajustes que conducen a mayor velocidad de la línea recta, pero menor velocidad en curvas podrían dar lugar a veces igual de vuelta, pero el análisis de los datos proporcionarán información valiosa para la instalación en diferentes pistas.
	  <br>
	  </li>
	  <li>
	  El motor se puede ajustar con mayor precisión, usando 'en pista' mediciones Lambda. ver
	  Lambda era
	  característica en MoTeC de
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  s.
	  </li>
	  </ul>
	  <li>
	  datos <strong> Tienda para </strong>
	  <strong> archivo y </strong>
	  <strong> de recuperación </strong>
	  <br>
	  El registro de datos puede grabar casi todo lo que sucede durante una sesión de prueba o carrera. Puede ser muy útil para almacenar esta información y mirar hacia atrás en los datos antes de la próxima salida en la misma pista. De este modo, la configuración del vehículo puede ser más rápido y más eficiente.
	  </li>
	  </ul>
	  </div>
	</div>
	<div class="sec">
	  <div class = "articlecontent">
	  <p> sistemas de adquisición de datos MoTeC se pueden clasificar en dos tipos: los registradores de datos dedicados (ACL, EDL3) que son esencialmente "cajas negras" y los registradores de la rociada combinados que integran las funciones de visualización y registro en una unidad. Hasta hace poco, la gama de registradores de la rociada de MoTeC consistió CDL3, SDL3 y ADL3. </p>
	  <p> MoTeC ahora ofrece una impresionante gama de Color Display Leñadores (C185, C125), que también incluye las luces de desplazamiento programables. Adición de un mayor nivel de apelación es el exclusivo Display software Creador que permite una completa personalización de la pantalla de visualización. </P>
	  <h5 class = "MsoNormal">
	  <div class = "likelink"> Pantalla Creador </div>
	  </h5>
	  <p class = "MsoNormal"> Aparte de sus pantallas brillantes de alta resolución, lo que hace que nuestros registradores de pantalla a color realmente emocionante es la personalización increíble hecho posible con el software de visualización Creador de MoTeC. Ya no está limitado por los diseños de conjunto y las fuentes, ahora se puede diseñar sus propias pantallas totalmente a medida, totalmente funcional a partir de cero, con imágenes personalizadas, logotipos, iconos, avisos y más. Diseña tus propios indicadores, y comparte sus patrocinadores exposición adicional, crear diseños de página únicos y maximizar la eficiencia de la comunicación del color. Debe ser sencillo o conseguir realmente creativo. </p>
	  <p class = "MsoNormal">
	  C Visualizador de la serie madereros requieren una simple actualización de pantalla Creador que se puede activar en el momento de la compra o en cualquier momento posterior.
	  <br>
	  </p>
	  <p> </p>
	  <p>
	  <strong>
	  <a name="c185"> </a>
	  <div class = "likelink"> C185 </div>
	  </strong>
	  </p>
	  <p> La pantalla Logger C185 Color está diseñado con profesionales en mente. No sólo ofrece una claridad absoluta en diversas condiciones de iluminación gracias a su pantalla a todo color antirreflejos notable, sino que también proporciona el registro de alto nivel, la funcionalidad de control y las matemáticas auxiliar. Viene con 250 MB de registro de datos interna, que se puede aumentar a 500 MB, y está construido con un conector y Autosport, luces de cambio programables integrados. </P>
	  <p>
	  Hay numerosas plantillas de pantalla estándar para elegir, o comprar la
	  Display Creador
	  actualizar a crear sus propios únicos gráficos en pantalla.
	  <br>
	  </p>
	  <p>
	  <strong>
	  <a name="c125"> </a>
	  <div class = "likelink"> C125 </div>
	  </strong>
	  </p>
	  <p> Con una impresionante y ultra brillante pantalla y, luces de cambio programables integrados, la C125 ofrece un valor excepcional y numerosas opciones de expansión. Se puede pedir con o sin 120 MB de registro de datos interno. </P>
	  <p>
	  Hay numerosas plantillas de pantalla estándar para elegir, o comprar la
	  Display Creador
	  actualizar a crear sus propios únicos gráficos en pantalla.
	  <br>
	  </p>
	  <p>
	  <strong>
	  <div class = "likelink"> KITS DE CARRERA C125 </div>
	  </strong>
	  </p>
	  <p>
	  El Kit de registro de la raza C125 es una solución de pantalla a color y el registro completo que está diseñado para una fácil instalación y adaptabilidad. El kit incluye
	  <acronym title = "Sistema de Posición Global"> GPS </acronym>
	  , Botones de pre-cableado y un telar de plug-in con el adaptador de corriente. Opcionalmente, una actualización de E / S está disponible, al igual que
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  telares de adaptadores y otros accesorios.
	  </p>
	  <h2>
	  <a name="cdl3"> </a>
	  <div class = "likelink"> CDL3 </div>
	  <br>
	  </h2>
	  <p> El CDL3 está diseñado para satisfacer los requisitos de los deportes de motor de nivel de entrada tales como club de carreras. Es una pantalla completa listo para la carrera y el sistema de registro de datos que puede ser adaptado y ampliado para adaptarse a diferentes aplicaciones. </P>
	  <h2>
	  <div class = "likelink"> CDL3 KITS DE PISTA </div>
	  </h2>
	  <p> El Kit de Inicio de sesión CDL3 Track es una solución de visualización y la memorización completa que es rentable y fácil de instalar. El kit incluye las luces de cambio, GPS, botones pre-cableados y un plug-in telar. Opcionalmente, una actualización de E / S está disponible, al igual que los adaptadores de la ECU y otros accesorios. </P>
	  <p> A no ingresar Kit Display CDL3 Track también está disponible. </p>
	  <h2>
	  <a name="sdl3"> </a>
	  <div class = "likelink"> SDL3 </div>
	  </h2>
	  <p>
	  El Logger Dash El deporte es un guión y el registro de datos dispositivo digital con un paquete de características a medida para satisfacer los requisitos de moderadas sistema de adquisición de datos. El
	  <acronym title = "Sport Dash Logger - nueva generación"> SDL3 </acronym>
	  ofrece un precio asequible, mientras que se mantiene la flexibilidad para adaptarse a una amplia gama de dos ruedas, cuatro ruedas y aplicaciones marinas.
	  </p>
	  <h2>
	  <a name="adl3"> </a>
	  <div class = "likelink"> ADL3 </div>
	  </h2>
	  <p>
	  <p> La amplia gama de opciones disponibles hacen que sea fácil para extender las capacidades de la ADL3 si la necesidad de información de los sistemas de adquisición de datos aumenta. </p>
	  <h2>
	  <div class = "likelink"> EDL3 </div>
	  <a name="edl3"> </a>
	  </h2>
	  <p>
	  El Logger Dash cerrado 3 proporciona el mismo registro y control de características como la ADL3, pero se suministra como una unidad cerrada. Puede ser utilizado como un tipo de cuadro negro registrador o conectado a una pantalla MoTeC de su elección.
	  <br>
	  </p>
	  <h2>
	  <div class = "likelink"> ACL </div>
	  <a name="acl"> </a>
	  </h2>
	  <p>
	  La central Logger Advanced es un dispositivo de registro dedicado, diseñado para equipos de carreras que ponen altas demandas en su sistema de adquisición de datos. El
	  <acronym title = "Advanced central Logger"> ACL </acronym>
	  constituye el núcleo de un sistema altamente configurable generalmente consiste en:
	  <br>
	  </p>
	  <ul>
	  <li>
	  <p>
	  diversos dispositivos de medición tales como
	  <acronym title = "Módulo de entrada Versátil"> VIM </acronym>
	  s (entrada versátil Módulos) y
	  <acronym title = "Lambda Professional Meter"> PLM </acronym>
	  s para proporcionar entradas de sensor,
	  </p>
	  </li>
	  </ul>
	  <ul>
	  <li>
	  <p> un dispositivo de visualización como una pantalla pequeña o SDL3. Un SDL3 también proporciona la capacidad de entrada y de salida adicional, </p>
	  </li>
	  <li>
	  <p>
	  un dispositivo de salida tal como un
	  <acronym title = "Input / Output Expander"> E888 </acronym>
	  ,
	  <acronym title = "Input / Output Expander"> E816 </acronym>
	  o SDL3 para controlar dispositivos externos. El ACL controla estos dispositivos mediante la comunicación a través de mensajes CAN.
	  </p>
	  </li>
	  </ul>
	  </div>
	</div>
	<div class="sec">
	  <div class = "articlecontent">
	  <p> Utilice estas tablas para comparar las principales especificaciones de las unidades de adquisición de datos MoTeC y para determinar la idoneidad de nuestros diferentes modelos para su aplicación. </p>
	  <p> La primera tabla es una buena referencia para el fútbol de clubes hasta los deportes de motor a nivel nacional, mientras que el segundo cuadro se comparan las unidades que son utilizados por los equipos profesionales. Algunos productos se superponen en ambas tablas, ya que son adecuados para todos los niveles. </P>
	  <h3> Clave: </h3>
	  <p>
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  - Estándar disponible
	  <br>
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  - No disponible
	  <br>
	  opción - requiere actualización opcional
	  </p>
	  <table>
	  <thead>
	  <tr class = "bgblue">
	  <td class = colspan "border" = "4">
	  <p>
	  <strong> Adquisición de datos Tabla de comparación </strong>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <strong> C125 </strong>
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <strong> CDL3 </strong>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <strong>
	  SDL3
	  <br>
	  </strong>
	  (descatalogados)
	  <strong>
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <strong> ADL3 / EDL3 </strong>
	  <br>
	  </td>
	  </tr>
	  <tr class = "bglightblue">
	  <td class = colspan "border" = "8">
	  <p class = "MsoNormal">
	  <strong> Entradas </strong>
	  </p>
	  </td>
	  </tr>
	  <tr class = "border">
	  <td class = "bglightgrey">
	  <p> voltaje analógico </p>
	  </td>
	  <td class = colspan "centeralign" = "4">
	  <p>
	  Opcional 6
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  Opcional 4
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p> 8 </p>
	  </td>
	  <td class = "centeralign">
	  10
	  <br>
	  Opcional 24
	  </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p> temperatura analógica </p>
	  </td>
	  <td class = colspan "border" = "4">
	  <p class = "centeralign">
	  Opcional 2
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  Opcional 2
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  4
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  4
	  <br>
	  Opcional 8
	  </td>
	  </tr>
	  <tr class = "border">
	  <td class = "bglightgrey">
	  <p> Digitaces </p>
	  </td>
	  <td class = colspan "border" = "4">
	  <p class = "centeralign"> Opcional 2 </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> Opcional 2 </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> 2 </p>
	  </td>
	  <td class = "centeralign"> 4 </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p class = "MsoNormal"> Velocidad </p>
	  </td>
	  <td class = colspan "border" = "4">
	  <p class = "centeralign">
	  3 opcional
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  3 opcional
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> 4 </p>
	  </td>
	  <td class = "centeralign"> 4 </td>
	  </tr>
	  <tr class = "border">
	  <td class = "bglightgrey">
	  <p> Cambiar </p>
	  </td>
	  <td class = colspan "border" = "4">
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  <p class = "centeralign"> </p>
	  </td>
	  <td class = "centeralign"> 4 </td>
	  </tr>
	  <tr class = "border">
	  <td class = "bglightgrey">
	  <p> Banda Ancha Lambda </p>
	  </td>
	  <td class = colspan "centeralign" = "4">
	  Vía
	  <acronym title = "Lambda Professional Meter"> PLM </acronym>
	  o
	  <acronym title = "Lambda Para módulo CAN"> LTC </acronym>
	  <br>
	  </td>
	  <td class = "centeralign">
	  a través de PLM o LTC
	  <br>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  a través de PLM o LTC
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign"> a través de PLM o LTC </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p class = "MsoNormal"> unidades de expansión </p>
	  </td>
	  <td class = colspan "border" = "4">
	  <p class = "centeralign">
	  E888 /
	  <acronym title = "Input / Output Expander"> E816 </acronym>
	  (funcionalidad completa)
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  E888 (8 termopares solamente)
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p> E888 (sólo 8 termopares) </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  hasta 2 x
	  <acronym title = "Módulo de entrada Versátil"> VIM </acronym>
	  y
	  <br>
	  2 x
	  <acronym title = "Input / Output Expander"> E888 </acronym>
	  / E816
	  <br>
	  </p>
	  </td>
	  </tr>
	  <tr class = "bglightblue">
	  <td class = colspan "border" = "8">
	  <p class = "MsoNormal">
	  <strong> adquisición y telemetría de datos </strong>
	  </p>
	  </td>
	  </tr>
	  <tr class = "border">
	  <td class = colspan "bglightgrey" = "4">
	  <p class = "MsoNormal">
	  Memoria de registro de datos
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  Opcional
	  <br>
	  120 MB
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> Opcional 8 MB ​​</p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  Opcional 16 MB
	  <br>
	  o 120 MB
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  16 MB
	  <br>
	  Opcional 250 MB
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "4">
	  <p class = "MsoNormal"> Tipo de registro </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> 1 - 500 Hz </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> 1 - 500 Hz </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> 1 - 500 Hz </p>
	  </td>
	  <td class = "centeralign"> 1 - 1000 Hz </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "4">
	  <p>
	  análisis utilizando
	  <strong> i2 estándar </strong>
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign"> Opcional </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> Opcional </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> Opcional </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "4">
	  <p>
	  análisis utilizando
	  <strong> i2 Pro </strong>
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign"> Opcional </p>
	  <p class = "centeralign"> </p>
	  </td>
	  <td>
	  <p class = "centeralign"> Opcional </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> Opcional </p>
	  </td>
	  <td class = "centeralign"> Opcional </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "4">
	  <p class = "MsoNormal"> Telemetría </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "centeralign"> Opcional </td>
	  </tr>
	  <tr class = "bglightblue">
	  <td class = colspan "border" = "8">
	  <p class = "MsoNormal">
	  <strong> Pantalla </strong>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "4">
	  <p> Type </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  Ultra Bright Color
	  <br>
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  Reflexivo Mono LCD
	  <br>
	  </p>
	  </td>
	  <td>
	  <p class = "MsoNormal centeralign">
	  Reflexivo Mono LCD
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	    Reflexivo LCD Mono en
	  <acronym title = "Logger Dash Advanced - tercera generación"> ADL3 </acronym>
	  ; Sin visualización en EDL3
	  </p>
	  </td>
	  </tr>
	  <tr class = "border">
	  <td class = colspan "bglightgrey" = "4">
	  <p class = "MsoNormal"> Luz de fondo </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> opción </p>
	  </td>
	  <td class = "centeralign">
	    Opcional en ADL3
	  <br>
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  en EDL3
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "4">
	  <p class = "MsoNormal"> Modos de visualización </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  3
	  <br>
	  (Más con
	  Display Creador
	  opción)
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  3
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> 3 </p>
	  </td>
	  <td class = "centeralign">
	  3 en ​​ADL3
	  <br>
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  en EDL3
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "4">
	  apoyos
	  Display Creador
	  <br>
	  </td>
	  <td class = "centeralign"> opcional </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr class = "bglightblue">
	  <td class = colspan "border" = "8">
	  <p class = "MsoNormal">
	  <strong> Comunicaciones </strong>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "4">
	  <p class = "MsoNormal"> CAN </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> 2 </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> 2 </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> 2 </p>
	  </td>
	  <td class = "centeralign"> 2 </td>
	  </tr>
	  <tr class = "border">
	  <td class = colspan "bglightgrey" = "4">
	  <p class = "MsoNormal"> RS232 </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  2 x Capacidad
	  <br>
	  1 x Transmit
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  <p class = "MsoNormal centeralign"> </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "4">
	  <p class = "MsoNormal"> RS422, RS485 </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  <p class = "centeralign"> </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  <p class = "MsoNormal centeralign"> </p>
	  </td>
	  <td>
	  <p class = "MsoNormal centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr class = "bglightgrey">
	  <td class = colspan "bglightblue" = "8">
	  <p>
	  <strong> conexión PC </strong>
	  </p>
	  </td>
	  </tr>
	  <tr class = "border">
	  <td class = colspan "bglightgrey" = "4">
	  <p class = "MsoNormal"> Ethernet </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  <p class = "MsoNormal centeralign"> </p>
	  </td>
	  <td>
	  </tr>
	  <tr class = "bglightblue">
	  <td class = colspan "border" = "8">
	  <p class = "MsoNormal">
	  <strong> Salidas </strong>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "4">
	  <p class = "MsoNormal">
	  Digital, conmutada,
	  <acronym title = "ancho de pulso modulado."> PWM </acronym>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> 4 </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  4
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  4
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  4
	  <br>
	  Opcional 8
	  <br>
	  </td>
	  </tr>
	  <tr class = "border">
	  <td class = colspan "bglightgrey" = "4">
	  <p class = "MsoNormal"> unidades de expansión </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  1 o 2 x E888 / E816
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "centeralign"> 1 o 2 x E888 / E816 </td>
	  </tr>
	  <tr class = "bglightgrey">
	  <td class = colspan "bgdarkgrey" = "4">
	  <p>
	  <strong> más información sobre ... </strong>
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <strong> C125 </strong>
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <a title="SDL3" href="/sdl3/">
	  <strong> </strong>
	  </a>
	  <strong>
	  <strong> CDL3 </strong>
	  <strong>
	  </strong>
	  </p>
	  <strong>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <strong>
	  <strong> SDL3 </strong>
	  </strong>
	  <strong>
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <strong> ADL3 / EDL3 </strong>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  </table>
	  <p> </p>
	  <h2 class = "noborder">
	  <a name="ProCompTable"> </a>
	  Comparación Profesional tabla:
	  </h2>
	  <table>
	  <thead>
	  <tr class = "bgblue">
	  <td class = colspan "border" = "2">
	  <p>
	  <strong> Adquisición de datos Tabla de comparación </strong>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <strong>
	  SDL3
	  <br>
	  </strong>
	  (descatalogados)
	  <strong>
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <strong> C185 </strong>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <strong> ADL3 / EDL3 </strong>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <strong>
	  ACL
	  <br>
	  </strong>
	  </td>
	  </tr>
	  <tr class = "bglightblue">
	  <td class = colspan "border" = "6">
	  <p class = "MsoNormal">
	  <strong> Entradas </strong>
	  </p>
	  </td>
	  </tr>
	  <tr class = "border">
	  <td class = "bglightgrey">
	  <p> voltaje analógico </p>
	  </td>
	  <td class = colspan "centeralign" = "2">
	  <p>
	  8
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  10
	  <br>
	  Opcional 20
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  10
	  <br>
	  Opcional 24
	  </p>
	  </td>
	  <td class = "centeralign">
	    a través de VIM,
	  <acronym title = "Sport Dash Logger"> SDL </acronym>
	  , E888, E816
	  </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p> temperatura analógica </p>
	  </td>
	  <td class = colspan "border" = "2">
	  <p class = "centeralign">
	  4
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  4
	  <br>
	  Opcional 8
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  4
	  <br>
	  Opcional 8
	  </p>
	  </td>
	  <td class = "centeralign"> a través de SDL </td>
	  </tr>
	  <tr class = "border">
	  <td class = "bglightgrey">
	  <p> Digitaces </p>
	  </td>
	  <td class = colspan "border" = "2">
	  <p class = "centeralign"> 2 </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  4
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> 4 </p>
	  </td>
	  <td class = "centeralign"> a través de VIM, SDL, E888, E816 </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p class = "MsoNormal"> Velocidad </p>
	  </td>
	  <td class = colspan "border" = "2">
	  <p class = "centeralign"> 4 </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> 4 </p>
	  </td>
	  <td class = "centeralign"> a través de VIM, SDL </td>
	  </tr>
	  <tr class = "border">
	  <td class = "bglightgrey">
	  <p> Cambiar </p>
	  </td>
	  <td class = colspan "border" = "2">
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  2
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> 4 </p>
	  </td>
	  <td class = "centeralign"> a través de SDL, E888, E816 </td>
	  </tr>
	  <tr class = "border">
	  <td class = "bglightgrey">
	  <p> Banda Ancha Lambda </p>
	  </td>
	  <td class = colspan "centeralign" = "2">
	  Vía PLM o LTC
	  <br>
	  </td>
	  <td class = "centeralign">
	  a través de PLM o LTC
	  <br>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> a través de PLM o LTC </p>
	  </td>
	  <td class = "centeralign"> a través de PLM o LTC </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p class = "MsoNormal"> unidades de expansión </p>
	  </td>
	  <td class = colspan "border" = "2">
	  <p class = "centeralign">
	  E888;
	  <br>
	  Sólo 8 termopares
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  E888 / E816
	  <br>
	  SVIM / VIM
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  hasta 2 x VIM
	  <br>
	  y 2 x E888 / E816
	  </p>
	  </td>
	  <td class = "centeralign">
	  hasta 8 x VIM y
	  <br>
	  2 x E888 / E816
	  <br>
	  </td>
	  </tr>
	  <tr class = "bglightblue">
	  <td class = colspan "border" = "6">
	  <p class = "MsoNormal">
	  <strong> adquisición y telemetría de datos </strong>
	  </p>
	  </td>
	  </tr>
	  <tr class = "border">
	  <td class = colspan "bglightgrey" = "2">
	  <p class = "MsoNormal">
	  Memoria de registro de datos
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  Opcionales de 8 MB
	  <br>
	  o 120 MB
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  250 MB
	  <br>
	  Opcional 500 MB
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  16 MB
	  <br>
	  Opcional 250 MB
	  </p>
	  </td>
	  <td class = "centeralign"> 1 GB </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "2">
	  <p class = "MsoNormal"> Tipo de registro </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> 1 - 500 Hz </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> 1 - 1000 Hz </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> 1 - 1000 Hz </p>
	  </td>
	  <td class = "centeralign">
	  1-5000 Hz
	  <br>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "2">
	  <p>
	  análisis utilizando
	  <strong> i2 estándar </strong>
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign"> Opcional </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "2">
	  <p>
	  análisis utilizando
	  <strong> i2 Pro </strong>
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign"> Opcional </p>
	  </td>
	  <td>
	  <p class = "centeralign"> Opcional </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> Opcional </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "2">
	  <p class = "MsoNormal"> Telemetría </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> Opcional </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> Opcional </p>
	  </td>
	  <td class = "centeralign"> Opcional </td>
	  </tr>
	  <tr class = "bglightblue">
	  <td class = colspan "border" = "6">
	  <p class = "MsoNormal">
	  <strong> Pantalla </strong>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "2">
	  <p class = "MsoNormal"> Tipo </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  Reflexivo Mono LCD
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  Ultra Bright Color
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> Reflective Mono LCD en ADL3; Sin visualización en EDL3 </p>
	  </td>
	  <td class = "centeralign"> Sin visualización </td>
	  </tr>
	  <tr class = "border">
	  <td class = colspan "bglightgrey" = "2">
	  <p class = "MsoNormal"> Luz de fondo </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> Opcional </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  <p class = "MsoNormal centeralign"> </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  Opcional en ADL3
	  <br>
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  en EDL3
	  </p>
	  </td>
	  <td class = "centeralign">
	    Sin visualización
	  <br>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "2">
	  <p class = "MsoNormal"> Modos de visualización </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  3
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  3
	  <br>
	  (Más con
	  Display Creador
	  opción)
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  3 en ​​ADL3
	  <br>
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  en EDL3
	  </p>
	  </td>
	  <td class = "centeralign">
	    Sin visualización
	  <br>
	  </td>
	  </tr>
	  <tr>
	  <td colspan = "2">
	  <span class = "bglightgrey"> Admite Display Creador </span>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "centeralign"> Opcional </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr class = "bglightblue">
	  <td class = colspan "border" = "6">
	  <p class = "MsoNormal">
	  <strong> Comunicaciones </strong>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "2">
	  <p class = "MsoNormal"> CAN </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> 2 </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign"> 4 </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> 2 </p>
	  </td>
	  <td class = "centeralign"> 2 </td>
	  </tr>
	  <tr class = "border">
	  <td class = colspan "bglightgrey" = "2">
	  <p class = "MsoNormal"> RS232 </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  2 x dedicado
	  <br>
	  Reciba 1 x opcional adicional
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  <p class = "MsoNormal centeralign"> </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "2">
	  <p class = "MsoNormal"> RS422, RS485 </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  <p class = "MsoNormal centeralign"> </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  <p class = "MsoNormal centeralign"> </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr class = "bglightgrey">
	  <td class = colspan "bglightgrey" = "6">
	  <p>
	  <strong> conexión PC </strong>
	  </p>
	  </td>
	  </tr>
	  <tr class = "border">
	  <td class = colspan "bglightgrey" = "2">
	  <p class = "MsoNormal"> Ethernet </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  <p class = "MsoNormal centeralign"> </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "mesa de la garrapata" src = "/ image_display.php? path = 1628382267_tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr class = "bglightblue">
	  <td class = colspan "border" = "6">
	  <p class = "MsoNormal">
	  <strong> Salidas </strong>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightgrey" = "2">
	  <p class = "MsoNormal"> Digital, conmutada, PWM </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> 4 </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  6
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  4
	  <br>
	  Opcional 8
	  </p>
	  </td>
	  <td class = "centeralign"> a través de E888, E816 </td>
	  </tr>
	  <tr class = "border">
	  <td class = colspan "bglightgrey" = "2">
	  <p class = "MsoNormal"> unidades de expansión </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  <img alt = "tabla cruzada" src = "/ image_display.php? path = 185402319_cross.jpg">
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign">
	  1 o 2 x E888 / E816
	  <br>
	  1 o 2 x VIM / SVIM
	  <br>
	  </p>
	  </td>
	  <td class = "border">
	  <p class = "MsoNormal centeralign"> 1 o 2 x E888 / E816 </p>
	  </td>
	  <td class = "centeralign"> 1 o 2 x E888 / E816 </td>
	  </tr>
	  <tr class = "bglightgrey">
	  <td class = colspan "bgdarkgrey" = "2">
	  <p>
	  <strong> más información sobre ... </strong>
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <strong> SDL3 </strong>
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign">
	  <strong>
	  C185
	  <br>
	  </strong>
	  <a title="EDL3" href="/edl3/"> </a>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <strong> ADL3 / EDL3 </strong>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <strong> ACL </strong>
	  </td>
	  </tr>
	  </thead>
	  </table>
	  </div>
	</div>
	<div class="sec">
	  <div class = "articlecontent">
	  <p class = "MsoNormal"> MoTeC tiene una serie de soluciones de registro de datos para satisfacer las necesidades de una amplia gama de usuarios. Esta es una guía para ayudarle a elegir el sistema más adecuado para su aplicación. Le recomendamos que analice sus requisitos en detalle con un distribuidor autorizado MoTeC antes de hacer una compra, ya que el distribuidor será capaz de ofrecerle el mejor asesoramiento con el fin de tomar la decisión correcta. </p>
	  <h1 class = "bglightgrey">
	  ¿Qué necesito?
	  <br>
	  </h1>
	  Requisitos <h2> Tala </h2>
	  <ul>
	  <li>
	  El
	  <strong> número de entradas </strong>
	  lo que necesita es determinado por el número de parámetros de motor y chasis que desea medir. Cada sensor utilizado para medir un parámetro en particular requiere características de entrada específicos. Por ejemplo, los sensores de velocidad de las ruedas necesitan una entrada digital de la velocidad, mientras que las mediciones de temperatura necesitan entradas de temperatura analógicos.
	  </li>
	  <li>
	  la apropiada
	  <strong> Velocidad de registro </strong>
	  de cualquier parámetro depende de su tasa de cambio. Por ejemplo, la temperatura del motor no necesita estar conectado a la misma velocidad como la posición de la compuerta. La elección de la velocidad de la tala derecha permite un uso óptimo de la memoria disponible.
	  <br>
	  </li>
	  <li>
	  <p class = "MsoNormal">
	  <strong> Resolución de Registro </strong>
	  es otra consideración importante. Insumos de mayor resolución ofrecen datos más detallados, por lo que requieren más memoria de registro.
	  </p>
	  </li>
	  <li>
	  El
	  <strong> tiempo de registro </strong>
	  tiene que adaptarse a su modo de carrera o prueba, por ejemplo, una carrera completa, una vuelta, una carrera o un escenario.
	  <br>
	  </li>
	  </ul>
	  <p class = "MsoNormal">
	  El número de sensores, la velocidad y la resolución de la tala, y el tiempo de registro le ayudará a determinar su requerido
	  <strong> de la memoria de registro </strong>
	  .
	  </p>
	  <h1 class = "bglightgrey">
	  ¿Qué quiero?
	  <br>
	  </h1>
	  <h2>
	  <strong> Mostrar Requisitos </strong>
	  </h2>
	  <ul>
	  <li>
	  <li> Stand-alone dispositivos se conectan a pantallas digitales y otros módulos externos. Esto permite más libertad en la elección de la pantalla y el posicionamiento del registrador. </li>
	  Opciones <li> Color o monocromo de pantalla disponibles. </li>
	  <li>
	  MoTeC de
	  Display Creador
	  software permite una personalización completa de pantallas de color, incluyendo los gráficos personalizados, importación de imágenes y etiquetas no estén en inglés. (Color de visualización madereros solamente)
	  <br>
	  </li>
	  </ul>
	  <h2>
	  <strong> Salidas </strong>
	  </h2>
	  <p class = "MsoNormal"> Los madereros Dash MoTeC ofrecen un control auxiliar de dispositivos externos, tales como las luces de cambio, avisos luminosos, bombas y ventiladores diff termo. El número de salidas disponibles varía según el modelo y se puede ampliar usando las actualizaciones opcionales y de ampliación. </P>
	  <h2>
	  <strong> Comunicación </strong>
	  </h2>
	  <ul>
	  <li>
	  Los registradores de datos se comunican con otros dispositivos electrónicos en el vehículo a través de cualquiera
	  <acronym title = "estándar recomendado 232, protocolo de comunicación"> RS232 </acronym>
	  o
	  <acronym title = "Controller Area Network - protocolo de comunicación"> CAN </acronym>
	  .
	  </li>
	  <li> Para descargar los datos registrados a un PC, Leñadores Dash de MoTeC utilizan una conexión Ethernet, que ofrece una velocidad de descarga rápida. </li>
	  </ul>
	  <h2>
	  <strong> Telemetría </strong>
	  </h2>
	  <p>
	  La actualización de telemetría permite la transmisión de datos en tiempo real del vehículo a la fosa donde se puede ver en tiempo real. Para convertir los datos de telemetría en un archivo de registro para el análisis con
	  <strong>
	  <em> i2 </em>
	  </strong>
	  software, es necesaria la actualización de registro remoto. El
	  <acronym title = "Logger Dash Advanced - tercera generación"> ADL3 </acronym>
	  y
	  <acronym title = "Advanced central Logger"> ACL </acronym>
	  ofrecer estas opciones.
	  </p>
	  <h2>
	  <strong> Usos futuras </strong>
	  </h2>
	  <p>
	  Vale la pena considerar sus futuras necesidades de adquisición de datos y examinar las opciones disponibles para hacer crecer el sistema. El ADL3 se puede actualizar con memoria de registro extra y entradas adicionales y salidas. También se puede integrar con la
	  <title = "Módulo de entrada Versátil" acronym> VIM </acronym>
	  ,
	  <acronym title = "Input / Output Expander"> E888 </acronym>
	  o
	  <acronym title = "Input / Output Expander"> E816 </acronym>
	  expansores de entrada / salida. El LCA es aún más flexible con numerosas opciones de expansión incluyendo hasta 8 VIM, proporcionando 200 entradas.
	  </p>
	  <h1 class = "bglightgrey">
	  Ejemplos
	  <br>
	  </h1>
	  <blockquote>
	  <h3>
	  <strong> Sistema Básico </strong>
	  </h3>
	  <p class = "MsoNormal"> </p>
	  <p class = "MsoNormal"> En una configuración típica de un Fórmula Ford es posible que desee iniciar la siguiente: </p>
	  <ul>
	  <ul>
	  <li> 1 x Ground velocidad a 20 Hz </li>
	  <li> 2 x Presiones (combustible y aceite) a 20 Hz </li>
	  <li>
	  1 x temperatura del motor a 1 Hz
	  <br>
	  </li>
	  <li> 1 x Beacon a 1 Hz </li>
	  <li> 2 x fuerzas G a 20 Hz </li>
	  <li>
	  1 x Motor
	  <acronym title = "Revolutions Per Minute"> RPM </acronym>
	  a 20 Hz
	  </li>
	  <li> 1 x de posición del acelerador a 20 Hz </li>
	  </ul>
	  </ul>
	  <p class = "MsoNormal"> El sistema necesita un mínimo de 9 entradas de diferentes tipos, y tiene que ser capaz de tala a entre 1 y 20 Hz. </p>
	  </blockquote>
	  <blockquote>
	  <p class = "MsoNormal">
	  Una carrera típica duración de 30 minutos, requeriría una capacidad de memoria de aproximadamente 0,5 MB.
	  <br>
	  <br>
	  En la tabla de comparación se puede encontrar que la
	  <acronym title = "Sport Dash Logger - nueva generación"> SDL3 </acronym>
	  Dash Deporte Logger encajaría esta aplicación.
	  </p>
	  <h3>
	  <strong> Más Sistema Integral </strong>
	  </h3>
	  <p class = "MsoNormal"> </p>
	  <p class = "MsoNormal">
	  Una configuración típica para el registro de un V8 Supercar podría ser:
	  <br>
	  </p>
	  <ul>
	  <ul>
	  <li> 4 x Posición de suspensión a 200 Hz </li>
	  <li> 4 x temperaturas de freno a 10 Hz </li>
	  <li> 4 x temperaturas de neumáticos a 5 Hz </li>
	  <li> 1 x Temperatura del aceite en 1 Hz </li>
	  <li> 4 x presiones de los neumáticos a 10 Hz </li>
	  <li> Plus todo el registro básico como en el ejemplo anterior </li>
	  </ul>
	  </ul>
	  <p class = "MsoNormal"> Este sistema necesita un mínimo de 26 entradas y tiene que ser capaz de registrar a 200 Hz. </p>
	  <p class = "MsoNormal"> Con esta configuración una ADL3 con una capacidad de memoria de 16 MB permitan un tiempo de registro de aproximadamente 2 horas, mientras que el GB de memoria de la ACL 1 sería suficiente para una carrera de resistencia. </p>
	  </blockquote>
	  <blockquote> </blockquote>
	  </div>
	</div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
var item2 = document.getElements('.tabItem');
item2.addEvent('click', function() {
   item2.removeClass('active');
   this.addClass('active');
});
</script>