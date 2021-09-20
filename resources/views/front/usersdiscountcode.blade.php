<!DOCTYPE HTML>
<html>
	<head>
    <base href="{{asset('/')}}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	{{-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet"> --}}

	
	<!-- Animate.css -->
	<link rel="stylesheet" href="frontend/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="frontend/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="frontend/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="frontend/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="frontend/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="frontend/css/style.css">

	<!-- Modernizr JS -->
	<script src="frontend/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +84 386 358 006</p>
						<ul class="fh5co-social">
							<div class="dropdown">
								<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:rgb(255, 255, 255)">
									
									<?php
									$name = Session::get('post_name');
									if($name){
										echo $name;
									}
									?>
									&nbsp👤
								</button>
								<div class="dropdown-menu" style="background: rgb(255, 255, 255)">
									<li class="text-center" ><a href="trang-chu">Đăng xuất</a></li>

								</div>
							  </div>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container" id="container-menu">
				<div class="row nav-menu-header">
					<div class="col-xs-2">
						<div id="fh5co-logo" style="width:250px"><a href="{{ url ('trang-chu') }}"><img width="250px" src="frontend/images/LOGO FITNESS 5.jpg"alt=""></a></div>
					</div>
					<div class=" text-right menu-1" id="forcus-nav-menu">
						<ul>
							<li class=""><a href="{{ url ('trang-chu') }}">Trang chủ</a></li>
							<li class="has-dropdown">
								<a href="{{ url ('blog') }}">Bài viết</a>
								<ul class="dropdown">
									<li><a href="blog5">Dinh dưỡng</a></li>
									<li><a href="blog6">Tiểu đường</a></li>
									<li><a href="blog4">Béo phì</a></li>
									<li><a href="blog1">Phòng tập</a></li>
									<li><a href="blog3">Fitness</a></li>	
								</ul>
							</li>
							<li class="has-dropdown">
								<a href="{{ url ('pricing') }}">Dịch vụ</a>
								<ul class="dropdown">
									<li><a href="{{ url ('trainer') }}">Huấn luyện viên</a></li>
									<li><a href="{{ url ('BMR') }}">Kiểm tra chỉ số BMR</a></li>
									<li><a href="{{ url ('BMI') }}">Kiểm tra chỉ số BMI</a></li>
									<li><a href="{{ url ('videogiamcan') }}">Video tập giảm cân</a></li>
									<li><a href="{{ url ('videotangco') }}">Video tập tăng cơ</a></li>
								</ul>
							</li>
							<li><a href="{{ url ('contact') }}">Liên hệ</a></li>				
						</ul>
					</div>
					<div>
						<form action="{{url('/search')}}">
							<input id="place-search" type="search"name="search" placeholder="Tìm kiếm...">
							<button id="btn-search" type="submit">Search</button>
							</form>
					</div>
				</div>
					
			</div>
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" data-stellar-background-ratio="0.5">
		{{-- <div class="overlay"></div> --}}
		<div style=" position:relative;
		padding-bottom:56.25%;
		padding-top:0px;
		height:0;
		overflow:hidden;">
			<iframe style=" position:absolute;
			top:0;
			left:0;
			width:100%;
			height:100%;opacity: 1;" width="500%" height="" src="https://www.youtube.com/embed/HMnatoiMdjA?autoplay=1&mute=1&controls=0" 
		title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
		encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="container" style="position: absolute;top:0 ;left:0; margin-left:15%">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1 style="font-weight: 700; color:#fff;opacity: 2">CHÀO MỪNG BẠN ĐẾN VỚI FITNESS_LIESTYLE!!!</h1>
							<p><a href="https://www.youtube.com/watch?v=KBUmu2SI95E" style="background-color: #F85A16; !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>





	<div id="fh5co-services" class="fh5co-bg-section">
        <div class="container">
            <div class="row row-bt-banner">
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><img class="img-responsive" src="frontend/images/dumbbell.svg" alt=""></span>
                        <h3>Cử tạ</h3>
                        <p style="height: 165px">Cử tạ là một môn thể thao trong đó người chơi (gọi là lực sĩ hay đô cử) cố gắng nâng một vật bao gồm thanh tạ được gắn với các đĩa tạ, mỗi lần nâng là một cú nâng sao cho khối lượng vật nâng là cao nhất.</p>
                        <p><a href="https://www.youtube.com/watch?v=AOaYNJgGbTk" style="background-color: #F85A16; !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><img class="img-responsive" src="frontend/images/exercise.svg" alt=""></span>
                        <h3>Chạy bộ</h3>
                        <p style="height: 165px">Chạy bộ là một hình thức chạy nước kiệu hoặc chạy với tốc độ chậm hoặc thong thả và duy trì một tốc độ ổn định đều trong suốt thời gian chạy. Ngày nay, chạy bộ là một trong những loại hình thể thao có lợi cho sức khỏe.</p>
                        <p><a href="https://www.youtube.com/watch?v=qnP5WLQcpaI" style="background-color: #F85A16; !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><img class="img-responsive" src="frontend/images/yoga-carpet.svg" alt=""></span>
                        <h3>Yoga</h3>
                        <p style="height: 165px">Yoga hay còn gọi là "Du-già"là một họ các phương pháp luyện tâm và luyện thân cổ xưa bắt nguồn từ Ấn Độ. Các nhà nghiên cứu cho rằng, thế giới tâm linh của Ấn Độ được phổ biến chính qua khái niệm Yoga này.</p>
                        <p><a href="https://www.youtube.com/watch?v=iSS4asEmIfE" style="background-color: #F85A16; !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container" id="container">
            <div class="row">
				<h2>RẤT NHIỀU CÁC GÓI KHUYẾN MÃI TRỊ GIÁ LÊN ĐẾN 1.000.000 VND</h2>
				
		        <div class="pricing">
					<h3>I.Chương trình khuyến mãi mùa hè cho người muốn giảm cân</h3>
					<p>&nbsp  Đây là một chương trình luyện tập với mục đích giảm cân để có một cơ thể khỏe đẹp, căng mịn trong mùa hè. Chương trình này kéo dài 6 tháng, có huấn luyện viên cá nhân riêng cho từng nhóm, với những bài tập bài bản và cam kết đạt hiệu quả như mong muốn chỉ sau 6 tháng tập luyện.</p>
					<div class="my-8 mx-auto bg-gray-100" style="width: 800px">
                        <div class="flex justify-center gap-20 shadow">
							<p>&nbsp  "Mỗi sáng tôi chọn một clip hướng dẫn nhảy hiện đại rồi bật kênh YouTube đó bằng tivi để tự mình nhảy theo, thấy toát mồ hôi và rất sảng khoái cùng những điệu nhạc sôi động. Khởi động ngày mới vui vẻ, rồi sau đấy chuẩn bị cho một ngày làm việc rất hiệu quả" - chị Đặng Thị Thoa, 26 tuổi, khoe.</p>
							<p>&nbsp   "Nếu trước đây tan giờ làm, 17h tôi đến phòng tập gym thì hiện tại tôi lên lịch tự tập ở nhà, chứ bỏ một ngày cơ thể cũng ê ẩm. Khi bỏ tập lâu, các cơ sẽ bị teo hay xổ ra, uổng công rèn luyện bấy lâu. Tập thể thao giúp hệ miễn dịch của mình tốt hơn."" </p>
					    </div>
					</div>
					<div class="my-8 mx-auto bg-gray-100" style="width: 800px">
                        <div class="flex justify-center gap-20 shadow">
							<p>&nbsp Còn anh Nguyễn Mạnh Hùng, 30 tuổi, nhấn mạnh: "Sự "lên ngôi" của các ứng dụng tập thể dục tại nhà cho thấy nhu cầu tập luyện thể thao, bảo vệ sức khỏe ngày càng được nhiều người quan tâm. Nếu như bạn cũng là "tín đồ thể thao" thì đừng bỏ qua sự trợ giúp từ các ứng dụng tập thể dục này".</p>
					    </div>
					</div>
					<p>&nbsp  Đặc biệt, chúng tôi tung ra gói khuyến mãi với mức giá ưu đãi cho những ai đăng ký tham gia lần đầu và mong muốn có có một body hoàn hảo.</p>
					<h3>II.Cam kết hiệu quả</h3>
					<p>&nbsp Chúng tôi cam kết hiệu quả của quá trình tập luyện cũng như các bài tập trên lớp học sẽ mang đến cho bạn một body mong muốn.bạn có thể đến cơ sở của chúng tôi gần nhất để xem trực tiếp các lớp tập và nếu như bạn ko có điều kiện để đến phòng tập thì đừng quá lo chúng tôi luôn luôn chia sẻ trực tiếp các buổi tập cho các học viên qua Zoom Us.</p>
					<p> <strong>Bạn có thể tham khảo và chọn mã giảm giá dưới đây:</strong> </p>
					<div class="mx-auto">
						<div class="flex justify-center items-center gap-16 flex-wrap">
							@foreach ($codes as $post)
						  <div class="flex">
							<div class="bg-yellow-500 text-center border-r-4 border-double w-96">
							  <div class="p-4">
								<div class="flex justify-center"> 
								  <img width="150" style="border-radius: 120px;height:150px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAiXkLAOh_SP8TTRD4TN1Ihvkq8m15vUR1WA&usqp=CAU" alt="" />
								</div>
								<div>
								  <h2 class="uppercase text-center text-2xl font-bold mt-3">{{$post->post_code}}</h2>
								</div>
							  </div>
							</div>
							<div class="flex text-center  justify-center items-center border-r border-t border-b border-dashed border-yellow-500">
							  <div class="px-20">
								<div >
								  <span class="font-bold uppercase text-4xl">giam {{$post->post_sale}}%</span>
								</div>
								<div class="text-center">
								  <span href="" class="bg-yellow-500 px-12 block py-3 rounded text-white"><button data-id={{$post->post_code}} id="set-code" class="uppercase">mua ngay</button></span>
								</div>
							  </div>
							</div>
						  </div>
						  @endforeach
						</div>
					  </div>
					</div>
					  
					  
					@foreach ($packs as $post)

			        <div class="col-md-3 animate-box">
				        <div class="price-box">
					    <h2 class="pricing-plan">{{$post->post_category}}</h2>
					        <div class="price"><sup class="text-7xl">{{$post->post_price}}</sup><small>Vnd</small><small>{{$post->post_month}}/Tháng</small></div>
					       <ul class="classes">
						      <li>{{$post->post_cardio}}</li>
						      <li class="color">{{$post->post_swimming}}</li>
		  				      <li>{{$post->post_yoga}}</li>
						      <li class="color">{{$post->post_zumba}}</li>
						      <li>{{$post->post_massage}}</li>
						      <li class="color">{{$post->post_boxing}}</li>
					      </ul>
						  <a href="{{ route('cart',$post->id) }}" class="btn btn-select-plan btn-sm">Chọn kế hoạch</a>
						</div>
			       </div>
			   @endforeach
		       </div>
	        </div>
        </div>
    </div>
	

	<div class="container mx-auto relative top-10 grid grid-cols-8 gap-8" >
		<div class="col-span-6 col-start-1">
		  <div class="mb-4">
			<h1 class="font-bold mb-2">
				3 Phút Tập Bụng 6 Múi Tại Nhà | Dân Thể Hình
			</h1>
			<div class="text-xl">
			  <p>Bạn muốn có cơ bụng 6 múi chuẩn ĐẸP thì hãy xem ngay 6 bài tập bụng trong clip này, đặc biệt bạn có thể tập ở bất cứ đâu mà không cần dụng cụ.</p>
			</div>
		  </div>
		  <div>
		   <span class="font-medium">XEM CLIP:</span>
		   <div>
			 <iframe width="835" height="480" src="https://www.youtube.com/embed/rGrfmv1WaC0?autoplay=1&mute=1&controls=1"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		   </div>
		  </div>
		  @foreach ($video as $post)
		  <div class="my-32">
			<span class="font-semibold">+{{$post->post_title}}</span>
			<div class="text-xl">
				<p> {{$post->created_at}}</p>
			  </div>
			<div>
			  <iframe width="835" height="480" src="https://www.youtube.com/embed/{{$post->post_link}}?autoplay=1&mute=1&controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		  </div>
		  @endforeach
		</div>
		<div class="col-span-2">
		  <div class="mb-4">
			  <img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/gym-roll-up-banner-design-template-3ce4a5c944efabe82c86b13f52873e44_screen.jpg?ts=1561478427" alt="">
		  </div>
		  <div class="mb-4">
			<img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/yellow-gym-ad-roll-up-banner-design-template-d0ec715151bc8212817bc511aab36528_screen.jpg?ts=1561437206" alt="">
		  </div>
		  <div class="mb-4">
			<img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/gym-%26-health-roll-up-banner-design-template-30df02001c34c3bae2a02ae4f9fb6b0f_screen.jpg?ts=1561437226" alt="">
		</div>
		<div class="mb-4">
			<img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/fitness-gym-roll-up-banner-design-template-3437568c1d20cbd4c337cfbbd3f46198_screen.jpg?ts=1561435660" alt="">
		</div>
		<div class="mb-4">
			<img width="270" height="500" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZqkaOnzKC5vb4q9iOiCka4VQVaLjJ2iHPwn9KLKDjURtys0_ToyB7yGcf9gmfQFd5rSA&usqp=CAU" alt="">
		</div>
		<div class="mb-4">
			<img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/yellow-fitness-gym-roll-up-banner-design-template-416d50f449174d62cc039ee82381e46d_screen.jpg?ts=1561435967" alt="">
		</div>
		<div class="mb-4">
			<img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/blue-gym-%26-fitness-roll-up-banner-design-template-3b4b32f90e7f1f139342bd94877cc52d_screen.jpg?ts=1561436117" alt="">
		</div>
		<div class="mb-4">
			<img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/yellow-gym-ad-roll-up-banner-design-template-d0ec715151bc8212817bc511aab36528_screen.jpg?ts=1561437206" alt="">
		</div>
		<div class="mb-4">
			<img width="270" height="500" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyER5thDOnRjEtNoU_tkj0907GUKGNNxrw27DQU3O57_Kgf1oErqXaNpK6tcqkCBYA1fE&usqp=CAU" alt="">
		</div>
		<div class="mb-4">
			<img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/green-fitness-rollup-banner-design-template-54de60cceb06cf035d189eacc138f663_screen.jpg?ts=1561439839" alt="">
		</div>
	
		</div>
	</div>



	<div id="fh5co-started" class="fh5co-bg" style="background-image: url(frontend/images/img_bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2>LỚP THỂ DỤC MÙA THU NÀY<br> <span> NHẬN GIẢM GIÁ <br> đến <span class="percent">35%</span> khi đăng ký tài khoản</span></h2>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <p><a href="registerusers"  style="background-color: #F85A16; !important;"  class="btn btn-default btn-lg">Đăng ký ngay</a></p>
                </div>
            </div>
        </div>
    </div>
	<footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(frontend/images/img_bg_1.jpg);" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>Chăm Sóc Khách Hàng</h3>
                    <div>
						<ul class="fh5co-footer-links">
							<li><a>Trung Tâm Trợ Giúp</a></li>
							<li><a>Thanh Toán</a></li>
							<li><a>Chính Sách Hỗ Chựo</a></li>
							<li><a href="{{ url ('BMI') }}">Kiểm Tra Chỉ Số BMI</a></li>
							<li><a href="{{ url ('BMR') }}">Kiểm Tra Chỉ Số BMR</a></li>
							<li><a href="{{ url ('videogiamcan') }}">Video Tập Giảm Cân</a></li>
							<li><a href="{{ url ('videotangco') }}">Video Tập Tăng Cân</a></li>

						</ul>
					</div>
				</div>
				<div class="col-md-4 fh5co-widget">
					<h3>Các lớp tập luyện</h3>
                    <div>
						<ul class="fh5co-footer-links">
							<li><a href="{{ url ('pricing') }}">Cardio</a></li>
							<li><a href="{{ url ('pricing') }}">swimming</a></li>
							<li><a href="{{ url ('pricing') }}">Yoga</a></li>
							<li><a href="{{ url ('pricing') }}">Boxing</a></li>
							<li><a href="{{ url ('pricing') }}">Runing</a></li>
							<li><a href="{{ url ('pricing') }}">Zumba</a></li>
							<li><a href="{{ url ('pricing') }}">Message</a></li>

						</ul>
					</div>
				</div>
				<div class="col-md-4 fh5co-widget">
					<h3>Thanh Toán</h3>
                    <div>
						<ul class="fh5co-footer-links">
							<li><a>Visa</a></li>
							<li><a>MB Quân Đội: 5797934566666</a></li>
							<li><a>Vietcombank: 1017492201</a></li>
							<li><a>TP Bank:07979582888</a></li>
							<li><a>Chủ Tài Khoản: Nguyễn Công Luật</a></li>
						</ul>
					</div>
				</div>
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block" style="background-color: rgb(158 146 135)">&copy; Chịu trách nhiệm quản lý nội dung : Nguyễn Công Luật - Điện Thoại Liên Hệ:0386358006</small>
						<small class="block" style="color: rgb(255, 142, 77)">Địa chỉ: Tầng 4-5-6 Tòa nhà Anphat - Cầu Giấy - Hà Nội<a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a><i class="icon-twitter"></i></a></li>
							<li><a><i class="icon-facebook"></i></a></li>
							<li><a><i class="icon-linkedin"></i></a></li>
							<li><a><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="frontend/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="frontend/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="frontend/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="frontend/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="frontend/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="frontend/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="frontend/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="frontend/js/jquery.magnific-popup.min.js"></script>
	<script src="frontend/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="frontend/js/main.js"></script>
	<script>
		// window.addEventListener('DOMContentLoaded', (event) => {
		// 	console.log(document.querySelector('#set-code').dataset.id);
		// });
		(function activeNavMenu(){
		const active =	document.querySelectorAll('#forcus-nav-menu ul li');
			// console.log(active);
			// active.classList.add('active')
			const url = (window.location.href).split('/');
			// console.log(url[3]);
			active.forEach(element=>{
				// console.log(element);
				// console.log((element.firstElementChild.href).split('/')[3]);
				if((element.firstElementChild.href).split('/')[3]==url[3]){
					// console.log(element);
					element.classList.add('active');
				}
				
				
			})
		})();
		(function BMR(){
			
			document.querySelector('#btn-bmr').addEventListener('submit', (e)=>{
				e.preventDefault();
				let sex = document.querySelectorAll('[name="radio-stacked"]');
				let result = document.getElementById('result-bmr');
				sex.forEach(ele=>{
					if(ele.checked){
						sex =ele.value;
					}
				})
				const kg = document.querySelector('[name="kg"]').value;
				 const height = document.querySelector('[name="height"]').value;
				 const age = document.querySelector('[name="age"]').value;
				if(sex=='nu'){
					// result.innerHTML = Math.round(655 + (9.6 * kg) + (1.8 * height) - (4.7 * age))+' calo <br>';
					if(Math.round(655 + (9.6 * kg) + (1.8 * height) - (4.7 * age))>1200){
						result.innerHTML=Math.round(655 + (9.6 * kg) + (1.8 * height) - (4.7 * age))+' calo bạn cần giảm cân';
					}else{
						result.innerHTML=Math.round(655 + (9.6 * kg) + (1.8 * height) - (4.7 * age))+' calo bạn không phải giảm cân';
					}
				}else{
					if(Math.round(66 + (13.7 * kg) + (5 * height) - (6.8 * age))>1800){
						result.innerHTML=Math.round(66 + (13.7 * kg) + (5 * height) - (6.8 * age))+'calo bạn cần giảm cân';
					}else{
						result.innerHTML=Math.round(66 + (13.7 * kg) + (5 * height) - (6.8 * age))+'calo bạn không cần giảm cân';
					}
				
				}
			})
	
		})()
		
	</script>


	</body>
</html>
