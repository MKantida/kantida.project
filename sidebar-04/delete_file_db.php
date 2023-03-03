<?php
require('connect.php');

$idnumber = $_GET["idnumber"];

$sql = "DELETE FROM uploadfile WHERE idnumber = $idnumber";

$result = mysqli_query($con, $sql);

if($result){
    echo "<script type='text/javascript'>";
            echo "alert('ลบข้อมูลสำเร็จ');";
            echo "window.location = 'examine.php'; ";
            echo "</script>";
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}

?>