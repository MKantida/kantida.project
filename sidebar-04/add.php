<!doctype html>
<html lang="en">
  <head>
  	<title>Project Kantida</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

    

  
    
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
          <div class="wrapper">
        </body>
        <br>
        <div class="col-sm-8"><h4>เพิ่มข้อมูลนักเรียน</h4></div>
          <div class="content-wrapper">
           <section class="content">
               <div class="container-fluid">
                   <div class="col-12">
                       <div class="card">
                           <div class="card-body">
                           <form action="add_file_db.php" method="post" enctype="multipart/form-data" name="upfile" 
                                                                             id="upfile">
                              <div class="row ">
                                    <div class="col-sm-8">
                                            <div class="form-group">
                                            <input type="hidden" name="fileupload2"value="<?php echo $row["fileupload"] ?>">
                                              <label>รูปนักเรียน : </label>
                                              <input class="form-control" type="file"  name="fileupload" id="fileupload">
                                            </div>
                                    </div>
                                    <div class="col-sm-8">
                                          <div class="form-group">
                                              <label>ชื่อ-นามสกุล(นักเรียน) : </label>
                                              <input class="form-control" type="text" name="namestudent" id="namestudent">
                                          </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="form-group">
                                              <label>เลขประจำตัวนักเรียน : </label>
                                              <input class="form-control" type="text"  name="idnumber" id="idnumber">
                                            </div>
                                    </div>
                                    <div class="col-sm-8">
                                          <div class="form-group">
                                              <label>ชื่อ-นามสกุลผู้ปกครอง : </label>
                                              <input class="form-control" type="text" name="nameparent" id="nameparent">
                                          </div>
                                    </div>
                                    <div class="col-sm-4">
                                          <div class="form-group">
                                              <label>เบอร์โทรศัพท์ : </label>
                                              <input class="form-control" type="text" name="phonenumber" id="phonenumber">
                                          </div>
                                    </div>
                                    <div class="col-sm-8">
                                          <div class="form-group">
                                              <label>รูปป้ายทะเบียนรถ : </label>
                                              <input class="form-control" type="file" name="carpicture" id="carpicture">
                                          </div>
                                    </div>
                                    <div class="col-sm-4">
                                          <div class="form-group">
                                              <label>เลขทะเบียนรถ : </label>
                                              <input class="form-control" type="text" name="carnumber" id="carnumber">
                                          </div>
                                    </div>

                                    </div>
                                </div>

                                      <br>
                                      <input type="submit" class="btn btn-block btn-outline-success btn-flat" 
                                      value="บันทึก">  
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </div>
      </div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>