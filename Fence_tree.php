
<?php 

$connect = mysqli_connect("localhost", "root", "", "testing");  
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}



?>







<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/logo1.png" type="image/png">
        <title>Flash Photography</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		
    </head>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logoo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                	<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.html">หน้าแรก</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="index.html" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">หมวดหมู่</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="Cactus.html">แคดตัส</a>
                                        <li class="nav-item"><a class="nav-link" href="Climbing_plants.html">ไม้เลื้อย</a>
                                        <li class="nav-item"><a class="nav-link" href="Fence_tree.html">ไม้แนวรั้ว</a>
                                        <li class="nav-item"><a class="nav-link" href="Flowering_plant.html">ไม้ดอก</a>
                                        <li class="nav-item"><a class="nav-link" href="Ornamental_plant.html">ไม้ประดับ</a>
                                        <li class="nav-item"><a class="nav-link" href="Shrub.html">ไม้พุ่ม</a> </li>
									</ul>
								</li> 
								<li class="nav-item"><a class="nav-link" href="contact.html">ติดต่อเรา</a></li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">บล็อก</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#">อัพโหลด</a>
                                    </ul>
								</li>
					        </div>
            	        </nav>
                    </div>
        </header>
        <!--================Header Menu Area =================-->

     <!--================Home Banner Area =================-->
     <section class="banner_area">
       <div class="box_1620">
           <div class="banner_inner d-flex align-items-center">
               <div class="container">
                   <div class="banner_content text-center">
                       <h2>Fence tree</h2>
                       <div class="page_link">
                           <a href="index.html">หน้าแรก</a>
                           <a href="about-us.html">หมวดหมู่</a>
                           <a href="Fence_tree.html">ไม้แนวรั้ว</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!--================End Home Banner Area =================-->
<br><br><br>
   <!--================Blog Area =================-->
   <section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    <article class="row blog_item">
                       <div class="col-md-3">
                           <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="Cactus.html">Cactus,</a>
                                    <a href="Climbing_plants.html">Climbing plants,</a>
                                    <a class="active" href="Fence_tree.html">Fence tree,</a>
                                    <a href="Flowering_plant.html">Flowering plant,</a>
                                    <a href="Ornamental_plant.html">Ornamental plant,</a>
                                    <a href="Shrub.html">Shrub</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Beam Wanatchaya<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">10 Mar,2050<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">201.1M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">02 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                       </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="img/blog/main-blog/m-blog-11.jpg" alt="">
                                <div class="blog_details">
                                    <a href="moke.html"><h2>ต้นโมก (moke)</h2></a>
                                    <a href="moke.html" class="white_bg_btn">ดูเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                       <div class="col-md-3">
                           <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="Cactus.html">Cactus,</a>
                                    <a href="Climbing_plants.html">Climbing plants,</a>
                                    <a class="active" href="Fence_tree.html">Fence tree,</a>
                                    <a href="Flowering_plant.html">Flowering plant,</a>
                                    <a href="Ornamental_plant.html">Ornamental plant,</a>
                                    <a href="Shrub.html">Shrub</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Beam Wanatchaya<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">18 Mar,2050<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">11.1M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">05 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                       </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="img/blog/main-blog/m-blog-12.jpg" alt="">
                                <div class="blog_details">
                                    <a href="Ixora.html"><h2>ต้นเข็ม (Ixora)</h2></a>
                                    <a href="Ixora.html" class="white_bg_btn">ดูเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </article> 
                    <article class="row blog_item">
                       <div class="col-md-3">
                           <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="Cactus.html">Cactus,</a>
                                    <a href="Climbing_plants.html">Climbing plants,</a>
                                    <a class="active" href="Fence_tree.html">Fence tree,</a>
                                    <a href="Flowering_plant.html">Flowering plant,</a>
                                    <a href="Ornamental_plant.html">Ornamental plant,</a>
                                    <a href="Shrub.html">Shrub</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Beam Wanatchaya<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">30 Mar,2050<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">122.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">04 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                       </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="img/blog/main-blog/m-blog-13.jpg" alt="">
                                <div class="blog_details">
                                    <a href="Christina.html"><h2>ต้นคริสติน่า (Christina)</h2></a>
                                    <a href="Christina.html" class="white_bg_btn">ดูเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                       <div class="col-md-3">
                           <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="Cactus.html">Cactus,</a>
                                    <a href="Climbing_plants.html">Climbing plants,</a>
                                    <a class="active" href="Fence_tree.html">Fence tree,</a>
                                    <a href="Flowering_plant.html">Flowering plant,</a>
                                    <a href="Ornamental_plant.html">Ornamental plant,</a>
                                    <a href="Shrub.html">Shrub</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Beam Wanatchaya<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">31 Mar,2050<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">22.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">04 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                       </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="img/blog/main-blog/m-blog-14.jpg" alt="">
                                <div class="blog_details">
                                    <a href="Ficus_annulata.html"><h2>ไทรเกาหลี (Ficusannulata)</h2></a>
                                    <a href="Ficus_annulata.html" class="white_bg_btn">ดูเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                       <div class="col-md-3">
                           <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="Cactus.html">Cactus,</a>
                                    <a href="Climbing_plants.html">Climbing plants,</a>
                                    <a class="active" href="Fence_tree.html">Fence tree,</a>
                                    <a href="Flowering_plant.html">Flowering plant,</a>
                                    <a href="Ornamental_plant.html">Ornamental plant,</a>
                                    <a href="Shrub.html">Shrub</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Beam Wanatchaya<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">2 Apr,2050<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">12.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">03 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                       </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="img/blog/main-blog/m-blog-15.jpg" alt="">
                                <div class="blog_details">
                                    <a href="Bambusa_multiplex.html"><h2>ต้นไผ่เลี้ยง (Bambusa multiplex)</h2></a>
                                    <!-- <a href="Bambusa_multiplex.html" class="white_bg_btn">ดูเพิ่มเติม</a> -->
                                </div>
                            </div>
                        </div>
                    </article>
                    

