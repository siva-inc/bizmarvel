<?php include('header.php'); ?>

    <div class="az-content az-content-dashboard">
      <div class="container">
        <div class="az-content-body">
          <div class="az-dashboard-one-title">
            <div>
              <h2 class="az-dashboard-title">Dashboard</h2>
              <p class="az-dashboard-text">Hi, Alex! This is the overview of <b>Zeplin</b> company you are administrating.</p>
            </div>
            <div class="az-content-header-right">
              <div class="media" style="margin-right: 10px;">
                <div class="media-body">
                  <label>Select company</label>
                </div><!-- media-body -->
              </div><!-- media -->
              
			  <div class="dropdown">
				<button style="margin-left: 0px;" class="btn btn-secondary-dashbord dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Zeplin
				</button>
				<div class="dropdown-menu tx-13" aria-labelledby="dropdownMenuButton">
				  <a class="dropdown-item" href="#">Mokshar</a>
				  <a class="dropdown-item" href="#">Another</a>
				  <a class="dropdown-item" href="#">Something else</a>
				</div>
			  </div>
            </div>
          </div><!-- az-dashboard-one-title -->

          <div class="row row-sm mg-b-20">
            <div class="col-lg-12 ht-lg-100p">
              <div class="row row-sm">
                <div class="col-md-6 col-lg-4 mg-b-20 mg-md-b-0 mg-lg-b-20">
                  <div class="card card-dashboard-five">
					<div class="az-sidebar-loggedin">
						<img style="width:90px;height:90px;" src="images/companies/zeplin.png" alt="">
						<div class="media-body" style="margin-top: 15px;">
						  <h4>Zeplin</h4>
						  <span>IT Domain</span>
						  <span class="badge badge-secondary" style="color:#fff;width:50px;">Design</span>
						</div><!-- media-body -->
					</div>
                  </div><!-- card-dashboard-five -->
                </div><!-- col -->
                <div class="col-md-6 col-lg-8">
				  <div class="card card-dashboard-five">
					<div class="row row-sm">
						<div class=" col-lg-5">
							<div class="card-header">
								<h6 class="card-title">General</h6>
							</div>
							<div class="card-body row">
							  <div class="col-6 col-md-4 col-xl">
								<h2>124</h2>
								<div class="desc up">
								  <span>Connections</span>
								</div>
							  </div><!-- col -->
							  <div class="col-6 col-md-4 col-xl">
								<h2>3581</h2>
								<div class="desc up">
								  <span>Leads</span>
								</div>
							  </div><!-- col -->
							</div>
						</div>	
						<div class=" col-lg-7">
							<div class="card-header">
								<h6 class="card-title">Recent Activities</h6>
							</div>
							<div class="card-body row">
							  <div class="col-4 col-md-4 col-xl mg-t-20 mg-lg-t-0">
								<h2>15</h2>
								<div class="desc down">
								  <span>Customization Requests</span>
								</div>
							  </div><!-- col -->
							  <div class="col-4 col-md-4 col-xl mg-t-20 mg-lg-t-0">
								<h2>28</h2>
								<div class="desc up">
								  <span>Demo Requests</span>
								</div>
							  </div><!-- col -->
							  <div class="col-4 col-md-4 col-xl mg-t-20 mg-lg-t-0">
								<h2>7</h2>
								<div class="desc up">
								  <span>Feedback referances</span>
								</div>
							  </div><!-- col -->
							</div><!-- card-body -->
						</div><!-- row -->
					</div><!-- row -->	
				  </div><!-- card -->
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- col -->
          </div><!-- row -->
		  
		  
          <div class="row row-sm mg-b-20">
            <div class="col-lg-7 ht-lg-100p">
              <div class="card card-dashboard-four mg-b-20">
                <div class="card-header">
                  <h5 class="card-title">About Zeplin</h5>
                </div><!-- card-header -->
                <div class="card-body row">
					<div class="tab">
					  <button class="tablinks active" onclick="openCity(event, 'London')">Products</button>
					  <button class="tablinks" onclick="openCity(event, 'Paris')">Deals</button>
					</div>

					<div id="London" class="tabcontent" style="display:block;width:100%">
					  
						<div class="az-sidebar-loggedin">
							<img style="width:90px;height:90px;" src="images/companies/zeplin.png" alt="">
							<div class="media-body" style="margin-top: 15px;">
							  <h4>Zeplin</h4>
							  <span>IT Domain</span>
							  <span class="badge badge-secondary" style="color:#fff;width:50px;">Design</span>
							</div><!-- media-body -->
						</div>
						<div class="az-dashboard-nav">
							<nav class="nav">
							  <a class="nav-link active" data-toggle="tab" href="#desc">Description</a>
							  <a class="nav-link" data-toggle="tab" style="display: block;" href="active">Actions</a>
							</nav>
						</div>
						<div id="desc">
						<p>It’s all about the details. Handoff designs and styleguides with accurate specs, 
						assets, code snippets—automatically. No need to change how you design, just export 
						your file in one click using our Sketch, Adobe XD CC, Figma, Adobe Photoshop CC plugins.<p>
						<p>Edit</p>
						<button style="width: 150px;border-radius: 50px;" class="btn btn-outline-light btn-block">Add Product</button>
						</div>
						
					</div>

					<div id="Paris" class="tabcontent">
					  <p>Deals content goes over here.</p> 
					</div>
					
                </div><!-- card-body -->
              </div><!-- card-dashboard-four -->
	<!--	  
			  <div class="card card-dashboard-sixteen">
              <div class="card-header">
                <h6 class="card-title tx-14 mg-b-0">Recent Activities</h6>
              </div>
              <div class="card-body">
				<div class="tab">
					  <button class="tablinks active" onclick="openCity(event, 'following')">Following</button>
					  <button class="tablinks" onclick="openCity(event, 'you')">You</button>
					</div>

					<div id="following" class="tabcontent" style="display:block;width:100%">
						<div class="table-responsive">
						  <table class="table mg-b-0">
							<tbody>
							  <tr>
								<td>
								  <div class="az-img-user"><img src="" alt=""></div>
								</td>
								<td>
								  <h6 class="mg-b-0 tx-inverse">Salesforce</h6>
								</td>
							  </tr>
							  <tr>
								<td>
								  <div class="az-img-user"><img src="" alt=""></div>
								</td>
								<td>
								  <h6 class="mg-b-0 tx-inverse">Comcat</h6>
								</td>
							  </tr>
							  <tr>
								<td>
								  <div class="az-img-user"><img src="" alt=""></div>
								</td>
								<td>
								  <h6 class="mg-b-0 tx-inverse">Qualcomm</h6>
								</td>
							  </tr>
							  <tr>
								<td>
								  <div class="az-img-user"><img src="" alt=""></div>
								</td>
								<td>
								  <h6 class="mg-b-0 tx-inverse">Comcat</h6>
								</td>
							  </tr>
							  <tr>
								<td>
								  <div class="az-img-user"><img src="" alt=""></div>
								</td>
								<td>
								  <h6 class="mg-b-0 tx-inverse">Qualcomm</h6>
								</td>
							  </tr>
							</tbody>
						  </table>
						</div>	
					</div>
					
					<div id="you" class="tabcontent">
					  <p>No Data</p> 
					</div>
					

              </div>
            </div>		-->
            </div><!-- col -->
            <div class="col-lg-5 mg-t-20 mg-lg-t-0">
              <div class="card card-dashboard-pageviews">
                <div class="card-header">
                  <h6 class="card-title">Network</h6>
                </div><!-- card-header -->
                <div class="card-body">
					<div class="card card-dashboard-ratio">
					  <div class="card-body">
						<div>
						  <img style="width:90px;height:90px;" src="images/companies/zeplin.png" alt="">
						</div>
						<div>
						  <h6 class="card-title mg-b-7">Quick Ratio</h6>
						  <p class="mg-t-10 mg-b-0">Measures your Current Assets + Accounts Receivable / Current Liabilities </p>
						</div>
					  </div><!-- card-body -->
					  <!-- card-body -->
					</div>				
                </div><!-- card-body -->
              </div><!-- card -->
			  
            </div><!--col -->
          </div><!-- row -->


        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->

<?php include('footer.php'); ?>	