<?php
/*
Template Name: Athlete
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="elite-header-image">

		<div class="elite-header-img">
			<?php the_post_thumbnail( 'full' , array( 'class' => 'aligncenter' ) ); ?>
		</div>

	</div>

	<div class="clear"></div>

	<div id="elite-heading">

		<div class="elite-heading-container">

			<div class="headshot">
				<img src="<?php echo get_post_meta($post->ID, 'headshot', true); ?>"></img>
			</div>

			<div class="elite-heading">

				<h1><?php the_title(); ?></h1>

				<div class="event">
					<?php echo get_post_meta($post->ID, 'event', true); ?>
				</div>

				<div class="lines">
					<img src="http://blog.altrazerodrop.com/wp-content/uploads/2015/06/athlete-event-lines.png"></img>
				</div>

			</div>

			<div class="clear"></div>

			<div id="personal-data">

				<div class="social">
					<?php echo get_post_meta($post->ID, 'facebook', true); ?>
					<?php echo get_post_meta($post->ID, 'twitter', true); ?>
					<?php echo get_post_meta($post->ID, 'youtube', true); ?>
					<?php echo get_post_meta($post->ID, 'google', true); ?>
					<?php echo get_post_meta($post->ID, 'instagram', true); ?>
					<?php echo get_post_meta($post->ID, 'blog', true); ?>
				</div>

				<div class="birth">
					<b>Birth Date:</b><br>
					<?php echo get_post_meta($post->ID, 'birth', true); ?>
				</div>

				<div class="hometown">
					<b>Hometown:</b><br>
					<?php echo get_post_meta($post->ID, 'hometown', true); ?>
				</div>

				<div class="fav-shoe">
					<b>Favorite Shoe:</b><br>
					<?php echo get_post_meta($post->ID, 'fav-shoe', true); ?>
				</div>

			</div>

			<div class="clear"></div>

			<div class="quote">
				<p><?php echo get_post_meta($post->ID, 'quote', true); ?></p>
			</div>

		</div>

		<div class="clear"></div>

	</div>

	<div id="elite-page">

		<div class="content elite-left">
			<?php the_content(); ?>
		</div><!--/ content-->

		<div class="elite-right">
			<?php echo get_post_meta($post->ID, 'video', true); ?>
		</div>

		<div class="clear"></div>

	</div>

	<div id="elite-large-image">

		<img src="<?php echo get_post_meta($post->ID, 'large-image', true); ?>" />

	</div>

	<div id="elite-highlights">

		<h2>Career Highlights</h2>

		<hr>

		<ul class="two-col-special">

			<?php echo get_post_meta($post->ID, 'highlights', true); ?>

		</ul>

	</div>

	<div id="elite-posts">

		<div class="container">

			<?php $args = array('tag_slug__and' => array('runners-story')); ?>
			<?php $postslist = get_posts( $args ); ?>
			<ul>
			<?php foreach ( $postslist as $post ) : setup_postdata( $post ); ?>
				<li>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail( 'thumbnail', array('class' => 'aligncenter')); ?>
					</a>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_title(); ?>
					</a>
				</li>
			<?php endforeach; ?>
			</ul>

		</div>

	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>