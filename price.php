<?php
/*
Template Name: Прайс лист
*/
$theme_path = get_template_directory_uri();

get_header();
?>
<div id="price-page">
  <div class="container">
    <div class="price-menu">
      <div class="menu-item active" data-id="1">Евровагонка</div>
      <div class="menu-item active" data-id="2">Пол шпунтованный</div>
      <div class="menu-item active" data-id="3">Имитация бруса</div>
      <div class="menu-item active" data-id="4">Блок-хаус</div>
      <div class="menu-item active" data-id="6">Стеновая панель</div>
      <div class="menu-item active" data-id="7">Доска строганная</div>
      <div class="menu-item active" data-id="5">Погонаж</div>
      <div class="menu-item active" data-id="8">Брусок</div>
      <div class="menu-item active" data-id="9">Двери из массива</div>
    </div>
    <div data-id="1" class="price-table show">
      <div class="table-title">
        Евровагонка
      </div>
      <div class="table-container">
        <?php echo do_shortcode( '[table id=1 /]' ); ?>
      </div>
    </div>

    <div data-id="2" class="price-table">
      <div class="table-title">
        Пол шпунтованный
      </div>
      <div class="table-container">
        <?php echo do_shortcode( '[table id=2 /]' ); ?>
      </div>
    </div>

    <div data-id="3" class="price-table">
      <div class="table-title">
        Имитация бруса
      </div>
      <div class="table-container">
        <?php echo do_shortcode( '[table id=3 /]' ); ?>
      </div>
    </div>

    <div data-id="4" class="price-table">
      <div class="table-title">
        Блок-хаус
      </div>
      <div class="table-container">
        <?php echo do_shortcode( '[table id=4 /]' ); ?>
      </div>
    </div>

    <div data-id="6" class="price-table">
      <div class="table-title">
        Стеновая панель
      </div>
      <div class="table-container">
        <?php echo do_shortcode( '[table id=6 /]' ); ?>
      </div>
    </div>

    <div data-id="7" class="price-table">
      <div class="table-title">
        Доска строганная
      </div>
      <div class="table-container">
        <?php echo do_shortcode( '[table id=7 /]' ); ?>
      </div>
    </div>

    <div data-id="5" class="price-table">
      <div class="table-title">
        Погонаж
      </div>
      <div class="table-container">
        <?php echo do_shortcode( '[table id=5 /]' ); ?>
      </div>
    </div>

    <div data-id="8" class="price-table">
      <div class="table-title">
        Брусок
      </div>
      <div class="table-container">
        <?php echo do_shortcode( '[table id=8 /]' ); ?>
      </div>
    </div>

    <div data-id="9" class="price-table">
      <div class="table-title">
        Двери из массива (сосна)
      </div>
      <div class="table-container">
        <?php echo do_shortcode( '[table id=9 /]' ); ?>
      </div>
    </div>

  </div>
</div>

<script src="<?php echo $theme_path; ?>/js/price.js"></script>

<?php
get_footer();
