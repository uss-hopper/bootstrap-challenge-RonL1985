<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<title>Bootstrap Challenge</title>
		<link href="http://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link href="./styles.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Exo:100,200,400|Michroma|Montserrat:100,200,300,400|Raleway:100,200,300,400|Titillium+Web:200,300,400" rel="stylesheet">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>

	<body>
		<!--HEADER-->
		<div class="container mb-2 mt-4 border bg-light">
			<nav class="navbar navber-light navbar -expand-lg-navbar-fixed-top ">
				<a class="navbar-brand" href="#">The Website Name</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">link A</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">link B</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">link C</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link D</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
			<!--JUMBBOTRON-->
		<div class="jumbotron container intro mb-5 mt-5 p-5 border">
			<h1 class="display-3">Intro Section</h1>
			<p class="lead">Some intro text here</p>

			<hr class="my-2">
			<a class="btn btn-lg btn-primary " href="#" role="button">Learn More</a>
		</div>

		<!--INFO SECTION-->
		<div class="info container-fluid p-5 d-flex flex-wrap justify-content-space-between">

			<div class="image-wrapper float-left">
				<img class="" src="burger-king.png" alt="logo">
			</div>

			<div class="content-wrapper mt-3">
				<p class="">Spicy jalapeno bacon ipsum dolor amet cupim sirloin beef ribs porchetta meatloaf, short ribs fatback sausage. Pork loin pig pork ball tip chuck tail meatball jerky fatback corned beef beef turducken landjaeger bacon pastrami. Alcatra tail pig, bacon burgdoggen landjaeger meatloaf meatball pastrami ham hock. Pork loin capicola rump cow alcatra pastrami andouille, ground round ham cupim turkey. Fatback bacon burgdoggen pastrami strip steak rump boudin turkey pork chop biltong corned beef picanha beef brisket tail. Meatloaf turkey buffalo sausage turducken drumstick jerky ribeye prosciutto tail pork chop bacon kevin flank shank. Frankfurter tenderloin ball tip landjaeger.</p>
				<p>Turkey meatloaf brisket corned beef short ribs. Picanha filet mignon strip steak burgdoggen jowl. Hamburger meatball burgdoggen boudin biltong drumstick, ham ribeye landjaeger. Ball tip sausage bacon, shankle t-bone leberkas short loin corned beef prosciutto chicken bresaola turkey.</p>
			</div>
		</div>

		<!--IMAGE SECTION-->
		<div class="container card-deck col-12 mt-5 pb-5 d-flex flex-wrap justify-content-center align-items-center">

			<div class="col-3 card border-0">
				<img class="round-circle border ml-auto mr-auto mt-5 mb-4" src="coca-cola.png" alt="logo">
				<div class="infocard bg-light m-auto p-2 border rounded d-flex align-items-center">
					<p class="p-2 text-center text-muted font-weight-bold">Bacon pork chop burgdoggen biltong corned beef picanha beef brisket tail. Meatloaf turkey buffalo sausage turducken drumstick jerky.</p>
				</div>
			</div>

			<div class="col-3 card border-0">
				<img class="rounded-circle border ml-auto mr-auto mt-5 mb-4" src="kfc.png" alt="logo"
				<div class="infocard bg-light m-auto p-2 border rounded d-flex align-items-center">
					<p class="p-2 text-center text-muted font-weight-bold">Bacon pork chop burgdoggen biltong corned beef picanha beef brisket tail. Meatloaf turkey buffalo sausage turducken drumstick jerky.</p>
				</div>
			</div>

			<div class="col-3 card border-0">
				<img class="rounded-circle border ml-auto mr-auto mt-5 mb-4" src="pepsi.png" alt="logo">
				<div class="infocard bg-light m-auto p-2 border rounded d-flex align-items-center">
					<p class="p-2 text-center text-muted font-weight-bold">Bacon pork chop burgdoggen biltong corned beef picanha beef brisket tail. Meatloaf turkey buffalo sausage turducken drumstick jerky.</p>
				</div>
			</div>

			<div class="col-3 card border-0">
				<img class="rounded-circle border ml-auto mr-auto mt-5 mb-4" src="starbucks.png" alt="logo">
				<div class="infocard bg-light m-auto p-2 border rounded d-flex align-items-center">
					<p class="p-2 text-center text-muted font-weight-bold">Bacon pork chop burgdoggen biltong corned beef picanha beef brisket tail. Meatloaf turkey buffalo sausage turducken drumstick jerky.</p>
				</div>
			</div>
		</div>

		<!--FOOTER-->
		<div class="container-fluid mt-5 bg-dark d-flex justify-content-center">
			<p class="mt-5 mb-5 text-secondary h4 text-center">turducken drumstick jerky ribeye prosciutto tail</p>

		</div>
	</body>
</html>
