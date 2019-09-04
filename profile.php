<?php include('inc_head.php'); ?>

  </head>

<body>
	<!--<div id="loader"><div id="spin"></div></div>-->
	
	<div class="">
		<?php include('inc_topmenu2.php'); ?>
		
		<div class="clearfix"></div>
		<?php include('inc_leftmenu.php'); ?>
		
	  <div class="page-content mt-10">
		    
  			<div class="part">
		  		<div class="pt-title">Your Account</div>
		  		<img class="unite" src="img/slash.png" alt=""/> 
				
				<div class="col-xs-12 mt-15 pd-0">
					<div class="col-xs-6 mt-10">
						<div class="avatar-upload">
							<div class="avatar-edit">
								<input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
							</div>
							<div class="avatar-preview">
								<div id="imagePreview" style="background-image: url('img/acc-sample.png');">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="r-coin">
							<i class="fas fa-coins fasco"></i>&nbsp; <span>240</span>
							<p>Your Coins</p>
						</div>
						<div class="chk-reward">
							<a href="reward.php" class="btn btn-default chk">
								<i class="fas fa-gift"></i>&nbsp; Check Reward
							</a>
							<a href="profile-contest-history.php" class="btn btn-default cts mt-5">
								<i class="fas fa-futbol"></i>&nbsp; Contest History
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-xs-6">
						<div class="pt-input">
							<label for="pt-user">First Name</label>
							<div class="">
								<h4 class="mt-10 bg-f5">Mohamad</h4>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="pt-input">
							<label for="pt-user">Last Name</label>
							<div class="">
								<h4 class="mt-10 bg-f5">Iqbal</h4>
							</div>
						</div>
					</div>
					<div class="col-xs-12 mt-10">
						<div class="pt-input">
							<label for="pt-user">Email Address</label>
							<div class="">
								<h4 class="mt-10 bg-f5">lucalri@gmail.com</h4>
							</div>
						</div>
					</div>
					<div class="col-xs-12 mt-10">
						<div class="pt-input">
							<label for="pt-user">Country Residence</label>
							<div class="">
								<h4 class="mt-10 bg-f5">Indonesia</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="liner"></div>
				<div class="col-xs-12 pd-0">
					<div class="col-xs-12 mt-10">
						<div class="pt-input">
							<div class="col-xs-12 pd-0">
								<label for="pt-user">Favorite Club</label>
							</div>
							
							<div class="col-xs-4">
								<img src="img/juventus_black.png" width="50" alt=""/>
							</div>
							<div class="col-xs-8">
								<h4 class="mt-10 bg-f5">Juventus</h4>
							</div>
						</div>
					</div>
					<div class="col-xs-12 mt-10">
						<div class="pt-input">
							<label for="pt-user">Country Residence</label>
							<div class="">
								<h4 class="mt-10 bg-f5">Indonesia</h4>
							</div>
						</div>
					</div>
				</div>
				
				<div class="clearfix"></div>
		  	</div>
		  	
	  </div>
	</div>
	<?php include('inc_footer.php'); ?>
	  
</body>
</html>
