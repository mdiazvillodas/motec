<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
	    <meta http-equiv=”Content-Type” content=”text/html; charset=CHARSET” />
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
	  <div class="items" onclick="openLinkSimple('./productos/manejodemotor/m1-series-ecus.php','change');">Manejo de motor</div>
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
		    <li onclick="openLinkSimple('./productos/manejodemotor/m800.php','change');"class="m800">M800</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m800-plug-in-ecu-evo-wrx.php','change');" class="m800plugin">M800 Plug-In ECUs: EVO & WRX</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/m880.php','change');"class="m880">M880</li>
		    <li onclick="openLinkSimple('./productos/manejodemotor/marine-ecu.php','change');" class="marineecu">Marine ECUs</li>
	      </ul>
	    </div>
	  <div onclick="openLinkSimple('./productos/obtenciondedatos/about-data-acquisition.php','change');" class="items">Obtención de Datos</div>
	    <div class="content">
	      <ul>
		  <li onclick="openLinkSimple('./productos/obtenciondedatos/about-data-acquisition.php','change');">Acerca de</li>
		  <li onclick="openLinkSimple('./productos/obtenciondedatos/c185.php','change');">C185</li>
		  <li onclick="openLinkSimple('./productos/obtenciondedatos/c125.php','change');">C125</li>
		  <li onclick="openLinkSimple('./productos/obtenciondedatos/c125-race-logging-kit.php','change');">C125 Race Logging Kit</li>
		  <li onclick="openLinkSimple('./productos/obtenciondedatos/cdl3.php','change');">CDL3</li>
		  <li onclick="openLinkSimple('./productos/obtenciondedatos/cdl3-track-kits.php','change');">CDL3 Trak Kit</li>
		  <li onclick="openLinkSimple('./productos/obtenciondedatos/adl3.php','change');">ADL3</li>
		  <li onclick="openLinkSimple('./productos/obtenciondedatos/edl3.php','change');">EDL3</li>
		  <li onclick="openLinkSimple('./productos/obtenciondedatos/acl.php','change');">ACL</li>
		  <li onclick="openLinkSimple('./productos/obtenciondedatos/accident-data.php','change');">Datos de Accidente</li>
	      </ul>
	    </div>
	  <div  onclick="openLinkSimple('./productos/displays/about-displays.php','change');" class="items">Displays</div>
	    <div class="content">
	      <ul>
		  <li onclick="openLinkSimple('./productos/displays/about-displays.php','change');">Acerca de</li>
		  <li onclick="openLinkSimple('./productos/displays/display-creator.php','change');">Display Creator</li>
		  <li onclick="openLinkSimple('./productos/displays/c125.php','change');">C125</li>
		  <li onclick="openLinkSimple('./productos/displays/c125-race-display-kit.php','change');">C125 Race Display Kit</li>
		  <li onclick="openLinkSimple('./productos/displays/d153.php','change');">D153</li>
		  <li onclick="openLinkSimple('./productos/displays/d176.php','change');">D175</li>
		  <li onclick="openLinkSimple('./productos/displays/cdl3.php','change');">CDL3</li>
		  <li onclick="openLinkSimple('./productos/displays/cdl3-track-kits.php','change');">CDL3 Track Kits</li>
	      </ul>
	    </div>
	  <div class="items">Análisis de datos</div>
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
	  <div class="items">Video</div>
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
	  <div class="items">Distribución de Energía</div>
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
	  <div class="items">Teclados</div>
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
	  <div class="items" onclick="openLinkSimple('./productos/accesorios/about-accesories.php','change');">Accesorios</div>
	    <div class="content">
	      <ul>
		  <li onclick="openLinkSimple('./productos/accesorios/about-accesories.php','change');">Acerca de</li>
		  <li onclick="openLinkSimple('./productos/accesorios/sensors.php','change');">Sensores</li>
		  <li onclick="openLinkSimple('./productos/accesorios/fuel-delivery.php','change');">Entrega de combustible</li>
		  <li onclick="openLinkSimple('./productos/accesorios/ignition-systems.php','change');">Sistemas de encendido</li>
		  <li onclick="openLinkSimple('./productos/accesorios/actuator.php','change');">Transmisor de Fuerza</li>
		  <li onclick="openLinkSimple('./productos/accesorios/communication-cables.php','change');">Cables de comunicación</li>
		  <li onclick="openLinkSimple('./productos/accesorios/expanders.php','change');">Expansores</li>
		  <li onclick="openLinkSimple('./productos/accesorios/lap-timing.php','change');">Tiempo de vuelta</li>
		  <li onclick="openLinkSimple('./productos/accesorios/lights.php','change');">Luces</li>
		  <li onclick="openLinkSimple('./productos/accesorios/telemetry.php','change');">Telemetría</li>
		  <li onclick="openLinkSimple('./productos/accesorios/gps-units.php','change');">Unidades GPS</li>
		  <li onclick="openLinkSimple('./productos/accesorios/knock-control.php','change');">Datos de Accidente</li>
	      </ul>
	    </div>
	  <div class="items">Alambres</div>
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