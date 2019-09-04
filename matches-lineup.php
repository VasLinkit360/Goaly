<?php include('inc_head.php'); ?>
<link href="css/lineup.css" rel="stylesheet" />
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
										<strong>Line-ups</strong>
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
								<div class="field" data-type="lineup-field">
									<div class="home-info" data-type="home-info">
										<div class="name" data-type="team">
											<img src="img/club-liverpool.png" height="24" alt=""/> &nbsp;Liverpool 
										</div>
										<div class="formation" data-type="formation">4-3-3</div>
									</div>
									<div class="field-wrap">
										<div class="corners">
											<div></div>
											<div></div>
											<div></div>
											<div></div>
										</div>
										<div class="middle"></div>
										<div class="circle"></div>
										<div class="center"></div>
										<div class="goal-box">
											<div></div>
											<div></div>
											<div></div>
										</div>
										<div class="goal-box goal-box-right">
											<div></div>
											<div></div>
											<div></div>
										</div>
										<div class="home" data-type="home-players">
											<div class="players-row" data-type="player-row" style="height: 88px;">
												<ul class="item" data-type="player-row-content">
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">13</span>
															<span class="evt evt2" data-type="player-bubble">
																<!--<span data-type="player-bubble-icon">
																	<svg class="inc yellowcard">
																		<use xlink:href="#icon-yellowcard"></use>
																	</svg>
																</span>-->
																<div class="yellow-card"></div>
															</span>
														</div>
														<div class="name" data-type="player-name">Alisson</div>
													</li>
												</ul>
											</div>
											<div class="players-row" data-type="player-row" style="height: 88px;">
												<ul class="item" data-type="player-row-content">
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">66</span>
															<span class="evt evt4" data-type="player-bubble">
																<i class='fas fa-arrow-down text-red'></i>
															</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Trent</span>
															<span class="visible-inline-xxs">T. </span> Alexander-Arnold
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">32</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Joel</span>
															<span class="visible-inline-xxs">J. </span> Matip
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">4</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Virgil</span>
															<span class="visible-inline-xxs">V. </span> Van Dijk
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">26</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Andy</span>
															<span class="visible-inline-xxs">A. </span> Robertson
														</div>
													</li>
												</ul>
											</div>
											<div class="players-row" data-type="player-row" style="height: 88px;">
												<ul class="item" data-type="player-row-content">
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">20</span>
															<span class="evt evt4" data-type="player-bubble">
																<i class='fas fa-arrow-down text-red'></i>
															</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Adam</span>
															<span class="visible-inline-xxs">A. </span> Lallana
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">3</span>
															<span class="evt evt2" data-type="player-bubble">
																<div class="yellow-card"></div>
															</span>
														</div>
														<div class="name" data-type="player-name">Fabinho</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">5</span>
															<span class="evt evt4" data-type="player-bubble">
																<i class='fas fa-arrow-down text-red'></i>
															</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Georginio</span>
															<span class="visible-inline-xxs">G. </span> Wijnaldum
														</div>
													</li>
												</ul>
											</div>
											<div class="players-row" data-type="player-row" style="height: 88px;">
												<ul class="item" data-type="player-row-content">
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">11</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Mohamed</span>
															<span class="visible-inline-xxs">M. </span> Salah
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">9</span>
															<span class="evt evt1" data-type="player-bubble">
																<i class="far fa-futbol goal"></i>
																<span class="qtd" data-type="player-bubble-badge">2</span>
															</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Roberto</span>
															<span class="visible-inline-xxs">R. </span> Firmino
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">10</span>
															<span class="evt evt1" data-type="player-bubble">
																<i class="far fa-futbol goal"></i>
																<span class="qtd" data-type="player-bubble-badge">2</span>
															</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Sadio</span>
															<span class="visible-inline-xxs">S. </span> Mane
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="away" data-type="away-players">
											<div class="players-row" data-type="player-row" style="height: 88px;">
												<ul class="item" data-type="player-row-content">
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">11</span>
															<span class="evt evt4" data-type="player-bubble">
																<i class='fas fa-arrow-down text-red'></i>
															</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Chris</span>
															<span class="visible-inline-xxs">C. </span> Wood
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">10</span>
															<span class="evt evt4" data-type="player-bubble">
																<i class='fas fa-arrow-down text-red'></i>
															</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Ashley</span>
															<span class="visible-inline-xxs">A. </span> Barnes
														</div>
													</li>
												</ul>
											</div>
											<div class="players-row" data-type="player-row" style="height: 88px;">
												<ul class="item" data-type="player-row-content">
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">31</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Dwight</span>
															<span class="visible-inline-xxs">D. </span> McNeil
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">4</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Jack</span>
															<span class="visible-inline-xxs">J. </span> Cork
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">18</span>
															<span class="evt evt1" data-type="player-bubble">
																<i class="far fa-futbol goal"></i>
															</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Ashley</span>
															<span class="visible-inline-xxs">A. </span> Westwood
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">13</span>
															<span class="evt evt4" data-type="player-bubble">
																<i class='fas fa-arrow-down text-red'></i>
															</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Jeff</span>
															<span class="visible-inline-xxs">J. </span> Hendrick
														</div>
													</li>
												</ul>
											</div>
											<div class="players-row" data-type="player-row" style="height: 88px;">
												<ul class="item" data-type="player-row-content">
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">3</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Charlie</span>
															<span class="visible-inline-xxs">C. </span> Taylor
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">6</span>
															<span class="evt evt2" data-type="player-bubble">
																<div class="red-card"></div>
															</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Ben</span>
															<span class="visible-inline-xxs">B. </span> Mee
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">5</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">James</span>
															<span class="visible-inline-xxs">J. </span> Tarkowski
														</div>
													</li>
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">26</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Phil</span>
															<span class="visible-inline-xxs">P. </span> Bardsley
														</div>
													</li>
												</ul>
											</div>
											<div class="players-row" data-type="player-row" style="height: 88px;">
												<ul class="item" data-type="player-row-content">
													<li data-type="player-item">
														<div class="player" data-type="player-data">
															<span class="number" data-type="player-number">1</span>
														</div>
														<div class="name" data-type="player-name">
															<span class="hidden-xxs">Tom</span>
															<span class="visible-inline-xxs">T. </span> Heaton
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="away-info" data-type="away-info">
										<div class="name" data-type="team">
											<img src="img/club-burnley.png" height="24" alt=""/>
											&nbsp;Burnley 
										</div>
										<div class="formation" data-type="formation">4-4-2</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-xs-12 lm mt-10 timeline">
							<h4>Subtitutions</h4>
							<div class="mb-10">
								<img src="img/club-liverpool.png" height="34" alt=""/>
								&nbsp; Liverpool 
							</div>
							<div class="match-row">
								<div class="tm">6'</div>
								<div class="pn">Dejan Lovren</div>
							</div>
							<div class="match-row">
								<div class="tm">8'</div>
								<div class="pn">Naby Keita</div>
								<div class="sc">
									<i class='fas fa-arrow-up text-green'></i>
								</div>
							</div>
							<div class="match-row">
								<div class="tm">14'</div>
								<div class="pn">Jordan Henderson</div>
								<div class="sc">
									<i class='fas fa-arrow-up text-green'></i>
								</div>
							</div>
							<div class="match-row">
								<div class="tm">15'</div>
								<div class="pn">Daniel Sturridge</div>
								<div class="sc">
									<i class='fas fa-arrow-up text-green'></i>
								</div>
							</div>
							<div class="match-row">
								<div class="tm">1'</div>
								<div class="pn">Simon Mignolet</div>
							</div>
							<div class="match-row">
								<div class="tm">23'</div>
								<div class="pn">Xherdan Shaqiri</div>
							</div>
							<div class="match-row">
								<div class="tm">27'</div>
								<div class="pn">Divock Origi</div>
							</div>
							
							<div class="mb-10 mt-15">
								<img src="img/club-burnley.png" height="34" alt=""/>
								&nbsp; Burley 
							</div>
							<div class="match-row">
								<div class="tm">2'</div>
								<div class="pn">Matthew Lowton</div>
							</div>
							<div class="match-row">
								<div class="tm">7'</div>
								<div class="pn">Johann Gudmundsson</div>
								<div class="sc">
									<i class='fas fa-arrow-up text-green'></i>
									<i class="far fa-futbol goal"></i>
								</div>
							</div>
							<div class="match-row">
								<div class="tm">14'</div>
								<div class="pn">Robbie Brady</div>
							</div>
							<br>
						</div>
						
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
