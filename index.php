<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
<div class="container-12">
			<div class="grid-12">
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
			
			<?php endif; ?>

<?php get_footer(); ?>