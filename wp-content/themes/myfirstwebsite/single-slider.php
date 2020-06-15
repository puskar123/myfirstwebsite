<?php
get_header();
while (have_posts()) {
    the_post();
    pageBanner();
}
?>
<div class="container container--narrow page-section">
        <?php
        while(have_posts()) {
            the_post();?>
            <div class="post-item">
                <h2 class = "headline headline--medium headline--post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                <div class="generic-contant">
                    <?php the_excerpt();?>
                    
                </div>
            </div>
        <?php }
        echo paginate_links();
        ?>
    </div>


<?php 
get_footer();
?>