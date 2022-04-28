<x-app-layout>
</x-app-layout>
<div class="py-12">
    @extends('front.Admin.Layout.app')
    @section('body')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Bài Viết</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa bài viết</h6>
            </div>
            <div class="card-body">
                <div class="card-body">
    <form action="{{ route('updateBlog', $post->id )}}" method="POST" enctype="multipart/form-data" class="user">
        @csrf

        <div class="form-group">
            <input type="text" class="form-control form-control-user"
                   name="post_title" aria-describedby="name"
                   value="{{ $post->post_title}}">
        </div>
        <div class="form-group">
            <select type="text" name="post_category_id" id="" class="form-control "  style="border-radius: 30px; ">

                @foreach ($category as $item )
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach

            </select>

        </div>
        <div class="form-group">
            <input type="file" class="form-control form-control-user"
                   name="post_image" aria-describedby="price">
                   <img src="storage/images/blog/{{$post->post_image}}" width="200px">
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
