<script type="text/javascript">
window.addEvent('domready', function(){
  new Fx.Accordion($('accordion'), '#accordion .items', '#accordion .content');
  number:-1;
});
</script>
<script type="text/javascript">
var itemaccordion = document.getElements('.content ul li');
itemaccordion.addEvent('click', function() {
   itemaccordion.removeClass('active');
   this.addClass('active');
});
</script>
<div id="productos">
    <div class="contenedorAccordion">
	<div class="headQuicklinks">
	    Productos
	</div>
	<div id="accordion">
	  <div class="items">Info general</div>
	    <div class="content">
	    </div>
	  <div class="items">Manejo de motor</div>
	    <div class="content">
	      <ul>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m1-series-ecus.php','change');">M1 Series ECUs</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m1-development.php','change');">M1 Desarrollo</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-versatile.php','change');" class="vrs">M1 Paquete - Versatile</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-yoyota-86.php','change');" class="toy">M1 Paquete - Toyota 86</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-fia-rallycross.php','change');" class="frc">M1 Package - FIA Rallycross</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m1-plug-in-ecu-kit-nissan-r35-gt-r.php','change');" class="nis">M1 Plug-In ECU Kit: Nissan R35 GT-R</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m1-plug-in-ecu-kit-pwc.php','change');" class="pwc">M1 Plug-In ECU Kit: PWC</li>
		    <li>Hundred Series ECUs</li>
		    <li>M84</li>
		    <li>M400</li>
		    <li>M400 Plug-In ECU Kit: PWC</li>
		    <li>M400 Plug-In ECU Kit: Snowmobile</li>
		    <li>M600</li>
		    <li>M800</li>
		    <li>M800 Plug-In ECUs: EVO & WRX</li>
		    <li>M880</li>
		    <li>Marine ECUs</li>
	      </ul>
	    </div>
	  <div class="items">Adquisición de Datos</div>
	    <div class="content">
	      <ul>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
	      </ul>
	    </div>
	  <div class="items">Adquisición de Datos</div>
	    <div class="content">
	      <ul>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
	      </ul>
	    </div>
	  <div class="items">Adquisición de Datos</div>
	    <div class="content">
	      <ul>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
	      </ul>
	    </div>
	  <div class="items">Adquisición de Datos</div>
	    <div class="content">
	      <ul>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
	      </ul>
	    </div>
	  <div class="items">Adquisición de Datos</div>
	    <div class="content">
	      <ul>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
		  <li>M1 Series ECUs</li>
	      </ul>
	    </div>
	</div>
    </div>
    <div id="change">

    </div>
</div>