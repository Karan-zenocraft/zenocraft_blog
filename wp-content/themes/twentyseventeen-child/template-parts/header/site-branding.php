<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
//print_r(wp_get_upload_dir());
//die();
//$uploads = wp_upload_dir();
//echo wp_basename( $uploads['baseurl'] );

?>
<style>
.site-header .menu-scroll-down{display: none!important}
</style>
<div class="site-branding">
	<div class="wrap">

		<?php the_custom_logo();?>

		<div class="site-branding-text">
			<?php if (is_front_page()): ?>
				<a href="http://zenocraft.com"><img src="<?php echo $uploads['baseurl'] . "http://zenocraft.com/zenocraft_blog/wp-content/uploads/2019/11/logo.png"; ?>" alt="Zenocraft Logo" class="Logo"></a>
			<?php else: ?>
            <?php $uploads = wp_upload_dir();?>
			<a href="http://zenocraft.com"><img src="<?php echo $uploads['baseurl'] . "/2019/11/logo.png"; ?>" alt="Zenocraft Logo" class="Logo"></a>

			<?php endif;?>

			<?php
$description = get_bloginfo('description', 'display');

if ($description || is_customize_preview()):
?>

			<?php endif;?>
		</div><!-- .site-branding-text -->

		<?php if ((twentyseventeen_is_frontpage() || (is_home() && is_front_page())) && !has_nav_menu('top')): ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg(array('icon' => 'arrow-right')); ?><span class="screen-reader-text"><?php _e('Scroll down to content', 'twentyseventeen');?></span></a>
	<?php endif;?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
