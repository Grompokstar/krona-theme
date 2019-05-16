<?php
/*
Template Name: Новости и акции
*/
$theme_path = get_template_directory_uri();

get_header();
?>
<div id="news-page">
  <div class="container">
    <h1 class="page-title">Новости и Акции</h1>
    <div class="section-title-divider m2b_40"></div>

    <div class="row m2b_24">
        <?php
        $promoPosts = get_posts( array(
          'numberposts' => 20,
          'category'    => [2,3],
          'orderby'     => 'date',
          'order'       => 'DESC',
          'post_type'   => 'post',
          'suppress_filters' => true,
        ) );

        foreach( $promoPosts as $post ){
          setup_postdata($post);
          ?>
        <div class="col-xl-6">

          <a href="<?php the_permalink() ?>">

            <div class="news-item">
              <div class="image-container">
                <img src="<?php echo get_the_post_thumbnail_url() ?>">
              </div>
              <div class="text">
                <?php
                $categories = get_the_category();
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
                <div class="date"><?php the_date('d F Y')?></div>
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

<?php
get_footer();
