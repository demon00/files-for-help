<?php
/*
Template Name: DmitryRu
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Чистик Дмитрий</title>
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]--> 
<?php wp_head(); ?>
  </head>
  <body>
  	<header class="header">
    <span class="nav__krest" id="x"></span>
  		<nav class="main-nav">
  			<div class="main-logo-svg">
  				<a href="<?php echo home_url(); ?>" class="nav__logo_a" title="Dmitry Chistik"></a>	
          <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" class="logo-svg" alt="logo">
  			</div>
  			<ul class="nav__ul">
  				<li class="nav__li active">
  					<a href="#home" class="nav__a" title="Home">ГЛАВНАЯ</a>
  				</li>
  				<li class="nav__li">
  					<a href="#about" class="nav__a" title="About">ОБО МНЕ</a>
  				</li>
  				<li class="nav__li">
  					<a href="#works" class="nav__a" title="Work">РАБОТЫ</a>
  				</li>
  				<li class="nav__li">
  					<a href="#contact" class="nav__a nav_a-cont" title="Contact">КОНТАКТЫ</a>
  				</li>
  			</ul>
  		</nav>
  	</header>