@extends('front.Users.Layout.app')
@section('body')
    
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/slide-01.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						   <div style="background-color: rgba(146, 142, 142, 0.574);">
							<div style="padding: 20px; display:flex; justify-content:center">
								<div>
									<h2>Vui lòng trả lời những câu hỏi dưới đây để tính BMI của bạn</h2>
									<form >
										<div class="form-group">
											<input type="number" style="background-color: #fff " name="kg"class="form-control form-control-user"
												id="exampleInputEmail" aria-describedby="emailHelp"
												placeholder="Cân nặng của bạn(kg)?">
										</div>
										<div class="form-group">
											<input type="text"  style="background-color: #fff " name="height"class="form-control form-control-user"
												id="exampleInputPassword" placeholder="Chiều cao của bạn(cm)?">
										</div>
										<button type="submit" class="btn btn-primary btn-user btn-block"name="btn">Xem Kết quả</button>
									</form>
									<?php
								
									if (isset($_GET['btn'])) {
										$kg = $_GET['kg'];
										$height = $_GET['height'];
										$total = totalCart($kg,$height);
										echo '<div style="font-size:20px; color:#000000; font-weight: 700;">', 'kq: ', $total,'<div>';
									}
								   
								  
								 function totalCart($kg, $height){
									$result=1;
									$BMI = $kg / ($height*$height);
									$BMI= round($BMI,1);
								
									if($BMI>=40){
										$result = $BMI.' -> Béo phì độ III click nút dưới đây để xem giải pháp tốt nhất cho cơ thể hiện tại của bạn <br><a href="/Fat3"><button type="button" class="btn btn-warning">xem ngay</button></a> ';
									}else if (35 <= $BMI && $BMI < 40) {
										$result = $BMI.' -> Béo phì độ II click nút dưới đây để xem giải pháp tốt nhất cho cơ thể hiện tại của bạn <br><a href="/Fat2"><button type="button" class="btn btn-warning">xem ngay</button></a>';
									}else if (30 <= $BMI &&  $BMI < 35) {
										$result = $BMI.' -> Béo phì độ I click nút dưới đây để xem giải pháp tốt nhất cho cơ thể hiện tại của bạn <br><a href="/Fat1"><button type="button" class="btn btn-warning">xem ngay</button></a>';
									}else if (25 <=$BMI&& $BMI < 30) {
										$result = $BMI.' -> Béo phì độ I click nút dưới đây để xem giải pháp tốt nhất cho cơ thể hiện tại của bạn <br><a href="/Fat1"><button type="button" class="btn btn-warning">xem ngay</button></a>';
									}else if (18 <=$BMI&& $BMI < 25) {
										$result = $BMI.' -> Bình thường "Very Good"';
									}
									else if (17 <=$BMI && $BMI < 18.5) {
										$result = $BMI.' -> Gầy độ I click nút dưới đây để xem giải pháp tốt nhất cho cơ thể hiện tại của bạn <br><a href="/Thin1"><button type="button" class="btn btn-warning">xem ngay</button></a>';
									}else if (16 <=$BMI && $BMI < 17) {
										$result = $BMI.' -> Gầy độ II click nút dưới đây để xem giải pháp tốt nhất cho cơ thể hiện tại của bạn <br><a href="/Thin2"><button type="button" class="btn btn-warning">xem ngay</button></a>';
									}else {
										$result = $BMI.' -> Gầy độ III click nút dưới đây để xem giải pháp tốt nhất cho cơ thể hiện tại của bạn <br><a href="/Thin3"><button type="button" class="btn btn-warning">xem ngay</button></a>';
									}
									return $result;
									// array_push($arr, $result);
								 }
								
								?>
								</div>					
							</div>
						   </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="fh5co-pricing">
		<div class="container">
			<div class="row animate-box">
				
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Chỉ số BMI là gì?</h2>
					<p>Chỉ số BMI (Body Mass Index) là chỉ số khối lượng của cơ thể, chỉ số thể trọng hay chỉ số cân nặng. Nó là công cụ được Adolphe Quetelet – Nhà khoa học người Bỉ nghiên cứu năm 1832 và sau này được áp dụng rộng rãi.</p>
				    
				</div>
			</div>
		<h3>1.Công thức tính chỉ số BMI</h3>
			 <p>Cách tính chỉ số BMI khá đơn giản, bạn chỉ cần đo chính xác cân nặng và chiều cao của mình. Dưới đây là công thức tính BMI đạt chuẩn theo hướng dẫn của Viện Dinh dưỡng Quốc Gia.</p>
			 <span  style="display: flex;justify-content:center"><img class="img-responsive" src="frontend/images/cách-tính-bmi.jpeg" width="60%" height="50%" alt=""></span><br>
			 <p>+Công thức này được dùng để tính BMI cho cả nam lẫn nữ trưởng thành. Tuy nhiên, ta không áp dụng để tính chỉ số cho người tập luyện thể hình, phụ nữ mang thai và vận động viên.</p>
             <p>+Trong đó: Chiều cao tính theo đơn vị chuẩn là mét (m), cân nặng đơn vị kilogram (kg).</p>
             <p>+Chỉ số BMI lý tưởng (bình thường) dao động trong khoảng 18,5 – 24,9.</p>
			 <span  style="display: flex;justify-content:center"><img class="img-responsive" src="frontend/images/20190515_023453_074691_chi-so-BMI-phan-loa.max-1800x1800.png" width="80%" height="50%" alt=""></span><br>

        <h3>2.Chỉ số BMI bao nhiêu là thừa cân, béo phì?</h3>
             <p>Chỉ số BMI bao nhiêu là lý tưởng? Nếu chỉ số BMI của bạn từ 30,0 trở lên tức là bạn đang được xếp loại là thừa cân, béo phì.Có thể bạn chưa biết, thừa cân – béo phì ảnh hưởng rất nhiều đến sức khỏe. Những người béo phì có tỷ lệ đột tử cao hơn người bình thường vì họ sẽ dễ mắc phải các căn bệnh như:</p>
			 <span  style="display: flex;justify-content:center"><img class="img-responsive" src="frontend/images/bmi.jpeg" width="40%" height="50%" alt=""></span><br>
			 <p>+Bệnh tiểu đường loại 2, cholesterol cao dẫn đến mỡ trong máu.</p>
             <p>+Bệnh tim mạch, viêm túi mật.</p>
			 <p>+Đặc biệt, thường xuyên gặp các vấn đề về hô hấp và dễ mắc bệnh ung thư.</p>
        <h3>3.Chỉ số BMI quá cao hay quá thấp ảnh hưởng như thế nào đến sức khỏe?</h3>
			 <p>Bạn có biết, công thức tính BMI cho người lớn để xác định chỉ số cân nặng giúp kiểm tra tình trạng thừa cân, béo phì và sức khỏe của bản thân. </p>
			 <p>+Nếu chỉ số BMI từ 30,0 trở lên, bạn có nguy cơ mắc bệnh béo phì và một số bệnh khác như tim mạch, tiểu đường, mỡ máu cao,…</p>
			< p>+Nếu chỉ số cân nặng BMI dưới 18,5, bạn đang thiếu dinh dưỡng, cân nặng thấp so với chiều cao. Từ đó, bạn có nguy cơ mắc các bệnh như thiếu máu, loãng xương vì thiếu vitamin D và canxi. </p>
        <h3>4.Những yếu tố ảnh hưởng đến trọng lượng cơ thể</h3>
			 <p>Chỉ số trọng lượng cơ thể có thể bị ảnh hưởng bởi các yếu tố về cơ địa, tuổi tác hay chế độ dinh dưỡng, bao gồm:</p>
             <p>+Gen di truyền: Một số trường hợp do gen truyền dẫn đến thừa cân, béo phì.</p>
			 <p>+Lượng calories: Lượng calories dư thừa sẽ dẫn đến thừa cân, béo phì. Do đó bạn chỉ nên nạp lượng calo vừa đủ.</p>
			 <p>+Tuổi tác: Khi tuổi cao, cân nặng cũng tăng thêm một chút.</p>
			 <p>+Sau khi sinh con: Phụ nữ sau khi sinh thường không thể giảm cân về mức bình thường như ban đầu.</p>
        <h3>5.Làm thế nào để có chỉ số BMI lý tưởng?</h3>
		<span><img class="img-responsive" src="frontend/images/tap-the-duc-buoi-sang-giam-can.png" width="100%"alt=""><br><h5>Siêng năm tập thể dục</h5></span><br>
			 <p>Chỉ số BMI lý tưởng chỉ khi khối lượng của bạn ở mức cho phép, rất nhiều người có chỉ số BMI >30 do thừa cân. Phương pháp giúp bạn giảm chỉ số BMI về mức cân bằng đó chính là giảm cân. </p>
			 <p>Bạn chỉ cần áp dụng theo nguyên tắc, nạp ít năng lượng tinh bột, kết hợp chế độ luyện tập và ăn uống lành mạnh. Với 70% dựa vào chế độ ăn uống, sinh hoạt và 30% dành cho việc đốt cháy calo như tập luyện, thể thao.</p>
        <h3>6.Chế độ ăn uống hợp lý</h3>
			 <p>Bạn có biết, chế độ ăn uống hàng ngày tác động trực tiếp đến chỉ số cân nặng cũng bạn. Nếu bạn đang muốn giảm cân và hướng đến một chỉ số BMI nhều người mơ ước thì tốt nhất bạn không nên ăn các món ăn chứa nhiều dầu mỡ như thức ăn nhanh, đồ ngọt, nước uống có gas, rượu bia,…Thay vào đó, bạn nên ăn nhiều rau xanh, trái cây, các loại hạt ngũ cốc kết hợp thêm chất đạm từ ức gà và thịt bò. Bạn nên chia nhỏ khẩu phần ăn thành các bữa nhỏ trong ngày, việc này sẽ giúp bạn hạn chế nạp quá nhiều calo cùng một lúc.</p>
        <h3>7.Các bài tập thể dục vừa phải</h3>
			<p>Bên cạnh chế độ ăn uống hợp lý, lành mạnh, bạn nên kết hợp thêm các bài tập tăng chiều cao, bài tập giảm mỡ bụng để có chỉ số BMI lý tưởng.</p>
			<span style="display: flex;justify-content:center"><img class="img-responsive" src="frontend/images/chi-so-bmi-la-gi.jpeg" width="40%" height="50%" alt=""></span><br>
			<p>Một số bài thể dục được WHO khuyến khích dành cho người thừa cân, béo phì như chạy bộ, đạp xe hoặc các bài tập aerobic tại nhà để thiêu đốt lượng mỡ trong cơ thể, rút ngắn quá trình giảm cân.</p>
			<p>Với mỗi bài tập thể dục, bạn hãy duy trì trong vòng 30 phút – 1 tiếng. Luyện tập thể dục thể thao mỗi ngày không chỉ giúp bạn giảm cân, đốt cháy mỡ thừa mà còn ngăn ngừa các bệnh lý về tim mạch, huyết áp,…</p>
            <p>Như vậy, qua bài viết này, bạn đã biết cách đo và tính chỉ số BMI cho mình rồi đúng không nào? Vậy bạn đang thiếu cân hay béo phì? Nếu chỉ số BMI chưa đạt mức lý tưởng, bạn hãy lên kế hoạch cải thiện thể chất ngay từ bây giờ nhé.</p>
			{{-- <div class="row">
				<div class="pricing">
					@foreach ($packs as $post)
						
					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">{{$post->post_category}}</h2>
							<div class="price"><sup class="currency">$</sup>{{$post->post_price}}<small>{{$post->post_month}}</small></div>
							<ul class="classes">
								<li>{{$post->post_cardio}}</li>
								<li class="color">{{$post->post_swimming}}</li>
								<li>{{$post->post_yoga}}</li>
								<li class="color">{{$post->post_zumba}}</li>
								<li>{{$post->post_massage}}</li>
								<li class="color">{{$post->post_boxing}}</li>
								<li>{{$post->post_category}}</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>
					@endforeach
				</div>
			</div> --}}
			<div style="display: flex;justify-content:center">
				<div class="col-md-6 animate-box" >
					<h3>Ý KIẾN CỦA BẠN</h3>
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
								<textarea  type="text" name="post_comment"id="message" cols="30" rows="10" class="form-control" placeholder="Để lại chỉ số của bạn (BMI) để chúng tôi tư vấn cụ thể."></textarea>
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