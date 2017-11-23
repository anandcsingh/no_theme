<?php $blog = Onepage_Data::get_instance()->blog(); ?>
<!--blog & news section-->
<section id="social" class="section_3">
    <div class="blog_div">
        <div class="container">
            <div class="row">
				<div id="instagram-feed"><?php echo do_shortcode("[instagram-feed]"); ?></div>
				<div id="twitter-feed"><?php echo do_shortcode("[custom-twitter-feeds]"); ?></div>
            </div>
        </div>
</section>
<!--/blog & news section-->
