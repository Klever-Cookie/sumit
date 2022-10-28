<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * Template Name: Home
 *
 * @package sumit
 */

get_header(); ?>

<!--style: home.less -->


<section id="hero-sumit" class="hero-sumit">
    <div class="container">    
        <div class="row-hero">
            
            <div class="col-hero col-text">
                <div class="col-content">
                    <h1>Level Up, Write It Down</h1>
                    <h3>One platform for your transcription needs</h3>
                    <a href="/#contact" class="learn-more">I Want To Learn More</a>
                </div>
            </div>

            <div class="col-hero col-image">
                
            </div>
        </div>
    </div>
</section>

<section id="products">
    <div class="container">
        <div class="row-products">
            <h2 class="product-title">Our Products</h2>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Produce')" id="defaultOpen">Produce IT</button>
                <button class="tablinks" onclick="openCity(event, 'Interview')">Interview IT</button>
                <button class="tablinks" onclick="openCity(event, 'Time')">Real Time IT</button>
                <button class="tablinks" onclick="openCity(event, 'Manage')">Manage IT</button>
            </div>

            <div id="Produce" class="tabcontent produce">
                <div class="tab-col">
                    <p>A <mark>revolutionary product for editors and producers</mark> in post-production, as it turns editing into a simple and easy process. </br><mark>With it you can:</mark></p>

                    <ul>
                        <li>Transcribe Automatically</li>
                        <li>Integrates to AVID</li>
                        <li>Shorten sorting and selection times</li>
                        <li>Easily locate and arrange sequences</li>
                    </ul>

                    <a href="#contact" class="learn-prod">Learn More</a>
                </div>

                <div class="tab-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">
                </div>
            </div>

            <div id="Interview" class="tabcontent interview">
                <div class="tab-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Interview-IT-1.gif">
                </div>

                <div class="tab-col">
                    <p><mark>This product is the most advanced platform</mark> for journalists, reporters, researchers, interviewers, and content creators. </br><mark>With it you can:</mark></p>

                    <ul>
                        <li>Record and save interviews to a digital archive</li>
                        <li>Quickly transcribe raw materials</li>
                        <li>Easily select your favorite citations</li>
                        <li>Create articles with new innovative tools</li>
                        <li>Use a designated mobile app</li>
                    </ul>

                    <a href="#contact" class="learn-prod">Learn More</a>
                </div> 
            </div>

            <div id="Time" class="tabcontent time">
                <div class="tab-col">
                    <p>Our multipurpose transcription platform is user-oriented and fitted for the needs of universities, courthouses, conventions and more.</br>With it you can:</p>

                    <ul>
                        <li>Transcribe without depending on a human factor</li>
                        <li>Get real time transcription</li>
                        <li>Enjoy extremely high level of accuracy</li>
                        <li>Transcribe in over 22 languages</li>
                        <li>Effectively manage saved content</li>
                    </ul>

                    <a href="#contact" class="learn-prod">Learn More</a>
                </div>

                <div class="tab-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Real-Time-IT-1.gif">
                </div>
            </div>

            <div id="Manage" class="tabcontent manage">
                <div class="tab-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Manage-IT-1.gif">
                </div>

                <div class="tab-col">
                    <p>A platform for businesses using transcription, translation and content labeling abilities, that enables monitoring tasks, client profiles and financial aspects. </br> With it you can manage all your content needs in one place:</p>

                    <ul>
                        <li>Have a direct contact with employees and clients</li>
                        <li>Monitor tasks and financials</li>
                        <li>Manage limitless number of freelance providers</li>
                    </ul>

                    <a href="#contact" class="learn-prod">Learn More</a>
                </div>
            </div>

            <script>
                function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style.display = "grid";
                    evt.currentTarget.className += " active";
                }

                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
            </script>

        </div>

        <div class="row-prodmobile">
            
            <h2 class="product-title">Our Products</h2>
            
            <div class="contet-product">
                <h3 class="produ-title">Produce IT</h3>
                <img class="prod-img" src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">

                <p>A <mark>revolutionary product for editors and producers</mark> in post-production, as it turns editing into a simple and easy process. <mark>With it you can:</mark></p>

                <ul>
                    <li>Transcribe Automatically</li>
                    <li>Integrates to AVID</li>
                    <li>Shorten sorting and selection times</li>
                    <li>Easily locate and arrange sequences</li>
                </ul>

                <a href="#contact" class="learn-prod">Learn More</a>
            </div>

            <div class="contet-product">
                <h3 class="produ-title">Interview IT</h3>
                <img class="prod-img" src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">

                <p><mark>This product is the most advanced platform</mark> for journalists, reporters, researchers, interviewers, and content creators. <mark>With it you can:</mark></p>

                <ul>
                    <li>Record and save interviews to a digital archive</li>
                    <li>Quickly transcribe raw materials</li>
                    <li>Easily select your favorite citations</li>
                    <li>Create articles with new innovative tools</li>
                    <li>Use a designated mobile app</li>
                </ul>

                <a href="#contact" class="learn-prod">Learn More</a>
            </div>

            <div class="contet-product">
                <h3 class="produ-title">Real Time IT</h3>
                <img class="prod-img" src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">

                <p>Our multipurpose transcription platform is user-oriented and fitted for the needs of universities, courthouses, conventions and more. With it you can:</p>
                

                <ul>
                    <li>Transcribe without depending on a human factor</li>
                    <li>Get real time transcription</li>
                    <li>Enjoy extremely high level of accuracy</li>
                    <li>Transcribe in over 22 languages</li>
                    <li>Effectively manage saved content</li>
                </ul>

                <a href="#contact" class="learn-prod">Learn More</a>
            </div>

            <div class="contet-product">
                <h3 class="produ-title">Manage IT</h3>
                <img class="prod-img" src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">

                <p>A platform for businesses using transcription, translation and content labeling abilities, that enables monitoring tasks, client profiles and financial aspects. With it you can manage all your content needs in one place:</p>
                

                <ul>
                    <li>Have a direct contact with employees and clients</li>
                    <li>Monitor tasks and financials</li>
                    <li>Manage limitless number of freelance providers</li>
                </ul>

                <a href="#contact" class="learn-prod">Learn More</a>
            </div>


        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row-services">
            <h2 class="services-title">Our Services</h2>
            <div class="tab1">
                <button class="tablinks1" onclick="openCity1(event, 'Protocol')" id="defaultOpen1">Protocols</button>
                <button class="tablinks1" onclick="openCity1(event, 'Caption')">Caption / Subtitles</button>
                <button class="tablinks1" onclick="openCity1(event, 'Translation')">Translation</button>
                <button class="tablinks1" onclick="openCity1(event, 'Summaries')">Summaries / Brief</button>
            </div>

            <div id="Protocol" class="tabcontent1">
                <h2 class="mobile">Protocols</h2>
                <div class="tab-col">
                    <p>Recording and transcription abilities based on the optimal integration between AI and the human factor, enables to produce protocols for board meetings, arbitrations, government ministries, municipal authorities and more.</p>

                    <ul>
                        <li>All your protocols in one place – where it's easy to find and sort old and new files</li>
                        <li>Submission of protocols within 3 business days or less</li>
                        <li>Flexibility in adjustments to client's requirements</li>
                        <li>Compliance with the Israeli accessibility standards and legal customs</li>
                        <li>Executive summary of protocols, with just the gist</li>
                    </ul>
                </div>

                <div class="tab-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">
                </div>
            </div>

            <div id="Caption" class="tabcontent1 reverse-mobile">
                <h2 class="mobile">Caption / Subtitles</h2>
                
                <div class="tab-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">
                </div>

                <div class="tab-col">
                    <p>Producing subtitles for all types of video formats, using an advanced transcription engine, overseen by a community of professional transcribers.</p>

                    <ul>
                        <li>First, the numbers – 99.9% accuracy in transcription & timing for over 22 languages</li>
                        <li>Submission of videos within 3 business days or less</li>
                        <li>We are team players – integrating to Avid, Google Drive, DropBox, Vimeo, YouTube and more</li>
                        <li>Perform changes independently in the platform</li>
                        <li>Exporting content in all traditional files</li>
                    </ul>
                </div> 
            </div>

            <div id="Translation" class="tabcontent1">
                <h2 class="mobile">Translation</h2>
                
                <div class="tab-col">
                    <p>Translation of text and audio files, course-wares, movies, TV shows and more, by our global team of experts, using high-end technological tools.</p>

                    <ul>
                        <li>Fast, quality work in over 22 languages</li>
                        <li>An experienced professional team with a meticulous quality assurance process</li>
                        <li>Best possible match between the translator and the area of expertise</li>
                        <li>Supporting all file formats</li>
                        <li>Matching expectations regarding professional vocabulary and terms</li>
                    </ul>
                </div>

                <div class="tab-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">
                </div>
            </div>

            <div id="Summaries" class="tabcontent1 reverse-mobile">
                <h2 class="mobile">Summaries / Brief</h2>
                
                <div class="tab-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">
                </div>

                <div class="tab-col">
                    <p>Recording app that produces a summary, based on the optimal integration between AI and the human factor.</p>

                    <ul>
                        <li>User-oriented infrastructure with all your info conveniently displayed</li>
                        <li>'Summary ASAP' – Submission of summaries within 24 hours</li>
                        <li>Bring out the essence of meetings, tasks, and decisions</li>
                        <li>Adjust summaries to a legal format</li>
                        <li>Save cost with our service packages</li>
                    </ul>
                </div>
            </div>

            <script>
                function openCity1(evt, cityName) {
                  var i, tabcontent1, tablinks1;
                  tabcontent1 = document.getElementsByClassName("tabcontent1");
                  for (i = 0; i < tabcontent1.length; i++) {
                    tabcontent1[i].style.display = "none";
                  }
                  tablinks1 = document.getElementsByClassName("tablinks1");
                  for (i = 0; i < tablinks1.length; i++) {
                    tablinks1[i].className = tablinks1[i].className.replace(" active", "");
                  }
                  document.getElementById(cityName).style.display = "grid";
                  evt.currentTarget.className += " active";
                }

                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen1").click();
            </script>

        </div>

        <!--<div class="row-servmobile">
            
            <h2 class="services-title">Our Services</h2>
            
            <div id="Protocol" class="content-service">
                <h3 class="service-title">Protocols</h3>    
                <p class="service-text">Recording and transcription abilities based on the optimal integration between AI and the human factor, enables to produce protocols for board meetings, arbitrations, government ministries, municipal authorities and more.</p>

                <ul class="service-list">
                    <li>All your protocols in one place – where it's easy to find and sort old and new files</li>
                    <li>Submission of protocols within 3 business days or less</li>
                    <li>Flexibility in adjustments to client's requirements</li>
                    <li>Compliance with the Israeli accessibility standards and legal customs</li>
                    <li>Executive summary of protocols, with just the gist</li>
                </ul>


                <a href="#contact" class="talk">Let's Talk</a>

                <img class="service-img" src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">
            </div>

            <div id="Caption" class="content-service">
                <h3 class="service-title">Caption / Subtitles</h3>    
                <p class="service-text">Producing subtitles for all types of video formats, using an advanced transcription engine, overseen by a community of professional transcribers.</p>

                <ul class="service-list">
                    <li>First, the numbers – 99.9% accuracy in transcription & timing for over 22 languages</li>
                    <li>Submission of videos within 3 business days or less</li>
                    <li>We are team players – integrating to Avid, Google Drive, DropBox, Vimeo, YouTube and more</li>
                    <li>Perform changes independently in the platform</li>
                    <li>Exporting content in all traditional files</li>
                </ul>

                <a href="#contact" class="talk">Let's Talk</a>

                <img class="service-img" src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">
            </div>

            <div id="Translation" class="content-service">
                <h3 class="service-title">Translation</h3>    
                <p class="service-text">Translation of text and audio files, course-wares, movies, TV shows and more, by our global team of experts, using high-end technological tools.</p>

                <ul class="service-list">
                    <li>Fast, quality work in over 22 languages</li>
                    <li>An experienced professional team with a meticulous quality assurance process</li>
                    <li>Best possible match between the translator and the area of expertise</li>
                    <li>Supporting all file formats</li>
                    <li>Matching expectations regarding professional vocabulary and terms.</li>
                </ul>

                <a href="#contact" class="talk">Let's Talk</a>

                <img class="service-img" src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">
            </div>

            <div id="Summaries" class="content-service">
                <h3 class="service-title">Summaries</h3>    
                <p class="service-text">Recording app that produces a summary, based on the optimal integration between AI and the human factor.</p>

                <ul class="service-list">
                    <li>User-oriented infrastructure with all your info conveniently displayed</li>
                    <li>'Summary ASAP' – Submission of summaries within 24 hours</li>
                    <li>Bring out the essence of meetings, tasks, and decisions</li>
                    <li>Adjust summaries to a legal format</li>
                    <li>Save cost with our service packages</li>
                </ul>

                <a href="#contact" class="talk">Let's Talk</a>

                <img class="service-img" src="<?php echo get_template_directory_uri(); ?>/img/screen-image.png">
            </div>

        </div>-->

    </div>
