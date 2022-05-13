<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Programming Aashram - Javascript Interview Question</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="assest/css/style.css" rel="stylesheet">
		<link href="assest/css/media.css" rel="stylesheet">
		<link href="assest/css/effect.css" rel="stylesheet">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php 
			include('include/header.php')
		?>
		<?php
			include('include/nav.php');
		?>
		
		<article class="mt-3" ng-app="">
			<div class="container-fluid px-4">
				<div class="row">				
					<div class="col-md-7 col-sm-12 col-xs-12" >
						<div class="resumemain mt-2 bg-light border border-primary p-1" style="margin-bottom:200px">
							<div class="card">
								<div class="text-white" style='background-color:{{color}}'>
									<h3 class="text-uppercase text-center">Resume</h3>
								</div>
								<div class="card-body">								
									<div class="client-pro d-flex p-1">
										<img src="{{file}}" class="img-fluid">
										
										<h3 class="title align-items-center p-2  ml-3">{{name}} {{lname}}</h3>
									</div>								
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="client-info  mb-2 d-block border-end border-primary">
												<ul class="nav navbar-nav">
													<li class="nav-item mb-2">
														<a href="#" class="nav-link text-decoration-none text-body" style="font-size:{{parafont}}px">
															<i class="fas fa-envelope-open " style='color:{{color}}'></i>
															{{uemail}}
														</a>
													</li>
													<li class="nav-item mb-2">
														<a href="#" class="nav-link text-decoration-none text-body" style="font-size:{{parafont}}px">
															<i class="fas fa-phone-square-alt " style='color:{{color}}'></i>
															{{phone}}
														</a>
													</li>
													<li class="nav-item mb-2">
														<a href="#" class="nav-link text-decoration-none text-body" style="font-size:{{parafont}}px">
															<i class="fas fa-map-pin " style='color:{{color}}'></i>
															{{add}}
														</a>
													</li>
												</ul>
											</div>
											<div class="client-lang mb-2 p-1 d-block border-end border-primary">
												<h4>
													<i class="fas fa-language " style='color:{{color}}'></i>
													<span style="font-size:{{font}}px">LANGUAGE</span>
												</h4>
												<p style="font-size:{{parafont}}px" class="hindi">
													<i class="fas fa-circle-notch " style='color:{{color}}'></i>
													
												</p>
												<p style="font-size:{{parafont}}px" class="english">
													<i class="fas fa-circle-notch " style='color:{{color}}'></i>
													
												</p>
												
											</div>
											<div class="client-skill mb-2 border-end " style='border-color:{{color}}'>
												
												<h4>
													<i class="fas fa-seedling" style='color:{{color}}'></i>
													 <span style="font-size:{{font}}px">SKILLS</span>
												</h4>
												<p style="font-size:{{parafont}}px">
													{{skill}}
												</p>
											</div>
											<div class="client-exp mb-2 border-end" style='border-color:{{color}}'>
												<h4>
													<i class="fas fa-briefcase" style='color:{{color}}'></i>
													<span style="font-size:{{font}}px">WORK EXPERIENCE</span>
												</h4>
												<span style="font-size:{{parafont}}px"><b>{{position}}</b></span>
												<span class="badge badge-info bg-primary" style="font-size:{{parafont}}px">{{orgnization}}</span>
												<p class="mt-2">
													{{brief}}
												</p>
											</div>
											<div class="client-edu mb-2 border-end" style='border-color:{{color}}'>
												<h4>
													<i class="fas fa-user-graduate" style='color:{{color}}'></i>
													<span style="font-size:{{font}}px">EDUCATIONAL</span>
												</h4>
												<p style="font-size:{{parafont}}px">
													<b>{{unvercity}}</b>
													<span class="badge badge-info bg-primary" style="font-size:{{parafont}}px">{{degree}}</span>
												</p>
											</div>
										</div>
										<!--col-6-->
										
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="client-pro  mb-2">
												<h4>
													<i class="fas fa-project-diagram" style='color:{{color}}'></i>
													<span style="font-size:{{font}}px">PROJECTS</span>
												</h4>
												<ul class="nav" id="mynewpro">
													
												</ul>
											</div>
										</div>
										<!--col-6-->
									</div>
								</div>
								<!--card-body-->
							</div>
						</div>
					</div>
					<!--col-7-->
					<div class="col-md-5">
						<div class="user-form bg-light border border-primary p-2">
							<form action="" method="post" class="justify-content-center">
								<div class="color-ground d-flex border border-primary">
									<div class="form-group p-2">
										<label for="colorpiker" class="form-label">Template Color</label>
										<input type="color" value="#0b43ea" ng-model="color"  id='colorpiker'>
									</div>
									<div class="form-group p-2">
										<label for="font" class="form-label">Headings Size</label>
										<input type="range" value="20" id="font" ng-model="font" class="form-range" min="10" max="30">	
									</div>
									<div class="form-group p-2">
										<label for="parafont" class="form-label">Paragarph Size</label>
										<input type="range" value="20" id="font" ng-model="parafont" class="form-range" min="10" max="18">	
									</div>
								
									
								</div>
								<div class="face01 mb-3">
									<h4>Basic Information</h4>


									<div class="form-group">
										<label for="userimages">Choose Profile</label>
										<input type="t" ng-model="file" placeholder="Paste your file path - Max(89X96)" id="userimages" class="form-control">									
									</div>
									
									<div class="form-group d-flex">
										<div class="form-floating p-2">
											<input type="text" class="form-control" ng-model="name" placeholder="Type your first name" id="floatinput">
											<label for="floatinput">First Name<label>
											
										</div>
										<div class="form-floating p-2">
											<input type="text" class="form-control" ng-model="lname" placeholder="Type your first name" id="floatinput">
											<label for="floatinput">Last Name<label>
										</div>
									</div>
									
									<div class="form-group d-flex">
										<div class="input-group p-2">
											<span class="input-group-text" id="basic-addon1">@</span>
											<input type="text" id="userimages" placeholder="Ex : user@gmail.com"  class="form-control" ng-model="uemail" aria-label="Recipient's username" aria-describedby="basic-addon2">
										</div>
										<div class="input-group p-2">
											<span class="input-group-text" id="basic-addon4"><i class="fas fa-phone-square-alt text-muted"></i></span>
											<input type="text" id="userphon" ng-model="phone" placeholder="0123456789" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon5">
										</div>
									</div>
									
									<div class="form-group">
										<div class="form-floating">
											<textarea class="form-control" ng-model="add" placeholder="address" id="addr"></textarea>
											<label for="addr">Address</label>
										</div>
									</div>
								</div>
								<!--face01-->
								<div class="face02 mb-3">
									<h4>Languages</h4>
									<div class="form-group p-2">
										<div class="form-check form-switch">
											<input class="form-check-input lang" value="Hindi" ng-model="hindi" type="checkbox" id="hindi">
											<label for="hindi" class="form-check-label">Hindi</label>
										</div>
										<div class="form-check form-switch">
											<input class="form-check-input lang" value="English"  ng-model="english" type="checkbox" id="english">
											<label for="english" class="form-check-label">English</label>
										</div>
										
									</div>
								</div>
								<!--face02-->
								
								<div class="face03 mb-3">
									<h4>SKILLS</h4>								
									<div class="form-group">
										<div class="form-floating">
											<textarea class="form-control" id="userskil" ng-model="skill" placeholder="Javascript, PHP, AngularJs"></textarea>
											<label for="userskil">Javascript, PHP, AngularJs</label>
										</div>
									</div>								
								</div>
								<!--face03-->
								
								<div class="face04 mb-3">
									<h4>WORK EXPERIENCE</h4>
									<div class="form-group">
										<div class="form-floating p-2">
											<input type="text" class="form-control" ng-model="position" placeholder="Position" id="pos">
											<label for="pos">Position</label>
										</div>
										<div class="form-floating p-2">
											<input type="text" class="form-control" ng-model="orgnization" placeholder="Organization" id="org">
											<label for="org">Organization</label>
										</div>
										<div class="form-floating p-2">
											<textarea class="form-control" ng-model="brief" placeholder="Brief About You" id="brief"></textarea>
											<label for="brief">Brief About You</label>
										</div>
									</div>
								</div>
								<!--face04-->
								
								<div class="face05 mb-3">
									<h4>EDUCATIONAL</h4>
									<div class="form-group  d-flex">
										<div class="form-floating p-2">
											<input type="text" class="form-control" ng-model="unvercity" placeholder="Univercity" id="uni">
											<label for="uni">Univercity</label>
										</div>
										
										<div class="form-floating p-2">
											<input type="text" class="form-control" ng-model="degree" placeholder="Degree/Certificate" id="cert">
											<label for="cert">Degree/Certificate</label>
										</div>
									</div>
								</div>
								<!--face05-->
								
								<div class="face06 mb-3">
									<a class="btn btn-success" id="addpro">
										Add Project
									</a>
									<div class="form-group">
										
									</div>
								</div>
							</form>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								Export Your Resume
							</button>
						</div>
					</div>
					<!--col-6-->
				</div>
			</div>
		</article>
		
		
		
		
		
		<div class="modal fade" id="myModal">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">
							Guide For Export Resume
						</h5>
						
						
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					 <!-- Modal body -->
					<div class="modal-body">
						<p>
							<span class="badge badge-primary">
								Note :								
							</span>
							<b><em>Read Carefully</em></b> 
						</p>
						<ul class="nav navbar-nav">
							<li>
								<a >Click Export</a>
								<a class="btn btn-info" role="button" id="export">Export</a>
							</li>
							<li>
								<a>Destination - Microsoft XPS Document</a>
							</li>
							
							<li>
								<a>Pages - 1</a>
							</li>
							<li>
								<span class="badge-primary badge">More Settings</span>
								<a>Advance Setting - A4 Size page</a>
							</li>
						</ul>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<?php
			include('include/footer.php');
		?>
		
		<script>
			$(document).ready(function(){
				$('#export').click(function(){
					$('#myModal').hide()
					$('.col-md-5').hide()
					$('.modal-backdrop.show').css('opacity','0');
					$('.col-md-7').css('margin','0 auto');
					$('footer').hide();
					window.print();				
				})
			})
		</script>
		
		<script src="script/custom.js"></script>
	</body>
</html>