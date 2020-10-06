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

              <!-- sql injection start -->

<form action="" method="POST">
<h5>You can search for others who using this web application!</h5>
User ID<input type="text" name="formid"> 
<input type="submit" name="login" value="submit">
</form>
<?php

if (isset($_POST['login'])){

  $id = $_POST['formid'];
  $query = "SELECT user_id, fullname, contact_num FROM users WHERE user_id ='$id'";

  //sql injection query
  // ' OR '1'='1 UNION SELECT user_id, password, fullname * FROM customer WHERE ' OR '1'='1 
  // ' OR '1'='1 
  // 
  $result = mysqli_query($con,$query);
  $num_row 	= mysqli_num_rows($result);  

  if ($num_row >0){
    echo "<table><tr><th>userID</th><th>fullname</th><th>contact number</th></tr>" ; 
    
    while($row = mysqli_fetch_assoc($result)) {
      $userID = $row['user_id'];
    $fullname = $row['fullname'];
    $contact = $row['contact_num'];
      echo "<tr><td> $userID </td><td> $fullname </td><td>  $contact " ; 
    }
  }
  else{
    echo "no result found with user id: $id";
  }
}
?>
<!-- sql injection end -->


</body>
</html>
