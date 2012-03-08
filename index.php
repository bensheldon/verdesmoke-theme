<?php get_header();?>
			<div id="body" class="container_10">
				<div id="content" class="grid_6">
					<div id="content-inner">
						<?php if (have_posts()) : ?>

							<?php while (have_posts()) : the_post(); ?>
					
								<div class="post clearfix" id="post-<?php the_ID(); ?>">
									<div class="postmetadata"><?php the_time('F jS, Y') ?> <?php edit_post_link(__("<small>edit</small>"), ''); ?></div>
									<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'NeeWee');?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
									<div class="postmetadata"><!--<?php _e('Category', 'NeeWee');?>: <?php the_category(', ') ?>--><?php the_tags(__('Tags', 'NeeWee') . ': ', ', ') ?></div>
									<div class="entry">
										<?php the_content(__('Read the rest of this entry &raquo;', 'NeeWee')); ?>
									</div>
								</div>
								<hr/>
					<?php comments_template(); ?>
							<?php endwhile; ?>
					
							<div class="navigation">
								<div class="alignleft"><?php next_posts_link('&laquo; ' . __('Previous Entries', 'NeeWee')) ?></div>
								<div class="alignright"><?php previous_posts_link(__('Next Entries', 'NeeWee') . ' &raquo;') ?></div>
							</div>
					
						<?php else : ?>
					
							<h2 class="center"><?php _e('Not Found', 'NeeWee');?></h2>
							<p class="center"><?php _e('Sorry, but you are looking for something that isnt here.', 'NeeWee');?></p>
							<?php include (TEMPLATEPATH . "/searchform.php"); ?>
					
						<?php endif; ?>
						</div>
				</div>
				<div id="sidebar" class="grid_4">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?><?php endif; ?>				
				</div>
			</div>
			<div class="clear"></div> 
<?php get_footer();?>
