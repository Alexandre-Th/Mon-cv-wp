<section class="profil" id="profil">
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
</section>