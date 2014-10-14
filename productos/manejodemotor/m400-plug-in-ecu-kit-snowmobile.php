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
<div id="m400">
  <h3>m400</h3>
  <img src="./img/productos/m400.jpg"/>
  <div class="slider">
    <div class="tabs">
      <div id="1" class="first-child tabItem active">Vista General</div>
      <div id="2" class="tabItem">Modelo</div>
      <div id="3" class="tabItem">Comparación</div>
      <div id="4" class="tabItem">Como elegir</div>
      <div id="5" class="tabItem">Tecnología</div>
    </div>
    <div class="mask">
      <div id="float">
	<div class="sec">
      </div>
	<div class="sec">
	</div>
	<div class="sec">
	  
	</div>
	<div class="sec">
	  
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