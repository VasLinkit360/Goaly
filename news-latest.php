<?php include('inc_head.php'); ?>
<style>
	.swiper-pagination-bullet {
      width: 20px;
      height: 20px;
      text-align: center;
      line-height: 20px;
      font-size: 12px;
      color:#000;
      opacity: 1;
      background: rgba(0,0,0,0.2);
    }
    .swiper-pagination-bullet-active {
      color:#fff;
      background: #4D0053;
    }
	 
</style>
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
					<li>
						<a href="matches.php" class="ingrid">
							<i class="far fa-clock text-center"></i>
							<span class="text-small">Live</span>
						</a>
					</li>
					<li class="active">
						<a href="news.php" class="ingrid">
							<i class="far fa-newspaper text-center"></i>
							<span class="text-small">News</span>
						</a>
					</li>
				</ul>
			</div>
		  	<div class="clearfix"></div>
		  	<div class="col-xs-12 mb-10 mt-5">
				<div class="col-xs-4 pd-0">
					<a href="news.php">
						<div class="sub-news">
							Hottest
						</div>
					</a>
				</div>
				<div class="col-xs-4 pd-0">
					<a href="news-latest.php">
						<div class="sub-news active">
							Latest
						</div>
					</a>
				</div>
				<div class="col-xs-4 pd-0">
					<a href="news-transfer.php">
						<div class="sub-news">
							Transfer
						</div>
					</a>
				</div>
		  	</div>
			<!-- News -->
			<div class="col-xs-12 ct">
				<div class="mb-10 mt-12">
		   			<div class="swiper-container">
						<div class="swiper-wrapper">
						  <div class="swiper-slide">
							  <a href="news-detail.php">
								<div class="title-img">
									<img src="img/ltn2.jpg" alt=""/>
								</div>
								<p class="title-cat">Bundesliga</p>
								<h2 class="title-main">
									The Warm-Up: Bayern Who-nich? Check Out
								</h2>
								<div class="hr"></div>
								<p class="title-desc">
									Jack Lang digs through the wreckage of another Champions League car crash...
								</p>
							  </a>
						  </div>
						  <div class="swiper-slide">
							  <a href="news-detail.php">
								<div class="title-img">
									<img src="img/ltn3.jpg" alt=""/>
								</div>
								<p class="title-cat">Serie A</p>
								<h2 class="title-main">
									Cristiano Ronaldo's miraculous show more dramatic
								</h2>
								<div class="hr"></div>
								<p class="title-desc">
									Cristiano Ronaldo's latest Champions League cabaret show was a heavenly...
								</p>
							  </a>
						  </div>
						  <div class="swiper-slide">
							<a href="news-detail.php">
								<div class="title-img">
									<img src="img/ltn1.jpg" alt=""/>
								</div>
								<p class="title-cat">UEFA Champions League</p>
								<h2 class="title-main">
									Reds complete English quartet in last eight
								</h2>
								<div class="hr"></div>
								<p class="title-desc">
									Liverpool claim famous 3-1 win at Bayern Munich to join Man City...
								</p>
							</a>
						  </div>
						</div>
						<!-- Add Pagination -->
   				 		<div class="swiper-pagination pos-inherit mt-20"></div>
					</div>
					
				</div>
				
		  	</div>
		  
		    <div class="team col-xs-12 ct">
				<div class="mt-15">
					<div class="post post-widget">
						<a class="post-img" href=""><img src="img/lt2.jpg" alt=""></a>
						<div class="post-body">
							<p class="title-cat">Serie A</p>
							<h3 class="post-title">
								<a href="">
									Tell-A-Tool: Guide To Web Design And Development Tools
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
									Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically
								</a>
							</h3>
						</div>
					</div>
					<div class="post post-widget">
						<a class="post-img" href=""><img src="img/lt4.jpg" alt=""></a>
						<div class="post-body">
							<p class="title-cat">Premier League</p>
							<h3 class="post-title">
								<a href="">
									Why Node.js Is The Coolest Kid On The Backend Development Block!
								</a>
							</h3>
						</div>
					</div>
					<div class="post post-widget">
						<a class="post-img" href=""><img src="img/lt1.jpg" alt=""></a>
						<div class="post-body">
							<p class="title-cat">Ligue 1</p>
							<h3 class="post-title">
								<a href="">
									Tell-A-Tool: Guide To Web Design And Development Tools
								</a>
							</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="text-center"> <p> --- loading more contents --- </p></div>
				</div>
				
			</div>
		    <div class="clearfix"></div>
	  		
		  	
	  </div>
	</div>
	<?php include('inc_footer.php'); ?>
	
	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + '</span>';
        },
      },
    });
	</script>
</body>
</html>
