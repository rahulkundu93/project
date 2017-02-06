<?php	
	session_start();
	if(isset($_POST["sub"]))
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		
		if(empty($name) || !preg_match('/^[a-zA-Z]+$/',$name))
			{
				$nameerr="Enter Name only alphabetes";
				
			}
		if(empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$emailerr="Enter Valid Email Id";
			}
		if(empty($phone) && preg_match('/^[0-9]{10}$/',$phone))
			{
				$phoneerr="Enter Valid Mobile Number";
			}
			
		//connect database
		$con=mysqli_connect("localhost","root","","reguser");
		
		$com=mysqli_query($con,"insert into user values('$name','$email','$phone')");
		if($com)
		{
			header("location:register.php");
			
		}
		else
		{
			echo "<script>";
				echo "alert('Not Register')";
			echo "</script>";
		}
		mysqli_close($con);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>UpXacademy</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--custon made css--->
	<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!--googe icon stylsheet--->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		
	</style>
</head>
<body>
	<!---header--->
	<nav class="navbar navbar container">
		<div class="container-fluid">
			<div class="navbar-header" style="background-color:white;">
				<a href="https://wwww.upxacadmy.com">
					<img src="img/headlogo.png" alt="Upx acadmy" height="60px" width="900px" style="marign-left:0;">
				</a>
				<a href="https://www.techmahindra.com">
					<img src="img/techmlogo.png" alt="tech Mahidra" height="60px" width="200px">
				</a>
			</div>
		</div>
	</nav>
	<!--end header--->
	<!--live and intractive section--->
	<div class="container">
		<div class="panel">
			<!--<div class="panel-heading">-->
				<!--live and intractive tab--->
				<ul class="nav nav-pills">
					<li class="active"><a href="https://www.youtube.com" id="tabpills2"><span class="icon-inbox"></span>Live & Intractive</a></li>
				</ul>
				<!--end live and intractive tab--->
			<!---</div>--->
			<!---stat panel tab body--->
			<div class="panel-body" id="panelbodyfirst">
				<!---start tab content--->
				<div class="tab-content">
						<!--left side contetn--->
						<div class="pull-left" style="margin-left:20px;">
							<h3 style="color:white;">PRESENTING</h3>
							<h2 style="color:white;">INDIA'S LARGEST</h2>
							<h4 style="background-color:#F2A83F;color:white;font:25px bold;">BIG DATA ANALYSIS CAREER SERIES</h4>
							<!--start registration form--->
							<div class="pull-left">
								<p class="text-center text-danger">19TH FEB ONWORDS</p>
								<form role="form" method="post">
									<div class="form-group row"><!--name box--->
										<div class="col-md-12">
											<label for="name" class="sr-only"></label>
											<input type="text" class="form-control" id="name" name="name" placeholder="Name">
											<span class="has-error"><?php global $nameerr;echo $nameerr;?></span>
										</div>
									</div>
									<div class="form-group row"><!---email box--->
										<div class="col-md-12">
											<label for="Email" class="sr-only"></label>
											<input type="text" class="form-control" id="email" name="email" placeholder="Email">
											<span class="error"><?php global $emailerr;echo $emailerr;?></span>
										</div>
									</div>
									<div class="form-group row"><!--mobile box--->
										<div class="col-md-12">
											<label for="phone" class="sr-only"></label>
											<input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile No.">
											<span class="error"><?php global $phoneerr;echo $phoneerr;?></span>
										</div>
									</div>
									<div class="form-group row"><!---register button--->
										<div class="col-md-12">
											<button type="submit" name="sub" class="btn">REGISTER FOR HERE</button>
										</div>
									</div>
								</form>
							</div>
							<!--end registration form--->
						</div>
						<!---end left side content-->
						<!--start right side content-->
						<div class="pull-right">
							<img src="img/live.png" alt="" width="400px" height="350px" style="margin-right:30px;">
						</div>
						<!--end right side content--->
				</div>
				<!--end tab content--->
			</div>
			<!--end panel body---->
		</div>
	</div>
	<!---end live and inrtactive section--->
	<!--strat agenda--->
		<div class="jumbotron">
			<div class="pull-left">
				<img src="img/sideright.png" alt="" width="60px" height="450px">
			</div>
			<img src="img/rahul1.png" alt="" style="margin-left:50px;">
			<div class="pull-right">
				<img src="img/sideleft.png" alt="" width="60px" height="450px">
			</div>
		</div>
	<!--end agenda--->
	<!--start Speakers section--->
	<div class="container">
		<div class="panel">
			<ul class="nav nav-pills">
				<li class="active" id="tabfont"><a href="#" id="tabpills">SPEAKERS</a></li>
			</ul>
			<div class="panel-body">
				<div class="tab-content" style="padding:10px;">
						<div class="center-block">
						<img src="img/about2.png" width="92%" height="15px">
						<span class="material-icons" style="font-size:50px;color:orange;">mic_none</span>
						<br><br>
						</div>
							<div class="row">
								<div class="col-sm-3 text-center spcircle">
									<a href="https://www.linkedin.com">
										<img class="img-circle" src="img/speaker.png" alt="speaker1">
									</a>
									<p class="text-center">Manvender singh</p>
									<p class="text-center">Founder, upX Academy</p>
								</div>
								<div class="col-sm-3 text-center spcircle">
									<a href="https://www.linkedin.com">
										<img class="img-circle" src="img/speaker.png" alt="speaker2">
									</a>
									<p class="text-center">Sandeep Tampala</p>
									<p class="text-center">Data Scientist, Twitter</p>
								</div>
								<div class="col-sm-3 text-center spcircle">
									<a href="https://www.linkedin.com">
										<img class="img-circle" src="img/speaker.png" alt="speaker3">
									</a>
									<p class="text-center">Manvender singh</p>
									<p class="text-center">Founder, upX Academy</p>
								</div>
								<div class="col-sm-3 text-center spcircle">
									<a href="https://www.linkedin.com">
										<img class="img-circle" src="img/speaker.png" alt="speaker4">
									</a>
									<p class="text-center">Manvender singh</p>
									<p class="text-center">Founder, upX Academy</p>
								</div>
							</div>
				</div>
			</div>
		</div>
	</div>
	<!--end speakers section--->
	<!--start session section--->
	<div class="container">
		<div class="panel">
			<ul class="nav nav-pills">
				<li class="active" id="tabfont"><a href="#" id="tabpills">SESSIONS</a></li>
			</ul>
			<div class="panle-body" id="panelsession">
				<div class="tab-content" style="padding:10px;">
						<img src="img/about2.png" width="90%" height="15px">
						<img src="img/cal.png" alt="" width="5%" height="30px;">
					<div class="row" style="margin-top:35px; margin-bottom:25px;">
						<div class="col-sm-4 text-center">
							<img src="img/cal2.png" alt="" width="180px" height="180px">
						</div>
						<div class="col-sm-4 text-center">
							<img src="img/cal2.png" alt="" width="180px" height="180px">
						</div>
						<div class="col-sm-4 text-center">
							<img src="img/cal2.png" alt="" width="180px" height="180px">
						</div>
					</div>
					<div class="row" style="margin-top:35px;margin-bottom:25px;">
						<div class="col-sm-4 text-center">
							<img src="img/cal2.png" alt="" width="180px" height="180px">
						</div>
						<div class="col-sm-4 text-center">
							<img src="img/cal2.png" alt="" width="180px" height="180px">
						</div>
						<div class="col-sm-4 text-center">
							<img src="img/cal2.png" alt="" width="180px" height="180px">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!---end session section--->
	<!--start about us---->
	<div class="container">
		<div class="panel">
			<ul class="nav nav-pills">
				<li class="active" id="tabfont"><a href="#" id="tabpills">ABOUT US</a></li>
			</ul>
			<div class="panel-body">
				<div class="tab-content" style="padding:10px;">
						<img src="img/about2.png" width="90%" height="15px"><img src="img/about.png" alt="" width="10%" height="50px">
						<br><br>
						<p>In this digital era, the right data tools have the power to transform businesses by giving them a definitive edge. Powered and promoted by Tech Mahindra,
						one of the foremost names in Information Technology today, UpX is a world class education venture for Big Data professionals. We recognize both the
						challenge and opportunity, and are committed to educating and empowering professionals through transformational courses.
						</p>
				</div>
			</div>
		</div>
	</div>
	<!---end about us---->
	<!---start our courses--->
	<div class="container">
		<img src="img/course.png" alt="course" width="100%" height="30px">
		<br><br>
		<div class="pull-left text-center" style="background-color:#F2A83F;width:570px;">
			<h2 style="color:white">BIG DATA</h2>
			<hr>
			<p class="courselink"><a href="http://www.upxacademy.com" class="sublink">HADOOP</a></p>
			<p class="courselink"><a href="http://www.upxacademy.com" class="sublink">APACHE SPARK</a></p>
			<p class="courselink"><a href="http://www.upxacademy.com" class="sublink">MANGO DB</a></p>
			<button class="btn" src="#" id="btn1">KNOW MORE</button>
		</div>
		<div class="pull-right text-center" style="background-color:#293D3E;width:570px;">
			<h2 style="color:white">DATA SCIENCE</h2>
			<hr>
			<p class="courselink"><a href="http://www.upxacademy.com" class="sublink">DATA ANALYTICS</a></p>
			<p class="courselink"><a href="http://www.upxacademy.com" class="sublink">MACHINE LEARNING</a></p>
			<p class="courselink"><a href="http://www.upxacademy.com" class="sublink">TABLEAU</a></p>
			<button class="btn" src="#" id="btn2">KNOW MORE</button>
		</div>
	</div>
	<!---end our courses--->
	<!--start footer--->
	<footer>
		<div class="container-fluid bg-4">
				<p class="text-left" style="margin-left:100px;">www.upxacademy.com</p>
				<p class="text-left" style="margin-left:100px;">Email: info@upxacademy.com</p>
			<p class="text-center"><span class="glyphicon glyphicon-copyright-mark"></span> 2016 Upx. All rights Reserved</p>
		</div>
	</footer>
	<!---end footer--->
</body>
</html>

