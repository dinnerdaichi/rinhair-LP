<?php
$options = get_design_plus_option();
get_header();
?>
<div class="p-header-content">
  <?php get_template_part('template-parts/header-content'); ?>
  <?php if ($options['display_news_ticker']) : ?>
    <div class="p-news-ticker">
      <div id="js-news-ticker" class="p-news-ticker__inner l-inner">
        <?php
        $news_ticker_array = array();
        for ($i = 1; $i <= 5; $i++) :
          if ($options['news_ticker_catch' . $i]) :
            array_push($news_ticker_array, $options['news_ticker_catch' . $i]);
          endif;
        endfor;
        if (count($news_ticker_array) > 1) :
        ?>
          <ul id="js-news-ticker__list" class="p-news-ticker__list">
          <?php else : ?>
            <ul id="js-news-ticker__list_static" class="p-news-ticker__list">
            <?php endif; ?>
            <?php
            for ($i = 1; $i <= 5; $i++) :
              if ($options['news_ticker_catch' . $i]) :
            ?>
                <li class="p-news-ticker__list-item">
                  <time class="p-news-ticker__list-item-date" datetime="<?php echo esc_attr($options['news_ticker_date' . $i]); ?>"><?php echo date('Y.m.d', strtotime($options['news_ticker_date' . $i])); ?></time>
                  <a href="<?php echo esc_url($options['news_ticker_url' . $i]); ?>" class="p-news-ticker__list-item-title" <?php if ($options['news_ticker_target' . $i]) {
                                                                                                                              echo ' target="_blank"';
                                                                                                                            } ?>><?php echo wp_is_mobile() ? esc_html(wp_trim_words($options['news_ticker_catch' . $i], 40, '...')) : esc_html($options['news_ticker_catch' . $i]); ?></a>
                </li>
            <?php endif;
            endfor; ?>
            </ul>
            <?php if ($options['news_ticker_btn_label']) : ?>
              <a id="js-news-ticker__btn" href="#" class="p-news-ticker__btn p-btn"><?php echo esc_html($options['news_ticker_btn_label']); ?></a>
            <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
</div>
<div class="content concept">
  <div class="content__head">
    ?? ??<p>??????????????????????????????????????????</p>
    ?? ??<p>?????????????????????????????????????????????</p>
    <a href="https://lin.ee/qJydyXq" class="line"><img src="http://riin-hair.com/wp-content/uploads/2023/01/LINE.png" alt="???????????????" height="36" border="0"></a>
  </div>
  <div class="content__box">
    <ul class="content__flex">
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/08/18250260_MotionElements_natural-cosmetic-product-scaled.jpg">
        <h3>???????????????????????????</h3>
        <p>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        <p>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        <p>????????????????????????BGM??????????????????????????????????????????????????????????????????<br>??????????????????????????????????????????????????????????????????????????????????????????</p>
      </li>
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/08/DSC09609-2.png">
        <h3>??????????????????????????????</h3>
        <p>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        <p>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
      </li>
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/08/IMG_9138.jpg">
        <h3>????????????</h3>
        <p>????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        <p>???????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        <p>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????BGM???????????????????????????????????????????????????</p>
      </li>
    </ul>

  </div>


</div>
<div class="content commit">
  <div class="content__box">
    <ul class="content__flex">
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/08/paper-gce7b5b5cc_1280.jpg">
        <h3>?????????????????????</h3>
        <p>????????????????????????????????????????????????????????????????????????????????????????????????</p>
        <p>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        <p>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        <p>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
      </li>
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/08/19199108_MotionElements_hands-of-professional_converted_a-0005.jpg">
        <h3>????????????</h3>
        <p>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        <p>????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        <p>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
      </li>
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/08/18752008_MotionElements_beautiful-blonde-woman-scaled.jpg">
        <h3>?????????????????????</h3>
        <p>?????????????????????????????????????????????4???5????????????</p>
        <p>????????????????????????????????????????????????????????????????????????????????????????????????????????????360??????????????????????????????????????????????????????????????????</p>
        <p>????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        <p>????????????????????????????????????????????????????????????????????????????????????</p>
        </p>
      </li>
    </ul>

  </div>


