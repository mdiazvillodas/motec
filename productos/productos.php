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
		    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-toyota-86.php','change');" class="toy">M1 Paquete - Toyota 86</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m1-package-fia-rallycross.php','change');" class="frc">M1 Package - FIA Rallycross</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m1-plug-in-ecu-kit-nissan-r35-gt-r.php','change');" class="nis">M1 Plug-In ECU Kit: Nissan R35 GT-R</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m1-plug-in-ecu-kit-pwc.php','change');" class="pwc">M1 Plug-In ECU Kit: PWC</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/hundred-series-ecu.php','change');">Hundred Series ECUs</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m84.php','change');" class="m84">M84</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m400.php','change');"class="m400">M400</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m400-plug-in-ecu-kit-pwc.php','change');">M400 Plug-In ECU Kit: PWC</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m400-plug-in-ecu-kit-snowmobile.php','change');">M400 Plug-In ECU Kit: Snowmobile</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m600.php','change');"class="m600">M600</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m800','change');"class="m800">M800</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m800-plug-in-ecu-evo-wrx.php','change');" class="m800plugin">M800 Plug-In ECUs: EVO & WRX</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m880.php','change');"class="m880">M880</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/marine-ecu.php','change');" class="marineecu">Marine ECUs</li>
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