<article class="row blog_item">
                       <div class="col-md-3">
                           <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="Cactus.html">Cactus,</a>
                                    <a href="Climbing_plants.html">Climbing plants,</a>
                                    <a class="active" href="Fence_tree.html">Fence tree,</a>
                                    <a href="Flowering_plant.html">Flowering plant,</a>
                                    <a href="Ornamental_plant.html">Ornamental plant,</a>
                                    <a href="Shrub.html">Shrub</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Beam Wanatchaya<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">2 Apr,2050<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">12.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">03 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                       </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="img/blog/main-blog/m-blog-15.jpg" alt="">
                                <div class="blog_details">
                                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query); 


                 
                while(($row = mysqli_fetch_assoc($result)))  
                
                {  
                     echo   
                     '
                     <div class="col-md-9">
                     <div class="blog_post">
                     <div>
                     <img src= "data:image/jpeg;base64, '.base64_encode ($row['name']) .' "  height="250" width="250" class="img-thumnail" />  
                         
               
                    
                     </div>
                     ';
                   
                    
                     
                     echo
                     
                     "
                     <p>หัวข้อ: ".$row['m']."</p>
                     <p>เนื้อเรื่อง: ".$row['f']."</p> 
                     </div>
                     </div>
                     
                     ";
            
                     
                 
                             
                                  
                          
                       
                }  

         
                ?>   
                                </div>
                            </div>
                        </div>
                    </article>
              
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-left"></span>
                                    </span>
                                </a>
                            </li>
                            <li class="page-item active"><a href="#" class="page-link">01</a></li>
                           
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-right"></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Posts">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                            </span>
                        </div><!-- /input-group -->
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget author_widget">
                        <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                        <h4>Beam Wanatchaya</h4>
                        <p>Teen blogger</p>
                        <div class="social_icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                        <p>If you love trees, you will take care of them until they bloom. But if you buy it just put on a vase to display, that means you don't love or like it, you just fall in love with it.</p>
                        <div class="br"></div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<!--================Instagram Area =================-->
<section class="instagram_area">
    <div class="container box_1620">
        <div class="insta_btn">
            <a class="btn theme_btn" href="#">Follow us on instagram</a>
        </div>
        <div class="instagram_image row m0">
            <a href="#"><img src="img/instagram/ins-1.jpg" alt=""></a>
            <a href="#"><img src="img/instagram/ins-2.jpg" alt=""></a>
            <a href="#"><img src="img/instagram/ins-3.jpg" alt=""></a>
            <a href="#"><img src="img/instagram/ins-4.jpg" alt=""></a>
            <a href="#"><img src="img/instagram/ins-5.jpg" alt=""></a>
            <a href="#"><img src="img/instagram/ins-6.jpg" alt=""></a>
        </div>
    </div>
</section>
<!--================End Instagram Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h3>About Me</h3>
                    </div>
                    <p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                </aside>
            </div>
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget news_widget">
                    <div class="f_title">
                        <h3>Newsletter</h3>
                    </div>
                    <p>Stay updated with our latest trends</p>
                    <div id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                            <div class="input-group d-flex flex-row">
                                <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                            </div>				
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </aside>
            </div>
            <div class="col-lg-2">
                <aside class="f_widget social_widget">
                    <div class="f_title">
                        <h3>Follow Me</h3>
                    </div>
                    <p>Let us be social</p>
                    <ul class="list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/jquery-ui/jquery-ui.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.js"></script>
<script src="js/theme.js"></script>
</body>
</html>