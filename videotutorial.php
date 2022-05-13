<!DOCTYPE html>
<html lang="en">
	<head>
	     <title>Programming Aashram | Javascript Interview Question</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="icon" type="image/png" href="images/logo.png">
		<link href="assest/css/style.css" rel="stylesheet">
		<link href="assest/css/media.css" rel="stylesheet">
		<link href="assest/css/effect.css" rel="stylesheet">
		<link href="assest/css/wow_animate.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
		
		<div class="container">
			<div class="p-3">
				<ul class="breadcrumb bg-light">
					<li class="breadcrumb-item">
						<a href="index.php" >Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="dailyupdates.php">
							Daily Updates
						</a>
					</li>
					<li class="breadcrumb-item">
						<a href="apicdn.php">
							API and CDN
						</a>
					</li>
					<li class="breadcrumb-item ">
						<a href="interview.php">
							Interview kaksh
						</a>
					</li>
					<li class="breadcrumb-item ">
						<a href="color.php">
							Color kaksh
						</a>
					</li>
					<li class="breadcrumb-item">
						
							<a href="psd.php">PSD Template</a>
						
					</li>
					<li class="breadcrumb-item active">
						
							Video Tutorial
						
					</li>
				</ul>
			</div>
		</div>
		
		
			
		<div class="navbar navbar-expand-md bg-secondary sticky-top shadow-sm">
			<button data-toggle="collapse" data-target="#mycolap" class="navbar-toggler text-white" type="button">
				<span class="navbar-toggler-icon">More...</span>
			</button>
			<div class="nav-pills justify-content-center collapse navbar-collapse" id="mycolap">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="#htmltutorial" class="nav-link text-white ml-3 p-1 font-18 active" data-toggle="tab">
							<i class="fab fa-css3-alt text-white"></i>
							HTML Tutorial
						</a>
					</li>
					<li class="nav-item">
						<a href="#javascirpttutorial" class="nav-link ml-3 text-white p-1 font-18" data-toggle="tab">
							<i class="fab fa-js-square text-white"></i>
							Javascript Tutorial
						</a>
					</li>
					<li class="nav-item">
						<a href="#phptutorial" class="nav-link ml-3 text-white p-1 font-18" data-toggle="tab">
							<i class="fab fa-php text-white"></i>
							PHP Tutorial
						</a>
					</li>
					<li class="nav-item">
						<a href="#pythontutorial" class="nav-link ml-3 text-white p-1 font-18" data-toggle="tab">
							<i class="fab fa-python text-white"></i>
							Python Tutorial
						</a>
					</li>
				</ul>
			</div>
		</div>
		
		
		<div class="tab-content">
			<article id="htmltutorial" class="tab-pane active">
				<div class="container">
					<div class="row">
						<div class="col-md-12">					
							<div class="wrap_video p-3 mt-2 mb-2 text-center">
								<h1 class="mb-5 text-danger">
									<i class="fab fa-css3-alt text-danger"></i>
									HTML Video Tutorial
								</h1>
								<iframe width="100%" height="450" src="https://www.youtube.com/embed/videoseries?list=PLdYkObur3tQtBTbYirZGcrWPuPRmmDA6n" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</article>
		
			<article id="javascirpttutorial" class="tab-pane fade">
				<div class="container">
					<div class="row">
						<div class="col-md-12">					
							<div class="wrap_video p-3 mt-2 mb-2 text-center">
								<h1 class="mb-5 text-warning">
									<i class="fab fa-js-square text-warning"></i>
									Javascript Video Tutorial
								</h1>
						    	<iframe width="100%" height="450" src="https://www.youtube.com/embed/videoseries?list=PLjpp5kBQLNTSvHo6Rp4Ky0X8x_MabmKye" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</article>
			
			
			
			<article id="phptutorial" class="tab-pane fade">
				<div class="container">
					<div class="row">
						<div class="col-md-12">					
							<div class="wrap_video p-3 mt-2 mb-2 text-center">
								<h1 class="mb-5 text-success">
									<i class="fab fa-php text-success"></i>
									PHP Video Tutorial
								</h1>
								<iframe width="100%" height="450" src="https://www.youtube.com/embed/videoseries?list=PLcuqiGkigdex_2ytK5X-HptOJSJ7Mm9bU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</article>
			
			
			<article id="pythontutorial" class="tab-pane fade">
				<div class="container">
					<div class="row">
						<div class="col-md-12">					
							<div class="wrap_video p-3 mt-2 mb-2 text-center">
								<h1 class="mb-5 text-body">
									<i class="fab fa-python text-body"></i>
									Python Video Tutorial
								</h1>
								<iframe width="100%" height="450" src="https://www.youtube.com/embed/videoseries?list=PLmRclvVt5DtmcLF3ywxKg692lhfD6SUOr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
		<!--tabcontent-->
		
		
		<div class="p-3 mb-4">
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a href="index.php" class="page-link text-secondary font-18">1</a>
				</li>
				<li class="page-item">
					<a href="dailyupdates.php" class="page-link text-secondary font-18">2</a>
				</li>
				<li class="page-item">
					<a href="apicdn.php" class="page-link text-secondary font-18">3</a>
				</li>
				<li class="page-item">
					<a href="interview.php" class="page-link text-secondary font-18">4</a>
				</li>
				<li class="page-item">
					<a href="color.php" class="page-link text-secondary font-18">5</a>
				</li>
				<li class="page-item">
					<a href="psd.php" class="page-link text-secondary font-18">6</a>
				</li>
				<li class="page-item">
					<a href="project.php" class="page-link text-secondary font-18">7</a>
				</li>
				<li class="page-item">
					<a href="videotutorial.php" class="page-link text-danger font-18">8</a>
				</li>
			</ul>
		</div>
		
		
		<?php
			include('include/footer.php');
		?>
		
		
		
		<script src="script/custom.js"></script>
		<script>
			
		</script>
	</body>
</html>