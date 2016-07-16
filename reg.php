<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["ph"])) {
    $phone = "Phone is required";
  } else {
    $ph = test_input($_POST["ph"]);
  }

 
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="lib/css/bootstrap.min.css" rel="stylesheet">	
   
   <style>
   	.error{color: #FF0000}
   </style>
   
   </head>

  <body>

  	
	<nav class="navbar navbar-default" style="background-color: blue">
  		<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Home</a>
    	</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Profile<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Logout</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Application</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<ol class="breadcrumb">
 		 <li><a href="#">Home</a></li>
  		<li><a href="#">Registration</a></li>
  		<li class="active">Data</li>
	</ol>
  
    <div class="container-fluid"	>
	<div class="row	">
		<div>

			<h1 class="text-center">
				Create an account
			</h1>
			<p class="text-center" style="font-size: 18px">It's free and always will be</p>
			<form role="form" action="reg.php" method="post">
				<div class="form-group">
					<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-offset-4 col-lg-4">
					 
					<label for="exampleInputEmail1" >
						Name
					</label>	
					<input class="form-control" id="name" type="text" name="name"> 
					<span class="error">* <?php echo $nameErr;?></span>
				</div>
				<div class="form-group">
					<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-offset-4 col-lg-4">
					 
					<label for="exampleInputEmail2" >
						Phone No.
					</label>
					<input type="text" name="ph" class="form-control">
					<span class="error">* <?php echo $phone;?></span>
					</div>
					</div>
				</div >
				<div class="form-group">
				<div class="row">
				<div class="col-lg-offset-4 col-lg-4">
					<label>
						Gender 
					</label>
					&nbsp;
					<input type="radio" name="gen" value="male" />Male
					<input type="radio" name="gen" value="female" />Female
					 
				</div>
				</div>
				</div> 
				<div class="form-group">
					<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-offset-4 col-lg-4">
					 
					<label for="exampleInputEmail1" >
						Email address
					</label>
					<input class="form-control" id="exampleInputEmail1" type="email" name="email" >
					<span class="error">* <?php echo $emailErr;?></span>
				</div>
					</div></div>
				<div class="form-group">
					<div class="row">
					 <div class="col-sm-12 col-md-12 col-lg-offset-4 col-lg-4">
					<label for="exampleInputPassword1">
						Password
					</label>
					<input class="form-control" id="exampleInputPassword1" type="password" name="pass">
				</div></div></div>
				<div class="form-group">
				<div class="checkbox">
				<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-offset-4 col-lg-4">	 
					<label>
						<input type="checkbox"> Check me out 
					</label>
				</div> 
				</div>
				</div>
				<div class="row"><div class="col-sm-12 col-md-12 col-lg-offset-4 col-lg-4">
			<input type="submit" name="sub" value="Submit"/>
		</div></div>
			</form>
		</div>
	</div>
</div>

    <script src="lib/js/jquery.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <!-- <script src="js/scripts.js"></script> -->
  
 </body>
</html>
