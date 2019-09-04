<?php include('inc_head.php'); ?>

  </head>

<body>
	<!--<div id="loader"><div id="spin"></div></div>-->
	
	<div class="">
		<?php include('inc_topmenu.php'); ?>
		
		<div class="clearfix"></div>
		<?php include('inc_leftmenu.php'); ?>
		
	  <div class="page-content">
			<!-- Menu Cat -->
			<div class="col-xs-12 nnav">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="index.php" class="ingrid">
							<i class="far fa-futbol text-center"></i> 
							Home
						</a>
					</li>
					<li>
						<a href="contest.php" class="ingrid">
							<i class="fas fa-history text-center"></i>
							Contest
						</a>
					</li>
					<li>
						<a href="matches.php" class="ingrid">
							<i class="far fa-clock text-center"></i>
							Live
						</a>
					</li>
					<li>
						<a href="news.php" class="ingrid">
							<i class="far fa-newspaper text-center"></i>
							News
						</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<!-- Contest -->
			<div class="swiper-container">
				<div class="swiper-wrapper">
				  <div class="swiper-slide">
					<a href="contest-detail.php"><img src="img/contest.jpg" alt=""/> </a>
				  </div>
				  <div class="swiper-slide" style="height: 315px">
					<img src="img/2.jpg" alt=""/> 
				  </div>
				  <div class="swiper-slide" style="height: 315px">
					<img src="img/3.jpg" alt=""/> 
				  </div>
				</div>
				<!-- Add Arrows -->
				<!--<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>-->
			</div>
			<div class="clearfix"></div>
			<!-- Live Matches -->
			<div class="lm mt-10">
				<a href="">
					<img src="img/live1.jpg" class="img-responsive" alt=""/> 
				</a>
				<div class="col-xs-12">
					<a href="">
						<h2>Juventus hosts Inter Milan in an Italy Serie A matchup on Allianz Stadium</h2>
					</a>
				</div>
			  <div class="row no-margin">
					<div class="hr"></div>
					<div class="col-xs-5">
						<p class="badge text-small">In Progress - 65:04</p>
					</div>
					<div class="col-xs-7">
						<p class="text-small mt-5">22/12/2018</p>
					</div>
			  </div>
			  <div class="col-xs-6 scrL">
					<img src="img/juventus_black.png" alt=""/>
					<span>-</span>
				  	<br>
				  	<h4 class="tl">Juventus</h4>
				  	<p class="marcatori-partita">&nbsp; </p>
			  </div>
			  <div class="col-xs-6 scrR">
					<span>-</span>
				  	<img src="img/chievo.png" alt=""/>
				  	<br>
				  	<h4 class="tl">Chievoverona</h4>
				  	<p class="marcatori-partita">&nbsp; </p>
			  </div>
			  <div class="hr"></div>
			  <div class="col-xs-12">
					<div class="title2">Other Matches</div>
					<div data-slides-offset-after="16" data-slides-offset-before="16" data-space-between="16" data-slides-per-view="3" class="swiper-container2 swiper-init mb-15">
					<div class="swiper-wrapper">

					  <div class="swiper-slide">
					   <a href="" class="link display-block">
						<div class="thumb">
						  <div class=" cover-bg" style="background-image: url('img/gl1.jpg')">
						  </div>
						  <div class="thumb-meta">
							<h4>Visit The Workd</h4>
							<p>12 Questions</p>
						  </div>

						</div>
						</a>
					  </div>
					  <div class="swiper-slide">
						<a href="detail.php" class="link display-block">
							<div class="thumb">
							  <div class=" cover-bg" style="background-image: url('img/gl2.jpg')">
							  </div>
							  <div class="thumb-meta">
								<h4>Social Media</h4>
								<p>12 Questions</p>
							  </div>
							</div>
						</a>
					  </div>
					  <div class="swiper-slide">
						  <a href="detail.php" class="link display-block">
							<div class="thumb">
							  <div class=" cover-bg" style="background-image: url('img/qz2.jpg')">
							  </div>
							  <div class="thumb-meta">
								<h4>Gaming World Quiz</h4>
								<p>12 Questions</p>
							  </div>
							</div>
						  </a>
					  </div>
					  <div class="swiper-slide">
						  <a href="detail.php" class="link display-block">
							<div class="thumb">
							  <div class="cover-bg " style="background-image: url('img/qz1.jpg')">
							  </div>
							  <div class="thumb-meta">
								<h4>Bitcoin Quiz</h4>
								<p>12 Questions</p>
							  </div>
							</div>
						  </a>
					  </div>
					  <div class="swiper-slide">
						  <a href="detail.php" class="link display-block">
							<div class="thumb">
							  <div class="cover-bg" style="background-image: url('img/qz4.jpg')">
							  </div>
							  <div class="thumb-meta">
								<h4>Visit The Workd</h4>
								<p>12 Questions</p>
							  </div>
							</div>
						  </a>
					  </div>

					</div>
				  </div>
					
			  </div>
			  <div class="col-xs-12">
					<div class="title2">
						Video Highlight
				  		<a href="video-more.php" class="pull-right text-small">More Videos</a>
				  	</div>
					<div class="row mb-15">
						<div class="col-sm-8 col-sm-offset-2">
						  <div id="random_number1" class="carousel slide youtube-carousel"  data-ride="carousel" data-interval="false">
							<div class="carousel-inner">
							  <div class="video-container item active">
								<div class="youtube-video" id='AO89eXKO0c4'></div>
								<div class="carousel-caption">Video 1</div>
							  </div>
							  <div class="video-container item">
								<div class="youtube-video" id='6MjRVkm9CF0'></div>
								<div class="carousel-caption">Video 2</div>
							  </div>
							  <div class="video-container item ">
								<div class="youtube-video" id='R8poo-zCK9g'></div>
								<div class="carousel-caption">Video 3</div>
							  </div>
							</div>
							<div class="controls">
							  <a class="left carousel-control" href="#random_number1" data-slide="prev">
								<div class="left-button">
								  <i class="fas fa-angle-left"></i>
								</div>
							  </a>
							  <a class="right carousel-control" href="#random_number1" data-slide="next">        
								<div class="right-button">
								  <i class="fas fa-angle-right"></i>
								</div>
							  </a>
							</div>
						  </div>
						</div>
					  </div>
			  </div>
			  <div class="clearfix"></div>
		  </div>
		    <div class="clearfix"></div>
		    <!-- Latest -->
		  	<div class="latest">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="post post-thumb">
								<a class="post-img" href=""><img src="img/lt1.jpg" class="img-responsive" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Latest</a>
									<span class="post-date">March 27, 2018</span>
									</div>
									<h3 class="post-title"><a href="">Hazard And Azpilicueta Prepare Next Match Vs Manchester City </a></h3>
								</div>
							</div>
						</div>
						<div class="swiper-slide" style="height: 315px">Slide 2</div>
						<div class="swiper-slide" style="height: 315px">Slide 3</div>
						<div class="swiper-slide" style="height: 315px">Slide 4</div>
						<div class="swiper-slide" style="height: 315px">Slide 5</div>
					</div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
		    </div>
		  	<div class="clearfix"></div>
		    <!-- Team -->
	  		<div class="team col-xs-12">
				<div class="title3">My Team</div>
				<div class="col-xs-4">
					<img src="img/tm-paris.png" alt=""/> 
				</div>
				<div class="col-xs-4">
					<img src="img/tm-liverpool.png" alt=""/> 
				</div>
				<div class="col-xs-4">
					<img src="img/tm-juventus.png" alt=""/> 
				</div>
				<div class="col-xs-4">
					<img src="img/tm-barcelona.png" alt=""/> 
				</div>
				<div class="col-xs-4">
					<img src="img/tm-add.png" alt=""/> 
				</div>
				
			</div>
		  	
		    <!-- Latest News -->
		  	<div class="team col-xs-12">
				<div class="title3">Latest News</div>
				<div class="aside-widget">
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="img/lt2.jpg" alt=""></a>
						<div class="post-body">
							<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
						</div>
					</div>
					<div class="post post-widget">
					<a class="post-img" href="blog-post.html"><img src="img/lt3.jpg" alt=""></a>
					<div class="post-body">
					<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
					</div>
					</div>
					<div class="post post-widget">
					<a class="post-img" href="blog-post.html"><img src="img/lt4.jpg" alt=""></a>
					<div class="post-body">
					<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
					</div>
					</div>
					<div class="post post-widget">
					<a class="post-img" href="blog-post.html"><img src="img/lt1.jpg" alt=""></a>
					<div class="post-body">
					<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
					</div>
					</div>
				</div>
				
			</div>
	  </div>
	</div>
	<?php include('inc_footer.php'); ?>
	
</body>
</html>