</div>
<div class="l-inner">
  <div class="l-contents">
    <div class="l-primary">
      <?php
      foreach ((array) $options['index_contents_order'] as $content) :
        if (!$options['display_index_' . $content]) continue;
        $title = esc_html($options['index_' . $content . '_title']);
        $title_font_size = esc_attr($options['index_' . $content . '_title_font_size']);
        $title_color = esc_attr($options['index_' . $content . '_title_color']);
        $sub = esc_html($options['index_' . $content . '_sub']);
        $sub_font_size = esc_attr($options['index_' . $content . '_sub_font_size']);
        $sub_color = esc_attr($options['index_' . $content . '_sub_color']);
        $title_bg = esc_attr($options['index_' . $content . '_title_bg']);
      ?>


        <section class="p-index-content">
          <header class="p-index-content__header">
            <h2 class="p-index-content__header-title" style="background: <?php echo $title_bg; ?>; color: <?php echo $title_color; ?>; font-size: <?php echo $title_font_size; ?>px;"><?php echo $title; ?><span style="color: <?php echo $sub_color; ?>; font-size: <?php echo $sub_font_size; ?>px;"><?php echo $sub; ?></span></h2>
            <p class="p-index-content__header-desc"><?php echo nl2br(esc_html($options['index_' . $content . '_desc'])); ?></p>
          </header>
          <div class="p-index-content__<?php echo esc_attr($content); ?>">

            <?php
            if ('style' === $content) :
              $args = array(
                'post_type' => $content,
                'post_status' => 'publish',
                'posts_per_page' => $options['index_' . $content . '_num'],
                //'order_by' => array( 'menu_order' => 'ASC', 'date' => 'DESC' )
              );
              $the_query = new WP_Query($args);
            ?>
              <?php /* 
              <ul class="p-latest-news">
                <?php
                if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) :
                    $the_query->the_post();
                    ?>
                    <li class="p-latest-news__item p-article05">
                      <a href="<?php the_permalink(); ?>" class="p-hover-effect--<?php echo esc_attr($options['hover_type']); ?>">
                        <div class="p-article05__img">
                          <?php
                          if (has_post_thumbnail()) {
                            the_post_thumbnail('full');
                          } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/no-image-300x300.gif" alt="">' . "\n";
                          }
                          ?>
                        </div>
                        <div class="p-article05__content">
                          
                        </div>
                      </a>
                    </li>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    else :
                      echo '<li>' . __('There is no registered post.', 'tcd-w') . '</li>' . "\n";
                      endif;
                      ?>
                    </ul>
                          */ ?>

              <?php /*
            elseif ('style' === $content) :
              $args = array(
                'post_type' => $content,
                'post_status' => 'publish',
                'posts_per_page' => $options['index_' . $content . '_num'],
                //'order_by' => array( 'menu_order' => 'ASC', 'date' => 'DESC' )
              );
              $the_query = new WP_Query($args);
           */ ?>
              <ul class="p-style-list">
                <?php
                if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) :
                    $the_query->the_post();
                ?>
                    <li class="p-style-list__item">
                      <a href="<?php the_permalink(); ?>" class="p-style-list__item-img p-hover-effect--<?php echo esc_attr($options['hover_type']); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('size4');
                        } else {
                          echo '<img src="' . get_template_directory_uri() . '/assets/images/no-image-370x500.gif" alt="">' . "\n";
                        }
                        ?>
                      </a>
                    </li>
                <?php
                  endwhile;
                  wp_reset_postdata();
                else :
                  echo '<p>' . __('There is no registered post.', 'tcd-w') . '</p>' . "\n";
                endif;
                ?>
              </ul>
            <?php
            elseif ('staff' === $content) :
              $args = array(
                'post_type' => $content,
                'post_status' => 'publish',
                'posts_per_page' => $options['index_' . $content . '_num'],
                //'order_by' => array( 'menu_order' => 'ASC', 'date' => 'DESC' )
              );
              $the_query = new WP_Query($args);
            ?>
              <div class="p-staff-list">
                <?php
                if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) :
                    $the_query->the_post();
                ?>
                    <article class="p-staff-list__item p-article06">
                      <a class="p-hover-effect--<?php echo esc_attr($options['hover_type']); ?>" href="<?php the_permalink(); ?>">
                        <div class="p-article06__img">
                          <?php
                          if (has_post_thumbnail()) {
                            the_post_thumbnail('size4');
                          } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/no-image-370x500.gif" alt="">' . "\n";
                          }
                          ?>
                        </div>
                        <div class="p-article06__content">
                          <?php if ($post->staff_job_title) : ?>
                            <p class="p-article06__position"><?php echo esc_html($post->staff_job_title); ?></p>
                          <?php endif; ?>
                          <h2 class="p-article06__name"><?php the_title(); ?></h2>
                          <?php if ($post->staff_comment) : ?>
                            <p class="p-article06__comment"><?php echo is_mobile() ? wp_trim_words($post->staff_comment, 22, '...') : wp_trim_words($post->staff_comment, 50, '...'); ?></p>
                          <?php endif; ?>
                        </div>
                      </a>
                    </article>
                <?php
                  endwhile;
                  wp_reset_postdata();
                else :
                  echo '<p>' . __('There is no registered post.', 'tcd-w') . '</p>' . "\n";
                endif;
                ?>
              </div>
            <?php endif; ?>
          </div>
          <?php /* 
          <?php if ($options['index_' . $content . '_link_text']) : ?>
            <a href="<?php echo get_post_type_archive_link($content); ?>" class="p-index-content__btn p-btn"><?php echo esc_html($options['index_' . $content . '_link_text']); ?></a>
          <?php endif; ?>

         */ ?>
        </section>
      <?php endforeach; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>



