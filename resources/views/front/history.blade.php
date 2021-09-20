@extends('front.Users.Layout.app')
@section('body')
	
	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container" id="container">
            <div class="row">
				<h3>Khách hàng đã đăng kí</h3>
                <div>

                </div>
		        <div class="pricing">
			    @foreach ($history as $post)
                    <div class="my-8 mx-auto bg-gray-100" style="width: 1000px">
                        <div class="flex justify-center gap-20 shadow">
                            <div>
                                <div><span>Tên:</span></div>
                                
                            
                                <div><span>Email:</span></div>
                                <div><span>Địa chỉ:</span></div>
								<div><span>Thời gian:</span></div>
                                <div class=""><span>Gói tập:</span></div>
                                <div><span>Giá:</span></div>
                            </div>
                            <div>
                                <div><span>{{$post->post_name}}</span></div>
                                
                                <div><span>{{$post->post_email}}</span></div>
                                <div><span>{{$post->post_adress}}</span></div>
								<div><span>{{$post->created_at}}</span></div>
                                <div><span>{{$post->post_category}}({{$post->post_month}} Tháng)</span></div>
                                <div><span class="text-red-500">{{$post->post_price}} VND</span></div>
                            </div>
                        </div>
                  </div>
				
			       
			   @endforeach
                <p style="text-align: center" class="text-red-500">Nếu quý khách muốn hủy gói tập đã xác nhận vui lòng phản hồi gmail khi chúng tôi gửi đến hoặc liên hệ qua page				
                    <p style="text-align: center" >Page:<a href="https://www.facebook.com/profile.php?id=100059688523687" class="text-blue-500">Fitness LifeStyle VN</a></p>
                    </p><br>
               <h3 style="text-align: center" class="text-gray-700">Xin cảm ơn!</h3>

		       </div>
	        </div>
        </div>
    </div>

	@endsection