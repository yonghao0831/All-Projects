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
                      <li class="on"><a href="#" accesskey="h" id="home"> <em>H</em>ome </a> </li>
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

              <div class="latest-project">
                  <div class="section_header">
                      <h2> Latest Project </h2>
                      <p class="clearpara"></p>
                  </div>
                  <div class="post">
                      <span class="date">20.JUN.2009</span>
                      <div class="post-title">
                          <h2><a href="#"> In hac habitasse platea dictumst. Phasellus ac urna nec felis placerat cursus a et leo. </a> </h2>
                          <!--/posttitle-->
                      </div>
                      <div class="postmeta">
                          <p>written by <a href="#">Kevin</a> and has <a href="#"><em>0</em></a> comments.</p>
                          <!--/postmeta-->
                      </div>
                      <p>
                          <a href="#"> <img src="images/latest-project.jpg" alt="" class="alignleft"> </a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sagittis orci. Cras id purus vitae nulla rutrum cursus. In hac habitasse platea dictumst. Phasellus ac urna nec felis placerat cursus a et leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer quis dui sit amet nibh vehicula fringilla eu nec augue. <a href="#">Cras rhoncus arcu quis leo auctor vel pretium nunc vestibulum.</a>
                          <blockquote> Nullam ut quam orci. Nullam scelerisque, purus in malesuada aliquet, nulla ipsum consequat elit, non blandit dolor mauris sed lorem. </blockquote>
                          Duis ac nisi quis lorem placerat consequat vehicula a neque. Pellentesque mattis semper imperdiet. Vivamus id arcu sem, nec aliquet est.
                      </p>
                      <a href="#" class="readmore">continue...</a>
                      <p class="clearpara"></p>
                      <a href="#" class="otherentries">View other projects ...</a>
                      <p class="clearpara"></p>
                      <!--/post-->
                  </div>
                  <!--/latest-project-->
              </div>
              <div class="maincontent">
                  <div class="section_header">
                      <h2> Recent Articles </h2>
                      <p class="clearpara"></p>
                  </div>
                  <div class="col">
                      <div class="post">
                          <span class="date">20.JUN.2009</span>
                          <div class="post-title">
                              <h2><a href="#"> Proin id sagittis orci. Cras id purus vitae nulla rutrum cursus. </a> </h2>
                              <!--/post-title-->
                          </div>
                          <div class="postmeta">
                              <p>written by <a href="#">Kevin</a> and has <a href="#"><em>0</em></a> comments.</p>
                              <!--/postmeta-->
                          </div>
                          <div class="postentry">
                              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sagittis orci. Cras id purus vitae nulla rutrum cursus. In hac habitasse platea dictumst. Phasellus ac urna nec felis placerat cursus a et leo. Integer quis dui sit amet nibh vehicula fringilla eu nec augue. <a href="#">Cras rhoncus arcu quis leo auctor vel pretium nunc vestibulum.</a> </p>
                              <a href="#" class="continue">continue...</a>
                              <p class="clearpara"></p>
                              <!--/postentry-->
                          </div>
                          <!--/post-->
                      </div>
                      <!--/col-->
                  </div>
                  <div class="col">
                      <div class="post">
                          <span class="date">05.JUN.2009</span>
                          <div class="post-title">
                              <h2><a href="#"> Proin id sagittis orci. Cras id purus vitae nulla rutrum cursus. </a> </h2>
                              <!--/post-title-->
                          </div>
                          <div class="postmeta">
                              <p>written by <a href="#">Kevin</a> and has <a href="#"><em>0</em></a> comments.</p>
                              <!--/postmeta-->
                          </div>
                          <div class="postentry">
                              <p> <a href="#"> <img src="images/cowthumbnail.gif" alt="" class="alignleft"> </a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sagittis orci. Cras id purus vitae nulla rutrum cursus. In hac habitasse platea dictumst. Phasellus ac urna nec felis placerat cursus a et leo. Integer quis dui sit amet nibh vehicula fringilla eu nec augue. <a href="#">Cras rhoncus arcu quis leo auctor vel pretium nunc vestibulum.</a> </p>
                              <a href="#" class="continue">continue...</a>
                              <p class="clearpara"></p>
                              <!--/postentry-->
                          </div>
                          <!--/post-->
                      </div>
                      <!--/col-->
                  </div>
                  <div class="col">
                      <div class="post">
                          <span class="date">20.MAY.2009</span>
                          <div class="post-title">
                              <h2><a href="#"> Proin id sagittis orci. Cras id purus vitae nulla rutrum cursus. </a> </h2>
                              <!--/post-title-->
                          </div>
                          <div class="postmeta">
                              <p>written by <a href="#">Kevin</a> and has <a href="#"><em>0</em></a> comments.</p>
                              <!--/postmeta-->
                          </div>
                          <div class="postentry">
                              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sagittis orci. Cras id purus vitae nulla rutrum cursus. In hac habitasse platea dictumst. Phasellus ac urna nec felis placerat cursus a et leo. Integer quis dui sit amet nibh vehicula fringilla eu nec augue. <a href="#">Cras rhoncus arcu quis leo auctor vel pretium nunc vestibulum.</a> </p>
                              <ul>
                                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sagittis orci. Cras id </li>
                                  <li>purus vitae nulla rutrum cursus. In hac habitasse platea dictumst. Phasellus ac urna</li>
                                  <li>nec felis placerat cursus a et leo. Integer quis dui sit amet nibh vehicula fringilla eu nec augue.</li>
                              </ul>
                              <a href="#" class="continue">continue...</a>
                              <p class="clearpara"></p>
                              <!--/postentry-->
                          </div>
                          <!--/post-->
                      </div>
                      <!--/col-->
                  </div>
                  <div class="col">
                      <div class="post">
                          <span class="date">05.MAY.2009</span>
                          <div class="post-title">
                              <h2><a href="#"> Proin id sagittis orci. Cras id purus vitae nulla rutrum cursus. </a> </h2>
                              <!--/post-title-->
                          </div>
                          <div class="postmeta">
                              <p>written by <a href="#">Kevin</a> and has <a href="#"><em>0</em></a> comments.</p>
                              <!--/postmeta-->
                          </div>
                          <div class="postentry">
                              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sagittis orci. Cras id purus vitae nulla rutrum cursus. In hac habitasse platea dictumst. Phasellus ac urna nec felis placerat cursus a et leo. Integer quis dui sit amet nibh vehicula fringilla eu nec augue. <a href="#">Cras rhoncus arcu quis leo auctor vel pretium nunc vestibulum.</a> </p>
                              <a href="#" class="continue">continue...</a>
                              <p class="clearpara"></p>
                              <!--/postentry-->
                          </div>
                          <!--/post-->
                      </div>
                      <!--/col-->
                  </div>
                  <p class="clearpara"></p>
                  <a href="#" class="readmore">Read more articles in the archives ...</a>
                  <p class="spacer"></p>
                  <div class="twitter_wrap">
                      <a href="#" class="twittericon">follow me</a>
                      <ul id="twitter_update_list">
                          <li> <a href="#"> @Farrhad</a> Congrats Farrhad.. <a href="#">2 days ago</a></li>
                          <li> Netflix movie reccommendations are pretty good for me. But an even better algo.. WOW!! a cool $1Million to collect.. <a href="#">http://bit.ly/2kbQll 2 days ago</a></li>
                          <li>Very sad and still not sinking in about MJ... The sheer talent taht he had,.. He is the KING of POP!! <a href="#">4 days ago</a></li>
                      </ul>
                      <p class="clearpara"></p>
                  </div>
                  <!--/maincontent-->
              </div>

              <p class="clearpara"></p>
              <div class="categories">
                  <ul>
                      <li><a href="#">Articles </a></li>
                      <li><a href="#">Asides</a></li>
                      <li><a href="#">CSS</a></li>
                      <li><a href="#">Design</a></li>
                      <li><a href="#">Trends</a></li>
                      <li><a href="#">Portfolio</a></li>
                  </ul>
                  <!--/categories-->
              </div>
              <div class="footer lhs">
                  &copy; copyright 2009 <a href="#">Name Here</a>. All Rights Reserved | <span class="sitecredits">Site designed by <a href="http://chilligavva.com/">Lakshmi Mareddy.</a></span>
                  <p class="clearpara"></p>
                  <div class="rssfeeds">
                      <ul>
                          <li><a href="#">Article Feed</a></li>
                          <li><a href="#">Comments Feed</a></li>
                      </ul>
                  </div>
                  <!-- /footer -->
              </div>
              <p class="clearpara"></p>
              <p class="clearpara"></p>
              <!--/content-->
          </div>
          <p class="clearpara"></p>
          <!--/wrap-->
      </div>
  <p class="clearpara"></p>
  <!--/pagewrap-->
</div>
</body>
</html>