<div class="featured-project-container page-lane">
  <?php $query = new WP_Query( array( 'category_name' => $featured_item_type ) );
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="featured-project-text-container">
      <div class="subtitle-wrapper">
        <div class="subtitle">Feature</div>
      </div>
      <div class="featured-project-title"><?php the_title(); ?></div>
      <div class="featured-project-blurb">
        <?php if ($featured_item_type == "featured-project") {
          echo get_post_meta($post->ID, 'project-blurb', true);
        } elseif ($featured_item_type == "featured-event") {
          echo get_post_meta($post->ID, 'event-blurb', true);
        } ?>
        <div class="featured-project-button-container">
          <a href="<?php echo esc_url( get_permalink() ); ?>">
            <div class="button featured-project-button">
              <?php if ($featured_item_type == "featured-project") {
                echo "View Project";
              } elseif ($featured_item_type == "featured-event") {
                echo "View Event";
              } ?>
            </div>
          </a>
        </div>
      </div> 
    </div>

    <div class="featured-project-image-container">
    <div class="image-stripe featured-image-stripe"></div>
       <img class="featured-project-image" src="<?php the_post_thumbnail_url('original'); ?>" />
    </div>
  <?php endwhile; endif; ?>
</div>
