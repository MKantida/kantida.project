<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$fileupload = $_POST['fileupload']; //รับค่าไฟล์จากฟอร์ม
$carpicture = $_POST['carpicture']; //รับค่าไฟล์จากฟอร์ม		

//ฟังก์ชั่นวันที่
    date_default_timezone_set('Asia/Bangkok');
	$date = date("Ymd");	
//ฟังก์ชั่นสุ่มตัวเลข
         $numrand = (mt_rand());
//เพิ่มไฟล์
$upload=$_FILES['fileupload'];
$idnumber=$_POST['idnumber'];
$namestudent=$_POST['namestudent'];
$nameparent=$_POST['nameparent'];
$phonenumber=$_POST['phonenumber'];
$carnumber=$_POST['carnumber'];
$upload2=$_FILES['carpicture'];

if($upload !='') {   //not select file
        //โฟลเดอร์ที่จะ upload file เข้าไป 
        $path="images/fileupload/";  

        //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
        $type = strrchr($_FILES['fileupload']['name'],".");
            
        //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
        $newname = $date.$numrand.$type;
        $path_copy=$path.$newname;
        $path_link="images/fileupload/".$newname;

        //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
        move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}

    if($upload2 !='') {   //not select file
        //โฟลเดอร์ที่จะ upload file เข้าไป 
        $path="images/carpicture/";  

        //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
        $type = strrchr($_FILES['carpicture']['name'],".");
            
        //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
        $newnamecar = $date.$numrand.$type;
        $path_copy=$path.$newnamecar;
        $path_link="images/carpicture/".$newnamecar;

        //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
        move_uploaded_file($_FILES['carpicture']['tmp_name'],$path_copy);  	
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
		$sql = "INSERT INTO uploadfile (fileupload, idnumber, namestudent, 
                                        nameparent, phonenumber, carnumber, carpicture) 
		                        VALUES('$newname', '$idnumber', '$namestudent', 
                                       '$nameparent', '$phonenumber', '$carnumber', '$newnamecar')";
		
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	// javascript แสดงการ upload file
	





	if($result){
            echo "<script type='text/javascript'>";

            echo "window.location = 'add.php'; ";
            echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to upload again');";
    echo "window.location = 'add.php'; ";
	echo "</script>";
}
?>