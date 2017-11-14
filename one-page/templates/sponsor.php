<!-- Start the Loop. -->
<!--post start-->

<div>
<span class="thumb">
<?php if ( (function_exists( 'has_post_thumbnail' )) && (has_post_thumbnail()) ) { 
    
    ?>
    <a href="<?php the_title(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    
<?php
} else {
    echo onepage_main_image_with_content_link();
}
?>
</span>
</div>

<!--End Post-->
