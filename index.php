<?php get_header(); ?>

		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
<div class="row">
			<div class="c12">
				<section class="posts">
					<article class="post">
						<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						<div class="post-content">
							<?php the_excerpt(); ?>
						</div>
						<div class="post-meta">
							<span class="post-date"><?php the_time('j M, Y') ?></span>
						</div>
					</article>
				</section>
			</div>
</div>
			<?php endwhile; ?>
			<?php endif; ?>

<?php get_footer(); ?>