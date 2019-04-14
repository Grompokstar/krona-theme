<?php
$theme_path = get_template_directory_uri();

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body>
<div id="page" class="site">
  <header id="header">
    <div class="pre-header"></div>
    <div class="main-header">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="header-left-part">
          <div class="main-menu">
            <div class="menu-item"><a href="#services">Услуги</a></div>
            <div class="menu-item"><a href="#">О&nbsp;нас</a></div>
            <div class="menu-item"><a href="#">Акции</a></div>
            <div class="menu-item"><a href="#">Контакты</a></div>
          </div>
        </div>
        <img class="logo" src="<?php echo $theme_path; ?>/images/logo.png" alt="logo" />
        <div class="header-right-part">
          <div class="main-menu">
            <div class="menu-item"><a href="#">Цены</a></div>
          </div>
          <div class="header-contacts">
            <div class="phone m2b_8">
              <img src="<?php echo $theme_path; ?>/images/phone-ico.svg">
              <a href="tel:+79274646777">+7&nbsp;(927)&nbsp;464-67-77</a>
            </div>
            <div class="email">
              <a href="mailto:krona.wood@ya.ru">krona.wood@ya.ru</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

	<div id="content" class="site-content">
