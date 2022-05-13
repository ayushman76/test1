<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Programming Aashram - Javascript Interview Question</title>
		<link href="assest/css/style.css" rel="stylesheet">
		<link href="assest/css/media.css" rel="stylesheet">
		<link href="assest/css/effect.css" rel="stylesheet">
		<link href="assest/css/wow_animate.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
			<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
					<li class="breadcrumb-item active">
						Daily Updates
					</li>
					
				</ul>
			</div>
		</div>
		
		
		<article class="mt-5" id="blogspace">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h4>Programming Updates</h4>
						<form>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-text"><i class="fas fa-search"></i></span>
									<input type="text" name="search" placeholder="Ex: Javascript/JQuery/Bootsrap/Css3..." id="blogSearch" class="form-control">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</article>
		
		
		
		<div class="p-3 mb-4">
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a href="index.php" class="page-link text-secondary font-18">1</a>
				</li>
				<li class="page-item">
					<a href="dailyupdates.php" class="page-link  text-danger font-18">2</a>
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
					<a href="videotutorial.php" class="page-link text-secondary font-18">8</a>
				</li>
			</ul>
			
		</div>
		
		<?php
			include('include/footer.php');
		?>
		
		
		<script>
			
			$(document).ready(function(){
			  $("#blogSearch").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#blogspace .col-md-4").filter(function() {
				  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			  });
			});
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="script/app.js"></script>
		<script src="script/custom.js"></script>
		<script src="https://unpkg.com/@lyket/widget@latest/dist/lyket.js?apiKey=acc0dbccce8e557db5ebbe6d605aaa"></script>
	</body>
</html>