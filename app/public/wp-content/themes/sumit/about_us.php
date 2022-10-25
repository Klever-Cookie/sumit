<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * Template Name: About Us
 *
 * @package sumit
 */

get_header(); ?>

<!--style: about.less -->

<div class="breadcrum">
    <div class="container">
        <a href="/">Our Products</a><span> > About Us</span>            
    </div>
</div>

<section id="about-us">
    <div class="container">
        
        <h2 class="title-story">Our Story</h2>
        
        <div class="row-about-us">
            <div class="col-about order-2">
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                
            </div>

            <div class="col-about-us order-1">
                <img class="img-transc" src="<?php echo get_template_directory_uri(); ?>/img/Produce-IT-1.gif">
            </div>
        </div>
    </div>
</section>

<section id="communitya">
    <div class="container">
        
        <h2 class="title-communitya">Our Community</h2>
        
        <div class="row-communitya">
            <div class="col-community order-2">
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                
            </div>

            <div class="col-communitya order-1">
                <img class="img-transc" src="<?php echo get_template_directory_uri(); ?>/img/particles.png">
            </div>
        </div>
    </div>
</section>

<section class="team">
    <div class="container">
        <h2 class="title-team">Our Community</h2>
        <div class="row-team">
            
        </div>
    </div>
</section>











<?php get_footer(); ?>