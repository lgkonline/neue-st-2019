<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://lib.lgkonline.com/pill-menu/style.min.css">
</head>

<body <?php body_class(); ?>>
<div class="lgk-cookie-message cc_banner-wrapper" data-legal-link="https://neue.st/datenschutzerklaerung/"></div>

<div class="lgk-pill">
    <iframe class="lgk-pill-content" src=""></iframe>
</div>
<div class="lgk-pill-btn black">
    <span class="lgk-pill-icon"></span>
</div>
<div class="lgk-pill-wrapper"></div>
<script src="https://lib.lgkonline.com/pill-menu/script.min.js"></script>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<a href="https://lgk.io" target="_blank" rel="noopener" class="lgk-logo">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 612 612" viewBox="0 0 612 612" xml:space="preserve"><g><ellipse class="st0" fill="transparent" cx="306.3" cy="303.8" rx="264" ry="269.5"/></g><circle fill="#fac8a1" cx="306" cy="306" r="50"/><path class="st1" fill="#fac8a1" d="m522.4 89.6c-119-120-312.7-120.9-432.7-1.9s-120.9 312.7-1.9 432.7l1.9 1.9c120 119 313.8 118.1 432.7-1.9 118.2-119.2 118.2-311.5 0-430.8zm-73.9 76c11.8 12 22.1 25.5 30.6 40.1l-37 37c-7.2-15.5-17-29.6-28.9-41.8l35.3-35.3zm-167.7-108.3c8.4-0.8 16.8-1.3 25.2-1.3s16.6 0.4 24.8 1.2v100.8c-16.6-2.8-33.5-2.7-50 0.1v-100.8zm50 345.6v151.9c-8.1 0.8-16.3 1.2-24.7 1.2-10.5 0-20.9-0.7-31.3-2-1-0.2-2.8-0.4-4.1-0.5l-1.6-0.2c-1.2-0.2-2.5-0.4-3.7-0.6l-2-0.3c-1.2-0.2-2.4-0.4-3.6-0.7l-2-0.4c-1.2-0.2-2.4-0.5-3.6-0.7l-1.9-0.4c-1.2-0.3-2.4-0.5-3.6-0.8l-1.5-0.4c-4.2-1-8.4-2.1-12.5-3.4l-1.8-0.5c-1.1-0.3-2.2-0.7-3.3-1l-2.1-0.7-3.2-1.1-2.2-0.8-3.1-1.1-2.2-0.8c-1-0.4-2.1-0.8-3.1-1.2l-2.1-0.9c-2-0.8-4-1.7-6-2.6l-1.8-0.8c-0.9-0.4-1.9-0.8-2.8-1.3l-2.4-1.1-2.7-1.3-2.4-1.2-2.6-1.3-2.5-1.3-2.5-1.3-2.5-1.4-2.3-1.3-3-1.8-1.9-1.1c-1.5-0.9-3.1-1.9-4.6-2.8l-1.9-1.2c-0.9-0.6-1.9-1.2-2.8-1.9l-2-1.4-2.7-1.8-2-1.4-2.6-1.9-1.9-1.4c-0.9-0.7-1.9-1.4-2.8-2.1l-1.7-1.3c-1.2-0.9-2.4-1.9-3.6-2.9l-0.8-0.7-4.2-3.6-1.3-1.2c-1-0.8-1.9-1.7-2.9-2.5l-1.6-1.4c-0.9-0.8-1.7-1.6-2.6-2.4l-1.6-1.5c-0.8-0.8-1.7-1.6-2.5-2.5l-1.5-1.5-0.7-0.7 35.6-35.1c-77.4-78.6-76.5-205 1.9-282.5l35.4 35.4c-59 58.1-59.7 153.1-1.6 212.1l-35.6 35.1c31.4 32 72.7 52.4 117.2 58.1v-101.9c-53.4-13.9-85.5-68.6-71.5-122s68.6-85.5 122-71.5 85.5 68.6 71.5 122c-9.2 35.2-36.8 62.6-72 71.6zm152.7 79.1l-70.7-70.7c11.9-12.1 21.8-26.2 29-41.5l73.3 73.3c-9.2 14-19.8 27-31.6 38.9z"/></svg>
		</a>
		<div class="lgk-logo-bg"></div>
		<script>
			var lgkLogo = document.getElementsByClassName("lgk-logo")[0];
			var lgkLogoBg = document.getElementsByClassName("lgk-logo-bg")[0];
			if (lgkLogo && lgkLogoBg) {
				function showLgkLogo() {
					if (lgkLogo.classList.contains("hide")) {
						lgkLogo.classList.remove("d-none");
						lgkLogoBg.classList.remove("d-none");
						setTimeout(function() {
							lgkLogo.classList.remove("hide");
							lgkLogoBg.classList.remove("hide");
						}, 300);
					}
				}

				window.addEventListener("scroll", function() {
					if ((window.innerHeight + window.scrollY) >= (document.body.offsetHeight - 20)) {
						showLgkLogo();
					}
					else if ((document.body.scrollTop + document.documentElement.scrollTop) > 0) {
						if (!lgkLogo.classList.contains("hide")) {
							lgkLogo.classList.add("hide");
							lgkLogoBg.classList.add("hide");
							setTimeout(function() {
								lgkLogo.classList.add("d-none");
								lgkLogoBg.classList.add("d-none");
							}, 300);
						}
					}
					else {
						showLgkLogo();
					}
				});
			}
		</script>

		<header id="masthead" class="<?php echo (is_singular() || is_home()) && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

			<div class="site-branding-container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .layout-wrap -->

			<?php if ( (is_singular() || is_home()) && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						twentynineteen_post_thumbnail();
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
					if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
						$classes = 'entry-header has-discussion';
					}
					?>
					<div id="entry-header" class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div><!-- .entry-header -->
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

		<script>
			var masthead = document.querySelector("#masthead.featured-image");
			var lgkPillBtn = document.querySelector(".lgk-pill-btn");

			if (masthead && lgkPillBtn) {
				lgkPillBtn.classList.remove("black");

				window.addEventListener("scroll", function() {
					if ((window.scrollY) >= (masthead.offsetHeight)) {
						console.log("add");
						lgkPillBtn.classList.add("black");
					}
					else {
						console.log("remove");
						lgkPillBtn.classList.remove("black");
					}
				});
			}
		</script>

	<div id="content" class="site-content">
