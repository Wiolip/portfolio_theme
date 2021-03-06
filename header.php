<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollw" />
		<?php endif; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <nav id="nav" class="nav">
        <div class="nav__menu">
            <div class="nav__logo">

                <?php
                    if(function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">  <img src="<?php echo $logo[0]; ?>" alt="logo"> </a>

            </div>

            <div class="nav__list" id="navList">
                <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>


                    <?php wp_nav_menu(array(

                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'main-navigation',
                        'add_li_class'  => 'nav__item'

                        ) );
                    ?>

                </ul>
            </div>

        </div>

        <?php
                $socials = get_field('socials');
            ?>

            <?php if($socials): ?>

        <div class="socials">
            <a href="<?php echo $socials['github']; ?>" target="_blank" class="social__item"><i class="fab fa-github "></i></a>
            <a href="<?php echo $socials['insta']; ?>" target="_blank" class="social__item"><i
                    class="fab fa-instagram "></i></a>
            <a href="<?php echo $socials['wp_page']; ?>" target="_blank" class="social__item"><i
                    class="fab fa-wordpress "></i></a>
            <a href="<?php echo $socials['linkedin']; ?>" target="_blank" class="social__item"><i
                    class="fab fa-linkedin social__item"></i></a>
        </div>
        <?php endif; ?>
        <i class="fas fa-bars" onclick="showMenu()"></i>
    </nav>
