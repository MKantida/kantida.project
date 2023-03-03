<?php 

  $order=1;

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Project Kantida</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>



  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="index.php" class="logo">Project Kantida</a></h1> <!-- หัวข้อ หรือ ชื่อมหาลัย -->
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php"><span class="fa fa-home mr-3"></span> Homepage</a>
          </li>
          <li>
              <a href="list.php"><span class="fa fa-user mr-3"></span> รายชื่อรับนักเรียน</a>
          </li>
          <li>
              <a href="add.php"><span class="fa fa-user-plus mr-3"></span> เพิ่มข้อมูลนักเรียน</a>
          </li>
          <li>
              <a href="examine.php"><span class="fa fa-id-card mr-3"></span> ตรวจสอบรายชื่อ</a>
          </li>
          <li>
              <a href="history.php"><span class="fa fa-id-card mr-3"></span> ประวัติการรับนักเรียน</a>
          </li>
          <!--<li>
              <a href="#"><span class="fa fa-sign-out mr-3"></span> ออกจากระบบ</a>
          </li>-->
        </ul>

    	</nav>

        <!-- Page Content  -->

        



      <div id="content" class="p-4 p-md-5 pt-5">

        <body>
          <div class="container">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8"><h2>ประวัติการรับนักเรียน</h2></div>
                            <div class="col-sm-4">
                                <div class="search-box">
                                    <i class="material-icons">&#xE8B6;</i>
                                    <input type="text" class="form-control" placeholder="Search&hellip;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php

include('connect.php');
$query = "SELECT * FROM licenseplate" or die("Error:" . mysqli_error ()); 
$result = mysqli_query($con, $query); 

echo "<table class='table table-striped table-hover table-bordered'>";

echo "<tr >
        <th>ลำดับ</th>
        <th>รหัสนักเรียน</th>
        <th>ชื่อนักเรียน</th>

        <th>เลขทะเบียนรถ</th>
        <th>จัดการ</th>
      </tr>";
    
while($row = mysqli_fetch_array($result)) { 

  echo "<tr>";
  echo "<td>" .$order++.  "</td> ";
  echo "<td align='center'>" .$row["idnumber"] .  "</td> "; 
  ##echo "<td align='center'>"."<img src='fileupload/".$row["fileupload"]."' width='60'>"."</td>";
  echo "<td>" .$row["namestudent"] .  "</td> ";

  ##echo "<td align='center'>"."<img src='carpicture/".$row["carpicture"]."' width='40'>"."</td>";
  echo "<td>" .$row["carnumber"] .  "</td> ";
  echo "<td align='center' >
  <a href='history_show.php?idnumber=$row[0]'><i style='font-size:20px; color:#2646FB' class='material-icons'>&#xE417;</i></a>
  
  </td> ";

  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>

                    
                </div>
            </div>        
        </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>