<section class="spec" id="spec">
  <?php 

  $args = [
    'post-type' => 'post',
    'posts_per_page' => 1,
    'p' => 13,
  ];

  $articleSchool = new WP_Query($args);

  ?>
  <?php if ($articleSchool->have_posts()): while ($articleSchool->have_posts()) : $articleSchool->the_post(); ?>
      <main class="main-spec">
        <div class="spec-content">
          <h1 class="spec-title">
            <?php the_title(); ?>
          </h1>
          <div class="spec-text"><?php the_content(); ?></div>
        </div>
        
        <div class="spec-picture">
          <a href="https://fr.wordpress.org/download/" class="spec-picture__link">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="logo wordpress">
          </a>
        </div>
    </main>
  <?php endwhile; endif; ?> 
</section>   