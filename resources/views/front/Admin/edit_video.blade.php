<x-app-layout>
</x-app-layout>
<div class="py-12">
    @extends('front.Admin.Layout.app')
    @section('body')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Video</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa video</h6>
            </div>
            <div class="card-body">
                <div class="card-body">
    <form action="{{ route('updateVideo', $post->id )}}" method="POST"class="user">
        @csrf

        <div class="form-group">
            <input type="text" class="form-control form-control-user"
                   name="post_title" aria-describedby="name"
                   value="{{ $post->post_title}}">
        </div>
        <div class="form-group">
            <select type="text" name="post_category" id="" class="form-control "  style="border-radius: 30px; " >
                <option value="{{$post->post_category}}">{{$post->post_category}}</option>
                <option value="Giảm cân">Giảm cân</option>
                <option value="Tăng cơ">Tăng cơ</option>
            </select>

        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user"
                   name="post_content" aria-describedby="price"
                   value="{{ $post->post_content }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user"
                   name="post_link" aria-describedby="price"
                   value="{{ $post->post_link }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user"
                   name="created_at" aria-describedby="price"
                   value="{{ $post->created_at }}">
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
