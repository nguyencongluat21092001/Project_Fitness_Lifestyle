
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
									&nbsp????
								</button>
								<div class="dropdown-menu" style="background: rgb(255, 255, 255)">
									<li class="text-center" ><a href="trang-chu">????ng xu???t</a></li>

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
							<li class=""><a href="{{ url ('trang-chu') }}">Trang ch???</a></li>
							<li class="has-dropdown">
								<a href="{{ url ('blog') }}">B??i vi???t</a>
								<ul class="dropdown">
									<li><a href="blog5">Dinh d?????ng</a></li>
									<li><a href="blog6">Ti???u ???????ng</a></li>
									<li><a href="blog4">B??o ph??</a></li>
									<li><a href="blog1">Ph??ng t???p</a></li>
									<li><a href="blog3">Fitness</a></li>
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
							<h1 style="font-weight: 700; color:#fff;opacity: 2">CH??O M???NG B???N ?????N V???I FITNESS_LIESTYLE!!!</h1>
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
                        <h3>C??? t???</h3>
                        <p style="height: 165px">C??? t??? l?? m???t m??n th??? thao trong ???? ng?????i ch??i (g???i l?? l???c s?? hay ???? c???) c??? g???ng n??ng m???t v???t bao g???m thanh t??? ???????c g???n v???i c??c ????a t???, m???i l???n n??ng l?? m???t c?? n??ng sao cho kh???i l?????ng v???t n??ng l?? cao nh???t.</p>
                        <p><a href="https://www.youtube.com/watch?v=AOaYNJgGbTk" style="background-color: #F85A16; !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><img class="img-responsive" src="frontend/images/exercise.svg" alt=""></span>
                        <h3>Ch???y b???</h3>
                        <p style="height: 165px">Ch???y b??? l?? m???t h??nh th???c ch???y n?????c ki???u ho???c ch???y v???i t???c ????? ch???m ho???c thong th??? v?? duy tr?? m???t t???c ????? ???n ?????nh ?????u trong su???t th???i gian ch???y. Ng??y nay, ch???y b??? l?? m???t trong nh???ng lo???i h??nh th??? thao c?? l???i cho s???c kh???e.</p>
                        <p><a href="https://www.youtube.com/watch?v=qnP5WLQcpaI" style="background-color: #F85A16; !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><img class="img-responsive" src="frontend/images/yoga-carpet.svg" alt=""></span>
                        <h3>Yoga</h3>
                        <p style="height: 165px">Yoga hay c??n g???i l?? "Du-gi??"l?? m???t h??? c??c ph????ng ph??p luy???n t??m v?? luy???n th??n c??? x??a b???t ngu???n t??? ???n ?????. C??c nh?? nghi??n c???u cho r???ng, th??? gi???i t??m linh c???a ???n ????? ???????c ph??? bi???n ch??nh qua kh??i ni???m Yoga n??y.</p>
                        <p><a href="https://www.youtube.com/watch?v=iSS4asEmIfE" style="background-color: #F85A16; !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container" id="container">
            <div class="row">
				<h2>R???T NHI???U C??C G??I KHUY???N M??I TR??? GI?? L??N ?????N 1.000.000 VND</h2>

		        <div class="pricing">
					<h3>I.Ch????ng tr??nh khuy???n m??i m??a h?? cho ng?????i mu???n gi???m c??n</h3>
					<p>&nbsp  ????y l?? m???t ch????ng tr??nh luy???n t???p v???i m???c ????ch gi???m c??n ????? c?? m???t c?? th??? kh???e ?????p, c??ng m???n trong m??a h??. Ch????ng tr??nh n??y k??o d??i 6 th??ng, c?? hu???n luy???n vi??n c?? nh??n ri??ng cho t???ng nh??m, v???i nh???ng b??i t???p b??i b???n v?? cam k???t ?????t hi???u qu??? nh?? mong mu???n ch??? sau 6 th??ng t???p luy???n.</p>
					<div class="my-8 mx-auto bg-gray-100" style="width: 800px">
                        <div class="flex justify-center gap-20 shadow">
							<p>&nbsp  "M???i s??ng t??i ch???n m???t clip h?????ng d???n nh???y hi???n ?????i r???i b???t k??nh YouTube ???? b???ng tivi ????? t??? m??nh nh???y theo, th???y to??t m??? h??i v?? r???t s???ng kho??i c??ng nh???ng ??i???u nh???c s??i ?????ng. Kh???i ?????ng ng??y m???i vui v???, r???i sau ?????y chu???n b??? cho m???t ng??y l??m vi???c r???t hi???u qu???" - ch??? ?????ng Th??? Thoa, 26 tu???i, khoe.</p>
							<p>&nbsp   "N???u tr?????c ????y tan gi??? l??m, 17h t??i ?????n ph??ng t???p gym th?? hi???n t???i t??i l??n l???ch t??? t???p ??? nh??, ch??? b??? m???t ng??y c?? th??? c??ng ?? ???m. Khi b??? t???p l??u, c??c c?? s??? b??? teo hay x??? ra, u???ng c??ng r??n luy???n b???y l??u. T???p th??? thao gi??p h??? mi???n d???ch c???a m??nh t???t h??n."" </p>
					    </div>
					</div>
					<div class="my-8 mx-auto bg-gray-100" style="width: 800px">
                        <div class="flex justify-center gap-20 shadow">
							<p>&nbsp C??n anh Nguy???n M???nh H??ng, 30 tu???i, nh???n m???nh: "S??? "l??n ng??i" c???a c??c ???ng d???ng t???p th??? d???c t???i nh?? cho th???y nhu c???u t???p luy???n th??? thao, b???o v??? s???c kh???e ng??y c??ng ???????c nhi???u ng?????i quan t??m. N???u nh?? b???n c??ng l?? "t??n ????? th??? thao" th?? ?????ng b??? qua s??? tr??? gi??p t??? c??c ???ng d???ng t???p th??? d???c n??y".</p>
					    </div>
					</div>
					<p>&nbsp  ?????c bi???t, ch??ng t??i tung ra g??i khuy???n m??i v???i m???c gi?? ??u ????i cho nh???ng ai ????ng k?? tham gia l???n ?????u v?? mong mu???n c?? c?? m???t body ho??n h???o.</p>
					<h3>II.Cam k???t hi???u qu???</h3>
					<p>&nbsp Ch??ng t??i cam k???t hi???u qu??? c???a qu?? tr??nh t???p luy???n c??ng nh?? c??c b??i t???p tr??n l???p h???c s??? mang ?????n cho b???n m???t body mong mu???n.b???n c?? th??? ?????n c?? s??? c???a ch??ng t??i g???n nh???t ????? xem tr???c ti???p c??c l???p t???p v?? n???u nh?? b???n ko c?? ??i???u ki???n ????? ?????n ph??ng t???p th?? ?????ng qu?? lo ch??ng t??i lu??n lu??n chia s??? tr???c ti???p c??c bu???i t???p cho c??c h???c vi??n qua Zoom Us.</p>
					<p> <strong>B???n c?? th??? tham kh???o v?? ch???n m?? gi???m gi?? d?????i ????y:</strong> </p>
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
								  <span href="" class="bg-yellow-500 px-12 block py-3 rounded text-white"><button data-id={{$post->post_code}} id="set-code" class="uppercase">S??? d???ng</button></span>
								</div>
							  </div>
							</div>
						  </div>
						  @endforeach
						</div>
					  </div>
					</div>



					{{-- @foreach ($packs as $post)

			        <div class="col-md-3 animate-box">
				        <div class="price-box">
					    <h2 class="pricing-plan">{{$post->post_category}}</h2>
					        <div class="price"><sup class="text-7xl">{{$post->post_price}}</sup><small>Vnd</small><small>{{$post->post_month}}/Th??ng</small></div>
					       <ul class="classes">
						      <li>{{$post->post_cardio}}</li>
						      <li class="color">{{$post->post_swimming}}</li>
		  				      <li>{{$post->post_yoga}}</li>
						      <li class="color">{{$post->post_zumba}}</li>
						      <li>{{$post->post_massage}}</li>
						      <li class="color">{{$post->post_boxing}}</li>
					      </ul>
						  <a href="{{ route('cart',$post->id) }}" class="btn btn-select-plan btn-sm">Ch???n k??? ho???ch</a>
						</div>
			       </div>
			   @endforeach --}}
		       </div>
	        </div>
        </div>
    </div>
    {{-- @foreach ($user as $item)
    <a href="{{route('store.router_training',$item->id)}}">training</a>
    @endforeach --}}



