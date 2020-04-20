<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>my-pwp-corrigan-milestone3</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>

<div>
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="#">About Us</a>
			<a class="navbar-brand" href="#">Areas We Serve</a>
			<a class="navbar-brand" href="#">Contact Us</a>
		</div>
	</nav>

	<div class="jumbotron jumbotron-fluid bg-light">
		<div class="container">
			<h1 class="display-4">Doncaster Court Reporting LLC.</h1>
		</div>
	</div>
</div>
<!--Carousel is not scrolling-->
<div class="container w-50">
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="court-reporting.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="courtreportinginfographic.png" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="lawyer-photo.jpg" alt="Third slide">
			</div>
		</div>
	</div>
</div>

<section class="py-5 bg-light">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-6 col-sm-6">
				<h1>About Us</h1>
				<div class="card">
					<div class="card-body">Doncaster Court Reporting LLC. is a professional court reporting company with impeccable customer service based in southern New Mexico. </p>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6">
				<h1>Areas We Serve</h1>
				<div class="card">
					<div class="card-body">
						<p class="card-text">
						<ul>
							<li>Roswell</li>
							<li>Carlsbad</li>
							<li>Ruidoso</li>
							<li>Alamagordo</li>
							<li>Artesia</li>
							<li>Clovis</li>
						</ul>

					</div>
				</div>
			</div>
		</div>
</section>


<div class="container py-5">
	<h1>Contact Us</h1>
	<form>
		<section class="py-5">
			<div class="form-group">
				<label for="exampleFormControlInput1">Name</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Last">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Phone Number</label>
				<input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Business Address</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="123 Main St">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Email address</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Date of Deposition</label>
				<input type="date" class="form-control" id="exampleFormControlInput1" placeholder="01/01/2000">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Message</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			<input class="btn btn-primary" type="submit" value="Submit">
		</section>
	</form>
</div>








</body>
</html>