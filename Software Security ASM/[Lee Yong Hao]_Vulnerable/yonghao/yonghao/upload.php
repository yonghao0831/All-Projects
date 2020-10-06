<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
<html>
<head>
<title>Eastern Tales</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<link rel="stylesheet" href="style.css" type="text/css" media="screen" >
</head>
<body id="pagetop" >
    
<div class="pagewrap">
  <div class="wrap">
      <div class="content">
          <div class="topwrap">
              <div id="search">
                
                  <div class="clearpara"></div>
              </div>
              <div id="menu">
                  <ul>
                    <div class="form-wrapper"> 
                        <center><h3>Welcome: <?php echo $row['fullname']; ?> </h3></center>
                         
                    </div>
                      <li class="on"><a href="index.php" accesskey="h" id="home"> <em>H</em>ome </a> </li>
                      <li class="off"> <a href="search.php" accesskey="S" id="earch"> <em>S</em>earch</a> </li>
                      <li class="off"><a href="upload.php" accesskey="Upload" id="Upload Picture"> <em>Upload</em> Picture </a> </li>
                      <li class="nav-link"><a href="uploads" accesskey="My" id="My Picture" target="_blank"> <em>My</em> Picture </a> </li>
                      <li class="off"><a href="logout.php" accesskey="l" id="logout"> <em>L</em>ogout </a> </li>
                  </ul>
                  <p class="clearpara"></p>
                  <!--/menu-->
              </div>
              <p class="clearpara"></p>
              <!--/topwrap-->
          </div>
          <a href="#" class="rssicon"> RSS</a>

              <h4>You can save your image on our server!</h4>
          <div>
          <form enctype="multipart/form-data" action="#" method="POST">
			<input type="hidden" name="MAX_FILE_SIZE" value="100000">
			Choose an image to upload:<br><br>
			<input name="uploaded" type="file"><br>
			<br>
			<input type="submit" name="Upload" value="Upload">
      </div>
  </div>
</div>
<?php



   //////////////////This is not secure upload//////////////////////////////

    if( isset( $_POST[ 'Upload' ] ) ) {
       //Where are we going to be writing to?
      $target_path  =  "uploads/";
      $target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );
  
      
    $filename = $_FILES['uploaded']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
      move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path);
      echo 'Image succesfully uploaded!';
  

  
    }



  ?>
  
</body>
</html>