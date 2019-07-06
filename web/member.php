<?php 
   require('inc/config.php');
?>


<!DOCTYPE html>
<html>
<head>
  <title>New Team Details</title>
  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/advertise.css">
    <link rel="stylesheet" type="text/css" href="css/purchase.css">
<script type="text/javascript">
$(document).ready(function(){
  $("div.red").hide();
  $("div.green").hide();
  $("div.blue").hide();
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body style="background-color:#CCD1D1 ;"><!--##212F3C  #5D6D7E -->
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
  <!-- <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">MNNIT Allahabad</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="teams.php">Teams</a></li>
        <li><a href="bought_products.php">Projects</a></li>
        <li><a href="sponsors.php">Sponsors</a></li>
            <li><a href="winners.php">Winners</a></li>
            <li><a href="mentors.php">Mentor Teachers</a></li>
            <li><a href="expenditure.php">Expenditure</a></li>
        <li class="dropdown"><a href="purchase.php" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['email']; ?><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="change_password.php">Change Password</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        </li>
      </ul>
    </div>
</nav> -->
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
      <h3>Choose Team Size </h3>
  <div>
        <label><input type="radio" name="colorRadio" value="red" > <strong>4</strong> </label>
        <label><input type="radio" name="colorRadio" value="green"> <strong>3</strong></label>
        <label><input type="radio" name="colorRadio" value="blue"><strong>2</strong></label>
    </div>

  
    <div class="red box">
      <form action='member.php' method="post" class="form-container">
  <h1><u>Team Details</u></h1>
 <div class="form-group">
    <label for="exampleInputTeamname">Team Name</label>
    <input type="text" class="form-control" id="tname" name="tname" placeholder="Team Name" required>
  </div>
 <div class="form-group">
    <label for="exampleInputProject">Project Theme</label>
    <input type="text" class="form-control" id="pname" name="pname" placeholder="Project Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputProject">College</label>
    <input type="text" class="form-control" id="college" name="college" placeholder="College Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputProject">GitHub Link </label>
    <input type="text" class="form-control" id="pgithub" name="pgithub" placeholder="Github Link Of Project" required>
  </div>
  <div class="form-group">
    <label for="exampleInputProject">Year</label>
    <input type="text" class="form-control" id="year" name="year" placeholder="YYYY" required>
  </div>
  <hr>
  <br>
       <h3><u>Member 1 Details</u></h3>
  <div class="form-group">
    <label for="exampleInputName">Member 1 Name</label>
    <input type="text" class="form-control" id="name1" name="name1" placeholder="Full Name" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Member 1 Email address</label>
    <input type="email" class="form-control" id="email1" name="email1" placeholder="Email" required>
  </div>

  
<div class="form-group">
    <label for="exampleInputEmail1">Member 1 github link</label>
    <input type="text" class="form-control" id="git1" name="git1" placeholder=" GitHub Link" required>
  </div>

<hr>
  <h3><u>Member 2 Details</u></h3>
  <div class="form-group">
    <label for="exampleInputName">Member 2 Name</label>
    <input type="text" class="form-control" id="name2" name="name2" placeholder="Full Name" required>
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Member 2 Email address</label>
    <input type="email" class="form-control" id="email2" name="email2" placeholder="Email" required>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Member 2 github link</label>
    <input type="text" class="form-control" id="git2" name="git2" placeholder=" GitHub Link" required>
  </div>

  <hr>
  <h3><u>Member 3 Details</u></h3>
<div class="form-group">
  <div class="form-group">
    <label for="exampleInputName">Member 3 Name</label>
    <input type="text" class="form-control" id="name3" name="name3" placeholder="Full Name" required>
  </div>

    <label for="exampleInputEmail1">Member 3 Email address</label>
    <input type="email" class="form-control" id="email3" name="email3" placeholder="Email" required>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Member 3 github link</label>
    <input type="text" class="form-control" id="git3" name="git3" placeholder=" GitHub Link" required>
  </div>

  <hr>
  <h3><u>Member 4 Details</u></h3>
  <div class="form-group">
    <label for="exampleInputName">Member 4 Name</label>
    <input type="text" class="form-control" id="name4" name="name4" placeholder="Full Name" required>
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Member 4 Email address</label>
    <input type="email" class="form-control" id="email4" name="email4" placeholder="Email" required>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Member 4 github link</label>
    <input type="text" class="form-control" id="git4" name="git4" placeholder=" GitHub Link" required>
  </div>

 <br>
  <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success btn-block">
  <br>
  </form>

    </div>
    <div class="green box">
      <form action='member.php' method="post" class="form-container">
  <h1><u>Team Details</u></h1>
 <div class="form-group">
    <label for="exampleInputTeamname">Team Name</label>
    <input type="text" class="form-control" id="tname" name="tname" placeholder="Team Name" required>
  </div>
 <div class="form-group">
    <label for="exampleInputProject">Project Name</label>
    <input type="text" class="form-control" id="pname" name="pname" placeholder="Project Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputProject">College</label>
    <input type="text" class="form-control" id="college" name="college" placeholder="College Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputProject">GitHub Link </label>
    <input type="text" class="form-control" id="pgithub" name="pgithub" placeholder="Github Link Of Project" required>
  </div>
  <div class="form-group">
    <label for="exampleInputProject">Year</label>
    <input type="text" class="form-control" id="year" name="year" placeholder="YYYY" required>
  </div>
  <hr>
  <br>
      
<hr>
<h3><u>Member 1 Details</u></h3>
  <div class="form-group">
    <label for="exampleInputName">Member 1 Name</label>
    <input type="text" class="form-control" id="name1" name="name1" placeholder="Full Name" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Member 1 Email address</label>
    <input type="email" class="form-control" id="email1" name="email1" placeholder="Email" required>
  </div>

  
<div class="form-group">
    <label for="exampleInputEmail1">Member 1 github link</label>
    <input type="text" class="form-control" id="git1" name="git1" placeholder=" GitHub Link" required>
  </div>

  <h3><u>Member 2 Details</u></h3>
  <div class="form-group">
    <label for="exampleInputName">Member 2 Name</label>
    <input type="text" class="form-control" id="name2" name="name2" placeholder="Full Name" required>
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Member 2 Email address</label>
    <input type="email" class="form-control" id="email2" name="email2" placeholder="Email" required>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Member 2 github link</label>
    <input type="text" class="form-control" id="git2" name="git2" placeholder=" GitHub Link" required>
  </div>

<hr>
  <h3><u>Member 3 Details</u></h3>
<div class="form-group">
  <div class="form-group">
    <label for="exampleInputName">Member 3 Name</label>
    <input type="text" class="form-control" id="name3" name="name3" placeholder="Full Name" required>
  </div>

    <label for="exampleInputEmail1">Member 3 Email address</label>
    <input type="email" class="form-control" id="email3" name="email3" placeholder="Email" required>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Member 3 github link</label>
    <input type="text" class="form-control" id="git3" name="git3" placeholder=" GitHub Link" required>
  </div>

  <hr>
 <br>
  <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success btn-block">
  <br>
</form>
    </div>
    
    <div class="blue box">

      <form action='member.php' method="post" class="form-container">
  <h1><u>Team Details</u></h1>
 <div class="form-group">
    <label for="exampleInputTeamname">Team Name</label>
    <input type="text" class="form-control" id="tname" name="tname" placeholder="Team Name" required>
  </div>
 <div class="form-group">
    <label for="exampleInputProject">Project Name</label>
    <input type="text" class="form-control" id="pname" name="pname" placeholder="Project Name" required>

  </div>
  <div class="form-group">
    <label for="exampleInputProject">College</label>
    <input type="text" class="form-control" id="college" name="college" placeholder="College Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputProject">GitHub Link </label>
    <input type="text" class="form-control" id="pgithub" name="pgithub" placeholder="Github Link Of Project" required>
  </div>
  <div class="form-group">
    <label for="exampleInputProject">Year</label>
    <input type="text" class="form-control" id="year" name="year" placeholder="YYYY" required>
  </div>
  <hr>
  <br>
      
<hr>
<h3><u>Member 1 Details</u></h3>
  <div class="form-group">
    <label for="exampleInputName">Member 1 Name</label>
    <input type="text" class="form-control" id="name1" name="name1" placeholder="Full Name" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Member 1 Email address</label>
    <input type="email" class="form-control" id="email1" name="email1" placeholder="Email" required>
  </div>

  
<div class="form-group">
    <label for="exampleInputEmail1">Member 1 github link</label>
    <input type="text" class="form-control" id="git1" name="git1" placeholder=" GitHub Link" required>
  </div>

  <h3><u>Member 2 Details</u></h3>
  <div class="form-group">
    <label for="exampleInputName">Member 2 Name</label>
    <input type="text" class="form-control" id="name2" name="name2" placeholder="Full Name" required>
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Member 2 Email address</label>
    <input type="email" class="form-control" id="email2" name="email2" placeholder="Email" required>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Member 2 github link</label>
    <input type="text" class="form-control" id="git2" name="git2" placeholder=" GitHub Link" required>
  </div>
   <br>
  <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success btn-block">
  <br>
</form>


    </div><br><hr>
 <!--  <h3><u>Member 1 Details</u></h3>
  <div class="form-group">
    <label for="exampleInputName">Member 1 Name</label>
    <input type="text" class="form-control" id="name1" name="name1" placeholder="Full Name" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Member 1 Email address</label>
    <input type="email" class="form-control" id="email1" name="email1" placeholder="Email" required>
  </div>

  
<div class="form-group">
    <label for="exampleInputEmail1">Member 1 github link</label>
    <input type="text" class="form-control" id="git1" name="git1" placeholder=" GitHub Link" required>
  </div> -->
<!-- <hr>
  <h3><u>Member 2 Details</u></h3>
  <div class="form-group">
    <label for="exampleInputName">Member 2 Name</label>
    <input type="text" class="form-control" id="name2" name="name2" placeholder="Full Name" required>
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Member 2 Email address</label>
    <input type="email" class="form-control" id="email2" name="email2" placeholder="Email" required>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Member 2 github link</label>
    <input type="text" class="form-control" id="git2" name="git2" placeholder=" GitHub Link" required>
  </div> -->
  <!-- <hr>
  <h3><u>Member 3 Details</u></h3>
<div class="form-group">
  <div class="form-group">
    <label for="exampleInputName">Member 3 Name</label>
    <input type="text" class="form-control" id="name3" name="name3" placeholder="Full Name" required>
  </div>

    <label for="exampleInputEmail1">Member 3 Email address</label>
    <input type="email" class="form-control" id="email3" name="email3" placeholder="Email" required>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Member 3 github link</label>
    <input type="text" class="form-control" id="git3" name="git3" placeholder=" GitHub Link" required>
  </div> -->
  <!-- <hr>
  <h3><u>Member 4 Details</u></h3>
  <div class="form-group">
    <label for="exampleInputName">Member 4 Name</label>
    <input type="text" class="form-control" id="name4" name="name4" placeholder="Full Name" required>
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Member 4 Email address</label>
    <input type="email" class="form-control" id="email4" name="email4" placeholder="Email" required>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Member 4 github link</label>
    <input type="text" class="form-control" id="git4" name="git4" placeholder=" GitHub Link" required>
  </div> -->
 
  
</form>

            <!--form ends-->
    </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
  </div>
</div>
<?php

if(isset($_POST['submit'])){
  $year=$_POST['year'];
  $college=$_POST['college'];
  $pgithub=$_POST['pgithub'];
  $tname = mysqli_escape_string($db,$_POST['tname']) ;
  $pname = mysqli_escape_string($db,$_POST['pname']);
  $name1 = mysqli_escape_string($db,$_POST['name1']);
  $email1=mysqli_escape_string($db,$_POST['email1']);
  $git1=mysqli_escape_string($db,$_POST['git1']);
  $name2 = mysqli_escape_string($db,$_POST['name2']);
  $email2=mysqli_escape_string($db,$_POST['email2']);
  $git2=mysqli_escape_string($db,$_POST['git2']);
  if(isset($_POST['name4'])){
  $name4 = mysqli_escape_string($db,$_POST['name4']);
  $git4=mysqli_escape_string($db,$_POST['git4']);
  $email4=mysqli_escape_string($db,$_POST['email4']);}
  if(isset($_POST['name3'])){
  $name3 = mysqli_escape_string($db,$_POST['name3']);
  $email3=mysqli_escape_string($db,$_POST['email3']);
  $git3=mysqli_escape_string($db,$_POST['git3']);}
  $query = "INSERT INTO project (pname,year) VALUES ('$pname','$year')";
$r1=mysqli_query($db,$query);
   $q2="SELECT pid from project where pname='$pname' and year='$year'";
  
   $r2=mysqli_query($db,$q2);
   $row1=mysqli_fetch_assoc($r2);
   $pid=$row1['pid'];
   $q3="INSERT into team (tname,pid,year,college,pgithub) VALUES ('$tname','$pid','$year','$college','$pgithub')";
   $r3=mysqli_query($db,$q3);
  $q4="SELECT tid from team where tname='$tname' and pid='$pid' and year='$year'";
  $r4=mysqli_query($db,$q4);
  $row4=mysqli_fetch_assoc($r4);
  $tid=$row4['tid'];
  $q5="INSERT into member (mname,memail,mgithub,tid,year) VALUES ('$name1','$email1','$git1','$tid','$year')";
  $r5=mysqli_query($db,$q5);
  $q6="SELECT mid from member where memail='$email1'and year='$year'";
  $r6=mysqli_query($db,$q6);
  $row6=mysqli_fetch_assoc($r6);
  $mid1=$row6['mid'];
  $q7="INSERT into teammember VALUES('$tid','$mid1')";
  $r7=mysqli_query($db,$q7);
  $q5="INSERT into member (mname,memail,mgithub,tid,year) VALUES ('$name2','$email2','$git2','$tid','$year')";
  $r5=mysqli_query($db,$q5);
   $q6="SELECT mid from member where memail='$email2'and year='$year'";
  $r6=mysqli_query($db,$q6);
  $row6=mysqli_fetch_assoc($r6);
  $mid2=$row6['mid'];
  $q7="INSERT into teammember VALUES('$tid','$mid2')";
  $r7=mysqli_query($db,$q7);
  if(isset($_POST['name3'])){
  $q5="INSERT into member (mname,memail,mgithub,tid,year) VALUES ('$name3','$email3','$git3','$tid','$year')";
  $r5=mysqli_query($db,$q5);
    $q6="SELECT mid from member where memail='$email3' and year='$year'";
  $r6=mysqli_query($db,$q6);
  $row6=mysqli_fetch_assoc($r6);
  $mid2=$row6['mid'];
  $q7="INSERT into teammember VALUES('$tid','$mid2')";
  $r7=mysqli_query($db,$q7);
}
if(isset($_POST['name4'])){
  $q5="INSERT into member (mname,memail,mgithub,tid,year) VALUES ('$name4','$email4','$git4','$tid','$year')";
  $r5=mysqli_query($db,$q5);
    $q6="SELECT mid from member where memail='$email4'and year='$year'";
  $r6=mysqli_query($db,$q6);
  $row6=mysqli_fetch_assoc($r6);
  $mid2=$row6['mid'];
  $q7="INSERT into teammember VALUES('$tid','$mid2')";
  $r7=mysqli_query($db,$q7);
  }
  if($r5){
    echo "<script type='text/javascript'>alert('Submitted Successfully!!! ')</script>";
  }
  else{
   echo "<script type='text/javascript'>alert('Registration Failed. Please try again')</script>"; 
  }
}
?>
</body>
</html>
