<?php
/*
Template Name: Главная страница
*/
$theme_path = get_template_directory_uri();

get_header();
?>
<section class="mainpage-slider">
  <div class="slide-item slide-1">
    <div class="container">
      <div class="slider-content">
        <div class="title m2b_42">
          <h1>Изделия из&nbsp;хвойной древесины из&nbsp;северных регионов России
            в&nbsp;Набережных&nbsp;Челнах</h1>
        </div>
        <div class="description m2b_60">
          У&nbsp;нас вы можете купить пиломатериалы и&nbsp;погонажные&nbsp;изделия
          (вагонка, евровагонка, доска, брус, фальшбрус, блок-хаус и&nbsp;др.)
          оптом и&nbsp;в&nbsp;розницу в&nbsp;отличном соотношении цены и&nbsp;качества.
        </div>
        <a href="#" class="krona-btn width-300">
          <span class="text m2r_24">Открыть цены</span>
          <div><img src="<?php echo $theme_path; ?>/images/ico-next.svg"></div>
        </a>
      </div>
    </div>
  </div>
</section>

<section id="services" class="services">
  <div class="green-bg">
    <div class="container">
      <div class="section-title dark-bg p2t_120 m2b_22">
        <h2>Услуги</h2>
      </div>
      <div class="section-title-divider m2b_54"></div>
    </div>
  </div>
  <div class="light-bg">
    <div class="container">
      <div class="services-wrapper">
        <div class="service-item">
          <img src="<?php echo $theme_path; ?>/images/doski.png">
          <div class="title">
            Продажа пиломатериала
          </div>
          <div class="description">
            Вагонка, брус, половая доска, погонаж, блок-хаус
          </div>
        </div>
        <div class="service-item">
          <img src="<?php echo $theme_path; ?>/images/brusok.png">
          <div class="title">
            Бесплатная распиловка
          </div>
          <div class="description">
            Рассчет материала и&nbsp;распиловка по&nbsp;размерам
          </div>
        </div>
        <div class="service-item">
          <img src="<?php echo $theme_path; ?>/images/gaz.png">
          <div class="title">
            Организация доставки
          </div>
          <div class="description">
            Автомобили для&nbsp;частных и&nbsp;оптовых заказов
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-company">
  <div class="container">
    <div class="section-title m2b_22">
      <h2>О компании</h2>
    </div>
    <div class="section-title-divider m2b_54"></div>
    <div class="row m2b_66">
      <div class="col-lg-6">
        <div class="about-text p2r_60">
          Компания «Крона» с 2008 года на&nbsp;рынке пиломатериалов в&nbsp;Татарстане в&nbsp;городе Набержные&nbsp;Челны.
          Мы организуем, преимущественно, поставки хвойной древесины (ель, сосна, лиственница)
          из&nbsp;северных регионов России.
          За&nbsp;это&nbsp;время накопили достаточно опыта и&nbsp;ресурсов, чтобы&nbsp;работать как&nbsp;с&nbsp;мелкими розничными,
          так&nbsp;и&nbsp;с&nbsp;крупными оптовыми продажами.
        </div>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo $theme_path; ?>/images/photo-2.jpg">
      </div>
    </div>

    <div class="row m2b-62">
      <div class="col-lg-6">
        <img src="<?php echo $theme_path; ?>/images/photo-1.jpg">
      </div>
      <div class="col-lg-6">
        <div class="about-text p2l_32">
            Мы всегда стараемся делать упор на&nbsp;качество за&nbsp;доступные деньги.
            Здесь про&nbsp;топовые материалы и&nbsp;обработку. В&nbsp;общем про саму вагонку софт лайн.
        </div>
      </div>
    </div>
  </div>
</section>

<section class="advantages">
  <div class="container">
    <div class="section-title m2b_22">
      <h2>Преимущества</h2>
    </div>
    <div class="section-title-divider m2b_54"></div>
  </div>
  <div class="advantages-wrapper">
    <div class="advantage-item">
      <img src="<?php echo $theme_path; ?>/images/ico-1.svg">
      <div class="title">
        Продажа пиломатериала
      </div>
      <div class="description">
        Вагонка, брус, половая доска, погонаж, блок-хаус
      </div>
    </div>
    <div class="advantage-item">
      <img src="<?php echo $theme_path; ?>/images/ico-2.svg">
      <div class="title">
        Бесплатная распиловка
      </div>
      <div class="description">
        Рассчет материала и&nbsp;распиловка по&nbsp;размерам
      </div>
    </div>
    <div class="advantage-item">
      <img src="<?php echo $theme_path; ?>/images/ico-3.svg">
      <div class="title">
        Организация доставки
      </div>
      <div class="description">
        Автомобили для&nbsp;частных и&nbsp;оптовых заказов
      </div>
    </div>
  </div>
</section>

<section class="news">
  <div class="container">
    <div class="section-title dark-bg m2b_22">
      <h2>Новости и акции</h2>
    </div>
    <div class="section-title-divider m2b_54"></div>

    <div class="row m2b_24">
      <div class="col-lg-6">
        <div class="news-item">
          <div class="image-container">
            <img src="<?php echo $theme_path; ?>/images/photo-2.jpg">
          </div>
          <div class="text">
            <div class="type news">Новость</div>
            <div class="title">
              Поступление вагонки в&nbsp;цвете мокрый асфальт
            </div>
            <div class="date">03 апреля 2019</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="news-item">
          <div class="image-container">
            <img src="<?php echo $theme_path; ?>/images/photo-1.jpg">
          </div>
          <div class="text">
            <div class="type promo">Акция!</div>
            <div class="title">
              Скидка на брус 50х50
            </div>
            <div class="date">с 4 апреля по 25 мая 2019</div>
          </div>
        </div>
      </div>
    </div>

    <div class="flex-center">
      <a href="#" class="krona-btn width-300">
        <span class="text m2r_24">Читать больше</span>
        <div><img src="<?php echo $theme_path; ?>/images/ico-next.svg"></div>
      </a>
    </div>

  </div>
</section>

<section class="supplier">
  <div class="container">
    <div class="section-title dark-bg m2b_22">
      <h2>Поставщикам</h2>
    </div>
    <div class="section-title-divider m2b_24"></div>
    <div class="description">
      Если вы производите качественный материал, мы всегда рады обсудить с&nbsp;вами взаимовыгодные условия.
    </div>
  </div>
</section>

<section class="contact-form">
  <div class="container">
    <div class="contacts-form-row">
      <div class="block light-bg">
        <div class="title m2b_26">
          У вас остались вопросы или&nbsp;есть&nbsp;предложения по&nbsp;сторудничеству?
        </div>
        <div class="font-lg description">
          Позвоните нам или&nbsp;заполните форму&nbsp;обратной&nbsp;связи.
        </div>

        <a href="#" class="krona-btn dark-bg width-225 mt-auto">
          <div><img src="<?php echo $theme_path; ?>/images/phone.svg"></div>
          <span class="text">Позвонить</span>
        </a>

      </div>
      <div class="block dark-bg">
        <input type="text" class="form-control m2b_26" placeholder="Имя">
        <input type="text" class="form-control m2b_26" placeholder="Email или телефон">
        <input type="text" class="form-control m2b_26" placeholder="Текст сообщения">

        <a href="#" class="krona-btn full-width">
          <span class="text m2r_24">Отправить</span>
          <div><img src="<?php echo $theme_path; ?>/images/ico-next.svg"></div>
        </a>
      </div>
    </div>
  </div>

</section>


<?php
get_footer();
