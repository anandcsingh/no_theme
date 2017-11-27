<?php $blog = Onepage_Data::get_instance()->blog(); ?>
<!--blog & news section-->
<section id="social" class="section_3">
    <div class="blog_div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="main_head animated fade_in_up"><?php echo esc_html( $blog['onepage_blog_main_heading'] ); ?></h2>
                    <p class="main_desc animated fade_in_up"><?php echo esc_html( $blog['onepage_blog_sub_heading'] ); ?></p>
                </div>
            </div>
            <div class="row">
				<div id="instagram-feed"><?php echo do_shortcode("[instagram-feed]"); ?></div>
            </div>
        </div>
</section>
<!--/blog & news section-->