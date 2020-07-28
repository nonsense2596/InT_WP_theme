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

<div class="home">
    <div class="container">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
</div>
<section class="container-fluid">
    <div class="row marketing">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="block">
                        <i class="fa fa-bar-chart fa-3"></i>
                        <h3>Subheading</h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="block">
                        <i class="fa fa-code fa-3"></i>
                        <h3>Subheading</h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="block">
                        <i class="fa fa-desktop fa-3"></i>
                        <h3>Subheading</h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="row content-region-1 pt50 pb40">
    <div class="container">
        <div class="col-md-12">
            <h1>Clean Bootstrap Wordpress Theme</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien sem, laoreet eu tempus vitae, sollicitudin eu odio</p>
        </div>
    </div>
</section>



<!--<div class="home">
    <div class="container">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
</div>
<div class="home">
    <div class="container">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
</div>-->


asdasd body bottom
<?php wp_footer(); ?>
</body>
</html>