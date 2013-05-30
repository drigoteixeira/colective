<?php get_header(); ?>

			<div class="grid w640 content" role="main">
				<?php if (have_posts()) : ?>
    			<?php while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="c12">
						<section class="posts">
							<article class="post">
								<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
								<div class="post-meta">
									<time class="post-date">07 Junho, 2013</time>
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
							<p>[Inserir Comentários Discus]</p>
						</section>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>

<?php get_footer(); ?>