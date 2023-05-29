<?php 
// Template Name: about-us 
get_header();
?>


<div class="about-page">
<div class="page-header">
       <div class="data">
       <h1>About Us</h1>
        <p>Get to know more about us.</p>
       </div>
    </div>


    <div class="about">
    <div class="heading">
        <h1>Who We Are</h1>
        <p>Empowering the homeless and marginalized through compassion and
            action.</p>
    </div>
    <div class="content">
        <div class="left">
            <p>
                Homeless Sadqa Welfare Trust is a charitable organization
                dedicated to providing support and assistance to the homeless
                and underprivileged individuals in our society. Our mission is
                to alleviate the suffering of those who are without homes, basic
                necessities, and facing socio-economic challenges.
            </p>
            <p>
                At Homeless Sadqa Welfare Trust, we firmly believe that every
                individual deserves dignity, compassion, and an opportunity to
                improve their circumstances. We work tirelessly to address the
                needs of the homeless community by providing them with shelter,
                food, medical aid, and access to education and vocational
                training.
            </p>
            <p>
                Our dedicated team of volunteers and staff members are driven by
                a strong sense of social responsibility and a commitment to
                making a positive impact in the lives of the less fortunate.
                Together, we strive to create a compassionate and inclusive
                society where homelessness is eradicated, and every individual
                has the opportunity to lead a dignified life.
            </p>
        </div>
        <div class="right">
            <img
                src="https://homeless.codelab.pk/wp-content/uploads/2023/05/homeless-logo-22-01.png"
                alt="img">
        </div>
    </div>
</div>

<div class="our-mission">
    <div class="heading">
        <h1>Our Mission</h1>
        <p>Empowering the homeless, towards a brighter future.</p> 
    </div>
    <div class="content">
        <div class="left">
            <img class="mission-img" src="https://homeless.codelab.pk/wp-content/uploads/2023/05/WhatsApp-Image-2023-05-26-at-5.03.27-PM-e1685182718225.jpeg" alt="">
        </div>
        <div class="right">
            <p>At Homeless Sadqa Welfare Trust, our mission is to alleviate homelessness and provide holistic support to those in need. We are driven by a deep commitment to restore hope, dignity, and stability in the lives of individuals and families experiencing homelessness. Through our network of branches and dedicated team, we strive to create a positive and lasting impact on the communities we serve.</p>
            <p>
            Through our mission, we strive to bring hope and transformation to the lives of those affected by homelessness. We firmly believe that everyone deserves a safe and stable place to call home. Join us in our mission, as we work tirelessly to empower individuals, foster a sense of community, and advocate for lasting change. Together, we can make a profound difference in the lives of the homeless and build a brighter future for all.
            </p>
        </div>
    </div>
</div>

<div class="my-gallery">
    <div class="heading">
        <h1>Our Image Gallery</h1>
        <p>Capturing moments of hope, resilience, and community in our journey</p>
    </div>
    <div class="gallery-data">
        <div class="gallery">
            <?php
            $args = array(
            'post_type' => 'gallery',
            'posts_per_page' => -1 // Retrieve all gallery posts
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

</div>



<?php 
get_footer();
?>