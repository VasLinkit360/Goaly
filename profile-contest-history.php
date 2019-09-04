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
		  		<img class="unite" src="img/slash.png" alt=""> 
				<a href="profile.php" class="stand btn btn-default chk2">
					<i class="fas fa-arrow-left"></i>&nbsp; Back
				</a>
				<div class="col-xs-12 mt-10">
					<div class="standing ct-history">
					  <h2>Your Contest History</h2>
						<table class="table table-striped table-responsive">
							<tbody><tr class="clr-aqua">
								<th>No</th>
								<th>Contest Title</th>
								<th>Prediction</th>
								<th>Result</th>
								<th>Coin</th>
							</tr>
							<tr class="wpos">
								<td>1</td>
								<td>
									Tottenham Vs Ajax
								</td>
								<td>3 - 1</td>
								<td class="text-red"> 
									Wed, 5/1 <br>
									2:00 AM
								</td>
								<td>10</td>
							</tr>
							<tr class="wpos">
								<td>2</td>
								<td>
									M.City Vs Tottenham
								</td>
								<td>2 - 0</td>
								<td class="text-green"><strong>4 - 3</strong></td>
								<td>5</td>
							</tr>






						</tbody></table>
					</div>
				</div>
				
				<div class="liner"></div>
				<div class="clearfix"></div>
		  	</div>
		  	
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
