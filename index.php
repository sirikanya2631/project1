
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Biz Comp Club</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
		<form class="form-horizontal" method="post" enctype="multipart/form-data">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Biz Comp Club</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">สินค้า</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="rubber/about.html">กิจกรรมชมรม</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">ติดต่อเรา</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">สมัครสมาชิก</a></li>
						<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Login.php">Login</a></li>
						<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="admin/LoginAdmin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="design/BC_CLUB.jpg" width="1350" height="700"alt="" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0" >Biz Comp Club</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0"></p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">สินค้าแนะนำ</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row">
                    <!-- Portfolio Item 1-->
                  <?php
	include("connectdb.php");
	$sql = "SELECT * FROM `products` ";
	$rs = mysqli_query ($conn,$sql);
	while ($data = mysqli_fetch_array($rs)){
		
	
?>	
		  
		 
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="images/<?php echo $data ['p_id'];?>.jpg" width="100%" height="100%">
            <div class="card-body">
              <p class="card-text">
              <strong><?php echo $data ['p_name']; ?></strong><br>
              รายละเอียด <?php echo $data ['p_detail']; ?><br>
              ราคา <?php echo $data ['p_price']; ?><br>
				 
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  
					
					 
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
		 <?php  } ?>	
                    <!-- Portfolio Item 4-->
                
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">ข้อมูลติดต่อ</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
					
                    
					
                    
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    
                        <h4 class="text-uppercase mb-4">เบอร์ติดต่อ 091-2345678 </h4>
					  <h4 class="text-uppercase mb-4">อีเมลติดต่อ bc.msu.ac.th </h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact" align="center">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">สมัครสมาชิก</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                
	

                <div class="form-group"align="center" >
  <label class="col-md-4 control-label" for="u_name">ชื่อ-นามสกุล</label>  
  <div class="col-md-4">
  <input id="u_name" name="u_name" type="text" placeholder="กรอกชื่อ-นามสกุล" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group"align="center">
  <label class="col-md-4 control-label" for="u_sid">รหัสนิสิต</label>  
  <div class="col-md-4">
  <input id="u_sid" name="u_sid" type="text" placeholder="กรอกรหัสนิสิต" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group"align="center">
  <label class="col-md-4 control-label" for="u_edu">คณะ</label>
  <div class="col-md-4">
    <select id="u_edu" name="u_edu" class="form-control">
      <option value="คณะแพทย์ศาสตร์">คณะแพทย์ศาสตร์</option>
      <option value="คณะเภสัชศาสตร์">คณะเภสัชศาสตร์</option>
      <option value="คณะสาธารณสุขศาสตร์">คณะสาธารณสุขศาสตร์</option>
      <option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
      <option value="คณะเทคโนโลยี">คณะเทคโนโลยี</option>
      <option value="คณะสัตว์แพทยศาสตร์">คณะสัตว์แพทยศาสตร์</option>
      <option value="คณะวิทยาการสารสนเทศ">คณะวิทยาการสารสนเทศ</option>
      <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
      <option value="คณะสถาปัตยศาสตร์ ผังเมืองและนฤมิตศิลป์">คณะสถาปัตยศาสตร์ ผังเมืองและนฤมิตศิลป์</option>
      <option value="คณะการบัญชีและการจัดการ">คณะการบัญชีและการจัดการ</option>
      <option value="คณะการท่องเที่ยวและการโรงแรม">คณะการท่องเที่ยวและการโรงแรม</option>
      <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
      <option value="วิทยาลัยการเมืองการปกครอง">วิทยาลัยการเมืองการปกครอง</option>
      <option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
      <option value="คณะศิลปกรรมศาสตร์และวัฒนธรรมศาสตร์">คณะศิลปกรรมศาสตร์และวัฒนธรรมศาสตร์</option>
      <option value="วิทยาลัยดุริยางคศิลป์">วิทยาลัยดุริยางคศิลป์</option>
      <option value="คณะนิติศาสตร์">คณะนิติศาสตร์</option>
      <option value="คณะสิ่งแวดล้อมและทรัพยากรศาสตร์">คณะสิ่งแวดล้อมและทรัพยากรศาสตร์</option>
      <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group"align="center">
  <label class="col-md-4 control-label" for="u_major">สาขา</label>  
  <div class="col-md-4">
  <input id="u_major" name="u_major" type="text" placeholder="กรอกสาขา" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group"align="center">
  <label class="col-md-4 control-label" for="u_uid">เลขบัตรประจำตัวประชาชน</label>  
  <div class="col-md-4">
  <input id="u_uid" name="u_uid" type="text" placeholder="กรอกเลขบัตรประจำตัวประชาชน" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group"align="center">
  <label class="col-md-4 control-label" for="u_email">E-mail</label>  
  <div class="col-md-4">
  <input id="u_email" name="u_email" type="text" placeholder="กรอก E-mail" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group"align="center">
  <label class="col-md-4 control-label" for="u_phone">เบอร์โทรศัพท์</label>  
  <div class="col-md-4">
  <input id="u_phone" name="u_phone" type="text" placeholder="กรอกเบอร์โทรศัพท์" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group"align="center">
  <label class="col-md-4 control-label" for="u_face">Facebook</label>  
  <div class="col-md-4">
  <input id="u_face" name="u_face" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group"align="center">
  <label class="col-md-4 control-label" for="u_username">Username</label>  
  <div class="col-md-4">
  <input id="u_username" name="u_username" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group"align="center">
  <label class="col-md-4 control-label" for="u_pass">Password</label>
  <div class="col-md-4">
    <input id="u_pass" name="u_pass" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group"align="center">
  <label class="col-md-4 control-label" for="pic">รูปภาพ</label>
  <div class="col-md-4">
    <input id="pic" name="pic" class="input-file" type="file">
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="Submit" name="Submit" class="btn btn-danger">สมัครสมาชิก</button>
    <button id="Cancel" name="Cancel" class="btn btn-default">ยกเลิก</button>
  </div>
