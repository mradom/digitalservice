<!-- HEADER --> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
<script type="text/javascript" src="/digitalservice/sites/all/themes/digital/s3/s3Slider.js"></script>
<script type="text/javascript" src="/digitalservice/sites/all/themes/digital/js/jquery.nestedAccordion.js"></script>

  <script>
		$(document).ready(function() {
			//$("#main_side").accordion({initShow : "#current"});
			Cufon.replace('.eu', { fontFamily: 'Euromode', hover: true });
			$("#main_side ul.accordion").expandAll({
      				trigger: "li", 
      				ref: "", 
      				cllpsEl : "ul", 
      				state : '',
      				oneSwitch : false
  				});
		});
  </script>
<style type="text/css">
cufon {
	text-indent:0!important;
}
</style>
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
      <li><a href="?q=content/contacto">Contacto</a></li>
    </ul>
  </div>
</div>

<!--MIDDLE-->
<div class="content page">
  <!--SIDEBAR LEFT-->
	<div id="siderbar" class="left">
  		<div id="main_side">
   			<h1>Productos</h1>
  			<ul class="accordion"> 
				<li>C&aacute;maras reflex digitales
					<ul> 
                 		<li><a  href="#">todas</a></li> 
						<li>marcas mas vendidas
                        	<ul> 
								<li><a  href="#">Nikon</a></li> 
								<li><a  href="#">Canon</a>
									<ul> 
                            			<li><a  href="#">En promocion</a></li>
									</ul>
								</li>
								<li><a  href="#">Pannasonic</a> </li> 
							</ul> 
						</li> 
					</ul> 
				</li> 
				<li>Camaras compactas
					<ul> 
						<li><a  href="#">todas</a></li> 
						<li>Marcas mas vendidas
							<ul> 
                            	<li><a  href="#">Nikon</a></li>
                                <li><a  href="#">Sony</a></li>
                                <li><a  href="#">En promocion</a></li> 
							</ul>
						</li>
					</ul> 
				</li> 
                <li><a  href="#">Camaras de video</a></li>
                <li><a  href="#">Filtros</a></li>
                <li><a  href="#">Mochilas</a>
                	<ul> 
                    	<li><a  href="#">Estuches</a></li>  
					</ul>
				</li>
                <li><a  href="#">Fundas</a>
                	<ul> 
                    	<li><a  href="#">sumergibles</a></li>  
					</ul>
				</li>
                <li><a  href="#">Cargadores</a></li>
                <li><a  href="#">Baterias</a></li>
                <li><a  href="#">Tripodes</a></li>
                <li><a  href="#">Flashes</a></li>
                <li><a  href="#">Memorias</a></li>
                <li><a  href="#">Tripodes</a></li>
			</ul> <!-- end Example 3 --> 
  		</div>
    	<!--login-->
    	<div class="content login">
      		<h1>Controla tu orden aqui</h1>
      		<div class="icon"><img src="sites/all/themes/digital/images/login_icon.jpg" /></div>
      		<form class="log" method="post" action="manejador.php">
        		<label for="idname">Usuario:</label>
        		<input class="item" type="text" id="idname" name="nombre" />
        		<br />
        		<label for="idpass">Contraseña:</label>
        		<input class="item" type="password" id="idpass" name="contraseña" />
        		<br />
        		<input class="button"  type="submit" value="Enviar" />
      		</form>
      		<p class="coment">Aún no tienés tu cuenta en Digital Services?<br />
        	<a href="#">Registrate aquí</a> y accedé a beneficios exclusivos.</p>
		</div>
    	<!--novedades-->
    	<div class="content">
      		<h1>Novedades</h1>
      	<div>
	        <iframe width="300" height="250" src="http://www.youtube.com/embed/Ht_sdb16LLQ" frameborder="0" allowfullscreen></iframe>
      	</div>
    </div>
     <!--tabs-->
		aca van los tabs de drupal...
