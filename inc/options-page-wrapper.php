<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1>NY Times Articles</h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">
					<?php if (!isset($jgnyt_search) || $jgnyt_search == "" ): ?>
					<!-- BOX:form API KEY -->
					<div class="postbox">

						<button type="button" class="handlediv" aria-expanded="true" >
							<span class="screen-reader-text">Toggle panel</span>
							<span class="toggle-indicator" aria-hidden="true"></span>
						</button>
						<!-- Toggle -->

						<h2 class="hndle"><span>Let's get started</span>
						</h2>

						<div class="inside">
							<form method = "post" action="">
							<input type="hidden" name = "jgnyt_form_submited" value = "Y"></input>
								<table class="form-table">
									<tr valign="top">
										<td scope="row"><label for="tablecell">Search String</label></td>
										<td><input name = "jgnyt_search" id = "jgnyt_search" type="text" value="" class="regular-text"/></td>
									</tr>
									<tr valign="top">
										<td scope="row"><label for="tablecell">API Key </label></td>
										<td><input name = "jgnyt_apikey" id = "jgnyt_apikey" type="text" value="" class="regular-text"/></td>
									</tr>
								</table>
								<p>
									<input class="button-primary" type="submit" name="jgnyt_form_submit" value="Save" />
								</p>
							</form>
						</div>
						<!-- .inside -->

					</div>
					<?php else: ?>
					<!-- .postbox -->
					<!-- BOX:ARTICLES -->
					<div class="postbox">

						<button type="button" class="handlediv" aria-expanded="true" >
							<span class="screen-reader-text">Toggle panel</span>
							<span class="toggle-indicator" aria-hidden="true"></span>
						</button>
						<!-- Toggle -->

						<h2 class="hndle"><span>Let's get started</span>
						</h2>

						<div class="inside">
							
							<p>Below are the 10 articles. <br> 
							</p>

								<ul class="pgnyt-articles">
									<?php for( $i = 0; $i < 10; $i++ ):?>									
										<li>
											<ul>
												<li>
													<!-- //https://ionic4test.enoturismo-reservas.com/wp-content/uploads/2020/01/pg_dummy.jpg// -->
													<img width="120px" src="https://ionic4test.enoturismo-reservas.com/wp-content/uploads/2020/01/pg_dummy.jpg ">				
												</li>

												<li class="pgnyt-articles-name">
													<a href="#">
														Article Text and Link
														
													</a>
												</li>

												<li class="pgnyt-articles-paragraph">
													<p>First Line of Content</p>
												</li>

											</ul>									
										</li>								
									<?php endfor; ?>
								</ul>
						</div>
						
						<!-- .inside -->

					</div>
					
					<?php endif ?>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">
				<!-- <?php if (isset($jgnyt_search) || $jgnyt_search !== "" ): ?> -->
					<div class="postbox">

						<button type="button" class="handlediv" aria-expanded="true" >
							<span class="screen-reader-text">Toggle panel</span>
							<span class="toggle-indicator" aria-hidden="true"></span>
						</button>
						<!-- Toggle -->

						<h2 class="hndle"><span>Settings</span></h2>

						<div class="inside">
							<form method = "post" action="">
							<input type="hidden" name = "jgnyt_form_submited" value = "Y"></input>

								<p>
									<input name = "jgnyt_search" id = "jgnyt_search" type="text" value= <?php echo $jgnyt_search ?> class="all-options"/>
									<input name = "jgnyt_apikey" id = "jgnyt_apikey" type="text" value= <?php echo $jgnyt_apikey ?> class="all-options"/>
								</p>
								<p>
									<input class="button-primary" type="submit" name="jgnyt_form_submit" value="Update" />
								</p>
							</form>
							
						</div>
						<!-- .inside -->

					</div>
					<?php endif ?>
					<!-- .postbox -->
					

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->

