<?php

/**
 * @file
 * Theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $css: An array of CSS files for the current page.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page. Used to toggle the mission statement.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Page metadata:
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE tag.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It should be placed within the <body> tag. When selecting through CSS
 *   it's recommended that you use the body tag, e.g., "body.front". It can be
 *   manipulated through the variable $classes_array from preprocess functions.
 *   The default values can be one or more of the following:
 *   - front: Page is the home page.
 *   - not-front: Page is not the home page.
 *   - logged-in: The current viewer is logged in.
 *   - not-logged-in: The current viewer is not logged in.
 *   - node-type-[node type]: When viewing a single node, the type of that node.
 *     For example, if the node is a "Blog entry" it would result in "node-type-blog".
 *     Note that the machine name will often be in a short form of the human readable label.
 *   - page-views: Page content is generated from Views. Note: a Views block
 *     will not cause this class to appear.
 *   - page-panels: Page content is generated from Panels. Note: a Panels block
 *     will not cause this class to appear.
 *   The following only apply with the default 'sidebar_first' and 'sidebar_second' block regions:
 *     - two-sidebars: When both sidebars have content.
 *     - no-sidebars: When no sidebar content exists.
 *     - one-sidebar and sidebar-first or sidebar-second: A combination of the
 *       two classes when only one of the two sidebars have content.
 * - $node: Full node object. Contains data that may not be safe. This is only
 *   available if the current page is on the node's primary url.
 * - $menu_item: (array) A page's menu item. This is only available if the
 *   current page is in the menu.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $mission: The text of the site mission, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $search_box: HTML to display the search box, empty if search has been disabled.
 * - $primary_links (array): An array containing the Primary menu links for the
 *   site, if they have been configured.
 * - $secondary_links (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: HTML for status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - $help: Dynamic help text, mostly for admin pages.
 * - $content: The main content of the current page.
 * - $feed_icons: A string of all feed icons for the current page.
 *
 * Footer/closing data:
 * - $footer_message: The footer message as defined in the admin settings.
 * - $closure: Final closing markup from any modules that have altered the page.
 *   This variable should always be output last, after all other dynamic content.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * Regions:
 * - $content_top: Items to appear above the main content of the current page.
 * - $content_bottom: Items to appear below the main content of the current page.
 * - $navigation: Items for the navigation bar.
 * - $sidebar_first: Items for the first sidebar.
 * - $sidebar_second: Items for the second sidebar.
 * - $header: Items for the header region.
 * - $footer: Items for the footer region.
 * - $page_closure: Items to appear below the footer.
 *
 * The following variables are deprecated and will be removed in Drupal 7:
 * - $body_classes: This variable has been renamed $classes in Drupal 7.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess()
 * @see zen_process()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>">
<!--HEAD-->
<div id="header">
  <div id="topHeader">
    <div class="content">
      <div class="nav">
        <div class="active"><a href="#">Buscar</a></div>
        <div><a href="#">Ingresar </a></div>
        <div><a href="#">Registrarse</a></div>
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
  <?php if ($primary_links): ?>
    <div id="skip-link"><a href="#main-menu"><?php print t('Jump to Navigation'); ?></a></div>
  <?php endif; ?>
      <li class="active"><a href="index.html">Inicio</a></li>
      <li><a href="productos.html">Productos</a></li>
      <li><a href="#">Servicios</a></li>
      <li><a href="#">Promociones + Oulet</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
  </div>
</div>

<!--MIDDLE-->
<div class="content">
  <!--slider-->
  <div class="slide">
   <div id="s3slider">
      <ul id="s3sliderContent">
      <li class="s3sliderImage" style="display: list-item; "><a href="#">
     <img src="sites/all/themes/digital/images/img_banner-1.jpg" width="940" height="270" title="productos">
      <span class=" right" style="display: none; ">
      <img src="sites/all/themes/digital/images/banner_1.png" width="460" height="270" title="" />
      </span></a>
      </li>
      <!---->
      <li class="s3sliderImage" style="display: list-item; "><a href="#">
     <img src="sites/all/themes/digital/images/img_banner-2.jpg" width="940" height="270" title="servicios">
        <span class="right" style="display: none; ">
      <img src="sites/all/themes/digital/images/banner_2.png" width="460" height="270" title="" />  
      </span></a>
      </li>
      <!---->
      <li class="s3sliderImage" style="display: list-item; "><a href="#">
     <img src="sites/all/themes/digital/images/img_banner-3.jpg" width="940" height="270" title="promociones">
      <span class="right" style="display: none; ">
      <img src="sites/all/themes/digital/images/banner_3.png" width="460" height="270" title="" />
      </span></a>
      </li>

     <div class="clear s3sliderImage"></div>
      </ul>
    </div>
  
  </div>
  <div class="clearfix"></div>
  <!--end slider-->
  
  <!--SIDEBAR LEFT-->
  <div id="siderbar" class="left">
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
        <iframe width="300" height="250" src="http://www.youtube.com/embed/iK_5t_vHHok" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  
  <!--MAIN-->
  <div id="main">
    <h1>Productos destacados con tabla</h1>
    <div class="content white">
      <table class="catalog" cellpadding="5">
        <tr>
          <td align="center" width="33%" height="100" valign="middle"><div class="content_img"><img src="sites/all/themes/digital/images/prod.jpg" width="189" height="191" title="prod" /></div>
            <p class="name">Objetivo Nickon 35mm</p></td>
          <td align="center" width="33%" height="100" valign="middle"><div class="content_img"><img src="sites/all/themes/digital/images/prod.jpg" width="189" height="191" title="prod" /></div>
            <p class="name">Objetivo Nickon 35mm</p></td>
          <td align="center" width="33%" height="100" valign="middle"><div class="content_img"><img src="sites/all/themes/digital/images/prod.jpg" width="189" height="191" title="prod" /></div>
            <p class="name">Objetivo Nickon 35mm</p></td>
        </tr>
        <tr >
          <td align="center" width="33%" height="30" style="padding-top:10px"><a href="#" class="button">Ver producto</a></td>
          <td align="center" width="33%" height="30"><a href="#" class="button">Ver producto</a></td>
          <td align="center" width="33%" height="30"><a href="#" class="button">Ver producto</a></td>
        </tr>
      </table>
    </div>
    <h1>con div</h1>
    <div class="content white prod">
      <div style="float:left; padding:10px 0 0 7px" >
          <!--prod_box-->
            <div class="prod_box">
              <div class="center_prod_box">
                <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod.jpg" width="189" height="191" title="prod" /></a></div>
                <p class="name">Objetivo Nickon 35mm</p>
              </div>
              <div class="prod_button_region"> <a href="#" class="button">Ver producto</a> </div>
            </div>
            <!--prod_box-->
            <div class="prod_box">
              <div class="center_prod_box">
                <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod.jpg" width="189" height="191" title="prod" /></a></div>
                <p class="name">Objetivo Nickon 35mm</p>
              </div>
              <div class="prod_button_region"> <a href="#" class="button">Ver producto</a> </div>
            </div>
            <!--prod_box-->
            <div class="prod_box">
              <div class="center_prod_box">
                <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod.jpg" width="189" height="191" title="prod" /></a></div>
                <p class="name">Objetivo Nickon 35mm</p>
              </div>
              <div class="prod_button_region"> <a href="#" class="button">Ver producto</a> </div>
            </div>
          </div> 
    </div>
    <h1>con listado</h1>
    <div class="content white">
      <ol class="prod_boxes">
        <!--prod_box-->
          <li class="prod_box">
            <div class="center_prod_box">
              <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod.jpg" width="189" height="191" title="prod" /></a></div>
              <p class="name">Objetivo Nickon 35mm aksaksdklaasdas</p>
            </div>
            <div class="prod_button_region"> <a href="#" class="button">Ver producto</a> </div>
          </li>
          <!--prod_box-->
          <li class="prod_box">
            <div class="center_prod_box">
              <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod.jpg" width="189" height="191" title="prod" /></a></div>
              <p class="name">Objetivo Nickon 35mm</p>
            </div>
            <div class="prod_button_region"> <a href="#" class="button">Ver producto</a> </div>
          </li>
          <!--prod_box-->
          <li class="prod_box">
            <div class="center_prod_box">
              <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod.jpg" width="189" height="191" title="prod" /></a></div>
              <p class="name">Objetivo Nickon 35mm</p>
            </div>
            <div class="prod_button_region"> <a href="#" class="button">Ver producto</a> </div>
          </li>
        </ol>
      <ol class="prod_boxes">
        <!--prod_box-->
          <li class="prod_box">
            <div class="center_prod_box">
              <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod.jpg" width="189" height="191" title="prod" /></a></div>
              <p class="name">Objetivo Nickon 35mm aksaksdklaasdas</p>
            </div>
            <div class="prod_button_region"> <a href="#" class="button">Ver producto</a> </div>
          </li>
          <!--prod_box-->
          <li class="prod_box">
            <div class="center_prod_box">
              <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod.jpg" width="189" height="191" title="prod" /></a></div>
              <p class="name">Objetivo Nickon 35mm</p>
            </div>
            <div class="prod_button_region"> <a href="#" class="button">Ver producto</a> </div>
          </li>
          <!--prod_box-->
          <li class="prod_box">
            <div class="center_prod_box">
              <div class="product_img"><a href="#"><img src="sites/all/themes/digital/images/prod.jpg" width="189" height="191" title="prod" /></a></div>
              <p class="name">Objetivo Nickon 35mm</p>
            </div>
            <div class="prod_button_region"> <a href="#" class="button">Ver producto</a> </div>
          </li>
        </ol> 
    <div class="pagination"><a href="#" class="button">Ver todos</a> </div>
    </div> 
     <h1>Buscar por marcas</h1>
    <div class="content grey">
    <ul class="images">
    <li><a href="#"><img src="sites/all/themes/digital/images/marcas1.jpg" width="82" height="82" title="nickon" /></a></li>
    <li><a href="#"><img src="sites/all/themes/digital/images/marcas1.jpg" width="82" height="82" title="nickon" /></a></li>
    <li><a href="#"><img src="sites/all/themes/digital/images/marcas1.jpg" width="82" height="82" title="nickon" /></a></li>
    <li><a href="#"><img src="sites/all/themes/digital/images/marcas1.jpg" width="82" height="82" title="nickon" /></a></li>
    <li><a href="#"><img src="sites/all/themes/digital/images/marcas1.jpg" width="82" height="82" title="nickon" /></a></li>
    <li class="last"><a href="#"><img src="sites/all/themes/digital/images/marcas1.jpg" width="82" height="82" title="nickon" /></a></li>
    <li><a href="#"><img src="sites/all/themes/digital/images/marcas1.jpg" width="82" height="82" title="nickon" /></a></li>
    <li><a href="#"><img src="sites/all/themes/digital/images/marcas1.jpg" width="82" height="82" title="nickon" /></a></li>
    <li><a href="#"><img src="sites/all/themes/digital/images/marcas1.jpg" width="82" height="82" title="nickon" /></a></li>
    <li><a href="#"><img src="sites/all/themes/digital/images/marcas1.jpg" width="82" height="82" title="nickon" /></a></li>
    <li><a href="#"><img src="sites/all/themes/digital/images/marcas1.jpg" width="82" height="82" title="nickon" /></a></li>
   <li class="last"><a href="#"><img src="sites/all/themes/digital/images/marcas1.jpg" width="82" height="82" title="nickon" /></a></li>
    </ul>
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
  <li><a href="#">Inicio</a></li>
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
  
  
  ------------------------------------------------------


  <?php if ($primary_links): ?>
    <div id="skip-link"><a href="#main-menu"><?php print t('Jump to Navigation'); ?></a></div>
  <?php endif; ?>

  <div id="page-wrapper"><div id="page">

    <div id="header"><div class="section clearfix">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name"><strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div><!-- /#name-and-slogan -->
      <?php endif; ?>

      <?php if ($search_box): ?>
        <div id="search-box"><?php print $search_box; ?></div>
      <?php endif; ?>

      <?php print $header; ?>

    </div></div><!-- /.section, /#header -->

    <div id="main-wrapper"><div id="main" class="clearfix<?php if ($primary_links || $navigation) { print ' with-navigation'; } ?>">

      <div id="content" class="column"><div class="section">

        <?php if ($mission): ?>
          <div id="mission"><?php print $mission; ?></div>
        <?php endif; ?>

        <?php print $highlight; ?>

        <?php print $breadcrumb; ?>
        <?php if ($title): ?>
          <h1 class="title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print $messages; ?>
        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>
        <?php print $help; ?>

        <?php print $content_top; ?>

        <div id="content-area">
          <?php print $content; ?>
        </div>

        <?php print $content_bottom; ?>

        <?php if ($feed_icons): ?>
          <div class="feed-icons"><?php print $feed_icons; ?></div>
        <?php endif; ?>

      </div></div><!-- /.section, /#content -->

      <?php if ($primary_links || $navigation): ?>
        <div id="navigation"><div class="section clearfix">

          <?php print theme(array('links__system_main_menu', 'links'), $primary_links,
            array(
              'id' => 'main-menu',
              'class' => 'links clearfix',
            ),
            array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => 'element-invisible',
            ));
          ?>

          <?php print $navigation; ?>

        </div></div><!-- /.section, /#navigation -->
      <?php endif; ?>

      <?php print $sidebar_first; ?>

      <?php print $sidebar_second; ?>

    </div></div><!-- /#main, /#main-wrapper -->

    <?php if ($footer || $footer_message || $secondary_links): ?>
      <div id="footer"><div class="section">

        <?php print theme(array('links__system_secondary_menu', 'links'), $secondary_links,
          array(
            'id' => 'secondary-menu',
            'class' => 'links clearfix',
          ),
          array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => 'element-invisible',
          ));
        ?>

        <?php if ($footer_message): ?>
          <div id="footer-message"><?php print $footer_message; ?></div>
        <?php endif; ?>

        <?php print $footer; ?>

      </div></div><!-- /.section, /#footer -->
    <?php endif; ?>

  </div></div><!-- /#page, /#page-wrapper -->

  <?php print $page_closure; ?>

  <?php print $closure; ?>

</body>
</html>
