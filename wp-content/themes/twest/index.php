<?php

get_header();

?>
    <body>
    <div class="decoration"></div>

    <section class="seo-sectiom">
        <div class="left-block">
            <H1 class="shrift"><?php echo  get_field('name_');?></H1>
            <p class="shrift"><?php echo  get_field('description');?></p>
            <div class="button-green seo-button">
                <a href="#" class="seo">Learn More</a>
            </div>

        </div>
        <div class="image1">
            <img src="assets/img/img_devices.png" alt="">
        </div>
    </section>

    <div data-target='right' class="side-nav side-nav--right"></div>
    <div data-target='left' class="side-nav side-nav--left"></div>

    <section class="slider"><?php
        $args = array(
        'post_type' => 'review'
        );

        ?>
        <div class="slider slider-1" data-slider="itc-slider" data-loop="false">

            <div class="slide-panel">
                <div class="title-slide"><h1>What My</h1><h1 class="doe">Clients Say</h1></div>
                <div class="panel">
                    <div class="arrow afirst" data-slide="prev" >
                        <button class="slider__control" data-slide="prev"></button>

                    </div>
                    <div class="arrow asecond" data-slide="next">
                        <button class="slider__control" data-slide="next"></button>
                    </div>
                </div>
            </div>
            <div class="slider__wrapper">
                <?php

                $query = new WP_Query( $args );


                while ( $query->have_posts() ) {
	                $query->the_post();

                }
                if ( $query->have_posts() ) {
	                while ( $query->have_posts() ) {
		                $query->the_post();
                function do_excerpt($string, $word_limit) {
	                $words = explode(' ', $string, ($word_limit + 1));
	                if (count($words) > $word_limit)
		                array_pop($words);
	                echo implode(' ', $words).' ...';
                }
		                ?>


                <div class="slider__items">
                    <div class="slider__item">
                        <div class="slide">
                            <div class="image-slide">
                              <?php ?>
                            </div>
                            <div class="text">
                                <div class="ex shrift"><?php echo do_excerpt(the_excerpt(), 30);?></div>
                                <div class="title shrift"><?php echo get_field('author'); ?></div>
                                <p class="shrift"><?php echo get_field('position');
                                ?></p>
                            </div>

                        </div>
                    </div>
                    <?php
                            }
                        }
                    else {
	                // ???????????? ???? ??????????????
                        }

                    // ???????????????????? ???????????????????????? ???????????? ??????????. ???????????????????? $post.
                       wp_reset_postdata();
                    ?>
                    <div class="slider__item">
                        <div class="slide second-slide">

                            <div class="image-slide">
                                <img src="assets/img/img2.jpg" alt="l">
                            </div>
                            <div class="text shrift">
                                <div class="ex shrift">???Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing diam, tortor, egestas euismod neque venenatis, viverra. Ante nibh morbi egestas quam lorem ipsum. Eget sit praesent a laoreet. Mi, phasellus quis mauris sollicitudin non. Iaculis ac duis mauris enim. </div>
                                <div class="title"></div>
                            </div>

                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slide second-slide">

                            <div class="image-slide">
                                <img src="assets/img/img2.jpg" alt="l">
                            </div>
                            <div class="text shrift">
                                <div class="ex shrift">???Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing diam, tortor, egestas euismod neque venenatis, viverra. Ante nibh morbi egestas quam lorem ipsum. Eget sit praesent a laoreet. Mi, phasellus quis mauris sollicitudin non. Iaculis ac duis mauris enim. </div>
                                <div class="title"></div>
                            </div>

                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slide second-slide">

                            <div class="image-slide">
                                <img src="assets/img/img2.jpg" alt="l">
                            </div>
                            <div class="text shrift">
                                <div class="ex shrift">???Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing diam, tortor, egestas euismod neque venenatis, viverra. Ante nibh morbi egestas quam lorem ipsum. Eget sit praesent a laoreet. Mi, phasellus quis mauris sollicitudin non. Iaculis ac duis mauris enim. </div>
                                <div class="title"></div>
                            </div>

                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slide second-slide">

                            <div class="image-slide">
                                <img src="assets/img/img2.jpg" alt="l">
                            </div>
                            <div class="text shrift">
                                <div class="ex shrift">???Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing diam, tortor, egestas euismod neque venenatis, viverra. Ante nibh morbi egestas quam lorem ipsum. Eget sit praesent a laoreet. Mi, phasellus quis mauris sollicitudin non. Iaculis ac duis mauris enim. </div>
                                <div class="title"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--             <button class="slider__control" data-slide="prev"></button>-->
            <!--             <button class="slider__control" data-slide="next"></button>-->
        </div>
        <div class="slider-line">


        </div>
    </section>
    <section class="get">
        <div class="right-bottom-block">
            <h1>Get it touch</h1>
            <a href="#">hello@domainexample.com</a>
            <p>237 Haylee Islands Suite 960</p>
        </div>
        <div class="left-bottom-block">
            <form action="index.php">
                <input placeholder="name">
                <input placeholder="Email">
                <textarea placeholder="Write something"></textarea>
            </form>
            <div class="button-green top-button">
                <a href="" class="text-but">Submit Message</a>
            </div>
        </div>

    </section>


    </body>

<?php
get_footer();