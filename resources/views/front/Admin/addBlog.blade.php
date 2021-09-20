<x-app-layout>
</x-app-layout>
<div class="py-12">
@extends('front.Admin.Layout.app')
@section('body')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Bài viết</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tạo bài viết</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('store.blog')}}" method="POST" enctype="multipart/form-data" class="user">
                                @method("POST")
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                       name="post_title"c aria-describedby="name"
                                        placeholder="Tiêu đề">
                                </div>

                                <div class="form-group">
                                    <select type="text" name="post_category" id="" class="form-control "  style="border-radius: 30px; " >
                                        <option value="Giải trí">Thể loại</option>
                                        <option value="Phòng tập">Phòng tập</option>
                                        <option value="Tiểu Đường">Tiểu Đường</option>
                                        <option value="Béo phì">Béo phì</option>
                                        <option value="Fitness">Fitness</option>
                                        <option value="Giải trí">Giải trí</option>
                                        <option value="Dinh dưỡng">Dinh dưỡng</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control form-control-user"
                                        name="post_image" aria-describedby="price"
                                        placeholder="image">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                       name="post_content" aria-describedby="price"
                                        placeholder="Nội dung">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="create_at" aria-describedby="price"
                                        placeholder="Ngày tạo">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="post_link" aria-describedby="price"
                                        placeholder="Link">
                                </div>
                                <?php
                                $name = Session::get('message');
                                if($name){
                                    echo $name;
                                }else {
                                    
                                }
                                ?>
                                <div class="flex justify-center">
                                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Thêm</button>
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
