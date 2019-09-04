<?php include('inc_head.php'); ?>

  </head>

<body>
	<!--<div id="loader"><div id="spin"></div></div>-->
	
	<div class="">
		<?php include('inc_topmenu.php'); ?>
		
		<div class="clearfix"></div>
		<?php include('inc_leftmenu.php'); ?>
		
	  <div class="page-content mt-10">
			<!-- Menu Cat -->
			<div class="col-xs-12 main-cat">
				<ul class="nav nav-tabs">
					<li><a href="index.php">Home</a></li>
					<li><a href="contest.php">Contest</a></li>
					<li class="active"><a href="matches.php">Live</a></li>
					<li><a href="news.php">News</a></li>
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
							<!--<div class="text-l">Serie A</div>-->
							<div class="logo-l"><img src="img/league/serie-a.png" alt=""/> </div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">
							<!--<div class="text-l">Premier</div>-->
							<div class="logo-l"><img src="img/league/premier.png" alt=""/> </div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">
							<!--<div class="text-l">Ligue 1</div>-->
							<div class="logo-l"><img src="img/league/ligue1.png" alt=""/> </div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="false">
							<!--<div class="text-l">Bundesliga</div>-->
							<div class="logo-l"><img src="img/league/bundesliga.png" alt=""/> </div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="five-tab" data-toggle="tab" href="#five" role="tab" aria-controls="five" aria-selected="false">
							<!--<div class="text-l">La liga</div>-->
							<div class="logo-l"><img src="img/league/laliga.png" alt=""/> </div>
						</a>
					</li>
				  </ul>
				</div>

				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade active p-3 in" id="one" aria-labelledby="one-tab">
						<div class="part">
						<div class="pt-title">Serie A</div>
						<img class="unite" src="img/slash.png" alt=""> 
						<a href="matches.php" class="stand btn btn-default chk2">
							<i class="fas fa-arrow-left"></i>&nbsp; Back
						</a>
						<div class="col-xs-12 mt-10">
							<div class="standing">
							  <h2>Serie A Standing</h2>
								<table class="table table-striped table-responsive">
									<tr class="clr-aqua">
										<th>Pos</th>
										<th>Teams</th>
										<th>Pl</th>
										<th>W</th>
										<th>D</th>
										<th>L</th>
										<th>GD</th>
										<th>Pts</th>
									</tr>
									<tr class="wpos">
										<td>1</td>
										<td>
											<img src="img/juventus_black.png" height="22" alt="">
											&nbsp; JUV
										</td>
										<td>31</td>
										<td>27</td>
										<td>3</td>
										<td>1</td>
										<td>+44</td>
										<td><strong>84</strong></td>
									</tr>
									<tr class="wpos">
										<td>2</td>
										<td>
											<img src="img/S.S.C._Napoli_logo.png" height="22" alt="">
											&nbsp; NAP
										</td>
										<td>31</td>
										<td>19</td>
										<td>7</td>
										<td>5</td>
										<td>+31</td>
										<td><strong>64</strong></td>
									</tr>
									<tr class="wpos">
										<td>3</td>
										<td>
											<img src="img/Inter_Milan.png" height="22" alt="">
											&nbsp; INT
										</td>
										<td>31</td>
										<td>17</td>
										<td>6</td>
										<td>8</td>
										<td>+22</td>
										<td><strong>57</strong></td>
									</tr>
									<tr class="wpos">
										<td>4</td>
										<td>
											<img src="img/milan.png" height="22" alt="">
											&nbsp; MLN
										</td>
										<td>31</td>
										<td>14</td>
										<td>10</td>
										<td>7</td>
										<td>+15</td>
										<td><strong>52</strong></td>
									</tr>
									<tr class="pos">
										<td>5</td>
										<td>ATL</td>
										<td>31</td>
										<td>15</td>
										<td>7</td>
										<td>9</td>
										<td>+23</td>
										<td><strong>52</strong></td>
									</tr>
									<tr class="pos">
										<td>6</td>
										<td>ROM</td>
										<td>31</td>
										<td>14</td>
										<td>9</td>
										<td>8</td>
										<td>+11</td>
										<td><strong>51</strong></td>
									</tr>
									<tr class="pos">
										<td>7</td>
										<td>LAZ</td>
										<td>31</td>
										<td>14</td>
										<td>7</td>
										<td>9</td>
										<td>+12</td>
										<td><strong>49</strong></td>
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
						<a href="matches.php" class="stand btn btn-default chk2">
							<i class="fas fa-arrow-left"></i>&nbsp; Back
						</a>
						<div class="col-xs-12 mt-10">
							<div class="standing">
							  <h2>Premier League Standing</h2>
								<table class="table table-striped">
									<tr class="clr-aqua">
										<th>Pos</th>
										<th>Teams</th>
										<th>Pl</th>
										<th>W</th>
										<th>D</th>
										<th>L</th>
										<th>GD</th>
										<th>Pts</th>
									</tr>
									<tr class="wpos">
										<td>1</td>
										<td>
											<img src="img/club-liverpool.png" height="22" alt="">
											&nbsp; Liverpool
										</td>
										<td>33</td>
										<td>25</td>
										<td>7</td>
										<td>1</td>
										<td>+55</td>
										<td><strong>82</strong></td>
									</tr>
									<tr class="wpos">
										<td>2</td>
										<td>
											<img src="img/logo-Manchester_City_FC.png" height="22" alt="">
											&nbsp; M. City
										</td>
										<td>32</td>
										<td>26</td>
										<td>2</td>
										<td>4</td>
										<td>+62</td>
										<td><strong>80</strong></td>
									</tr>
									<tr class="wpos">
										<td>3</td>
										<td>
											<img src="img/Inter_Milan.png" height="22" alt="">
											&nbsp; T. Hotspur
										</td>
										<td>32</td>
										<td>21</td>
										<td>1</td>
										<td>10</td>
										<td>+26</td>
										<td><strong>64</strong></td>
									</tr>
									<tr class="wpos">
										<td>4</td>
										<td>
											<img src="img/logo-arsenal.png" height="22" alt="">
											&nbsp; Arsenal
										</td>
										<td>32</td>
										<td>19</td>
										<td>6</td>
										<td>7</td>
										<td>+25</td>
										<td><strong>63</strong></td>
									</tr>
									<tr class="pos">
										<td>5</td>
										<td>Chelsea</td>
										<td>32</td>
										<td>19</td>
										<td>6</td>
										<td>7</td>
										<td>+21</td>
										<td><strong>63</strong></td>
									</tr>
									<tr class="pos">
										<td>6</td>
										<td>M. United</td>
										<td>32</td>
										<td>18</td>
										<td>7</td>
										<td>7</td>
										<td>+18</td>
										<td><strong>61</strong></td>
									</tr>
									<tr class="pos">
										<td>7</td>
										<td>Leicester City</td>
										<td>33</td>
										<td>14</td>
										<td>5</td>
										<td>14</td>
										<td>+2</td>
										<td><strong>47</strong></td>
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
