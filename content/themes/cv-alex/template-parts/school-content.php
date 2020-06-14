<section class="school" id="school">
    <?php 

    $args = [
      'post-type' => 'post',
      'posts_per_page' => 1,
      'p' => 11,
    ];

    $articleSchool = new WP_Query($args);

    ?>
    <?php if ($articleSchool->have_posts()): while ($articleSchool->have_posts()) : $articleSchool->the_post(); ?>
      <main class="main-school">
        <div class="school-picture">
          <a href="https://oclock.io/formations/developpeur-web" class="school-picture__link">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="logo Oclock">
          </a>
        </div>
        <div class="school-content">
          <h1 class="school-title">
            <?php the_title(); ?> 
          </h1>
          <div class="school-text"><?php the_content(); ?></div>
        </div>
      </main>
    <?php endwhile; endif; ?>   
  </section>