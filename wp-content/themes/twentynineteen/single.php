<?php get_header(); ?>
<main>
<div class="container">
<?php if(have_posts()){ ?>
	<?php while (have_posts()){ ?>
		<?php the_post();?>
		<div class="row my-5">
			<div class="col-md-6 col-12">
				<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="col-md-6 col-12">
				<?php the_content(); ?>
			</div>
		</div>
		<?php get_template_part('template-parts/post','navigation'); ?>
		<?php } ?>
		<?php } ?>
</div>

</main>

<?php get_footer();?>
