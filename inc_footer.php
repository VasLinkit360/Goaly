<footer>
	<div class="top">
		<img src="img/the-logo-leagues.png" class="img-responsive" alt=""/> 
	</div>
	<div class="bottom">
		<div class="text-center"><img src="img/logo-goaly.png" height="50px" alt=""/></div>
		<div class="text-footer">
			<a href="">Term of Conditions</a> <a href="">Privacy Policy</a> <a href="">Cookie Policy</a> <a href="">Work with Us</a> <a href="">Contact Us</a>
		</div>
		<div class="copyright">@2019. Goaly. All Right Reserved.</div>
	</div>
</footer>
	
<!-- Modal 1 -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">
	    	<img src="img/logo-goaly.png" height="60" alt=""/> 
		  </h4>
      </div>
      <div class="modal-body">
		  	<h3 class="mt-0">To enjoy play the game, click yes</h3>
        	<p>
		  		This is subcription service for Goaly users who would like to enjoy our interactive prediction games where you can join and collect points to win our exclusive rewards of football merchendise and a chance to Win grand prize to watch Big match overseas.
		    </p>
      </div>
      <div class="modal-footer">
		  <div class="col-xs-6 plfix">
		  	<a href="">
				<button type="button" class="btn-reg" 
						data-dismiss="modal" data-toggle="modal" data-target="#myConfirm">
					<strong>Yes Daily</strong>
				</button>
			</a>
		  </div>
		  <div class="col-xs-6 prfix">
		  	<a href="">
				<button type="button" class="btn-sign"
						data-dismiss="modal" data-toggle="modal" data-target="#myConfirm">
					<strong>Yes Weekly</strong>
				</button>
			</a>
		  </div>
      </div>
    </div>

  </div>
</div>

<!-- Modal 2 -->
<div id="myConfirm" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">
	    	<img src="img/logo-goaly.png" height="60" alt=""/> 
		  </h4>
      </div>
      <div class="modal-body">
        	<p>
		  		You are about to subscribe the daily/weekly subscription plan with Free unlimited play games competition, there will be an auto renewal charge of 10c/day or 50c/week
		    </p>
		  	<p>
		  		Click on Yes to confirm or No to leave
		    </p>
      </div>
      <div class="modal-footer">
		  <div class="col-xs-6 plfix">
		  	<a href="">
				<button type="button" class="btn-no"
						data-dismiss="modal"><strong>No</strong>
				</button>
			</a>
		  </div>
		  <div class="col-xs-6 prfix">
		  	<a href="">
				<button type="button" class="btn-reg" 
						data-dismiss="modal" data-toggle="modal" data-target="#mySuccess"><strong>Yes</strong>
				</button>
			</a>
		  </div>
      </div>
    </div>

  </div>
</div>

<!-- Modal 3 -->
<div id="mySuccess" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">
	    	<img src="img/logo-goaly.png" height="60" alt=""/> 
		  </h4>
      </div>
      <div class="modal-body">
		  	<h3 class="mt-0">Subscribe Successful</h3>
        	<p>
		  		Your subscription is success. Now you can access to all our games in the portal
		    </p>
      </div>
      <div class="modal-footer">
		<a href="">
			<button type="button" class="btn-sign"
					data-dismiss="modal"><strong>Ok</strong>
			</button>
		</a>
      </div>
    </div>

  </div>
</div>

	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/search.js"></script>
	<script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>

<script>
	$('.swiper-container').swiper({
    mode:'horizontal',
    useCSS3Transforms: false,
    loop: false
});
</script>
<script type="text/javascript">
		//Start Youtube API
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var youtubeReady = false;

//Variable for the dynamically created youtube players
var players= new Array();
var isPlaying = false;
function onYouTubeIframeAPIReady(){
  //The id of the iframe and is the same as the videoId	
  jQuery(".youtube-video").each(function(i, obj)  {
     players[obj.id] = new YT.Player(obj.id, {         
			  videoId: obj.id,
			    playerVars: {
			    controls: 2,
		      rel:0,
		      autohide:1,
		      showinfo: 0 ,
		      modestbranding: 1,
		      wmode: "transparent",
		      html5: 1
       	},    
        events: {
          'onStateChange': onPlayerStateChange
        }
       });
     });
     youtubeReady = true;
  }


function onPlayerStateChange(event) {
  var target_control =  jQuery(event.target.getIframe()).parent().parent().parent().find(".controls");
  
  var target_caption = jQuery(event.target.getIframe()).parent().find(".carousel-caption");
  switch(event.data){
    case -1:
      jQuery(target_control).fadeIn(500);
      jQuery(target_control).children().unbind('click');
      break
     case 0:
      jQuery(target_control).fadeIn(500);
      jQuery(target_control).children().unbind('click');
      break;
     case 1:
      jQuery(target_control).children().click(function () {return false;});
      jQuery(target_caption).fadeOut(500);
      jQuery(target_control).fadeOut(500);
       break;
      case 2:
        jQuery(target_control).fadeIn(500);
        jQuery(target_control).children().unbind('click'); 
        break;
        case 3:
           jQuery(target_control).children().click(function () {return false;});
           jQuery(target_caption).fadeOut(500);
           jQuery(target_control).fadeOut(500);
           break;
          case 5:
            jQuery(target_control).children().click(function () {return false;});
            jQuery(target_caption).fadeOut(500);
            jQuery(target_control).fadeOut(500);
            break;
          default:
            break;
    }
};

jQuery(window).bind('load', function(){
  jQuery(".carousel-caption").fadeIn(500);
  jQuery(".controls").fadeIn(500);
 });

jQuery('.carousel').bind('slid.bs.carousel', function (event) {
   jQuery(".controls").fadeIn(500);
});
	</script>

<script>
	$('.hddn').click(function(){
		$(this).text(function(i,old){
			return old=='+' ?  '-' : '+';
		});
	});
</script>



