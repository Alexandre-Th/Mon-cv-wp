<section class="profil" id="profil">
  <?php 

  $args = [
    'post-type' => 'post',
    'posts_per_page' => 1,
    'p' => 7,
  ];

  $articleSchool = new WP_Query($args);

  ?>
  <?php if ($articleSchool->have_posts()): while ($articleSchool->have_posts()) : $articleSchool->the_post(); ?>
      <header class="header">
        <div class="profil-picture">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="Photo d'Alexandre">
        </div>
        <div class="profil-content">
          <h1 class="profil-title">
            <?php the_title(); ?>
          </h1>
          <div class="profil-text">
            <?php the_content(); ?>
          </div>
        </div>
      </header>
  <?php endwhile; endif; ?>   
</section>