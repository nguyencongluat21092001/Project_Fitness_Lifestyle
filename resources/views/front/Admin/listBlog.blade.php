<x-app-layout>
</x-app-layout>
<div class="py-12">
@extends('front.Admin.Layout.app')
@section('body')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tất cả bài viết</h1>
                    <?php
                    $name = Session::get('success');
                    if($name){
                        echo $name;
                    }else {

                    }
                    ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="text-align: center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tiêu đề</th>
                                            <th>Loại</th>
                                            <th>Ảnh</th>
                                            <th>Nội dung</th>
                                            <th>Link</th>
                                            <th>Ngày tạo</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($blogs as $post)

                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->post_title}}</td>
                                            <td>{{$post->blogcategory->name}}</td>
                                            <td><img src="storage/images/blog/{{$post->post_image}}" width="200px"></td>
                                            <td>{{$post->post_content}}</td>
                                            <td>{{$post->post_link}}</td>
                                            <td>{{$post->created_at}}</td>
                                            <td ><div  style="height:100%;display: flex;justify-content:center;">
                                                <button class="btn btn-primary" type="submit" style="margin:85% 0;outline: none;"> <a style=" display:inline-block;" href="{{ route('editBlog',$post->id) }}"><i style="color: #fff"  class="far fa-edit "></i></a></button>
                                            </div></td>
                                                <td  style="height:100%;display: flex;justify-content:center;"><button type="button" class="btn btn-danger"  style="margin:80% 0; height:100%"> <a href="deleteblog/{{$post['id']}}"><i  style="color: #fff" class="far fa-trash-alt"></i></button></td>
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
