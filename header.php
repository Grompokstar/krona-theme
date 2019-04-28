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
  <header id="header" class="pinned">
    <div class="pre-header"></div>
    <div class="main-header">
      <div class="container">
        <div class="header-container">
          <div class="header-left-part">
            <div class="mobile-menu-btn">
              <img src="<?php echo $theme_path; ?>/images/burg.svg">
            </div>
            <div class="main-menu">
              <div class="menu-item"><a href="/#services">Услуги</a></div>
              <div class="menu-item"><a href="/#about-company">О&nbsp;нас</a></div>
              <div class="menu-item"><a href="/#news">Акции</a></div>
              <div class="menu-item"><a href="#footer">Контакты</a></div>
            </div>
          </div>
          <a href="/">
            <img class="logo" src="<?php echo $theme_path; ?>/images/logo.svg" alt="logo" />
          </a>
          <div class="header-right-part">
            <div class="main-menu">
              <div class="menu-item"><a href="/price">Цены</a></div>
            </div>
            <div class="header-contacts">
              <div class="phone">
                <img src="<?php echo $theme_path; ?>/images/phone-ico.svg">
                <a href="tel:+79274646777">+7&nbsp;(927)&nbsp;464-67-77</a>
              </div>
              <div class="email">
                <a href="mailto:krona.wood@ya.ru">krona.wood@ya.ru</a>
              </div>
              <a class="email-btn krona-btn" href="mailto:krona.wood@ya.ru">
                <img src="<?php echo $theme_path; ?>/images/email-box.svg">
              </a>
              <a class="call-btn krona-btn dark-bg" href="tel:+79274646777">
                <img src="<?php echo $theme_path; ?>/images/phone-white.svg">
                <span class="text">
                  Позвонить
                </span>
              </a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

	<div id="content" class="site-content">
