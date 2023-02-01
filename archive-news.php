<?php
$args = array( 
  'current' => max( 1, get_query_var( 'paged' ) ),  
  'prev_next' => false,
  'total' => $wp_query->max_num_pages,
  'type' => 'array'
);
?>
<?php get_header(); ?>
      <div class="p-post-list">
        <?php 
        if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();
        ?>
        <article class="p-post-list__item p-article01 u-clearfix">
          <a href="<?php the_permalink(); ?>" class="p-article01__img p-hover-effect--<?php echo esc_attr( $options['hover_type'] ); ?>">
          <?php
          if ( has_post_thumbnail() ) {
            echo is_mobile() ? get_the_post_thumbnail( null, 'size2' ) : get_the_post_thumbnail( null, 'size1' );
          } else {
            echo '<img src="' . get_template_directory_uri() . '/assets/images/no-image-';
            echo is_mobile() ? '300x300' : '510x320';
            echo '.gif" alt="">' . "\n";
          }
          ?>
          </a>
          <div class="p-article01__content">
            <h2 class="p-article01__title">
              <a href="<?php the_permalink(); ?>"><?php echo is_mobile() ? wp_trim_words( get_the_title(), 25, '...' ) : get_the_title(); ?></a>
            </h2>
            <p class="p-article01__meta">
              <?php if ( $options['news_show_date'] ): ?><time class="p-article01__date" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time><?php endif; ?>
            </p>
          </div>
        </article>
        <?php
          endwhile;
        endif;
        ?>
      </div>
      <?php if ( paginate_links( $args ) ) : ?>
      <ul class="p-pager">
        <?php foreach ( paginate_links( $args ) as $link ) : ?>
        <li class="p-pager__item"><?php echo $link; ?></li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
</main>
<?php get_footer(); ?>
