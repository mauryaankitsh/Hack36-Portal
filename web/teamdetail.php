<?php
require('inc/config.php');

?>

<head>
	<title>Team Details</title>
	<link rel="stylesheet" type="text/css" href="css1/home.css">
  <link rel="stylesheet" type="text/css" href="css1/footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
<style type="text/css">
	.tp1{
  color: white;
  font-size: 80px;
  margin-top: 200px;
}
.column {
  float: left;
  margin: 5px;
  width: 20%;
  text-align: center;
  padding: 2px;
  height: 50px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.tp2{
    color: white;
  font-size: 15px;
  margin-top: 50px;
}
.column1 {
  float: middle;
  width: 100%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}
</style>
<body>
      <header>
    <div class="row">

      <h3 style="float: center; padding-left: 35px; text-align:center;color: white; font-size: 40px;font-weight: bold;">Hack36</h3>  
        
      <ul class="main-nav">
        <!-- <li><a href="showallteam.php">All Teams</a></li> -->
        <li><a href="hack36data.php">Back</a></li>
        <li>
          <form style="background-color:#33afff;" action="teamdetail.php" method="post">
          <h4>Enter Year</h4>
          <input type="number" name="year" placeholder="Enter year">
          <input type="submit" value="All Teams" name="allteams">
          </form> 
        </li>
      </ul>
    </div>
  <div class="container-fluid bg">
  <div class="column1">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
    <form action='teamdetail.php' method="post" class="tp2">
  <h3>What Team Detail Would You Like?</h3>
  <div class="form-group">
    <h5>College Name</h5>
    <input type="text" class="form-control" id="name" name="cname" placeholder="Enter college name" required>
  </div>
 
  
 <!-- <div class="form-group">
    <h4>Gender</h4>
    <div class="form-group">
      <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="female">Female
</div>
   
  </div>-->

 <br>
  <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success btn-block">
  <br>
</form>
    </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
  </div>
</div>



<?php
   
   if(isset($_POST['submit']))
   {
     $cname = mysqli_escape_string($db,$_POST['cname']);
     //$gender = mysqli_escape_string($db,$_POST['gender']);?>
    <style type="text/css">
    body {
      font-size: 15px;
      color: #343d44;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      padding: 0;
      margin: 0;
    }
    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;
    }

    h1 {
      color:red;
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 50px;
    }

    table td {
      transition: all .5s;
    }
    
    /* Table */
    .data-table {
      border-collapse: collapse;
      font-size: 14px;
      min-width: 537px;
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #e1edff;
      padding: 7px 17px;
    }
    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #508abb;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    /* Table Body */
    .data-table tbody td {
      color: #353535;
    }
    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align: right;
    }

    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .data-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
    }

    /* Table Footer */
    .data-table tfoot th {
      background-color: #e5f5ff;
      text-align: right;
    }
    .data-table tfoot th:first-child {
      text-align: left;
    }
    .data-table tbody td:empty
    {
      background-color: #ffcccc;
    }
  </style>
</head>
<body  >

  <!-- <h1>Table 1</h1> -->
  <table class="data-table"  style="margin-bottom:100px">
    <h1><strong>Team Details</strong></h1>
    <thead>
      <tr>
        <th>S.No.</th>
        <th>TEAM NAME</th>
        <th>PROJECT NAME</th>
        <th>MEMBERS</th>
        <th>GITHUB LINK</th>
                <th>YEAR</th>

                
      </tr>
    </thead>
    <tbody>
 <?php
     if(isset($_POST['cname']))
     {
          
          $query = "SELECT * FROM team where college='$cname' ";
$result = mysqli_query($db,$query);
 $i=1;
while ($row = mysqli_fetch_assoc($result)) {
    $name = $row["tname"];
    $project = $row["pid"];
    $tid=$row["tid"];
    $pgithub=$row["pgithub"];
    
    $query2="SELECT pid From teammember where tid='$tid'";
    $result2=mysqli_query($db,$query2);
    $query4="SELECT pname From project where pid='$project'";
    $result4=mysqli_query($db,$query4);
    $row5=mysqli_fetch_assoc($result4);
    $q="SELECT mname from member where tid='$tid'";
    $res=mysqli_query($db,$q);
    ?>

    <tr><td><?php echo $i ?></td>
      <td><?php echo $row['tname'] ?></td>
      <td><?php echo $row5['pname']?></td>
      <td><table class="data-table1" style="width: 20px;"><tbody>
        <?php
          while($row9=mysqli_fetch_assoc($res)){

            ?>
            <tr><td><?php  echo $row9['mname'] ?></td></tr>


            <?php
          }
        ?>
    
      </tbody></table></td>
      <td><?php echo $pgithub ?></td>
      <td><?php echo $row['year'] ?></td></tr>

      </tbody>
     <!-- echo '<tr>
          <td>'.$i.'</td>
          <td>'.$row['tname'].'</td>
          <td> '.$row5['pname'].' </td>
          <td>'.' <table class="data-table">
            <tbody>'
            while($row1=mysqli_fetch_assoc($res)){
            echo '<tr> <td>'.$row1['mname'].'</td></tr>';} 
            .'</td>'
          '<td> '.$pgithub.' </td>
          <td> '.$row['year'].' </td>

          </tr>';
          $i=$i+1;
 -->
<?php 
$i=$i+1;} 
     }
    }
?>
</table>


<?php
if(isset($_POST['allteams']))
{
  if(!isset($_POST['year']) || empty($_POST['year'])) {
    echo "<script type='text/javascript'>alert('Please enter year first')</script>";
  }
  else{
    $id=$_POST['year'];
    $_SESSION['qyear'] = $id;
    header("Location: showallteam.php");
  }
}
?>

</header>
</body>