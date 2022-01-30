<?php get_header() ?>


<header id="header" class="header">
        <div class="header__hero">

            <h1 class="header__heading">Wiolip</br>Creates<?php the_field('hero-title'); ?><span class="header__dot">.</span></h1>

            <hr class="header__spacer">
            <p class="header__content">I design and code from scratch beautiful and simple things, and I love what I do<?php the_field('subtitle'); ?>
            </p>
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
                <h2 class="advanced__heading" title="workflow">workflow<?php the_field('workflow_heading'); ?></h2>
            </div>

            <div class="row ">
                <div class="column--4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/logo2.svg'?>" class="workflow__logo" alt="">
                    <h3>01. Research<?php the_field('service_1'); ?></h3>
                    <p class="workflow__content">We will set your expectations and needs. What is your goal? Who do you want to reach? What do you offer?<?php the_field('description_1'); ?></p>
                </div>

                <div class="column--4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/logo2.svg'?>" class="workflow__logo" alt="">
                    <h3 clas="workflow__item">02. Design<?php the_field('service_2'); ?></h3>
                    <p class="workflow__content">The appearance (colors, font, images), layout (element structure), and, in some cases, content of your website.<?php the_field('description_2'); ?></p>
                </div>
                <div class="column--4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/logo3.svg'?>" class="workflow__logo" alt="">
                    <h3 clas="workflow__item">03. Develop<?php the_field('service_3'); ?></h3>
                    <p class="workflow__content">I design easy-to-use websites, aesthetically pleasing, with a focus on simplicity and mobile friendly<?php the_field('description_3'); ?></p>
                </div>

                <div class="column--4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/logo4.svg'?>"  class="workflow__logo" alt="">
                    <h3 clas="workflow__item">04. SEO<?php the_field('service_4'); ?></h3>
                    <p class="workflow__content">Making your content search-friendly matters because it's how you get more relevant users viewing your content.<?php the_field('description_4'); ?></p>
                </div>

            </div>

            <div class="row">
                <div class="column--2">
                    <h2 class='workflow__heading'>Hi. I'm Wioleta, nice to meet you. Please take a look around!<?php the_field('workflow_heading2'); ?></h2>
                </div>
                <div class="column--2">
                    <p>I am passionate about everything related to web development. I like to find inspiration, create moodboards, create mockups and of course I love to code. It is a great satisfaction to see your code turned into a functional website. My goal is to learn several programming languages and bring pages to life with animations <?php the_field('workflow_description'); ?> </p>
                </div>
            </div>
        </div>
    </section>


     <!--  ------ web page ------ -->


     <section id="webpage">
        <div class="container">

            <div>
                <span class="advanced__number">2.</span>
                <h2 class="advanced__heading" title="portfolio">Portfolio <?php the_field('portfolio_heading'); ?></h2>
            </div>

            <div class="row portfolio">
                <div class="column--3">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/mops.jpg'; ?>" class="portfolio__img" alt="">
                    <div class="portfolio__image__layer">
                        <div class="portfolio__img__content">
                            <h2 class="portfolio__img__title">Travel blog<?php the_field('webpage1_heading'); ?></h2>
                            <h3 class="portfolio__img__subtitle">Role: UI & Development</br>Copy & SEO<?php the_field('webpage1_subheading'); ?></h3>
                            <a href="<?php the_field('webpage1_link'); ?>" target="_blank" class="portfolio__img__link"><button
                                    class="portfolio__img__btn"> Go to site<?php the_field('link1name'); ?></button></a>
                        </div>
                    </div>
                </div>

                <div class="column--3">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/wioletalip.jpg'; ?>" class="portfolio__img" alt="">
                    <div class="portfolio__image__layer">
                        <div class="portfolio__img__content">
                            <h2 class="portfolio__img__title">Photography portfolio</h2>
                            <h3 class="portfolio__img__subtitle">Role: UI & Development</h3>
                            <a href="https://myownphotostory.pl" target="_blank" class="portfolio__img__link"><button
                                    class="portfolio__img__btn">Go to site</button></a>
                        </div>
                    </div>
                </div>

                <div class="column--3">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/wiolipcreates.jpg'; ?>" class="portfolio__img" alt="">
                    <div class="portfolio__image__layer">
                        <div class="portfolio__img__content">
                            <h2 class="portfolio__img__title">Company website</h2>
                            <h3 class="portfolio__img__subtitle">Role: UI & Development </h3>
                            <a href="https://wiolipcreates.pl" target="_blank" class="portfolio__img__link"><button
                                    class="portfolio__img__btn">Go to site</button></a>
                        </div>
                    </div>
                </div>

                <div class="column--3">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/kampery.jpg'; ?>" class="portfolio__img" alt="">
                    <div class="portfolio__image__layer">
                        <div class="portfolio__img__content">
                            <h2 class="portfolio__img__title">Company website</h2>
                            <h3 class="portfolio__img__subtitle">Role: UI & Development <br> Copy & SEO</h3>
                            <a href="https://kamperemwdrodze.pl" target="_blank" class="portfolio__img__link"><button
                                    class="portfolio__img__btn">Go to site</button></a>
                        </div>
                    </div>
                </div>

                <div class="column--3">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/horyzont.jpg'; ?>" class="portfolio__img" alt="">
                    <div class="portfolio__image__layer">
                        <div class="portfolio__img__content">
                            <h2 class="portfolio__img__title">Company site</h2>
                            <h3 class="portfolio__img__subtitle">Role: UI & Development <br /> Copy & SEO</h3>
                            <a href="https://horyzont.link" target="_blank" class="portfolio__img__link"><button
                                    class="portfolio__img__btn">Go to site</button></a>
                        </div>
                    </div>
                </div>

                <div class="column--3">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/sklep.jpg'; ?>" class="portfolio__img" alt="">
                    <div class="portfolio__image__layer">
                        <div class="portfolio__img__content">
                            <h2 class="portfolio__img__title">Shop Woocomerce</h2>
                            <h3 class="portfolio__img__subtitle"> Role: Development </h3>
                            <a href="https://shop.myownphotostory.pl" target="_blank"
                                class="portfolio__img__link"><button class="portfolio__img__btn">Go to site</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <!-- ------ cta ------ -->

    <div class="cta">
        <h2 class="cta__heading">Get ready to turn your ideas into reality</h2>
    </div>


    <section id="casestudy" class="casestudy">

        <div class="container">
            <div>
                <span class="advanced__number">3.</span>
                <h2 class="advanced__heading" title="case study">case study</h2>
            </div>

            <div class="row">
                <div class="column--2 img-order">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/moodboard.jpg'; ?>" class="casestudy__img" alt="moodboard">
                </div>
                <div class="column--2 content">
                    <h2 class="casestudy__heading">Moodboard</h2>
                    <p class="casestudy__content">All starts with loose thoughts in your head, remembered images,
                        tastes, certain ideas and images.
                        The next step is to put it all on the inspiration board. The juxtaposition of its elements
                        (colors, photos, graphics, slogans, fonts) creates a certain atmosphere, suggests a specific
                        style. Finally, a website design is created on the basis of moodboards. <br>

                        Red, apart from the well-known meaning of love, fire or danger, also means joy, passion,
                        determination, self-confidence, and leadership. When used as an accent, it stimulates people to
                        make a quick decision. Black is a neutral color. It also symbolizes a high standard and
                        elegance. The color of individualists. It is associated with strength, seriousness,
                        professionalism and self-confidence.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="column--2 column__order">
                    <h2 class="casestudy__heading">Advertising campaign</h2>
                    <h3 class="casestudy__subheading">team work - INCO Get Into Tech</h3>
                    <p class="casestudy__content">The goal of the project was to create an advertising campaign on
                        Facebook for the new generation
                        of the AIR Ton robot-driver. The first step in our project was to research the market using an
                        anonymous questionnaire consisting of open-ended questions. We thoroughly analyzed the obtained
                        results, dividing the respondents by age, gender, interest in new technologies, approach to
                        classic cars, as well as driving conditions and safety. Thanks to a detailed analysis, we
                        selected 3 target people and prepared advertising campaigns on Facebook.</p>
                </div>
                <div class="column--2">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/reklma.jpg'; ?>" class="casestudy__img" alt="kampania reklamowa">
                </div>
            </div>
        </div>
    </section>


    <!-- -------------- about -------------- -->

    <section id="about">
        <div class="container">
            <div>
                <span class="advanced__number">4.</span>
                <h2 class="advanced__heading" title="about">about</h2>
            </div>

            <div class="row about">
                <div class="column--3 column__about pd">
                    <h2 class="about__heading">Hi! I'm Wioleta. </h2>
                    <p>For the last 13 years I have been working as a store manager. I feel good at managing a team, I
                        can manage time, set and achieve goals, and complete projects on time. Despite the fact that I
                        am a team player, I value my individualism very much. My intuition is often guided in my life
                        and it rarely fails me. <br>
                        I left my job to give yourself over creative activities. Currently I'm working as photographer
                        and developing my coding skills. I also develop my personal brand - WiolipCreates.
                    </p>
                </div>

                <div class="column--3  column__about column__order">

                    <img src="<?php echo get_template_directory_uri().'/assets/img/o-mnie.jpg'; ?>" class="about__img" alt="about">


                    <div class="about__img__layer">
                        <h3 class="about__img__title">I'm Wiolip<br />
                            and <br>
                            I Create</h3>
                    </div>

                </div>

                <div class="column--3 column__about pd">
                    <h2></h2>
                    <p>
                        I love traveling so 4 years ago I started a travel blog on WordPress. This was my first
                        experience with building pages. <br>
                        Hundreds of hours dedicated to WordPress, HTML, CSS, many courses, great motivation and
                        determination allowed me to successfully acquire many useful skills needed to create websites.
                        Now I study Java... and I learn fast. <br>
                        I use: HTML, CSS, Bootstrap, Github, Wordpress, Adobe xd, Figma, Ps, Lr, Capture1, Gutenberg
                        block.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- ----- contact ------  -->

    <section id="contact">
        <div class="container">

            <div>
                <span class="advanced__number">5.</span>
                <h2 class="advanced__heading" title="contact">contact</h2>
            </div>

            <div class="row">

                <div class="column--2 contact__animation">

                    <ul class="animation__triangle">
                        <li class="animation__triangle__item"></li>
                        <li class="animation__triangle__item"></li>
                        <li class="animation__triangle__item"></li>
                    </ul>

                </div>


                <div class="column--2 content">
                    <h3 class="contact__subheading">Get in touch</h3>
                    <h2 class="contact__heading">Let's talk about your project</h2>

                    <p class="contact__content">Do you want to hire me? Do you need a new website?
                        I live in Warsaw (Poland) but I can work remotely from anywhere in the world.
                        Send me a message:</p>

                    <a href="mailto:hello@wiolipcreates.pl" class="contact__link">hello@wiolipcreates.pl</a>
                </div>
            </div>
        </div>
    </section>




    <?php get_footer(); ?>