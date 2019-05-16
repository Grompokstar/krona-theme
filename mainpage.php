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
          <h1>Пиломатериалы и&nbsp;погонажные изделия из&nbsp;северных
            регионов&nbsp;России</h1>
        </div>
        <div class="description m2b_60">
          У нас вы можете купить вагонку, пол, имитацию бруса,
          блок-хаус, строганную доску и др.
        </div>
        <a href="/price" class="krona-btn width-270">
          <span class="text m2r_20">Открыть цены</span>
          <div><img src="<?php echo $theme_path; ?>/images/ico-next.svg"></div>
        </a>
      </div>
    </div>
  </div>
</section>

<section id="services" class="services">
  <div class="green-bg">
    <div class="container">
      <div class="section-title dark-bg p2t_100 m2b_18">
        <h2>Услуги</h2>
      </div>
      <div class="section-title-divider m2b_28"></div>

      <div class="services-wrapper">
        <div class="row">
          <div class="col-xl-6">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo $theme_path; ?>/images/doski.png">
              </div>
              <div class="text-section">
                <div class="title">
                  Продажа пиломатериала
                </div>
                <div class="description">
                  Вагонка, половая доска, имитация бруса, блок-хаус, погонаж и&nbsp;др.
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo $theme_path; ?>/images/gaz.png">
              </div>

              <div class="text-section">
                <div class="title">
                  Организация доставки
                </div>
                <div class="description">
                  Автомобили для&nbsp;частных и&nbsp;оптовых заказов
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo $theme_path; ?>/images/rul.png">
              </div>
              <div class="text-section">
                <div class="title">
                  Расчёт материала
                </div>
                <div class="description">
                  Оптимизация расходов по&nbsp;вашим размерам
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo $theme_path; ?>/images/brus.png">
              </div>
              <div class="text-section">
                <div class="title">
                  Индивидуальный заказ
                </div>
                <div class="description">
                  Возможно изготовление материала по&nbsp;вашим размерам
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<div class="services-light-bg-section">

</div>

<section id="about-company" class="about-company">
  <div class="container">
    <div class="section-title m2b_18">
      <h2>О компании</h2>
    </div>
    <div class="section-title-divider m2b_54"></div>
    <div class="about-company-content">
      <div class="company-row m2b_30">
        <div class="about-text order_2">
          <div class="m2b_4">
            Компания "Крона" работает на&nbsp;рынке пиломатериалов с&nbsp;2008&nbsp;г. Мы сами контролируем процесс
            производства от&nbsp;заготовки леса до&nbsp;изготовления продукции, блогадаря&nbsp;чему можем предложить
            вам высокое качество материала по&nbsp;доступным ценам.
          </div>
          Для производства по-настоящему качественных пиломатериалов необходимо особенное сырье.
          Крепкое, плотное, но&nbsp;удобное для&nbsp;обработки. Именно такими качествами обладает
          древесина из&nbsp;северных регионов России.
        </div>
        <div class="img-container">
          <img src="<?php echo $theme_path; ?>/images/photo-2.jpg" width="554px" height="300px">
        </div>
      </div>

      <div class="company-row m2b-62">
        <div class="img-container">
          <img src="<?php echo $theme_path; ?>/images/photo-1.jpg">
        </div>
        <div class="about-text">
          Эти же особенности обеспечивают строительному материалу из северного леса отличные
          эксплуатационные характеристики – жилье с&nbsp;отделкой из&nbsp;него положительно влияет
          на&nbsp;здоровье человека. Поэтому выбирая материал для&nbsp;строительства и&nbsp;отделки своего дома,
          мы рекомендуем обратить внимание на&nbsp;этот вид&nbsp;древесины.
        </div>
      </div>
    </div>
  </div>
</section>

