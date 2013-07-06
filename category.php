<?php get_header(); ?>

			<div class="container-12 content" role="main">
				<div class="row">
					<div class="grid-12">

						<?php if ( have_posts() ) : ?>
						<span class="category-name"><span>#</span><?php single_cat_title(); ?></span>
						<?php endif; ?>
						<?php while (have_posts()) : the_post(); ?>

						<section class="posts">
							<article class="post">
								<div class="post-meta">
									<span class="post-date"><?php the_time('j M, Y') ?></span>
								</div>
								<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
								<div class="post-content">
									<?php the_excerpt(); ?>
								</div>
							</article>
						</section>
					</div>
				</div>
				<?php endwhile; ?>
				<div class="grid-12">
					<div class="pagination">
						<?php pagination('«', '»'); ?>
					</div>
				</div>
			</div>

<?php get_footer(); ?>