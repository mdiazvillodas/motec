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

  
 
 
  });
</script>
<div id="accident-data">
  <h3>ADR</h3>
  <img src="./img/productos/adr.jpg"/>
  <div class="slider">
    <div class="tabs">
      <div id="1" class="first-child tabItem active">Vista General</div> 
      <div id="2" class="tabItem">Destacado</div>  
      <div id="3" class="tabItem">Descargas</div>
    </div>
    <div class="mask">
      <div id="float">
	<div class="sec">
	  <div class = "articlecontent">
	  <p> </p>
	  <p class = "MsoNormal">
	  El ADR es un dispositivo de registro compacto, robusto que registra chasis lateral, longitudinal y vertical fuerzas G durante un accidente. Diseñado para las especificaciones de la
	   Instituto FIA <a href="http://www.fiainstitute.com/about/Pages/home.aspx" rel="external" > Motorsport Seguridad</a>
	  , Los datos que genera se pueden utilizar para obtener una mejor comprensión de las fuerzas experimentadas en las colisiones de alto impacto, y pueden ayudar con la evaluación médica de los conductores.
	  </p>
	  <p class = "MsoNormal">
	  <strong>
	  Es importante destacar que la ADR ahora se ha incluido en el
	  ADR Programa <a href="http://www.fiainstitute.com/research-programme/ccrg/Pages/article-03.aspx"> FIA Institute</a>
	  con MoTeC reconocido como proveedor oficial del equipo.
	  </strong>
	  </p>
	  <p class = "MsoNormal"> A través de este programa, la FIA compila los datos de accidentes de automovilismo internacionales, como las fuerzas de impacto y las lesiones resultantes de controladores, para analizar la efectividad de los vehículos y el seguimiento de los sistemas de seguridad. Nuestra inclusión significa que los equipos y los gerentes de categoría con seguridad pueden seleccionar la MoTeC ADR cuando el uso de un FIA aprobó registrador de datos de accidentes es obligatoria o recomendada, y el firmware pueden ser personalizado si es necesario. </P>
	  <p class = "MsoNormal"> </p>
	  <p class = "MsoNormal"> ADR de MoTeC es una inversión sin necesidad de mantenimiento con una vida perdurable porque no tiene pilas y utiliza el registro cíclico, por lo que siempre está lista para almacenar los datos en caso de un impacto, incluyendo los datos inmediatamente antes de el evento de disparo. En caso de pérdida de alimentación del vehículo, la energía de reserva interna del ADR se hace cargo de mantener el dispositivo de grabación. </P>
	  <p class = "MsoNormal">
	  Los volúmenes de activación son configurables, y un LED externo se pueden conectar y fijados en un lugar destacado para alertar al personal de intervención primera de un impacto severo antes de alcanzar el vehículo. Una luz intermitente, por ejemplo, puede indicar a los funcionarios, incluso a través de las cámaras de televisión, que un umbral de fuerza G se ha superado y la atención médica apropiada debe ser iniciado.
	  <br>
	  </p>
	  <p class = "MsoNormal"> </p>
	  <p>
	  El ADR es un dispositivo independiente que se puede utilizar de forma aislada o en combinación con otros dispositivos tales como un
	  <acronym title = "Sistema de Posición Global"> GPS </acronym>
	  , Data Logger o
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  <br>
	  </p>
	  <p>
	  ver
	  Características
	  para las especificaciones.
	  <a href="/adr/adrfeatures">
	  <br>
	  </a>
	  </p>
	  <p> Para la configuración y la información de la función, consulte el Manual de Usuario ADR. </p>
	  <h1> Enlaces de interés </h1>
	  <p>
	  El MoTeC ADR mostró que
	  <a href="https://www.youtube.com/watch?v=In-sn-cSZ8"> este V8 Supercar </a> accidente
	  generado un impacto superior a 30 Gs. Los acelerómetros se utilizan en el registro de datos estándar se limitan normalmente a 10 G o menos.
	  <br>
	  </p>
	  </div>
	</div>
	<div class="sec">
	  <div class = "articlecontent">
	  <ul>
	  <li>
	  Aprobado para su inclusión en el
	  <a href="http://www.fiainstitute.com/research-programme/ccrg/Pages/article-03.aspx"> Instituto FIA para </a> Programa ADR Motorsport Seguridad
	  <br>
	  </li>
	  <li> Protegido por contraseña </li>
	  <li> continua tala (cíclico) </li>
	  <li> energía de reserva interna - sin baterías para mantener </li>
	  <li> G-Force Range -150G a 150G + </li>
	  <li> Registros lateral, canales longitudinales y verticales a 100 Hz </li>
	  <li>
	  3 x LED indicadores de la unidad - energía, datos, Estado
	  <br>
	  </li>
	  <li>
	  Soporta un LED externo como un alerta importante de un impacto severo
	  <br>
	  </li>
	  <li> nivel de impacto gatillo incidente Configurable </li>
	  <li> nivel de impacto de alta severidad configurable </li>
	  <li>
	  configurable
	  <acronym title = "Controller Area Network - protocolo de comunicación"> CAN </acronym>
	  y
	  <acronym title = "Sistema de Posición Global"> GPS </acronym>
	  <br>
	  </li>
	  <li> Pre-evento duración de la grabación: 2 segundos </li>
	  <li> duración de la grabación del evento: 30 segundos </li>
	  <li> almacenamiento Capacidad del acontecimiento: 10 eventos </li>
	  <li> formato de salida de datos: CSV </li>
	  <li> software Administrador de ADR para la configuración, descarga de datos, reiniciar / borrar la ADR </li>
	  <li>
	  Firmware modificado para requisitos particulares disponible
	  <br>
	  </li>
	  </ul>
	  <h5> Especificaciones </h5>
	  <ul>
	  <li>
	  <p>
	  Comunicaciones: CAN,
	  <acronym title = "estándar recomendado 232, protocolo de comunicación"> RS232 </acronym>
	  (por GPS reciben)
	  </p>
	  </li>
	  <li>
	  <p> 11 pin conector Autosport </p>
	  </li>
	  <li>
	  <p> Tamaño de la caja (mm): 73,5 x 45 x 27 </p>
	  </li>
	  <li>
	  <p> Material de la caja: de aluminio anodizado </p>
	  </li>
	  <li>
	  <p> Los componentes internos encapsulados </p>
	  </li>
	  <li>
	  <p> Peso: 110gms </p>
	  </li>
	  <li> Registra hasta 20 canales, incluyendo: </li>
	  </ul>
	  <blockquote>
	  <p> - velocidades de ruedas </p>
	  <p> - posición de dirección </p>
	  </blockquote>
	  <blockquote>
	  <p> - Tiro de temperatura </p>
	  </blockquote>
	  <blockquote>
	  <p> - Presión de frenos </p>
	  </blockquote>
	  <blockquote>
	  <p> - Posición del Acelerador </p>
	  <p> - 10 canales están predefinidos, 10 son canales de 'usuario' </p>
	  </blockquote>
	  <p>
	  Para más características y especificaciones, consulte el producto
	  <a href="http://www.motec.com/adr/adrdownloads"> Datasheet </a>
	  .
	  <br>
	  Para obtener información de configuración y funcionalidad, por favor consulte el
	  <a href="http://www.motec.com.au/adr/adrdownloads"> ADR Manual del usuario </a>
	  .
	  </p>
	  </div>
	</div>
	<div class="sec">
	  <div class = "articlecontent">
	  <div class = "documentgroup">
	  <h2> Producto </h2>
	  <table class = "categoría4">
	  <caption> Software> Últimas Software> Adquisición de datos y pantallas </caption>
	  <thead>
	  <tr>
	  <td> Archivo </td>
	  <td> Tamaño </td>
	  <td> Última actualización </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td class = "description">
	  <a class="fileicon exe" href="http://www.motec.com/filedownload.php/adr_1.1.0.0002.exe?docid=4539" title="Download: adr_1.1.0.0002.exe"> Gerente V1.1.0.0002 ADR </a>
	  </td>
	  <td class = "tamaño"> 5 MB </td>
	  <td class = "LastUpdated"> 12 de febrero 2014 12:11 </td>
	  </tr>
	  </tbody>
	  </table>
	  <table class = "category42">
	  <caption> Folletos </caption>
	  <thead>
	  <tr>
	  <td> Archivo </td>
	  <td> Tamaño </td>
	  <td> Última actualización </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td class = "description">
	  <a class="fileicon pdf" presentación href="http://www.motec.com/filedownload.php/ADR%20presentation%20webdoc.pdf?docid=4652" title="Download: ADR webdoc.pdf"> Registrador de Datos de Accidentes Presentación </a>
	  </td>
	  <td class = "tamaño"> 1 MB </td>
	  <td class = "LastUpdated"> 18 de agosto 2014 09:02 </td>
	  </tr>
	  </tbody>
	  </table>
	  <table class = "category43">
	  <caption> Manuales </caption>
	  <thead>
	  <tr>
	  <td> Archivo </td>
	  <td> Tamaño </td>
	  <td> Última actualización </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td class = "description">
	  <a class="fileicon pdf" href="http://www.motec.com/filedownload.php/ADR%20User%20Manual.pdf?docid=4318" title="Download: ADR usuario Manual.pdf"> 18116 ADR MANUAL DE USUARIO </a>
	  </td>
	  <td class = "tamaño"> 2 MB </td>
	  <td class = "LastUpdated"> 11 de febrero 2014 12:37 </td>
	  </tr>
	  </tbody>
	  </table>
	  <table class = "category48">
	  <caption> Tech informativos> Hojas de datos> Adquisición de datos </caption>
	  <thead>
	  <tr>
	  <td> Archivo </td>
	  <td> Tamaño </td>
	  <td> Última actualización </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td class = "description">
	  <a class="fileicon pdf" href="http://www.motec.com/filedownload.php/18116_adr.pdf?docid=4236" title="Download: 18116_adr.pdf"> CDS18116 ADR ACCIDENTE REGISTRADOR DE DATOS </a>
	  </td>
	  <td class = "tamaño"> 467 KB </td>
	  <td class = "LastUpdated"> 11 de agosto 2014 11:46 </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>
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