<section class="advantages">
  <div class="container">
    <div class="section-title m2b_18">
      <h2>Преимущества</h2>
    </div>
    <div class="section-title-divider m2b_28"></div>
  </div>
  <div class="advantages-wrapper">
    <div class="advantage-item">
      <img src="<?php echo $theme_path; ?>/images/ico-1.svg">
      <div class="title">
        Северный<br>лес
      </div>
      <div class="description">
        Древесина из&nbsp;северных регионов
      </div>
    </div>
    <div class="advantage-item">
      <img src="<?php echo $theme_path; ?>/images/ico-2.svg">
      <div class="title">
        Удобное<br>расположение
      </div>
      <div class="description">
        Общественный транспорт в&nbsp;шаговой&nbsp;доступности
      </div>
    </div>
    <div class="advantage-item">
      <img src="<?php echo $theme_path; ?>/images/ico-3.svg">
      <div class="title">
        Оплата<br>материала
      </div>
      <div class="description">
        Наличный и&nbsp;безналичный расчёт
      </div>
    </div>
  </div>
</section>

<section id="news" class="news">
  <div class="container">
    <div class="section-title dark-bg m2b_18">
      <h2>Новости и&nbsp;акции</h2>
    </div>
    <div class="section-title-divider m2b_28"></div>

    <div class="row m2b_24">
      <div class="col-xl-6">
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
      <div class="col-xl-6">
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
      <a href="#" class="krona-btn width-270">
        <span class="text m2r_20">Читать больше</span>
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
          У вас остались вопросы или&nbsp;есть предложения по&nbsp;сторудничеству?
        </div>
        <div class="font-lg description">
          Позвоните нам или&nbsp;заполните форму&nbsp;обратной&nbsp;связи.
        </div>

        <a href="tel:+79274646777" class="krona-btn white-bg width-225 mt-auto">
          <div class="m2r_12">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22">
              <path fill="#369C6D" fill-rule="evenodd" d="M18.735 8.683a1.087 1.087 0 0 1-2.172 0 3.259 3.259 0 0 0-3.257-3.261 1.086 1.086 0 0 1 0-2.174 5.433 5.433 0 0 1 5.429 5.435zm-10.498.136l4.934 4.938.822-.822a3.485 3.485 0 0 1 4.933 0l.822.822a3.495 3.495 0 0 1 0 4.94l-.822.823a2.412 2.412 0 0 1-.139.129.272.272 0 0 1-.04.051l-.718.718c-1.981 1.984-5.06 2.118-6.876.3-2.179-1.583-3.973-3.079-5.382-4.491-1.148-1.149-2.643-2.945-4.485-5.388-1.816-1.818-1.682-4.901.299-6.885l.718-.718a.327.327 0 0 1 .051-.041c.04-.047.083-.093.128-.139l.822-.823a3.485 3.485 0 0 1 4.933 0l.823.823a3.496 3.496 0 0 1 0 4.939l-.823.824zm13.755-.136a1.087 1.087 0 0 1-2.172 0 6.518 6.518 0 0 0-6.514-6.522 1.086 1.086 0 1 1 0-2.174c4.797 0 8.686 3.893 8.686 8.696zM6.593 7.172l.822-.823a1.166 1.166 0 0 0 0-1.647l-.822-.823a1.162 1.162 0 0 0-1.644 0l-.823.823-.982.987C2.071 6.761 2.108 8.37 2.93 9.193l.115.114.097.129c1.782 2.364 3.215 4.086 4.273 5.145 1.316 1.317 3.026 2.729 5.111 4.244l.141.116.13.13c.822.823 2.429.861 3.488-.203l.995-.996.824-.822a1.165 1.165 0 0 0 0-1.646l-.822-.823a1.162 1.162 0 0 0-1.645 0l-.822.823c-.908.91-2.381.91-3.289 0l-4.933-4.939a2.33 2.33 0 0 1 0-3.293z"/>
            </svg>
          </div>
          <span class="text">Позвонить</span>
        </a>

      </div>
      <div class="block dark-bg">
        <?php echo do_shortcode( '[wpforms id="34" title="false" description="false"]' ); ?>
      </div>
    </div>
  </div>

</section>


<?php
get_footer();
