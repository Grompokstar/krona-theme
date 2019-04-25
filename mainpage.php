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
        <a href="#" class="krona-btn width-270">
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
                  Рассчет материала
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

<section class="about-company">
  <div class="container">
    <div class="section-title m2b_18">
      <h2>О компании</h2>
    </div>
    <div class="section-title-divider m2b_54"></div>
    <div class="about-company-content">
      <div class="row m2b_26">
        <div class="col-xl-6">
          <div class="about-text">
            <div class="m2b_4">
              Компания "Крона" работате на&nbsp;рынке пиломатериалов с&nbsp;2008&nbsp;г. Мы сами контролируем процесс
              производства от&nbsp;заготовки леса до&nbsp;изготовления продукции, блогадаря&nbsp;чему можем предложить
              вам высокое качество материала по&nbsp;доступным ценам.
            </div>
            Для производства по-настоящему качественных пиломатериалов необходимо особенное сырье.
            Крепкое, плотное, но&nbsp;удобное для&nbsp;обработки. Именно такими качествами обладает
            древесина из&nbsp;северных регионов России.
          </div>
        </div>
        <div class="col-xl-6">
          <div class="img-container">
            <img src="<?php echo $theme_path; ?>/images/photo-2.jpg" width="554px" height="300px">
          </div>
        </div>
      </div>

      <div class="row m2b-62">
        <div class="col-xl-6">
          <div class="img-container">
            <img src="<?php echo $theme_path; ?>/images/photo-1.jpg">
          </div>
        </div>
        <div class="col-xl-6">
          <div class="about-text">
            Эти же особенности обеспечивают строительному материалу изсеверного леса отличные
            эксплуатационные характеристики – жилье с&nbsp;отделкой из&nbsp;него положительно влияет
            на&nbsp;здоровье человека. Поэтому выбирая материал для&nbsp;строительства и&nbsp;отделки своего дома,
            мы рекомендуем обратить внимание на&nbsp;этот вид&nbsp;древесины.
          </div>
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
        Наличный и&nbsp;безналичный рассчет
      </div>
    </div>
  </div>
</section>

<section class="news">
  <div class="container">
    <div class="section-title dark-bg m2b_18">
      <h2>Новости и акции</h2>
    </div>
    <div class="section-title-divider m2b_28"></div>

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
      <a href="#" class="krona-btn width-270">
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

        <a href="#" class="krona-btn white-bg width-225 mt-auto">
          <div class="m2r_12"><img src="<?php echo $theme_path; ?>/images/phone.svg"></div>
          <span class="text">Позвонить</span>
        </a>

      </div>
      <div class="block dark-bg">
        <input type="text" class="form-control m2b_26" placeholder="Имя">
        <input type="text" class="form-control m2b_26" placeholder="Email или телефон">
        <input type="text" class="form-control m2b_26" placeholder="Текст сообщения">

        <a href="#" class="krona-btn full-width">
          <span class="text m2r_24">Отправить</span>
          <div><img src="<?php echo $theme_path; ?>/images/next.svg"></div>
        </a>
      </div>
    </div>
  </div>

</section>


<?php
get_footer();
