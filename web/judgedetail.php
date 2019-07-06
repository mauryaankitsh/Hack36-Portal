<?php 
   require('inc/config.php');
?>

<?php
// if(isset($_POST['submit']))
// {
//   $id=$_POST['id'];
  
//     $query="UPDATE coordinates set status=1 where cid='$id'";
  
//   $r=mysqli_query($db,$query);
// }
?>

<?php

$sql = 'SELECT * FROM judge';
		
$query = mysqli_query($db, $sql);

?>
<html>
<head>
    <title>Judges Details</title>
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
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
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
<body>

    <nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="home.php">Hack36</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="hack36data.php">Back</a></li>
        </ul>
        </div>
    </nav>

	<!-- <h1>Table 1</h1> -->
	<table class="data-table">
		<h3><caption class="title" style="margin-top:50px">Judges Details</caption></h3>
		<thead>
			<tr>
				<th>ID</th>
                <th>Judge NAME</th>
                <th>CONTACT</th>
                <th>EMAIL ID</th>
				<th>Profile</th>
                <th>YEAR</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['jid'].'</td>
					<td>'.$row['name'].'</td>
                    <td>'.$row['contact']. '</td>
                    <td>'.$row['email']. '</td>
                    <td>'.$row['profile']. '</td>
                    <td>'.$row['year']. '</td>
				</tr>';
		}?>
		</tbody>
    </table>
    
    <!-- <center>
    <br><br>
    <form style="background-color:#33afff;" action="pendingrequest.php" method="post">
    <h4>Enter id to change status</h4>
    <input type="text" name="id" placeholder="Enter id">
    <input type="submit" value="Submit" name="submit">
    </form> 
    </center> -->

</body>
</html>
