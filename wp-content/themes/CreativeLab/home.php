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

		<?php global $lang; ?>
		
		<div class="md-modal" id="modal-contact">
			<div class="md-form">
				<!-- Account Form -->
				<div id="contact" method="post">  
					<fieldset>
						<legend align="center"><?php the_field('title_p6'.$lang, get_field('contact',$post->ID)); ?></legend>
						<p><?php the_field('text_p6'.$lang, get_field('contact',$post->ID)); ?></p>
						<?php the_field('form'.$lang, get_field('contact',$post->ID)); ?>  
					<?php the_field('if_you_prefer_it'.$lang, get_field('contact',$post->ID)); ?> 
					</fieldset>
		        </div>
				<!-- 
				<p id="success"><?php the_field('success'.$lang, get_field('contact',$post->ID)); ?></p>
				<p id="error"><?php the_field('error'.$lang, get_field('contact',$post->ID)); ?></p> -->

	      <h2><?php the_field('creative_house'.$lang, get_field('contact',$post->ID)); ?></h2>
	      <p><span class="icon-location"></span> <?php the_field('address'.$lang, get_field('contact',$post->ID)); ?></p>
        
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Modal Team -->
		<div class="md-modal" id="modal-team">
			<div class="md-content">

				<?php if( have_rows('team'.$lang, get_field('who_is_creative_lab',$post->ID))): ?>
				
					<?php while( have_rows('team'.$lang, get_field('who_is_creative_lab',$post->ID)) ): the_row(); 

						// vars
						$name = get_sub_field('name'.$lang);
						$work = get_sub_field('work'.$lang);
						$avatar = get_sub_field('avatar'.$lang);
						$about = get_sub_field('about'.$lang);

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
		
				<a class="button md-close" data-text="<?php the_field('close_p2'.$lang, get_field('who_is_creative_lab',$post->ID)); ?>"><span><?php the_field('close_p2'.$lang, get_field('who_is_creative_lab',$post->ID)); ?></span></a>
        
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Modal Services -->
		<div class="md-modal" id="modal-services">
			<div class="md-content">
				<?php if( have_rows('service'.$lang, get_field('our_services',$post->ID))): ?>
					
					<?php while( have_rows('service'.$lang, get_field('our_services',$post->ID)) ): the_row(); 

						// vars
						$name = get_sub_field('name'.$lang);
						$work = get_sub_field('work'.$lang);
						$logo = get_sub_field('logo'.$lang);
						$about = get_sub_field('about'.$lang);

					?>
						<div class="section">
							<div class="title">
								<span><strong><?php echo $name; ?></strong></strong><?php echo $work; ?></span>
								<span class="<?php echo $logo; ?>"></span>
							</div>

							<p><?php echo $about; ?></p>

							<?php if( have_rows('tag'.$lang, get_field('our_services',$post->ID))): ?>
								<?php while( have_rows('tag'.$lang, get_field('our_services',$post->ID)) ): the_row(); 
									$tag = get_sub_field('tag_item'.$lang);
								?>
									<span class="tag"><?php echo $tag; ?></span>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				
		
				<a class="button md-close" data-text="<?php the_field('close_p3'.$lang, get_field('our_services',$post->ID)); ?>"><span><?php the_field('close_p3'.$lang, get_field('our_services',$post->ID)); ?></span></a>
        
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Modal Advantages -->
		<div class="md-modal" id="modal-advantages">
			<div class="md-content">
				<?php if( have_rows('advantage'.$lang, get_field('why_choose_us',$post->ID))): ?>
					
					<?php while( have_rows('advantage'.$lang, get_field('why_choose_us',$post->ID)) ): the_row(); 

						// vars
						$title = get_sub_field('title'.$lang);
						$text = get_sub_field('text'.$lang);
						$logo = get_sub_field('logo'.$lang);
						$about = get_sub_field('about'.$lang);

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
				
				
							
				<a class="button md-close" data-text="<?php the_field('close_p4'.$lang, get_field('why_choose_us',$post->ID)); ?>"><span><?php the_field('close_p4'.$lang, get_field('why_choose_us',$post->ID)); ?></span></a>
        
			</div>
		</div> <!-- .md-modal -->
		
		<!-- Modal Featured Works -->
		<div class="md-modal" id="modal-featured-works">
			<div class="md-content">
				<?php if( have_rows('app'.$lang, get_field('featured_works',$post->ID))): ?>
					
					<?php while( have_rows('app'.$lang, get_field('featured_works',$post->ID)) ): the_row(); 

						// vars
						$name = get_sub_field('name'.$lang);
						$kind = get_sub_field('kind'.$lang);
						$logo = get_sub_field('logo'.$lang);
						$about = get_sub_field('about'.$lang);
						$image = get_sub_field('image'.$lang);

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
				
															
				<a class="button md-close" data-text="<?php the_field('close_p5'.$lang, get_field('featured_works',$post->ID)); ?>"><span><?php the_field('close_p5'.$lang, get_field('featured_works',$post->ID)); ?></span></a>
        
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
					
					<h1><?php the_field('title'.$lang, get_field('intro',$post->ID)); ?></h1>
					
					<a class="next-btn" href="#section2">
						<span><?php the_field('next_page'.$lang, get_field('intro',$post->ID)); ?></span>
						<span><?php the_field('who_is_creative_lab'.$lang, get_field('intro',$post->ID)); ?></span>
						<span class="icon-arrow-down"></span>
					</a>
					
				</div>
		
			</section>
			
			<!-- Who We Are -->	
			<section id="section2" data-stellar-background-ratio="0.3">
				<img src="<?php bloginfo('template_url'); ?>/creative/images/png/element-section2.png" alt="" data-stellar-ratio="0.8">
				
				<div class="wrap">
					
					<h1><?php the_field('title_p2'.$lang, get_field('who_is_creative_lab',$post->ID)); ?></h1>
					<p><?php the_field('text_p2'.$lang, get_field('who_is_creative_lab',$post->ID)); ?></p>
					<a class="button primary md-trigger" data-text="<?php the_field('meet_the_team'.$lang, get_field('who_is_creative_lab',$post->ID)); ?>" data-modal="modal-team"><span><?php the_field('meet_the_team'.$lang, get_field('who_is_creative_lab',$post->ID)); ?></span></a>
					
					<a class="next-btn" href="#section3">
						<span><?php the_field('next_page_p2'.$lang, get_field('who_is_creative_lab',$post->ID)); ?></span>
						<span><?php the_field('our_services'.$lang, get_field('who_is_creative_lab',$post->ID)); ?></span>
						<span class="icon-arrow-down"></span>
					</a>
				
				</div>
				
			</section>
			
			<!-- Our Services -->	
			<section id="section3" data-stellar-background-ratio="0.3">
				<img src="<?php bloginfo('template_url'); ?>/creative/images/png/element-section3.png" alt="" data-stellar-ratio="0.8">
				
				<div class="wrap">
					
					<h1><?php the_field('title_p3'.$lang, get_field('our_services',$post->ID)); ?></h1>
					<p><?php the_field('text_p3'.$lang, get_field('our_services',$post->ID)); ?></p>
					<a class="button primary md-trigger" data-text="<?php the_field('explore_services'.$lang, get_field('our_services',$post->ID)); ?>" data-modal="modal-services"><span><?php the_field('explore_services'.$lang, get_field('our_services',$post->ID)); ?></span></a>
					
					<a class="next-btn" href="#section4">
						<span><?php the_field('next_page_p3'.$lang, get_field('our_services',$post->ID)); ?></span>
						<span><?php the_field('why_choose_us'.$lang, get_field('our_services',$post->ID)); ?></span>
						<span class="icon-arrow-down"></span>
					</a>
				
				</div>

			</section>
			
			<!-- Why Choose Us -->	
			<section id="section4" data-stellar-background-ratio="0.3">
				<img src="<?php bloginfo('template_url'); ?>/creative/images/png/element-section4.png" alt="" data-stellar-ratio="0.8">
				<div class="wrap">
					
					<h1><?php the_field('title_p4'.$lang, get_field('why_choose_us',$post->ID)); ?></h1>
					<p><?php the_field('text_p4'.$lang, get_field('why_choose_us',$post->ID)); ?></p>
					<a class="button primary md-trigger" data-text="<?php the_field('our_advantages'.$lang, get_field('why_choose_us',$post->ID)); ?>" data-modal="modal-advantages"><span><?php the_field('our_advantages'.$lang, get_field('why_choose_us',$post->ID)); ?></span></a>
					
					<a class="next-btn" href="#section5">
						<span><?php the_field('next_page_p4'.$lang, get_field('why_choose_us',$post->ID)); ?></span>
						<span><?php the_field('featured_works'.$lang, get_field('why_choose_us',$post->ID)); ?></span>
						<span class="icon-arrow-down"></span>
					</a>
					
				</div>

			</section>
			
			<!-- Featured Works -->
			<section id="section5" data-stellar-background-ratio="0.3">
				<img src="<?php bloginfo('template_url'); ?>/creative/images/png/element-section5.png" alt="" data-stellar-ratio="0.8">
				<div class="wrap">
					
					<h1><?php the_field('title_p5'.$lang, get_field('featured_works',$post->ID)); ?></h1>
					<p><?php the_field('text_p5'.$lang, get_field('featured_works',$post->ID)); ?></p>
					<a class="button primary md-trigger" data-text="<?php the_field('works_weve_done'.$lang, get_field('featured_works',$post->ID)); ?>" data-modal="modal-featured-works"><span><?php the_field('works_weve_done'.$lang, get_field('featured_works',$post->ID)); ?></span></a>
					
					<a class="next-btn md-trigger" data-modal="modal-contact">
						<span><?php the_field('contact_us'.$lang, get_field('featured_works',$post->ID)); ?></span>
						<span><?php the_field('lets_talk'.$lang, get_field('featured_works',$post->ID)); ?></span>
						<span class="icon-talk"></span>
					</a>
					
				</div>
				
			</section>

		</div> <!-- main-story -->
