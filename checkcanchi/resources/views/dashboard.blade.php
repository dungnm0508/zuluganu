<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Tra cứu theo tuổi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon/apple-icon-57x57.png')}}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon/apple-icon-60x60.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon/apple-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/apple-icon-76x76.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon/apple-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-icon-120x120.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon/apple-icon-144x144.png')}}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon/apple-icon-152x152.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-icon-180x180.png')}}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicon/android-icon-192x192.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon/favicon-96x96.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
	<link rel="manifest" href="{{asset('favicon/manifest.json')}}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('app/css/bootstrap.min.css')}}"/>

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{asset('app/css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('app/css/owl.theme.default.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('app/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('app/css/style.css')}}"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<!-- Header -->
		<header id="header">
			<!-- Top Header -->
			<!-- <div id="top-header">
				<div class="container">
					<div class="header-links">
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Advertisement</a></li>
							<li><a href="#">Privacy</a></li>
							<li><a href="#"><i class="fa fa-sign-in"></i> Login</a></li>
						</ul>
					</div>
					<div class="header-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div> -->
			<!-- /Top Header -->
			
			<!-- Center Header -->
			<div id="center-header">
				<div class="container">
					<div class="header-logo">
						<a href="#" class="logo"><img src="{{asset('images/logo.png')}}" alt=""></a>
					</div>
					<div class="header-ads">
						<img class="center-block" src="{{asset('app/img/ad-2.jpg')}}" alt=""> 
					</div>
				</div>
			</div>
			<!-- /Center Header -->
			
			<!-- Nav Header -->
			<div id="nav-header">
				<div class="container">
					<nav id="main-nav">
						<div class="nav-logo">
							<a href="#" class="logo"><img src="{{asset('app/img/logo-alt.png')}}" alt=""></a>
						</div>
						
					</nav>
					<div class="button-nav">
						<button class="search-collapse-btn"><i class="fa fa-search"></i></button>
						<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
						<div class="search-form">
							<form>
								<input class="input" type="text" name="search" placeholder="Search">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Nav Header -->
		</header>
		<!-- /Header -->
		
		
		
		<!-- SECTION -->
		<div class="section" id="content-section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						

						<div class="content">
							@if(empty($info))
							@else
							<center>
								<div class="result col-md-12">
									<p>Kết quả</p>
									<div class="item-info" >
										Năm sinh: <span>
											<?php echo $info['namsinh']; ?>
											@if($info['gioitinh'] == 1)
											Nam mệnh
											@else
											Nữ mệnh
											@endif
										</span>
									</div>

									<div class="item-info" >
										Can Chi: <span><?php echo $info['canchi']; ?> (<?php echo $info['giainghia_nam']; ?>)</span>
									</div>
									<div class="item-info" >
										Mệnh: <span><?php echo $info['menh']; ?> (<?php echo $info['nguhanh'];?>_<?php echo $info['giainghia_nguhanh'];?>)</span>
									</div>
									<div class="item-info" >
										Cung: <span><?php echo $info['cung']; ?></span>
									</div>
									<a href="javascript:void(0)" id="more-cungtrach">Xem thêm tuổi vợ chồng theo cung trạch</a>
									<div class="dropdown-cung col-md-6" style="display: none">
										<meta name="csrf-token" content="{{ csrf_token() }}" />
										<input type="number" class="form-control" id="numberYear" data-id-cung='<?php echo $info['id_cung']; ?>' data-gioitinh='<?php echo $info['gioitinh']; ?>' aria-describedby="emailHelp" placeholder="Vui lòng nhập năm sinh của <?php echo $gioitinh = ($info['gioitinh'] ==1)?'Vợ':'Chồng'; ?>" name="numberYear" required>
										<button class="btn btn-success" id="btn-tra">Tra</button>
									</div>

								</div>
							</center>


							@endif
							<form method="post" action="postCanChi">
								@csrf
								<div class="form-group col-sm-11">
									<div class="col-sm-2">
										<label for="exampleInputEmail1">Năm Sinh</label>
									</div>
									<div class="col-sm-10">
										<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vui lòng nhập năm sinh của quý khách" name="txtYear" required>
									</div>
								</div>
								<div class="form-group col-sm-11">
									<div class="col-sm-2">
										<label for="exampleInputEmail1">Giới tính</label>
									</div>
									<div class="col-sm-10">
										<select class="form-control" id="selectSex" name="sltSex">
											<option value="1">Nam</option>
											<option value="2">Nữ</option>
										</select>
									</div>
								</div>
								<div class="footer">
									<div class="col-sm-12">
										<input type="submit" value="Gửi" class="btn btn-primary">
									</div>
								</div>
							</form>
						</div>

					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		
		
		<!-- FOOTER -->
		<footer id="footer">
			<!-- Top Footer -->
			<div id="top-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- Column 1 -->
						<div class="col-md-4">
							<!-- footer about -->
							<div class="footer-widget about-widget">
								<div class="footer-logo">
									<a href="#" class="logo"><img src="{{asset('images/logo.png')}}" alt=""></a>
									<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
								</div>
							</div>
							<!-- /footer about -->
							
							<!-- footer social -->
							<div class="footer-widget social-widget">
								<div class="widget-title">
									<h3 class="title">Follow Us</h3>
								</div>
								<ul>
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
							<!-- /footer social -->
							
							<!-- footer subscribe -->
							<div class="footer-widget subscribe-widget">
								<div class="widget-title">
									<h2 class="title">Subscribe to Newslatter</h2>
								</div>
								<form>
									<input class="input" type="email" placeholder="Enter Your Email">
									<button class="input-btn">Subscribe</button>
								</form>
							</div>
							<!-- /footer subscribe -->
						</div>
						<!-- /Column 1 -->
						
						<!-- Column 2 -->
						<div class="col-md-4">
							<!-- footer article -->
							<div class="footer-widget">
								<div class="widget-title">
									<h2 class="title">Featured Posts</h2>
								</div>

								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('app/img/img-widget-1.jpg')}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('app/img/img-widget-2.jpg')}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('app/img/img-widget-3.jpg')}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /footer article -->
						</div>
						<!-- /Column 2 -->
						
						<!-- Column 3 -->
						<div class="col-md-4">
							<!-- footer galery -->
							<div class="footer-widget galery-widget">
								<div class="widget-title">
									<h2 class="title">Flickr Photos</h2>
								</div>
								<ul>
									<li><a href="#"><img src="{{asset('app/img/img-widget-3.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('app/img/img-widget-4.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('app/img/img-widget-5.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('app/img/img-widget-6.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('app/img/img-widget-7.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('app/img/img-widget-8.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('app/img/img-widget-9.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('app/img/img-widget-10.jpg')}}" alt=""></a></li>
								</ul>
							</div>
							<!-- /footer galery -->
							
							<!-- footer tweets -->
							<div class="footer-widget tweets-widget">
								<div class="widget-title">
									<h2 class="title">Recent Tweets</h2>
								</div>
								<ul>
									<li class="tweet">
										<i class="fa fa-twitter"></i>
										<div class="tweet-body">
											<p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
										</div>
									</li>
								</ul>
							</div>
							<!-- /footer tweets -->
						</div>
						<!-- /Column 3 -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Top Footer -->
			
			<!-- Bottom Footer -->
			<div id="bottom-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- footer links -->
						<div class="col-md-6 col-md-push-6">
							<ul class="footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Advertisement</a></li>
								<li><a href="#">Privacy</a></li>
							</ul>
						</div>
						<!-- /footer links -->
						
						<!-- footer copyright -->
						<div class="col-md-6 col-md-pull-6">
							<div class="footer-copyright">
								<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
								</div>
							</div>
							<!-- /footer copyright -->
						</div>
						<!-- /ROW -->
					</div>
					<!-- /CONTAINER -->
				</div>
				<!-- /Bottom Footer -->
			</footer>
			<!-- /FOOTER -->

			<!-- Back to top -->
			<div id="back-to-top"></div>

			<!-- Back to top -->
			<div class="modal fade" id="modalCungTrach" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Kết quả tra cung trạch</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="note-cungtrach">
								* <b>Bát Trạch Cung Phi (thuộc Cha)</b>: Khi chúng ta ra đời, dù Mạng và Cung Sanh như nhau - nhưng Cha Mẹ khác nhau, vợ chồng khác nhau, con cái khác nhau, địa lý khác nhau, hướng nhà khác nhau, gái (Âm) - trai (Dương) giới tính khác nhau... sẽ khiến cho Vận Mạng mỗi người có biến động, thay đổi. Và giữa mỗi người chúng ta sẽ có sự khác nhau rất lớn.
								<br>
								* <b>Cung Phi</b>: Dùng để coi về cưới gả, cất nhà, phương hướng xây nhà, hướng bếp, đường đi... Bát Trạch Cung Phi được tính dựa trên Ngũ Hành, Bát Quái, qua đó phản ánh sự biến đổi và phát triển của vạn vật trong vũ trụ theo thời gian. Phi còn có nghĩa là chạy, chạy là khác đi là sự phát triển - không giống nhau. 

							</div>
							<div class="content-result">
								<div class="result-cung col-sm-12">
									<div class="content-cung col-sm-6">
										<label><b>Cung Nam: </b></label>
										<p id="content-cungtrai"></p>
									</div>
									<div class="content-cung col-sm-6">
										<label><b>Cung Nữ: </b></label>
										<p id="content-cunggai"></p>
									</div>
								</div>
								<div class="result-battrach">
									<b>BÁT SAN GIAO HỢP: </b><span class="content-battrach"></span>
								</div>
								<div class="content-giainghia"><p></p></div>
							</div>

						</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div> -->
			</div>
		</div>
	</div>

	<!-- jQuery Plugins -->
	<script src="{{asset('app/js/jquery.min.js')}}"></script>
	<script src="{{asset('app/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('app/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('app/js/main.js')}}"></script>
	<script type="text/javascript">
		<?php if(!empty($info)){ ?>
			var infoMain = <?php echo json_encode($info); ?>;
			<?php } ?>
		</script>
		<script type="text/javascript" src="{{asset('js/input.js')}}"></script>

	</body>
	</html>
