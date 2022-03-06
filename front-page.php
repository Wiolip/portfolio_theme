<?php

$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');

$workflow_title = get_field('workflow_title');

$service_logo_1 = get_field('service_logo_1');  //by URL
$service_1 = get_field('service_1');
$description_1 = get_field('description_1');

$service_logo_2 = get_field('service_logo_2');  // by array
$servicelogo2 = $service_logo_2 ['sizes']['thumbnail'];
$alt = $service_logo_2['alt'];
$service_2 = get_field('service_2');
$description_2 = get_field('description_2');

$service_logo_3 = get_field('service_logo_3');
$service_3 = get_field('service_3');
$description_3 = get_field('description_3');

$service_logo_4 = get_field('service_logo_4');
$service_4 = get_field('service_4');
$description_4 = get_field('description_4');

$workflow_title_2 = get_field('workflow_title_2');
$workflow_description = get_field('workflow_description');

$portfolio_title = get_field('portfolio_title');


$webpage1 = get_field('webpage1');
$webpage2 = get_field('webpage2');
$webpage3 = get_field('webpage3');
$webpage4 = get_field('webpage4');
$webpage5 = get_field('webpage5');
$webpage6 = get_field('webpage6');

$cta = get_field('cta');


$casestudy_title = get_field('casestudy_title');
$moodboard = get_field('moodboard');
$campaign = get_field('campaign');


$about_title = get_field('about_title');
$about_info = get_field('about_info');

$contact_heading = get_field('contact_heading');
$contact = get_field('contact');




get_header() ?>


