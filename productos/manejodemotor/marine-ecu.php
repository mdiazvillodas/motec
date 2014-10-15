<script type="text/javascript">
  var slider;
  window.addEvent('domready', function(){
 slider = new Fx.Tween(('float'), {duration: 250,link: 'chain',transition: Fx.Transitions.Circ.easeOut});
  
 $('1').addEvent('click', function(){
 slider.start('left','0px');
 });
  
  
 
 
  });
</script>
<div id="m400">
  <h3>m400</h3>
  <img src="./img/productos/m400.jpg"/>
  <div class="slider">
    <div class="tabs">
      <div id="1" class="first-child tabItem active">Vista General</div>
    </div>
    <div class="mask">
      <div id="float">
	<div class="sec">
      <p>
	Estos modelos son versiones totalmente de poliuretano-maceta de la M400, M600 y M800 ECUs. Con un diseño de clasificación IP67, que son de forma fiable a prueba de agua y pesan poco más de 900 gramos.
      </p>
      <p>
Las nuevas versiones Marinos se adaptan específicamente para aplicaciones en entornos difíciles con el agua, la suciedad o la vibración, por ejemplo, en las PWC (Personal Water Craft), barcos y vehículos todo terreno.
</p>
      <p>
Todas las funciones y mejoras serán las mismas que las centralitas 'cien serie estándar.
</p>
      <p>
Para obtener especificaciones detalladas, consulte las páginas ECU estándar: M400 M400 para la Marina, M600 para el M600 y M800 Marine para el M800 Marine.
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