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
 
 
  });
</script>
<div id="lap-timing">
  <h3>Tiempo de Vuelta</h3>
  <div class="slider">
    <div class="tabs">
      <div id="1" class="first-child tabItem active">Vista General</div> 
      <div id="2" class="tabItem">BTX Transmisor</div>  
      <div id="3" class="tabItem">Recibidor BR2</div>
    </div>
    <div class="mask">
      <div id="float">
	<div class="sec">
	  <div class = "articlecontent">
	  <h1>
	  GPS Lap Timing
	  <br>
	  </h1>
	  <p> En las carreras de circuito en la actualidad una unidad de GPS puede ser una alternativa rentable para el sistema de medición de vueltas tradicional. La posición de la línea de largada / llegada puede ser marcado por un pulsador accionado por el conductor al traspasar la línea o introduciendo las coordenadas directamente en el sistema de adquisición de datos. Esta posición puede entonces ser usado por el registrador o en la pantalla como un faro para calcular el tiempo de vuelta y por el software de análisis de datos para indicar el inicio de cada vuelta. </P>
	  <h1>
	  Tradicional Sistema Lap Timing
	  <br>
	  </h1>
	  <p>
	  Sistema de medición de vueltas de MoTeC consiste en uno o más transmisores Beacon (
	  BTX
	  ) Montado al lado de la pista y un receptor de baliza (
	  BR2
	  ) Montado en el vehículo. El receptor de baliza está conectado a una pantalla MoTeC, registrador de datos o
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  .
	  </p>
	  <p class = "MsoNormal"> La vuelta de temporización del sistema marca el inicio y final de cada vuelta con el fin de registrar y los tiempos de vuelta de visualización y número de vueltas. Si varios transmisores Beacon están montados alrededor de la pista también puede generar tiempos parciales. Esta información puede ser utilizada por el sistema de datos para los cálculos, como la vuelta de ganancia / pérdida, donde los tiempos de vuelta y tiempos parciales actuales se comparan con una vuelta de referencia. Esto puede indicar al conductor si son más rápido o más lento que antes. </P>
	  <p>
	  <img alt = "cronometraje" src="./img/productos/lap-timing.jpg.jpg"/>
	  </p>
	  <h2>
	  Código Sistema de Numeración
	  <br>
	  </h2>
	  <p>
	  Cada transmisor de baliza está configurado para un número de código particular, por un conjunto de 3 interruptores rotativos internos. El
	  <acronym title = "Receptor Beacon"> BR2 </acronym>
	  recibe toda
	  <acronym title = "Transmisor Beacon"> BTX </acronym>
	  señales y las envía sobre
	  <acronym title = "Controller Area Network - protocolo de comunicación"> CAN </acronym>
	  al registrador de datos, que está programado entonces para buscar un número en particular como su faro faro principal o 'vuelta'. Otros IDs de balizas pueden ser ignorados o utilizados como balizas divididas dependiendo de la configuración. Esto permite el uso de múltiples transmisores en una pista sin interferencia (si cada equipo tiene un BTX).
	  </p>
	  <p> El receptor de baliza sólo recogerá el transmisor Beacon con el número de código correspondiente e ignorará todos los otros transmisores. Tesis números de código son programables, lo que permite un transmisor que se creará como un faro principal para todos los clientes MoTeC en una reunión determinada raza. </P>
	  </div>
	</div>
	<div class="sec">
	  <div class = "articlecontent">
	  <img src="./img/productos/lap-timing.jpg"/>
	  <p>
	  El transmisor de Beacon (
	  <acronym title = "Transmisor Beacon"> BTX </acronym>
	  ) Es el montado en tierra parte del sistema de medición de vueltas.
	  </p>
	  <h3> Montaje de la BTX </h3>
	  <p> El haz de luz infrarroja emitida por el estrecho BTX debe estar orientado paralelo a la carretera y a la misma altura por encima de la carretera como el receptor en el vehículo. Por consiguiente, el sistema de montaje del transmisor debe ser capaz de ajuste de altura y de inclinación. </P>
	  <p> El espaciamiento entre transmisores adyacentes debe ser como mínimo de 6 metros. </p>
	  <h2>
	  Compatible con
	  <br>
	  </h2>
	  <ul>
	  <li> BR2 </li>
	  </ul>
	  <h1 class = "bglightgrey">
	  <h2> Salida </h2>
	  <ul>
	  <li> haz infrarrojo codificado </li>
	  <ul>
	  <li>
	  Alcance de hasta 40 metros (130 pies) cuando se utiliza con
	  <acronym title = "Receptor Beacon"> BR2 </acronym>
	  <br>
	  </li>
	  </ul>
	  </ul>
	  <ul>
	  <li> Indicador de estado </li>
	  <ul>
	  <li> LED en tres colores que indican: </li>
	  <ul>
	  <ul>
	  <ul>
	  <ul>
	  <ul>
	  <ul>
	  <ul>
	  <ul>
	  <ul>
	  <ul>
	  <li> Potencia OK </li>
	  <li> Batería baja </li>
	  <li> Culpa o batería muy bajo </li>
	  </ul>
	  </ul>
	  </ul>
	  </ul>
	  </ul>
	  </ul>
	  </ul>
	  </ul>
	  </ul>
	  </ul>
	  </ul>
	  </ul>
	  <h2> Alimentación </h2>
	  <ul>
	  <li>
	  Externa a través de una batería recargable de 12 voltios (10 Capacidad Ahr recomendado)
	  <br>
	  </li>
	  <li> Consumo de energía 70 mA típico </li>
	  </ul>
	  <h2> Física </h2>
	  <ul>
	  <li> Tamaño de la caja 90 x 80 x 115 mm </li>
	  <li>
	  Peso 260 gramos
	  <br>
	  </li>
	  </ul>
	  </div>
	  <h1>Descargas</h1>
	  <div class = "documentgroup">
	  <h2> Producto </h2>
	  <table class = "category43">
	  <caption> Manuales </caption>
	  <thead>
	  <tr>
	  <td> Archivo </td>
	  <td> Tamaño </td>
	  <td> Última actualización </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td class = "description">
	  <a class="fileicon pdf" href="http://www.motec.com/filedownload.php/BR2_Manual_A5.pdf?docid=1083" title="Download: BR2_Manual_A5.pdf">
	  BR2
	  <acronym title = "Transmisor Beacon"> BTX </acronym>
	  Manual del usuario
	  </a>
	  </td>
	  <td class = "tamaño"> 239 KB </td>
	  <td class = "LastUpdated"> 30 de junio 2004 10:06 </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>	
	</div>
	<div class="sec">
	  <img src="./img/productos/br2.jpg"/>
	  <div class = "articlecontent">
	  <p>
	  El receptor de baliza (
	  <acronym title = "Receptor Beacon"> BR2 </acronym>
	  ) Es la parte del sistema de medición de vueltas que se coloca en el vehículo. Dependiendo de los otros componentes en la aplicación, el receptor se puede conectar mediante una salida conmutada o una
	  <acronym title = "Controller Area Network - protocolo de comunicación"> CAN </acronym>
	  autobús y debe ajustarse en consecuencia.
	  </p>
	  <h3> Montaje de los BR2 </h3>
	  <p>
	  El BR2 debe instalarse de modo que el haz de infrarrojos golpea la ventana del receptor en un ángulo recto cuando el coche pasa el transmisor.
	  <br>
	  </p>
	  <p> Si no hay obstáculos entre el transmisor y el receptor, la gama de sistema de medición de vueltas de MoTeC es de hasta 40 metros. El receptor debe colocarse cuidadosamente en el vehículo para evitar que las luces de cruce a través del cristal tintado o acrílico, que puede reducir sustancialmente la gama. </P>
	  <h2>
	  Compatible con
	  <br>
	  </h2>
	  <ul>
	  <li>
	  <p> SDL3 </p>
	  </li>
	  <li>
	  <p> ADL3 </p>
	  </li>
	  <li>
	  <p> ACL </p>
	  </li>
	  <li>
	  <p> MDD </p>
	  </li>
	  <li>
	  <p>
	  M400 /
	  <acronym title = "ecus para los modernos motores con hasta 6 cilindros o un máximo de 3 rotores"> M600 </acronym>
	  /
	  <acronym title = "ecus para los motores modernos con hasta 12 cilindros o hasta 4 rotores"> M800 </acronym>
	  /
	  <acronym title = "ecus para los motores modernos con hasta 12 cilindros o hasta 4 rotores"> M880 </acronym>
	  </p>
	  </li>
	  </ul>
	  <h1 class = "bglightgrey">
	  Especificaciones
	  <br>
	  </h1>
	  <h2> Salidas </h2>
	  <ul>
	  <li> indicando LED </li>
	  <ul>
	  <li> Encendido </li>
	  <li> señal de baliza recibida </li>
	  <li> Códigos de error </li>
	  </ul>
	  <li>
	  Salida digital para información de baliza (alternativa a la salida de la CAN)
	  <br>
	  </li>
	  </ul>
	  <h2> Comunicaciones </h2>
	  <ul>
	  <li> CAN bus utilizado para </li>
	  <ul>
	  <li> comunicar información beacon </li>
	  <li> comunicar información de diagnóstico </li>
	  <li> configurar el receptor a través del software de configuración BR2 </li>
	  </ul>
	  </ul>
	  <h2> Física </h2>
	  <ul>
	  conector <li> 5 pin Autosport </li>
	  <li>
	  Dimensiones de la caja 75 x 36,5 x 25 mm
	  <br>
	  </li>
	  </ul>
	  <h1>Descargas</h1>
	  <div class = "documentgroup">
	  <h2> Producto </h2>
	  <table class = "category43">
	  <caption> Manuales </caption>
	  <thead>
	  <tr>
	  <td> Archivo </td>
	  <td> Tamaño </td>
	  <td> Última actualización </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td class = "description">
	  <a class="fileicon pdf" href="http://www.motec.com/filedownload.php/BR2_Manual_A5.pdf?docid=1083" title="Download: BR2_Manual_A5.pdf">BR2 BTX Manual de Usuario</a>
	  </td>
	  <td class = "tamaño"> 239 KB </td>
	  <td class = "LastUpdated"> 30 de junio 2004 10:06 </td>
	  </tr>
	  </tbody>
	  </table>
	  <table class = "category67">
	  <caption> Tech Info> Hojas de datos> Lap Timing </caption>
	  <thead>
	  <tr>
	  <td> Archivo </td>
	  <td> Tamaño </td>
	  <td> Última actualización </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td class = "description">
	  <a class="fileicon pdf" href="http://www.motec.com/filedownload.php/A05-2.pdf?docid=2466" title="Download: A05-2.pdf"> Receptor Beacon BR2 A05-2 # 15512 </a>
	  </td>
	  <td class = "tamaño"> 28 KB </td>
	  <td class = "LastUpdated"> 06 de mayo 2008 12:09 </td>
	  </tr>
	  </tbody>
	  </table>
	  <table class = "category72">
	  <caption> Tech informativos> Hojas de datos> Cableado Telares </caption>
	  <thead>
	  <tr>
	  <td> Archivo </td>
	  <td> Tamaño </td>
	  <td> Última actualización </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td class = "description">
	  <a class="fileicon pdf" href="http://www.motec.com/filedownload.php/a15.pdf?docid=1205" title="Download: a15.pdf"> BR2 Loom Kit A15 # 61047 </a>
	  </td>
	  <td class = "tamaño"> 22 KB </td>
	  <td class = "LastUpdated"> 05 de julio 2004 09:36 </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>
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