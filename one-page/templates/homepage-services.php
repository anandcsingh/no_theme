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
                    <?php
rewind_posts();
$post_id = 336;
$queried_post = get_post($post_id);
?>
  <div class="col-sm-8">

<?php if (has_post_thumbnail( $queried_post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $queried_post->ID ), 'single-post-thumbnail' ); ?>
  <img src='<?php echo $image[0]; ?>' />

<?php endif; ?>
</div>
                    <div class="col-sm-4">
   
				   
												 
<?php echo $queried_post->post_content; ?>
</div>
                    </div>
                </div>
            </div>
        </section>
        <!--/service section-->
    <?php }
} ?>

