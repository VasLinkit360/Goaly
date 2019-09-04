<?php include('inc_head.php'); ?>

  </head>

<body>
	<!--<div id="loader"><div id="spin"></div></div>-->
	
	<div class="">
		<?php include('inc_topmenu2.php'); ?>
		
		<div class="clearfix"></div>
		<?php include('inc_leftmenu.php'); ?>
		
	  <div class="page-content mt-10">
			<!-- Menu Cat -->
			<div class="col-xs-12 main-cat">
				<div class="well">		
				<form>
					<fieldset>
						<div class="form-group">
							<input type="text" class="form-control" name="query" id="query" placeholder="">              
						</div>
						<div class="text-center">
							<!--<button type="submit" class="btn btn-primary btn-round">Search</button>-->
							<a href="search-result.php" class="btn btn-primary btn-round">Search</a>
						</div>
					</fieldset>
				</form>
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