<?php  get_footer(); ?>
		
<!-- Load JS here for greater good =============================-->
<script type="text/javascript">
	$(document).ready(function(){
		$('#ip-fullname').prop('placeholder','<?php the_field('full_name'.$lang, get_field('contact',$post->ID)); ?>');
		$('#ip-company').prop('placeholder','<?php the_field('your_company_name'.$lang, get_field('contact',$post->ID)); ?>');
		$('#ip-email').prop('placeholder','<?php the_field('email'.$lang, get_field('contact',$post->ID)); ?>');
		$('#ip-phone').prop('placeholder','<?php the_field('phone_number'.$lang, get_field('contact',$post->ID)); ?>');
		$('#ip-text').prop('placeholder','<?php the_field('short_intro'.$lang, get_field('contact',$post->ID)); ?>');

		$('#btn-close').prop('type','button');
		$('#btn-close').prop('value','<?php the_field('close_p6'.$lang, get_field('contact',$post->ID)); ?>');

		$('#submit-btn').prop('value','<?php the_field('send'.$lang, get_field('contact',$post->ID)); ?>');
		$('#submit-btn').click(function(){
			var frm = document.getElementsByClassName('wpcf7-form')[0];
			   frm.reset();  
		});
		
		$('#label-close span.ajax-loader').removeClass('ajax-loader');

	});
</script>
