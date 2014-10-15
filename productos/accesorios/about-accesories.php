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
<div id="about-accesories">
  <h3>Acerca de Accesorios</h3>
  <div class="slider">
    <div class="tabs">
      <div id="1" class="first-child tabItem active">Vista General</div> 
    </div>
    <div class="mask">
      <div id="float">
	<div class="sec">
	  <div class = "articlecontent">
	  <p class = "MsoNormal">
	  Cuando se trata de sistemas de gestión del mercado de accesorios del motor y adquisición de datos, cada aplicación es diferente. En MoTeC nos damos cuenta que los componentes de apoyo de una instalación pueden ser tan importantes como el
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  o el propio registrador de datos.
	  </p>
	  <p class = "MsoNormal">
	  A medida que las demandas de aumento de la electrónica del vehículo, nuevos accesorios, se están introduciendo cada temporada. MoTeC está a la vanguardia de estas tecnologías, el desarrollo de muchos dispositivos complementarios de la casa y la externalización de otros de proveedores de confianza.
	  <br>
	  </p>
	  <p class = "MsoNormal">
	  Sistemas MoTeC están diseñados con una diversa base de clientes en todo el mundo en la mente y, como tales, son muy adecuadas para la personalización y expansión. Distribuidores MoTeC autorizados pueden proporcionar una gama de sensores, actuadores y expansores de E / S para crear una solución completa con los componentes más adecuados. Los elementos opcionales como luces de desplazamiento, medición de vueltas balizas,
	  <acronym title = "Sistema de Posición Global"> GPS </acronym>
	  y kits de telemetría se pueden obtener con el conocimiento de que han sido diseñados o probados para ser totalmente compatible con los dispositivos MoTeC. Los sistemas de combustible y de ignición también son atendidos con una serie de piezas de alto rendimiento adecuados como sustitutos o mejoras.
	  </p>
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