<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">T???t c??? Link video</h1>
    <?php
    $name = Session::get('success');
    if($name){
        echo $name;
    }else {

    }
    ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" style="text-align: center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>T??n l??? tr??nh</th>
                            <th>n???i dung</th>
                            <th>ng??y th???c hi???n</th>
                            <th>S???a</th>
                            <th>X??a</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $datas)

                        <tr>
                            <td>{{$datas->users->post_name}}</td>
                            <td>{{$datas->name}}</td>
                            <td>{{$datas->content}}</td>
                            <td>{{$datas->created_at}}</td>
                            <td ><div  style="height:100%;display: flex;justify-content:center;">
                                <button class="btn btn-primary" type="submit" style="margin:85% 0;outline: none;"> <a style=" display:inline-block;" href=""><i style="color: #fff"  class="far fa-edit "></i></a></button>
                            </div></td>
                                <td  style="height:100%;display: flex;justify-content:center;"><button type="button" class="btn btn-danger"  style="margin:92% 0; height:100%"> <a href=""><i  style="color: #fff" class="far fa-trash-alt"></i></button></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>







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
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="frontend/js/jquery.min.js"></script>
    <script src="frontend/admin/vendor/jquery/jquery.min.js"></script>

	<!-- jQuery Easing -->
	<script src="frontend/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="frontend/js/bootstrap.min.js"></script>
    <script src="frontend/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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
						result.innerHTML=Math.round(655 + (9.6 * kg) + (1.8 * height) - (4.7 * age))+' calo b???n c???n gi???m c??n';
					}else{
						result.innerHTML=Math.round(655 + (9.6 * kg) + (1.8 * height) - (4.7 * age))+' calo b???n kh??ng ph???i gi???m c??n';
					}
				}else{
					if(Math.round(66 + (13.7 * kg) + (5 * height) - (6.8 * age))>1800){
						result.innerHTML=Math.round(66 + (13.7 * kg) + (5 * height) - (6.8 * age))+'calo b???n c???n gi???m c??n';
					}else{
						result.innerHTML=Math.round(66 + (13.7 * kg) + (5 * height) - (6.8 * age))+'calo b???n kh??ng c???n gi???m c??n';
					}

				}
			})

		})()

	</script>


	</body>
</html>
