<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>asd</title>
    <?php wp_head(); ?>
</head>
<body>


<nav class="navbar navbar-expand-md navbar-light fixed-top asdkek" role="navigation"><!-- bg-transparent sticky-top -->
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>

<section class="home">
</section>
<section class="home">
</section>

asdasd body bottom
<?php wp_footer(); ?>
</body>
</html>