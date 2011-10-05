<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script>
		$(document).ready(function() {
			$(function() {
				Cufon.replace('.eu', { fontFamily: 'Euromode', hover: true })
			});
		});
  </script>
</head>
<body class="<?php print $classes; ?>">
<!--HEAD-->
<div id="header">
  <div id="topHeader">
    <div class="content">
      <div class="nav">
        <div class="active"><a href="#">Buscar</a></div>
        <div><a href="user/login">Ingresar </a></div>
        <div><a href="user/register">Registrarse</a></div>
      </div>
    </div>
  </div>
  <div class="content">
    <div id="logo"><a href="#"><img src="sites/all/themes/digital/images/logo.png" /></a></div>
    <div class="slogan">
      <h1 class="eu"><?php print $site_name; ?></h1>
      <p><?php print $site_slogan; ?></p>
    </div>
    <form class="searchform">
      <input class="searchfield" type="text" value="Buscar..." onfocus="if (this.value == 'Buscar...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Buscar...';}" />
      <input name="accion" value="buscar" type="hidden">
      <input class="search_button" value="" id="search-submit" type="submit">
    </form>
  </div>
</div>
<!--end HEAD-->
<!--navigation-->
<div id="nav_region">
  <div class="content">
    <ul class="nav_menu">
      <li class="active"><a href="<?php echo $front_page;?>">Inicio</a></li>
      <li><a href="<?php echo $front_page;?>">Productos</a></li>
      <li><a href="<?php echo $front_page;?>">Promociones + Oulet</a></li>
      <li><a href="<?php echo $front_page;?>">Servicios</a></li>
      <li><a href="<?php echo $front_page;?>">Contacto</a></li>
    </ul>
  </div>
</div>