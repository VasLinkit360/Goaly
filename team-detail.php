<?php include('inc_head.php'); ?>

  </head>

<body>
	<!--<div id="loader"><div id="spin"></div></div>-->
	
	<div class="">
		<?php include('inc_topmenu.php'); ?>
		
		<div class="clearfix"></div>
		<?php include('inc_leftmenu.php'); ?>
		
	  <div class="page-content mt-10">
			
			<!-- Contest Detail -->
			<div class="col-xs-12">
		  		<div class="row">
			<div class="col-6">
			  <div class="mt-10 plr15">
				<div class="card-header tab-card-header newtab-header">
				  
					<ul class="nav nav-tabs card-header-tabs" id="team_details" role="tablist">
						<li class="nav-item active">
							<a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true" aria-expanded="true">Macthes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false" aria-expanded="false">News</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Standings</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="false" aria-expanded="false">Players</a>
						</li>
					  </ul>
					
				</div>

				  <div class="tab-pane fade active p-3 in">
						<div class="part">
						<div class="col-xs-9">
							<div class="pt-team">
								<img src="img/muntd.png" height="24px" alt=""/> Manchester United 
							</div>
						</div>
						<div class="col-xs-3">
							<a href="matches-timeline.php" class="stand btn btn-default chk2">
								<i class="fas fa-arrow-left"></i>&nbsp; Back
							</a>
						</div>
						
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade active p-3 in" id="one" aria-labelledby="one-tab">
								<div class="col-xs-12 mt-10">
									<div class="lm">
										<h4>Matches</h4>
										<div class="liner"></div>
										<table class="table table-striped custab mb-10">
											<tbody>
												<h5>Premier League</h5>
												<tr>
													<td width="45" class="text-date">
														11/05
													</td>
													<td>
														<div class="col-xs-4 pd-0">
															<p class="text-right">
																 West Ham
															</p>
														</div>
														<div class="col-xs-4 plr5 text-center">
															<strong>0 - 0</strong>
														</div>
														<div class="col-xs-4 pd-0">
															<p class="text-left">
																 Man Utd
															</p>
														</div>
													</td>
													<td width="45" class="text-center">
														<div class="bdstat draw">D</div>	
													</td>
												</tr>
												<tr>
													<td width="45" class="text-date">
														13/05
													</td>
													<td>
														<div class="col-xs-4 pd-0">
															<p class="text-right">
																 <strong>Man Utd</strong>
															</p>
														</div>
														<div class="col-xs-4 plr5 text-center">
															<strong>1 - 0</strong>
														</div>
														<div class="col-xs-4 pd-0">
															<p class="text-left">
																 Watford
															</p>
														</div>
													</td>
													<td width="45" class="text-center">
														<div class="bdstat win">W</div>	
													</td>
												</tr>
											</tbody>
										</table>
										<table class="table table-striped custab mb-10">
											<tbody>
												<h5>Fa Cup</h5>
												<tr>
													<td width="45" class="text-date">
														19/05
													</td>
													<td>
														<div class="col-xs-4 pd-0">
															<p class="text-right">
																 <strong>Chelsea</strong>
															</p>
														</div>
														<div class="col-xs-4 plr5 text-center">
															<strong>1 - 0</strong>
														</div>
														<div class="col-xs-4 pd-0">
															<p class="text-left">
																 Man Utd
															</p>
														</div>
													</td>
													<td width="45" class="text-center">
														<div class="bdstat lose">L</div>	
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="lm">
										<h4>Fixtures</h4>
										<div class="liner"></div>
										<table class="table table-striped custab mb-10">
											<tbody>
												<h5>Premier League</h5>
												<tr>
													<td width="45" class="text-date">
														12/05
													</td>
													<td>
														<div class="col-xs-4 pd-0">
															<p class="text-right">
																 Man Utd
															</p>
														</div>
														<div class="col-xs-4 plr5 text-center">
															<p class="text-teal">21:00</p>
														</div>
														<div class="col-xs-4 pd-0">
															<p class="text-left">
																 Cardiff
															</p>
														</div>
													</td>
													<td width="45" class="text-center">
														&nbsp;	
													</td>
												</tr>
											</tbody>
										</table>
										<table class="table table-striped custab mb-10">
											<tbody>
												<h5>Club Friendlies</h5>
												<tr>
													<td width="45" class="text-date">
														11/05
													</td>
													<td>
														<div class="col-xs-4 pd-0">
															<p class="text-right">
																 Man Utd
															</p>
														</div>
														<div class="col-xs-4 plr5 text-center">
															<p class="text-teal">~ - ~</p>
														</div>
														<div class="col-xs-4 pd-0">
															<p class="text-left">
																 Leeds Utd
															</p>
														</div>
													</td>
													<td width="45" class="text-center">
														&nbsp;
													</td>
												</tr>
												<tr>
													<td width="45" class="text-date">
														11/05
													</td>
													<td>
														<div class="col-xs-4 pd-0">
															<p class="text-right">
																 Tottenham
															</p>
														</div>
														<div class="col-xs-4 plr5 text-center">
															<p class="text-teal">06:30</p>
														</div>
														<div class="col-xs-4 pd-0">
															<p class="text-left">
																 Man Utd
															</p>
														</div>
													</td>
													<td width="45" class="text-center">
														&nbsp;
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
						  	</div>
							<div class="tab-pane fade p-3" id="two" aria-labelledby="two-tab">
								<div class="col-xs-12 mt-10">
									<div class="team">
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
										
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="tab-pane fade p-3" id="three" aria-labelledby="three-tab">
								<div class="col-xs-12">
									<div class="standing">
									  <h2>Ligue 1 Standing</h2>
										<table class="table table-striped table-responsive">
											<tbody><tr class="clr-aqua">
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

										</tbody></table>
									</div>
								</div>
							</div>
							<div class="tab-pane fade p-3" id="four" aria-labelledby="four-tab">
								<div class="col-xs-12 pdfix">
									<div class="col-xs-4">
								    	<img src="img/players/neymar.jpg" alt="" class="rounded img-responsive"> 
										<h4>Neymar</h4>
										<h5>Forward</h5>
									</div>
									<div class="col-xs-4">
								    	<img src="img/players/mbappe.jpg" alt="" class="rounded img-responsive"> 
										<h4>Mbappe</h4>
										<h5>Forward</h5>
									</div>
									<div class="col-xs-4">
								    	<img src="img/players/cavani.jpg" alt="" class="rounded img-responsive"> 
										<h4>Edison Cavani</h4>
										<h5>Forward</h5>
									</div>
									<div class="col-xs-4">
								    	<img src="img/players/buffon.jpg" alt="" class="rounded img-responsive"> 
										<h4>Gianluigi Buffon</h4>
										<h5>Goalkeeper</h5>
									</div>
									<div class="col-xs-4">
								    	<img src="img/players/rabiot.jpg" alt="" class="rounded img-responsive"> 
										<h4>Adrien Rabiot</h4>
										<h5>Midfielder</h5>
									</div>
									<div class="col-xs-4">
								    	<img src="img/players/dimaria.jpg" alt="" class="rounded img-responsive"> 
										<h4>Angel Di Maria</h4>
										<h5>Midfielder</h5>
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
