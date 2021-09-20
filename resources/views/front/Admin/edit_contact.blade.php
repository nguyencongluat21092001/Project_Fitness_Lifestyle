<x-app-layout>
</x-app-layout>
<div class="py-12">
@extends('front.Admin.Layout.app')
@section('body')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Thay đổi liên hệ</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('updateContact', $post->id )}}" method="POST" class="user">
                                @method("POST")
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="post_name" aria-describedby="price"
                                        value="{{ $post->post_name}}"readonly>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user"
                                        name="post_age" aria-describedby="price"
                                        value="{{ $post->post_age}}" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="post_adress" aria-describedby="price"
                                        value="{{ $post->post_adress}}" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user"
                                        name="post_phone" aria-describedby="price"
                                        value="{{ $post->post_phone}}" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="post_comment" aria-describedby="price"
                                        value="{{ $post->post_comment}}" readonly>
                                </div>
                                <div class="form-group">
                                    Trả lời bình luận:
                                    <input type="text" class="form-control form-control-user"
                                        name="post_repcomment" aria-describedby="price"
                                        value="{{ $post->post_repcomment}}">
                                </div>
                                <div class="form-group">
                                    Nhập 1 nếu như bạn cho phép hiển thị trang chủ:
                                    <input type="number" class="form-control form-control-user"
                                        name="post_view" aria-describedby="price"
                                        value="{{ $post->post_view}}">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user"
                                        name="created_at" aria-describedby="price"
                                        value="{{ $post->created_at}}">
                                </div>
                              <?php
                              $name = Session::get('message');
                              if($name){
                                  echo $name;
                              }else {
                                  
                              }
                              ?>
                              <div class="flex justify-center">
                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Thay đổi</button>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Fitness_LifeStyle 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            @endsection
