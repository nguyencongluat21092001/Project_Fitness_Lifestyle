@extends('front.Users.Layout.app')
@section('body')


<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Video hướng dẫn giảm cân</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="container mx-auto relative top-10 grid grid-cols-8 gap-8" >
	<div class="col-span-6 col-start-1">
	  <div class="mb-4">
		<h1 class="font-bold mb-2">
		  Giảm mỡ bụng chưa bao giờ dễ thế chỉ với 10 phút mỗi ngày
		</h1>
		<div class="text-xl">
		  <p>Các nghiên cứu gần đây chỉ ra rằng, chỉ cần 10 phút tập thể dục mỗi ngày ngoài giảm mỡ bụng còn có thể đốt cháy chất béo hiệu quả, cải thiện sức đề kháng, sức chịu đựng và sự trao đổi chất của cơ thể.</p>
		</div>
	  </div>
	  <div>
	   <span class="font-medium">XEM CLIP:</span>
	   <div>
		 <iframe width="835" height="480" src="https://www.youtube.com/embed/Kg0Jhh9p9xI?autoplay=1&mute=1&controls=1"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	   </div>
	  </div>
	  @foreach ($videos as $post)
	    <div class="my-32">
		   <span class="font-semibold"> 📖. &nbsp{{$post->post_title}}</span>

		  <div class="text-xl">
			<p>&nbsp{{$post->created_at}}</p>
		  </div>
		<div>
		  <iframe width="835" height="480" src="https://www.youtube.com/embed/{{$post->post_link}}?&controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	  </div>
	  @endforeach
	</div>
	<div class="col-span-2">
	  <div class="mb-4">
		  <img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/gym-roll-up-banner-design-template-3ce4a5c944efabe82c86b13f52873e44_screen.jpg?ts=1561478427" alt="">
	  </div>
	  <div class="mb-4">
		<img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/yellow-gym-ad-roll-up-banner-design-template-d0ec715151bc8212817bc511aab36528_screen.jpg?ts=1561437206" alt="">
	  </div>
	  <div class="mb-4">
		<img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/gym-%26-health-roll-up-banner-design-template-30df02001c34c3bae2a02ae4f9fb6b0f_screen.jpg?ts=1561437226" alt="">
	</div>
	<div class="mb-4">
		<img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/fitness-gym-roll-up-banner-design-template-3437568c1d20cbd4c337cfbbd3f46198_screen.jpg?ts=1561435660" alt="">
	</div>
	<div class="mb-4">
		<img width="270" height="500" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZqkaOnzKC5vb4q9iOiCka4VQVaLjJ2iHPwn9KLKDjURtys0_ToyB7yGcf9gmfQFd5rSA&usqp=CAU" alt="">
	</div>
	<div class="mb-4">
		<img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/yellow-fitness-gym-roll-up-banner-design-template-416d50f449174d62cc039ee82381e46d_screen.jpg?ts=1561435967" alt="">
	</div>
	<div class="mb-4">
		<img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/blue-gym-%26-fitness-roll-up-banner-design-template-3b4b32f90e7f1f139342bd94877cc52d_screen.jpg?ts=1561436117" alt="">
	</div>
	<div class="mb-4">
		<img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/yellow-gym-ad-roll-up-banner-design-template-d0ec715151bc8212817bc511aab36528_screen.jpg?ts=1561437206" alt="">
	</div>
	<div class="mb-4">
		<img width="270" height="500" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyER5thDOnRjEtNoU_tkj0907GUKGNNxrw27DQU3O57_Kgf1oErqXaNpK6tcqkCBYA1fE&usqp=CAU" alt="">
	</div>
	<div class="mb-4">
		<img width="270" height="500" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/green-fitness-rollup-banner-design-template-54de60cceb06cf035d189eacc138f663_screen.jpg?ts=1561439839" alt="">
	</div>

	</div>
</div>



    {{-- <div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container" id="container">
			<p></p>
			<div class="row row-bottom-padded-md">
				@foreach ($videos as $post)
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
	</div> --}}
	@endsection
