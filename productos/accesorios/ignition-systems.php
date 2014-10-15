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
<div id="ignition-systems">
  <h3>Sistema de Encendido</h3>
  <img src="./img/productos/about-data-acquisition.jpg"/>
  <div class="slider">
    <div  style="font-size:10px;" class="tabs">
      <div style="padding: 0px 7px;" id="1" class="first-child tabItem active">Vista General</div> 
      <div id="2" class="tabItem">Ignición Inductiva</div>  
      <div id="3" class="tabItem">Modulos CDI</div>
      <div id="4" class="tabItem">Bobinas I. Inductiva</div>
      <div id="5" class="tabItem">Bobinas CDI</div>
      <div id="6" class="tabItem">Trigger Wheels</div>
    </div>
    <div class="mask">
      <div id="float">
	<div class="sec">
	  <div class = "articlecontent">
	  <h1 class = "bglightgrey">
	  Cómo elegir
	  <br>
	  </h1>
	  <p> Para decidir qué productos usar para su sistema de encendido en cuenta los siguientes factores: </p>
	  <h2>
	  <strong> Sistema de disparo </strong>
	  <br>
	  </h2>
	  <p>
	  El tiempo de encendido se desencadena por la posición del motor. Una posición del cigüeñal indicando Ref señal y una posición de la señal de sincronización del árbol de levas que indica (opcional) proporcionar esta información a la
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  . Se pueden usar muchos tipos diferentes de sensores de disparo. Estas señales se pueden derivar del sistema de OEM o utilizando MoTeC de
	  ruedas de activación
	  y
	  sensores del cigüeñal y la leva
	  .
	  </p>
	  <h2>
	  <strong> ECU </strong>
	  </h2>
	  <p>
	  La ECU calcula la posición del motor a partir de estas señales Ref / Sync, y se aplica el tiempo de encendido apropiado. El número de señales de salida de ignición necesarias en una aplicación particular depende de la del motor (número de cilindros) y el
	  el modo de encendido
	  .
	  <strong> </strong>
	  Si el número de salidas de encendido disponibles en la ECU no es suficiente, esto puede ser aumentada mediante el uso de un MoTeC
	  IEX
	  .
	  </p>
	  <h2>
	  <strong>
	  Encendido inductivo frente
	  <acronym title = "encendido de descarga capacitiva"> CDI </acronym>
	  Sistemas
	  </strong>
	  </h2>
	  <p>
	  En un sistema de encendido inductivo, la bobina se carga a voltaje de la batería durante un período de tiempo conocido como 'habitan-tiempo' antes de la cocción. La permanencia o tiempo de carga es controlada por la ECU y debe coincidir con la bobina que se utiliza con el fin de no sobre o bajo carga. Cobro por debajo reduce la energía de chispa disponibles, mientras la sobrecarga puede causar un sobrecalentamiento de la bobina y / o módulo de encendido. Sistemas de encendido inductivos producir una chispa, a una tensión más baja con una mayor duración en comparación con los sistemas de encendido por descarga de condensador.
	  <br>
	  <br>
	  Un sistema de encendido CDI, la descarga del condensador se carga constantemente y envía una carga de tensión de gran tamaño (380-450 V) a la bobina. La chispa producida es extremadamente corto en duración y a una tensión mucho más alta que una configuración inductiva. Tenga en cuenta que las bobinas inductivas no deben ser utilizados con un sistema de CDI; Se requieren bobinas compatibles CDI.
	  </p>
	  <p> Hay tres principales características de funcionamiento del motor a tener en cuenta: </p>
	  <ul>
	  <li>
	  presiones <strong> High cilindros </strong>
	  <br>
	  Generalmente, las presiones de los cilindros superiores requieren más voltaje para iniciar una chispa. Impulsado o nitroso inyectado motores crean enormes presiones de los cilindros que aumentan la resistencia a encender la chispa de encendido. Sistemas CDI son los más utilizados en estos motores.
	  </li>
	  <li>
	  <strong>
	  Alto
	  <acronym title = "Revolutions Per Minute"> RPM </acronym>
	  </strong>
	  <br>
	  El tiempo disponible para cargar la bobina en un sistema inductivo reduce a altas rpm. Si el tiempo disponible es más corto que el tiempo requerido para una carga completa, la potencia de la bobina y, como resultado, se reducirá el rendimiento. Un sistema CDI podría ser necesaria.
	  <br>
	  </li>
	  <li>
	  <strong> mezclas pobres </strong>
	  <br>
	  La duración de la chispa más corto en sistemas CDI podría no ser suficiente para encender suficiente de la mezcla para propagar el frente de la llama a través del cilindro. Ignición inductiva se obtienen mejores resultados en esta configuración.
	  </li>
	  </ul>
	  <p> La mayoría de los vehículos, incluyendo carretera y raza aplicaciones de alto rendimiento utilizan un sistema de encendido inductivo. En general, si su motor puede funcionar correctamente en una configuración inductiva, es mejor dejarlo así e instalar un sistema CDI sólo cuando su motor, debido a la alta RPM o la presión del cilindro, requiere que lo haga. </p>
	  <ul> </ul>
	  <p class = "Default"> </p>
	  <h2>
	  <strong> Carga de la bobinas </strong>
	  </h2>
	  <p> La señal de encendido se proporciona al módulo de encendido que controla la bobina. Elija cualquiera de los módulos de ignición de descarga inductivas o capacitivas con el número correcto de canales. </p>
	  <h2>
	  <strong> Distribuidor </strong>
	  </h2>
	  <p> En función del modo de encendido de su aplicación podría necesitar un distribuidor para entregar la chispa en el cilindro correspondiente. </p>
	  <h2>
	  <strong> Bobinas de encendido </strong>
	  </h2>
	  <p> En función de su sistema, elija cualquiera de las bobinas de encendido de descarga inductivas o capacitivas. </p>
	  <ul> </ul>
	  </div>
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <p> Estas unidades están diseñadas para amplificar una señal de corriente baja a la señal de corriente de alta necesaria para activar una bobina inductiva. </p>
	  <h3> Haga clic en el número de parte para descargar una hoja de datos si está disponible. </h3>
	  <p class = "MsoNormal"> </p>
	  <p class = "MinorHeader"> </p>
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
	  <strong> Parte No </strong>
	  </p>
	  <p>
	  (ficha técnica)
	  <strong> </strong>
	  <br>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img src="./img/productos/672604969_41008.JPG" alt = "módulo de encendido solo canal">
	  </td>
	  <td>
	  <p>
	  008 - módulo de encendido solo canal
	  <br>
	  incluye salida tacho
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <a href="http://www.motec.com/filedownload.php/?docid=1249" title="Download datasheet"> # 41008 </a>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/491678093_41124.JPG" alt = "módulo de encendido solo canal">
	  </td>
	  <td>
	  124 - módulo de encendido solo canal
	  <br>
	  </td>
	  <td class = "centeralign">
	  <a href="http://www.motec.com/filedownload.php/?docid=1241" title="Download datasheet"> # 41124 </a>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/1561189625_41200.JPG" alt = "módulo de encendido de 2 canales">
	  </td>
	  <td>
	  200 - módulo de encendido de doble canal
	  <br>
	  </td>
	  <td class = "centeralign">
	  <a href="http://www.motec.com/filedownload.php/?docid=1260" title="Download datasheet"> # 41200 </a>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "módulo de encendido de 3 canales" src="./img/productos/1268931718_41209.JPG">
	  </td>
	  <td>
	  209 - tres módulo de encendido de canal
	  <br>
	  </td>
	  <td class = "centeralign">
	  <a href="http://www.motec.com/filedownload.php/?docid=1266" title="Download ficha técnica "> # 41209 </a>
	  <br>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/2138456922_41211.JPG" alt = "módulo de encendido de 4 canales">
	  </td>
	  <td>
	  <p> 211 - cuatro módulo de encendido de canal </p>
	  </td>
	  <td class = "centeralign">
	  <a href="http://www.motec.com/filedownload.php/?docid=1267" title="Download datasheet"> # 41211 </a>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <h2>
	  <strong> CDI-8 </strong>
	  </h2>
	  <p class = "MsoNormal">
	  <strong> </strong>
	  </p>
	  <p class = "MsoNormal">
	  Diseñado para controlar hasta ocho de baja impedancia
	  <acronym title = "encendido de descarga capacitiva"> CDI </acronym>
	  bobinas, el CDI-8 combina efectivamente un expansor de encendido de 8 canales con un módulo CDI 8 canales en una unidad compacta. El circuito puede entregar de forma fiable voltaje primario 450 voltios en 15 000
	  <acronym title = "Revolutions Per Minute"> RPM </acronym>
	  (o al 30 000 RPM para 4 cilindros). Las etapas de salida ofrecen hasta 200 A en el primario de la bobina del CDI.
	  <br>
	  </p>
	  <h2> rotativo CDI, de un solo canal, doble canal, de cuatro canales, el reemplazo Porsche </h2>
	  <p> Estas unidades están diseñadas para aplicaciones de uno y dos CDI bobina utilizando chispa distribuido convencional, o para aplicaciones rotativas. Más de 100 milijulios de energía disponible por chispa. El hardware se produce para funcionar de forma fiable en este tipo de afección en un entorno de carreras. </p>
	  <h3>
	  <strong> Nota importante: </strong>
	  </h3>
	  <p class = ""> MinorHeader nuevas versiones del single, doble y cuatro canales CDIs no son directa plug-in reemplazos para las versiones anteriores; Se requieren algunos cambios en el cableado. Consulte las hojas de datos relevantes o póngase en contacto con nosotros para más información. Ver módulos CDI reemplazadas. </p>
	  <h3> Haga clic en el número de parte para descargar la hoja de datos. </h3>
	  <p class = "MinorHeader"> </p>
	  <p class = "MsoNormal"> </p>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td class = "bglightgrey">
	  <br>
	  </td>
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
	  <td>
	  <img src="./img/productos/2087633484_14004.jpg" alt = "CDI-8">
	  </td>
	  <td class = "centeralign">
	  <p class = "leftalign">
	  CDI-8 de ocho canales
	  <br>
	  </p>
	  <p class = "leftalign"> </p>
	  </td>
	  <td class = "centeralign">
	  <a title="Download datasheet" href="http://www.motec.com/filedownload.php/?docid=1897"> # 14004 </a>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <p>
	  <img src="./img/productos/1643275330_41013b.jpg" alt = "monocanal CDI">
	  </p>
	  </td>
	  <td>
	  <p> CDI solo canal </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <a title="Download datasheet" href="http://www.motec.com/filedownload.php/?docid=2438"> # 41013 </a>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td> </td>
	  <td>
	  <p> El canal de doble CDI </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <a title="Download datasheet" href="http://www.motec.com/filedownload.php/?docid=2439"> # 41010 </a>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <p>
	  <img src="./img/productos/1570480081_41011+edited.jpg" alt = "CDI de 4 canales">
	  </p>
	  </td>
	  <td>
	  <p>
	  CDI de cuatro canales
	  <br>
	  </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <a title="Datasheet download" href="http://www.motec.com/filedownload.php/?docid=2440"> # 41011 </a>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <p>
	  <img src="./img/productos/231931350_41012b.jpg" alt = "CDI de cuatro canales rotativo">
	  </p>
	  </td>
	  <td>
	  <p> CDI rotatorio de cuatro canales </p>
	  </td>
	  <td class = "centeralign">
	  <p>
	  <a title="Download datasheet" href="http://www.motec.com/filedownload.php/?docid=1898"> # 41012 </a>
	  </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  <br>
	  <a name="earlier"> </a>
	  <h1 class = "bglightgrey">
	  Unidades CDI anuladas
	  <br>
	  </h1>
	  <p> Los números de producto de las versiones anteriores del CDI: </p>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td>
	  <p>
	  <strong> Descripción </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> Parte No </strong>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <p>
	  De un solo canal CDI
	  <br>
	  </p>
	  </td>
	  <td>
	  <p>
	  <a title="Download datasheet" href="http://www.motec.com/filedownload.php/?docid=1024"> # 41004 </a>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <p>
	  De un solo canal CDI
	  <br>
	  </p>
	  </td>
	  <td>
	  <p>
	  <a title="Download datasheet" href="http://www.motec.com/filedownload.php/?docid=2437"> # 41009 </a>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <p>
	  CDI doble canal
	  <br>
	  </p>
	  </td>
	  <td>
	  <p>
	  <a title="Download datasheet" href="http://www.motec.com/filedownload.php/?docid=1025"> # 41005 </a>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <p>
	  CDI de cuatro canales
	  <br>
	  </p>
	  </td>
	  <td>
	  <p>
	  <a title="Download datasheet" href="http://www.motec.com/filedownload.php/?docid=2353"> # 41003 </a>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <p> CDI rotatorio de cuatro canales </p>
	  </td>
	  <td>
	  <p>
	  <a title="Download datasheet" href="http://www.motec.com/filedownload.php/?docid=2441"> # 41002 </a>
	  </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <p>
	  Las bobinas se pueden instalar en diferentes configuraciones de bobina por cilindro, chispa desperdiciada o distribuidor. Elija una bobina de encendido compatible con el
	  el modo de encendido
	  en su aplicación.
	  <a title="Outputs" href="/aboutecu/ecuhowtochoose/#IgnitionMode">
	  <br>
	  </a>
	  </p>
	  <h3> Haga clic en el número de parte para descargar una hoja de datos si está disponible. </h3>
	  <table>
	  <tbody>
	  <tr class = "bglightgrey">
	  <td>
	  <strong>
	  <br>
	  </strong>
	  </td>
	  <td class = "bglightgrey">
	  <p>
	  <strong> Descripción </strong>
	  </p>
	  </td>
	  <td class = "bglightgrey">
	  <strong>
	  Nombre y referencia de
	  <br>
	  </strong>
	  (ficha técnica)
	  <br>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "bobina MEC718" src="./img/productos/919546280_42001.JPG">
	  </td>
	  <td>
	  MEC718 Coil
	  <br>
	  extremo macho
	  </td>
	  <td class = "centeralign"> # 42001 </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "bobina MEC717" src="./img/productos/736599627_42014.JPG">
	  </td>
	  <td>
	  MEC717 Coil
	  <br>
	  extremo hembra
	  </td>
	  <td class = "centeralign"> # 42014 </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "bobina Denso" src="./img/productos/1708585036_42015.JPG">
	  </td>
	  <td>
	  Denso Coil
	  <br>
	  incluyendo módulo
	  <br>
	  </td>
	  <td class = "centeralign">
	  <a href="http://www.motec.com/filedownload.php/?docid=1263" title="Download datasheet"> # 42015 </a>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <p>
	  <a name="_Toc158018274"> </a>
	  Las bobinas se pueden instalar en diferentes configuraciones - bobina por cilindro, perdido chispa o distribuidor.
	  <br>
	  Elija una bobina de encendido compatible con el
	  el modo de encendido
	  en su aplicación.
	  <a title="Outputs" href="/aboutecu/ecuhowtochoose/#IgnitionMode">
	  <br>
	  </a>
	  <a href="/aboutecu/ecuhowtochoose/#IgnitionMode" title="Outputs"> </a>
	  </p>
	  <table>
	  <tbody>
	  <tr class = "bglightgrey">
	  <td>
	  <strong>
	  <br>
	  </strong>
	  </td>
	  <td class = "bglightgrey">
	  <p>
	  <strong> Descripción </strong>
	  </p>
	  </td>
	  <td class = "bglightgrey">
	  <strong> Parte No </strong>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/1909540952_42024.JPG" alt = "bobina de Mercurio CDI">
	  </td>
	  <td>
	  <p>
	  Mercurio
	  <acronym title = "encendido de descarga capacitiva"> CDI </acronym>
	  bobina
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign"> # 42024 </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/247344107_42020.JPG" alt = "bobina PS92 CDi">
	  </td>
	  <td>
	  <p>
	  PS92 CDI Coil
	  <br>
	  tal como se utiliza en la V8 Supercars
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign"> # 42020 </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/819206749_42021.JPG" alt = "bobina dual CDI">
	  </td>
	  <td>
	  <p>
	  Salida dual, sola bobina CDI
	  <br>
	  chispa desperdiciada
	  </p>
	  </td>
	  <td>
	  <p>
	  # 4
	  <span class = "centeralign"> 20 </span>
	  21
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img src="./img/productos/1151489566_42022.JPG" alt = "bobina CDI doble doble">
	  </td>
	  <td>
	  <p>
	  Salida dual de doble bobina de CDI
	  <br>
	  chispa desperdiciada
	  <br>
	  (4 puntos de venta en total)
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign"> # 42022 </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  <p> </p>
	  </div>
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <p class = "default"> Estos discos de usos múltiples se puede utilizar para la medición de la rotación del motor, velocidades de las ruedas, la velocidad del eje de cola, la velocidad diferencial y otras velocidades de dispositivo de rotación. Los discos multi-dientes están cortados con láser y se pueden adaptar a su vehículo. Es importante que el disco de la rueda gatillo está mecanizada con precisión en altura y separación, para asegurar que todos los eventos de sincronización se miden con precisión. Esto es especialmente importante cuando se utiliza como un disparador de referencia cilindro. </P>
	  <p class = "Default"> </p>
	  <p class = "Default"> </p>
	  <p class = "Default"> </p>
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
	  <strong> Parte No </strong>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img alt = "Chopper 12 diente X 145 mm" src="./img/productos/384365934_42007.JPG">
	  </td>
	  <td>
	  <p> 12 dientes x 145 mm </p>
	  </td>
	  <td>
	  <p class = "centeralign"> # 42007 </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "Chopper 12 diente X 90 mm" src="./img/productos/194454402_42016.JPG">
	  </td>
	  <td>
	  <p> 12 dientes x 90 mm ​​</p>
	  </td>
	  <td>
	  <p class = "centeralign"> # 42016 </p>
	  </td>
	  </tr>
	  <tr>
	  <td> </td>
	  <td>
	  <p> 36-1 Ford Gatillo </p>
	  </td>
	  <td>
	  <p class = "centeralign"> # 45001 </p>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "Chopper 8 dientes X 145 mm" src="./img/productos/215924662_42019.JPG">
	  </td>
	  <td>
	  <p> 8 dientes x 145 mm </p>
	  </td>
	  <td>
	  <p class = "centeralign"> # 42019 </p>
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