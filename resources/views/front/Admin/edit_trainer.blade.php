<x-app-layout>
</x-app-layout>
<div class="py-12">
    @extends('front.Admin.Layout.app')
    @section('body')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Huấn Luyện viên</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thay đổi Huấn luyện viên</h6>
            </div>
            <div class="card-body">
    <form action="{{ route('updateTrainer', $post->id )}}" method="POST" enctype="multipart/form-data" class="user">
        @csrf

        <div class="form-group">
            <input type="text" class="form-control form-control-user"
                   name="post_name" aria-describedby="name"
                   value="{{ $post->post_name }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user"
                   name="post_age" aria-describedby="price"
                   value="{{ $post->post_age }}">
        </div>
        <div class="form-group">
            <input type="file" class="form-control form-control-user"
                   name="post_image" aria-describedby="price">
                   <img src="storage/images/trainer/{{$post->post_image}}" width="200px">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user"
                   name="post_introduce" aria-describedby="price"
                   value="{{ $post->post_introduce }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user"
                   name="post_experience" aria-describedby="price"
                   value="{{ $post->post_experience }}">
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
@endsection

