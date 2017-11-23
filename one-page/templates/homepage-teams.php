<?php
$teams = Onepage_Data::get_instance()->team();
if (true) {
    $count = 1;
    $non_empty_count = 0;
    foreach ($teams['teams'] as $team) {
        if (!empty($team['onepage_member' . $count . '_image_link'])) {
            $non_empty_count++;
        }
        $count++;
    }
    if (true) {
        ?>
        <!--Team Information section-->
        <section id="sponsors" class="section_8">
            <div class="team_div">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="main_head"><?php echo esc_html($teams['onepage_team_main_heading']); ?></h2>
                            <hr class="team_sep">
                            <p class="main_desc"><?php echo esc_html($teams['onepage_team_sub_heading']); ?></p>
                        </div>
                    </div>
                    <div class="row row-centered">
                        <div class="team_wrapper">
                       
                            <?php $query = new WP_Query( 'cat=3' ); ?>			   
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="col-md-3 col-sm-6 col-md-offset-1 col-centered">
                                    <div class="team_item animated bounce" style="animation-delay: ">
                                        <div class="team_image">
                                        <a href="<?php the_title(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                            
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>

 <?php endwhile; 
 wp_reset_postdata();
 else : ?>
 <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/Team Information section-->
    <?php }
}
?>
