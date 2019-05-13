
	<div class="az-footer mg-t-20" style="background-color: #fbfbfb;">
        <div class="container">
			<div class="row">
    			<div class="col-lg-2 col-sm-12">
    			  <a href="index.php"><img src="images/logo.png" style="width: 120px;margin-top: -10px;"></a>
    			</div>
    			<div class="col-lg-6 col-sm-12">
    			  <ul class="foot-link foot-ul">
    				<li><a class="foot-links" href="#">About Us</a></li>
    				<li><a class="foot-links" href="contact.html">Contact Us</a></li>
    				<li><a class="foot-links" href="#">How It Works</a></li>
    				<li><a class="foot-links" href="#">Privacy Policy</a></li>
    			  </ul>
    			</div>
    			<div class="col-lg-4 col-sm-12">
    				<ul style="display: -webkit-box;float:right;margin-bottom: 0px;list-style:none;">
    					<li><a class="foot-sociallink" href="#"><i class="icon ion-logo-facebook"></i></a></li>
    					<li><a class="foot-sociallink" href="#"><i class="icon ion-logo-instagram"></i></a></li>
    					<li><a class="foot-sociallink" href="#"><i class="icon ion-logo-twitter"></i></a></li>
    					<li><a class="foot-sociallink" href="#"><i class="icon ion-logo-youtube"></i></a></li>
    				</ul>	<br>
    				<p style="float:right;font-size: 11px;"> © Biz Marvel 2019. All rights reserved.</p>
    			</div>
    		</div>
        </div><!-- container -->
    </div><!-- az-footer -->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/jquery.flot/jquery.flot.js"></script>
    <script src="lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="lib/chart.js/Chart.bundle.min.js"></script>
    <script src="lib/peity/jquery.peity.min.js"></script>

    <script src="js/azia.js"></script>
    <script src="js/chart.flot.sampledata.js"></script>
    <script src="js/dashboard.sampledata.js"></script>
	<script>
	function openCity(evt, cityName) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(cityName).style.display = "block";
	  evt.currentTarget.className += " active";
	}
	</script>
  </body>
</html>
