<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
 <?php  get_header(); ?>
 	
		<!-- Modal Contact -->
		<div class="md-modal" id="modal-contact">
			<div class="md-form">
				
				<!-- Account Form -->
        <form id="contact">  
					<fieldset>
						<legend align="center">Get in touch with us</legend>

						<p>Complete the form below, we'll contact you within one business day.</p>
						
            <input maxlength="50"  placeholder="Full Name" name="full-name" type="text" />
            <input maxlength="50" placeholder="Your Company Name" name="company" type="text" />
            <input maxlength="50" placeholder="Email" name="email" type="text" />
            <input maxlength="30"  placeholder="Phone Number" name="phone" type="tel" />
            <textarea maxlength="200" placeholder="Short Intro..." name="message"></textarea>
            <a class="button md-close" data-text="Close"><span>Close</span></a>
            <button class="primary" name="submit" data-text="Send" type="submit"><span>Send</span></button>
            
            
            <p>Or if you prefer it, you can just <a href="mailto:http://andy.cao@creativelab.vn">e-mail</a> us or mobile (+84) 098 899 861</p>                     
                        
					</fieldset>
        </form>

				<p id="success">Your message was sent successfully. We will get back to you within one business day. Thank you!</p>
				<p id="error">Something went wrong, please try refreshing and submitting the form again.</p>

	      <h2>Creative House</h2>
	      <p><span class="icon-location"></span> 358/6/10 CMT8 Street, Ward 10, District 3.<br/> Ho Chi Minh City, Vietnam.</p>
        
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Modal Team -->
		<div class="md-modal" id="modal-team">
			<div class="md-content">
				
				<div class="section">
					
					<div class="title">
						<span><strong>Andy Cao</strong>Founder - Managing Director</span>
						<span class="avatar lg"><img src="<?php bloginfo('template_url'); ?>/creative/images/jpg/avatar-andy.jpg" alt="Andy Cao" title="Andy Cao"></span>
					</div>
					
					<p>Andy has 11 years of work experience as a UI/UX designer and front-end web developer.</p>

					<p>Prior to Creative Lab, Andy led User Interface Design and Front-End Web Development for FileString, a File Control and Intelligence Service Mobile App. Lead Mobile User Interface and Experience Design for S3 Studio, a Yo-Yo Girls 3D calendar application for Android. Previously, Andy led User Interface and Experience Design for Skunkworks, designing all web and mobile interactions and interfaces for Klamr, a popular social media and messaging service in Asia. Additionally, Andy has worked for Vietnamworks, AB-Horizon, Xomad and 5<sup>th</sup> iMedia in web and graphic design positions.</p>

					<p>Andy is passionate about creating aesthetically engaging and functional product user interfaces. Andy has a Bachelor's Degree in Graphic Design from the Vietnam University of Fine Arts and a Higher Diploma in Software Engineering from Aptech Computer Education.</p>
						
				</div>


				<div class="section">
					
					<div class="title">
						<span><strong>Luan Bui</strong>Product Manager</span>
						<span class="avatar lg"><img src="<?php bloginfo('template_url'); ?>/creative/images/jpg/avatar-luan.jpg" alt="Luan Bui" title="Luan Bui"></span>
					</div>
					
					<p>Luan brings more than 10 years of experience to his position as FileString's product manager, responsible for defining the FileString service requirements and experience and working with engineering and quality control to build and release new capabilities. Previously, Luan was a Business Analyst for Harvey Nash, a UK-based company providing recruitment and outsourcing services. Prior to that, he was a Business Analyst and Quality Control Tester for Catglobe Vietnam. Luan has worked on a broad range of products and projects in banking, finance, retail, market research, marketing, telecoms, and online gambling.</p>
						
						<p>Luan has a Bachelor's Degree in Information Technology from NIIT in Vietnam.</p>
						
				</div>
				
				<div class="section">
					
					<div class="title">
						<span><strong>Minh Ho</strong>Technical Leader</span>
						<span class="avatar lg"><img src="<?php bloginfo('template_url'); ?>/creative/images/jpg/avatar-minh.jpg" alt="Minh Ho" title="Minh Ho"></span>
					</div>
					
					<p>Minh Ho is Creative-Lab's Technical Leader. Minh Ho has nearly 8 years of experience in software development, he has worked on numerous platforms including Web, Mobile, Core Service, expert on many computer languages such as CSS3, HTML, Javascript, PHP, Angular JS, Node JS, React JS, Python, MySQL, PostgreSQL... and has worked in a broad range of software development positions such as developer, database designer and team leader. Minh's work experience includes analysis and design of web architecture, development and management.</p>
						
						<p>Minh Ho has a Bachelor's Degree in Network, Programming from University of Science in Vietnam.</p>
						
				</div>
				

				<div class="section">
					
					<div class="title">
						<span><strong>Tuan Ho</strong>Team Partner - CEO of Tech Apollo</span>
						<span class="avatar lg"><img src="<?php bloginfo('template_url'); ?>/creative/images/jpg/avatar-tuan.jpg" alt="Tuan Ho" title="Tuan Ho"></span>
					</div>
					
					<p>During more than 17 years in software development, Tuan Ho has accumulated a broad range of technical experience and proven his expertise in managing and developing projects at scale.</p>
						
					<p>He loves the challenge of researching and applying new technologies to optimize the cost and improve the product quality for customers. His brilliant mindset and thoroughness inspire the technical team to ensure that every project is delivered on time and meet high quality standards.</p>
						
				</div>
	
							
				<a class="button md-close" data-text="Close"><span>Close</span></a>
        
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Modal Services -->
		<div class="md-modal" id="modal-services">
			<div class="md-content">
				
				<div class="section">
					
					<div class="title">
						<span><strong>UI/UX Design</strong>Creative, Graphic, Branding, Media</span>
						<span class="icon-graphic-design"></span>
					</div>

					<p>Creative Lab believes everything that affects an end user is part of the design process. We dig deep to find solutions that work for our clients’ specific situations, and we do that by creating user interfaces that are clean, intuitive, expandable and friendly.</p>

					<span class="tag">Photoshop</span>
					<span class="tag">Illustrator</span>
					<span class="tag">Sketch</span>
					<span class="tag">Balsamiq</span>
					<span class="tag">Omnigraffle</span>
					
				</div>
				
				<div class="section">
					
					<div class="title">
						<span><strong>Web Development</strong>Small/medium businesses</span>
						<span class="icon-web-design"></span>
					</div>
					
					<p>Creative Lab offers a high quality of web development at the most affordable prices to meet your entire internet and business needs. We employ design and technology best practices to build esthetically pleasing, ease-to-use website.</p>
					
					<!--
					<ul>
						<li>Brochure/Portfolio Site.</li>
						<li>WordPress Development.</li>
						<li>E-commerce/Shopping cart.</li>
						<li>E-Real Estate.</li>
						<li>PPC Landing Page.</li>
						<li>Front-end and Back-end Development.</li>
						<li>Website Maintenance & Web Hosting.</li>						
					</ul>
					-->
										
					<span class="tag">Ruby</span>
					<span class="tag">Angular JS</span>
					<span class="tag">React JS</span>
					<span class="tag">JSON</span>
					<span class="tag">PHP</span>
										
					<span class="tag">Jquery</span>
					<span class="tag">Bootstrap</span>
					<span class="tag">CSS3</span>
					<span class="tag">LESS</span>
					<span class="tag">HTML 5</span>
					
					<span class="tag">Wordpress</span>
					<span class="tag">Laravel</span>
					<span class="tag">Magento</span>
					<span class="tag">Pretashop</span>
						
				</div>
				
				<div class="section">

					<div class="title">
						<span><strong>Mobile Development</strong>Native App and Hybrid App</span>
						<span class="icon-mobile-design"></span>
					</div>
					
					<p>Creative Lab is highly-skilled to bring the apps of any complexity to life, both for IOS and Android platform. We will develop your idea into apps which are user-friendly, modern, stylish, elegant and useful among similar existing apps.</p>
					
					<span class="tag">Objective-C</span>
					<span class="tag">Swift</span>					
					<span class="tag">Ionic</span>
					
					
				</div>
		
				<a class="button md-close" data-text="Close"><span>Close</span></a>
        
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Modal Advantages -->
		<div class="md-modal" id="modal-advantages">
			<div class="md-content">
				
				<div class="section">
					
					<div class="title">
						<span><strong>We've Got You Covered</strong>All Step by Step</span>
						<span class="icon-swiss-knife"></span>
					</div>
					
					<p>From sketches and interface design, to responsive front-end coding and back-end CMS, we are able to offer you a full-service approach. Our unique vision is that designers and developers should operate under one roof and combine their efforts in order to craft a singular user experience.</p>
					
					<h2>Our UX Design Process</h2>
					
					<ul>
						<li><strong>Business Analysis:</strong> Idea, Requirement, Consulting.</li>
						<li><strong>Research:</strong> Goal Analysis, Workflows, Roadmap.</li>
						<li><strong>IA & Wireframe:</strong> Information Architecture, Layouts, Clickable Prototypes.</li>
						<li><strong>UI (Look and Feel):</strong> Branding, Unique & Recognizable Appearance.</li>
						<li><strong>Development:</strong> Front-End, Back-End, Coding.</li>
						<li><strong>User Testing:</strong> Quality Control, Bug, Performance.</li>
						<li><strong>Go Live:</strong> Release, Integration Support.</li>
						<li><strong>Maintenance:</strong> Enhancement, Update, Warranty.</li>						
					</ul>

				</div>
				
				<div class="section">

					<div class="title">
						<span><strong>We Design App That Are</strong>Useful, Usable, Empowering, Affordable</span>
						<span class="icon-like"></span>
					</div>
					
					<div>
						<h2>Useful</h2>
						<p>Usefulness is the main point of your application. We can make it efficient, task-focused and mission-driven so that users can achieve their goals with minimum time and effort.</p>
					</div>
					
					<div>
						<h2>Usable</h2>
						<p>We simplify complexity and significantly increase the learnability of your web or mobile application. We ensure that your users can easily learn and accomplish basic tasks every time they encounter the design.</p>
					</div>
					
					<div>
						<h2>Empowering</h2>
						<p>Win the hearts of your clients. We make users feel smarter and more empowered when using your app.</p>
					</div>
					
					<div>
						<h2>Affordable</h2>
						<p>We keep costs down. Our deep understanding of the development process enables us to design apps that are highly functional so you can avoid costly re-works.</p>
					</div>

				</div>
							
				<a class="button md-close" data-text="Close"><span>Close</span></a>
        
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Modal Featured Works -->
		<div class="md-modal" id="modal-featured-works">
			<div class="md-content">
				
				<div class="section">
					
					<div class="title">
						<span><strong>Klamr App</strong>Mobile Application</span>
						<img class="project-logo" src="<?php bloginfo('template_url'); ?>/creative/images/jpg/project-klamr-logo.jpg" alt="Klamr" title="Klamr">
					</div>
					
					<p>Klamr is a single app to send messages, find venues, plan, meet, and share. Start a Klamr to send messages and chat about ideas for your next get-together. Create Ideas to decide where to go and what time to meet. Even friends without the app are include in your plans via SMS.</p>
					
					<br/><img class="project-design" src="<?php bloginfo('template_url'); ?>/creative/images/jpg/project-klamr.jpg" alt="" title="">

				</div>
				
				<div class="section">
					
					<div class="title">
						<span><strong>Filestring Project</strong>Web and Mobile Application</span>
						<img class="project-logo" src="<?php bloginfo('template_url'); ?>/creative/images/jpg/project-filestring-logo.jpg" alt="Filestring" title="Filestring">
					</div>
					
					<p>FileString empowers people and businesses to control the distribution of their important content with an easy-to-use file control service.</p>

					<p>When files are shared or distributed with FileString, only authorized recipients can view, forward, and print files; activity by recipients including viewing and printing is tracked; distributed copies of files can be overwritten with updates; and access to distributed files can be revoked.</p>
					
					<br/><img class="project-design" src="<?php bloginfo('template_url'); ?>/creative/images/jpg/project-filestring.jpg" alt="" title="">
					
				</div>
				
				<div class="section">
					
					<div class="title">
						<span><strong>YoYo App</strong>Mobile Application</span>
						<img class="project-logo" src="<?php bloginfo('template_url'); ?>/creative/images/jpg/project-yoyo-logo.jpg" alt="YoYo" title="YoYo">
					</div>
					
					<p>Yo-Yo is the world's first true 3D calendar girl app. Hight HD quality with no need for glasses-view models in a smooth curved arc. No gimmicks or tricks, just models shot in luscious HD and presented daily in our unique 3D format.</p>
					
					<br/><img class="project-design" src="<?php bloginfo('template_url'); ?>/creative/images/jpg/project-yoyo.jpg" alt="" title="">

				</div>
				
				<div class="section">
					
					<div class="title">
						<span><strong>Codestringers</strong>Web Development</span>
						<img class="project-logo" src="<?php bloginfo('template_url'); ?>/creative/images/jpg/project-codestringers-logo.jpg" alt="Codestringers" title="Codestringers">
					</div>
					
					<p>CodeStringers provides startups with software development resources that act seamlessly as surrogate members of their clients' staff, but at a fraction of the cost of onshore personnel. With each upsourcing engagement, we bundle product and process consulting to improve our clients' development velocity and quality, and extend their financial runway.</p>
					
					<br/><img class="project-design" src="<?php bloginfo('template_url'); ?>/creative/images/jpg/project-codestringers.jpg" alt="" title="">
					
				</div>
															
				<a class="button md-close" data-text="Close"><span>Close</span></a>
        
			</div>
		</div> <!-- .md-modal -->
		
		<div class="md-overlay"></div> <!-- !Important. The overlay modal element -->
			
		
		
		

		<div id="main-story">

			<nav>
				<a href="#section1"></a>
				<a href="#section2"></a>
				<a href="#section3"></a>
				<a href="#section4"></a>
				<a href="#section5"></a>
			</nav> <!-- Navigation Dot -->

			<!-- Intro -->
			<section id="section1" data-stellar-background-ratio="0.3">
				<img src="<?php bloginfo('template_url'); ?>/creative/images/png/element-section1.png" alt="" data-stellar-ratio="0.8">
				
				<div class="wrap">
					
					<h1>Your Friendly Neighborhood. Power Your Product.</h1>
					
					<a class="next-btn" href="#section2">
						<span>Next page</span>
						<span>Who Is Creative Lab</span>
						<span class="icon-arrow-down"></span>
					</a>
					
				</div>
		
			</section>
			
			<!-- Who We Are -->	
			<section id="section2" data-stellar-background-ratio="0.3">
				<img src="<?php bloginfo('template_url'); ?>/creative/images/png/element-section2.png" alt="" data-stellar-ratio="0.8">
				
				<div class="wrap">
					
					<h1>Who Is Creative Lab?</h1>
					<p>Creative Lab is a quality digital outsourcing service provider based in Vietnam. We are a small team of designers and developers, who help brands with big ideas.</p>
					<a class="button primary md-trigger" data-text="Meet the Team" data-modal="modal-team"><span>Meet the Team</span></a>
					
					<a class="next-btn" href="#section3">
						<span>Next page</span>
						<span>Our Services</span>
						<span class="icon-arrow-down"></span>
					</a>
				
				</div>
				
			</section>
			
			<!-- Our Services -->	
			<section id="section3" data-stellar-background-ratio="0.3">
				<img src="<?php bloginfo('template_url'); ?>/creative/images/png/element-section3.png" alt="" data-stellar-ratio="0.8">
				
				<div class="wrap">
					
					<h1>What Do We Offer?</h1>
					<p>Creative Lab can help your business to reduce significant costs by using latest tools and technologies and consulting you the best solutions. We offer you extensive software services which are tailored to your specific business needs – from defining a long-term web/mobile strategy, to UI/UX, to engineering & testing, and even ongoing maintenance & operations.</p>
					<a class="button primary md-trigger" data-text="Explore Services" data-modal="modal-services"><span>Explore Services</span></a>
					
					<a class="next-btn" href="#section4">
						<span>Next page</span>
						<span>Why Choose Us</span>
						<span class="icon-arrow-down"></span>
					</a>
				
				</div>

			</section>
			
			<!-- Why Choose Us -->	
			<section id="section4" data-stellar-background-ratio="0.3">
				<img src="<?php bloginfo('template_url'); ?>/creative/images/png/element-section4.png" alt="" data-stellar-ratio="0.8">
				<div class="wrap">
					
					<h1>What Makes Us Different?</h1>
					<p>We work with established companies to plan, design and build digital products. We want to make a difference, create things that change people’s lives.</p>
					<a class="button primary md-trigger" data-text="Our Advantages" data-modal="modal-advantages"><span>Our Advantages</span></a>
					
					<a class="next-btn" href="#section5">
						<span>Next page</span>
						<span>Featured Works</span>
						<span class="icon-arrow-down"></span>
					</a>
					
				</div>

			</section>
			
			<!-- Featured Works -->
			<section id="section5" data-stellar-background-ratio="0.3">
				<img src="<?php bloginfo('template_url'); ?>/creative/images/png/element-section5.png" alt="" data-stellar-ratio="0.8">
				<div class="wrap">
					
					<h1>Don’t Just Take Our Word For It</h1>
					<p>We're proud of the work we've done. Like craftsmen, we care about what we do. Each pixel refined, every line of code considered.</p>
					<a class="button primary md-trigger" data-text="Works We've Done" data-modal="modal-featured-works"><span>Works We've Done</span></a>
					
					<a class="next-btn md-trigger" data-modal="modal-contact">
						<span>Contact Us</span>
						<span>Let's talk</span>
						<span class="icon-talk"></span>
					</a>
					
				</div>
				
			</section>

		</div> <!-- main-story -->
<?php  get_footer(); ?>
		
<!-- Load JS here for greater good =============================-->

<script src="<?php bloginfo('template_url'); ?>/creative/js/jquery-2.0.3.min.js"></script>

<!-- Parallax Effect -->
<script src="<?php bloginfo('template_url'); ?>/creative/js/jquery.stellar.min.js"></script>

<!-- Waypoint & Modal Effect -->
<script src="<?php bloginfo('template_url'); ?>/creative/js/classie.js"></script>
<script src="<?php bloginfo('template_url'); ?>/creative/js/jquery.easing.min.js"></script>		
<script src="<?php bloginfo('template_url'); ?>/creative/js/jquery.waypoints.v2.0.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/creative/js/jquery.debouncedresize.js"></script>

<!-- Jquery Form Plugin & Validate -->
<script src="<?php bloginfo('template_url'); ?>/creative/js/jquery.form.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/creative/js/jquery.validate.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/creative/js/global.js"></script>
