<x-app-layout>
</x-app-layout>
<div class="py-12">
@extends('front.Admin.Layout.app')
@section('body')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Thể loại</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Thêm thể loại</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.category')}}" method="POST" class="user">
                                @method("POST")
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                       name="name"c aria-describedby="name"
                                        placeholder="name">
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
