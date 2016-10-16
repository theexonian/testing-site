<?php 
/*
Template Name: PBJ -- Text page with no margin
*/

get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="article">
		<div class="container">
			<div class="row"><div class="span12">
				<div class="article-whitebg">
					<div class="row"><div class="span10 offset1">
						<h1 class="article-page-heading"><?php the_title(); ?></h1>
					</div></div>
					<div class="row"><div class="span8 offset2">
						<div class="article-text">
							<?php the_content(' '); ?>
						</div>
					</div></div>
					<div style="clear:both"></div>
				</div>
			</div></div>
		</div>
	</div>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>