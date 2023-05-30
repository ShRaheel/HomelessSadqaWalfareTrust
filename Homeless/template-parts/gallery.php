<?php 
// Template Name: gallery
get_header();
?>


<div class="gallery-page">
    <div class="page-header">
       <div class="data">
       <h1>Our Gallery</h1>
        <p>All of our Work Images In One Gallery</p>
       </div>
    </div>

    
<!-- gallery -->
<div class="my-gallery">
    <div class="gallery-data">
        <div class="gallery">
            <?php
            $args = array(
            'post_type' => 'gallery',
            'posts_per_page' => -1
            );
            $gallery_query = new WP_Query($args);

            if ($gallery_query->have_posts()) :
            while ($gallery_query->have_posts()) : $gallery_query->the_post();
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, 'large')[0];
            $image_title = get_the_title(); // Retrieve the image title
            ?>

            <div class="gallery-item">
                <img src="<?php echo $image_url; ?>"
                    alt="<?php echo $image_title; ?>">
                <div class="gallery-item-title"><?php echo $image_title; ?></div>
            </div>

            <?php
            endwhile;
            wp_reset_postdata();
            else :
            echo '<p>No gallery images found.</p>';
            endif;
            ?>
        </div>

    </div>
</div>
<!-- gallery -->
</div>
<?php 
get_footer();
?>