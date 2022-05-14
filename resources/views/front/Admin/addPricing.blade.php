<x-app-layout>
</x-app-layout>
<div class="py-12">
@extends('front.Admin.Layout.app')
@section('body')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Thêm kế hoạch</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('store.pack')}}" method="POST" class="user">
                                @method("POST")
                                @csrf
                                <div class="form-group">
                                    <select type="text" name="post_category_id" id="" class="form-control "  style="border-radius: 30px; " >
                                        @foreach ($catePack as $item )
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user"
                                        name="post_price" aria-describedby="price"
                                        placeholder="Giá">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-user"
                                      name="post_month" aria-describedby="price"
                                      placeholder="Tháng">
                              </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="post_cardio" aria-describedby="price"
                                        placeholder="cardio">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="post_swimming" aria-describedby="price"
                                        placeholder="swimming...">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                       name="post_yoga" aria-describedby="price"
                                        placeholder="yoga">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-user"
                                      name="post_zumba" aria-describedby="price"
                                      placeholder="zumba">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-user"
                                    name="post_massage" aria-describedby="price"
                                    placeholder="massage">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-user"
                                      name="post_boxing" aria-describedby="price"
                                      placeholder="boxing">
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
