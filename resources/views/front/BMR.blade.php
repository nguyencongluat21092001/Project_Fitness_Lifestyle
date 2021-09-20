@extends('front.Users.Layout.app')
@section('body')

    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/huong-dan-gian-co.jpeg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <div style="background-color: rgba(146, 142, 142, 0.574);">
                                <div style="padding: 20px; display:flex; justify-content:center">
                                    <div>
                                        <h2>Vui lòng trả lời những câu hỏi dưới đây để xác định chỉ số BMR</h2>
                                        <form id="btn-bmr">
                                            <div class="form-group " style=" display:flex;justify-content:center;align-items: center;background-color: rgba(146, 142, 142, 0.574); ">
                                                <div class="">
                                                    <input type="radio" class=""  id="customControlValidation2" value="nam" name="radio-stacked" checked required>
                                                    <label class="custom-control-label" style="margin-bottom: 0; margin:0 5px" for="customControlValidation2">Nam</label>
                                                </div>
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="" value="nu"  id="customControlValidation3" name="radio-stacked" required>
                                                    <label class="custom-control-label" style="margin-bottom: 0; margin:0 5px" for="customControlValidation3">Nữ</label>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" style="background-color: #fff " name="kg"class="form-control form-control-user"
                                                       id="exampleInputEmail" aria-describedby="emailHelp"
                                                       placeholder="Cân nặng(kg)?">
                                            </div>
                                            <div class="form-group">
                                                <input type="text"  style="background-color: #fff " name="height"class="form-control form-control-user"
                                                       id="exampleInputPassword" placeholder="Chiều cao(cm)?">
                                            </div>
                                            <div class="form-group">
                                                <input type="text"  style="background-color: #fff " name="age"class="form-control form-control-user"
                                                       id="exampleInputPassword" placeholder="Tuổi của bạn?">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block"name="btn">Xem kết quả</button>
                                            <span id="result-bmr" style="color: #fff;font-weight:500"></span>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="fh5co-pricing">
        <div class="container">
            <div class="row animate-box">

                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>BMR là gì? Cách tính BMR!</h2>
                    <p>Để duy trì cân nặng và vóc dáng, chúng ta cần có chế độ ăn uống và tập luyện phù hợp. Muốn kiểm soát tốt 2 yếu tố này, chúng ta cần quan tâm đến chỉ số BMR cũng như việc tính lượng calo mà cơ thể tiêu thụ trong ngày. Vậy BMR là gì, cách tính BMR chuẩn là gì? Mời bạn cùng META tìm hiểu về công thức tính BMR trong bài viết dưới đây nhé.</p>
                </div>
            </div>
            <h3>1.BMR là gì?</h3>
            <p>BMR (từ viết tắt của Basal Metabolic Rate), là tỷ lệ trao đổi chất cơ bản trong cơ thể con người. Chỉ số BMR cho ta biết mức năng lượng tối thiểu (calories) mà cơ thể một người cần để duy trì ổn định các hoạt động bình thường.</p>
            <p>Không phải chỉ khi ta đi lại, tập luyện, vận động thì cơ thể mới tiêu hao năng lượng. Tất cả mọi hoạt động của các cơ quan như tim, gan, não bộ… để duy trì các chức năng của cơ thể, kể cả khi cơ thể trong trạng thái nghỉ ngơi như lúc đang ngủ đều tiêu tốn calo. </p>
            <p>BMR chính là mức năng lượng tối thiểu cần thiết để duy trì tất cả các hoạt động sống bên trong cơ thể ở trạng thái ôn hòa. Trạng thái ôn hòa là khi cơ thể đang nghỉ ngơi, hệ tiêu hóa không hoạt động tiêu hóa thức ăn, hệ thần kinh không bị kích thích. Chỉ số BMR phụ thuộc nhiều yếu tố, thông thường chiếm khoảng 70% tổng lượng calories.</p>
            <span  style="display: flex;justify-content:center"><img class="img-responsive" src="frontend/images/cach-tinh-bmr-6.jpeg" width="40%" height="40%" alt=""></span><br>
            <h3>2.Ý nghĩa của chỉ số BMR</h3>
            <p>BMR cho ta biết mức calo tối thiểu để duy trì sự sống hàng ngày. Bạn cần duy trì mức BMR tối thiểu để ổn định sức khỏe. </p>
            <p>BMR cũng cho phép chúng ta kiểm soát trọng lượng cơ thể. Tổng lượng calo cơ thể cần mỗi ngày phụ thuộc vào BMR và mức độ hoạt động thể chất của cơ thể. Muốn tăng cân, chúng ta cần tiêu thụ lượng thực phẩm lớn hơn tổng mức calo cơ thể cần. Ngược lại, người có nhu cầu giảm cân sẽ kết hợp tập luyện với giảm lượng thực phẩm ăn hàng ngày. </p>
            <h3>3.Cách tính BMR chuẩn</h3>
            <p>Cách tính BRM như thế nào? Để tính chỉ số BMR chuẩn nhất, bạn cần đo lượng khí oxy và cacbon cơ thể tiêu thụ. Việc này cần được tiến hành ở bệnh viện hoặc các phòng xét nghiệm có chuyên gia phân tích. Tuy nhiên, có 1 cách đơn giản hơn để bạn có thể tính chỉ số BMR đó là theo công thức sẵn có.</p>
            <span  style="display: flex;justify-content:center"><img class="img-responsive" src="frontend/images/cach-tinh-bmr-2.png" width="100%" height="40%" alt=""></span>
            <h4>1.Công thức tính BMR</h4>
            <p>Có 3 công thức tính chỉ số BMR. Mỗi công thức sẽ có ưu điểm và hạn chế riêng.</p>
            <h5>- Công thức Harris-Benedict:</h5>
            <p>+Đối với nam: BMR = 66 + (13,7 x trọng lượng) + (5 x chiều cao) – (6,8 x tuổi).</p>
            <p>+Đối với nữ: BMR = 655 + (9,6 x trọng lượng) + (1,8 x chiều cao) – (4,7 x tuổi).</p>
            <p>- Trong đó, trọng lượng tính theo đơn vị kg, chiều cao là cm, tuổi là năm.Với những người nhiều cơ bắp hoặc cân nặng quá lớn, chỉ số BMR tính theo cách này thường không chính xác. Đa phần chỉ số tính ra thấp hơn so với thực tế, do những người có nhiều cơ sẽ đốt cháy nhiều năng lượng hơn. </p>
            <h5>2.Công thức Mifflin St Jeor</h5>
            <p>- Công thức này có tính toán lại dựa trên công thức Harris-Benedict.</p>
            <p>+ Đối với phụ nữ: BMR = (10 × trọng lượng) + (6,25 × chiều cao) - (5 × tuổi) - 161.</p>
            <p>+ Đối với nam giới: BMR = (10 × trọng lượng) + (6,25 × chiều cao) - (5 × tuổi) + 5.</p>
            <p>- Trong đó, đơn vị tính trọng lượng theo kg, chiều cao tính bằng cm, tuổi tính bằng năm.Công thức tính chỉ số BMR này được cho là có độ chính xác cao nhất hiện nay (theo Hiệp hội Dinh dưỡng Hoa Kỳ).</p>
            <h3>4.Một số nhân tố ảnh hưởng đến chỉ số BMR</h3>
            <p>+ Khối lượng cơ bắp: Người nhiều cơ bắp có chỉ số BMR cao hơn người ít cơ bắp.  </p>
            <p>+ Kích thước (trọng lượng cơ thể): Cơ thể nặng hơn thì cần tiêu thụ nhiều calo hơn. Do đó, những người nặng cân hơn thường có BMR lớn hơn. </p>
            <p>+ Tuổi tác: Độ tuổi lớn thì mức độ trao đổi chất chậm hơn, tỷ lệ trao đổi chất của cơ thể sẽ thấp hơn so với người trẻ tuổi. </p>
            <p>+ Giới tính: Nam giới thường có nhiều cơ bắp hơn nữ giới, trọng lượng cơ thể nam giới cũng thường lớn hơn. Do vậy, nam giới thường có chỉ số cao BMR lớn hơn phụ nữ. </p>
            <p>+ Mức độ vận động: Càng hoạt động nhiều thì cơ thể càng tiêu hao năng lượng. Người tập thể dục thường xuyên có chỉ số BMR cao hơn.Ngoài ra, còn có các yếu tố khác ảnh hưởng đến chỉ số BMR như nhiệt độ, di truyền, nội tiết tố, chế độ ăn, dùng thuốc...</p>
            <span  style="display: flex;justify-content:center"><img class="img-responsive" src="frontend/images/cach-tinh-bmr-5.jpeg" width="90%" height="40%" alt=""></span><br>
            <h3>5.Kết luận về cách tính BMR</h3>
            <p>-> Chỉ số BMR phụ thuộc vào nhiều yếu tố. Vì thế chúng ta chỉ có thể biết tương đối về tỉ lệ trao đổi chất cơ bản BMR.Hiện nay, công thức Mifflin St Jeor sẽ tính toán tỉ lệ BMR gần với thực tế nhất. Bạn có thể sử dụng công cụ này để tính chỉ số BMR cho bản thân. </p>







            {{-- <div class="row">
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
            </div> --}}
            <div style="display: flex;justify-content:center">
                <div class="col-md-6 animate-box" >
                    <h3>Ý KIẾN CỦA BẠN</h3>
                    <form action="{{ route('store.contact')}}" role="form" method="POST">
                        @method("POST")
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" name="post_name" id="fname" class="form-control" placeholder="Tên của bạn?">
                            </div>
                            <div class="col-md-6">
                                <!-- <label for="lname">Last Name</label> -->
                                <input type="text" name="post_age"id="lname" class="form-control" placeholder="Tuổi">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" name="post_adress"id="email" class="form-control" placeholder="Địa chỉ">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="number" name="post_phone"id="subject" class="form-control" placeholder="Điện thoại">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea  type="text" name="post_comment"id="message" cols="30" rows="10" class="form-control" placeholder="Để lại chỉ số của bạn (BMR) để chúng tôi tư vấn cụ thể."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit"class="btn btn-success">Gửi</button>
                        </div>
                        <?php
						$name = Session::get('success');
						if($name){
							echo $name;
						}else {
							
						}
						?>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
