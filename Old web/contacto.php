<!DOCTYPE HTML>
<html>
	<head>
	<head>
		<title>Contacto</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" type="text/css" href="css/cookies.css" />
		<script src="js/cookies.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="icon" href="images/soloarriba.ico" />
		
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	
	    <!-- =======================================================
        
        	
        	BY PRISTOK TECHNOLOGY © - CONTACTO FILE
        	
        	
    ======================================================= -->
	
	<body id="top">
<!-- GOOGLE ANALYTICS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99175183-1', 'auto');
  ga('send', 'pageview');

</script>
		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="#"><a href="https://www.pristok.com"><img alt="" src="images/glowblancoelmejor.png" width="100" height="45"> </a></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index">Inicio</a></li>
						<li><a href="sobrenosotros">Sobre nosotros</a></li>
						<li><a href="nuestroequipo">Nuestro equipo</a></li>
						<li><a href="contacto.php">Contacto</a></li>
					</ul>
				</nav>
			</header>
			
			<!-- GIF -->
			<div class="container">
					<div class="row">
						<div class="12u">
							<section class="special">
							<p></p>
							<p>.</p>
								<img alt="" src="images/PRISTOK.gif">
								<p></p>
								<p>.</p>
							</section>
						</div>

		<!-- Main -->
		<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Nombre y Apellido:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Su mensaje:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Enviar"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "Todos los campos son obligatorios, porfavor rellee <a href=\"\">el formulario</a> otra vez.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("info@pristok.com", $subject, $message, $from);
		echo "¡Mensaje enviado!";
	    }
    }  
?>

<!-- MAILCHIMP; LOGO & DONATION -->
<section id="two" class="wrapper style1">
				<header class="major">
					
				</header>
				<div class="container">
					<div class="row">
						<div class="4u">
							<section class="special box">
								<p><!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//pristok.us15.list-manage.com/subscribe/post?u=d57176a433f1ab6b6a711e4e6&amp;id=1feacc9a92" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d57176a433f1ab6b6a711e4e6_1feacc9a92" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup--></p>
</section>
					</div>
					
					<div class="4u">
							<section class="special box">
								<p><a href="https://www.pristok.com"><img alt="" src="images/4x4vert.png" width="230" height="230"></a></p>
							</section></div>
						
<div class="4u">
							<section class="special box">
							<h6>Le gusta nuestra empresa y le gustaria ayudarnos economicamente, donanos!</h6>
							<p>________________</p>
								<p><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="F79MZFS5FKQVE">
<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet." >
<img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
</form></p>
						<h6>Pristok Technology</h6>
							</section>
	</div>
	
	<!-- END -->
		
			<!-- Footer -->
		
			<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="12u">
						<p></p>
						<strong>QUIENES SOMOS</strong>
							<p>Somos una pequeña empresa dedicada al desarrollo de apps y webs para su negocio o proyecto personal</p>
							<ul class="icons">
								<li><a href="https://www.facebook.com/pristok.technology/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							</ul>
						</div>
					</div>
					<ul class="copyright">
						<strong>ENLACES DE INTERES</strong>
						<li><p><a href="politica-de-privacidad" title="Política de privacidad" target="new">Política de privacidad</a></p></li>
						<li><p><a href="/contacto.php" title="Contacto">Contacto</a></p></li>
						<li><p><a href="sobrenosotros" title="Sobre nosotros">Sobre nosotros</a></p></li>
						<li><p><a href="sitemap" title="Sitemap" target="new">Sitemap</a></p></li>
						<li><p>+34 609331732</p></li>
						<hr>
						<li>&copy; Pristok Technology. All rights reserved.</li>
						<li>Design: <a href="http://pristok.com">Pristok Technology</a></li></hr>
					</ul>
				</div>
				<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#000",
      "text": "#fff"
    },
    "button": {
      "background": "#fff"
    }
  },
  "theme": "classic",
  "content": {
    "message": "Esta página web hace uso de cookies para mejorar tu experiencia",
    "dismiss": "OK!",
    "link": "Quiero saber más"
  }
})});
</script>
			</footer>
		</body>
</html>