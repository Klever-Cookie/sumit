<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sumit
 */

?>

<!--style: footer.less -->


	<footer id="footer" class="footer">
		<div class="container">
			<div class="row-footer">
				<div class="col-footer">
					<h4>Services</h4>
					<ul>
						<li><a href="/#Protocol" onclick=" openCity1(event, 'Protocol')">Protocols</a></li>
						<li><a href="/#Caption" onclick=" openCity1(event, 'Caption')">Caption/Subtitles</a></li>
						<li><a href="/#Translation" onclick=" openCity1(event, 'Translation')">Translation</a></li>
						<li><a href="/#Summaries" onclick=" openCity1(event, 'Summaries')">Summary/Brief</a></li>
					</ul> 
				</div>
				<div class="col-footer">
					<h4>Products</h4>
					<ul>
						<li><a href="/produce-it">Produce IT</a></li>
						<li><a href="/interview-it">Interview IT</a></li>
						<li><a href="/real-time-it">Real Time IT</a></li>
						<li><a href="/manage-it">Manage IT</a></li>
					</ul>
				</div>
				<div class="col-footer">
					<h4>Community</h4>
					<ul>
						<li><a href="https://editor-v2.sumit-ai.com/login" target="_blank">Log in to the platform</a></li>
						<li><a href=" https://docs.google.com/forms/d/e/1FAIpQLSdJl42hjthJlH2m78r6H9YzYRb7dcbLNv-8wtuvt3bRiNzBPg/viewform" target="_blank">Join as a transcriber</a></li>
						<li><a href=" https://docs.google.com/forms/d/e/1FAIpQLSdJl42hjthJlH2m78r6H9YzYRb7dcbLNv-8wtuvt3bRiNzBPg/viewform" target="_blank">Join as a translator</a></li>
						<li><a href=" https://docs.google.com/forms/d/e/1FAIpQLSdJl42hjthJlH2m78r6H9YzYRb7dcbLNv-8wtuvt3bRiNzBPg/viewform" target="_blank">Join as a representative</a></li>
					</ul>
				</div>
				<div class="col-footer">
					<h4>Contact Us</h4>
					<ul>
						<li><a href="tel://972523412275">+972 52-341-2275</a></li>
						<li><a href="mailto:info@sumit-ai.com" target="_blank">info@sumit-ai.com</a></li>
					</ul>
				</div>
				<div class="col-footer">
					<h4>Legal</h4>
					<ul>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Terms of use</a></li>
					</ul>
				</div>
			</div>

			<div class="row-footersocial">
				<div class="col-social">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png">
					</a>
				</div>
				
				<div class="col-social">
					<p class="rights">All rights reserved for Sumit-AI <?php echo date( 'Y' ) ?></p>
				</div>
				
				<div class="col-social social-logos">
					
					<div class="social">
						<a href="https://www.linkedin.com/company/sumit-ai/" target="_blank" class="fa fa-linkedin"></a>
					</div>
					<div class="social">
						<a href="https://www.facebook.com/sumit2020sumit" target="_blank" class="fa fa-facebook"></a>
					</div>
					<div class="social">
						<a href="https://www.instagram.com/life_at_sumit.ai/" target="_blank" class="fa fa-instagram"></a>
					</div>

				</div>
			</div>	
		</div>
		
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
