<?php
$pricings = Onepage_Data::get_instance()->pricing();
//print_r($pricings);
if (true) {
    
    if (true) {
        ?>
        <!-- pricing Section -->
        <section id="about" class="section_7">
            <div class="pricing_div">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="main_head animated fade_in_up"><?php echo esc_html($pricings['onepage_pricing_main_heading']); ?></h2>
                            <hr class="pricing_sep animated fade_in_up">
                            <p class="main_desc animated fade_in_up"><?php echo esc_html($pricings['onepage_pricing_sub_heading']); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="pricing_wrapper">
                        <div class="col-sm-8">
                        <?php
$post_id = 347;
$queried_post = get_post($post_id);
?>
<?php echo $queried_post->post_content; ?>
                        </div>
                        <div class="col-sm-4">
                        <div class="thumbnail">
                        <?php if (has_post_thumbnail( $queried_post->ID ) ): ?>
 +  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $queried_post->ID ), 'single-post-thumbnail' ); ?>
 +  <img src='<?php echo $image[0]; ?>' />
 +
 +<?php endif; ?>
                        
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ pricing Section -->
    <?php }
} ?>