</div>
<!--MAIN-->
<!-- ########################################### -->
<div id="main">
	<div class="breadcrumbs">
		<a href="#">home &rsaquo;</a>
		<a href="#">productos &rsaquo;</a>
		<a class="current" href="#">camaras digitales</a>
	</div>
    <h1>Camaras Digitales</h1>
    <div class="content white">
    	<?php print $form ?>
		<?php print $content; ?>
    <div class="pagination">
     <div class="pager-content"> 
      <a title="« Primera" class="first" href="#"> « Primera </a> 
     <a title="« Previous" class="previous" href="#"> « Anterior </a> 
      <a title="3" class="page" href="#"> 3 </a> 
      <a title="4" class="page" href="#"> 4 </a> 
      <span class="current"> 5 </span> 
      <a title="6" class="page" href="#"> 6 </a> 
      <a title="7" class="page" href="#"> 7 </a> 
      <a title="8" class="page" href="#"> 8 </a> 
      <a title="Siguiente »" class="next" href="#">Siguiente » </a>
      <a title="Última »" class="last" href="#"> Última » </a> 
    </div>     
    </div>
    </div><!--end prodcutos-->
     
    <h1>Tambien te puede interesar</h1>
    <div class="content white">
    <ol class=" prod_boxes_mini">
           <li>
            <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod-mini.jpg" width="120" height="120"title="prod" /></a></div>
            <p class="name">Objetivo Nickon 35mm</p>
            <div class="prod_button_region"> <a href="#" class="button">Ver producto</a></div>
          </li>
          <li>
            <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod-mini.jpg" width="120" height="120"title="prod" /></a></div>
            <p class="name">Objetivo Nickon 35mm</p>
            <div class="prod_button_region"> <a href="#" class="button">Ver producto</a></div>
          </li>
         <li>
            <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod-mini.jpg" width="120" height="120"title="prod" /></a></div>
            <p class="name">Objetivo Nickon 35mm</p>
            <div class="prod_button_region"> <a href="#" class="button">Ver producto</a></div>
          </li>
         <li>
            <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod-mini.jpg" width="120" height="120"title="prod" /></a></div>
            <p class="name">Objetivo Nickon 35mm as;djaklsdjlajsldkj</p>
            <div class="prod_button_region"> <a href="#" class="button">Ver producto</a></div>
          </li>
    </ol>
    </div>
    
        
  </div><!--end MAIN-->
  <div class="clearfix"></div>
 </div><!--end MIDDLE-->
 <!--FOOTER-->
  <div id="footer">
  <div id="topfoot">
  <div class="content">
  <div class="banner_topFooter">
  <img src="sites/all/themes/digital/images/topFooter_icon.png" width="82" height="82" />
  <h2><a href="#">Reparamos tu c&aacute;mara o GPS en solo 7 días y al menor costo *</a></h2>
  <p>Consutlanos al <a href="#">info@digitalservices.com.ar</a> o llamanos al (0351) 4678912<br />
*Tiempos aproximados </p>
  </div>
  </div>
  </div>
  <div class="content">
  <div class="footer_column">
  <div class="logoFooter"><img src="sites/all/themes/digital/images/logo_footer.jpg" width="120" height="100" title="logo" /></div>
  <p class="legal">Belgrano 94 - Córdoba - Argentina<br />

Tel. 0351 4237572<br />
<br />

&copy; 2011 www.digitalservices.com.ar  | <a href="#"> Aviso legal</a></p>
  </div>
  <div class="footer_column" style="border-left:1px solid #464646; border-right:1px solid #464646;">
  <ul class="main">
  <li><a href="<?php echo $front_page;?>">Inicio</a></li>
  <li><a href="#">Productos</a></li>
  <li><a href="#">Servicios</a></li>
  <li><a href="#">Promociones</a></li>
  <li><a href="#">Contacto</a></li>
  <li class="social"><a href="#"><img src="sites/all/themes/digital/images/face_icon.png" width="30" height="30" title="facebook" /></a></li>

  </ul>
  </div>
  <div class="footer_column"><a href="#"><img src="sites/all/themes/digital/images/banner_footer.jpg" width="309" height="258" title="banner" /></a></div>
  </div>
  <div class="clearfix"></div>
  </div>
  <!-- ######### NO OLVIDAR DE QUITAR ############# -->
  <script>
  	$("#main_side").accordion({initShow : "#current"});
  </script>
</body>
</html>
