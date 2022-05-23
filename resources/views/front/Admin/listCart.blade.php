<x-app-layout>
</x-app-layout>
<div class="py-12">
@extends('front.Admin.Layout.app')
@section('body')
    <!-- Begin Page Content -->
                 <div class="container-fluid">

                     <!-- Page Heading -->
                     <h1 class="h3 mb-2 text-gray-800">Danh sách người dùng chọn kế hoạch</h1>
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
                                             <th>Loại</th>
                                             <th>Giá</th>
                                             <th>Tháng</th>
                                             <th>Tên</th>
                                             <th>Email</th>
                                             <th>Phone</th>
                                             <th>Địa chỉ</th>
                                             <th>Ngày mua</th>
                                             <th>Xóa</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach ($addcart as $post)
                                         <tr>
                                             <td>{{$post->id}}</td>
                                             <td>{{$post->post_category}}</td>
                                             <td>{{number_format($post->post_price)}} VND</td>
                                             <td>{{$post->post_month}}</td>
                                             <td>{{$post->post_name}}</td>
                                             <td>{{$post->post_email}}</td>
                                             <td>{{$post->post_phone}}</td>
                                             <td>{{$post->post_adress}}</td>
                                             <td>{{$post->created_at}}</td>
                                             {{-- <td><button class="btn btn-danger" type="submit"> <a  href="{{ route('editPricing',$post->id) }}">edit</a></button></td> --}}
                                                <td  style="height:100%;display: flex;justify-content:center;"><button type="button" class="btn btn-danger"  style="margin:60% 0; height:100%"> <a href="deletecart/{{$post['id']}}"><i  style="color: #fff" class="far fa-trash-alt"></i></button></td>
                                         </tr>
                                         @endforeach
                                     </tbody>
                                 </table>
                                 <Span>Tổng tất cả các gói tập : {{number_format($sum)}} VND</Span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- /.container-fluid -->

             </div>
             <!-- End of Main Content -->

 @endsection
