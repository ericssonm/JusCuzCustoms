<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package dazzling
 */

get_header(); ?>	
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">WE SPECIALIZE IN</div>
                <div class="intro-heading">CUSTOM BODY<br>WORK</div>
                <hr class="intro-divider">
            </div>
        </div>
    </header>
 <section id="services">
        <div class="container">
                <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <div class="clearfix"></div>
                        <div class="services-section-heading">
                            <h3>RECENT WORK</h3>
                        </div>
                        
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <div class="centered">
                            <button type="button" class="btn btn-primary btn-lg">VIEW WORK</button>
                        </div>
                    </div>
                
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="wp-content/uploads/2015/11/blue_buggie.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="clearfix"></div>
                    <div class="section-heading-b"><img src="wp-content/uploads/2015/11/spaceghost.png"></div>
                    <div class="quotation-marks-left"><h1>&ldquo;</h1></div>
                    <p class="lead-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <div class="quotation-marks-right"><h1>&rdquo;</h1></div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->
    </section>


<?php get_footer(); ?>