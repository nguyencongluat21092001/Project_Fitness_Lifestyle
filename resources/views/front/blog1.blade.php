@extends('front.Users.Layout.app')
@section('body')




<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/gallery-15.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Phòng Tập</h1>
						<p><a href="https://www.youtube.com/watch?v=w2b4zKHiTGw" style="background-color: #ff9900 !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container" id="container">
			<p >Bạn đang tìm kiếm những địa điểm để tập luyện hay dạy học các bộ môn mà mình yêu thích? Đừng bỏ qua trang
				Review của chúng tôi nhé. Review là trang cung cấp đầy đủ thông tin của phòng gym/câu lạc bộ thuộc các bộ
				môn như gym, yoga, các loại võ thuật (Karate, Taekwondo, Judo…) boxing, Muay Thái… Mỗi bài viết là những
				phòng thuộc từng quận khác nhau, bạn sẽ tiện lợi hơn trong việc tìm hiểu và chọn nơi học hay tập luyện gần
				với mình nhất.</p>
			<div class="row row-bottom-padded-md">
				@foreach ($blogs as $post)
				<div class="col-lg-4 col-md-4 child-blog-content" >
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive images-blog" src="storage/images/blog/{{$post->post_image}}" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>{{$post->post_title}}</a></h3>
							<span class="posted_on">{{$post->created_at}}</span>
							<span class="comment"><a href=""><i class="icon-speech-bubble"></i></a></span>
							<p class="desc-blog">{{$post->post_content}}</p>
							<a href="{{$post->post_link}}" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	@endsection
