<?php 
// Template Name: latest-news 
get_header();
?>

<div class="news-page">
    <div class="page-header">
        <div class="data">
            <h1>Latest News</h1>
            <p>Get Updated all time with our latest news</p>
        </div>
    </div>


    <div class="our-posts">
        <div class="my-content">
            <div class="posts">
                <?php
                $args = array(
                'post_type' => 'post',
                // 'posts_per_page' => 3
                );
                $query = new WP_Query($args);
    
                if ($query->have_posts()) {
                while ($query->have_posts()) {
                $query->the_post();
                ?>
                <div class="post-item">
                    <?php if (has_post_thumbnail()) { ?>
                    <div class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                    </div>
                    <?php } ?>
                    <div class="post-content">
                        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php
                                the_title(); ?></a></h3>
                        <p class="post-excerpt"><?php echo
                            wp_trim_words(get_the_excerpt(), 30); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn2">Read More</a>
                    </div>
                </div>
                <?php
                }
                } else {
                echo '<h2 class="m-5 text-center">No posts found.</h2>';
                }
    
                wp_reset_postdata();
                ?>
            </div>
    
        </div>
    </div>



</div>

<?php 
get_footer();
?>