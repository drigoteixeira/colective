<?php get_header(); ?>

			<div class="grid w640 content" role="main">
				<div class="row">
					<div class="c12">
						<section class="posts">
							<article class="post">
								<h2 class="post-title">404 - Postagem não encontrada</h2>
								<div class="post-content">
									<p>Unfortunately the content you're looking for isn't here. There may be a misspelling in your web address or you may have clicked a link for content that no longer exists. Perhaps you would be interested in our most recent articles.</p>

									<p>Infelismente o que conteúdo que você estava procurando não está mais disponível. Isso pode ter acontecido por algum erro digitação na barra de endereços ou porque clicou em um link que não existe mais.</p>

									<p>Isso acontece com os melhores. Talvez você esteja interessado em saber as atualizações mais recentes:</p>
								</div>
							</article>
						</section>
					</div>
				</div>
				<div class="row">
					<?php query_posts('cat=&showposts=5'); ?>
					   <ul id="recentPosts">

					   		<?php while (have_posts()) : the_post(); ?>

					      <li>
					        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
					        <div class="postDate"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><time class="post-date"><?php the_time('j M, Y') ?></time></abbr></div>
					      </li>

					   		<?php endwhile; ?>
					   
					    </ul>
				</div>
			</div>

<?php get_footer(); ?>