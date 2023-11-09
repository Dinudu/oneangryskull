<?php
/**
 * Template Name: About Page
 * Description: A Page Template with a darker design.
 */

get_header();
?>

  <!-- ========================  Main header ======================== -->

  <section class="main-header" style="background-image:url(assets/images/gallery-4.jpg)">
            <header>
                <div class="container text-center">
                    <h1 class="h2 title">About us</h1>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="index.html"><span class="icon icon-home"></span></a></li>
                        <li><a class="active" href="about.html">About</a></li>
                    </ol>
                </div>
            </header>
        </section>

        <!-- ================== Intro section default ================== -->

        <section>

            <!-- === Intro text === -->

            <div class="about">

                <div class="image">
                    <img src=<?php echo get_theme_file_uri( 'assets/images/map-lg.jpg' );  ?> alt="Alternate Text" />
                </div>

                <div class="container">

                    <!-- === Grid === -->

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Founding store</h4>
                            <p>We are constantly looking for talent with technical skills, a problem-solving approach and with a natural ability to take responsibility and act.</p>
                        </div>
                        <div class="col-md-6">
                            <h4>About Lager Store</h4>
                            <p>Ela created Lager in 1999 to be your friendly neighborhood store for the very best beauty & honest, expert advice.</p>

                        </div>
                    </div>

                    <hr />

                    <!-- === Text === -->

                    <div class="text">
                        <h4>Our success</h4>
                        <p>
                            We may add additional Sites from time to time as we expand our beauty offerings and these Terms of Use will govern those new Sites when added. You may be accessing our Sites from a computer or mobile phone device (through a smartphone application, for example) and these Terms of Use govern your use of our Sites and your conduct, regardless of the means of access. You may be using our interactive services ("Interactive Services"), such as our Product Ratings & Reviews and Beauty Junkie Profile functionality, and these Terms of Use govern your use of those Interactive Services
                        </p>
                        <h4>What we beleive in</h4>
                        <p>
                            We are aware of our social responsibilities and especially the responsibilities to our own stakeholders.
                            These include employees, customers, suppliers and other relevant interested parties. We are also aware that we must ensure that our impact on the environment is minimal.
                        </p>

                    </div>

                    <hr />

                    <!-- === Numbers === -->

                    <!--<div class="numbers">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="item">
                                    <div class="number">45</div>
                                    <div class="title">Years</div>
                                    <div class="text">We act skilfully</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="number">12</div>
                                    <div class="title">Countries</div>
                                    <div class="text">We respond quickly </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="number">120</div>
                                    <div class="title">Projects</div>
                                    <div class="text">We focus on market</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="number">9</div>
                                    <div class="title">Factories</div>
                                    <div class="text">We work with our customers </div>
                                </div>
                            </div>
                        </div>
                    </div>--> <!--/numbers-->

                </div>

            </div>

            <!-- === Our team === -->

            <div class="team">

                <!-- === Our team header === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h1 class="h2 title">Our Products</h1>
                            <div class="text">
                                <p>Our architects and designers constantly and carefully monitor the environment, they accept and develop changes, research fashion and architectural, as well as sociological, changes and transform them into unique design.</p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row row-clean">

                    <!-- === team member === -->

                    <div class="col-sm-3">
                        <article>
                            <div class="details details-text">
                                <div class="inner">
                                    <h3 class="title">Men</h3>
                                    <h6 class="title">New Design</h6>
                                </div>
                            </div>
                            <div class="image">
                                <img src=<?php echo get_theme_file_uri( 'assets/images/user-1.jpg' );  ?> alt="" />
                            </div>
                            <div class="details details-social">
                                <div class="inner">
                                    <a href="#"><i class="fa fa-phone"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === team member === -->

                    <div class="col-sm-3">
                        <article>
                            <div class="details details-text">
                                <div class="inner">
                                    <h3 class="title">Women</h3>
                                    <h6 class="title">New Design</h6>
                                </div>
                            </div>
                            <div class="image">
                                <img src=<?php echo get_theme_file_uri( 'assets/images/user-2.jpg' );  ?> alt="" />
                            </div>
                            <div class="details details-social">
                                <div class="inner">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === team member === -->

                    <div class="col-sm-3">
                        <article>
                            <div class="details details-text">
                                <div class="inner">
                                    <h3 class="title">Accesories</h3>
                                    <h6 class="title">New Design</h6>
                                </div>
                            </div>
                            <div class="image">
                                <img src=<?php echo get_theme_file_uri( 'assets/images/user-3.jpg' );  ?> alt="" />
                            </div>
                            <div class="details details-social">
                                <div class="inner">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === team member === -->

                    <div class="col-sm-3">
                        <article>
                            <div class="details details-text">
                                <div class="inner">
                                    <h3 class="title">Sportware</h3>
                                    <h6 class="title">New Design</h6>
                                </div>
                            </div>
                            <div class="image">
                                <img src=<?php echo get_theme_file_uri( 'assets/images/user-4.jpg' );  ?> alt="" />
                            </div>
                            <div class="details details-social">
                                <div class="inner">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                </div> <!--/row-->
                <!-- === button more === -->

              
            </div> <!--/team-->
        </section>

        <!-- ================== Banner ================== -->

       

        <!-- ========================  History ======================== -->

        <section class="history">
            <div class="container">

                <!-- === History header === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h1 class="h2 title">Testimonial</h1>
                            <div class="text">
                                <p>Our architects and designers constantly and carefully monitor the environment, they accept and develop changes, research fashion and architectural, as well as sociological, changes and transform them into unique design.</p>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- === row item === -->
            </div>
        </section>


        <!-- ======================== Quotes ======================== -->

        <section class="quotes quotes-slider" style="background-image:url(assets/images/gallery-2.jpg)">
            <div class="container">
                <div class="row">

                    <div class="quote-carousel">

                        <!-- === quoute item === -->

                        <div class="quote">
                            <div class="image">
                                <img src=<?php echo get_theme_file_uri( 'assets/images/user-3.jpg' );  ?> alt="" />
                            </div>
                            <div class="text">
                                <h4>Jenna Hale</h4>
                                <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                            </div>
                            <div class="more">
                                <div class="rating">
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                </div>
                            </div>
                        </div>

                        <!-- === quoute item === -->

                        <div class="quote">
                            <div class="image">
                                <img src=<?php echo get_theme_file_uri( 'assets/images/user-1.jpg' );  ?> alt="" />
                            </div>
                            <div class="text">
                                <h4>Glen Jordan</h4>
                                <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                            </div>
                            <div class="more">
                                <div class="rating">
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                </div>
                            </div>
                        </div>

                        <!-- === quoute item === -->

                        <div class="quote">
                            <div class="image">
                                <img src=<?php echo get_theme_file_uri( 'assets/images/user-4.jpg' );  ?> alt="" />
                            </div>
                            <div class="text">
                                <h4>Lea Nils</h4>
                                <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                            </div>
                            <div class="more">
                                <div class="rating">
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                </div>
                            </div>
                        </div>

                        <!-- === quoute item === -->

                        <div class="quote">
                            <div class="image">
                                <img src=<?php echo get_theme_file_uri( 'assets/images/user-5.jpg' );  ?> alt="" />
                            </div>
                            <div class="text">
                                <h4>Nora Star</h4>
                                <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                            </div>
                            <div class="more">
                                <div class="rating">
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div> <!--/quote-carousel-->
                </div> <!--/row-->
            </div> <!--/container-->
        </section>





<?php get_footer(); ?>