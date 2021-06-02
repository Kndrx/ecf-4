<?php get_header();

/*
  Template Name: Services
*/
?>

<div class="container my-3">

  <div class="headlines">
    <?php
    $the_query = new WP_Query('posts_per_page=1');
    while($the_query->have_posts()) : $the_query->the_post();
    ?>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="w-auto">
            <?php the_post_thumbnail('medium'); ?>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php get_the_excerpt(); ?></p>
              <p class="card-text"><small class="text-muted">Publié le <?php the_time( get_option( 'date_format' ) ); ?>
                  par <?php the_author(); ?> • <?php comments_number(); ?></small></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary post__link">Lire la suite</a>
            </div>
          </div>
        </div>
      </div>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </div>

  <div class="container d-flex">
		<div class="row">
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<article class="post col">
					<div class="card" style="width: 18rem; height: 40rem;">
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
						<img src="<?php echo $url ?>" />
						<div class="card-body">
							<h2 class="card-title"><?php the_title(); ?></h2>
							

							<p class="post__meta">
								Publié le <?php the_time( 'j F Y à H:i' ); ?>
								par <?php the_author(); ?> • <?php comments_number( 'Aucun commentaire', 'Un commentaire', '% commentaires' ); ?>
								<?php comments_number( '0', '1', '%' ); ?>
							</p>
							<a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
						</div>
					</div>
				</article>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>