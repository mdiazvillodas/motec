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
	 <p>Los avances en la tecnología han aumentado las demandas sobre los componentes de un vehículo, en especial la ECU. Esta demanda ha alcanzado el punto donde una sola firmware para configuración de la ECU no puede cumplir los requisitos de la ECU del mercado (incluso con una mayor capacidad y velocidad del procesador).
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
	  <h1>M1 SOLUTIONS<br></h1>
	  <p>Our list of available M1 solutions will continue to be updated here as new M1 Plug-In <acronym title="Engine Control Unit">ECU</acronym> Kits and M1 Packages are released.</p>
	  <h2>M1 Plug-In ECU Kits<br></h2>
	  <p>Click to view extra information such as model and make compatibility etc.</p>
	  <ul>
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-plug-in-ecu-kit-nissan-r35-gt-r.php','change');var nis = document.getElements('.content ul .nis');itemaccordion.removeClass('active');nis.addClass('active');">Nissan R35 GT-R Engine Plug-In ECU Kit</a><br></li>
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-solution.php','change');">M130 Sea-Doo RXT-X 2010 Plug-In ECU Kit</li>
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-plug-in-ecu-kit-pwc.php','change');var pwc = document.getElements('.content ul .pwc');itemaccordion.removeClass('active');pwc.addClass('active');">M130 Yamaha FX SHO Plug-In ECU Kit</li>
	  </ul>
	  <h2>M1 Packages</h2>
	  <ul class="likelink">
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-versatile.php','change');var vrs = document.getElements('.content ul .vrs');itemaccordion.removeClass('active');vrs.addClass('active');">GPA  (Versatile Package)<br></li>
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-versatile.php','change');var vrs = document.getElements('.content ul .vrs');itemaccordion.removeClass('active');vrs.addClass('active');">GPR  (Versatile Package - Race)</li>
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-yoyota-86.php','change');var toy = document.getElements('.content ul .toy');itemaccordion.removeClass('active');toy.addClass('active');">Toyota 86, Subaru BRZ, Scion FRS</li>
	    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-fia-rallycross.php','change');var frc = document.getElements('.content ul .frc');itemaccordion.removeClass('active');frc.addClass('active');">FIA Rallycross<br></li>
	  </ul>   
	</div>
	<div class="sec">3
	 
	</div>
	<div class="sec">4
	 
	</div>
	<div class="sec">5
	 
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