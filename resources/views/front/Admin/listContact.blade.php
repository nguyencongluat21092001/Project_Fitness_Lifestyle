<x-app-layout>
</x-app-layout>
<div class="py-12">
@extends('front.Admin.Layout.app')
@section('body')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Liên hệ khách hàng</h1>

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
                                            <th>Tên</th>
                                            <th>Tuổi</th>
                                            <th>Địa chỉ</th>
                                            <th>Điện thoại</th>
                                            <td>Lời nhắn</td>
                                            <td>Phản hồi</td>
                                            <td>In trang chủ</td>
                                            <td>Thời gian</td>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($contacts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->post_name}}</td>
                                            <td>{{$post->post_age}}/Tuổi</td>
                                            <td>{{$post->post_adress}}</td>
                                            <td>{{$post->post_phone}}</td>
                                            <td>{{$post->post_comment}}</td>
                                            <td>{{$post->post_repcomment}}</td>
                                            <td>{{$post->post_view}}</td>
                                            <td>{{$post->created_at}}</td>
                                            <td ><div  style="height:100%;display: flex;justify-content:center;">
                                                <button class="btn btn-primary" type="submit" style="margin:62% 0;outline: none;"> <a style=" display:inline-block;"><a href="editContact/{{$post['id']}}"><i style="color: #fff"  class="far fa-edit "></i></a></button>
                                            </div></td>
                                            <td  style="height:100%;display: flex;justify-content:center;"><button type="button" class="btn btn-danger"  style="margin:70% 0; height:100%"> <a href="deletecontact/{{$post['id']}}"><i  style="color: #fff" class="far fa-trash-alt"></i></button></td>
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
