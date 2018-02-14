<li class="item person <?php echo get_the_directory_filters($post);?> <?php echo get_the_roles($post); ?>">
	<div class="media-object">
		<?php if ( has_post_thumbnail() ) { ?> 
			<div class="media-object-section">
				<a href="<?php the_permalink();?>" aria-label="<?php the_title(); ?>'s website"><?php the_post_thumbnail('medium'); ?>
				</a>							
			</div>
		<?php } ?>	
		<div class="media-object-section">
			<h3>
				<!--<span class="last-name"><?php echo get_post_meta($post->ID, 'ecpt_people_alpha', true); ?></span>-->
				<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
			</h3>
			<?php if ( get_post_meta($post->ID, 'ecpt_position', true) ) : ?>
				<h4><?php echo get_post_meta($post->ID, 'ecpt_position', true); ?></h4>
				<!--<h6>Research Area: <?php echo get_the_directory_filters($post);?>
				</h6>-->
			<?php endif; ?>
			<ul class="contact">
				<?php if ( get_post_meta($post->ID, 'ecpt_phone', true) ) : ?>
					<li><span class="fa fa-phone-square"></span> <?php echo get_post_meta($post->ID, 'ecpt_phone', true); ?></li>
				<?php endif; ?>
				<?php if ( get_post_meta($post->ID, 'ecpt_fax', true) ) : ?>
					<li><span class="fa fa-fax"></span> <?php echo get_post_meta($post->ID, 'ecpt_fax', true); ?></li>
				<?php endif; ?>
				<?php if ( get_post_meta($post->ID, 'ecpt_email', true) ) : ?>
					<li><span class="fa fa-envelope"></span> <a href="mailto:<?php echo get_post_meta($post->ID, 'ecpt_email', true); ?>"> <?php echo get_post_meta($post->ID, 'ecpt_email', true); ?></a></li>
				<?php endif; ?>
				<?php if ( get_post_meta($post->ID, 'ecpt_office', true) ) : ?>
					<li><span class="fa fa-map-marker-alt"></span> <?php echo get_post_meta($post->ID, 'ecpt_office', true); ?></li>
				<?php endif; ?>
				<?php if ( get_post_meta($post->ID, 'ecpt_lab_website', true) ) : ?>
					<li><span class="fa fa-globe"></span> <a href="<?php echo get_post_meta($post->ID, 'ecpt_lab_website', true); ?>" onclick="ga('send', 'event', 'People Directory', 'Group/Lab Website', '<?php the_title(); ?> | <?php echo get_post_meta($post->ID, 'ecpt_lab_website', true); ?>')" target="_blank">Group/Lab Website</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</li>