<header id="header" class="header">
        <div class="header__hero">

            <?php if($hero_title): ?>
            <h1 class="header__heading"><?php echo $hero_title; ?><span class="header__dot">.</span></h1>
                <?php endif; ?>
            <hr class="header__spacer">
            <?php if($hero_subtitle): ?>
            <p class="header__content"><?php echo $hero_subtitle; ?>
            </p> <?php endif; ?>
        </div>

        <div class="header__animation">
            <ul class="circle">
                <li class="circle__animation__item"></li>
                <li class="circle__animation__item"></li>
                <li class="circle__animation__item"></li>
                <li class="circle__animation__item"></li>
                <li class="circle__animation__item"></li>
                <li class="circle__animation__item"></li>
                <li class="circle__animation__item"></li>
            </ul>
        </div>
    </header>



    <!-- ---- workflow------  -->

    <section id="workflow" class="workflow">
        <div class="container">


            <div>
                <span class="advanced__number">1.</span>
                <?php if($workflow_title): ?>
                <h2 class="advanced__heading" title="<?php echo $workflow_title; ?>"><?php echo $workflow_title; ?></h2>
                <?php endif; ?>
            </div>

            <div class="row ">

                <div class="column--4">
                <?php if($service_logo_1): ?>
                    <img src="<?php echo $service_logo_1; ?>" class="workflow__logo" alt="">
                    <?php endif; ?>

                    <?php if($service_1): ?>
                    <h3 clas="workflow__item"><?php echo $service_1; ?> </h3 >
                    <?php endif; ?>

                     <?php if($description_1): ?>
                    <p class="workflow__content"><?php echo $description_1; ?></p> <?php endif; ?>
                </div>

                <div class="column--4">
                <?php if($servicelogo2): ?>
                    <img src="<?php echo $servicelogo2; ?>" class="workflow__logo" alt="<?php echo $alt; ?>">
                    <?php endif;?>

                    <?php if($service_2): ?>
                    <h3 clas="workflow__item"><?php echo $service_2; ?></h3>
                    <?php endif; ?>

                    <?php if($description_2): ?>
                    <p class="workflow__content"><?php echo $description_2; ?></p>
                    <?php endif; ?>



                </div>
                <div class="column--4">
                <?php if($service_logo_3): ?>
                    <img src="<?php echo $service_logo_3; ?>" class="workflow__logo" alt="">
                    <?php endif; ?>

                    <?php if($service_3): ?>
                    <h3 clas="workflow__item"><?php echo $service_3; ?> </h3 >
                    <?php endif; ?>

                     <?php if($description_3): ?>
                    <p class="workflow__content"><?php echo $description_3; ?></p> <?php endif; ?>
                </div>

                <div class="column--4">
                <?php if($service_logo_4): ?>
                    <img src="<?php echo $service_logo_4; ?>"  class="workflow__logo" alt=""> <?php endif; ?>

                   <?php if($service_4): ?>
                    <h3 clas="workflow__item"><?php echo $service_4; ?> </h3 >
                    <?php endif; ?>

                     <?php if($description_4): ?>
                    <p class="workflow__content"><?php echo $description_4; ?></p> <?php endif; ?>
                </div>

            </div>

            <div class="row">
                <div class="column--2">
                <?php if($workflow_title_2): ?>
                    <h2 class='workflow__heading'><?php echo $workflow_title_2; ?></h2><?php endif; ?>
                </div>

                <div class="column--2">
                <?php if($workflow_description): ?>
                    <p><?php echo $workflow_description; ?> </p><?php endif; ?>
                </div>
            </div>
        </div>
    </section>


     <!--  ------ web page ------ -->


     <section id="webpage">
        <div class="container">

            <div>
                <span class="advanced__number">2.</span>
                <?php if($portfolio_title): ?>
                <h2 class="advanced__heading" title="<?php echo $portfolio_title; ?>"> <?php echo $portfolio_title; ?></h2> <?php endif; ?>
            </div>

            <div class="row portfolio">
                <?php if($webpage1): ?>
                    <div class="column--3">
                        <img src="<?php echo $webpage1 ['image']['url'] ?>" class="portfolio__img" alt="<?php echo $webpage1 ['image']['alt'] ?>">
                        <div class="portfolio__image__layer">
                            <div class="portfolio__img__content">
                                <h2 class="portfolio__img__title"><?php echo $webpage1 ['title'] ; ?></h2>
                                <h3 class="portfolio__img__subtitle"><?php echo $webpage1 ['subtitle'] ; ?></h3>
                                <a href="<?php echo $webpage1 ['button_link'] ; ?>" target="_blank" class="portfolio__img__link"><button
                                        class="portfolio__img__btn"> <?php echo $webpage1 ['button_label'] ; ?></button></a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($webpage2): ?>
                <div class="column--3">
                <img src="<?php echo $webpage2 ['image']['url'] ?>" class="portfolio__img" alt="<?php echo $webpage2 ['image']['alt'] ?>">
                    <div class="portfolio__image__layer">
                        <div class="portfolio__img__content">
                            <h2 class="portfolio__img__title"><?php echo $webpage2 ['title'] ; ?></h2>
                            <h3 class="portfolio__img__subtitle"><?php echo $webpage2 ['subtitle'] ; ?></h3>
                            <a href="<?php echo $webpage2 ['button_link'] ; ?>" target="_blank" class="portfolio__img__link"><button
                                    class="portfolio__img__btn"><?php echo $webpage2 ['button_label'] ; ?></button></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>


                <?php if($webpage3): ?>
                <div class="column--3">
                <img src="<?php echo $webpage3 ['image']['url'] ?>" class="portfolio__img" alt="<?php echo $webpage3 ['image']['alt'] ?>">
                    <div class="portfolio__image__layer">
                        <div class="portfolio__img__content">
                            <h2 class="portfolio__img__title"><?php echo $webpage3 ['title'] ; ?></h2>
                            <h3 class="portfolio__img__subtitle"><?php echo $webpage3 ['subtitle'] ; ?></h3>
                            <a href="<?php echo $webpage3 ['button_link'] ; ?>" target="_blank" class="portfolio__img__link"><button
                                    class="portfolio__img__btn"><?php echo $webpage3 ['button_label']; ?></button></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($webpage4): ?>
                    <div class="column--3">
                    <img src="<?php echo $webpage4 ['image']['url'] ?>" class="portfolio__img" alt="<?php echo $webpage4 ['image']['alt'] ?>">
                        <div class="portfolio__image__layer">
                            <div class="portfolio__img__content">
                                <h2 class="portfolio__img__title"><?php echo $webpage4 ['title'];?></h2>
                                <h3 class="portfolio__img__subtitle"><?php echo $webpage4 ['subtitle'];?></h3>
                                <a href="<?php echo $webpage4 ['button_link'];?>" target="_blank" class="portfolio__img__link"><button
                                        class="portfolio__img__btn"><?php echo $webpage4 ['button_label'];?></button></a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($webpage5): ?>
                <div class="column--3">
                <img src="<?php echo $webpage5 ['image']['url'] ?>" class="portfolio__img" alt="<?php echo $webpage5 ['image']['alt'] ?>">
                    <div class="portfolio__image__layer">
                        <div class="portfolio__img__content">
                            <h2 class="portfolio__img__title"><?php echo $webpage5 ['title'];?></h2>
                            <h3 class="portfolio__img__subtitle"><?php echo $webpage5 ['subtitle'];?></h3>
                            <a href="<?php echo $webpage5 ['button_link'];?>" target="_blank" class="portfolio__img__link"><button
                                    class="portfolio__img__btn"><?php echo $webpage5 ['button_label'];?></button></a>
                        </div>
                    </div>
                </div><?php endif; ?>

                <?php if($webpage6): ?>
                <div class="column--3">
                <img src="<?php echo $webpage6 ['image']['url'] ?>" class="portfolio__img" alt="<?php echo $webpage6 ['image']['alt'] ?>">
                    <div class="portfolio__image__layer">
                        <div class="portfolio__img__content">
                            <h2 class="portfolio__img__title"><?php echo $webpage6 ['title'];?></h2>
                            <h3 class="portfolio__img__subtitle"><?php echo $webpage6 ['subtitle'];?></h3>
                            <a href="<?php echo $webpage6 ['button_link'];?>" target="_blank"
                                class="portfolio__img__link"><button class="portfolio__img__btn"><?php echo $webpage6 ['button_label'];?></button></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </section>



    <!-- ------ cta ------ -->

    <div class="cta">
    <?php if($cta): ?>
        <h2 class="cta__heading"><?php echo $cta; ?></h2>
        <?php endif;?>
    </div>



    <section id="casestudy" class="casestudy">

        <div class="container">
            <div>
                <span class="advanced__number">3.</span>
                <?php if($casestudy_title): ?>
                <h2 class="advanced__heading" title="<?php echo $casestudy_title; ?>"><?php echo $casestudy_title; ?></h2><?php endif;?>
            </div>

            <div class="row">
            <?php if($moodboard): ?>
                    <div class="column--2 img-order">
                        <img src="<?php echo $moodboard ['image']['url'] ?>" class="casestudy__img" alt="<?php echo $moodboard ['image']['alt'] ?>">
                    </div>
                    <div class="column--2 content">
                        <h2 class="casestudy__heading"><?php echo $moodboard ['heading'];?></h2>
                        <p class="casestudy__content"><?php echo $moodboard ['text'];?></p>
                    </div>
            <?php endif;?>
            </div>

            <div class="row">
                <?php if($campaign):?>
                <div class="column--2 column__order">
                    <h2 class="casestudy__heading"><?php echo $campaign ['heading'];?></h2>
                    <h3 class="casestudy__subheading"><?php echo $campaign ['subheading'];?></h3>
                    <p class="casestudy__content"><?php echo $campaign['text'];?></p>
                </div>
                <div class="column--2">
                <img src="<?php echo $campaign ['image']['url'] ?>" class="casestudy__img" alt="<?php echo $campaign ['image']['alt'] ?>">
                </div>
                <?php endif;?>
            </div>
        </div>
    </section>


    <!-- -------------- about -------------- -->

    <section id="about">
        <div class="container">
            <div>
                <span class="advanced__number">4.</span>
                <?php if($about_title):?>
                <h2 class="advanced__heading" title="<?php echo $about_title ?>"><?php echo $about_title ?></h2><?php endif; ?>
            </div>

            <div class="row about">
            <?php if($about_info):?>
                    <div class="column--3 column__about pd">
                        <h2 class="about__heading"><?php echo $about_info['heading'];?> </h2>
                        <p><?php echo $about_info['text'];?> </p>

                    </div>

                    <div class="column--3  column__about column__order">

                        <img src="<?php echo $about_info ['image']['url'] ?>" class="about__img" alt="<?php echo $about_info ['image']['alt'] ?>">


                        <div class="about__img__layer">
                            <h3 class="about__img__title"><?php echo $about_info['layer_title'];?></h3>
                        </div>

                    </div>

                    <div class="column--3 column__about pd">
                        <h2></h2>
                        <p>
                        <?php echo $about_info['text2'];?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>



    <!-- ----- contact ------  -->

    <section id="contact">
        <div class="container">

            <div>
                <span class="advanced__number">5.</span>
                <?php if($contact_heading): ?>
                <h2 class="advanced__heading" title="<?php echo $contact_heading ?>"><?php echo $contact_heading ?></h2><?php endif; ?>
            </div>

            <div class="row">

                <div class="column--2 contact__animation">

                    <ul class="animation__triangle">
                        <li class="animation__triangle__item"></li>
                        <li class="animation__triangle__item"></li>
                        <li class="animation__triangle__item"></li>
                    </ul>

                </div>

                <?php if($contact):?>
                <div class="column--2 content">
                    <h3 class="contact__subheading"><?php echo $contact['subtitle'];?></h3>
                    <h2 class="contact__heading"><?php echo $contact['title'];?></h2>

                    <p class="contact__content"><?php echo $contact['text'];?></p>

                    <a href="mailto:hello@wiolipcreates.pl" class="contact__link"><?php echo $contact['email'];?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>




    <?php get_footer(); ?>