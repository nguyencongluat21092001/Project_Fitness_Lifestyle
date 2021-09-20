@extends('front.Users.Layout.app')
@section('body')


	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/trainer-4.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Fitness Trainer</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>HUẤN LUYỆN VIÊN</h2>
				</div>
			</div>
			<p>Có khi nào bạn cảm thấy chán nản, không còn động lực tập Gym hay chưa? Những lúc như vậy bạn sẽ làm gì để vực lại tinh thần, lấy lại phong độ tập luyện? Theo Thiên Trường Sport, những cây nói hay về tập Gym hay những stt hay về tập Gym sẽ truyền cảm hứng cho bạn thêm yêu thích và say mê tập Gym hơn. Vậy, bạn đã biết những câu nói hay nào về tập Gym chưa? Nếu chưa, hãy cùng chúng tôi tham khảo những câu nói hay nhất về tập Gym qua chủ đề này nhé !</p>
             <h3>I.Những câu nói hay về tập Gym của The Rock.</h3>
			 <p>Nếu bạn là người yêu thích phim hành động Mỹ thì không thể không biết diễn viên The Rock. Siêu sao hành động của điện ảnh Hollywood này đã từng 17 lần đoạt cúp vô địch trên sàn đấu vật thế giới. Ông có rất nhiều câu nói hay, truyền cảm hứng tập luyện thể hình mãnh liệt cho các bạn trẻ. Dưới đây là những câu nói truyền động lực tập Gym của The Rock được nhiều người yêu thích nhất !</p>
			 <p>1."Thành công không đến trong một sớm một chiều. Nó chỉ đến khi mỗi ngày bạn đều cố gắng làm tốt hơn ngày hôm qua. Và rồi thành công sẽ đến" - The Rock.</p>
			 <p>2. "Con đường dẫn đến thành công được làm nên từ những viên gạch của sự kiên trì. Hãy là chính mình, vượt qua mọi chướng ngại và theo đuổi ước mơ của bản thân" - The Rock.</p>
			 <p>3. "Để có được sự tôn trọng, bạn phải bỏ ra cả máu và mồ hôi".</p>
			 <p>4. "Tôi luôn trân trọng khoảng thời gian khó khăn trước đây. Nó là động lực để tôi không ngừng cố gắng ở hiện tại".</p>
			 <p>5. "Bất kỳ thành công nào cũng đến từ sự tập trung và nỗ lực cố gắng".</p>
			 <p>6. "Tôi đã học được một điều từ khi còn rất nhỏ: không gì có thể thay thế cho làm việc chăm chỉ".</p>
			 <h3>II.Những câu nói hay về tập Gym của người nổi tiếng.</h3>
			 <p>1."Tôi có một nhu cầu bất tận là được học hỏi, được cải thiện, được phát triển, không chỉ để làm hài lòng huấn luyện viên và người hâm mộ, mà còn để tự thỏa mãn bản thân mình" - Ronaldo.</p>
			 <p>2."Bạn sẽ cảm thấy tổn thương, chán nản, nhưng càng chăm chỉ, bạn sẽ càng thấy kết quả. Thân hình bạn đẹp đến mức nào cũng không tỉ lệ thuận với sức tạ bạn nâng mà tỉ lệ thuận với cách bạn nỗ lực nâng chúng đến mức nào" - Joe Manganlello.</p>
			 <p>3."Khi tập luyện, hãy lắng nghe cơ thể mình. Còn khi thi đấu, bảo nó ngậm mồm lại" - Rich Froning Jr.</p>
			 <p>4. "Chẳng có công thức bí mật nào cả. Tôi nâng tạ nặng, tôi tập luyện chăm chỉ và tôi luôn đặt mục tiêu trở thành người giỏi nhất" - Ronnie Coleman.</p>
			 <p>5."Tài khoản sức khỏe và tài khoản ngân hàng đều như nhau. Bạn bỏ vào càng nhiều thì bạn rút ra càng nhiều. Tập luyện là vua còn dinh dưỡng là hoàng hậu. Kết hợp cả hai, bạn sẽ làm chủ một vương quốc" - Jack Lalanne.</p>
			 <h3>III. Huấn luyện viên Fitness Lifrstyle</h3>
			 <div class="container-fluid">
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-portfolio-list">
							@foreach ($posts as $post)
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(storage/images/trainer/{{$post->post_image}}); ">
								<a>

									<div class="case-studies-summary" style="text-align: center">
                                        <h2>{{$post->post_name}}</h2>
                                        <div>
                                            <span>{{$post->post_age}}Tuổi/</span>
                                            <span>{{$post->post_experience}}-Năm Kinh nghiệm</span><br>
                                            <span style="color: rgb(255, 156, 43)">Địa chỉ:{{$post->post_introduce}}</span>
                                        </div>
                                    </div>
								</a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
				<h3>Lời kết:</h3>
			<p>Vậy là, bài viết trên đây của Thiên Trường Sport đã tổng hợp rất nhiều các câu nói hay về tập Gym. Những câu nói này có tác dụng tạo động lực, truyền cảm hứng tập luyện cho các bạn Gymer rất hiệu quả. Nếu bạn thỉnh thoảng cảm thấy chán chường khi tập Gym thì hãy đọc những câu nói này để vực dậy tinh thần nhé ! Cảm ơn các bạn đã theo dõi bài viết. Nếu bạn biết thêm những câu nói tập Gym nào hay, hãy chia sẻ với chúng tôi để bài viết này đầy đủ hơn nhé ! Xin chào và hẹn gặp lại các bạn ở các bài viết tiếp theo !</p>
			</div>
		</div>
	</div>

    @endsection
