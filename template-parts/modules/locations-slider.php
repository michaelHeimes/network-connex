<div class="locations-slider">
	<div class="inner light-gray-bg">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="left cell small-12 medium-shrink">
					<h2>Our<br>Locations</h2>
					<nav class="grid-x">
						<button class="locations-btn locations-button-prev green-bg">
							<svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 22.1006L2 12.3134L12 2.10059" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
						<button class="locations-btn locations-button-next green-bg">
							<svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2 2.10071L12 11.8879L2 22.1007" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</nav>
				</div>
				<div class="right cell small-12 medium-auto">
					<?php			
					$args = array(  
						'post_type' => 'location',
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'orderby' => 'title',
						'order' => 'ASC'
					);
					
					$loop = new WP_Query( $args ); 
					
					if ( $loop->have_posts() ) :?>
						<div class="locations-swiper">
							<div class="swiper-container">
								<div class="swiper-wrapper">
								<?php while ( $loop->have_posts() ) : $loop->the_post();?>
									
								<div class="swiper-slide text-center">
									<svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_118_8)">
										<path opacity="0.9" fill-rule="evenodd" clip-rule="evenodd" d="M12.236 0.887695C18.8731 0.887695 24.222 6.22845 24.222 12.7931C24.222 18.9962 19.4612 24.0588 13.3842 24.6429V39.7194C13.3842 40.3592 12.8521 40.8599 12.236 40.8599C11.6199 40.8599 11.0878 40.3314 11.0878 39.7194V24.6429C5.01079 24.0588 0.25 18.9684 0.25 12.7931C0.25 6.22845 5.6269 0.887695 12.236 0.887695Z" fill="#3C8CB8"/>
										</g>
										<defs>
										<clipPath id="clip0_118_8">
										<rect width="24" height="40" fill="white" transform="translate(0.25 0.887695)"/>
										</clipPath>
										</defs>
									</svg>
									<h4><?php the_field('name');?></h4>
									<p><?php the_field('address');?></p>
								</div>
									
								<?php endwhile;?>
								</div>
							</div>
						</div>
					<?php endif;
					wp_reset_postdata(); 
					?>
		
				</div>
			</div>
		</div>
	</div>
</div>