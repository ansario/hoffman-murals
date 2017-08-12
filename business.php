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
									<img src="images/business/breakroom.jpg" width="421" height="316" />
					            </div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/business/5.jpg" width="421" height="316" />
					            </div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/business/00.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/business/18.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/business/25.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/business/01.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/business/3.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/business/8.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/business/10.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/business/20.jpg" width="421" height="316" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="intro">
					<span style="color: #ddc083; font-size: 18px;"><em>Give Your Business That Extra "Wow" Factor...</em></span>
					<p style="line-height: 20px;">Showcase the character of your business and enrich the atmosphere of your workplace with original and unique-to-you artwork.  A mural by Hoffman Murals allows you to both make a memorable impression on your customers and clientele and to create a workspace reflective of your business's quality and style.</p>
					<p style="float: right; margin-top: 0px;"><em><a href="quote.php" style="color: #ddc083; font-size: 20px;">Request Your Free Quote Today!</a></em></p>
				</div>


<?php include 'footer.php'; ?>