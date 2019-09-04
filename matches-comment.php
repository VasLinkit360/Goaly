<?php include('inc_head.php'); ?>

  </head>

<body>
	<!--<div id="loader"><div id="spin"></div></div>-->
	
	<div class="">
		<?php include('inc_topmenu2.php'); ?>
		
		<div class="clearfix"></div>
		<?php include('inc_leftmenu.php'); ?>
		
	  <div class="page-content">
			<!-- Menu Cat -->
			<div class="col-xs-12 nnav">
				<ul class="nav nav-tabs">
					<li>
						<a href="index.php" class="ingrid">
							<i class="far fa-futbol text-center"></i> 
							<span class="text-small">Home</span>
						</a>
					</li>
					<li>
						<a href="contest.php" class="ingrid">
							<i class="fas fa-history text-center"></i>
							<span class="text-small">Contest</span>
						</a>
					</li>
					<li class="active">
						<a href="matches.php" class="ingrid">
							<i class="far fa-clock text-center"></i>
							<span class="text-small">Live</span>
						</a>
					</li>
					<li>
						<a href="news.php" class="ingrid">
							<i class="far fa-newspaper text-center"></i>
							<span class="text-small">News</span>
						</a>
					</li>
				</ul>
			</div>
		  	<div class="clearfix"></div>
			<!-- Contest Detail -->
			<div class="col-xs-12">
		  		<div class="row">
			<div class="col-6">
			  <div class="mt-10 plr15">
				<div class="card-header tab-card-header">
				  <ul class="nav nav-tabs card-header-tabs">
					<li class="nav-item active">
						<a href="matches.php"  class="nav-link"> 
							<div class="btn-back"> Back </div>
						</a>
					</li>
				  </ul>
				</div>

				  <div class="tab-pane fade active p-3 in" id="one" aria-labelledby="one-tab">
						<div class="part">
						<div class="pt-title">Serie A</div>
						<img class="unite" src="img/slash.png" alt=""> 

						<div class="col-xs-12 lm mt-10">
							<h5 class="text-center">24/11/2018 - 18:00 </h5>
							<h5 class="text-center text-grey">
								Stadium: ALLIANZ STADIUM - TORINO <br>
								Referee: FEDERICO LA PENNA
							</h5>
							<h5 class="text-center text-blue">FT</h5>
							<div class="col-xs-6 scrL">
								<img src="img/juventus_black.png" alt="">
								<span>2</span>
								<br>
								<h4 class="tl">Juventus</h4>
								<p class="text-right text-small text-grey mr-10">
									Cristiano Ronaldo (29)<br>
									Mario Mandzukic (65)
								</p>
							</div>
							<div class="col-xs-6 scrR">
								<span>1</span>
								<img src="img/milan.png" alt="">
								<br>
								<h4 class="tl">Milan</h4>
								<p class="text-small text-grey ml-10">
									Piatek (45)
								</p>
							</div>
							<div class="row">
								<div class="hr"></div>
							</div>
							<div class="row cm">
								<div class="col-xs-3 text-center">
									<a href="matches-timeline.php" class="">
										Timeline
									</a>
								</div>
								<div class="col-xs-3 text-center">
									<a href="matches-lineup.php" class="">
										Line-ups
									</a>
								</div>
								<div class="col-xs-3 text-center">
									<a href="matches-stat.php" class="">
										Stats
									</a>
								</div>
								<div class="col-xs-3 text-center">
									<a href="matches-comment.php" class="">
										<strong>Comments</strong>
									</a>
								</div>
							</div>
							<div class="row mt-10">
								<div class="hr"></div>
							</div>
							<div class="timeline">
								<div class="overflow">
									<ul class="chat">
										<li class="left clearfix"><span class="chat-img pull-left">
											<img src="http://placehold.it/50/55C1E7/fff&amp;text=U" alt="User Avatar" class="img-circle">
										</span>
											<div class="chat-body clearfix">
												<div class="header">
													<strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
														<span class="glyphicon glyphicon-time"></span>12 mins ago</small>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
												</p>
											</div>
										</li>
										<!--<li class="right clearfix"><span class="chat-img pull-right">
											<img src="http://placehold.it/50/FA6F57/fff&amp;text=ME" alt="User Avatar" class="img-circle">
										</span>
											<div class="chat-body clearfix">
												<div class="header">
													<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
													<strong class="pull-right primary-font">Bhaumik Patel</strong>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
													dolor, quis ullamcorper ligula sodales.
												</p>
											</div>
										</li>-->
										<li class="left clearfix"><span class="chat-img pull-left">
											<img src="img/acc-default.png" alt="User Avatar" class="img-circle" height="50">
										</span>
											<div class="chat-body clearfix">
												<div class="header">
													<strong class="primary-font">Other Sparrow</strong> <small class="pull-right text-muted">
														<span class="glyphicon glyphicon-time"></span>14 mins ago</small>
												</div>
												<p>
													HAhahahaha
												</p>
											</div>
										</li>
										<li class="left clearfix"><span class="chat-img pull-left">
											<img src="img/acc-default2.png" alt="User Avatar" class="img-circle" height="50">
										</span>
											<div class="chat-body clearfix">
												<div class="header">
													<strong class="primary-font">Yele Ojo</strong> <small class="pull-right text-muted">
														<span class="glyphicon glyphicon-time"></span>12 mins ago</small>
												</div>
												<p>
													How many  square feet ?  Cost to fabricate ?  Would this be concidered unreenforced concrete ?
												</p>
											</div>
										</li>
										<li class="left clearfix"><span class="chat-img pull-left">
											<img src="http://placehold.it/50/55C1E7/fff&amp;text=U" alt="User Avatar" class="img-circle">
										</span>
											<div class="chat-body clearfix">
												<div class="header">
													<strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
														<span class="glyphicon glyphicon-time"></span>12 mins ago</small>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
												</p>
											</div>
										</li>
										<li class="left clearfix"><span class="chat-img pull-left">
											<img src="img/acc-default.png" alt="User Avatar" class="img-circle" height="50">
										</span>
											<div class="chat-body clearfix">
												<div class="header">
													<strong class="primary-font">Other Sparrow</strong> <small class="pull-right text-muted">
														<span class="glyphicon glyphicon-time"></span>14 mins ago</small>
												</div>
												<p>
													HAhahahaha
												</p>
											</div>
										</li>
										<li class="left clearfix"><span class="chat-img pull-left">
											<img src="img/acc-default2.png" alt="User Avatar" class="img-circle" height="50">
										</span>
											<div class="chat-body clearfix">
												<div class="header">
													<strong class="primary-font">Yele Ojo</strong> <small class="pull-right text-muted">
														<span class="glyphicon glyphicon-time"></span>12 mins ago</small>
												</div>
												<p>
													How many  square feet ?  Cost to fabricate ?  Would this be concidered unreenforced concrete ?
												</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="panel-footer">
									<div class="input-group">
										<input id="btn-input" type="text" class="form-control input-sm form-chat" placeholder="Type your message here..." />
										<span class="input-group-btn">
											<button class="btn btn-warning btn-sm" id="btn-chat">
												Send</button>
										</span>
									</div>
								</div>
							</div>
						</div>
						
						
						
						<div class="clearfix"></div>
					</div>           
				  </div>
				  
			  </div>
			</div>
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
