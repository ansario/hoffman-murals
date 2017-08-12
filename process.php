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
									<img src="images/process/oaktree1.jpg" width="421" height="316" />
					            </div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/process/oaktree2.jpg" width="421" height="316" />
					            </div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/process/oaktree3.jpg" width="421" height="316" />
					            </div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/process/oaktree4.jpg" width="421" height="316" />
					            </div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/process/20.jpg" width="421" height="316" />
					            </div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/process/26.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/process/30.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/process/31.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/process/32.jpg" width="421" height="316" />
								</div>
							</div>
							<div class="showcase-slide">
								<div class="showcase-content">
									<img src="images/process/27.jpg" width="421" height="316" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="intro">
					<p style="color: #ddc083; font-size: 20px;"><em>From Start to Finish...</em></p>
					<p style="line-height: 20px;">Every mural begins with an idea and a specific space provided by the client and the creative vision of the artist.  Hoffman Murals prides itself on successfully combining these into a stunning visual artwork.  Each mural starts with an on-site consultation.  Detailed sketches with multiple options are then rendered for the client where a final design and work schedule are decided.  The entire mural is created within the designated space.  The duration of the project is dependent upon the complexity of the design, the imagery, and the architecture of the space.  Every mural (optional for residential) is sealed with two coats of a polyurethane protective finish.</p>
					<p style="float: right; margin-top: 0px;"><em><a href="quote.php" style="color: #ddc083; font-size: 20px;">Request Your Free Quote Today!</a></em></p>
				</div>


<?php include 'footer.php'; ?>