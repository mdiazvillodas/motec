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
<div id="actuator">
  <h3>actuator</h3>
  <div class="slider">
    <div class="tabs">
      <div id="1" class="first-child tabItem active">Vista General</div> 
      <div id="2" class="tabItem">DHB</div>
      <div id="3" class="tabItem">DHB Descargas</div> 
      <div id="4" class="tabItem">Boost Control</div>
    </div>
    <div class="mask">
      <div id="float">
	<div class="sec">
	  <div class = "articlecontent">
	  <p>
	  Actuadores son dispositivos, por lo general conectados a una salida auxiliar en la
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  , Que se puede llevar a cabo funciones tales como la velocidad de ralentí y el control de impulso.
	  </p>
	  <p class = "MsoPlainText">
	  Normalmente son gestionados por la ECU a través de un ancho de pulso modulado (
	  <acronym title = "ancho de pulso modulado."> PWM </acronym>
	  ) De la señal. Esta señal se puede variar de 0% a 100% para controlar el rendimiento del actuador.
	  </p>
	  <br>
	  </div>
	</div>
	<div class="sec">
	  <img src="./img/productos/dhb.jpg">
	  <div class = "articlecontent">
	  <p>
	  El Dual Medio puente (DHB) es un amplificador de alta corriente que permite a las salidas auxiliares de corriente baja para impulsar altas cargas de corriente tales como motores. Contiene dos salidas de medio puente de alta corriente que le permiten conducir un solo motor en dos direcciones, o conducir dos motores en una sola dirección. También es capaz de alta velocidad
	  <acronym title = "ancho de pulso modulado."> PWM </acronym>
	  , Que se puede utilizar para el control de velocidad de motores y para otros fines.
	  </p>
	  <p>
	  El DHB se conecta a cualquier salida auxiliar de un MoTeC
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  o Dash Logger, que realiza la función de control, como el control de velocidad PWM, de control de dirección o de control de servo.
	  </p>
	  <p> El caso totalmente sellado hace que el DHB apto para menores montaje capó. </p>
	  <h3>
	  Ejemplos de aplicación
	  <br>
	  </h3>
	  <ul>
	  <li> Servomotor ejemplo control activo ala, control de trim barco, entrada de control de longitud corredor, elevación variable de válvulas. </li>
	  <li> control de velocidad del motor, por ejemplo, bomba eléctrica de agua, ventilador termo, bomba de combustible. </li>
	  <li>
	  Control de solenoide.
	  <br>
	  </li>
	  </ul>
	  <h2> Compatible con </h2>
	  <ul>
	  <li> Todos MoTeC ECUs </li>
	  <li> Todos los Leñadores Dash MoTeC </li>
	  </ul>
	  <h1> Especificaciones básicas </h1>
	  <h2> Eléctrica </h2>
	  <ul>
	  <li> Corriente de salida </li>
	  <ul>
	  <li> dc continua corriente de 20 A (total) </li>
	  <li> Sobrecorriente máxima 500 A </li>
	  </ul>
	  <li>
	  Max. frecuencia de funcionamiento de 50 kHz a 28 V
	  <br>
	  </li>
	  <li>
	  Retardo de conexión, típico
	  <br>
	  </li>
	  <ul>
	  <li> De mayor a menor 6,5 microsegundos </li>
	  <li> De menor a mayor 6,5 microsegundos </li>
	  </ul>
	  <li>
	  Umbral de entrada, típica
	  <br>
	  </li>
	  <ul>
	  <li> Alto 2.8 V </li>
	  <li> Bajo 2.1 V </li>
	  </ul>
	  <li>
	  tensión de servicio
	  <br>
	  </li>
	  <ul>
	  <li>
	  7,0 V a 55 V con bajo voltaje de bloqueo
	  <br>
	  </li>
	  </ul>
	  </ul>
	  <h2> Física </h2>
	  <ul>
	  <li> Tamaño 31.4 x 38.0 x 14.0 mm </li>
	  <li> Peso aproximadamente 60 gramos más conectores </li>
	  <li> Conectores </li>
	  <ul>
	  <li> Potencia: 2 pin DTP Mujer </li>
	  <li> Motor / salida: 2 pin DTP Mujer </li>
	  <li> Entrada: 2 pin DTM Mujer </li>
	  </ul>
	  <li> La temperatura máxima de caso 125 ° C </li>
	  </ul>
	  </div>
	</div>
	<div class="sec">
	  <div class = "articlecontent">
	  <div class = "documentgroup">
	  <h2> Actuadores </h2>
	  <table class = "category0">
	  <caption> Actuadores </caption>
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
	  <a  href ="http://www.motec.com/filedownload.php/CDS41213%20DHB%20Dual%20Half%20Bridge.pdf?docid=3244" title = "Descargar: CDS41213 DHB Dual Media Bridge.pdf ">CDS41213 DHB Dual Medio puente </a> 
	  </td>
	  <td class = "tamaño"> 135 KB </td>
	  <td class = "LastUpdated"> 28 de agosto 2009 14:01 </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>
	  </div>
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <p>
	  <p>
	  <h3> Haga clic en el número de parte para descargar la hoja de datos. </h3>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td> </td>
	  <td>
	  <p>
	  <strong> Descripción </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong>
	  Nombre y referencia de
	  <br>
	  </strong>
	  (ficha técnica)
	  <strong>
	  <br>
	  </strong>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td class = "centeralign">
	  <img alt = "válvula de control Boost" src="./img/productos/507991688_58001_7cm.jpg">
	  </td>
	  <td>
	  <td>
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