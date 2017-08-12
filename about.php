<?php include 'header.php'; ?>


			<div id="content">
				<div id="gallery">
				<script type="text/javascript">
		 
					$(document).ready(function()
					{
						$("#sub_showcase").awShowcase(
						{
							content_width:			421,
							content_height:			316,
							fit_to_parent:			false,
							auto:					true,
							interval:				10000,
							continuous:				true,
							loading:				true,
							tooltip_width:			200,
							tooltip_icon_width:		32,
							tooltip_icon_height:	32,
							tooltip_offsetx:		18,
							tooltip_offsety:		0,
							arrows:					true,
							buttons:				false,
							btn_numbers:			false,
							keybord_keys:			false,
							mousetrace:				false, /* Trace x and y coordinates for the mouse */
							pauseonover:			true,
							stoponclick:			false,
							transition:				'hslide', /* hslide/vslide/fade */
							transition_delay:		0,
							transition_speed:		500,
							show_caption:			'onload', /* onload/onhover/show */
							thumbnails:				false,
							thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
							thumbnails_direction:	'vertical', /* vertical/horizontal */
							thumbnails_slidex:		1, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
							dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
							speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
							viewline:				false, /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
							custom_function:		null /* Define a custom function that runs on content change */
						});
					});
		
					</script>
					<div class="rotate">
						<div id="sub_showcase" class="showcase">
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/homepage-gallery/once.jpg" width="421" height="316" />
					            </div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/homepage-gallery/forest.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/homepage-gallery/fish.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/homepage-gallery/garden.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/homepage-gallery/science.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/homepage-gallery/carolina.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/homepage-gallery/rockwell.jpg" width="421" height="316" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="intro">
					<p style="color: #ddc083; font-size: 20px;"><em>Think Outside the Picture Frame...</em></p>
					<p style="line-height: 20px;">Providing service throughout South Carolina, North Carolina, and Georgia, Hoffman Murals works with schools, professional offices, medical and dentistry practices, up-scale residential properties, and enterprises of all types. Nothing inspires people more than taking the ordinary outside of the box and adding that extra "wow" factor. All work, including consultation, is done on location for ideas specific to your area, and to allow for inspirations and passions to flourish!</p>
					<p style="float: right; margin-top: 0px;"><em><a href="quote.php" style="color: #ddc083; font-size: 20px;">Request Your Free Quote Today!</a></em></p>
				</div>


<?php include 'footer.php'; ?>