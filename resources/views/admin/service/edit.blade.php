@extends('admin.master')
@section('title')
    edit-service
@endsection

@section('body')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Edit Service</h4>

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

                        <form action="{{route('update_service')}}" method="post" enctype="multipart/form-data">
                            @csrf
{{--                            @if(Session::has('message'))--}}
{{--                                <h3 class="text-success">{{Session::get('message')}}</h3>--}}
{{--                            @endif--}}
                            <input type="hidden" name="service_id" value="{{$service->id}}">

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Service Title</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="service_title" value="{{$service->service_title}}"  >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Service Image</label>
                                <div class="col-md-9">
                                    <input class="form-control-file" type="file" name="service_image" >
                                    <img src="{{asset($service->service_image)}}" style="height: 100px;width: 100px" alt="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Service Content</label>
                                <div class="col-md-9">
                                    <textarea name="service_content" id="editor" cols="30" rows="10">{!! $service->service_content !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Status</label>
                                <div class="col-md-9">
                                    <label for=""><input type="radio" name="status" {{$service->status==0? 'checked':''}} value="0"> Unpublished</label>
                                    <label for=""><input type="radio" name="status" {{$service->status==1? 'checked':''}}  value="1"> Published</label>

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

