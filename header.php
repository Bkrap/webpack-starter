<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php generic_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php if (is_single()) {
    echo esc_html(wp_strip_all_tags(get_the_excerpt(), true));
} else {
    bloginfo('description');
} ?>" />
<meta name="keywords" content="<?php echo esc_html(implode(', ', wp_get_post_tags(get_the_ID(), array( 'fields' => 'names' )))); ?>" />
<link rel="canonical" href="<?php echo esc_url('https://' . $_SERVER["HTTP_HOST"] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>" />
<script type="application/ld+json">
{
"@context": "https://www.schema.org/",
"@type": "WebSite",
"name": "<?php bloginfo('name'); ?>",
"url": "<?php echo esc_url(home_url()); ?>/"
}
</script>
<script type="application/ld+json">
{
"@context": "https://www.schema.org/",
"@type": "Organization",
"name": "<?php bloginfo('name'); ?>",
"url": "<?php echo esc_url(home_url()); ?>/",
"logo": "<?php if (has_custom_logo()) {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
    echo esc_url($logo[0]);
} ?>",
"image": "<?php if (has_site_icon()) {
    echo esc_url(get_site_icon_url());
} ?>",
"description": "<?php bloginfo('description'); ?>"
}
</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<div id="branding">
<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">

</div>
<div id="site-description"<?php if (!is_single()) {
    echo ' itemprop="description"';
} ?>><?php bloginfo('description'); ?></div>
</div>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<span class="looper before" tabindex="0"></span>
<button type="button" class="menu-toggle first"><span class="menu-icon">&#9776;</span><span class="menu-text screen-reader-text"><?php esc_html_e(' Menu', 'generic'); ?></span></button>
<?php wp_nav_menu(array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' )); ?>
<div id="search"><form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url()); ?>/"><label><span class="screen-reader-text"><?php esc_html_e('Search for:', 'generic'); ?></span><input type="search" class="search-field last" placeholder="<?php esc_attr_e('Search …', 'generic'); ?>" value="" name="s"><span></span></label><input type="submit" class="search-submit" value="<?php esc_attr_e('Search', 'generic'); ?>"></form></div>
<span class="looper after" tabindex="0"></span>
</nav>
</header>
<div id="container">
<main id="content" role="main">