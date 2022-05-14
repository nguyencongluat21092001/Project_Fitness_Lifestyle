@extends('front.Users.Layout.app')
@section('body')

    <header id="fh5co-header" class="fh5co-cover" role="banner" data-stellar-background-ratio="0.5">
        {{-- <div class="overlay"></div> --}}
        <div style=" position:relative;
		padding-bottom:56.25%;
		padding-top:0px;
		height:0;
		overflow:hidden;">
            <iframe style=" position:absolute;
			top:0;
			left:0;
			width:100%;
			height:100%;opacity: 1;" width="500%" height="" src="https://www.youtube.com/embed/HMnatoiMdjA?autoplay=1&mute=1&controls=0"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
		encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="container" style="position: absolute;top:0 ;left:0; margin-left:15%">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1 style="font-weight: 700; color:#fff;opacity: 2">HÃY LÀM CHO NÓ LÀ CUỘC SỐNG, KHÔNG PHẢI LÀ SỨ MỆNH !!!</h1>
                            <p><a href="https://www.youtube.com/watch?v=KBUmu2SI95E" style="background-color: #F85A16; !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="fh5co-services" class="fh5co-bg-section">
        <div class="container">
            <div class="row row-bt-banner">
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><img class="img-responsive" src="frontend/images/dumbbell.svg" alt=""></span>
                        <h3>Cử tạ</h3>
                        <p style="height: 165px">Cử tạ là một môn thể thao trong đó người chơi (gọi là lực sĩ hay đô cử) cố gắng nâng một vật bao gồm thanh tạ được gắn với các đĩa tạ, mỗi lần nâng là một cú nâng sao cho khối lượng vật nâng là cao nhất.</p>
                        <p><a href="https://www.youtube.com/watch?v=AOaYNJgGbTk" style="background-color: #F85A16; !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><img class="img-responsive" src="frontend/images/exercise.svg" alt=""></span>
                        <h3>Chạy bộ</h3>
                        <p style="height: 165px">Chạy bộ là một hình thức chạy nước kiệu hoặc chạy với tốc độ chậm hoặc thong thả và duy trì một tốc độ ổn định đều trong suốt thời gian chạy. Ngày nay, chạy bộ là một trong những loại hình thể thao có lợi cho sức khỏe.</p>
                        <p><a href="https://www.youtube.com/watch?v=qnP5WLQcpaI" style="background-color: #F85A16; !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><img class="img-responsive" src="frontend/images/yoga-carpet.svg" alt=""></span>
                        <h3>Yoga</h3>
                        <p style="height: 165px">Yoga hay còn gọi là "Du-già"là một họ các phương pháp luyện tâm và luyện thân cổ xưa bắt nguồn từ Ấn Độ. Các nhà nghiên cứu cho rằng, thế giới tâm linh của Ấn Độ được phổ biến chính qua khái niệm Yoga này.</p>
                        <p><a href="https://www.youtube.com/watch?v=iSS4asEmIfE" style="background-color: #F85A16; !important;"  class="btn btn-primary popup-vimeo">Xem video</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="fh5co-blog" class="fh5co-bg-section">
        <div class="container" id="container">
            <div class="container-title-garary"><h2>HỆ THỐNG PHÒNG TẬP BẬC NHẤT</h2></div>
            <p>Fitness Lifrstyle mong muốn tạo ra môi trường tập luyện và thư giãn lý tưởng, đem lại sức sống mới và cân bằng cho cuộc sống của hội viên. Với đội ngũ huấn luyện viên, giáo viên chuyên nghiệp kinh nghiệm lâu năm, có bằng cấp quốc tế,  chúng tôi luôn mong muốn đóng góp tích cực cho sự phát triển sức khỏe cộng đồng.</p>
            <div class="row row-bottom-padded-md">
                {{-- @foreach ($blogs as $post)
                    <div class="col-lg-4 col-md-4 child-blog-content" >
                        <div class="fh5co-blog animate-box">
                            <a href="#"><img class="img-responsive images-blog" src="storage/images/blog/{{$post->post_image}}" alt=""></a>
                            <div class="blog-text">
                                <h3><a href=""#>{{$post->post_title}}</a></h3>
                                <span class="posted_on">{{$post->created_at}}</span>
                                <span class="comment"><a href=""><i class="icon-speech-bubble"></i></a></span>
                                <p class="desc-blog">{{$post->post_content}}</p>
                                <a href="{{$post->post_link}}" class="btn btn-primary">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                @endforeach --}}

                <div class="row">
                    <div class="pricing">
                        <div class="container" id="container">
                            <div class="container-title-garary">
                                <h2>CÁC GÓI TẬP SIÊU ƯU ĐÃI</h2>
                            </div>
                            - Khuyến mãi giảm giá tập ở Fitness khu vực Hà nội và tp HCM, giá tập gym ở Fitness. Cập nhật các chương trình khuyến mãi của Fitness, đánh giá phòng tập.
                            Khuyến Mãi Giảm Giá Tập Gym, Yoga Ở Fitness & Yoga Nếu bạn đang muốn giảm cân & tăng cường sức khỏe, thì các bài tập tại Fitness sẽ
                            giúp bạn làm điều này. Đến với phòng tập Fitness, bạn sẽ được hướng dẫn bởi các huấn luyện viên chuyên nghiệp.
                        </div>
                        <div class="row row-bottom-padded-md">

                            @foreach ($packs as $post)

                            <div class="col-md-3 animate-box">
                                <div class="price-box">
                                <h2 class="pricing-plan">{{$post->packCategory->name}}</h2>
                                    <div class="price"><sup class="text-7xl">{{$post->post_price}}</sup><small>Vnd</small><small >{{$post->post_month}}/Tháng</small></div>
                                   <ul class="classes">
                                      <li>{{$post->post_cardio}}</li>
                                      <li class="color">{{$post->post_swimming}}</li>
                                        <li>{{$post->post_yoga}}</li>
                                      <li class="color">{{$post->post_zumba}}</li>
                                      <li>{{$post->post_massage}}</li>
                                      <li class="color">{{$post->post_boxing}}</li>
                                  </ul>
                                  {{-- <a href="{{ route('cart',$post->id) }}" class="btn btn-select-plan btn-sm">Chọn kế hoạch</a> --}}
                                </div>
                           </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
            <div id="fh5co-gallery">

                <div class="container-title-garary"><h2>HUẤN LUYỆN VIÊN</h2></div>
                <div class="row">
                </div>
                <p>Fitness Lifrstyle là mô hình tập Gym chuyên nghiệp với đa dạng các bộ môn như Gym, Võ Muay Thái, Boxing, Yoga, Crossfit và giúp các bạn có thể tìm hiểu một cách chính sác nhất qua các bài viết chúng tôi đưa ra. Không gian tập Gym được thiết kế theo tiêu chuẩn quốc tế, với mỗi bộ môn sẽ có một khu vực riêng biệt tập luyện.</p>
                </div>
                <div class="container-fluid">
                    <div class="row row-bottom-padded-md">
                        <div class="col-md-12">
                            <ul id="fh5co-portfolio-list">
                                @foreach ($trainer as $post)
                                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(storage/images/traine/{{$post->post_image}}); ">
                                        <a>
                                            <div class="case-studies-summary" style="text-align: center">
                                                <h2 style="color: rgb(253, 253, 253)">{{$post->post_name}}</h2>
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
                </div>
            </div>
        </div>

    </div>



    <div id="body-comments">
        <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="comments">
                  <div class="comments-details">
                    <span class="total-comments comments-sort">Bình luận</span>
                  </div>
                  <div class="comment-box add-comment">
                    <span class="commenter-pic">
                      <img src="https://picsum.photos/200" class="img-fluid">
                    </span>
                    <span class="commenter-name">
                      <input type="text" placeholder="Add a public comment" name="Add Comment">
                      <button type="submit" class="btn btn-default">Bình luận</button>
                      <button type="cancel" class="btn btn-default">Hủy bỏ</button>
                    </span>
                  </div>
                  @foreach ($comment as $post)


                  <div class="comment-box">
                    <span class="commenter-pic">
                      <img src="https://picsum.photos/200" class="img-fluid">
                    </span>
                    <span class="commenter-name">
                      <a href="#">👤{{$post->post_name}}</a> <span class="comment-time">{{$post->created_at}}</span>
                    </span>
                    <p class="comment-txt more">{{$post->post_comment}}</p>
                    <div class="comment-meta my-3">

                      <button class="comment-reply reply-popup btn btn-default"><i class="fa fa-reply-all" aria-hidden="true"></i>Xem</button>
                    </div>
                    <div class="comment-box add-comment reply-box">
                      <p class="commenter-name">
                        <p class="comment-txt more">👨‍💻 Quản trị viên: {{$post->post_repcomment}}</p>
                        <button type="cancel" class="btn btn-default reply-popup">Hủy bỏ</button>
                      </p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
