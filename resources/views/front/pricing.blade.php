@extends('front.Users.Layout.app')
@section('body')

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/slide-01.jpg);" data-stellar-background-ratio="0.5">
		<div class="f5-trainer" >
			Thân hình săn chắc, đón chào trung Thu!
			<div class="f5-trainerone">
				<p>Chỉ trong tháng 9 này, chúng tôi không chỉ hướng dẫn bạn cách đạt được cơ thể mơ ước, mà còn giúp bạn có một khởi đầu hoàn hảo khi bắt tay vào tập luyện. Hãy trải nghiệm hoàn toàn miễn phí gói giảm cân dành cho VIP...</p>
			</div>
		</div >
	</header>

	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container" id="container">
            <div class="row">
				<h3>RẤT NHIỀU MÃ KHUYẾN MÃI TRỊ GIÁ LÊN ĐẾN 35% KHI ĐĂNG KÝ TÀI KHOẢN.📣📣📣</h3>
				<div class="pricing">
					<h3>I.Chương trình khuyến mãi mùa hè cho người muốn giảm cân</h3>
					<p>&nbsp  Đây là một chương trình luyện tập với mục đích giảm cân để có một cơ thể khỏe đẹp, căng mịn trong mùa hè. Chương trình này kéo dài 6 tháng, có huấn luyện viên cá nhân riêng cho từng nhóm, với những bài tập bài bản và cam kết đạt hiệu quả như mong muốn chỉ sau 6 tháng tập luyện.💪</p>
					<div class="my-8 mx-auto bg-gray-100" style="width: 800px">
                        <div class="flex justify-center gap-20 shadow">
							<p>&nbsp  "Mỗi sáng tôi chọn một clip hướng dẫn nhảy hiện đại rồi bật kênh YouTube đó bằng tivi để tự mình nhảy theo, thấy toát mồ hôi và rất sảng khoái cùng những điệu nhạc sôi động. Khởi động ngày mới vui vẻ, rồi sau đấy chuẩn bị cho một ngày làm việc rất hiệu quả" - chị Đặng Thị Thoa, 26 tuổi, khoe.</p>
							<p>&nbsp   "Nếu trước đây tan giờ làm, 17h tôi đến phòng tập gym thì hiện tại tôi lên lịch tự tập ở nhà, chứ bỏ một ngày cơ thể cũng ê ẩm. Khi bỏ tập lâu, các cơ sẽ bị teo hay xổ ra, uổng công rèn luyện bấy lâu. Tập thể thao giúp hệ miễn dịch của mình tốt hơn."" </p>
					    </div>
					</div>
					<div class="my-8 mx-auto bg-gray-100" style="width: 800px">
                        <div class="flex justify-center gap-20 shadow">
							<p>&nbsp   Còn anh Nguyễn Mạnh Hùng, 30 tuổi, nhấn mạnh: "Sự "lên ngôi" của các ứng dụng tập thể dục tại nhà cho thấy nhu cầu tập luyện thể thao, bảo vệ sức khỏe ngày càng được nhiều người quan tâm. Nếu như bạn cũng là "tín đồ thể thao" thì đừng bỏ qua sự trợ giúp từ các ứng dụng tập thể dục này".</p>
					    </div>
					</div>
					<p>&nbsp Đặc biệt, chúng tôi tung ra gói khuyến mãi với mức giá ưu đãi cho những ai đăng ký tham gia lần đầu và mong muốn có có một body hoàn hảo.</p>
					<h3>II.Cam kết hiệu quả </h3>
					<p>&nbsp Chúng tôi cam kết hiệu quả của quá trình tập luyện cũng như các bài tập trên lớp học sẽ mang đến cho bạn một body mong muốn 🔥🔥🔥.Bạn có thể đến cơ sở của chúng tôi gần nhất để học trực tiếp các lớp tập và nếu như bạn ko có điều kiện để đến phòng tập thì đừng quá lo chúng tôi luôn luôn chia sẻ trực tiếp các buổi tập cho các học viên qua Zoom Us.</p>
					<p><strong>Bạn có thể tham khảo 💰💰💰 dưới đây:</strong></p>
		        <div class="pricing">
			    @foreach ($packs as $post)

			        <div class="col-md-3 animate-box">
				        <div class="price-box">
					    <h2 class="pricing-plan">{{$post->packCategory->name}}</h2>
					        <div class="price"><sup class="text-7xl">{{$post->post_price}}</sup><small>Vnd</small><small>{{$post->post_month}}/Tháng</small></div>
					       <ul class="classes">
						      <li>{{$post->post_cardio}}</li>
						      <li class="color">{{$post->post_swimming}}</li>
		  				      <li>{{$post->post_yoga}}</li>
						      <li class="color">{{$post->post_zumba}}</li>
						      <li>{{$post->post_massage}}</li>
						      <li class="color">{{$post->post_boxing}}</li>
					      </ul>
						  <td><button class="btn btn-select-plan btn-sm" type="submit"> <a  href="{{ route('cart',$post->id) }}" style="color:rgb(255, 255, 255)">Chọn kế hoạch</a></button></td>
				       </div>
			       </div>
			   @endforeach
		       </div>
	        </div>
        </div>
    </div>
	<div class="shadow flex justify-center container mx-auto">
		<div class=" p-12 w-full flex justify-center">
			<div class="col-md-6 animate-box" >
				<h3>Ý KIẾN ĐÁNH GIÁ</h3>
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
							<textarea  type="text" name="post_comment"id="message" cols="30" rows="10" class="form-control" placeholder="Hãy để lại đánh giá của bạn về các gói kế hoạch trên."></textarea>
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


	@endsection
