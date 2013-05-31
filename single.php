<?php get_header(); ?>

		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="row">
			<div class="c12">
				<section class="posts">
					<article class="post">
						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<div class="post-meta">
							<span class="post-date"><?php the_time('j M, Y') ?></span>
						</div>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
						<div class="categories">
							<p><span>#</span><?php the_category(', '); ?></p>
						</div>
					</article>
				</section>
				<section class="comments">
					<?php comments_template( '', true ); ?>
				</section>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>

<?php get_footer(); ?>