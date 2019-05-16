<?php
/*
Template Name: Новости и акции
*/
$theme_path = get_template_directory_uri();

get_header();
?>
<div id="news-page">
  <div class="container">
    <h1 class="page-title">Новости и&nbsp;акции</h1>
    <div class="section-title-divider m2b_40"></div>
    <div class="news-menu m2b_24">
      <div class="menu-item active" data-category="promo">Акции</div>
      <div class="menu-item active" data-category="news">Новости</div>
    </div>

    <div class="row m2b_24">
        <?php
        $promoPosts = get_posts( array(
          'numberposts' => 50,
          'category'    => [2,3],
          'orderby'     => 'date',
          'order'       => 'DESC',
          'post_type'   => 'post',
          'suppress_filters' => true,
        ) );

        foreach( $promoPosts as $post ){
          setup_postdata($post);
          $categories = get_the_category();
          ?>
        <div class="col-xl-6 news-container show
        <?php
        if ($categories[0]->slug == 'news' ) {
                  echo ' news';
        }

        if ($categories[0]->slug == 'promo' ) {
          echo ' promo';
        }
        ?>
        ">

          <a href="<?php the_permalink() ?>">

            <div class="news-item">
              <div class="image-container">
                <img src="<?php echo get_the_post_thumbnail_url() ?>">
              </div>
              <div class="text">
                <?php
                if ($categories[0]->slug == 'news' ) {
                  echo '<div class="type">Новость</div>';
                }

                if ($categories[0]->slug == 'promo' ) {
                  echo '<div class="type promo">Акция!</div>';
                }
                ?>
                <div class="title">
                  <?php the_title()?>
                </div>
                <?php
                $categories = get_the_category();
                if ($categories[0]->slug == 'news' ) {
                ?>
                  <div class="date"><?php the_date('d F Y')?></div>
                <?php
                }

                if ($categories[0]->slug == 'promo' ) {
                ?>
                  <div class="date">
                  c <?php echo get_field('start_date')?>
                  по <?php echo get_field('end_date'); echo ' '.date('Y')?>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
          </a>
        </div>

          <?php
        }

        wp_reset_postdata();
        ?>
    </div>
  </div>

</div>

<script src="<?php echo $theme_path; ?>/js/news.js"></script>

<?php
get_footer();
