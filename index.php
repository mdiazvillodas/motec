<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Motec Latinoamérica</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>	
	<link rel="shortcut icon" href="favicon.ico">
	    <meta http-equiv=”Content-Type” content=”text/html; charset=CHARSET” />
	<script type="text/javascript" src="./js/mootools.js"></script>
	<script type="text/javascript" src="./js/mootools-more.js"></script>
	<script type="text/javascript" src="./js/MooDropMenu.js"></script>
	<script type="text/javascript" src="./js/slideshow.js"></script>
	<script type="text/javascript" src="./js/funciones.js"></script>
        <script type="text/javascript">
		function openLinkSimple(href, div){
			var request = new Request.HTML({
                        url: href,
                        method: 'get',
                        update: $(div),
                        onFailure: function(xhr){
                                $(div).setProperty('html', xhr.responseText);
                                }
                        });
			request.send();
			}
	</script>
	<script type="text/javascript">
	window.addEvent('domready',function(){
	
		$('nav').MooDropMenu({
			onOpen: function(el){
				el.fade('in')
			},
			onClose: function(el){
				el.fade('out');
			},
			onInitialize: function(el){
				el.fade('hide').set('tween', {duration:500});
			}
		});
	
	});
	</script>
	<script>
		window.addEvent('domready', function(){
			var data = { '1.jpg': { caption: '1' }, '2.jpg': { caption: '2' }, '3.jpg': { caption: '3' }, '4.jpg': { caption: '4' }};

			new Slideshow('overlap', data, { captions: { delay: 1000 }, delay: 3000, height: 270, hu: 'img/slide/', width: 800 });

		});
	</script>
    </head>
    <body>
	<div id="center">
	    <div class="shadow">
		<div class="header">
		    <a href="index.php">.</a>
		</div>
		<div id="nav-wrapper">
		    <ul id="nav">
			<li class="item">
			    <span>Home</span>
			</li>
			<li class="item">
			    <span>Ventas</span>
			    <ul>
				<li>
				    <span>Text1</span>
				</li>
				<li>
				    <span>Text1</span>
				</li>
				<li>
				    <span>Text1</span>
				</li>
			    </ul>
			</li>
			<li class="item">
			    <span>Soporte</span>
			    <ul>
				<li>
				    <span>Text1</span>
				</li>
				<li>
				    <span>Text1</span>
				</li>
				<li>
				    <span>Text1</span>
				</li>
			    </ul>
			</li>
			<li onclick="openLinkSimple('./productos/productos.php','contenido');" class="item">
			    <span>Productos</span>
			</li>
		    </ul>
		</div>
		<div id="contenido" class="main">
		    <div id="overlap" class="slideshow">
			    <img src="img/slide/1.jpg" alt="1">
		    </div>
		    <div id="quicklinks">
			<h3>
			    <span>Acceso Rápido</span>
			</h3>
			<ul>
			    <li>
				<h4>¿Por qué elegir MoTec?</h4>
				<p>Los principales beneficios del uso de un sistema MoTeC y lo que usted debe saber antes de comprar.</p>
			    </li>
			</ul>
		    </div>
		</div>
	    </div>
	</div>
    </body>
	<script type="text/javascript">
		var itema = document.getElements('.item');
		itema.addEvent('click', function() {
		    itema.removeClass('active');
		    this.addClass('active');
		});
	</script>
</html>