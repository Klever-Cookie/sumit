<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * Template Name: Produce IT
 *
 * @package sumit
 */

get_header(); ?>

<!--style: produce.less -->

<div class="breadcrum">
    <div class="container">
        <a href="/">Our Products</a><span> > Produce IT</span>            
    </div>
</div>

<section id="transcription">
    <div class="container">
        <div class="row-transcription">
            <div class="col-transcription order-2">
                <h2>Full Transcription First</h2>
                <p>From the moment you receive your file – transcription is automatic, quick, and precise.</p>
                <button id="myBtn" class="try">Try It</button>
            </div>

            <div class="col-transcription order-1">
                <img class="img-transc" src="<?php echo get_template_directory_uri(); ?>/img/Produce-IT-1.gif">
            </div>
        </div>
    </div>
</section>

<section id="sequences">
    <div class="container">
        <div class="row-sequences">
            <div class="col-sequences order-1">
                <img class="img-transc" src="<?php echo get_template_directory_uri(); ?>/img/Produce-IT-2.gif">
            </div>

            <div class="col-sequences order-2">
                <h2><mark>Extract Sequences</mark> With Another Click</h2>
                <p>Select the sentences you wish to work with, and the attached videos will be extracted under pre-set categories.</p>
                <button id="myBtn2" class="try">Try It</button>
            </div>
        </div>
    </div>
</section>

<section id="script">
    <div class="container">
        <div class="row-script">
            <div class="col-script order-2">
                <h2>The Best Way To Create A Script</h2>
                <p>With the selected sequences, it's easy to put together a full script.</p>
                <button id="myBtn3" class="try">Try It</button>
            </div>

            <div class="col-script order-1">
                <img class="img-transc" src="<?php echo get_template_directory_uri(); ?>/img/Produce-IT-3.gif">
            </div>
        </div>
    </div>
</section>

<section id="work">
    <div class="container">
        <div class="row-work">
            <div class="col-work order-1">
                <img class="img-transc" src="<?php echo get_template_directory_uri(); ?>/img/Produce-IT-4.gif">
            </div>

            <div class="col-work order-2">
                <h2>"Work Made Easy"</h2>
                <p>Convenient distribution, management, and control over team-members' assignments.</p>
                <button id="myBtn4" class="try">Try It</button>
            </div>
        </div>
    </div>
</section>


<!-- The Modal -->
<div id="myModal" class="modal-produce">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2></h2>
        </div>
        <div class="modal-body">
            <div class="row-contact">
                <div class="col-contact form-contact">
					<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
                </div>

                <div class="col-contact info">
                    <div class="contact-info">
                        <h4 class="title-info">Reach Out</h4>
                        <a href="https://wa.me/972553073655" target="_blank">
                            <p class="contact-text"><img class="icon-contact" src="<?php echo get_template_directory_uri(); ?>/img/whatsapp-brands.svg" alt="field"> +972 55-307-3655</p>
                        </a>

                        <a href="tel://972523412275" target="_blank">
                            <p class="contact-text" ><img class="icon-contact" src="<?php echo get_template_directory_uri(); ?>/img/phone-alt-light.svg" alt="field"> +972 52-341-2275</p>
                        </a>

                        <a href="mailto:info@sumit-ai.com" target="_blank">
                            <p class="contact-text" ><img class="icon-contact" src="<?php echo get_template_directory_uri(); ?>/img/at-light.svg" alt="field"> Info@sumit-ai.com</p>
                        </a>

                        <div class="social-icon">
                            <div class="social">
                                <a href="https://www.linkedin.com/company/sumit-ai/" class="" target="_blank">
                                    <img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-brands.svg">
                                </a>
                            </div>

                            <div class="social">
                                <a href="https://www.facebook.com/sumit2020sumit" class="" target="_blank">
                                    <img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/facebook-square-brands.svg">
                                </a>
                            </div>
                            
                            <div class="social">
                                <a href="https://www.instagram.com/life_at_sumit.ai/" class="" target="_blank">
                                    <img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/instagram-square-brands.svg">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>



<script>
    var modal = document.getElementById("myModal");

    var btn = document.getElementById("myBtn");
    var btn2 = document.getElementById("myBtn2");
    var btn3 = document.getElementById("myBtn3");
    var btn4 = document.getElementById("myBtn4");

    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
      modal.style.display = "block";
    }

    btn2.onclick = function() {
      modal.style.display = "block";
    }

    btn3.onclick = function() {
      modal.style.display = "block";
    }

    btn4.onclick = function() {
      modal.style.display = "block";
    }

    span.onclick = function() {
      modal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>




<?php get_footer(); ?>