<?php

if ($_SERVER['REQUEST_URI'] == '/post/el-adios-una-nueva-etapa'){
	
	header("Location: http://scriptogr.am/albertogonzalezcatalan/post/el-adios-una-nueva-etapa");
	exit;
	
}

$send = false;
if (isset($_POST)){
	
	if (isset($_POST['name']) &&  isset($_POST['email']) && isset($_POST['message'])){
		
		$from = strip_tags($_POST['email']);
		$name = strip_tags($_POST['name']);
		$message = strip_tags($_POST['message']);
		
		$title = 'Contacto Alberto Web';
		
		$msg .= $name.'<br/>';
		$msg .= $from.'<br/>';
		$msg .= $message;
		
					
		mail('albertogonzalezcatalan@gmail.com', $title, $msg);
		$send = true;
	}

}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Alberto González Catalán - Arquitecto Web, Diseño y desarrollo Web</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Consultoria web, diseño UX / UI, Crowdfunding, crowdsourcing. Desarrollo de producto, API, arquitectura Web"/>
	<meta name="keywords" content="crowdfunding, crowdsourcing, api, web api, producto web, consultoria web, diseño UX, diseño UI, diseño web, diseño web empresas, diseño web profesional" />
	<meta name="copyright" content="Alberto González Catalán - Arquitecto Web, Diseño y desarrollo Web"/>
	<meta name="Publisher" content="Alberto González Catalán - Arquitecto Web, Diseño y desarrollo Web"/>
	<meta name="DC.title" content="Alberto González Catalán - Arquitecto Web, Diseño y desarrollo Web" />
	<meta name="DC.subject" content="crowdfunding, crowdsourcing, api, web api, producto web, consultoria web, diseño UX, diseño UI, diseño web, diseño web empresas, diseño web profesional" />
	<meta name="DC.description" content=" Consultoria web, diseño UX / UI, Crowdfunding, crowdsourcing. Desarrollo de producto, API, arquitectura Web" /> 
	<meta name="robot" content="index,follow" />
    <!-- css -->
    <link rel="shortcut icon" href="http://elcafedelcto.com/abe/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="http://elcafedelcto.com/abe/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://elcafedelcto.com/abe/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://elcafedelcto.com/abe/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="http://elcafedelcto.com/abe/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="http://elcafedelcto.com/abe/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="http://elcafedelcto.com/abe/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="http://elcafedelcto.com/abe/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="http://elcafedelcto.com/abe/favicons/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="http://elcafedelcto.com/abe/favicons/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="http://elcafedelcto.com/abe/favicons/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="http://elcafedelcto.com/abe/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="http://elcafedelcto.com/abe/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="http://elcafedelcto.com/abe/favicons/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="msapplication-TileImage" content="http://elcafedelcto.com/abe/favicons/mstile-144x144.png">
	<meta name="msapplication-config" content="http://elcafedelcto.com/abe/favicons/browserconfig.xml">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
 </head>
  <body>
	<div class="menu-area">
	<div id="dl-menu" class="dl-menuwrapper">
				<button class="dl-trigger">Menú</button>
				<ul class="dl-menu">
					<li><a href="#intro">Inicio</a></li>
					<li><a href="#services">Servicios</a></li>
					<li><a href="#about">Acerca</a></li>
					<li><a href="http://www.elcafedelcto.com" target="_blank">Blog</a></li>
					<li><a href="#contact">Contacto</a></li>
					
					
				</ul>
			</div><!-- /dl-menuwrapper -->
	</div>	

	  <!-- intro area -->	  
	  <div id="intro">
	  
			<div class="intro-text">
				<div class="container">
					<div class="row">
					
						
					<div class="col-md-12">
			
						<div class="brand">
							<h1><a href="#">Alberto González</a></h1>
							<div class="line-spacer"></div>
							<p><span>Arquitecto Web - Diseño y desarrollo Web</span></p>
						</div>
					</div>
					</div>
				</div>
		 	</div>
			
	 </div>
	  
 <!-- Services -->
	 <section id="services" class="home-section bg-white">
		<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Servicios</h2>
					 <p>Diseño y desarrollo de diferentes productos que se ajustan a tus necesidades vía presupuesto.</p>
					</div>
				  </div>
			  </div>
			  <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-code fa-4x"></i>
						<h4>Web Design</h4>
						<p>Diseño + Maquetación Web.</p>
						<p>Análisis y diseño UI/UX.</p>
						<p>Identidad corporativa.</p>
						<a class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">+ Detalles</a>
					</div>
                </div>
                
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">Web Design</h4>
				      </div>
				      <div class="modal-body">
				        Desarrollamos la Web a tu medida realizando un estudio de usabilidad y adaptación de la interfaz de usuario.
				        Los diferentes servicios de diseño, maquetación, análisis de UX se pueden contratar por separado.
				        
				        <ul style="margin: 10px;text-align: left;margin-left: 30%;">
					        <li>Diseño + Maquetación Web.</li>
							<li>Diseño Corporativo.</li>
					        <li>Diseño de interfaces (UI).</li>
							<li>Experiencia de usuario (UX).</li>
							
				        </ul>
				        
				        La tarifas van desde 400€* en adelante en función del proyecto y presupuesto.<br/>* (IVA no incluido).  
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				      </div>
				    </div>
				  </div>
				</div>
                
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-puzzle-piece fa-4x"></i>
						<h4>Product Design</h4>
						<p>Diseño y desarrollo arquitectura.</p>
						<p>Desarrollo y despliegue de producto.</p>
						<p>Diseño y desarrollo Web API.</p>
						<a class="btn btn-primary" data-toggle="modal" data-target=".bs2-example-modal-lg">+ Detalles</a>
					</div>
                </div>
                
                <div class="modal fade bs2-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">Product Design</h4>
				      </div>
				      <div class="modal-body">
				        Productos más concretos que requieren de un desarrollo especifico. Plataformas, Web Services, API, Arquitecturas Web.
				        				        
				        <ul style="margin: 10px;text-align: left;margin-left: 30%;">
					        <li>Diseño + Desarrollo arquitectura de la plataforma.</li>
							<li>Despliegue de producto.</li>
					        <li>Diseño + Desarrollo de Web Services y API.</li>
					        <li>Documentación de tecnología.</li>
					        <li>Desarrollo de Framework.</li>
					        <li>Extensiones de producto.</li>
					        <li>Diseño de producto.</li>
				        </ul>
				        
				        La tarifas van desde 1.000€* en adelante en función del proyecto y presupuesto.<br/>Mantenimiento desde 50€*/mes (en función de las horas).<br/>* (IVA no incluido).  
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				      </div>
				    </div>
				  </div>
				</div>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-cog fa-4x"></i>
						<h4>Crowdfunding</h4>
						<p>Desarrollo de plataforma de crowdfunding.</p>
						<p>Productos crowdsourcing a medida.</p>
						<p>Asesoramiento crowdfunding.</p>
						<a class="btn btn-primary" data-toggle="modal" data-target=".bs3-example-modal-lg">+ Detalles</a>
					</div>
                </div>
                
                <div class="modal fade bs3-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">Crowdfunding</h4>
				      </div>
				      <div class="modal-body">
				        Productos Crowdfunding/Crowdsourcing a medida gracias a mi experiencia en el sector con plataformas consolidadas.
				        				        
				        <ul style="margin: 10px;text-align: left;margin-left: 30%;">
					        <li>Desarrollo + Diseño de plataforma de crowdfunding.</li>
					        <li>Diseño + Desarrollo de Web Services y API.</li>
					        <li>Documentación de tecnología.</li>
					        <li>Desarrollo de Framework.</li>
					        <li>Extensiones de producto.</li>
					        <li>Diseño de producto.</li>
					        <li>Asesoramiento crowdfunding (Tarifa variable externa).</li>
				        </ul>
				        
				        La tarifas van desde 1.200€* en adelante en función del proyecto y presupuesto.<br/>Mantenimiento desde 150€*/mes (en función de las horas)<br/>* (IVA no incluido).  
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				      </div>
				    </div>
				  </div>
				</div>
				
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-users fa-4x"></i>
						<h4>Social Services</h4>
						<p>Community Manager.</p>
						<p>Social Media.</p>
						<p>Marketing Online.</p>
						<p>Marca personal.</p>
						<a class="btn btn-primary" data-toggle="modal" data-target=".bs4-example-modal-lg">+ Detalles</a>
					</div>
                </div>
                
                <div class="modal fade bs4-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">Social Services</h4>
				      </div>
				      <div class="modal-body">
				        Servicios adicionales enfocados al marketing online, redes sociales y gestión de la marca personal.
				        				        
				        <ul style="margin: 10px;text-align: left;margin-left: 30%;">
					        <li>Consolidación de marca.</li>
							<li>Marketing online.</li>
					        <li>Community manager.</li>
					        <li>Email marketing.</li>
					        <li>Comunicación gráfica.</li>
				        </ul>
				        
				        La tarifas van desde 400€* en adelante en función del proyecto y presupuesto.<br/>* (IVA no incluido).  
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				      </div>
				    </div>
				  </div>
				</div>
				
			  </div>	
		</div>
	</section>
	

	  <!-- spacer -->	  
		<section id="spacer1" class="home-section spacer">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="color-light">
						<h2 class="wow bounceInDown" data-wow-delay="0.6s">"Alberto es un desarrollador excelente, siempre pendiente de futuros cambios o ampliaciones del sistema, no deja nada al azar, ni deja que nada se le escape, para proyectos tecnológicos contar con Alberto es un valor seguro, tanto en eficiencia como en productividad."</h2>
						<p class="lead wow bounceInUp" data-wow-delay="0.7s">Carlos Beneyto, Co-Founder & CTO de BetRocket</p>	
						</div>
					</div>				
				</div>
            </div>
		</section>	  
	  
	  <!-- About -->
	  <section id="about" class="home-section bg-white">
		<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Acerca</h2>
					 <p>Más de 5 años desarrollando productos Web.</p>
					</div>
				  </div>
			  </div>
			  <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                    <img src="http://elcafedelcto.com/abe/albertoProjeggt.png" alt="Alberto" class="img-responsive" />
                    <h4>Alberto González</h4>
                    <p>Pianista del código</p>
					</div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" data-wow-delay="0.3s">
					
                    <p style="text-align: left;">Soy Alberto González Catalán. Autodidacta y apasionado de la tecnología desde pequeño.<br/><br/>

						Arquitecto Web. Creator. Escritor Nerd. Emprendedor freelance. <br/><br/>
						
						Actualmente escribo en <a href="http://elcafedelcto.com" target="_blank"><strong>El café del CTO</strong></a>, un blog de contenidos tecnológicos, startups e internet.<br/><br/>
						
						He cofundado la plataforma de crowdfunding <a href="http://www.projeggt.com" target="_blank"><strong>Projeggt</strong></a> y <a href="http://www.juntalia.com" target="_blank"><strong>Juntalia</strong></a>. También el medio digital sobre crowdfunding y crowdsourcing <a href="http://www.crowdacy.com" target="_blank"><strong>Crowdacy</strong></a>.<br/><br/>
						
						Como amante de la tecnología también fundé el podcast de actualidad tecnológica <strong>Crónicas de un Bit</strong> y la desarrolladora de apps para iOS, <strong>ifCoders</strong>.<br/><br/>
						
						También fui finalista de StartupBus Europe 2012 y semifinalista en la edición de 2013. Además he participado en multitud de proyectos. 
						
				
						</p>
					</div>
				
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					                    <h4 style="margin-top:-5px;">En prensa</h4>
                    <p style="text-align:left;"> Algunas de mis apariciones en medios actualizado a fecha de Mayo 2014:
                    <ul class="press">
						<li><a href="http://www.diariocritico.com/emprendedores-2020/emprendedores-2020/historias-ejemplares/crowdfunding/projeggt/456310">Artículo en Diario Crítico (Mayo 2014)</a></li>
						<li><a href="http://www.canarias7.es/articulo.cfm?id=322749">Noticia en Canarias7 con Juntalia (Enero 2014)</li>
						<li><a href="http://ondainversion.com/programas/invirtiendo-la-manana/economia-de-calle/consultorio-crowdfunding">Consultorio Crowdfunding en la radio OndaInversión, todos los lunes por la mañana (Diciembre 2013)</a></li>
						<li>Reportaje sobre Crowdfunding en La Vanguardia (físico) (26 Noviembre 2013)</li>
						<li><a href="http://mastechknow.wordpress.com/2013/10/29/agenda-stbus-2013-tercer-dia-mestre-treviso-viena/">Aparición en Agenda StBus 2013 de Mas TechNow</a></li>
						<li><a href="http://smoda.elpais.com/articulos/crowdfunding-el-poder-del-dinero-colectivo/3954">Artículo en el suplemento SModa de El País</a></li>
						<li><a href="http://www.emprendedores.es/revista/revista-emprendedores-septiembre-2013">Artículo en la revista Emprendedores (septiembre 2013)</a></li>
						<li><a href="http://www.ara.cat/premium/suplements/emprenem/Reinventat_0_943105692.html">Reportaje en el periodico Ara, suplemento Emprenem</a></li>
						<li>Entrevista en RNE Ràdio 4 - Directe 4.0 por BizBarcelona 2013: <a href="http://www.rtve.es/alacarta/audios/directe-40/directe-40-rami-remeis-cultura-club-imitacions-javi-princep-bizbarcelona/1857187/">Parte 1</a> | <a href="http://www.rtve.es/alacarta/audios/directe-40/directe-40-cuina-40-denuncia-40-jardi-40-portada-del-punt-avui/1857307/">Parte 2</a></li>
				
						<li><a href="http://agoranews.es/2012/12/11/recibimos-stratup-bus-espana-su-llegada-madrid">Entrevista en Agora News hablando de Startupbus 2012</a></li>
						<li><a href="http://www.estartupbus.es/edicion2012.html">Aparición y entrevista en StartupBus 2012</a></li>
						
						</ul></p>
					
					</div>
				
                </div>
                
			  </div>			  
		  </div>	  
	  </section>
	  	 	 
	  	 	

	
		<!-- spacer 2 -->	  
		<section id="spacer2" class="home-section spacer">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="color-light">
						<h2 class="wow bounceInDown" data-wow-delay="0.6s">"Alberto es, a nivel técnico, un solucionador de problemas. Aporta ideas creativas y recursos tecnológicos para el desarrollo de aplicaciones. Además, genera muy buen ambiente en el grupo de trabajo. Un puntal."</h2>
						<p class="lead wow bounceInUp" data-wow-delay="0.7s">Héctor Muñoz, Co-Founder de Crowdacy</p>	
						</div>
					</div>				
				</div>
            </div>
		</section>	
	  
	 <!-- Contact -->
	  <section id="contact" class="home-section bg-white">
	  	<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Contacto</h2>
					 <p>Contacta conmigo para solicitar presupuesto.</p>
					</div>
				  </div>
			  </div>

	  		<div class="row">
	  			<div class="col-md-offset-1 col-md-10">

				<form class="form-horizontal" role="form" method="post" action="">
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" id="inputName" name="name" placeholder="Nombre">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <textarea name="message" class="form-control" rows="3" placeholder="Mensaje"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					 <button type="submit" class="btn btn-theme btn-lg btn-block">Enviar mensaje</button>
					</div>
				  </div>
				  
				  <?php if ($send){ 
					  
					  echo '<div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						Mensaje enviado correctamente
					</div>
				  </div>';
				  } ?>
				  
				  
				</form>
	
	  			</div>
			
				
	  		</div>
			<div class="row mar-top30 ">
				<div class="col-md-offset-2 col-md-8">
					<h5>Encuéntrame en redes sociales</h5>
					<ul class="social-network">
						<li><a href="https://twitter.com/albertogonzcat" target="_blank">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="https://www.facebook.com/alberto.abelabs" target="_blank">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="https://plus.google.com/+AlbertoGonzálezCatalán1" target="_blank">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="http://es.linkedin.com/in/albertogonzalezcatalan/" target="_blank">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="http://github.com/albertogonzcat" target="_blank">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-github fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
					</ul>
				</div>				
			</div>

	  	</div>
	  </section>  

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>&copy; Alberto González Catalán <?php echo date('Y'); ?></p>
				</div>
			</div>		
		</div>	
	</footer>
	 
	 <!-- js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
  	
  	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-44996014-1', 'albertogonzalezcatalan.com');
	  ga('send', 'pageview');
	
	  </script>
</html>