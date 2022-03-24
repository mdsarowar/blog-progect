@extends('admin.master')
@section('title')
    Add-category
@endsection

@section('body')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Add Category</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Form Elements</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{--                    <h4 class="card-title">Textual inputs</h4>--}}
                        {{--                    <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to each--}}
                        {{--                        textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>--}}

                        <form action="{{route('update_blog')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Blog Title</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="blog_title" value="{{$blog->blog_title}}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Blog Image</label>
                                <div class="col-md-9">
                                    <input class="form-control-file" type="file" name="blog_image" >
                                    <img src="{{asset($blog->blog_image)}}" style="height: 100px;width: 100px" alt="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Blog category Name</label>
                                <div class="col-md-9">
                                    <select name="category_id" class="form-control" id="">
                                        <option value="" disabled selectde>Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"{{$category->category_id==$blog->category_id? 'selected':''}}>{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Blog Content</label>
                                <div class="col-md-9">
                                    <textarea name="blog_content" id="editor" cols="30" rows="4">{!! $blog->blog_content !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Status</label>
                                <div class="col-md-9">
                                    <label for=""><input type="radio" name="status" {{$blog->status==0? 'checked':''}} value="0"> Unpublished</label>
                                    <label for=""><input type="radio" name="status" {{$blog->status==1? 'checked':''}}  value="1"> Published</label>

                                </div>
                            </div>
                            <div class="form-group float-right">

                                <input class="btn btn-success" type="submit" value="add" >
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->


    </div> <!-- container-fluid -->
@endsection
