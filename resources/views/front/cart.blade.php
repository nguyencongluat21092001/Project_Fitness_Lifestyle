@extends('front.Users.Layout.app')
@section('body')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                  
                    <div class="row">
                        <div class="pricing">
                        <div class="container" id="container">
                            <div class="container-title-garary">
                                <h2>Cảm ơn bạn đã tham khảo mua dịch vụ của chúng tôi</h2>
                        <div class="row row-bottom-padded-md"> 
                            {{-- @foreach ($packs as $post) --}}
                                
                            <div class="animate-box">
                                <div class="price-box">
                                    <div class="mb-4">
                                        <div class="card-header py-3">
                                            <h1 class=" uppercase "> <span class=" text-5xl ">THỦ TỤC THANH TOÁN</span></h1>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('store.cart')}}" method="POST" class="user">
                                                @method("POST")
                                                @csrf
                                                <div class="flex justify-between  gap-10">
                                                    <div>
                                                        <div class="form-group">
                                                            <input type="text" style="width: 600px" class="form-control form-control-user "
                                                                name="post_name" aria-describedby="price"
                                                                placeholder="Tên bạn là gì?"
                                                                >
                                                          </div>
                                                          <div class="form-group">
                                                            <input type="email" class="form-control form-control-user"
                                                                name="post_email" aria-describedby="price"
                                                                placeholder="Email?"
                                                                >
                                                          </div>
                                                          <div class="form-group">
                                                            <input type="number" class="form-control form-control-user"
                                                                name="post_phone" aria-describedby="price"
                                                                placeholder="Phone"
                                                                >
                                                          </div>
                                                          <div class="form-group">
                                                            <input type="text" class="form-control form-control-user"
                                                                name="post_adress" aria-describedby="price"
                                                                placeholder="Nơi ở hiện tại"
                                                                >
                                                          </div>
                                                          <div class="form-group">
                                                            <input type="text" class="form-control form-control-user"
                                                                name="post_discountcode" aria-describedby="price"
                                                                placeholder="Nhập mã ưu đãi nếu có."
                                                                >
                                                          </div>
                                                          <div class="form-group">Thanh toán(VND)
                                                            <input type="number" class="form-control form-control-user"
                                                                name="post_price" aria-describedby="price"
                                                                value="{{$post->post_price}}" readonly>
                                                          </div>
                                                          <span id="price-total" class="hidden">{{$post->post_price}}</span>
                                                          <div class="flex justify-center"> 
                                                            <button type="submit" name="submit"class="btn btn-success px-12">Mua gói</button>
                                                           </div>
                                                           <div>
                                                            <p style="color: #a8a8a8; !important;">Chúng tôi sẽ gọi điện trực tiếp qua số quý khách để lại và gửi gmail trao đổi cụ thể với<br> quý khách ngay sau khi quý khách xác nhận mua gói dịch vụ.</p>
                                                         <a href="{{ url ('history') }}">Khách hàng đã đăng ký</a>
                                                        </div>
                                                      </div>
                                                    <div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user"
                                                                name="post_category" aria-describedby="price"
                                                                value="{{$post->post_category}}" readonly>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                          <input type="text" class="form-control form-control-user"
                                                              name="post_month" aria-describedby="price"
                                                              value="{{$post->post_month}}" readonly>
                                                      </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user"
                                                                name="post_cardio" aria-describedby="price"
                                                                value="{{$post->post_cardio}}"readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user"
                                                                name="post_swimming" aria-describedby="price"
                                                                value="{{$post->post_swimming}}"readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user"
                                                               name="post_yoga" aria-describedby="price"
                                                                value="{{$post->post_yoga}}"readonly>
                                                        </div>
                                                        <div class="form-group">
                                                          <input type="text" class="form-control form-control-user"
                                                              name="post_zumba" aria-describedby="price"
                                                              value="{{$post->post_zumba}}"readonly>
                                                        </div>
                                                        <div class="form-group">
                                                          <input type="text" class="form-control form-control-user"
                                                            name="post_massage" aria-describedby="price"
                                                            value="{{$post->post_massage}}"readonly>
                                                        </div>
                                                        <div class="form-group">
                                                          <input type="text" class="form-control form-control-user"
                                                              name="post_boxing" aria-describedby="price"
                                                              value="{{$post->post_boxing}}"readonly>
                                                      </div>
                                                    </div>
                                                  
                                                </div>
                                               
                                               
                                              
                                              
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- @endforeach --}}
                        </div>
                     </div>
                    </div>
                </div>
 </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <div class="hidden">
                @foreach ($codes as $post)
                <span class="code_s"> {{$post->post_code}}</span>
                <span class="sale_number">{{$post->post_sale}}</span>
                @endforeach
               
            </div>
            <div class="gh"></div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Fitness_LifeStyle 2021</span>
                    </div>
                </div>
            </footer>
            @endsection
            
            <script>
                window.addEventListener('DOMContentLoaded', (event) => {
                    let postPrice = document.querySelector('[name="post_price"]');
                    let post_discountcode = document.querySelector('[name="post_discountcode"]');
                    let codeSale = document.querySelectorAll('.code_sale');
                    let saleNumber = document.querySelectorAll('.sale_number');
                    let priceTotal = Number(document.querySelector('#price-total').innerHTML);
                    console.log(priceTotal);
                    let codeS = document.querySelectorAll('.code_s');
                    post_discountcode.addEventListener('keyup',()=>{
                       
                        for(let i =0; i<codeS.length;i++){
                            // console.log(codeS[i].innerHTML.trim());
                            if(codeS[i].innerHTML.trim()===post_discountcode.value.trim()){
                                postPrice.value = Math.ceil(priceTotal * (100 - Number(saleNumber[i].innerHTML))/100);
                                return;
                            }else{
                                postPrice.value = Math.ceil(priceTotal);
                            }
                        }

                        
                    })
                    
                    
                    
                    
                });
                
            </script>