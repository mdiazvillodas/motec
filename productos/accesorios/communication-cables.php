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

  $('5').addEvent('click', function(){
 slider.start('left','-2320px');
 });
  
 $('6').addEvent('click', function(){
 slider.start('left','-2900px');
 });

  
 
 
  });
</script>
<div id="communication-cables">
  <h3>Cables de Comunicación</h3>
  <div class="slider">
    <div class="tabs">
      <div id="1" class="first-child tabItem active">Acerca de</div> 
      <div id="2" class="tabItem">Nivel Lógico de Serie</div>  
      <div id="3" class="tabItem">Serie RS232</div>
      <div id="4" class="tabItem">CAN</div>
      <div id="5" class="tabItem">USB</div>
      <div id="6" class="tabItem">Ethernet</div>
    </div>
    <div class="mask">
      <div id="float">
	<div class="sec">
	  <div class = "articlecontent">
	  <p> La mayoría de los dispositivos MoTeC necesitan estar conectados a un PC o portátil para configurar el dispositivo o para descargar datos desde el dispositivo. </p>
	  <p> Para encontrar el hardware de conexión necesario, busque el dispositivo que necesita ser conectado en la siguiente tabla y el correspondiente dispositivo MoTeC puerto. </p>
	  <p> El método de conexión preferido determinará el puerto de la PC para conectarse y el hardware necesario para hacerlo. Si este puerto PC preferido no está disponible, puede haber un método de conexión alternativo. </P>
	  <p>
	  <table>
	  <thead>
	  <tr class = "bgblue">
	  <td colspan = "9">
	  <p>
	  <strong> Para obtener información detallada sobre el hardware de conexión, haga clic en Device MoTeC Tipo de puerto </strong>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr class = "bglightgrey">
	  <td class = "bgdarkgrey">
	  <p>
	  <strong>
	  Puerto de dispositivo MoTeC
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td colspan = "2">
	  <p>
	  <strong> Serial Nivel lógico </strong>
	  </p>
	  </td>
	  <td colspan = "2">
	  <p>
	  <strong>
	  Serial
	  <acronym title = "estándar recomendado 232, protocolo de comunicación"> RS232 </acronym>
	  </strong>
	  </p>
	  </td>
	  <td colspan = "2">
	  <p>
	  <strong> CAN </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> USB </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> Ethernet </strong>
	  </p>
	  <strong> </strong>
	  </td>
	  </tr>
	  <tr class = "bglightgrey">
	  <td class = "bgdarkgrey">
	  <p>
	  <strong>
	  Puerto PC
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> Serie </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong>
	  USB
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> Serie </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong>
	  USB
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong>
	  paralelo
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong>
	  USB
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong>
	  USB
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> Ethernet </strong>
	  </p>
	  </td>
	  </tr>
	  <tr class = "bglightgrey">
	  <td class = "bgdarkgrey">
	  <p>
	  <strong>
	  Conexión
	  <br>
	  </strong>
	  <strong> Hardware </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong>
	  PCI o
	  <acronym title = "Módulo de interfaz de PC"> CIM </acronym>
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> PCI o CIM + USB a Serial </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> Serial Cable </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> Cable Serial + USB a Serial </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> CAN Cable </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> FAQ </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong>
	  cable USB
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong>
	  cable Ethernet
	  <br>
	  </strong>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightblue" = "9">
	  <p>
	  <strong> ECU </strong>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong> M4 </strong>
	  <br>
	  números de serie <3,000
	  </p>
	  <p>
	  <strong> M48, M8 </strong>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p class = "resaltado">
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <img src="./img/productos/1314317237_star2.jpg" alt = "mesa de estrella">
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong> M4 </strong>
	  <br>
	  números de serie> 3000
	  </p>
	  <p>
	  <strong>
	  M2R,
	  <acronym title = "dedicada a ejecutar Chevrolet LS1 y Lexus / Toyota V8 ECU"> MLS </acronym>
	  </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td class = "centeralign">
	  <p class = "resaltado">
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <img src="./img/productos/1314317237_star2.jpg" alt = "mesa de estrella">
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong>
	  M84,
	  <acronym title = "ecus para los motores modernos con un máximo de 4 cilindros o un máximo de 2 rotores"> M400 </acronym>
	  ,
	  <acronym title = "ecus para los modernos motores con hasta 6 cilindros o un máximo de 3 rotores"> M600 </acronym>
	  ,
	  <br>
	  </strong>
	  <strong>
	  <acronym title = "ecus para los motores modernos con hasta 12 cilindros o hasta 4 rotores"> M800 </acronym>
	  ,
	  <acronym title = "ecus para los motores modernos con hasta 12 cilindros o hasta 4 rotores"> M880 </acronym>
	  , Plug-ins
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td class = "centeralign">
	  <p>
	  <img src="./img/productos/1314317237_star2.jpg" alt = "mesa de estrella">
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg & w = 11 & h = 9">
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong> M1 </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightblue" = "9">
	  <p>
	  <strong> Pantalla y registro </strong>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong> C125 </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong> CDL3 </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong> SDL3 </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong> SDL </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td class = "centeralign">
	  <p>
	  <strong>
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td class = "centeralign">
	  <p>
	  s
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  s
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  <td> </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong> ADL3, EDL3 </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong>
	  ADL2, EDL2
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td class = "centeralign">
	  <p> s </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  s
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p> s </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  s
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  <td> </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong>
	  ADL, EDL
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td class = "centeralign">
	  <p>
	  s
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  s
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <img src="./img/productos/1314317237_star2.jpg" alt = "mesa de estrella">
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong> ACL </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td class = "centeralign">
	  <br>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = colspan "bglightblue" = "9">
	  <p>
	  <strong> Otros Productos </strong>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong> PLM </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td class = "centeralign">
	  <p>
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <img src="./img/productos/1314317237_star2.jpg" alt = "mesa de estrella">
	  </p>
	  </td>
	  <td class = "centeralign">
	  <br>
	  </td>
	  <td class = "centeralign">
	  <br>
	  </td>
	  <td> </td>
	  <td> </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong>
	  LTC,
	  <acronym title = "Lambda a CAN dual"> LTCD </acronym>
	  </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td>
	  <p class = "centeralign">
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong>
	  BR2,
	  <acronym title = "expansor Drive By Wire"> DBW4 </acronym>
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td class = "centeralign">
	  <p>
	  <img src="./img/productos/1314317237_star2.jpg" alt = "mesa de estrella">
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong>
	  MDC, MDC2,
	  <acronym title = "Dif Controller Subaru"> SDC </acronym>
	  , SDC2, SDC3
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td class = "centeralign">
	  <p>
	  <img src="./img/productos/1314317237_star2.jpg" alt = "mesa de estrella">
	  </p>
	  </td>
	  <td class = "centeralign">
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </td>
	  <td> </td>
	  <td> </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong>
	  PDM16,
	  <acronym title = "Módulo de distribución de alimentación con conectores Autosport y 32 salidas"> PDM32 </acronym>
	  ,
	  <acronym title = "Módulo de distribución de alimentación con conectores a prueba de agua y 15 salidas"> pDM15 </acronym>
	  ,
	  <"Módulo de distribución de alimentación, con conectores a prueba de agua y 30 salidas" acrónimo title => PDM30 </acronym>
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td>
	  <br>
	  </td>
	  <td> </td>
	  <td class = "centeralign">
	  <p>
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  <td> </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <p>
	  <strong>
	  RTC
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  <td class = "centeralign">
	  <p>
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  </tr>
	  <tr>
	  <td class = "bglightgrey">
	  <strong> Telemetría </strong>
	  </td>
	  <td> </td>
	  <td> </td>
	  <td class = "centeralign">
	  <p>
	  <img alt = "marca roja" src="./img/productos/1261389154_red+tick.jpg">
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <img src="./img/productos/1314317237_star2.jpg" alt = "mesa de estrella">
	  </p>
	  </td>
	  <td class = "centeralign"> </td>
	  <td> </td>
	  <td> </td>
	  <td> </td>
	  </tr>
	  </tbody>
	  </table>
	  <table>
	  <tbody>
	  <tr> </tr>
	  </tbody>
	  </table>
	  </div>
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <p> hardware Comunicación y cableado del dispositivo para conectar productos MoTeC con un puerto Nivel lógico de serie a la PC. </p>
	  <p>
	  Con el fin de actualizar el software en el
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  o para introducir una contraseña de actualización de un
	  Actualización de software Unidad
	  (
	  <acronym title = "Unidad de Actualización de Software"> SUU </acronym>
	  ) Se requiere.
	  <br>
	  </p>
	  <h2>
	  Aplica PRODUCTOS MoTeC
	  <br>
	  </h2>
	  <ul>
	  <li>
	  <p> M4 con número de serie inferior a 3000 </p>
	  </li>
	  <li>
	  <p> M48 </p>
	  </li>
	  <li>
	  <p> M8 </p>
	  </li>
	  </ul>
	  <h1 class = "bglightgrey">
	  Conexión PC
	  <br>
	  </h1>
	  <p>
	  MoTeC ofrece soluciones para conectar el dispositivo al puerto USB o puerto serie del PC. El método de conexión más sencilla es a través del puerto serie de la PC, sin embargo, muchos ordenadores modernos no tienen un puerto serie, en este caso utilizan el método de conexión USB.
	  <br>
	  </p>
	  <h2> Conexión al USB de la PC puerto </h2>
	  <p>
	  Crear un puerto serie, utilizando un USB a
	  <acronym title = "estándar recomendado 232, protocolo de comunicación"> RS232 </acronym>
	  adaptador serie. A continuación, siga el método de conexión de un PC con un puerto serie.
	  </p>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td> </td>
	  <td>
	  <strong> Descripción </strong>
	  <br>
	  </td>
	  <td>
	  <strong> Parte No </strong>
	  <br>
	  (ficha técnica)
	  <br>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img src="./img/productos/1088902663_61092-2.jpg" alt = "adaptador de USB a serial">
	  </td>
	  <td>
	  <p> adaptador de USB a serie RS232 </p>
	  </td>
	  <td class = "centeralign"> # 61092 </td>
	  </tr>
	  </tbody>
	  </table>
	  <h2> Conexión al puerto serie del PC </h2>
	  <p>
	  Utilice un cable de interfaz de PC (
	  <acronym title = "cable de interfaz PC"> cable PCI </acronym>
	  ) O un módulo de interfaz de ordenador (
	  <acronym title = "Módulo de interfaz de PC"> CIM </acronym>
	  ).
	  <br>
	  </p>
	  <ul>
	  <li>
	  <strong> cable PCI </strong>
	  <br>
	  <p>
	  El cable PCI contiene la electrónica en el final de ecus del cable para convertir las señales de ECU hasta señales compatibles con el puerto serie del PC
	  <strong> </strong>
	  </p>
	  </li>
	  <li>
	  <strong> módulo CIM </strong>
	  <br>
	  <p> El módulo CIM es normalmente instalado en el vehículo. Esto coloca a la electrónica en el vehículo en lugar de en el cable que tiene la ventaja de proporcionar las señales correctas para conectarse directamente a un guión o registrador de datos, así como proporcionar un punto de conexión para un PC. El módulo CIM se puede cablear para adaptarse a diferentes cables de conexión PC. Normalmente está cableado para satisfacer un cable serie estándar o un cable MoTeC 4 pines. </p>
	  <p> El CIM también está disponible como un kit con todos los cables necesarios para conectar a un PC y la centralita incluyendo un conector D9 intermedia para permitir la conexión de un SUU. </p>
	  </li>
	  </ul>
	  <h3> Haga clic en el número de parte para descargar una hoja de datos si está disponible. </h3>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td> </td>
	  <td>
	  <strong> Descripción </strong>
	  <br>
	  </td>
	  <td>
	  <strong> Parte No </strong>
	  <br>
	  (ficha técnica)
	  <br>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img src="./img/productos/1641904122_63003.jpg" "cable Serial PCI, 2 m" alt =>
	  </td>
	  <td>
	  Cable PCI 2 metros
	  <br>
	  </td>
	  <td class = "centeralign"> # 63003 </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "cable Serial PCI, 6 m" src="./img/productos/1638165682_63004.jpg">
	  </td>
	  <td>
	  <p> cable PCI 6 metros </p>
	  </td>
	  <td class = "centeralign"> # 63004 </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/246119261_61026.jpg" alt = "módulo CIM">
	  </td>
	  <td>
	  <p> Módulo CIM </p>
	  </td>
	  <td class = "centeralign">
	  <a href="http://www.motec.com/filedownload.php/?docid=1199"> # 61026 </a>
	  <br>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "kit CIM" src="./img/productos/113740113_61027.jpg">
	  </td>
	  <td>
	  <p>
	  El kit del módulo CIM consiste en:
	  <br>
	  - Módulo CIM
	  <br>
	  - Cable de coche CIM
	  <br>
	  - Cable CIM PC
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  # 61027
	  <br>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  <h1 class = "bglightgrey">
	  CABLEADO DEL DISPOSITIVO
	  <br>
	  </h1>
	  <h2> Adaptable en PCI Cable </h2>
	  <ul>
	  <li>
	  <p>
	  Para M8, el cable PCI se conecta directamente al conector de la ECU.
	  <br>
	  </p>
	  </li>
	  <li>
	  <p>
	  para el
	  <acronym title = "ECU para motores con un máximo de 4 cilindros o un máximo de 2 rotores"> M4 </acronym>
	  o la
	  <acronym title = "ECU para motores con hasta 8 cilindros y 2 rotores"> M48 </acronym>
	  ECU, un conector de acoplamiento se debe conectar al conector de la ECU para proporcionar un punto de conexión para el cable PCI.
	  </p>
	  </li>
	  </ul>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td> </td>
	  <td>
	  <strong> Descripción </strong>
	  <br>
	  </td>
	  <td>
	  <strong> Parte No </strong>
	  <br>
	  (ficha técnica)
	  <br>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img alt = "D9 a M4 cableado ECU" src="./img/productos/1683746072_61010.jpg">
	  </td>
	  <td>
	  <p>
	    D9 al cableado ECU M4
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p> # 61010 </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "D9 a wiriing M48 ECU" src="./img/productos/285561615_61012.jpg">
	  </td>
	  <td>
	  <p> D9 al cableado ECU M48 </p>
	  </td>
	  <td class = "centeralign">
	  <p> # 61012 </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  <h2> Adaptable en Módulo CIM </h2>
	  <blockquote> </blockquote>
	  <p> El módulo CIM se puede cablear para adaptarse a diferentes cables de conexión PC. Normalmente está cableado para satisfacer un cable serie estándar o un cable MoTeC 4 pines. </p>
	  <blockquote> </blockquote>
	  <p> La CIM se puede conectar directamente a la ECU o puede ser cableado para conectar con el conector normal de D9 como se describe para el cable PCI anteriormente. Este último tiene la ventaja de permitir una actualización de software Unidad (SUU) para ser instalado en el software del ECU necesita una reforma. </p>
	  <h1 class = "bglightgrey">
	  <a name="ssu"> </a>
	  Actualización de software UNIDAD
	  <br>
	  </h1>
	  <p> Con el fin de actualizar el software en el dispositivo, o para introducir una contraseña de actualización de software actualizada Unidad (SUU) es requerido. </p>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td> </td>
	  <td>
	  <strong> Descripción </strong>
	  <br>
	  </td>
	  <td>
	  <strong> Parte No </strong>
	  <br>
	  (ficha técnica)
	  <br>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img alt = "M4 y M48 SUU" src="./img/productos/1108185743_63008.jpg">
	  <br>
	  </td>
	  <td>
	  <p>
	    M4 y M48 SUU
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p> # 63008 </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "M8 SUU" src="./img/productos/2015036709_63009.jpg">
	  </td>
	  <td>
	  <p>
	    M8 SUU
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p> # 63009 </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <p> hardware Comunicación y cableado del dispositivo para conectar productos MoTeC con un puerto Nivel lógico de serie a la PC. </p>
	  <p>
	  Con el fin de actualizar el software en el
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  o para introducir una contraseña de actualización de un
	  Actualización de software Unidad
	  (
	  <acronym title = "Unidad de Actualización de Software"> SUU </acronym>
	  ) Se requiere.
	  <br>
	  </p>
	  <h2>
	  Aplica PRODUCTOS MoTeC
	  <br>
	  </h2>
	  <ul>
	  <li>
	  <p> M4 con número de serie inferior a 3000 </p>
	  </li>
	  <li>
	  <p> M48 </p>
	  </li>
	  <li>
	  <p> M8 </p>
	  </li>
	  </ul>
	  <h1 class = "bglightgrey">
	  Conexión PC
	  <br>
	  </h1>
	  <p>
	  MoTeC ofrece soluciones para conectar el dispositivo al puerto USB o puerto serie del PC. El método de conexión más sencilla es a través del puerto serie de la PC, sin embargo, muchos ordenadores modernos no tienen un puerto serie, en este caso utilizan el método de conexión USB.
	  <br>
	  </p>
	  <h2> Conexión al USB de la PC puerto </h2>
	  <p>
	  Crear un puerto serie, utilizando un USB a
	  <acronym title = "estándar recomendado 232, protocolo de comunicación"> RS232 </acronym>
	  adaptador serie. A continuación, siga el método de conexión de un PC con un puerto serie.
	  </p>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td> </td>
	  <td>
	  <strong> Descripción </strong>
	  <br>
	  </td>
	  <td>
	  <strong> Parte No </strong>
	  <br>
	  (ficha técnica)
	  <br>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img src="./img/productos/1088902663_61092-2.jpg" alt = "adaptador de USB a serial">
	  </td>
	  <td>
	  <p> adaptador de USB a serie RS232 </p>
	  </td>
	  <td class = "centeralign"> # 61092 </td>
	  </tr>
	  </tbody>
	  </table>
	  <h2> Conexión al puerto serie del PC </h2>
	  <p>
	  Utilice un cable de interfaz de PC (
	  <acronym title = "cable de interfaz PC"> cable PCI </acronym>
	  ) O un módulo de interfaz de ordenador (
	  <acronym title = "Módulo de interfaz de PC"> CIM </acronym>
	  ).
	  <br>
	  </p>
	  <ul>
	  <li>
	  <strong> cable PCI </strong>
	  <br>
	  <p>
	  </li>
	  <li>
	  <strong> módulo CIM </strong>
	  <br>
	  <p> El módulo CIM es normalmente instalado en el vehículo. Esto coloca a la electrónica en el vehículo en lugar de en el cable que tiene la ventaja de proporcionar las señales correctas para conectarse directamente a un guión o registrador de datos, así como proporcionar un punto de conexión para un PC. El módulo CIM se puede cablear para adaptarse a diferentes cables de conexión PC. Normalmente está cableado para satisfacer un cable serie estándar o un cable MoTeC 4 pines. </p>
	  <p> El CIM también está disponible como un kit con todos los cables necesarios para conectar a un PC y la centralita incluyendo un conector D9 intermedia para permitir la conexión de un SUU. </p>
	  </li>
	  </ul>
	  <h3> Haga clic en el número de parte para descargar una hoja de datos si está disponible. </h3>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td> </td>
	  <td>
	  <strong> Descripción </strong>
	  <br>
	  </td>
	  <td>
	  <strong> Parte No </strong>
	  <br>
	  (ficha técnica)
	  <br>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img src="./img/productos/1641904122_63003.jpg" "cable Serial PCI, 2 m" alt =>
	  </td>
	  <td>
	  Cable PCI 2 metros
	  <br>
	  </td>
	  <td class = "centeralign"> # 63003 </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "cable Serial PCI, 6 m" src="./img/productos/1638165682_63004.jpg">
	  </td>
	  <td>
	  <p> cable PCI 6 metros </p>
	  </td>
	  <td class = "centeralign"> # 63004 </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/246119261_61026.jpg" alt = "módulo CIM">
	  </td>
	  <td>
	  <p> Módulo CIM </p>
	  </td>
	  <td class = "centeralign">
	  <a href="http://www.motec.com/filedownload.php/?docid=1199"> # 61026 </a>
	  <br>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "kit CIM" src="./img/productos/113740113_61027.jpg">
	  </td>
	  <td>
	  <p>
	  El kit del módulo CIM consiste en:
	  <br>
	  - Módulo CIM
	  <br>
	  - Cable de coche CIM
	  <br>
	  - Cable CIM PC
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  # 61027
	  <br>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  <h1 class = "bglightgrey">
	  CABLEADO DEL DISPOSITIVO
	  <br>
	  </h1>
	  <h2> Adaptable en PCI Cable </h2>
	  <ul>
	  <li>
	  <p>
	  Para M8, el cable PCI se conecta directamente al conector de la ECU.
	  <br>
	  </p>
	  </li>
	  <li>
	  <p>
	  para el
	  <acronym title = "ECU para motores con un máximo de 4 cilindros o un máximo de 2 rotores"> M4 </acronym>
	  o la
	  <acronym title = "ECU para motores con hasta 8 cilindros y 2 rotores"> M48 </acronym>
	  ECU, un conector de acoplamiento se debe conectar al conector de la ECU para proporcionar un punto de conexión para el cable PCI.
	  </p>
	  </li>
	  </ul>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td> </td>
	  <td>
	  <strong> Descripción </strong>
	  <br>
	  </td>
	  <td>
	  <strong> Parte No </strong>
	  <br>
	  (ficha técnica)
	  <br>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img alt = "D9 a M4 cableado ECU" src="./img/productos/1683746072_61010.jpg">
	  </td>
	  <td>
	  <p>
	    D9 al cableado ECU M4
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p> # 61010 </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "D9 a wiriing M48 ECU" src="./img/productos/285561615_61012.jpg">
	  </td>
	  <td>
	  <p> D9 al cableado ECU M48 </p>
	  </td>
	  <td class = "centeralign">
	  <p> # 61012 </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  <h2> Adaptable en Módulo CIM </h2>
	  <blockquote> </blockquote>
	  <p> El módulo CIM se puede cablear para adaptarse a diferentes cables de conexión PC. Normalmente está cableado para satisfacer un cable serie estándar o un cable MoTeC 4 pines. </p>
	  <blockquote> </blockquote>
	  <p> La CIM se puede conectar directamente a la ECU o puede ser cableado para conectar con el conector normal de D9 como se describe para el cable PCI anteriormente. Este último tiene la ventaja de permitir una actualización de software Unidad (SUU) para ser instalado en el software del ECU necesita una reforma. </p>
	  <h1 class = "bglightgrey">
	  <a name="ssu"> </a>
	  Actualización de software UNIDAD
	  <br>
	  </h1>
	  <p> Con el fin de actualizar el software en el dispositivo, o para introducir una contraseña de actualización de software actualizada Unidad (SUU) es requerido. </p>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td> </td>
	  <td>
	  <strong> Descripción </strong>
	  <br>
	  </td>
	  <td>
	  <strong> Parte No </strong>
	  <br>
	  (ficha técnica)
	  <br>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img alt = "M4 y M48 SUU" src="./img/productos/1108185743_63008.jpg">
	  <br>
	  </td>
	  <td>
	  <p>
	    M4 y M48 SUU
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p> # 63008 </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "M8 SUU" src="./img/productos/2015036709_63009.jpg">
	  </td>
	  <td>
	  <p>
	    M8 SUU
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p> # 63009 </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <p>
	  Hardware Comunicación y cableado del dispositivo para conectar productos MoTeC con un
	  <acronym title = "Controller Area Network - protocolo de comunicación"> CAN </acronym>
	  puerto a la PC.
	  </p>
	  <h2> Aplica PRODUCTOS MoTeC </h2>
	  <blockquote> </blockquote>
	  <ul>
	  <li>
	  M400,
	  <acronym title = "ecus para los modernos motores con hasta 6 cilindros o un máximo de 3 rotores"> M600 </acronym>
	  ,
	  <acronym title = "ecus para los motores modernos con hasta 12 cilindros o hasta 4 rotores"> M800 </acronym>
	  ,
	  <acronym title = "ecus para los motores modernos con hasta 12 cilindros o hasta 4 rotores"> M880 </acronym>
	  , Plug-In
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  s
	  </li>
	  <li>
	  PDM16,
	  <acronym title = "Módulo de distribución de alimentación con conectores Autosport y 32 salidas"> PDM32 </acronym>
	  ,
	  <acronym title = "Módulo de distribución de alimentación con conectores a prueba de agua y 15 salidas"> pDM15 </acronym>
	  ,
	  <"Módulo de distribución de alimentación, con conectores a prueba de agua y 30 salidas" acrónimo title => PDM30 </acronym>
	  </li>
	  <li>
	  BR2,
	  <acronym title = "expansor Drive By Wire"> DBW4 </acronym>
	  </li>
	  <li>
	  COSUDE, SDC2, SDC3,
	  <acronym title = "Dif Controller Mitsubishi"> MDC </acronym>
	  , MDC2
	  </li>
	  <li> RTC </li>
	  <li> LTC </li>
	  <li> ADL, EDL </li>
	  </ul>
	  <h1 class = "bglightgrey">
	  CONEXIÓN PC
	  <br>
	  </h1>
	  <p>
	  MoTeC ofrece soluciones para conectar el dispositivo al puerto paralelo o USB (impresora) del PC. Para la mayoría de los dispositivos del puerto USB es preferible, sin embargo, algunos dispositivos más antiguos tienen que ser conectado al puerto (impresora) de la PC en paralelo, ver más abajo para más detalles.
	  <br>
	  </p>
	  <h2> Conexión al USB de la PC puerto </h2>
	  <p>
	  El MoTeC
	  <acronym title = "USB a CAN convertor"> FAQ </acronym>
	  adapta el USB a CAN e incluye un USB-A al cable de extensión USB-B
	  </p>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td class = "bglightgrey">
	  <p> </p>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong> Descripción </strong>
	  </span>
	  </p>
	  </td>
	  <td>
	  <p class = "bglightgrey">
	  <strong>
	  Parte
	  <br>
	  </strong>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img alt = "USB al adaptador CAN" src="./img/productos/1524012293_61059.jpg">
	  </td>
	  <td>
	  <p>
	  UTC
	  <br>
	  Adaptador de USB a CAN (incluye cable USB)
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  # 61059
	  <br>
	  </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  <blockquote>
	  <h3>
	  Requisitos de software para UTC Compatibilidad
	  <br>
	  </h3>
	  </blockquote>
	  <blockquote>
	  <ul>
	  <li>
	  <p> M400, M600, M800, M880 - V2.30S o temprano </p>
	  </li>
	  <li>
	  <p> PDM16, PDM32, pDM15, PDM30 - V1.0 o posterior </p>
	  </li>
	  <li>
	  <p> BR2 - V1.0.6.2 (este programa se entrega con todo el software gestor de registro de datos) </p>
	  </li>
	  <li>
	  DBW4 - V1.03 o posterior
	  <br>
	  </li>
	  <li>
	  COSUDE, SDC2, SDC3 - V1.21 o posterior
	  <br>
	  </li>
	  <li>
	  <p> MDC - V1.22 o posterior </p>
	  </li>
	  <li>
	  MDC2 - V2.0 o posterior
	  <br>
	  </li>
	  <li>
	  LTC - V1.0 o posterior
	  <br>
	  </li>
	  <li> ADL - V3.20P o temprano </li>
	  </ul>
	  </blockquote>
	  <blockquote>
	  <p>
	  <strong> Nota: </strong>
	  RTC no es compatible con UTC de MoTeC. Conecte al puerto paralelo de la PC en su lugar. Si el PC no tiene un puerto paralelo MoTeC puede configurar este dispositivo para usted.
	  </p>
	  </blockquote>
	  <blockquote>
	  <ul>
	  <blockquote> </blockquote>
	  </ul>
	  </blockquote>
	  <h2> Conexión a paralelo (impresora) de la PC Puerto </h2>
	  CAN Cable <p> Uso de MoTeC proporcionando conector paralelo al cableado del conector CAN. </p>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td class = "bglightgrey">
	  <p> </p>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong> Descripción </strong>
	  </span>
	  </p>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong> Parte No </strong>
	  </span>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img alt = "CAN interfac cable, 2 m" src="./img/productos/810791826_61021.jpg">
	  </td>
	  <td>
	  Cable CAN MoTeC
	  <br>
	  </td>
	  <td class = "centeralign">
	  <p> # 61021 </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  <p>
	  <strong>
	  <br>
	  </strong>
	  Nota:
	  <acronym title = "Módulo de distribución de alimentación con conectores Autosport y 16 salidas"> PDM16 </acronym>
	  , PDM32, pDM15, PDM30 y
	  <acronym title = "Lambda Para módulo CAN"> LTC </acronym>
	  no son compatibles con CAN Cable de MoTeC. Conecte al puerto USB de la PC en su lugar.
	  </p>
	  <h1 class = "bglightgrey">
	  CABLEADO DEL DISPOSITIVO
	  <br>
	  </h1>
	  <p>
	  Un conector de acoplamiento se debe conectar al conector de dispositivo para proporcionar un punto de conexión para el UTC o CAN Cable. Ver ficha técnica de cableado del dispositivo para obtener más detalles.
	  <br>
	  </p>
	  <h2>
	  Cableado de dispositivos prefabricada
	  <br>
	  <br>
	  </h2>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td class = "bglightgrey">
	  <p> </p>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong> Descripción </strong>
	  </span>
	  </p>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong> Parte No </strong>
	  </span>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img src="./img/productos/677766397_61049.jpg" alt = "Dispositivo conector CAN 0.5m cableado con 22 # pasadores Autosport">
	  </td>
	  <td> Dispositivo PUEDE conector del cableado de 0,5 m con 22 pines # Autosport </td>
	  <td class = "centeralign">
	  <p> # 61049 </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/1618904366_61022.jpg" alt = "Dispositivo para CAN 3m cables de la conexión sin terminación, incluyendo la resistencia de terminación">
	  </td>
	  <td> Dispositivo de cableado del conector CAN, 3 m, sin terminación, incluyendo la resistencia de terminación </td>
	  <td> # 61022 </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/1817192096_61046.jpg" alt = "M800 Plug-in de ecus a CAN conector 0.3m">
	  </td>
	  <td> Plug-In de ecus para el cableado del conector CAN telar 0,3 m </td>
	  <td> # 61046 </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "M400 / 600/800 a telar coche (CAN)" src="./img/productos/349682799_61037.jpg">
	  </td>
	  <td>
	  <acronym title = "ecus para los motores modernos con un máximo de 4 cilindros o un máximo de 2 rotores"> M400 </acronym>
	  / M600 / M800 al cableado del conector CAN
	  </td>
	  <td> # 61037 </td>
	  </tr>
	  </tbody>
	  </table>
	  <h1 class = "bglightgrey">
	  CABLE DE EXTENSIÓN
	  <br>
	  </h1>
	  <p> La conexión se puede ampliar usando un cable de extensión CAN. Este cable se puede utilizar con la CAN Cable o la UTC. </p>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td class = "bglightgrey">
	  <p> </p>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong> Descripción </strong>
	  </span>
	  </p>
	  </td>
	  <td>
	  <p class = "bglightgrey">
	  <strong>
	  Nombre y referencia de
	  <br>
	  </strong>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img alt = "cable de extensión CAN 10 m" src="./img/productos/751496514_61032.jpg">
	  </td>
	  <td>
	  CAN cable de extensión, 10 m
	  <br>
	  </td>
	  <td class = "centeralign">
	  <p class = "centeralign"> # 61032 </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <p> hardware Comunicación y cableado del dispositivo para conectar productos MoTeC con un puerto USB para la PC. </p>
	  <h2> Aplica PRODUCTOS MoTeC </h2>
	  <ul>
	  <li>
	  <p> ADL2, EDL2 </p>
	  </li>
	  <li>
	  <p> SDL </p>
	  </li>
	  </ul>
	  <h1 class = "bglightgrey">
	  Conexión PC
	  <br>
	  </h1>
	  <h2> Conexión al USB de la PC puerto </h2>
	  <p> Utilice un estándar USB-A a USB-B. </p>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td class = "bglightgrey">
	  <p> </p>
	  </td>
	  <td>
	  <span class = "bglightgrey">
	  <strong> Descripción </strong>
	  </span>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong>
	  Parte
	  <br>
	  </strong>
	  </span>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td rowspan = "2">
	  <img src="./img/productos/41977554_61102.jpg" alt = "cable USB A a USB B, 0,9 m">
	  </td>
	  <td>
	  USB Cable 0.9 m
	  <br>
	  </td>
	  <td class = "centeralign">
	  <p>
	  # 61102
	  <br>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td> Cable USB 1.8 m </td>
	  <td> # 61069 </td>
	  </tr>
	  </tbody>
	  </table>
	  <h1 class = "bglightgrey">
	  Cableado de dispositivos
	  <br>
	  </h1>
	  <p> Un conector se debe conectar al conector de los productos para proporcionar un punto para el cable USB para conectarse a. </p>
	  <h2>
	  Cableado de dispositivos prefabricada
	  <br>
	  <br>
	  </h2>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td class = "bglightgrey">
	  <p> </p>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong> Descripción </strong>
	  </span>
	  </p>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong> Parte No </strong>
	  </span>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img src="./img/productos/733725369_61108.jpg" alt = "Panel USB montaje sin terminar">
	  </td>
	  <td>
	  USB del panel de montaje sin terminar
	  <br>
	  </td>
	  <td class = "centeralign">
	  <p class = "centeralign"> # 61108 </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/1386257222_61067-2.jpg" alt = "Panel USB montaje 1m con 22 pines #">
	  </td>
	  <td>
	  Montaje en panel de USB con 22 # pins, 1 m
	  <br>
	  </td>
	  <td> # 61067 </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/650987553_61068.jpg" alt = "Panel USB de montaje de 1,8 m con 22 pines #">
	  </td>
	  <td>
	  Montaje en panel de USB con 22 # pines, 1,8 m
	  <br>
	  </td>
	  <td> # 61068 </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <p> hardware Comunicación y cableado del dispositivo para conectar productos MoTeC con un puerto Ethernet a la PC. </p>
	  <h2> Aplica PRODUCTOS MoTeC </h2>
	  <ul>
	  <li>
	  C125
	  <br>
	  </li>
	  <li>
	  CDL3
	  <br>
	  </li>
	  <li>
	  SDL3
	  <br>
	  </li>
	  <li>
	  ADL3, EDL3
	  <br>
	  </li>
	  <li> ACL </li>
	  </ul>
	  <ul> </ul>
	  <h1 class = "bglightgrey">
	  Conexión PC
	  <br>
	  </h1>
	  <h2> Conexión al puerto Ethernet del PC </h2>
	  <p> Utilice un cable Ethernet estándar para: </p>
	  <ul>
	  <li>
	  C125
	  <br>
	  </li>
	  <li>
	  CDL3
	  <br>
	  </li>
	  <li>
	  SDL3
	  <br>
	  </li>
	  <li> ADL3, EDL3 </li>
	  </ul>
	  <p>
	  Utilice el cable Ethernet a Autosport 5 pines para
	  <acronym title = "Advanced central Logger"> ACL </acronym>
	  :
	  </p>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td class = "bglightgrey">
	  <p> </p>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong> Descripción </strong>
	  </span>
	  </p>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong> Parte No </strong>
	  </span>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img alt = "Ethernet a Autosport cable conector" src="./img/productos/1404292519_61112.jpg">
	  </td>
	  <td>
	  <p>
	  Ethernet para cable Autosport 5 pin
	  <br>
	  Trajes conexión directa a ACL
	  </p>
	  </td>
	  <td> # 61112 </td>
	  </tr>
	  </tbody>
	  </table>
	  <h1 class = "bglightgrey">
	  Cableado de dispositivos
	  <br>
	  </h1>
	  <p>
	  Un conector de acoplamiento se debe conectar a la C125 / CDL3 /
	  <acronym title = "Sport Dash Logger - nueva generación"> SDL3 </acronym>
	  /
	  <acronym title = "Logger Dash Advanced - tercera generación"> ADL3 </acronym>
	  / EDL3 conector para proporcionar un punto de conexión para un cable Ethernet estándar.
	  </p>
	  <table>
	  <tbody>
	  <tr class = "bglightgrey">
	  <td class = "bglightgrey">
	  <p> </p>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong> Descripción </strong>
	  </span>
	  </p>
	  </td>
	  <td>
	  <p>
	  <span class = "bglightgrey">
	  <strong> Parte No </strong>
	  </span>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/690331598_61131.jpg" alt = "cable Ethernet sin terminar">
	  <br>
	  </td>
	  <td>
	  <p> Ethernet RJ45 zócalo - sin terminar, 2 m </p>
	  </td>
	  <td>
	  <p> # 61131 </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/475033478_61132.jpg" alt = "alfileres Autosport cable Ethernet">
	  </td>
	  <td>
	  <p>
	  Conector RJ45 Ethernet a Autosport pines, 1,8 m
	  <br>
	  </p>
	  </td>
	  <td>
	  <p> # 61132 </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
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