</section>

<section id="about">
    <div class="container">
        <h2 class="title-about">About Us</h2>
        <div class="row-about">
            
            <div class="col-about story">
                <h3>Our Story:</h3>
                
                <p>In January 2021, three former members of elite technological units in the IDF, holders of degrees in electronic engineering, computer science and law, came together to establish SUMIT. The idea came during a visit to the courthouse, where we came across the position of typists. For the sake of improving their process (and that of similar roles) we developed a digital platform applying high-end technology to improve real time transcription in multiple languages. After helping hundreds of clients refine their processes to better achieve their goals, SUMIT developed new products to fit clients' growing requirements in the fields of education, government, entertainment and more.</p>

                <h3>Our Community:</h3>
                <p>Our community consists of over 1,000 translators and transcribers around the globe. Through our Facebook and WhatsApp groups they receive professional content, engage in social activities, consult, and help one another. Working with SUMIT has the advantage of taking part in a growing professional community, and the convenience of working anytime, anywhere.</p>
                
            </div>
            <div class="col-about profiles">
                <img src="<?php echo get_template_directory_uri(); ?>/img/profiles.png">
            </div>
        </div>
    </div>
</section>

<?php if(!get_settings("hide_community_section")): ?>
<section id="community">
    <div class="container">
        <div class="row-community">
            
            <h2>Join Our Community</h2>
            <p>Wish to work with world's best transcribers? <br> We are always looking for new talent</p>
            

            <?php

                $the_query = new WP_Query( array("post_type" => 'community', 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC') );

                if ( $the_query->have_posts() ) {
            ?>

            <div class="cards">

                <?php
                    while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                ?>

                <div class="col-community">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdJl42hjthJlH2m78r6H9YzYRb7dcbLNv-8wtuvt3bRiNzBPg/viewform" target="_blank">
                        <div class="card">
                            <img src="<?php echo get_the_post_thumbnail_url() ; ?>" alt="sumit">
                            <div class="container-card">
                                <h4><b><?php the_title(); ?></b></h4> 
                                <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                            </div>
                        </div>    
                    </a>
                </div>
                <?php } ?>
    
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section id="carousel">
    <div class="container">

        <h2 class="title-blogs">Blogs</h2>
        
        <div class="breadcrum-carousel">
            <div class="container">
                <a href="/blogs">View all ></a>            
            </div>
        </div>

        <div class="carousel">
            <div class="nav nav-left">
                <div class="ion-chevron-left carousel-arrow-icon-left"></div>
            </div>

            <?php

                $the_query = new WP_Query( array("posts_per_page" => 30, 'orderby' => 'date', 'order' => 'DESC') );

                if ( $the_query->have_posts() ) {
            ?>

            <div class="carousel-content">
                        
                    <?php
                        while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                    ?>

                        <div class="slide slide-1">
                            <div class="col-blog">
                                <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title(); ?>"> 
                                    <figure style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, .0) 75%, #fff 100%), url(<?php echo get_the_post_thumbnail_url() ; ?>);">
                                    </figure>

                                    <div class="text-blog">
                                        <h2 class="title-blog"><strong><?php the_title(); ?></strong></h2>
                                        
                                        <p class="p-blog"> <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                                    
                                    </div>
                                </a>
                            </div>
                        </div>
                    
                    <?php } ?>
                
            </div>
            <?php } ?>

          <div class="nav nav-right">
            <div class="ion-chevron-right carousel-arrow-icon-right"></div>
          </div>
        </div>
    </div>
    
    <script type="text/javascript">
        var carousel = document.querySelector('.carousel');
        var carouselContent = document.querySelector('.carousel-content');
        var slides = document.querySelectorAll('.slide');
        var arrayOfSlides = Array.prototype.slice.call(slides);
        var carouselDisplaying;
        var screenSize;
        setScreenSize();
        var lengthOfSlide;

        function addClone() {
           var lastSlide = carouselContent.lastElementChild.cloneNode(true);
           lastSlide.style.left = (-lengthOfSlide) + "px";
           carouselContent.insertBefore(lastSlide, carouselContent.firstChild);
        }
        // addClone();

        function removeClone() {
          var firstSlide = carouselContent.firstElementChild;
          firstSlide.parentNode.removeChild(firstSlide);
        }

        function moveSlidesRight() {
          var slides = document.querySelectorAll('.slide');
          var slidesArray = Array.prototype.slice.call(slides);
          var width = 0;

          slidesArray.forEach(function(el, i){
            el.style.left = width + "px";
            width += lengthOfSlide;
          });
          addClone();
        }
        moveSlidesRight();

        function moveSlidesLeft() {
          var slides = document.querySelectorAll('.slide');
          var slidesArray = Array.prototype.slice.call(slides);
          slidesArray = slidesArray.reverse();
          var maxWidth = (slidesArray.length - 1) * lengthOfSlide;

          slidesArray.forEach(function(el, i){
            maxWidth -= lengthOfSlide;
            el.style.left = maxWidth + "px";
          });
        }

        window.addEventListener('resize', setScreenSize);

        function setScreenSize() {
          if ( window.innerWidth >= 750 ) {
            carouselDisplaying = 3;
          } else if ( window.innerWidth >= 450 ) {
            carouselDisplaying = 2;
          } else {
            carouselDisplaying = 1;
          }
          getScreenSize();
        }

        function getScreenSize() {
          var slides = document.querySelectorAll('.slide');
          var slidesArray = Array.prototype.slice.call(slides);
          lengthOfSlide = ( carousel.offsetWidth  / carouselDisplaying );
          var initialWidth = -lengthOfSlide;
          slidesArray.forEach(function(el) {
            el.style.width = lengthOfSlide + "px";
            el.style.left = initialWidth + "px";
            initialWidth += lengthOfSlide;
          });
        }


        var rightNav = document.querySelector('.nav-right');
        rightNav.addEventListener('click', moveLeft);

        var moving = true;
        function moveRight() {
          if ( moving ) {
            moving = false;
            var lastSlide = carouselContent.lastElementChild;
            lastSlide.parentNode.removeChild(lastSlide);
            carouselContent.insertBefore(lastSlide, carouselContent.firstChild);
            removeClone();
            var firstSlide = carouselContent.firstElementChild;
            firstSlide.addEventListener('transitionend', activateAgain);
            moveSlidesRight();
          }
        }

        function activateAgain() {
          var firstSlide = carouselContent.firstElementChild;
          moving = true;
          firstSlide.removeEventListener('transitionend', activateAgain);
        }

        var leftNav = document.querySelector('.nav-left');
        leftNav.addEventListener('click', moveRight);

        // var moveLeftAgain = true;

        function moveLeft() {
          if ( moving ) {
            moving = false;
            removeClone();
            var firstSlide = carouselContent.firstElementChild;
            firstSlide.addEventListener('transitionend', replaceToEnd);
            moveSlidesLeft();
          }
        }

        function replaceToEnd() {
          var firstSlide = carouselContent.firstElementChild;
          firstSlide.parentNode.removeChild(firstSlide);
          carouselContent.appendChild(firstSlide);
          firstSlide.style.left = ( (arrayOfSlides.length -1) * lengthOfSlide) + "px";
          addClone();
          moving = true;
          firstSlide.removeEventListener('transitionend', replaceToEnd);
        }

        carouselContent.addEventListener('mousedown', seeMovement);

        var initialX;
        var initialPos;
        function seeMovement(e) {
          initialX = e.clientX;
          getInitialPos();
          carouselContent.addEventListener('mousemove', slightMove);
          document.addEventListener('mouseup', moveBasedOnMouse);
        }

        function slightMove(e) {
          if ( moving ) {
            var movingX = e.clientX;
            var difference = initialX - movingX;
            if ( Math.abs(difference) < (lengthOfSlide/4) ) {
              slightMoveSlides(difference);
            }  
          }
        }

        function getInitialPos() {
          var slides = document.querySelectorAll('.slide');
          var slidesArray = Array.prototype.slice.call(slides);
          initialPos = [];
          slidesArray.forEach(function(el){
            var left = Math.floor( parseInt( el.style.left.slice(0, -2 ) ) ); 
            initialPos.push( left );
          });
        }

        function slightMoveSlides(newX) {
          var slides = document.querySelectorAll('.slide');
          var slidesArray = Array.prototype.slice.call(slides);
          slidesArray.forEach(function(el, i){
            var oldLeft = initialPos[i];
            el.style.left = (oldLeft + newX) + "px";
          });
        }

        function moveBasedOnMouse(e) { 
          var finalX = e.clientX;
          if ( initialX - finalX > 0) {
            moveRight();
          } else if ( initialX - finalX < 0 ) {
            moveLeft();
          }
          document.removeEventListener('mouseup', moveBasedOnMouse);
          carouselContent.removeEventListener('mousemove', slightMove);
        }
    </script>
</section>

<?php if(!get_settings("hide_clients_section")): ?>
<section id="clients">
    <div class="container">
        <div class="row-clients">
            <h2>Our Clients</h2>

            <?php

                $the_query = new WP_Query( array("post_type" => 'clients', 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC') );

                if ( $the_query->have_posts() ) {
            ?>

            <div class="cards">

                <?php
                    while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                ?>
                
                <div class="col-clients">
                    <div class="card">
                        <img src="<?php echo get_the_post_thumbnail_url() ; ?>" alt="sumit">
                        <div class="container-card">
                            <h4><b><?php the_title(); ?></b></h4> 
                            <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p> 
                        </div>
                    </div>
                </div>            

                <?php } ?>
            </div>

            <?php } ?>
        </div>
    </div>
</section>
<?php endif; ?>


<section id="contact">
    <div class="container">
        <h2 class="title-contact">Contact Us</h2>
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
</section>






<?php get_footer(); ?>