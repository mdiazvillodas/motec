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
  
 $('6').addEvent('click', function(){
 slider.start('left','-2900px');
 });
  
 
 
  });
</script>
<div id="fuel-delivery">
  <h3>Entrega de Combustible</h3>
  <div class="slider">
    <div style="font-size:10px;" class="tabs">
      <div id="1" class="first-child tabItem active">Vista General</div> 
      <div id="2" class="tabItem">Inyectores</div>  
      <div id="3" class="tabItem">Bombas de nafta</div>
      <div id="4" class="tabItem">Reguladores de presión</div>
      <div id="5" class="tabItem">Amortiguadores</div>
      <div id="6" class="tabItem">Adaptadores</div>
    </div>
    <div class="mask">
      <div id="float">
	<div class="sec">
	  <img src="./img/productos/fuel-delivery.png"/>
	  <p class = "MsoNormal">
	  Para lograr un rendimiento óptimo de su motor, es importante en cualquier aplicación que exactamente la cantidad correcta de combustible se suministra al cilindro. Esto requiere que todos los componentes del sistema de combustible para ser elegidos cuidadosamente para trabajar bien juntos y para que coincida con el motor.
	  <br>
	  </p>
	  <p class = "MsoNormal"> MoTeC suministra una amplia gama de componentes de alta calidad para el suministro de combustible, todas las bandas de integrar con sus sistemas MoTeC. </p>	  
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <h1 class = "bglightgrey">
	  ¿Cómo elegir un inyector
	  <br>
	  </h1>
	  <h2> Dimensionamiento </h2>
	  <p class = "MsoNormal">
	  La cantidad de combustible inyectado se determina por el tiempo que el inyector está abierta (controlado por el
	  <acronym title = "Unidad de Control del Motor"> ECU </acronym>
	  ) Y el tamaño físico de los caminos de paso internos en el interior del inyector.
	  <br>
	  Dimensionamiento del inyector es comúnmente identificado por la indicación del tipo de flujo, que es la cantidad de combustible que fluye a través del inyector cuando se mantiene completamente abierta durante un minuto. Los caudales se cotizan generalmente en la presión de combustible 3 bar. La duplicación de la presión aumenta el caudal en aproximadamente un 30%, dependiendo del inyector.
	  </p>
	  <p class = "MsoNormal">
	  Ejemplo: A través de un 500 cc / min fluye inyector 500 cc (½ litro) de combustible por minuto a 3 bar. Esto aumentaría a 650 cc / min a 6 bar.
	  <br>
	  </p>
	  <blockquote>
	  <h3> ¿De qué tamaño se necesita? </h3>
	  <p class = "MsoNormal">
	  La potencia del motor dividido por el número de cilindros, le da hp / cilindro.
	  <br>
	  Como regla general necesitará 5.5 combustible cc por CV.
	  </p>
	  <p class = "MsoNormal">
	  Por ejemplo, un motor de ocho cilindros 600 hp requiere un flujo de inyector de al menos
	  <br>
	  600/8 x 5,5 = 412 cc / min por inyector.
	  </p>
	  </blockquote>
	  <h2> Low Ohm contra altos Ohm Inyectores </h2>
	  <p class = "MsoNormal"> La impedancia (resistencia) de los diferentes inyectores puede variar de 0,5 ohmios a 16 ohmios. Esto requiere de diferentes corrientes de funcionamiento para abrirlos. </p>
	  <p class = "MsoNormal"> Inyectores de alta ohm necesita corriente baja para abrir. Ellos no necesitan el control actual como la alta resistencia asegura que la corriente no se acumula a niveles peligrosos. </P>
	  <p class = "MsoNormal">
	  Inyectores bajos ohmios necesitan corriente máxima para abrir y luego una corriente mucho más pequeña para permanecer abierto. MoTeC utiliza un sistema de 'Pico-and-Hold' de control de corriente donde se permite que el inyector para construir a un alto flujo de corriente para abrir y luego controló a un cuarto de su valor máximo. Esto permite un control preciso del inyector al tiempo que reduce el calor generado en la ECU.
	  <br>
	  </p>
	  <p class = "MsoNormal"> inyector baja ohm tiene un tiempo mucho más rápido de abrir. Esto es importante con admisión de inactividad y bajos, donde los horarios de apertura se requiere son pequeños. </P>
	  <h1 class="bglightgrey" > Inyectores </h1>
	  <table>
	  <tbody>
	  <tr>
	  <td class = "bglightgrey">
	  <strong> </strong>
	  </td>
	  <td class = "bglightgrey">
	  <p>
	  <strong> Descripción </strong>
	  </p>
	  </td>
	  <td class = "bglightgrey">
	  <p>
	  <strong> Parte No </strong>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/1311448917_34007.jpg" alt = "Bosch 007 Djet 50cv, 260cc / min">
	  </td>
	  <td>
	  <p class = "MinorHeader"> Bosch 007 Djet 50 cv, 260 cc / min </p>
	  </td>
	  <td class = "centeralign"> # 34007 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/828850464_34035.jpg" alt = "Bosch 036 Djet 63CV, 320cc / min">
	  </td>
	  <td>
	  <p class = "MinorHeader"> Bosch 036 Djet 63 cv, 320 cc / min </p>
	  </td>
	  <td class = "centeralign"> # 34035 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/1405624442_34036.jpg" alt = "Bosch 036 Djet 75cv, 380cc / min">
	  </td>
	  <td>
	  <p class = "MinorHeader"> Bosch 036 Djet 75 CV, 380 cc / min </p>
	  </td>
	  <td class = "centeralign"> # 34036 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/1784629545_34215.jpg" alt = "34CV Bosch 215 Ljet">
	  </td>
	  <td>
	  <p class = "MinorHeader"> Bosch 215 Ljet 34 CV </p>
	  </td>
	  <td class = "centeralign"> # 34215 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <a class="thickbox" title="" target="image"> href="http://www.munecasbarbie.com/videos/"
	  <img class = "lightbox" src="./img/productos/2045590123_34351.jpg" alt = "90CV Bosch 363 Ljet">
	  </a>
	  </td>
	  <td>
	  <p class = "MinorHeader"> Bosch 363 Ljet 90 CV </p>
	  </td>
	  <td class = "centeralign"> # 34351 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/859074688_34403.jpg" alt = "80hp Bosch 403 Ljet">
	  </td>
	  <td>
	  <p class = "MinorHeader"> Bosch 403 Ljet 80 CV </p>
	  </td>
	  <td class = "centeralign"> # 34403 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/1751558048_34706.jpg" alt = "34CV Bosch 706 Ljet">
	  </td>
	  <td>
	  <p class = "MinorHeader"> Bosch 706 Ljet 34 CV </p>
	  </td>
	  <td class = "centeralign"> # 34706 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/1546985884_34775.jpg" alt = "44CV Bosch 775 Ljet">
	  </td>
	  <td>
	  <p class = "MinorHeader"> Bosch 775 Ljet 44 CV </p>
	  </td>
	  <td class = "centeralign"> # 34775 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img alt = "Bosch 803 Ljet 56hp, 290cc / min" src="./img/productos/40610491_34803.jpg">
	  </td>
	  <td> Bosch 803 Ljet 56 CV, 290 cc / min </td>
	  <td class = "centeralign"> # 34803 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/1449215500_34945.jpg" alt = "48hp Bosch 945 Ljet">
	  </td>
	  <td>
	  <p class = "MinorHeader"> Bosch 945 Ljet 48 CV </p>
	  </td>
	  <td class = "centeralign"> # 34945 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/1974433823_34988.jpg " alt = "Rochester 988 128CV, 640cc / min">
	  </td>
	  <td>
	  <p class = "MinorHeader"> Indy, Bosch 839 260 hp </p>
	  </td>
	  <td class = "centeralign"> # 34998 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/1824185334_34842.jpg" alt = "300hp Bosch 842 Ljet">
	  </td>
	  <td>
	  <p class = "MinorHeader"> Bosch 842 Ljet 300 hp </p>
	  </td>
	  <td class = "centeralign"> # 34842 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/1974433823_34988.jpg " alt = "Rochester 988 128CV, 640cc / min">
	  </td>
	  <td>
	  <p class = "noborder"> Rochester 988 128 CV, 640 cc / min </p>
	  </td>
	  <td class = "centeralign"> # 34988 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/725157205_34989.jpg " alt = "Rochester 989 168hp, 840cc / min">
	  </td>
	  <td>
	  <p class = "MinorHeader"> Rochester 989 168hp, 840 cc / min </p>
	  <p class = "noborder"> </p>
	  </td>
	  <td class = "centeralign"> # 34989 </td>
	  </tr>
	  </tbody>
	  </table>
	  <p> </p>
	  <h1 class = "bglightgrey">
	  Accesorios inyector
	  <br>
	  </h1>
	  <table>
	  <tbody>
	  <tr>
	  <td class = "bglightgrey">
	  <br>
	  </td>
	  <td class = "bglightgrey">
	  <p>
	  <strong> Descripción </strong>
	  </p>
	  </td>
	  <td class = "bglightgrey">
	  <p>
	  <strong> Parte No </strong>
	  </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img alt = "Inyector un sello colector ¢ ï¿½ï¿½ Square (ea)" src="./img/productos/692736902_34002crop.jpg">
	  </td>
	  <td> Inyector sello colector, plaza (ea) </td>
	  <td class = "centeralign"> # 34002 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/251324931_34000crop.jpg" alt = "Inyector Oâï¿½ï¿½Ring Ljet Rochester (ea)">
	  </td>
	  <td> Inyector tórica Ljet Rochester (ea) </td>
	  <td class = "centeralign"> # 34000 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/441343196_34991crop.jpg " alt = "O-rings para 363 (351) inyectores (ea)">
	  </td>
	  <td>
	  <p class = ""> MinorHeader juntas tóricas para Bosch 363 inyectores (ea) </p>
	  </td>
	  <td class = "centeralign"> # 34991 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img alt = "Pintle tapa para 363 (351) inyectores (ea)" src="./img/productos/270536266_34005crop.jpg">
	  </td>
	  <td> cap Pintle para Bosch 363 inyectores (ea) </td>
	  <td class = "centeralign"> # 34005 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img alt = "Espacio para 363 (351) inyectores (ea)" src="./img/productos/830789403_35009crop.jpg">
	  </td>
	  <td> Separador para Bosch 363 inyectores (ea) </td>
	  <td class = "centeralign"> # 35009 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img alt = "Pintle kit para 363 (351) Inyectores (1 X tapa de remolque, 1 Anillo XO, 1 X Spacer)" src="./img/productos/1402970725_34001crop.jpg">
	  </td>
	  <td>
	  <p class = "MinorHeader"> kit de remolque para Bosch 363 inyectores </p>
	  <p class = "MinorHeader"> (tapa de clavija 1 x, 1 x Junta, 1 x espaciador) </p>
	  </td>
	  <td class = "centeralign"> # 34001 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img alt = "Clip de retención para Ljet Inyector (ea)" src="./img/productos/489516893_35008crop.jpg">
	  </td>
	  <td>
	  <p class = "MinorHeader"> Clip de retención para Ljet Inyector (ea) </p>
	  </td>
	  <td class = "centeralign"> # 35008 </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img alt = "pintle Inyector tapas negro alcohol (ea)" src="./img/productos/1601121212_34004crop.jpg">
	  </td>
	  <td>
	  <p class = "MinorHeader"> pintle Inyector capsula negro alcohol (ea) </p>
	  </td>
	  <td class = "centeralign"> # 34004 </td>
	  </tr>
	  </tbody>
	  </table>
	  </div>
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	    <p class = "Default">
	    <table>
	    <tbody>
	    <tr class = "bglightgrey">
	    <td> </td>
	    <td>
	    <p>
	    <strong> Descripción </strong>
	    </p>
	    </td>
	    <td>
	    <p>
	    <strong> Parte no </strong>
	    </p>
	    </td>
	    </tr>
	    <tr>
	    <td class = "centeralign">
	    <img alt = "Bomba 400hp Combustible, 3 bar, 2167cc / min, lengüeta de 12 mm en, lengüeta 8mm cabo" src="./img/productos/1655313799_31033.jpg">
	    </td>
	    <td>
	    <p class = "MinorHeader">
	    <strong> bomba de gasolina de 400 CV </strong>
	    <br>
	    3 bar
	    <br>
	    2167 cc / min
	    <br>
	    12 mm púa en
	    <br>
	    8 mm de la lengüeta hacia fuera
	    </p>
	    </td>
	    <td>
	    <p class = "centeralign"> # 31033 </p>
	    <p> </p>
	    </td>
	    </tr>
	    <tr>
	    <td class = "centeralign">
	    <img alt = "Bomba 500hp Combustible, 4 bares, 2700cc / min, en M14x1,5, M12x1.5 (F) hacia fuera" src="./img/productos/601453464_31979.jpg">
	    </td>
	    <td>
	    <p class = "MinorHeader">
	    <strong> bomba de gasolina de 500 CV </strong>
	    <br>
	    4 bar
	    <br>
	    2700 cc / min
	    <br>
	    M14x1,5 en
	    <br>
	    M12x1.5 (F) fuera
	    </p>
	    </td>
	    <td class = "centeralign"> # 31979 </td>
	    </tr>
	    <tr>
	    <td class = "centeralign">
	    <img alt = "Bomba 600hp Combustible, 3 bar, 3200cc / min, lengüeta de 12 mm en, M12X1.5 cabo" src="./img/productos/1997291408_31984.jpg">
	    </td>
	    <td>
	    <p class = "MinorHeader">
	    <strong> bomba de gasolina 600 CV </strong>
	    <br>
	    3 bar
	    <br>
	    3200 cc / min
	    <br>
	    12 mm púa en
	    <br>
	    M12x1,5 cabo
	    </p>
	    </td>
	    <td class = "centeralign"> # 31984 </td>
	    </tr>
	    <tr>
	    <td class = "centeralign">
	    <img alt = "Bomba 800hp Combustible, 5 bares, 4300cc / min, en M18x1.5, M12x1,5 cabo" src="./img/productos/813459249_31004.jpg">
	    </td>
	    <td>
	    <p class = "MinorHeader">
	    <strong> bomba de gasolina 800 CV </strong>
	    <br>
	    5 bar
	    <br>
	    4300 cc / min
	    <br>
	    M18x1.5 en
	    <br>
	    M12x1,5 cabo
	    </p>
	    </td>
	    <td class = "centeralign"> # 31004 </td>
	    </tr>
	    </tbody>
	    </table>
	    <p> </p>
	  </div>    
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <p class = "Default">
	  Para elegir un regulador de presión, considere lo siguiente:
	  <br>
	  </p>
	  <ul>
	  <li>
	  <p> El número de conexiones de entrada. Reguladores de entrada duales son adecuados para motores con múltiples carriles de combustible o instalaciones que requieren la instalación de un medidor o sensor. </p>
	  </li>
	  <li> Tasa Ajustable o fijo </li>
	  <li> compensación de vacío. Conexiones de vacío están disponibles en algunos reguladores que pueden ser conectados al colector de admisión. Esto mantendrá el diferencial de presión entre el colector de admisión y la constante de riel de combustible, lo que resulta en una presión de alimentación de combustible que está cambiando constantemente de acuerdo con la presión del colector de admisión. </li>
	  <li> Tamaño y tipo de accesorios </li>
	  <li> Física </li>
	  <li> Dimensiones </li>
	  </ul>
	  <br>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td> </td>
	  <td>
	  <p>
	  <strong> Descripción </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> Parte No </strong>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td>
	  <img alt = ". 5 Bar atornillar Regulador compensado vacío" src="./img/productos/1520012402_33230sm.jpg">
	  </td>
	  <td>
	  <p>
	  2,5 bar único regulador
	  <br>
	  compensación de vacío
	  <br>
	  entrada M12x1,5
	  <br>
	  salida M14x1,5
	  </p>
	  </td>
	  <td class = "centeralign"> # 33230 </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "2.5 Bar sola Regulador de vacío compensado" src="./img/productos/57543501_33289.JPG">
	  </td>
	  <td>
	  2,5 bar único regulador
	  <br>
	  compensación de vacío
	  <br>
	  entrada M12x1,5
	  <br>
	  salida de 8 mm de púa
	  </td>
	  <td class = "centeralign"> # 33289 </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "3 Bar Púas doble 8mm regulador ajustable" src="./img/productos/438822103_33003sm.jpg">
	  </td>
	  <td>
	  <p>
	  3 bar dual regulador
	  <br>
	  ajustable
	  <br>
	  entrada 2 x 8 mm púa
	  <br>
	  salida de 8 mm de púa
	  </p>
	  </td>
	  <td class = "centeralign"> # 33003 </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "3 Bar con conexión de entrada de estilo junta tórica y la compensación de vacío" "ruta / image_display.php? = 1488570385_33249.JPG" src =>
	  </td>
	  <td>
	  <p>
	  3 bar único regulador
	  <br>
	  compensación de vacío
	  <br>
	  entrada 10 mm de estilo anillo tórico
	  <br>
	  salida de 8 mm de púa
	  </p>
	  </td>
	  <td class = "centeralign"> # 33249 </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "3 Bar púas solo 8mm regulador ajustable" src="./img/productos/757566992_33001sm.jpg">
	  </td>
	  <td>
	  <p>
	  3 bar único regulador
	  <br>
	  ajustable
	  <br>
	  entrada de 8 mm púa
	  <br>
	  salida de 8 mm de púa
	  </p>
	  </td>
	  <td class = "centeralign"> # 33001 </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "2-4 bar único regulador ajustable con compensación de vacío" src="./img/productos/265443619_33740.JPG">
	  </td>
	  <td>
	  2 - 4 bar único regulador
	  <br>
	  ajustable
	  <br>
	  compensación de vacío
	  <br>
	  entrada M14x1,5
	  <br>
	  salida de 8 mm de púa
	  </td>
	  <td class = "centeralign"> # 33740 </td>
	  </tr>
	  <tr>
	  <td>
	  <img alt = "2-5 bar dual regulador ajustable con compensación de vacío" src="./img/productos/423175150_33741sm.jpg">
	  </td>
	  <td>
	  <p>
	  2-5 bar dual regulador
	  <br>
	  ajustable
	  <br>
	  compensación de vacío
	  <br>
	  entrada 2 x M14x1,5
	  <br>
	  salida de 8 mm de púa
	  </p>
	  </td>
	  <td class = "centeralign"> # 33741 </td>
	  </tr>
	  </tbody>
	  </table>
	  <em>
	  <br>
	  </em>
	  </div>
	</div>
	<div class="sec">
	 <div class = "notabs articlecontent">
	 <p class = "Default">
	 Para ayudar a eliminar las fluctuaciones de presión de combustible visto en el carril de combustible en configuraciones de motor de alto rendimiento de un amortiguador se puede utilizar.
	 <br>
	 <br>
	 </p>
	 <table>
	 <thead>
	 <tr class = "bglightgrey">
	 <td> </td>
	 <td>
	 <p>
	 <strong> Descripción </strong>
	 </p>
	 </td>
	 <td>
	 <p>
	 <strong> Parte No </strong>
	 </p>
	 </td>
	 </tr>
	 </thead>
	 <tbody>
	 <tr>
	 <td>
	 <img alt = "amortiguador de combustible" src="./img/productos/1564976595_36001sm.jpg">
	 <br>
	 </td>
	 <td>
	 <p> amortiguador de combustible </p>
	 </td>
	 <td>
	 <p class = "centeralign"> # 36001 </p>
	 </td>
	 </tr>
	 <tr>
	 <td> </td>
	 <td>
	 <p> Arandela de cobre </p>
	 </td>
	 <td>
	 <p class = "centeralign"> # 32003 </p>
	 </td>
	 </tr>
	 <tr>
	 <td> </td>
	 <td>
	 <p> eje de combustible en aluminio </p>
	 </td>
	 <td>
	 <p class = "centeralign"> # 36000 </p>
	 </td>
	 </tr>
	 </tbody>
	 </table>
	 <p> </p>
	 </div> 
	</div>
	<div class="sec">
	  <div class = "notabs articlecontent">
	  <p class = "Default"> Estos adaptadores convierten accesorios de un tamaño / tipo a otro. Se incluyen accesorios de rosca y la soldadura-en hechos de latón, acero y aluminio. Se utilizan generalmente en el extremo de los sistemas de combustible. </P>
	  <h2>
	  Tornillo-en Fittings
	  <br>
	  </h2>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td> </td>
	  <td colspan = "3">
	  <p>
	  <strong> Descripción </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> Parte No </strong>
	  </p>
	  </td>
	  </tr>
	  <tr class = "bglightgrey">
	  <td>
	  <h1>
	  <br>
	  </h1>
	  </td>
	  <td>
	  <p>
	  <strong> A partir del tamaño ... </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong>
	  ... al tamaño
	  <br>
	  </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> Montaje </strong>
	  </p>
	  </td>
	  <td> </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/1048772989_35001.jpg" alt = "Adaptador M12 X 1.5 Mujer a Mujer âï¿½ï¿½6 encaja 33740 regulador">
	  </td>
	  <td class = "leftalign">
	  <p> hembra M12x1,5 </p>
	  </td>
	  <td>
	  <p> -6 hombre </p>
	  </td>
	  <td>
	  <p>
	  encaja en la toma de púas
	  <br>
	  del 2-4 bar sola
	  <br>
	  regulador de presión
	  <br>
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign"> # 35001 </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/1959109149_35006.jpg" alt = "Adaptador M14 X 1.5 Mujer de âï¿½ï¿½6 Male">
	  </td>
	  <td>
	  <p class = "MinorHeader">
	  femenino M14x1,5
	  <br>
	  </p>
	  </td>
	  <td>
	  <p> -6 hombre </p>
	  </td>
	  <td> </td>
	  <td>
	  <p class = "centeralign"> # 35006 </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/1408284024_35002.jpg" alt = "Adaptador M12 X 1.5 macho a macho âï¿½ï¿½6">
	  </td>
	  <td>
	  M12x1,5 masculina
	  <br>
	  </td>
	  <td> -6 hombre </td>
	  <td> </td>
	  <td>
	  <p class = "centeralign"> # 35002 </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img alt = "Adaptador M14 X 1.5 macho a macho âï¿½ï¿½8" src="./img/productos/182758715_35003.jpg">
	  </td>
	  <td>
	  <p>
	  M14x1,5 masculina
	  <br>
	  </p>
	  </td>
	  <td>
	  <p> -8 masculino </p>
	  </td>
	  <td>
	  <p> se adapte a la bomba de combustible de 500 CV </p>
	  </td>
	  <td>
	  <p class = "centeralign"> # 35003 </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/630209364_35007.jpg" alt = "Adaptador M16 X 1.5 Mujer a Mujer âï¿½ï¿½6">
	  </td>
	  <td>
	  <p> hembra M16x1,5 </p>
	  </td>
	  <td>
	  <p> -6 hombre </p>
	  </td>
	  <td>
	  <p>
	  encaja en la toma de púas
	  <br>
	  de la barra 2-5 dual
	  <br>
	  regulador de presión
	  </p>
	  </td>
	  <td>
	  <p class = "centeralign«> # 35007 </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
	  <p> </p>
	  <h2> soldar Accesorios </h2>
	  <table>
	  <thead>
	  <tr class = "bglightgrey">
	  <td>
	  <h1>
	  <br>
	  </h1>
	  </td>
	  <td>
	  <p>
	  <strong> Tamaño </strong>
	  </p>
	  </td>
	  <td>
	  <p>
	  <strong> Parte no </strong>
	  </p>
	  </td>
	  </tr>
	  </thead>
	  <tbody>
	  <tr>
	  <td class = "centeralign">
	  <img src="./img/productos/206633348_35004.jpg" alt = "Dash 6 de soldadura en montaje">
	  </td>
	  <td>
	  <p> -6 hombre </p>
	  </td>
	  <td>
	  <p class = "centeralign"> # 35004 </p>
	  </td>
	  </tr>
	  <tr>
	  <td class = "centeralign">
	  <img alt = "Dash 8 de soldadura en montaje" src="./img/productos/737618052_35005.jpg">
	  </td>
	  <td>
	  <p> -8 masculino </p>
	  </td>
	  <td>
	  <p class = "centeralign"> # 35005 </p>
	  </td>
	  </tr>
	  </tbody>
	  </table>
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