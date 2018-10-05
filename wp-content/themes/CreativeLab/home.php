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
		<?php
			// Start the session
			if(!isset($_SESSION)) 
		    { 
		        session_start(); 
		    } 
		 ?>
		
		<div class="md-modal" id="modal-contact">
			<div class="md-form">
				<!-- Account Form -->
				<div id="contact">  
					<fieldset>
						<legend align="center"><?php the_field('title_p6'.$_SESSION["lan"], get_field('contact',$post->ID)); ?></legend>
						<p><?php the_field('text_p6'.$_SESSION["lan"], get_field('contact',$post->ID)); ?></p>
						<?php the_field('form'.$_SESSION["lan"], get_field('contact',$post->ID)); ?>  
						<?php the_field('if_you_prefer_it'.$_SESSION["lan"], get_field('contact',$post->ID)); ?> 
					</fieldset>
		        </div>

				<h2><?php the_field('creative_house'.$_SESSION["lan"], get_field('contact',$post->ID)); ?></h2>
				<p><span class="icon-location"></span> <?php the_field('address'.$_SESSION["lan"], get_field('contact',$post->ID)); ?></p>
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Modal Team -->
		<div class="md-modal" id="modal-team">
			<div class="md-content">

				<?php if( have_rows('team'.$_SESSION["lan"], get_field('who_is_creative_lab',$post->ID))): ?>
				
					<?php while( have_rows('team'.$_SESSION["lan"], get_field('who_is_creative_lab',$post->ID)) ): the_row(); 

						// vars
						$name = get_sub_field('name'.$_SESSION["lan"]);
						$work = get_sub_field('work'.$_SESSION["lan"]);
						$avatar = get_sub_field('avatar'.$_SESSION["lan"]);
						$about = get_sub_field('about'.$_SESSION["lan"]);

					?>
					<div class="section">
						<div class="title">
							<span><strong><?php echo $name; ?></strong><?php echo $work; ?></span>
							<?php if( $avatar ): ?>
								<span class="avatar lg"><img src="<?php echo $avatar; ?>" alt="Andy Cao" title="Andy Cao"></span>
							<?php endif; ?>
						</div>
						<?php echo $about; ?>
					</div>
					<?php endwhile; ?>	
				<?php endif; ?>
		
				<a class="button md-close" data-text="<?php the_field('close_p2'.$_SESSION["lan"], get_field('who_is_creative_lab',$post->ID)); ?>"><span><?php the_field('close_p2'.$_SESSION["lan"], get_field('who_is_creative_lab',$post->ID)); ?></span></a>
        
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Modal Services -->
		<div class="md-modal" id="modal-services">
			<div class="md-content">
				<?php if( have_rows('service'.$_SESSION["lan"], get_field('our_services',$post->ID))): ?>
					
					<?php while( have_rows('service'.$_SESSION["lan"], get_field('our_services',$post->ID)) ): the_row(); 

						// vars
						$name = get_sub_field('name'.$_SESSION["lan"]);
						$work = get_sub_field('work'.$_SESSION["lan"]);
						$logo = get_sub_field('logo'.$_SESSION["lan"]);
						$about = get_sub_field('about'.$_SESSION["lan"]);

					?>
						<div class="section">
							<div class="title">
								<span><strong><?php echo $name; ?></strong><?php echo $work; ?></span>
								<span class="<?php echo $logo; ?>"></span>
							</div>

							<p><?php echo $about; ?></p>

							<?php if( have_rows('tag'.$_SESSION["lan"], get_field('our_services',$post->ID))): ?>
								<?php while( have_rows('tag'.$_SESSION["lan"], get_field('our_services',$post->ID)) ): the_row(); 
									$tag = get_sub_field('tag_item'.$_SESSION["lan"]);
								?>
									<span class="tag"><?php echo $tag; ?></span>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				
		
				<a class="button md-close" data-text="<?php the_field('close_p3'.$_SESSION["lan"], get_field('our_services',$post->ID)); ?>"><span><?php the_field('close_p3'.$_SESSION["lan"], get_field('our_services',$post->ID)); ?></span></a>
        
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Modal Advantages -->
		<div class="md-modal" id="modal-advantages">
			<div class="md-content">
				<?php if( have_rows('advantage'.$_SESSION["lan"], get_field('why_choose_us',$post->ID))): ?>
					
					<?php while( have_rows('advantage'.$_SESSION["lan"], get_field('why_choose_us',$post->ID)) ): the_row(); 

						// vars
						$title = get_sub_field('title'.$_SESSION["lan"]);
						$text = get_sub_field('text'.$_SESSION["lan"]);
						$logo = get_sub_field('logo'.$_SESSION["lan"]);
						$about = get_sub_field('about'.$_SESSION["lan"]);

					?>
						<div class="section">
							
							<div class="title">
								<span><strong><?php echo $title; ?></strong><?php echo $text; ?></span>
								<span class="<?php echo $logo; ?>"></span>
							</div>
							
							<?php echo $about; ?>

						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				
				
							
				<a class="button md-close" data-text="<?php the_field('close_p4'.$_SESSION["lan"], get_field('why_choose_us',$post->ID)); ?>"><span><?php the_field('close_p4'.$_SESSION["lan"], get_field('why_choose_us',$post->ID)); ?></span></a>
        
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Modal Featured Works -->
		<div class="md-modal" id="modal-featured-works">
			<div class="md-content">
				<?php if( have_rows('app'.$_SESSION["lan"], get_field('featured_works',$post->ID))): ?>
					
					<?php while( have_rows('app'.$_SESSION["lan"], get_field('featured_works',$post->ID)) ): the_row(); 

						// vars
						$name = get_sub_field('name'.$_SESSION["lan"]);
						$kind = get_sub_field('kind'.$_SESSION["lan"]);
						$logo = get_sub_field('logo'.$_SESSION["lan"]);
						$about = get_sub_field('about'.$_SESSION["lan"]);
						$image = get_sub_field('image'.$_SESSION["lan"]);

					?>
						<div class="section">
							
							<div class="title">
								<span><strong><?php echo $name; ?></strong><?php echo $kind; ?></span>
								<img class="project-logo" src="<?php echo $logo; ?>" alt="Klamr" title="Klamr">
							</div>
							
							<?php echo $about; ?>
							
							<br/><img class="project-design" src="<?php echo $image; ?>" alt="" title="">

						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				
															
				<a class="button md-close" data-text="<?php the_field('close_p5'.$_SESSION["lan"], get_field('featured_works',$post->ID)); ?>"><span><?php the_field('close_p5'.$_SESSION["lan"], get_field('featured_works',$post->ID)); ?></span></a>
        
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Content detail -->
		<!-- Apple Watch -->
		<div class="content-open" id="content-1">
			<div class="product-zoom-slider">
				<div class="image-left">
					<img src="<?php bloginfo('template_url'); ?>/creative/images/jpg/iphone-klamr-content.jpg">
				</div>
				<div class="detail">
					<h2>klamr1</h2>
					<h3>mobile application</h3>
					<p>Apple Watch makes all the ways you're used to communicating more convenient. And because it sits right on your wrist, it can add a physical dimension to alerts and notifications. For example, you’ll feel a gentle tap with each incoming message.</p>
					<div class="description">
						<span class="icon-project-management"></span>
						<p class="content">Apple Watch also lets you connect with your favorite people in fun, spontaneous ways — like sending a tap, a sketch.</p>
					</div>
					<a class="button primary btn-close-slide" data-text="close" data-modal="modal-services"><span>close</span></a>
				</div>
			</div>
		</div>
		<!--End  Apple Watch -->
		<!-- Apple Watch -->
		<div class="content-open" id="content-2">
			<div class="product-zoom-slider">
				<div class="image-left">
					<img src="<?php bloginfo('template_url'); ?>/creative/images/jpg/iphone-klamr-content.jpg">
				</div>
				<div class="detail">
					<h2>klamr2</h2>
					<h3>mobile application</h3>
					<p>Apple Watch makes all the ways you're used to communicating more convenient. And because it sits right on your wrist, it can add a physical dimension to alerts and notifications. For example, you’ll feel a gentle tap with each incoming message.</p>
					<div class="description">
						<span class="icon-project-management"></span>
						<p class="content">Apple Watch also lets you connect with your favorite people in fun, spontaneous ways — like sending a tap, a sketch.</p>
					</div>
					<a class="button primary btn-close-slide" data-text="close" data-modal="modal-services"><span>close</span></a>
				</div>
			</div>
		</div>
		<!--End  Apple Watch -->
		<!-- Apple Watch -->
		<div class="content-open" id="content-3">
			<div class="product-zoom-slider">
				<div class="image-left">
					<img src="<?php bloginfo('template_url'); ?>/creative/images/jpg/iphone-klamr-content.jpg">
				</div>
				<div class="detail">
					<h2>klamr3</h2>
					<h3>mobile application</h3>
					<p>Apple Watch makes all the ways you're used to communicating more convenient. And because it sits right on your wrist, it can add a physical dimension to alerts and notifications. For example, you’ll feel a gentle tap with each incoming message.</p>
					<div class="description">
						<span class="icon-project-management"></span>
						<p class="content">Apple Watch also lets you connect with your favorite people in fun, spontaneous ways — like sending a tap, a sketch.</p>
					</div>
					<a class="button primary btn-close-slide" data-text="close" data-modal="modal-services"><span>close</span></a>
				</div>
			</div>
		</div>
		<!--End  Apple Watch -->
		<!-- Apple Watch -->
		<div class="content-open" id="content-4">
			<div class="product-zoom-slider">
				<div class="image-left">
					<img src="<?php bloginfo('template_url'); ?>/creative/images/jpg/iphone-klamr-content.jpg">
				</div>
				<div class="detail">
					<h2>klamr4</h2>
					<h3>mobile application</h3>
					<p>Apple Watch makes all the ways you're used to communicating more convenient. And because it sits right on your wrist, it can add a physical dimension to alerts and notifications. For example, you’ll feel a gentle tap with each incoming message.</p>
					<div class="description">
						<span class="icon-project-management"></span>
						<p class="content">Apple Watch also lets you connect with your favorite people in fun, spontaneous ways — like sending a tap, a sketch.</p>
					</div>
					<a class="button primary btn-close-slide" data-text="close" data-modal="modal-services"><span>close</span></a>
				</div>
			</div>
		</div>
		<!--End  Apple Watch -->
		<!-- End Content detail -->
		
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
					
					<h1><?php the_field('title'.$_SESSION["lan"], get_field('intro',$post->ID)); ?></h1>
					
					<a class="next-btn" href="#section2">
						<span><?php the_field('next_page'.$_SESSION["lan"], get_field('intro',$post->ID)); ?></span>
						<span><?php the_field('who_is_creative_lab'.$_SESSION["lan"], get_field('intro',$post->ID)); ?></span>
						<span class="icon-arrow-down"></span>
					</a>
					
				</div>
		
			</section>
			
			<!-- Who We Are -->	
			<section id="section2" data-stellar-background-ratio="0.3">
				<img src="<?php bloginfo('template_url'); ?>/creative/images/png/element-section2.png" alt="" data-stellar-ratio="0.8">
				
				<div class="wrap">
					
					<h1><?php the_field('title_p2'.$_SESSION["lan"], get_field('who_is_creative_lab',$post->ID)); ?></h1>
					<p><?php the_field('text_p2'.$_SESSION["lan"], get_field('who_is_creative_lab',$post->ID)); ?></p>
					<a class="button primary md-trigger" data-text="<?php the_field('meet_the_team'.$_SESSION["lan"], get_field('who_is_creative_lab',$post->ID)); ?>" data-modal="modal-team"><span><?php the_field('meet_the_team'.$_SESSION["lan"], get_field('who_is_creative_lab',$post->ID)); ?></span></a>
					
					<a class="next-btn" href="#section3">
						<span><?php the_field('next_page_p2'.$_SESSION["lan"], get_field('who_is_creative_lab',$post->ID)); ?></span>
						<span><?php the_field('our_services'.$_SESSION["lan"], get_field('who_is_creative_lab',$post->ID)); ?></span>
						<span class="icon-arrow-down"></span>
					</a>
				
				</div>
				
			</section>
			
			<!-- Our Services -->	
			<section id="section3" data-stellar-background-ratio="0.3">
				<img src="<?php bloginfo('template_url'); ?>/creative/images/png/element-section3.png" alt="" data-stellar-ratio="0.8">
				
				<div class="wrap">
					
					<h1><?php the_field('title_p3'.$_SESSION["lan"], get_field('our_services',$post->ID)); ?></h1>
					<p><?php the_field('text_p3'.$_SESSION["lan"], get_field('our_services',$post->ID)); ?></p>
					<a class="button primary md-trigger" data-text="<?php the_field('explore_services'.$_SESSION["lan"], get_field('our_services',$post->ID)); ?>" data-modal="modal-services"><span><?php the_field('explore_services'.$_SESSION["lan"], get_field('our_services',$post->ID)); ?></span></a>
					
					<a class="next-btn" href="#section4">
						<span><?php the_field('next_page_p3'.$_SESSION["lan"], get_field('our_services',$post->ID)); ?></span>
						<span><?php the_field('why_choose_us'.$_SESSION["lan"], get_field('our_services',$post->ID)); ?></span>
						<span class="icon-arrow-down"></span>
					</a>
				
				</div>

			</section>
			
			<!-- Featured Works -->
			<section id="section4" data-stellar-background-ratio="0.3">
					<div class="slide" data-stellar-ratio="0.8">
						
						<div class="product-slider">
							<!-- Slider controller -->
							<div class="slider-nav">
								<span class="icon-arrow reverse" id="previous"></span>
								<span class="icon-magnifier" id="zoom-detail"></span>
								<span class="icon-arrow" id="next"></span>
							</div>
							<!--End Slider controller -->
							<!-- Iphone -->
							<div class="slider" id="slider-1">
								<div class="container">
									<h2 class="title">
									 	klamr app 1
									 	<span>mobile application</span>
									</h2>
									<div class="slider-mover">
										<div class="img-big">
											<img src="<?php bloginfo('template_url'); ?>/creative/images/svg/iphone-wirefame.svg">
											<div class="img-small iphone">
												<div class="background-img"></div>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<!--End Iphone -->
							<!-- Ipad -->
							<div class="slider" id="slider-2">
								<div class="container">
									<h2 class="title">
									 	klamr app 2
									 	<span>mobile application</span>
									</h2>
									<div class="slider-mover">
										<div class="img-big">
											<img src="<?php bloginfo('template_url'); ?>/creative/images/svg/ipad-wireframe.svg">
											<div class="img-small ipad">
												<div class="background-img"></div>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<!--End ipad -->

							<!-- Apple macbook -->
							<div class="slider" id="slider-3">
								<div class="container">
									<h2 class="title">
									 	klamr app 3
									 	<span>mobile application</span>
									</h2>
									<div class="slider-mover">
										<div class="img-big">
											<img src="<?php bloginfo('template_url'); ?>/creative/images/svg/iphone-wirefame.svg">
											<div class="img-small macbook">
												<div class="background-img"></div>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<!--End macbook -->

							<!-- Apple imac -->
							<div class="slider" id="slider-4">
								<div class="container">
									<h2 class="title">
									 	klamr app 4
									 	<span>mobile application</span>
									</h2>
									<div class="slider-mover">
										<div class="img-big">
											<img src="<?php bloginfo('template_url'); ?>/creative/images/svg/iphone-wirefame.svg">
											<div class="img-small macbook">
												<div class="background-img"></div>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<!--End imac -->
						</div>

						
					</div>
					<!-- End Slider -->
				<div class="wrap">
					
					<h1><?php the_field('title_p5'.$_SESSION["lan"], get_field('featured_works',$post->ID)); ?></h1>
					<p><?php the_field('text_p5'.$_SESSION["lan"], get_field('featured_works',$post->ID)); ?></p>
					
					<a class="next-btn" href="#section5">
						<span><?php the_field('contact_us'.$_SESSION["lan"], get_field('featured_works',$post->ID)); ?></span>
						<span><?php the_field('lets_talk'.$_SESSION["lan"], get_field('featured_works',$post->ID)); ?></span>
						<span class="icon-arrow-down"></span>
					</a>
					
				</div>
				
				
			</section>

			<!-- Why Choose Us -->	
			<section id="section5" data-stellar-background-ratio="0.3">
				<img src="<?php bloginfo('template_url'); ?>/creative/images/png/element-section5.png" alt="" data-stellar-ratio="0.8">
				<div class="wrap">
					
					<h1><?php the_field('title_p4'.$_SESSION["lan"], get_field('why_choose_us',$post->ID)); ?></h1>
					<p><?php the_field('text_p4'.$_SESSION["lan"], get_field('why_choose_us',$post->ID)); ?></p>
					<a class="button primary md-trigger" data-text="<?php the_field('our_advantages'.$_SESSION["lan"], get_field('why_choose_us',$post->ID)); ?>" data-modal="modal-advantages"><span><?php the_field('our_advantages'.$_SESSION["lan"], get_field('why_choose_us',$post->ID)); ?></span></a>
					
					<a class="next-btn md-trigger"  data-modal="modal-contact">
						<span><?php the_field('next_page_p4'.$_SESSION["lan"], get_field('why_choose_us',$post->ID)); ?></span>
						<span><?php the_field('featured_works'.$_SESSION["lan"], get_field('why_choose_us',$post->ID)); ?></span>
						<span class="icon-talk"></span>
					</a>
					
				</div>

			</section>

		</div> <!-- main-story -->
	
	

<?php  get_footer(); ?>