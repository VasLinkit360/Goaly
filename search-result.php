<?php include('inc_head.php'); ?>

  </head>

<body>
	<!--<div id="loader"><div id="spin"></div></div>-->
	
	<div class="">
		<?php include('inc_topmenu2.php'); ?>
		
		<div class="clearfix"></div>
		<?php include('inc_leftmenu.php'); ?>
		
	  <div class="page-content mt-10">
			<!-- Menu Cat -->
			<div class="col-xs-12 main-cat">
				<div class="well">		
					<h5>Search result for: <strong>&nbsp; Juventus</strong></h5>
					<form>
						<fieldset>
							<div class="form-group">
								<input type="text" class="form-control" name="query" id="query" placeholder="">              
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-primary btn-round">Search</button>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="well">
					<div class="team mt-0">
						<h4>News</h4>
						<div class="">
							<div class="post post-widget">
								<a class="post-img" href=""><img src="img/lt2.jpg" alt=""></a>
								<div class="post-body">
									<p class="title-cat">Serie A</p>
									<h3 class="post-title">
										<a href="">
											Juventus celebrations on hold after Napoli draw
										</a>
									</h3>
								</div>
							</div>
							<div class="post post-widget">
								<a class="post-img" href=""><img src="img/lt3.jpg" alt=""></a>
								<div class="post-body">
									<p class="title-cat">UEFA Champions League</p>
									<h3 class="post-title">
										<a href="">
											Bonucci: Kean abuse comments 'misunderstood'
										</a>
									</h3>
								</div>
							</div>
							<div class="post post-widget">
								<a class="post-img" href=""><img src="img/lt4.jpg" alt=""></a>
								<div class="post-body">
									<p class="title-cat">Serie A</p>
									<h3 class="post-title">
										<a href="">
											Teenager Kean strikes twice as Juve sweep Udinese aside
										</a>
									</h3>
								</div>
							</div>
							<div class="post post-widget">
								<a class="post-img" href=""><img src="img/lt1.jpg" alt=""></a>
								<div class="post-body">
									<p class="title-cat">Serie A</p>
									<h3 class="post-title">
										<a href="">
											Ramsey agrees '£400,000-a-week deal' with Juventus
										</a>
									</h3>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<h4>Match</h4>
						<div class="lm bg-f4">
								<table class="table table-striped custab">
									<tbody><tr class="clickable-row" data-href="matches-timeline.php">
										<td class="text-small">
											Saturday <br>
											04/06/2018 21:00 <br>
									    	<img src="img/logo-live.png" alt="">
										</td>
										<td>
											<div class="col-xs-6 scrL">
												<img src="img/juventus_black.png" alt="">
												<span>_</span>
												<h4 class="tl mt-10">Juventus</h4>
											</div>
											<div class="col-xs-6 scrR">
												<span>_</span>
												<img src="img/milan.png" alt="">
												<h4 class="tl mt-10">Milan</h4>
											</div>
										</td>
									</tr>
									<tr>
										<td class="text-small">
											Wednesday <br>
											04/03/2018 16:30 <br>
									    	<!--<img src="img/logo-live.png" alt=""/>-->
										</td>
										<td>
											<div class="col-xs-6 scrL">
												<img src="img/Inter_Milan.png" alt="">
												<span>0</span>
												<h4 class="tl mt-10">Inter Milan</h4>
											</div>
											<div class="col-xs-6 scrR">
												<span>1</span>
												<img src="img/juventus_black.png" alt="">
												<h4 class="tl mt-10">Juventus</h4>
											</div>
										</td>
									</tr>
								</tbody></table>
							</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		  	<div class="clearfix"></div>
			
			
		  
	  		
		  	
	  </div>
	</div>
	<?php include('inc_footer.php'); ?>
	
	<script>
		jQuery(document).ready(function($) {
			$(".clickable-row").click(function() {
				window.location = $(this).data("href");
			});
		});
	</script>
</body>
</html>
