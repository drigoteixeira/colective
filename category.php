<?php get_header(); ?>

			<div class="container-12 content" role="main">
				<div class="row">
					<div class="grid-12">

						<?php if ( have_posts() ) : ?>
						<h2 class="category-name"><span>#</span><?php single_cat_title(); ?></h2>
						<?php endif; ?>
						<?php while (have_posts()) : the_post(); ?>

						<section class="posts">
							<article class="post">
								<div class="post-meta">
									<span class="post-date"><?php the_time('j M, Y') ?></span>
								</div>
								<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
								<div class="post-content">
									<?php the_excerpt(); ?>
								</div>
							</article>
						</section>
					</div>
				</div>
				<?php endwhile; ?>
				<div class="grid-12 pagination"><?php pagination('«', '»'); ?></div>
			</div>

<?php get_footer(); ?>