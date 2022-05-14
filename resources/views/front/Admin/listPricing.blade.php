<x-app-layout>
</x-app-layout>
<div class="py-12">
@extends('front.Admin.Layout.app')
@section('body')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Danh sách kế hoạch</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <?php
                          $name = Session::get('success');
                          if($name){
                              echo $name;
                          }else {

                          }
                          ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="text-align: center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Thể loại</th>
                                            <th>Giá</th>
                                            <th>Tháng</th>
                                            <th>Cardio</th>
                                            <th>Swimming</th>
                                            <th>Yoga</th>
                                            <th>Zumba</th>
                                            <th>Masssage</th>
                                            <th>Boxing</th>
                                            <th>Sửa </th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($packs as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->packCategory->name}}</td>
                                            <td>{{$post->post_price}}</td>
                                            <td>{{$post->post_month}}</td>
                                            <td>{{$post->post_cardio}}</td>
                                            <td>{{$post->post_swimming}}</td>
                                            <td>{{$post->post_yoga}}</td>
                                            <td>{{$post->post_zumba}}</td>
                                            <td>{{$post->post_massage}}</td>
                                            <td>{{$post->post_boxing}}</td>

                                            <td ><div  style="height:100%;display: flex;justify-content:center;">
                                                <button class="btn btn-primary" type="submit" style="margin:85% 0;outline: none;"> <a style=" display:inline-block;" href="{{ route('editPricing',$post->id) }}"><i style="color: #fff"  class="far fa-edit "></i></a></button>
                                            </div></td>
                                            <td  style="height:100%;display: flex;justify-content:center;"><button type="button" class="btn btn-danger"  style="margin:90% 0; height:100%"> <a href="deletepricing/{{$post['id']}}"><i  style="color: #fff" class="far fa-trash-alt"></i></button></td>
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
