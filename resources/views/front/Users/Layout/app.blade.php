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
							<li><a><i class="icon-twitter"></i></a></li>
							<li><a><i class="icon-dribbble"></i></a></li>
							<li><a><i class="icon-github"></i></a></li>
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
							<li class=""><a href="{{ url ('trang-chu') }}">Trang ch???</a></li>
							<li class="has-dropdown">
								<a href="{{ url ('blog') }}">B??i vi???t</a>
								<ul class="dropdown">
									<li><a href="blog5">Dinh d?????ng</a></li>
									<li><a href="blog6">Ti???u ???????ng</a></li>
								</ul>
							</li>
							<li class="has-dropdown">
								<a href="{{ url ('pricing') }}">D???ch v???</a>
								<ul class="dropdown">
									<li><a href="{{ url ('trainer') }}">Hu???n luy???n vi??n</a></li>
									<li><a href="{{ url ('BMR') }}">Ki???m tra ch??? s??? BMR</a></li>
									<li><a href="{{ url ('BMI') }}">Ki???m tra ch??? s??? BMI</a></li>
									<li><a href="{{ url ('videogiamcan') }}">Video t???p gi???m c??n</a></li>
									<li><a href="{{ url ('videotangco') }}">Video t???p t??ng c??</a></li>
								</ul>
							</li>
							<li><a href="{{ url ('contact') }}">Li??n h???</a></li>
							<li class="has-dropdown">
								<a>Login</a>

								<ul class="dropdown">
									<li><a href="loginusers">????ng nh???p</a></li>
									<li><a href="registerusers">????ng k??</a></li>
									<li><a href="login">Admin</a></li>

								</ul>
							</li>

						</ul>
					</div>
					<div>
						<form action="{{url('/search')}}">
							<input id="place-search" type="search"name="search" placeholder="T??m ki???m...">
							<button id="btn-search" type="submit">Search</button>
							</form>
					</div>
				</div>

			</div>
		</div>
	</nav>

@yield('body')
<div id="fh5co-started" class="fh5co-bg" style="background-image: url(frontend/images/img_bg_3.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2>L???P TH??? D???C M??A THU N??Y<br> <span> NH???N GI???M GI?? <br> ?????n <span class="percent">35%</span> khi ????ng k?? t??i kho???n</span></h2>
			</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center">
				<p><a href="registerusers"  style="background-color: #F85A16; !important;"  class="btn btn-default btn-lg">????ng k?? ngay</a></p>
			</div>
		</div>
	</div>
</div>
    <footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(frontend/images/img_bg_1.jpg);" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>Ch??m S??c Kh??ch H??ng</h3>
                    <div>
						<ul class="fh5co-footer-links">
							<li><a>Trung T??m Tr??? Gi??p</a></li>
							<li><a>Thanh To??n</a></li>
							<li><a>Ch??nh S??ch H??? Ch???o</a></li>
							<li><a href="{{ url ('BMI') }}">Ki???m Tra Ch??? S??? BMI</a></li>
							<li><a href="{{ url ('BMR') }}">Ki???m Tra Ch??? S??? BMR</a></li>
							<li><a href="{{ url ('videogiamcan') }}">Video T???p Gi???m C??n</a></li>
							<li><a href="{{ url ('videotangco') }}">Video T???p T??ng C??n</a></li>

						</ul>
					</div>
				</div>
				<div class="col-md-4 fh5co-widget">
					<h3>C??c l???p t???p luy???n</h3>
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
					<h3>Thanh To??n</h3>
                    <div>
						<ul class="fh5co-footer-links">
							<li><a>Visa</a></li>
							<li><a>MB Qu??n ?????i: 5797934566666</a></li>
							<li><a>Vietcombank: 1017492201</a></li>
							<li><a>TP Bank:07979582888</a></li>
							<li><a>Ch??? T??i Kho???n: Nguy???n C??ng Lu???t</a></li>
							<li><a href="https://www.facebook.com/profile.php?id=100059688523687" class="text-blue-500">Facebook: Fitness LifeStyle VN</a></li>

						</ul>
					</div>
				</div>
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block" style="background-color: rgb(158 146 135)">&copy; Ch???u tr??ch nhi???m qu???n l?? n???i dung : Nguy???n C??ng Lu???t - ??i???n Tho???i Li??n H???:0386358006</small>
						<small class="block" style="color: rgb(255, 142, 77)">?????a ch???: T???ng 4-5-6 T??a nh?? Anphat - C???u Gi???y - H?? N???i<a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
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
		<a class="js-gotop"><i class="icon-arrow-up"></i></a>
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
		// Reply box popup JS
		$(document).ready(function(){
		  $(".reply-popup").click(function(){
			$(".reply-box").toggle();
		  });
		});
		</script>
	<script>

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
						result.innerHTML=Math.round(655 + (9.6 * kg) + (1.8 * height) - (4.7 * age))+' calo b???n c???n gi???m c??n <br><a href="/videogiamcan"><button type="button" class="btn btn-warning">Xem ngay</button></a>';
					}else{
						result.innerHTML=Math.round(655 + (9.6 * kg) + (1.8 * height) - (4.7 * age))+'  calo b???n kh??ng ph???i gi???m c??n ';
					}
				}else{
					if(Math.round(66 + (13.7 * kg) + (5 * height) - (6.8 * age))>1800){
						result.innerHTML=Math.round(66 + (13.7 * kg) + (5 * height) - (6.8 * age))+' calo b???n c???n gi???m c??n <br><a href="/videogiamcan"><button type="button" class="btn btn-warning">Xem ngay</button></a>';
					}else{
						result.innerHTML=Math.round(66 + (13.7 * kg) + (5 * height) - (6.8 * age))+' calo b???n kh??ng c???n gi???m c??n';
					}

				}
			})
		})()
	</script>


	</body>
</html>