<div class="content faq">
  <div class="faq__title">
    <p>???????????????????????????????????????</p>
  </div>
  <div class="content__box">
    <ul class="faq__box">
      <li>
        <div class="faq__head">
          <h4>Q??????????????????????????????????????????????????????????????????????????????????????????????????????</h4>
        </div>
        <div class="faq__text">
          <p>?????????????????????????????????????????????????????????????????????????????????????????????
            ????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
          <p>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
          <p>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q????????????????????????????????????????????????????????????????????????????????????????????????????????????</h4>
        </div>
        <div class="faq__text">
          <p>Ri!Nhair?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>

          <p>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
            ??????????????????????????????????????????????????????????????????????????????</p>

          <p>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????

            ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
            ??????????????????????????????????????????????????????????????????????????????????????????</p>

          <p>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q????????????????????????????????????????????????????????????????????????????????????????????????????????????</h4>
        </div>
        <div class="faq__text">
          <p>???????????????????????????????????????Ri!N
            hair?????????????????????????????????????????????????????????????????????????????????

            ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????

            ?????????????????????????????????????????????????????????????????????</p>

          <p>2??????????????????????????????????????????????????????????????????????????????????????????????????????
            1??????????????????????????????????????????????????????????????????????????????</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q???2???????????????????????????????????????????????????????????????????????????????????????????????????????????????</h4>
        </div>
        <div class="faq__text">
          <p>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>

          <p>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
            ?????????????????????????????????????????????????????????????????????</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q?????????????????????????????????????????????????????????????????????????????????</h4>
        </div>
        <div class="faq__text">
          <p>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
          <p>????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q??????????????????????????????????????????????????????????????????</h4>
        </div>
        <div class="faq__text">
          <p>??????????????????????????????????????????????????????????????????????????????????????????????????????1???????????????????????????????????????????????????????????????
            ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q???????????????????????????LINE????????????????????????????????????</h4>
        </div>
        <div class="faq__text">
          <p>???????????????LINE???????????????????????????

            ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????

            ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????LINE???????????????????????????????????????????????????????????????</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q?????????????????????Ri!Nhair???????????????????????????????????????</h4>
        </div>
        <div class="faq__text">
          <p>Ri!N
            hair????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????

            ??????????????????????????????????????????????????????????????????????????????????????????????????????</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q???????????????????????????????????????????????????????????????</h4>
        </div>
        <div class="faq__text">
          <p>?????????????????????????????????????????????

            ?????????????????????????????????????????????????????????????????????</p>


          <p>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
            ??????????????????????????????????????????????????????Ri!N hair???????????????????????????????????????????????????????????????</p>

          <p>????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
            ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>

          <p>????????????????????????????????????????????????????????????Ri!N hair???????????????????????????</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q?????????????????????????????????????????????????????????????????????????????????????????? ????????????Ri!N hair???????????????????????????????????????????????????????????????????????????</h4>
        </div>
        <div class="faq__text">
          <p>??????????????????????????????????????????????????????????????????????????????

            LINE???????????????????????????????????????????????????????????????????????????????????????????????????
            ??????????????????????????????????????????????????????</p>

          Ri!N hair??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????

          ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????

          <p>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
          </p>
        </div>
      </li>

    </ul>

  </div>


</div>

<div class="content voice">
  <div class="content__head">
    <p>???????????????</p>
  </div>

  <div class="voice__box">
    <ul>
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7319.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7320.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7321.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7322.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7323.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7324.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7325.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7326.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7327.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7328.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7329.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7330.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7331.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7332.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7333.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7334.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7335.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7336.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7337.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7338.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7339.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7340.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7341.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7342.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7343.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7344.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7345.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7346.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7347.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7348.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7349.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7350.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7351.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7352.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7353.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7354.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7355.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7356.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7357.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7358.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7359.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7360.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7361.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7362.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7363.jpg">
      </li>
    </ul>
  </div>
</div>

</main>
<?php get_footer(); ?>