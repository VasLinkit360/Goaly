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
					<div class="pd-0">
						<div class="columns slide-show2 pt-15">	    		
							<div class="owl-carousel owl-theme">
								<div class="item">
									<a href="">
										<img src="img/game-reward/1b.jpg" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="columns">
							<div class="column col-xs-8">
							   <h5 class="mt-10">Cashback Toped Steam Wallet 15%</h5>
							   <div class="info-game-rating">
								  <span class="info-game-rating">
								  <i class="icon icon-star fill"></i>
								  <i class="icon icon-star fill"></i>
								  <i class="icon icon-star fill"></i>
								  <i class="icon icon-star fill"></i>
								  <i class="icon icon-star"></i>
								  </span>
							   </div>
							</div>
							<div class="column col-xs-4">
							   <p class="price">Tukarkan!</p>
								<p class="text-right" style="margin-right: 25px"><strong>30 Coin</strong></p>
							</div>
						 </div>
						<div class="liner"></div>
						<div class="columns m-5">
							   <p class="mt-0 new-title">Tentang</p>
							   <p>
								  Nikmati voucher cashback Steam Wallet 15% dengan maksimal cashback Rp 20.000 ke TokoCash. 
							   </p>
							   <p class="mt-0 new-title">Ikuti langkah ini untuk menikmati reward Anda:</p>
							   <p>
								   Akses button chat dikanan bawah, untuk menukarkan reward.
							   </p>
						 </div>
				  </div>
				</div>
		  	</div>
		  	<div class="ct">
		  		
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
