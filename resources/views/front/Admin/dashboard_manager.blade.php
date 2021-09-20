<x-app-layout>
</x-app-layout>
<div class="py-12">
@extends('front.Admin.Layout.app')
@section('body')
    <!-- Begin Page Content -->
    
                <div class="container-fluid">
                    <?php
                    $name = Session::get('success');
                    if($name){
                        echo $name;
                    }
                    ?>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Danh sách huấn luyện viên</h1>
                  

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="text-align: center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th>Tuổi</th>
                                            <th>Ảnh</th>
                                            <th>Địa chỉ</th>
                                            <th>Năm kinh nghiệm</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->post_name}}</td>
                                            <td>{{$post->post_age}}</td>
                                            <td><img src="storage/images/trainer/{{$post->post_image}}" width="100px"></td>
                                            <td>{{$post->post_introduce}}</td>
                                            <td>{{$post->post_experience}}</td>
                                            <td ><div  style="height:100%;display: flex;justify-content:center;">
                                                <button class="btn btn-primary" type="submit" style="margin:80% 0;outline: none;"> <a style=" display:inline-block;" href="{{ route('editTrainer',$post->id) }}"><i style="color: #fff"  class="far fa-edit "></i></a></button>
                                            </div></td>

                                            <td  style="height:100%;display: flex;justify-content:center;"><button type="button" class="btn btn-danger"  style="margin:90% 0; height:100%"> <a href="deletetrainer/{{$post['id']}}"><i  style="color: #fff" class="far fa-trash-alt"></i></button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection
