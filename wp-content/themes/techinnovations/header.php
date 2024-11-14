<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Tech Innovations</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <div class="header_section">
        <?php
		wp_nav_menu(array(
			'theme_location' => 'header-menu',
			'menu_class' => 'navbar-nav mr-auto', 
			'container' => 'nav',
			'container_class' => 'navbar navbar-expand-lg navbar-light bg-light',
			'items_wrap' => '
			<div class="logo"><a href="/"><img src="' . get_template_directory_uri() . '/assets/images/logo.webp" alt="Logo"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
		));
		?>

    </div>
    <!-- header section end -->