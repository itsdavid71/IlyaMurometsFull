
<?php get_header(); ?>
<?php if ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<input form="contact-form" type="hidden" name="brand" value="<?=the_title();?>">
<?php  endif; ?>
<form action="<?=esc_url(admin_url('admin-post.php'));?>" method="post" id="contact-form"></form>
<?php get_footer(); ?>