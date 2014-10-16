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
<div id="gps-units">
  <h3>Unidades GPS</h3>
  <div class="slider">
    <div class="tabs">
      <div id="1" class="first-child tabItem active">Vista General y Modelos</div> 
      <div id="2" class="tabItem">GPS-L5</div>  
      <div id="3" class="tabItem">GPS-L10</div>
    </div>
    <div class="mask">
      <div id="float">
	<div class="sec">
	  <div class = "articlecontent">
	  <p>
	  Sistema de Posicionamiento Global (
	  <acronym title = "Sistema de Posición Global"> GPS </acronym>
	  ) Unidades proporcionan información de velocidad y posición, así como estadísticas de altitud, rumbo, fecha, hora y GPS. Para obtener resultados óptimos MoTeC recomienda encarecidamente dispositivos GPS de montaje de techo en lugar de montar el tablero.
	  <br>
	  </p>
	  <h2> velocidad </h2>
	  <p class = "MsoNormal"> La información de la velocidad se puede utilizar para fines de presentación y registro, eliminando la necesidad de sensores de velocidad de las ruedas. Esto es particularmente útil para los corredores del barco ya que no tienen velocidad de la rueda disponible; GPS se está abriendo un nuevo mundo de oportunidades para los deportes de datos marinos. </P>
	  <h2> Posición </h2>
	  <p class = "MsoNormal">
	  Información de posición GPS puede ser utilizado en MoTeC de
	  <strong>
	  <em> i2 </em>
	  </strong>
	  software de análisis de datos para mostrar y comparar las líneas impulsadas y crear mapas de pista. Las líneas impulsadas también se pueden trazar una imagen de Google Earth más, permitiendo que los corredores de circuitos y pilotos de rally para ver el camino recorrido en un contexto de vida real.
	  </p>
	  <h2> Tiempo de vuelta </h2>
	  <p>
	  En las carreras de circuito, una unidad de GPS puede ser una alternativa rentable para el sistema de medición de vueltas tradicional. La posición de la línea de largada / llegada puede ser marcado por un pulsador accionado por el conductor al traspasar la línea o introduciendo las coordenadas directamente en el sistema de adquisición de datos. Esta posición puede entonces ser usado por el registrador o en la pantalla como un faro para calcular el tiempo de vuelta y por el software de análisis de datos para indicar el inicio de cada vuelta.
	  <br>
	  <h1 style="margin-bottom:15px;">Modelos</h1>
	  <p>
	  suministros MoTeC
	  <acronym title = "Sistema de Posición Global"> GPS </acronym>
	  unidades que son adecuados para la alta dinámica de las aplicaciones automovilísticas. Las unidades están equipadas con conectores compatibles MoTeC y pre-configurados para adaptarse particular dispositivos MoTeC.
	  </p>
	  <h2>
	  <a href="/gpsl5/" title="GPS-L5"> GPS-L5 </a>
	  </h2>
	  <p class = "MsoNormal">
	  El GPS-L5 es una unidad receptora 5 Hz con una antena integrada, pre-configurado para su uso con MoTeC 'Series Hundred' y M84
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  s.
	  <br>
	  </p>
	  <h2>
	  <a href="/gpsl10/" title="GPS-L10"> GPS-L10 </a>
	  </h2>
	  <p> El GPS-L10 es una unidad de recepción 10 Hz con una antena integrada, pre-configurado para su uso con Dash MoTeC / registradores de datos. No es compatible con los ECUs MoTeC. </P> 
	  </p>
	  </div>
	</div>
	<div class="sec">
	  <img src="./img/productos/gps-l5.jpg"/>
	  <div class = "articlecontent">
	  <p class = "MsoNormal">
	  El
	  <acronym title = "Sistema de Posición Global"> GPS </acronym>
	  -L5 Es un GPS de 5 Hz, que combina la electrónica y de la antena en una unidad pequeña. Un receptor de alta sensibilidad permite que los GPS para bloquear a las señales, incluso en entornos difíciles. Está equipado con un conector DTM y está pre-configurado para ser compatible con MoTeC 'Cien Series' y M84
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  s.
	  <em> (Véase también el GPS-L10) </em>
	  <br>
	  </p>
	  <p class = "MsoNormal"> Esta unidad es adecuada para la velocidad, posición y tiempo por fase. </p>
	  <h2> Compatible con </h2>
	  <ul>
	  <li>
	  MoTeC 'Series Hundred'
	  ECUs
	  -
	  <acronym title = "ecus para los motores modernos con un máximo de 4 cilindros o un máximo de 2 rotores"> M400 </acronym>
	  ,
	  <acronym title = "ecus para los modernos motores con hasta 6 cilindros o un máximo de 3 rotores"> M600 </acronym>
	  ,
	  <acronym title = "ecus para los motores modernos con hasta 12 cilindros o hasta 4 rotores"> M800 </acronym>
	  ,
	  <acronym title = "ecus para los motores modernos con hasta 12 cilindros o hasta 4 rotores"> M880 </acronym>
	  (v3.51U2 en adelante)
	  <br>
	  </li>
	  <li>
	  MoTeC
	  M84
	  ECU (v1.10K2 en adelante)
	  <br>
	  </li>
	  <li> MoTeC ACL </li>
	  <li>
	  MoTeC
	  ADL3
	  ,
	  <acronym title = "Logger Dash Advanced - segunda generación"> ADL2 </acronym>
	  (no compatible con las AVD originales)
	  </li>
	  <li>
	  MoTeC
	  SDL3
	  ,
	  <acronym title = "Sport Dash Logger"> SDL </acronym>
	  <br>
	  </li>
	  </ul>
	  <h1 class = "bglightgrey">
	  Especificaciones
	  <br>
	  </h1>
	  <h2> Rendimiento </h2>
	  <ul>
	  <li>
	  <p> Velocidad de actualización 5 Hz </p>
	  </li>
	  <li>
	  <p> 66 canales vía satélite </p>
	  </li>
	  <li>
	  <p> Dinámica 4 G </p>
	  </li>
	  <li>
	  <p> Tensión de alimentación 4,0 - 6,0 V </p>
	  </li>
	  </ul>
	  <h2> Comunicaciones </h2>
	  <ul>
	  <li> RS232 </li>
	  <li>
	  Velocidad de transmisión: 19200
	  <br>
	  </li>
	  </ul>
	  <h2> Física </h2>
	  <ul>
	  <li>
	  <p>
	  Dimensiones de la caja 48 mm x 41 mm x 14 mm
	  <br>
	  </p>
	  </li>
	  <li>
	  <p> Peso 106 g </p>
	  </li>
	  <li>
	  <p> 1 x 4 pin Deutsch DTM, 3 m cable aéreo </p>
	  </li>
	  <li>
	  <p> Construido en antena </p>
	  </li>
	  <li> Montaje - base magnética </li>
	  </ul>
	  <h1> WEBINARS </h1>
	  <p>
	  09 de junio 2011:
	  . <a href = "http://motec.adobeconnect.com/p8y8zlyc497/" rel = título "externa" = "Cómo configurar, registrar y ver los datos GPS cuando está conectado a sólo una ECU (sin Dash) Los temas incluyen: ¿Por qué utilizar un GPS * Cableado * Configurar ECU * Canales ECU GPS * Usos en vivo * Creación Balizas * Creación Vueltas * Google Earth "target =" _blank "> inteligentes Cosas que puedes hacer con una centralita y un </a> GPS
	  </p>
	  <h1 style="margin-bottom:10px;">Modelos</h1>
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
	  <a class="fileicon pdf" href="http://www.motec.com/filedownload.php/GPS-L5L10%20Manual%2031Aug2011.pdf?docid=3941" title="Download: GPS-L5L10 Manual 31Aug2011.pdf">
	  GPS-L5 y
	  <acronym title = "Sistema de Posición Global"> GPS </acronym>
	  Manual del usuario -l10
	  </a>
	  </td>
	  <td class = "tamaño"> 1 MB </td>
	  <td class = "LastUpdated"> 31 de agosto 2011 18:40 </td>
	  </tr>
	  </tbody>
	  </table>
	  <table class = "category70">
	  <caption> Tech informativos> Hojas de datos> GPS </caption>
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
	  <a class="fileicon pdf" href="http://www.motec.com/filedownload.php/CDS41305%20GPS-L5.pdf?docid=3940" title="Download: CDS41305 GPS-L5.pdf"> CDS41305 GPS-L5 </a>
	  </td>
	  <td class = "tamaño"> 67 KB </td>
	  <td class = "LastUpdated"> 31 de agosto 2011 18:37 </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>
	  </div>	  
	</div>
	<div class="sec">
	  <img src="./img/productos/gps-l10.jpg"/>
	  <div class = "articlecontent">
	  <p class = "MsoNormal">
	  El
	  <acronym title = "Sistema de Posición Global"> GPS </acronym>
	  -l10 Es un GPS de 10 Hz, que combina la electrónica y de la antena en una unidad pequeña. Un receptor de alta sensibilidad permite que los GPS para bloquear a las señales, incluso en entornos difíciles. Está equipado con un conector DTM y está pre-configurado para ser compatible con Dash MoTeC / registradores de datos. No es compatible con MoTeC
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  s.
	  </p>
	  <p class = "MsoNormal"> Esta unidad es adecuada para la velocidad, posición y tiempo por fase. </p>
	  <h2> Compatible con </h2>
	  <ul>
	  <li> MoTeC ACL </li>
	  <li>
	  MoTeC
	  ADL3
	  ,
	  <acronym title = "Logger Dash Advanced - segunda generación"> ADL2 </acronym>
	  (no compatible con las AVD originales)
	  </li>
	  <li>
	  MoTeC
	  SDL3
	  ,
	  <acronym title = "Sport Dash Logger"> SDL </acronym>
	  <br>
	  </li>
	  </ul>
	  <h1 class = "bglightgrey">
	  Especificaciones
	  <br>
	  </h1>
	  <h2> Rendimiento </h2>
	  <ul>
	  <li>
	  <p> La velocidad de actualización de 10 Hz </p>
	  </li>
	  <li>
	  <p> 66 canales vía satélite </p>
	  </li>
	  <li>
	  <p> Dinámica 4 G </p>
	  </li>
	  <li>
	  <p> Tensión de alimentación 4,0 - 6,0 V </p>
	  </li>
	  </ul>
	  <h2> Comunicaciones </h2>
	  <ul>
	  <li> RS232 </li>
	  <li>
	  Velocidad de transmisión: 38400
	  <br>
	  </li>
	  </ul>
	  <h2> Física </h2>
	  <ul>
	  <li>
	  <p>
	  Dimensiones de la caja 48 mm x 41 mm x 14 mm
	  <br>
	  </p>
	  </li>
	  <li>
	  <p> Peso 106 g </p>
	  </li>
	  <li>
	  <p> 1 x 4 pin Deutsch DTM, 3 m cable aéreo </p>
	  </li>
	  <li>
	  <p> Construido en antena </p>
	  </li>
	  <li> Montaje - base magnética </li>
	  </ul>
	  <h1 style="margin-bottom:10px">Descargas</h1>
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
	  <a class="fileicon pdf" href="http://www.motec.com/filedownload.php/GPS-L5L10%20Manual%2031Aug2011.pdf?docid=3941" title="Download: GPS-L5L10 Manual 31Aug2011.pdf">
	  GPS-L5 y
	  <acronym title = "Sistema de Posición Global"> GPS </acronym>
	  Manual del usuario -l10
	  </a>
	  </td>
	  <td class = "tamaño"> 1 MB </td>
	  <td class = "LastUpdated"> 31 de agosto 2011 18:40 </td>
	  </tr>
	  </tbody>
	  </table>
	  <table class = "category70">
	  <caption> Tech informativos> Hojas de datos> GPS </caption>
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
	  <a class="fileicon pdf" href="http://www.motec.com/filedownload.php/CDS41304%20GPS-L10.pdf?docid=3939" title="Download: CDS41304 GPS-L10.pdf"> CDS41304 GPS-L10 </a>
	  </td>
	  <td class = "tamaño"> 66 KB </td>
	  <td class = "LastUpdated"> 31 de agosto 2011 18:37 </td>
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