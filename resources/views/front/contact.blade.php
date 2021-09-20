@extends('front.Users.Layout.app')
@section('body')
<div id="fh5co-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-push-1 animate-box">
				
				<div class="fh5co-contact-info">
					<h3>Thông tin liên lạc</h3>
					<ul>
						<li class="address">8 Tôn Thất Thuyết,Hà Nội <br>FITNESS_LIFSTYLE - T2009E</li>
						<li class="phone"><a href="tel://1234567920">+84 386 358 006</a></li>
						<li class="email"><a href="mailto:info@yoursite.com">luatncth2007024@fpt.edu.vn</a></li>
						<li class="url"><a href="https://www.facebook.com/profile.php?id=100059688523687">Facebook: Fitness LifeStyle VN</a></li>
						<li class="email"><a>Bình luận</a>
						</li>
					</ul>
				</div>	
			</div>
			<div class="col-md-6 animate-box">
				<h3>Liên lạc</h3>
				<form action="{{ route('store.contact')}}" role="form" method="POST">
					@method("POST")
					@csrf
					<div class="row form-group">
						<div class="col-md-6">
							<!-- <label for="fname">First Name</label> -->
							<input type="text" name="post_name" id="fname" class="form-control" placeholder="Tên của bạn?">
						</div>
						<div class="col-md-6">
							<!-- <label for="lname">Last Name</label> -->
							<input type="text" name="post_age"id="lname" class="form-control" placeholder="Tuổi">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<!-- <label for="email">Email</label> -->
							<input type="text" name="post_adress"id="email" class="form-control" placeholder="Địa chỉ">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<!-- <label for="subject">Subject</label> -->
							<input type="number" name="post_phone"id="subject" class="form-control" placeholder="Điện thoại">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<!-- <label for="message">Message</label> -->
							<textarea  type="text" name="post_comment"id="message" cols="30" rows="10" class="form-control" placeholder="Hãy nói đôi điều về chúng tôi."></textarea>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" name="submit"class="btn btn-success">Gửi</button>
					</div>
					<?php
					$name = Session::get('success');
					if($name){
						echo $name;
					}else {
						
					}
					?>

				</form>		
			</div>
		</div>
		
	</div>
</div>

	@endsection
