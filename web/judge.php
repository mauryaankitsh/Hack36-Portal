<?php 
   require('inc/config.php');
?>

<html>
<head>
    <title>New Judge Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/advertise.css">
    <link rel="stylesheet" type="text/css" href="css/purchase.css">
    <script type="text/javascript">
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

</head>

<body style="background-color:#CCD1D1 ;">

    <style>
    hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
    } 
    </style>
    <nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Hack36</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="adminhome.php">Back</a></li>
        </ul>
        </div>
    </nav>

    <div class="container-fluid bg">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
		<div class="col-md-4 col-sm-4 col-xs-12">
        <form action='judge.php' method="post" class="form-container">
        <h1>Judge Details</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Judge Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Judge Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputName">Contact Number</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number" required>
        </div>
        <div class="form-group">
            <label for="exampleInputName">Email ID</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="judge@mail.com" required>
        </div>
        <div class="form-group">
            <label for="exampleInputID">Year </label>
            <input type="number" class="form-control" id="year" name="year" placeholder="YYYY" required>
        </div>
        <div class="form-group">
            <label for="exampleInputID">Profile Link</label>
            <input type="text" class="form-control" id="profile" name="profile" placeholder="judge@linkedin" required>
        </div>
        <br>
        <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success btn-block">
        <br>
       </form>
       </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
	</div>
    </div>

    <?php

    if(isset($_POST['submit'])){
    $name = mysqli_escape_string($db,$_POST['name']) ;
    $contact = mysqli_escape_string($db,$_POST['contact']);
    $email = mysqli_escape_string($db,$_POST['email']);
    $year = mysqli_escape_string($db,$_POST['year']);
    $profile = mysqli_escape_string($db,$_POST['profile']);
    $query = "INSERT INTO judge(name,contact,email,profile,year) VALUES ('$name','$contact','$email','$profile','$year')";

    $result = mysqli_query($db,$query);
    
    if($result){
        echo "<script type='text/javascript'>alert('Submitted Successfully!!! ')</script>";
    }
    else{
    echo "<script type='text/javascript'>alert('Operation Failed. Please try again')</script>"; 
    }
    }
?>
</body>
</html>