</div>

</fieldset>
</form>

<?php
if (isset($_POST['Submit'])){
    include("connectdb.php");
    $u_username = $_POST['u_username'];
 
	$check = "
	SELECT  u_username 
	FROM users  
	WHERE u_username = '$u_username' 
	";
    $result1 = mysqli_query($conn, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
 
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' Username ซ้ำ กรุณากรอกใหม่อีกครั้ง !');";
    echo "window.history.refreash();";
    echo "</script>";
    }else{
	$sql = "INSERT INTO `users` ( `u_name`, `u_username`, `u_pass`, `u_phone`, `u_face`, `u_sid`, `u_edu`, `u_major`, `u_uid`, `u_email`, `pic`)
	 VALUES (
	         '".$_POST['u_name']."', 
	         '".$_POST['u_username']."',
			 '".$_POST['u_pass']."',
			 '".$_POST['u_phone']."',
			 '".$_POST['u_face']."',
			 '".$_POST['u_sid']."',
			 '".$_POST['u_edu']."',
			 '".$_POST['u_major']."',
			 '".$_POST['u_uid']."',
			 '".$_POST['u_email']."',
             '".$_FILES['pic']['name']."'
			 
             );";
		
    mysqli_query($conn,$sql)or die ("สมัครสมาชิกไม่สำเร็จ");
    copy($_FILES['pic']['tmp_name'],"imguser/".$_FILES['pic']['name']);
    mysqli_close($conn);
            }

;


echo "<script>";
echo "alert ('สมัครสมาชิกสำเร็จ')";
echo "</script>";}
else{

}
?>
				
                        </form>
			
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Your Website 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">เสื้อ OLD SKULL ลายเด็ด</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/Capture.PNG" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <a href="Login.php"
									   <button type="button" class="btn btn-primary" >Login </button>
								</a>
							
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">The suit</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="images/jacket3.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5"></p>
                                    <a href="Login.php"
									   <button type="button" class="btn btn-primary" >Login </button>
								</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Panties</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/26df7236a5d3230f921e6609fcbb8cdd (1).jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5"></p>
                                    <a href="Login.php"
									   <button type="button" class="btn btn-primary" >Login </button>
								</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">Controller</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
