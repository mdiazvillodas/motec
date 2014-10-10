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

  
 
 
  });
</script>
<div id="m1-series-ecus">
  <h3>M1 Series ECUs</h3>
  <img src="./img/productos/m1-series-ecu.jpg"/>
  <div class="slider">
    <div class="tabs">
      <div id="1" class="first-child tabItem active">Vista General</div>
      <div id="2" class="tabItem">Soluciones</div>
      <div id="3" class="tabItem">Especificaciones PC</div>
      <div id="4" class="tabItem">Especificaciones Maquina</div>
      <div id="5" class="tabItem">Licencia</div>
    </div>
    <div class="mask">
      <div id="float">
	<div class="sec">
	 <h1>M1 - La nueva generación </h1>
	 <p>Los avances en la tecnología han aumentado las demandas sobre los componentes de un vehículo, en especial la ECU.<br>
	 Esta demanda ha alcanzado el punto donde una sola firmware para configuración de la ECU no puede cumplir los requisitos de la ECU del mercado (incluso con una mayor capacidad y velocidad del procesador).<br>
	La serie M1 fue concebido por MoTeC para superar este uno-a-uno, el firmware a la limitación de ecus, mediante el diseño de un sistema en el que la eficiencia operacional, las funciones avanzadas y la flexibilidad son sus principales objetivos. En su esencia, M1 proporciona la capacidad de desarrollar un conjunto de soluciones flexibles y adaptadas (paquetes), por lo que es ideal para cualquier aplicación (por compleja) y la gestión de categorías.</p>
	 <h2><strong>Las principales ventajas de las nuevas soluciones de M1 son:</strong></h2>
	 <ul>
	<li>Procesador de alto rendimiento de última generación</li>
	<li>Memoria de registro grande, descargas rápidas de Ethernet</li>
	<li>Compacto y ligero en robusta carcasa de magnesio</li>
	<li>Soporta inyección directa y aplicaciones de inyección de puerto</li>
	<li>Soporta funciones avanzadas de registro incluyendo Análisis Pro (i2 Pro)</li>
	<li>Avanzado sistema de seguridad, que incorpora un microprocesador contra la manipulación</li>
	<li>Niveles de log-in de acceso para múltiples usuarios</li>
	 </ul>
	 <h2>M1 Tune<br></h2>
	 <p><a href="https://moteconline.motec.com.au/Home/Downloads">Software M1 Tune es libre para descargar</a>, dentro del programa es un paquete de muestra para que usted examine.&nbsp; </p>
	 <p>También puede ver webinars introductorias sobre M1 Tune través de YouTube:(Inglés) <br></p>
	 <p><a href="http://www.youtube.com/watch?v=4vRrwASCSKA&amp;wide" rel="external" target="_blank">M1 Tune - Parte 1</a></p>
	 <p><a href="http://www.youtube.com/watch?v=1Zro-6RLBMk&amp;wide" rel="external" target="_blank">M1 Tune - Part 2</a></p><p>&nbsp;</p>
	 
	</div>
	<div class="sec">
	  <h1>M1 SOLUCIONES<br></h1>
	  <p>Nuestra lista de soluciones disponibles M1 se seguirá actualizando aquí como nuevos Kits ECU M1 Plug-In y Paquetes M1 son liberados.</p>
	  <h2>Kits ECU M1 Plug-In<br></h2>
	  <p>Haga clic para ver la información adicional, como modelo y la marca de compatibilidad, etc</p>
	  <ul class="likelink">
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-plug-in-ecu-kit-nissan-r35-gt-r.php','change');var nis = document.getElements('.content ul .nis');itemaccordion.removeClass('active');nis.addClass('active');">Nissan R35 GT-R Engine Plug-In ECU Kit</a><br></li>
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-solution.php','change');">M130 Sea-Doo RXT-X 2010 Plug-In ECU Kit</li>
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-plug-in-ecu-kit-pwc.php','change');var pwc = document.getElements('.content ul .pwc');itemaccordion.removeClass('active');pwc.addClass('active');">M130 Yamaha FX SHO Plug-In ECU Kit</li>
	  </ul>
	  <h2>M1 Packs</h2>
	  <ul class="likelink">
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-versatile.php','change');var vrs = document.getElements('.content ul .vrs');itemaccordion.removeClass('active');vrs.addClass('active');">GPA  (Versatile Package)<br></li>
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-versatile.php','change');var vrs = document.getElements('.content ul .vrs');itemaccordion.removeClass('active');vrs.addClass('active');">GPR  (Versatile Package - Race)</li>
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-toyota-86.php','change');var toy = document.getElements('.content ul .toy');itemaccordion.removeClass('active');toy.addClass('active');">Toyota 86, Subaru BRZ, Scion FRS</li>
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-fia-rallycross.php','change');var frc = document.getElements('.content ul .frc');itemaccordion.removeClass('active');frc.addClass('active');">FIA Rallycross<br></li>
	  </ul>   
	</div>
	<div class="sec">
	  <h1>MI Tune<br></h1>
	  <h2>Requerimientos de sistema:</h2>
	  <p>La aplicación M1 Tune permite a muchos diseños de pantalla personalizable para hacer su calibración del motor más fácil y más rápido. Para obtener el máximo provecho de Tune, debe utilizar la resolución de pantalla más alta posible. Usando una resolución de pantalla baja reducirá sus opciones de diseño.</p>
	  <ul>
	    <li>Sistema operativo: Windows XP, Vista, 7 u 8 (32 o 64 bit)</li>
	    <li>Resolución minima de pantalla: 1366 x 768<br></li>
	    <li>Resolución de pantalla recomendada: 1920 x 1080 or greater</li>
	    <li>Puertos de comunicación: Ethernet Port</li>
	    <li>Protocolo de comunicación: IPV6 </li>
	  </ul>
	  <p><img src="./img/productos/m1-software.jpg" alt="M1 software box"></p>
	</div>
	<div class="sec">
	  <div class="articlecontent">
	  <h1>PORT INJECTION <acronym title="Engine Control Unit">ECU</acronym></h1>
	  <p>The table below outlines the varying features of M1 port injection ECUs&nbsp; <br></p>
	  <table>
	    <thead>
	      <tr class="bgdarkgrey">
		<td class="xl24">
		  <p>
		    <span class="centeralign"><strong>FEATURES</strong></span>
		  </p>
		</td>
		<td class="centeralign">
		  <p>
		    <span class="centeralign"><strong>M130</strong></span>
		  </p>
		</td>
		<td class="centeralign">
		  <p>
		    <span class="centeralign"><strong>M150</strong></span>
		  </p>
		</td>
		<td class="centeralign">
		  <p><strong>M170</strong></p>
		</td>
		<td class="centeralign">
		  <p><strong>M190</strong></p>
		</td>
	      </tr>
	    </thead>
	    <tbody>
	      <tr class="bglightgrey">
		<td class="leftalign" colspan="5">
		  <p><strong>Injector</strong></p>
		</td>
	      </tr>
	      <tr>
		<td class="xl27">
		  <p>Peak &amp; Hold Injector Outputs</p>
		</td>
		<td class="xl30">
		  <p class="centeralign">8</p>
		</td>
		<td class="xl30">
		  <p class="centeralign">12</p>
		</td>
		<td class="xl30">
		  <p class="centeralign">8</p>
		</td>
		<td class="xl29">
		  <p class="centeralign">12</p>
		</td>
	      </tr>
	      <tr>
		<td class="xl27">
		  <p>Low Side Injector Outputs</p>
		</td>
		<td class="xl30">
		  <p class="centeralign">&nbsp;</p>
		</td>
		<td class="xl30">
		  <p class="centeralign">&nbsp;</p>
		</td>
		<td class="xl30">
		  <p class="centeralign">&nbsp;</p>
		</td>   <td class="xl29">
		<p class="centeralign">12</p>
		</td>
	      </tr>
	      <tr class="bglightgrey">
		<td class="xl27" colspan="5">
		  <p><strong>Ignition</strong></p>
		</td>
	      </tr>
	      <tr>
		<td class="xl27">
		  <p>Low Side Ignition Outputs (max)</p>
		</td>
		<td class="xl30"><p class="centeralign">8</p>
		</td>
		<td class="xl30"><p class="centeralign">12</p>
		</td>
		<td class="xl30">
		  <p class="centeralign">8</p>
		</td>
		<td class="xl29">
		  <p class="centeralign">12</p>
		</td>
	      </tr>
	      <tr class="bglightgrey">
		<td class="xl27" colspan="5">
		  <p><strong>Auxiliary Outputs</strong>
		  </p>
		</td>
	      </tr>
	      <tr>
		<td class="xl27">
		  <p>Low Side Output</p>
		</td>
		<td class="xl30">
		  <p class="centeralign">2</p>
		</td>
		<td class="xl30">
		  <p class="centeralign">6</p>
		</td>
		<td class="xl30">
		  <p class="centeralign">2</p>
		</td>
		<td class="xl29">
		  <p class="centeralign">6</p>
		</td>
	      </tr>
	      <tr>
		<td class="xl27">
		  <p>Half Bridge Output</p>
		</td>
		<td class="xl30">
		  <p class="centeralign">6</p>
		</td>   <td class="xl30"><p class="centeralign">10</p></td>   <td class="xl30"><p class="centeralign">6</p></td>   <td class="xl29"><p class="centeralign">10</p></td>  </tr>  <tr class="bglightgrey">   <td class="xl27" colspan="5"><p><strong>Inputs</strong></p></td>              </tr>  <tr>   <td class="xl27"><p>Universal Digital Input</p></td>   <td class="xl30"><p class="centeralign">7</p></td>   <td class="xl30"><p class="centeralign">12</p></td>   <td class="xl30"><p class="centeralign">8</p></td>   <td class="xl29"><p class="centeralign">12</p></td>  </tr>  <tr>   <td class="xl27"><p>Digital Input</p></td>   <td class="xl30"><p class="centeralign">&nbsp;</p></td>   <td class="xl30"><p class="centeralign">4</p></td>   <td class="xl30"><p class="centeralign">&nbsp;</p></td>   <td class="xl29"><p class="centeralign">4</p></td>  </tr>  <tr>   <td class="xl27"><p>Analogue Voltage Input</p></td>   <td class="xl30"><p class="centeralign">8</p></td>   <td class="xl30"><p class="centeralign">17</p></td>   <td class="xl30"><p class="centeralign">8</p></td>   <td class="xl29"><p class="centeralign">17</p></td>  </tr>  <tr>   <td class="xl27"><p>Analogue Temperature Input</p></td>   <td class="xl30"><p class="centeralign">4</p></td>   <td class="xl30"><p class="centeralign">6</p></td>   <td class="xl30"><p class="centeralign">4</p></td>   <td class="xl29"><p class="centeralign">6</p></td>  </tr>  <tr>   <td class="xl27"><p>Knock Input</p></td>   <td class="xl30"><p class="centeralign">2</p></td>   <td class="xl30"><p class="centeralign">4</p></td>   <td class="xl30"><p class="centeralign">2</p></td>   <td class="xl29"><p class="centeralign">4</p></td>  </tr>  <tr>   <td class="xl27"><p>Lambda (Narrow band)</p></td>   <td class="xl30"><p class="centeralign">0</p></td>   <td class="xl30"><p class="centeralign">2</p></td>   <td class="xl30"><p class="centeralign">0</p></td>   <td class="xl29"><p class="centeralign">2</p></td>  </tr>  <tr class="bglightgrey">   <td class="xl27" colspan="5"><p><strong>Data</strong></p></td>              </tr>  <tr>   <td class="xl27"><p>CAN Bus/<acronym title="Recommended Standard 232, communication protocol">RS232</acronym>/LIN</p></td>   <td class="xl31"><p class="centeralign">1/0/0</p></td>   <td class="xl31"><p class="centeralign">3/1/1</p></td>   <td class="xl31"><p class="centeralign">1/0/0</p></td>   <td class="xl32"><p class="centeralign">3/1/1</p></td>  </tr>  <tr>   <td class="xl27"><p>Logging Memory (MB)</p></td>   <td class="xl30"><p class="centeralign">120</p></td>   <td class="xl30"><p class="centeralign">250</p></td>   <td class="xl30"><p class="centeralign">250</p></td>   <td class="xl29"><p class="centeralign">250</p></td>  </tr>  <tr class="bglightgrey">   <td class="xl27" colspan="5"><p><strong>Dimensions &amp; Connectors<br></strong></p></td>              </tr>  <tr>   <td class="xl27"><p>Size (mm)</p></td>   <td class="xl30"><p class="centeralign">107x127x39</p></td>   <td class="xl30"><p class="centeralign">162x127x39</p></td>   <td class="xl30"><p class="centeralign">107x127x39</p></td>   <td class="xl29"><p class="centeralign">162x127x39</p></td>  </tr>  <tr>   <td class="xl27"><p>Weight</p></td>   <td class="xl30"><p class="centeralign">290g</p></td>   <td class="xl30"><p class="centeralign">450g</p></td>   <td class="xl30"><p class="centeralign">310g</p></td>   <td class="xl29"><p class="centeralign">490g</p></td>  </tr>  <tr>   <td class="xl27"><p>Connector type</p></td>   <td class="xl30"><p class="centeralign">Plastic</p></td>   <td class="xl30"><p class="centeralign">Plastic</p></td>   <td class="xl30"><p class="centeralign">Autosport</p></td>   <td class="xl29"><p class="centeralign">Autosport</p></td>  </tr>  <tr>   <td class="xl27"><p>Number of connectors</p></td>   <td class="xl30"><p class="centeralign">2</p></td>   <td class="xl30"><p class="centeralign">4</p></td>   <td class="xl30"><p class="centeralign">1</p></td>   <td class="xl29"><p class="centeralign">3</p></td>  </tr>  <tr>   <td class="xl33"><p>Pins</p></td>   <td class="xl34"><p class="centeralign">60</p></td>   <td class="xl34"><p class="centeralign">120</p></td>   <td class="xl34"><p class="centeralign">66</p></td>   <td class="xl35"><p class="centeralign">136</p></td>  </tr>  </tbody></table>     <p>&nbsp;</p><h1>DIRECT INJECTION ECU <a name="DI"></a></h1><p>The table below outlines the varying features of M1 direct injection ECUs&nbsp; </p>              <table><thead><tr class="bgdarkgrey">   <td class="xl26"><p><strong>FEATURES</strong></p></td>   <td class="centeralign"><p><strong>M142</strong></p></td>   <td class="centeralign"><p><strong>M182</strong></p></td>  </tr></thead>       <tbody>  <tr class="bglightgrey">   <td colspan="3" class="xl29"><p><strong>Injector</strong></p></td>        </tr>  <tr>   <td class="xl29"><p>Direct Injector Outputs</p></td>   <td class="xl24"><p class="centeralign">8</p></td>   <td class="xl25"><p class="centeralign">12</p></td>  </tr>  <tr>   <td class="xl29"><p>Injector max hold current (Amps)*</p></td>   <td class="xl24"><p class="centeralign">12</p></td>   <td class="xl34"><p class="centeralign">12</p></td>  </tr>  <tr>   <td class="xl29"><p>Injector max voltage (V)</p></td>   <td class="xl24"><p class="centeralign">90</p></td>   <td class="xl34"><p class="centeralign">90</p></td>  </tr>  <tr class="bglightgrey">   <td colspan="3" class="xl29"><p><strong>Ignition</strong></p></td>        </tr>  <tr>   <td class="xl29"><p>Low Side Ignition Outputs (max)</p></td>   <td class="xl24"><p class="centeralign">8</p></td>   <td class="xl25"><p class="centeralign">12</p></td>  </tr>  <tr class="bglightgrey">   <td colspan="3" class="xl29"><p><strong>Auxiliary Outputs</strong></p></td>        </tr>  <tr>   <td class="xl29"><p>Low Side Output</p></td>   <td class="xl24"><p class="centeralign">6</p></td>   <td class="xl34"><p class="centeralign">6</p></td>  </tr>  <tr>   <td class="xl29"><p>Half Bridge Output</p></td>   <td class="xl24"><p class="centeralign">10</p></td>   <td class="xl34"><p class="centeralign">10</p></td>  </tr>  <tr class="bglightgrey">   <td colspan="3" class="xl29"><p><strong>Inputs</strong></p></td>        </tr>  <tr>   <td class="xl29"><p>Universal Digital Input</p></td>   <td class="xl24"><p class="centeralign">12</p></td>   <td class="xl25"><p class="centeralign">12</p></td>  </tr>  <tr>   <td class="xl29"><p>Digital Input</p></td>   <td class="xl24"><p class="centeralign">4</p></td>   <td class="xl25"><p class="centeralign">4</p></td>  </tr>  <tr>   <td class="xl29"><p>Analogue Voltage Input</p></td>   <td class="xl24"><p class="centeralign">17</p></td>   <td class="xl25"><p class="centeralign">17</p></td>  </tr>  <tr>   <td class="xl29"><p>Analogue Temp Input</p></td>   <td class="xl24"><p class="centeralign">6</p></td>   <td class="xl25"><p class="centeralign">6</p></td>  </tr>  <tr>   <td class="xl29"><p>Knock Input</p></td>   <td class="xl24"><p class="centeralign">4</p></td>   <td class="xl25"><p class="centeralign">4</p></td>  </tr>  <tr>   <td class="xl29"><p>Lambda (narrow band)</p></td>   <td class="xl24"><p class="centeralign">2</p></td>   <td class="xl25"><p class="centeralign">2</p></td>  </tr>  <tr class="bglightgrey">   <td colspan="3" class="xl29"><p><strong>Data</strong></p></td>        </tr>  <tr>   <td class="xl29"><p>CAN Bus/RS232/LIN</p></td>   <td class="xl35"><p class="centeralign">3/1/1</p></td>   <td class="xl36"><p class="centeralign">3/1/1</p></td>  </tr>  <tr>   <td class="xl29"><p>Logging Memory (MB)</p></td>   <td class="xl24"><p class="centeralign">250</p></td>   <td class="xl25"><p class="centeralign">250</p></td>  </tr>  <tr class="bglightgrey">   <td colspan="3" class="xl29"><p><strong>Dimensions</strong></p></td>        </tr>  <tr>   <td class="xl29"><p>Size (mm)</p></td>   <td class="xl24"><p class="centeralign">162x127x39</p></td>   <td class="xl34"><p class="centeralign">162x127x39</p></td>  </tr>  <tr>   <td class="xl29"><p>Weight</p></td>   <td class="xl24"><p class="centeralign">490g</p></td>   <td class="xl25"><p class="centeralign">530g</p></td>  </tr>  <tr>   <td class="xl29"><p>Connector type</p></td>   <td class="xl24"><p class="centeralign">Plastic</p></td>   <td class="xl25"><p class="centeralign">Autosport</p></td>  </tr>  <tr>   <td class="xl29"><p>Number of connectors</p></td>   <td class="xl24"><p class="centeralign">4</p></td>   <td class="xl25"><p class="centeralign">3</p></td>  </tr>  <tr>   <td class="xl31"><p>Pins</p></td>   <td class="xl32"><p class="centeralign">120</p></td>   <td class="xl33"><p class="centeralign">136</p></td>  </tr>  </tbody></table>     <br><p>*Maximum current is application dependent</p>
	 
	</div>
	</div>
	<div class="sec">
	  <div class="articlecontent">
	  <p>Para asegurarse de que usted sólo paga por lo que quiere, de licencia M1 ha sido convenientemente dividido en tres partes. Las tres licencias de software, el registro y el análisis que figura a continuación-.<br></p>
	  <h1>M1 LICENCIA DE SOFTWARE<br></h1>
	  <p>Junto con la compra del hardware de una serie de ecus M1, M1 solución de MoTeC incluye software que es especialmente diseñado para la aplicación dada la estructura de precios de licencia de software varía según el número y la complejidad de las funciones que el software realiza. </p>
	  <h1>&nbsp;M1 LICENCIA DE INGRESO<br></h1>
	  <p>La licencia de registro determina el número de canales y las frecuencias de muestreo disponibles, como se muestra en la siguiente tabla.<br></p>
	  <table>
	    <thead>
	      <tr class="bgdarkgrey">
		<td class="bgdarkgrey">
		  <p><strong><span class="centeralign">&nbsp;DATA LOGGING</span><br></strong></p>
		</td>
		<td>
		  <p><strong>PROVISION </strong><br></p>
		</td>
		<td class="centeralign">
		  <p><strong>LOG SETS<br></strong></p>
		</td>
		<td class="centeralign">
		  <p><strong>&nbsp;MAX SAMPLE RATE</strong></p>
		</td>
		<td class="centeralign">
		  <p>&nbsp;<strong>CHANNELS</strong></p>
		</td>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
		<td>
		  <p>Licencia de nivel de ingreso 3 <br></p>
		</td>
		<td class="centeralign">
		  <p>O<br></p>
		</td>
		<td class="centeralign">
		  <p>8</p>
		</td>
		<td class="centeralign">
		  <p>&nbsp;1000 Hz</p>
		</td>
		<td><p class="centeralign">&nbsp;2000</p></td>
	      </tr>
	      <tr>
		<td>
		  <p>Licencia de nivel de ingreso 2</p>
		</td>
		<td class="centeralign"><p>Opcional<br></p></td><td class="centeralign"><p>1</p></td><td class="centeralign"><p>200 Hz</p></td><td><p class="centeralign">&nbsp;200 including diagnostics<br></p></td></tr><tr><td><p>Licencia de nivel de ingreso 1</p></td><td class="centeralign"><p>Estandar<br></p></td><td class="centeralign" colspan="3"><p>Fixed log set and rate<br></p> </td></tr></tbody></table><h1>Analisis de licenciamiento de M1</h1>
	  <p>Hay dos niveles de análisis de la licencia disponibles. Esta licencia refleja cuál de los siguientes software de análisis que puede utilizar:</p><ul><li><p>MoTeC <acronym title="MoTeC data analysis software - standard version">i2</acronym> Pro (Opcional) - Analysis Level 2 Licence</p></li><li><p>MoTeC i2 Standard (Estándar) - Analysis Level 1 Licence</p></li></ul>
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