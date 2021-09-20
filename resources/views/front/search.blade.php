@extends('front.Users.Layout.app')
@section('body')
	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container" id="container">
			<div class="row row-bottom-padded-md">
				@foreach ($productcategory as $post)
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

	{{-- <div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container" id="container">
            <div class="row">
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
	        </div>
        </div>
    </div> --}}
	{{-- <div class="container-fluid">
		<div class="row row-bottom-padded-md">
			<div class="col-md-12">
				<ul id="fh5co-portfolio-list">
					@foreach ($trainers as $post)
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(storage/images/trainer/{{$post->post_image}}); ">
						<a href="#">

							<div class="case-studies-summary">
								<h2>{{$post->post_name}}</h2>
								<span>{{$post->post_age}}age/</span>
								<span>{{$post->post_experience}}-years EX</span>
							</div>
						</a>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div> --}}
	@endsection
