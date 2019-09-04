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
								<a href="team-detail.php">
									<img src="img/juventus_black.png" alt="">
								</a>
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
									<a href="" class="">
										<strong>Timeline</strong>
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
										Comments
									</a>
								</div>
							</div>
							<div class="row mt-10">
								<div class="hr"></div>
							</div>
							<div class="timeline">
								<div class="text-center mb-10">Match Details:</div>
								<div class="match-row">
									<div class="tm">30'</div>
									<div class="pn_home">player_name home</div>
									<div class="sc"> <span class="card-yellow"></span> </div>
									<div class="pn_away">&nbsp;</div>
								</div>
								<div class="match-row">
									<div class="tm">42'</div>
									<div class="pn_home">&nbsp;</div>
									<div class="sc"> <span class="red-yellow"></span></div>
									<div class="pn_away">player_name away</div>
								</div>
								<div class="match-row">
									<div class="tm">48'</div>
									<div class="pn_home">player_name home</div>
									<div class="sc"> <span class="card-yellow"></span>&nbsp;<span class="card-yellow"></span> </div>
									<div class="pn_away">&nbsp;</div>
								</div>
								<div class="match-row">
									<div class="tm">67'</div>
									<div class="pn_home">&nbsp;</div>
									<div class="sc">0 - 1</div>
									<div class="pn_away">player_name away</div>
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
