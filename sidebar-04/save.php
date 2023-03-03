<meta charset="utf-8">
<?php 
include("connect.php");

//print_r($_POST);

 	//save workin
 	if(isset($_POST["workin"])){

		 	$workdate = date('Y-m-d');
			//$idnumber	 = mysqli_real_escape_string($con,$_POST["idnumber"]);
			$idnumber=$_POST['idnumber'];
			$namestudent=$_POST['namestudent'];
			$workin = mysqli_real_escape_string($con,$_POST["workin"]);


			$sql = "INSERT INTO `licenseplate` (workdate, idnumber, namestudent, workin) 
									VALUES('$workdate', '$idnumber', '$namestudent', '$workin')";
			$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

					mysqli_close($con);
					if($result){
					echo "<script type='text/javascript'>";

					echo "window.location = 'list.php'; ";
					echo "</script>";	
					}else{
					echo "<script type='text/javascript'>";
					echo "alert('Error');";
					echo "window.location = 'list.php'; ";
					echo "</script>";
					}

	
 	//save workout			
}elseif(isset($_POST["workout"])) {

	// echo $_POST["workout"];
	
	// exit;
	
	$workdate = date('Y-m-d');
	//$idnumber	 = mysqli_real_escape_string($con,$_POST["idnumber"]);
	$idnumber=$_POST['idnumber'];
	$workout = mysqli_real_escape_string($con,$_POST["workout"]);
	
	   $sql2 = "UPDATE licenseplate SET 
	   workout='$workout'
	   WHERE idnumber=$idnumber  AND workdate='$workdate'
	   ";
	   $result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error($con));
	
	   // echo $sql2;
	   // exit;
	
	   mysqli_close($con);
	   if($result2){
	   echo "<script type='text/javascript'>";
	
	   echo "window.location = 'list.php'; ";
	   echo "</script>";	
	   }else{
	   echo "<script type='text/javascript'>";
	   echo "alert('Error');";
	   echo "window.location = 'list.php'; ";
	   echo "</script>";
	   }
	
	//save workout			
	}
	else{
		echo "<script type='text/javascript'>";

	   echo "window.location = 'list.php'; ";
	   echo "</script>";
}
 		 
 	 
?>
