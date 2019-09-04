<?php include('inc_head.php'); ?>
 
  
  </head>

<body onload="myFunction()">
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
				  <ul class="nav nav-tabs card-header-tabs" id="myleague" role="tablist">
					<li class="nav-item active">
						<a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">
							<div class="logo-l"><img src="img/league/serie-a.png" alt=""/> </div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">
							<div class="logo-l"><img src="img/league/premier.png" alt=""/> </div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">
							<div class="logo-l"><img src="img/league/ligue1.png" alt=""/> </div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="false">
							<div class="logo-l"><img src="img/league/bundesliga.png" alt=""/> </div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="five-tab" data-toggle="tab" href="#five" role="tab" aria-controls="five" aria-selected="false">
							<div class="logo-l"><img src="img/league/laliga.png" alt=""/> </div>
						</a>
					</li>
				  </ul>
				</div>
				  <div class="row mt-10 mb-10">
				  		<div class="col-xs-3 lh24">
							<img src="img/logo-live.png" alt="">
						</div>
						<div class="col-xs-9 text-right">
							<!--<div class="input-group date">
							  <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
								<span class="input-group-addon">
									<i class="far fa-calendar"></i>
								</span>
							</div>-->
							
								<a href="" class="datetime btn btn-default activ">
									Previous
								</a>
								<a href="" class="datetime btn btn-default">
									Today
								</a>
								<a href="" class="datetime btn btn-default">
									Next
								</a>
							
							
						</div>
				  </div>
				
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade active p-3 in" id="one" aria-labelledby="one-tab">
						<div class="part">
						<div class="pt-title">Serie A</div>
						<img class="unite" src="img/slash.png" alt=""> 
						<a href="matches-standing.php" class="stand btn btn-default chk2">
							<i class="fas fa-table"></i>&nbsp; Standing
						</a>
						<div class="col-xs-12 mt-10">
							<div class="lm">
								<table class="table table-striped custab">
								<thead>
									<tr>
										<th><strong>Matches</strong></th>
										<th class="text-center">
											<img src="img/logo-serie-a.png" height="50" alt=""/>
											<!--<span class="pull-right text-small">Matchweek 14</span>-->
										</th>
										
									</tr>
								</thead>
									<tr class="clickable-row" data-href="matches-timeline.php">
										<td class="text-small">
											Sunday <br>
											01/12/2018 15:00 <br>
									    	<img src="img/logo-live.png" alt=""/>
										</td>
										<td>
											<div class="col-xs-6 scrL">
												<img src="img/juventus_black.png" alt="">
												<span>2</span>
												<h4 class="tl mt-10">Juventus</h4>
											</div>
											<div class="col-xs-6 scrR">
												<span>1</span>
												<img src="img/milan.png" alt="">
												<h4 class="tl mt-10">Milan</h4>
											</div>
										</td>
									</tr>
									<tr>
										<td class="text-small">
											Sunday <br>
											01/12/2018 15:00 <br>
									    	<!--<img src="img/logo-live.png" alt=""/>-->
										</td>
										<td>
											<div class="col-xs-6 scrL">
												<img src="img/Inter_Milan.png" alt="">
												<span>1</span>
												<h4 class="tl mt-10">Inter Milan</h4>
											</div>
											<div class="col-xs-6 scrR">
												<span>3</span>
												<img src="img/S.S.C._Napoli_logo.png" alt="">
												<h4 class="tl mt-10">Napoli</h4>
											</div>
										</td>
									</tr>
									<tr>
										<td class="text-small">
											Sunday <br>
											01/12/2018 15:00 <br>
									    	<img src="img/logo-live.png" alt=""/>
										</td>
										<td>
											<div class="col-xs-6 scrL">
												<img src="img/chievo.png" alt="">
												<span>0</span>
												<h4 class="tl mt-10">Chievo</h4>
											</div>
											<div class="col-xs-6 scrR">
												<span>4</span>
												<img src="img/as_roma.png" alt="">
												<h4 class="tl mt-10">AS Roma</h4>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						
						
						
						<div class="clearfix"></div>
					</div>           
				  </div>
				  <div class="tab-pane fade p-3" id="two" aria-labelledby="two-tab">
						<div class="part">
						<div class="pt-title">Premier League</div>
						<img class="unite" src="img/slash.png" alt=""> 
						<a href="matches-standing.php" class="stand btn btn-default chk2">
							<i class="fas fa-table"></i>&nbsp; Standing
						</a>
						<div class="col-xs-12 mt-10">
							<div class="lm">
								<table class="table table-striped custab">
								<thead>
									<tr>
										<th><strong>Matches</strong></th>
										<th class="text-center">
											<img src="img/logo-premier-league.png" height="50" alt=""/>
											<!--<span class="pull-right text-small">Matchweek 14</span>-->
										</th>
										
									</tr>
								</thead>
									<tr>
										<td class="text-small">
											Sunday <br>
											01/12/2018 15:00 <br>
									    	<img src="img/logo-live.png" alt=""/>
										</td>
										<td>
											<div class="col-xs-6 scrL">
												<img src="img/juventus_black.png" alt="">
												<span>2</span>
												<h4 class="tl mt-10">Juventus</h4>
											</div>
											<div class="col-xs-6 scrR">
												<span>1</span>
												<img src="img/milan.png" alt="">
												<h4 class="tl mt-10">Milan</h4>
											</div>
										</td>
									</tr>
									<tr>
										<td class="text-small">
											Sunday <br>
											01/12/2018 15:00 <br>
									    	<!--<img src="img/logo-live.png" alt=""/>-->
										</td>
										<td>
											<div class="col-xs-6 scrL">
												<img src="img/Inter_Milan.png" alt="">
												<span>1</span>
												<h4 class="tl mt-10">Inter Milan</h4>
											</div>
											<div class="col-xs-6 scrR">
												<span>3</span>
												<img src="img/S.S.C._Napoli_logo.png" alt="">
												<h4 class="tl mt-10">Napoli</h4>
											</div>
										</td>
									</tr>
									<tr>
										<td class="text-small">
											Sunday <br>
											01/12/2018 15:00 <br>
									    	<img src="img/logo-live.png" alt=""/>
										</td>
										<td>
											<div class="col-xs-6 scrL">
												<img src="img/chievo.png" alt="">
												<span>0</span>
												<h4 class="tl mt-10">Chievo</h4>
											</div>
											<div class="col-xs-6 scrR">
												<span>4</span>
												<img src="img/as_roma.png" alt="">
												<h4 class="tl mt-10">AS Roma</h4>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						
						
						
						<div class="clearfix"></div>
					</div>        
				  </div>
				  <div class="tab-pane fade p-3" id="three" aria-labelledby="three-tab">
						Ligue 1      
				  </div>
				  <div class="tab-pane fade p-3" id="four" aria-labelledby="four-tab">
						Bundesliga      
				  </div>
				  <div class="tab-pane fade p-3" id="five" aria-labelledby="five-tab">
						La Liga
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
