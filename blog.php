<?php
/**
 * Template Name: Blog Page
 * Description: A Page Template with a darker design.
 */

get_header();
?>


        <!-- ========================  Main header ======================== -->

        <section class="main-header main-header-blog" style="background-image:url(assets/images/gallery-1.jpg)">
            <header>
                <div class="container text-center">
                    <h2 class="h2 title">Blog</h2>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="index.html"><span class="icon icon-home"></span></a></li>
                        <li><a href="blog-grid.html">Blog Category</a></li>
                        <li><a class="active" href="article.html">In Virtual Reality, How Much Body Do You Need?</a></li>
                    </ol>
                </div>
            </header>
        </section>

        <!-- ========================  Blog article ======================== -->

        <section class="blog">

            <!-- === blog navigation === -->

            <div class="blog-navigation">
                <!-- === nav previous === -->

                <a class="nav-link prev" href="#">
                    <figure>
                        <div class="image">
                            <img src=<?php echo get_theme_file_uri( 'assets/images/blog-2.jpg' );  ?> alt="Alternate Text">
                        </div>
                        <figcaption>
                            <div class="blog-title h6">Turn off the lights before bed with one word</div>
                        </figcaption>
                    </figure>
                </a>

                <!-- === nav next === -->

                <a class="nav-link next" href="#">
                    <figure>
                        <div class="image">
                            <img src=<?php echo get_theme_file_uri( 'assets/images/blog-3.jpg' );  ?> alt="Alternate Text">
                        </div>
                        <figcaption>
                            <div class="blog-title h6">Automatically lock the front door when you head to work</div>
                        </figcaption>
                    </figure>
                </a>
            </div> <!--/blog-navigation-->
            <!-- ========================  Blog post ======================== -->

            <div class="container">

                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                        <div class="blog-post">

                            <!-- === blog main image & entry info === -->

                            <div class="blog-image-main">
                                <img src=<?php echo get_theme_file_uri( 'assets/images/blog-1.jpg' );  ?> alt="" />
                            </div>

                            <div class="blog-post-content">

                                <!-- === blog post title === -->

                                <div class="blog-post-title">
                                    <h1 class="blog-title">
                                        In Virtual Reality, How Much Body Do You Need?
                                    </h1>
                                    <h2 class="blog-subtitle h5">
                                        It might be as little as a pair of hands and feet, researchers in Japan found after recording subjects who wore an Oculus Rift headset.
                                    </h2>

                                    <div class="blog-info blog-info-top">
                                        <div class="entry">
                                            <i class="fa fa-user"></i>
                                            <span>John Doe</span>
                                        </div>
                                        <div class="entry">
                                            <i class="fa fa-calendar"></i>
                                            <span>03.03.2017</span>
                                        </div>
                                        <div class="entry">
                                            <i class="fa fa-comments"></i>
                                            <span>4 comments</span>
                                        </div>
                                    </div> <!--/blog-info-->
                                </div>

                                <!-- === blog post text === -->

                                <div class="blog-post-text">

                                    <h4>How connected are your body and your consciousness?</h4>
                                    <p>
                                        When Michiteru Kitazaki, a professor of engineering at Toyohashi University of Technology in Japan, recently posed this question in an email, he evoked an idea from Japanese culture known as tamashii, or the soul without a body.
                                    </p>
                                    <p><img src=<?php echo get_theme_file_uri( 'assets/images/blog-3.jpg' );  ?> alt="This is an alternative image description. It will generate auto caption." /></p>
                                    <p>
                                        Will it soon be possible, he wondered, to simulate the feeling of a spirit not attached to any particular physical form using virtual or augmented reality?
                                    </p>
                                    <p>
                                        If so, a good place to start would be to figure out the minimal amount of body we need to feel a sense of self, especially in digital environments where more and more people may find themselves for work or play. It might be as little as a pair of hands and feet, report Dr. Kitazaki and a Ph.D. student, Ryota Kondo.
                                    </p>
                                    <p><img src=<?php echo get_theme_file_uri( 'assets/images/blog-4.jpg' );  ?> alt="This is an alternative image description. It will generate auto caption." /></p>
                                    <p>
                                        In a paper published Tuesday in Scientific Reports, they showed that animating virtual hands and feet alone is enough to make people feel their sense of body drift toward an invisible avatar.
                                    </p>
                                    <h4>Virtual reality</h4>
                                    <p>
                                        The original body ownership trick was the rubber-hand illusion. In the 1990s, researchers found that if they hid a person’s actual hand behind a partition, placed a rubber hand in view next to it and repeatedly tapped and stroked the real and fake hand in synchrony, the subject would soon eerily start to feel sensation in the rubber hand.
                                    </p>
                                    <p>
                                        Today, technologists working on virtual reality are using modern-day riffs on the rubber-hand illusion to understand how users will adjust when presented with digital bodies that do not match their own. Some researchers have suggested that having users digitally swap bodies with people of other races, genders, ages or abilities could reduce implicit bias, though this work has its limits.
                                    </p>
                                    <p>
                                        Using an Oculus Rift virtual reality headset and a motion sensor, Dr. Kitazaki’s team performed a series of experiments in which volunteers watched disembodied hands and feet move two meters in front of them in a virtual room. In one experiment, when the hands and feet mirrored the participants’ own movements, people reported feeling as if the space between the appendages were their own bodies.
                                    </p>
                                    <p>
                                        This demonstrates the power of synchronized actions and our brain’s ability to fill in missing information, said V.S. Ramachandran, a professor at the University of California, San Diego and rubber-hand illusion pioneer who did not participate in the new study. The “improbability of synchrony occurring by chance” overrides all other information, he said, even knowledge that an invisible body cannot be yours.
                                    </p>
                                </div>

                                <!-- === blog info === -->

                                <div class="blog-info blog-info-bottom">
                                    <ul>
                                        <li class="divider"></li>
                                        <li>
                                            <i class="fa fa-folder-open"></i>
                                            <span>
                                                <a href="$">Technology</a>, 
                                                <a href="$">Illusion</a>, 
                                                <a href="$">Researchers</a>, 
                                                <a href="$">Scientific</a>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-tag"></i>
                                            <span>
                                                <a href="#">Culture</a>,
                                                <a href="#">Tech</a>,
                                                <a href="#">Sci-fi</a>,
                                                <a href="#">Modern living</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div> <!--/blog-info-->
                            </div>

                            <!-- === blog comments === -->

                            <div class="comments">

                                <!-- === comment header === -->

                                <div class="comment-header">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>

                                <div class="comment-wrapper">

                                    <!-- === comment === -->

                                    <div class="comment-block">
                                        <div class="comment-user">
                                            <div><img src=<?php echo get_theme_file_uri( 'assets/images/user-2.jpg' );  ?> alt="Alternate Text" width="70" /></div>
                                            <div>
                                                <h5>
                                                    John Doe
                                                    <a href="#" class="btn btn-sm btn-main pull-right"><i class="fa fa-reply"></i> Reply</a>
                                                    <small>03.05.2017</small>
                                                </h5>
                                            </div>
                                        </div>

                                        <!-- comment description -->

                                        <div class="comment-desc">
                                            <p>
                                                In vestibulum tellus ut nunc accumsan eleifend. Donec mattis cursus ligula, id
                                                iaculis dui feugiat nec. Etiam ut ante sed neque lacinia volutpat. Maecenas
                                                ultricies tempus nibh, sit amet facilisis mauris vulputate in. Phasellus
                                                tempor justo et mollis facilisis. Donec placerat at nulla sed suscipit. Praesent
                                                accumsan, sem sit amet euismod ullamcorper, justo sapien cursus nisl, nec
                                                gravida
                                            </p>
                                        </div>

                                        <!-- comment reply -->

                                        <div class="comment-block">
                                            <div class="comment-user">
                                                <div><img src=<?php echo get_theme_file_uri( 'assets/images/user-2.jpg' );  ?> alt="Alternate Text" width="70" /></div>
                                                <div>
                                                    <h5>
                                                        John Doe
                                                        <a href="#" class="btn btn-sm btn-main pull-right"><i class="fa fa-reply"></i> Reply</a>
                                                        <small>08.05.2017</small>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="comment-desc">
                                                <p>
                                                    Curabitur sit amet elit quis tellus tincidunt efficitur. Cras lobortis id
                                                    elit eu vehicula. Sed porttitor nulla vitae nisl varius luctus. Quisque
                                                    a enim nisl. Maecenas facilisis, felis sed blandit scelerisque, sapien
                                                    nisl egestas diam, nec blandit diam ipsum eget dolor. Maecenas ultricies
                                                    tempus nibh, sit amet facilisis mauris vulputate in.
                                                </p>
                                            </div>
                                        </div>
                                        <!--/reply-->
                                    </div>

                                    <!-- === comment === -->

                                    <div class="comment-block">
                                        <div class="comment-user">
                                            <div><img src=<?php echo get_theme_file_uri( 'assets/images/user-2.jpg' );  ?> alt="Alternate Text" width="70" /></div>
                                            <div>
                                                <h5>
                                                    John Doe
                                                    <a href="#" class="btn btn-sm btn-main pull-right"><i class="fa fa-reply"></i> Reply</a>
                                                    <small>21.03.2017</small>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="comment-desc">
                                            <p>
                                                Cras lobortis id elit eu vehicula. Sed porttitor nulla vitae nisl varius luctus.
                                                Quisque a enim nisl. Maecenas facilisis, felis sed blandit scelerisque, sapien
                                                nisl egestas diam, nec blandit diam ipsum eget dolor. In vestibulum tellus
                                                ut nunc accumsan eleifend. Donec mattis cursus ligula, id iaculis dui feugiat
                                                nec. Etiam ut ante sed neque lacinia volutpat. Maecenas ultricies tempus
                                                nibh, sit amet facilisis mauris vulputate in. Phasellus tempor justo et mollis
                                                facilisis. Donec placerat at nulla sed suscipit. Praesent accumsan, sem sit
                                                amet euismod ullamcorper, justo sapien cursus nisl, nec gravida
                                            </p>
                                        </div>
                                    </div>
                                </div><!--/comment-wrapper-->

                                <div class="comment-header">
                                    <a href="#" class="btn btn-clean-dark">12 comments</a>
                                </div> <!--/comment-header-->
                                <!-- === add comment === -->

                                <div class="comment-add">

                                    <div class="comment-reply-message">
                                        <div class="h3 title">Leave a Reply </div>
                                        <p>Your email address will not be published.</p>
                                    </div>

                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" value="" placeholder="Your Name" required="required"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" value="" placeholder="Your Email" required="required"/>
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="10" class="form-control" placeholder="Your comment" required="required"></textarea>
                                        </div>
                                        <div class="clearfix text-center">
                                            <input type="submit"  class="btn btn-main" value="Add comment" />
                                        </div>
                                    </form>

                                </div><!--/comment-add-->
                            </div> <!--/comments-->

                        </div><!--blog-post-->
                    </div><!--col-sm-8-->
                </div> <!--/row-->
            </div><!--/container-->
        </section>



<?php get_footer(); ?>