@extends('front.Users.Layout.app')
@section('body')



<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/nVxumDgt-dem-calorie-khien-ban-tau-hoa_001.jpeg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Dinh dưỡng</h1>
						<p><a href="https://www.youtube.com/watch?v=eLa-U1J3Kuw" style="background-color: #ff9900 !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
    <div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container" id="container">
			<p>Dinh dưỡng đóng vai trò rất quan trọng trong quá trình tập luyện. Nếu là người đang giảm cân, xây dựng cơ bắp, bạn cần kết hợp giữa tập luyện và có chế độ
				ăn uống phù hợp. chúng tôisẽ cung cấp cho bạn những thông tin về những thực phẩm lành mạnh giúp bạn tăng cân hay giảm cân, thực phẩm giàu protein, carbohydate,
				chất béo tốt, vitamin và khoáng chất, khẩu phần dinh dưỡng, kế hoạch cho bữa ăn, thực phẩm bổ sung, thực phẩm chức năng... Qua những bài viết, bạn sẽ có thêm kiến
				thức để lựa chọn thực thẩm tốt cho sức khỏe và có chế độ dinh dưỡng hợp lý hơn cho bản thân.</p>
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
