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
					<li class="active">
						<a href="contest.php" class="ingrid">
							<i class="fas fa-history text-center"></i>
							<span class="text-small">Contest</span>
						</a>
					</li>
					<li>
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
			<!-- Contest List -->
			<div class="col-xs-12 lm ct">
		  		<h2 class="title2 mb-15">Score Prediction
					<a href="contest-history.php" class="pull-right text-small">Score History</a>
				</h2>
		  	</div>
		  	<div class="col-xs-12 lm ct mt-10" style="padding: 10px 5px">
		  		<div class="col-xs-4 pl-5 pr-5">
					<a href="" class="btn btn-contest wd100" data-toggle="modal" data-target="#HowToPlay">
						How to Play
					</a>
				</div>
				<div class="col-xs-4 pl-5 pr-5">
					<a href="" class="btn btn-contest wd100" data-toggle="modal" data-target="#HowToPlay">
						Prize List
					</a>
				</div>
				<div class="col-xs-4 pl-5 pr-5">
					<a href="" class="btn btn-contest wd100" data-toggle="modal" data-target="#HowToPlay">
						Tips Prediction
					</a>
				</div>
		  	</div>
		  	<div class="col-xs-12 mt-10">
				<div class="title5">
					Current Prediction
				</div>
		  	</div>
		  	<div class="col-xs-12 lm ct mt-10 pd-0">
		  		<div class="ct-page">
					<a href="contest-detail.php">
					<span style="position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%); background: rgba(0, 0, 0, 0.5); color: rgb(255, 255, 255); padding: 10px 20px; font-size: 20px; letter-spacing: 1px; border-radius: 5px;">Let's Play</span>
					</a>
					<div class="head">
						<div class="col-xs-7 pl-10 pr-5">
							<div class="left">
								<img src="img/league/uefa-champions-league.png" height="34" alt=""/> 
								&nbsp; Champions League
							</div>
						</div>
						<div class="col-xs-5 pr-10 pl-10 text-right">
							<div class="right">
								<div class="matchdate">Wednesday, 08/05/2019</div>
								<div class="stadium">
									Anfield Stadium &nbsp;
									<img src="img/thumb/ico-stadium.png" alt=""/> 
								</div>
						  </div>
						</div>
					</div>
					
					<div class="mid">
						<div class="col-xs-3 pd-0">
							<a href="team-detail.php">
								<div class="square">
									<img src="img/club-liverpool.png" height="60" alt=""/> 
								</div>
							</a>
						</div>
						<div class="col-xs-6 pd-0">
							<div class="line">
								<div class="left">
									<h3>Liverpool</h3>
								</div>
								<div class="right">
									<h3>Barcelona</h3>
								</div>
							</div>
						</div>
						<div class="col-xs-3 pd-0">
							<a href="team-detail.php">
								<div class="square2">
									<img src="img/barcelona.png" height="60" alt=""/> 
								</div>
							</a>
						</div>
					</div>
					
				</div>
				<div class="bt-page">
					<ul>
						<li>
							<strong>Prediction:</strong>  
							<span class="pre-date"><strong>Start:</strong> 02/05/2019 &nbsp;&nbsp;|&nbsp;&nbsp; <strong>End:</strong> 07/05/2019 </span>
						</li>
						<li>
							<strong>User who play:</strong>  
							<span class="pre-date">
								1. Mourinho  (4-2) &nbsp;
								2. Guardiola (3-1) &nbsp;
								3. Klop  (4-0) &nbsp;
							</span>
						</li>
						<li class="text-center">
							<a href="" class="btn btn-who" data-toggle="modal" data-target="#UserPlay">
								Show Who Play
							</a>
						</li>
					</ul>
				</div>
		  	</div>
		  	<div class="col-xs-12 mt-10">
				<div class="title5">
					Previous Prediction
				</div>
		  	</div>
		  	<div class="col-xs-12 lm ct mt-10 pd-0">
		  		<div class="ct-page">
					<div class="head finished">
						<div class="col-xs-7 pl-10 pr-5">
							<div class="left">
						    	<img src="img/league/serie-a.png" class="" height="34" alt=""/> 
								&nbsp; Serie A
							</div>
						</div>
						<div class="col-xs-5 pr-10 pl-10 text-right">
							<div class="right">
								<div class="matchdate">Friday, 12/05/2019</div>
								<div class="stadium">
									Alianz Stadium &nbsp;
									<img src="img/thumb/ico-stadium.png" alt=""/> 
								</div>
						  </div>
						</div>
					</div>
					<div class="mid">
						<div class="col-xs-3 pd-0">
							<a href="team-detail.php">
								<div class="square">
							    	<img src="img/juventus_black.png" height="60" alt=""/> 
								</div>
							</a>
						</div>
						<div class="col-xs-6 pd-0">
							<div class="line">
								<div class="left">
									<h3>Juventus</h3>
								</div>
								<div class="right">
									<h3>Ac Milan</h3>
								</div>
							</div>
						</div>
						<div class="col-xs-3 pd-0">
							<a href="team-detail.php">
								<div class="square2">
							    	<img src="img/milan.png" height="60" alt=""/> 
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="bt-page finished">
					<ul>
						<li>
							<strong>Prediction:</strong>  
							<span class="pre-date clr-yellow"><strong>Finished</strong></span>
						</li>
						<li>
							<strong>User who play:</strong>  
							<span class="pre-date">
								1. Buffon  (10 pts) &nbsp;
								2. C.Ronaldo (40 pts) &nbsp;
								3. Rajesh  (30 pts) &nbsp;
							</span>
						</li>
						<li class="text-center">
							<a href="" class="btn btn-who" data-toggle="modal" data-target="#UserPlay">
								Show Who Play
							</a>
						</li>
					</ul>
				</div>
		  	</div>
		  	<div class="clearfix"></div>
		  	
		    <!--<div class="col-xs-12 lm ct">
		  		<h2 class="title2">Today's Tips</h2>
				<div class="hr"></div>
				<div class="mb-10 part">
		   			<h5>
						Check out our free football predictions for today. 
					</h5>
					<h5>
						Choose Predictions:
					</h5>
					<div class="pt-input">
						<select id="predict-day" name="predict-day" class="pt-select">
							<option value="">Prediction Day</option>
							<option value="">Today (Mar 25th)</option>
							<option value="">Tomorrow (Mar 26th)</option>
							<option value="">Wednesday (Mar 27th)</option>
							<option value="">Thursday (Mar 28th)</option>
							<option value="">Friday (Mar 29th)</option>
						</select>
					</div>
					<h5>
						Select A League:
					</h5>
					<div class="pt-input">
						<select id="predict-league" name="predict-league" class="pt-select">
							<option value="">Premier League</option>
							<option value="">Serie A</option>
							<option value="">La Liga</option>
							<option value="">Ligue 1</option>
							<option value="">Bundesliga</option>
							<option value="">UEFA Champions League</option>
							<option value="">UEFA Europa League</option>
							<option value="">EUFA European Championship 2020</option>
							<option value="">FIFA World Cup 2022</option>
						</select>
					</div>
					<div class="widget-content">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Event</th>
									<th>Score</th>
									<th class="td-actions"></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Turkey Vs Moldova</td>
									<td class="text-center">3-0</td>
									<td class="text-center"> <span class="stat-h">H</span></td>
									<td class="text-center"> <a href="contest-viewtip.php" class="view-tip"> View Tip </a></td>
								</tr>
								<tr>
									<td>Portugal Vs Serbia</td>
									<td class="text-center">2-1</td>
									<td class="text-center"> <span class="stat-h">H</span></td>
									<td class="text-center"> <a href="contest-viewtip.php" class="view-tip"> View Tip </a></td>
								</tr>
								<tr>
									<td>Island Vs France</td>
									<td class="text-center">1-3</td>
									<td class="text-center"> <span class="stat-a">A</span></td>
									<td class="text-center"> <a href="contest-viewtip.php" class="view-tip"> View Tip </a></td>
								</tr>
								<tr>
									<td>Montenegro Vs England</td>
									<td class="text-center">1-3</td>
									<td class="text-center"> <span class="stat-a">A</span></td>
									<td class="text-center"> <a href="contest-viewtip.php" class="view-tip"> View Tip </a></td>
								</tr>
								<tr>
									<td>Kosovo Vs Bulgaria</td>
									<td class="text-center">1-1</td>
									<td class="text-center"> <span class="stat-d">D</span></td>
									<td class="text-center"> <a href="contest-viewtip.php" class="view-tip"> View Tip </a></td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
				<div class="hr"></div>
		  	</div>-->
	  		
	  </div>
	</div>
	<?php include('inc_footer.php'); ?>

	<!-- Modal in Contest -->
	<div id="HowToPlay" class="modal fade" role="dialog" style="display: none;">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h4 class="modal-title text-center">
				<img src="img/logo-goaly.png" height="60" alt=""> 
			  </h4>
		  </div>
		  <div class="modal-body">
				<h3 class="mt-0">To enjoy play the game, click yes</h3>
				<p>
					This is subcription service for Goaly users who would like to enjoy our interactive prediction games where you can join and collect points to win our exclusive rewards of football merchendise and a chance to Win grand prize to watch Big match overseas.
				</p>
		  </div>
		  <div class="modal-footer">
			  <div class="col-xs-12 plfix">
				<a href="" class="text-center">
					<button type="button" class="btn-reg" data-dismiss="modal" >
						<strong>Close</strong>
					</button>
				</a>
			  </div>
		  </div>
		</div>

	  </div>
	</div>
	<div id="UserPlay" class="modal fade" role="dialog" style="display: none;">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h4 class="modal-title text-center">
				<img src="img/logo-goaly.png" height="60" alt=""> 
			  </h4>
		  </div>
		  <div class="modal-body pt-0">
				<div class="standing">
				  <h2>User Play This Contest</h2>
					<table class="table table-striped table-responsive">
						<tbody><tr class="clr-aqua">
							<th>No</th>
							<th>Player</th>
							<th>Pts</th>
						</tr>
						<tr class="wpos">
							<td>1</td>
							<td>Mourinho</td>
							<td><strong>30</strong></td>
						</tr>
						<tr class="wpos">
							<td>2</td>
							<td>Guardiola</td>
							<td><strong>20</strong></td>
						</tr>
						<tr class="wpos">
							<td>3</td>
							<td>Klopp</td>
							<td><strong>40</strong></td>
						</tr>
						<tr class="wpos">
							<td>4</td>
							<td>Jorginho</td>
							<td><strong>60</strong></td>
						</tr>

					</tbody></table>
				</div>
		  </div>
		  <div class="modal-footer">
			  <div class="col-xs-12 plfix">
				<a href="" class="text-center">
					<button type="button" class="btn-reg" data-dismiss="modal" >
						<strong>Close</strong>
					</button>
				</a>
			  </div>
		  </div>
		</div>

	  </div>
	</div>
</body>
</html>
