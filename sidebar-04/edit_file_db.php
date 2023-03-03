<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//$fileupload = $_POST['fileupload']; //รับค่าไฟล์จากฟอร์ม
//$carpicture = $_POST['carpicture']; //รับค่าไฟล์จากฟอร์ม		

//echo '<pre>';
//print_r($_POST);
//echo '<pre>';
//exit();

//ฟังก์ชั่นวันที่
    date_default_timezone_set('Asia/Bangkok');
	$date = date("Ymd");	
//ฟังก์ชั่นสุ่มตัวเลข
         $numrand = (mt_rand());
//เพิ่มไฟล์

$idnumber=$_POST['idnumber'];
$namestudent=$_POST['namestudent'];
$nameparent=$_POST['nameparent'];
$phonenumber=$_POST['phonenumber'];
$carnumber=$_POST['carnumber'];
$fileupload2=$_POST['fileupload2'];
$carpicture2=$_POST['carpicture2'];


$fileupload=(isset($_POST['fileupload']) ? $_POST['fileupload'] : '');
$upload=$_FILES['fileupload']['name'];
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
	}else{
        $newname=$fileupload2;
    }


    $carpicture=(isset($_POST['carpicture']) ? $_POST['carpicture'] : '');
    $uploadd=$_FILES['carpicture']['name'];
    if($uploadd !='') {   //not select file
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
	}else{
        $newnamecar=$carpicture2;
    }




	// แก้ไขไฟล์เข้าไปในตาราง uploadfile
        $sql = "UPDATE uploadfile SET fileupload='$newname', namestudent='$namestudent', nameparent='$nameparent',
                                      phonenumber='$phonenumber', carnumber='$carnumber', carpicture='$newnamecar'
        WHERE idnumber=$idnumber ";
		
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
    //echo '<pre>';
    //echo $sql;
   // echo '<pre>';
    //exit;



	mysqli_close($con);
	// javascript แสดงการ upload file
	

	if($result){
            echo "<script type='text/javascript'>";

            echo "window.location = 'examine.php'; ";
            echo "</script>";
	}
	else{

    echo "window.location = 'examine.php'; ";
	
}
?>