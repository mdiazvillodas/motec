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
<div id="m800">
  <h3>m800</h3>
  <img src="./img/productos/about-data-acquisition.jpg"/>
  <div class="slider">
    <div class="tabs">
      <div id="1" class="first-child tabItem active">Gral.</div> 
      <div id="2" class="tabItem">Lambda</div>  
      <div id="3" class="tabItem">Temperatura</div>
      <div id="4" class="tabItem">Presión</div>
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
<script type="text/javascript">
var item2 = document.getElements('.tabItem');
item2.addEvent('click', function() {
   item2.removeClass('active');
   this.addClass('active');
});
</script>