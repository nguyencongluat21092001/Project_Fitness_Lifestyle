@extends('front.Users.Layout.app')
@section('body')

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/blog.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Truyền Cảm hứng</h1>
						<p><a href="https://www.youtube.com/watch?v=uptbzOd5lis" style="background-color: #ff9900 !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
	{{-- <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/blog.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"><div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Truyền cảm hứng</h1>

						</div>
					</div>
				</div>
			</div>
		</div></div>
	</header> --}}


	<div id="fh5co-blog" class="fh5co-bg-section">

		<div class="container" id="container">
			<p>"Người có sức khỏe thì có cả trăm ngàn ước mơ, người không có sức khỏe thì chỉ có một ước mơ duy nhất là sức khỏe".
				Tuy nhiên, để có thể sống tốt sống khỏe không phải điều dễ dàng, bạn không có động lực tập luyện, thường xuyên bị
				căng thẳng và thói quen sinh hoạt không lành mạnh. Thế nhưng, những điều đã
				liệt kê ở trên có thể được giải tỏa. Chúng tôi sẽ mang đến cho bạn những bài viết thật hấp dẫn giúp bạn có động lực
				tập luyện, giúp bạn xóa đi những căng thẳng trong cuộc sống và hình thành thói quen tốt cho sức khỏe nữa nhé.</p>
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
