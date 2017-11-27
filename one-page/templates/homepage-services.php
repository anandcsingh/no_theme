<?php
$services = Onepage_Data::get_instance()->services();
if (!empty($services)) {
    $count = 1;
    $non_empty_count = 0;
    foreach ($services['services'] as $key => $service) {
        if (!empty($service['onepage_service_box_heading_' . $count])) {
            $non_empty_count++;
        }
        $count++;
    }
    if ($non_empty_count > 0) {
        ?>
        <!--service section-->
        <section id="package" class="section_2">
            <div class="services_div">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="main_head animated fade_in_up"><?php echo esc_html($services['onepage_service_section_heading']); ?></h2>
                            <hr class="service_sep animated fade_in_up">
                            <p class="main_desc animated fade_in_up"><?php echo esc_html($services['onepage_service_section_sub_heading']); ?></p>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-8">
<div class="row is-flex">
                    <?php $query = new WP_Query( 'cat=4' ); ?>			   
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="col-md-4">
      <div class="thumbnail">
        <a href="<?php the_title(); ?>" target="_blank">
          <?php the_post_thumbnail(); ?>
          <div class="caption">
            <?php the_content(); ?>
          </div>
        </a>
      </div>

    </div>
 <?php endwhile; 
 wp_reset_postdata();
 else : ?>
 <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
</div>
</div>
<div class="col-sm-4">
<?php
$post_id = 214;
$queried_post = get_post($post_id);
?>
<?php echo $queried_post->post_content; ?>

</div>
</div>
                    </div>
                </div>
            </div>
        </section>
        <!--/service section-->
    <?php }
} ?>

