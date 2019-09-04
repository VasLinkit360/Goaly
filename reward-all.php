<?php include('inc_head.php'); ?>

  </head>

<body>
	<!--<div id="loader"><div id="spin"></div></div>-->
	
	<div class="">
		<?php include('inc_topmenu2.php'); ?>
		
		<div class="clearfix"></div>
		<?php include('inc_leftmenu.php'); ?>
		
	  <div class="page-content mt-10">
			<!-- News -->
			<div class="col-xs-12 ct">
				<div class="mb-10">
					<div class="part ml15">
						<div class="pt-title">
							<a href="reward.php" class="text-white">back</a>
						</div>
						<img class="unite" src="img/slash.png" alt="">
					</div>
					
					
					<div class="">
						<div class="pd-5">
							  <div class="tab-content">
								<div class="tab-pane fade in active" id="tab1">
									<div class="columns">
										<div class="column col-12 col-xs-12 pd-0">
											<div class="columns">
												<div class="col-xs-7 pd-0">
													<p><strong>Redeem your reward</strong></p>
												</div>
												<div class="col-xs-5 pd-0">
													<a href="reward-all.php" class="pull-right text-small">Lebih Lengkap</a>
												</div>
											</div>
											<div class="owl-carousel2 owl-theme slider-popular">
												<div class="item">
													<a href="reward-detail.php">
														<img src="img/game-reward/1.jpg">
													</a>
													<p class="title">Cashback Toped... </p>
													<p class="price">30 coin</p>
												</div>
												<div class="item">
													<a href="reward-detail.php">
														<img src="img/game-reward/2.jpg">
													</a>
													<p class="title">Klikfilm (1 hari... </p>
													<p class="price">750 coin</p>
												</div>
												<div class="item">
													<a href="reward-detail.php">
														<img src="img/game-reward/3.jpg">
													</a>
													<p class="title">TriXogo Games... </p>
													<p class="price">1200 coin</p>
												</div>								    
											</div>
										</div>
									</div>
								</div>
								
							  </div>
						</div>
						<div class="pd-5">
							  <div class="tab-content">
								<div class="tab-pane fade in active" id="tab1">
									<div class="columns">
										<div class="column col-12 col-xs-12 pd-0">
											<div class="columns">
												<div class="col-xs-7 pd-0">
													<p><strong>Top Reward</strong></p>
												</div>
												<div class="col-xs-5 pd-0">
													<a href="reward-all.php" class="pull-right text-small">Lebih Lengkap</a>
												</div>
											</div>
											<div class="owl-carousel2 owl-theme slider-popular">
												<div class="item">
													<a href="reward-detail.php">
														<img src="img/game-reward/1.jpg">
													</a>
													<p class="title">Cashback Toped... </p>
													<p class="price">30 coin</p>
												</div>
												<div class="item">
													<a href="reward-detail.php">
														<img src="img/game-reward/2.jpg">
													</a>
													<p class="title">Klikfilm (1 hari... </p>
													<p class="price">750 coin</p>
												</div>
												<div class="item">
													<a href="reward-detail.php">
														<img src="img/game-reward/3.jpg">
													</a>
													<p class="title">TriXogo Games... </p>
													<p class="price">1200 coin</p>
												</div>								    
											</div>
										</div>
									</div>
								</div>
								
							  </div>
						</div>
					</div>
				</div>
				
		  	</div>
	  </div>
	</div>
	<?php include('inc_footer.php'); ?>
	<script src="js/owl.carousel.min.js"></script>
	<script>
		$('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				nav:false,
				items:1
			});

		$('.owl-carousel2').owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			dots:false,
			items:3
		});
	</script>
	<script>
		$(document).ready(function() {
			$(".btn-pref .btn").click(function () {
				$(".btn-pref .btn").removeClass("bg-3").addClass("btn-default");
				// $(".tab").addClass("active"); // instead of this do the below 
				$(this).removeClass("btn-default").addClass("bg-3");   
			});
		});
	</script>
</body>
</html>
