<?php
include("session_lecturer.php");
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Lecturer Portal</title>
<?php include("head.php");?>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

</head>
	
<body>
<!-- header -->
	<?php include("menu.php");?>
	</br></br>
<!-- //header -->

<!-- events -->
	<div class="events">
		<div class="container">
			<h3><span>News & Events</span></h3>
			<p class="autem">All Important tutors' News and Events about UTM</p>
			<div class="events-grids">
				<div class="col-md-4 events-grid">
					<div class="events-grid1 hvr-sweep-to-top">
						<a href="single.html"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
						<h4><a href="single.html">oribus asperiores</a></h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Admin</a></li>
							<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>May 20, 2016</li>
						</ul>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
							blanditiis praesentium voluptatum deleniti atque.</p>
					</div>
				</div>
				<div class="col-md-4 events-grid">
					<div class="events-grid1 hvr-sweep-to-top">
						<a href="single.html"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
						<h4><a href="single.html">oribus asperiores</a></h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Admin</a></li>
							<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>May 20, 2016</li>
						</ul>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
							blanditiis praesentium voluptatum deleniti atque.</p>
					</div>
				</div>
				<div class="col-md-4 events-grid">
					<div class="events-grid1 hvr-sweep-to-top">
						<a href="single.html"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
						<h4><a href="single.html">oribus asperiores</a></h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Admin</a></li>
							<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>May 20, 2016</li>
						</ul>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
							blanditiis praesentium voluptatum deleniti atque.</p>
					</div>
				</div>
				<div class="col-md-4 events-grid">
					<div class="events-grid1 hvr-sweep-to-top">
						<a href="single.html"><img src="images/8.jpg" alt=" " class="img-responsive" /></a>
						<h4><a href="single.html">iusto odio dignissi</a></h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Admin</a></li>
							<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>May 25, 2016</li>
						</ul>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
							blanditiis praesentium voluptatum deleniti atque.</p>
					</div>
				</div>
				<div class="col-md-4 events-grid">
					<div class="events-grid1 hvr-sweep-to-top">
						<a href="single.html"><img src="images/7.jpg" alt=" " class="img-responsive" /></a>
						<h4><a href="single.html">tatum deleniti atque</a></h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Admin</a></li>
							<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>May 30, 2016</li>
						</ul>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
							blanditiis praesentium voluptatum deleniti atque.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //events -->
<!-- footer -->
<?php include("footer.php");?>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>