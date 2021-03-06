<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<div class="col-md-4">
<article id="post-<?php the_ID();?>" <?php post_class();?>>
	<?php
if (is_sticky() && is_home()):
    echo twentyseventeen_get_svg(array('icon' => 'thumb-tack'));
endif;
?>
    
	



    <!-- .entry-header -->

	<?php if ('' !== get_the_post_thumbnail() && !is_single()): ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('twentyseventeen-featured-image');?>
			</a>
		</div>

    <!-- .post-thumbnail -->
	<?php endif;?>
    
    <header class="entry-header">
		<?php
if ('post' === get_post_type()) {
    echo '<div class="entry-meta">';
    if (is_single()) {
        twentyseventeen_posted_on();
    } else {
        echo get_the_title();
        twentyseventeen_edit_link();
    }
    ;
    echo '</div><!-- .entry-meta -->';
}
;

?>
	</header>
    

	<div class="entry-content">
		<?php
the_content(
    sprintf(
        /* translators: %s: Post title. */
        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen'),
        get_the_title()
    )
);

wp_link_pages(
    array(
        'before' => '<div class="page-links">' . __('Pages:', 'twentyseventeen'),
        'after' => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after' => '</span>',
    )
);
?>
	</div><!-- .entry-content -->

	<?php
if (is_single()) {
    twentyseventeen_entry_footer();
}
?>

</article><!-- #post-<?php the_ID();?> -->
</div>