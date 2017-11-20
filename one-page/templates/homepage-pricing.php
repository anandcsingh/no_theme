<?php
$pricings = Onepage_Data::get_instance()->pricing();
//print_r($pricings);
if (true) {
    
    if (true) {
        ?>
        <!-- pricing Section -->
        <section id="faqs" class="section_7">
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
                            <style></style>
                            <?php echo do_shortcode("[hrf_faqs]"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ pricing Section -->
    <?php }
} ?>
