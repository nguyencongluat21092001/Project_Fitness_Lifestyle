@extends('front.Users.Layout.app')
@section('body')



<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/giam-can-cho-dan-van-phong.jpeg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>FITNESS</h1>
						<p><a href="https://www.youtube.com/watch?v=Az1C_CdWmjA" style="background-color: #ff9900 !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container" id="container">
			<p> &nbsp;Chuyên mục Fitness bao gồm những thông tin về các môn luyện tập cho sức khỏe tim mạch, đi bộ, các môn chạy nhảy sức mạnh, sức bền cơ bắp
				bodybuilding, crossfit, các hoạt động ngoài trời, funtional training, khả năng giữ thăng bằng, dẻo dai, khả năng cải thiện tốc độ, phân tích thành phần
				cơ thể, phương pháp tập luyện. Với những thông tin này,chúng tôi hy vọng mang lại những điều bổ ích cho bạn giúp cuộc sống của bạn năng động và hạnh phúc hơn.
			</p>
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
