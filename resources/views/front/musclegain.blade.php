@extends('front.Users.Layout.app')
@section('body')

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Video hướng dẫn tăng cơ hiệu quả</h1>
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
            3 Phút Tập Bụng 6 Múi Tại Nhà | Dân Thể Hình
		</h1>
		<div class="text-xl">
		  <p>Bạn muốn có cơ bụng 6 múi chuẩn ĐẸP thì hãy xem ngay 6 bài tập bụng trong clip này, đặc biệt bạn có thể tập ở bất cứ đâu mà không cần dụng cụ.</p>
		</div>
	  </div>
	  <div>
	   <span class="font-medium">XEM CLIP:</span>
	   <div>
		 <iframe width="835" height="480" src="https://www.youtube.com/embed/rGrfmv1WaC0?autoplay=1&mute=1&controls=1"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	   </div>
	  </div>
	  @foreach ($video as $post)
	  <div class="my-32">
		<span class="font-semibold">✍🏻 &nbsp{{$post->post_title}}</span>
		<div class="text-xl">
            <p> {{$post->created_at}}</p>
		  </div>
		<div>
		  <iframe width="835" height="480" src="https://www.youtube.com/embed/{{$post->post_link}}?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

	@endsection
