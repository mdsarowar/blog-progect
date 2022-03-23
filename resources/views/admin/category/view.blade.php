@extends('admin.master')
@section('title')

@endsection

@section('body')
    <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Projects List</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                        <li class="breadcrumb-item active">Projects List</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <div class="table-responsive">
                    <table  class="table project-list-table table-nowrap table-centered table-borderless">
                        <thead>
                        <tr>
                            <th scope="col" style="width: 100px">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Category Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $categoy)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><span class="badge badge-primary">{{$categoy->category_name}}</span></td>
                                <td>
                                    <div class="team">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Daniel Canales">
                                            <img src="{{asset($categoy->category_image)}}" class="rounded-circle avatar-xs m-1" alt="">
                                        </a>

                                    </div>
                                </td>
                                <td>{{$categoy->status}}</td>
                                <td>
                                    <a class="btn btn-{{$categoy->status==0 ? 'primary':'secondary'}}" href="{{route('status_change',['id'=> $categoy->id])}}">{{$categoy->status==0 ? 'unpublished':'published'}}</a>
                                    <a class="btn btn-info" href="{{route('edit_category',['id'=>$categoy->id])}}">Edit</a>
                                    <a class="btn btn-danger" href="{{route('delete_category',['id'=>$categoy->id])}}">del</a>

                                    {{--                                <div class="dropdown">--}}
                                    {{--                                    <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">--}}
                                    {{--                                        <i class="mdi mdi-dots-horizontal font-size-18"></i>--}}
                                    {{--                                    </a>--}}
                                    {{--                                    <div class="dropdown-menu dropdown-menu-right">--}}
                                    {{--                                        <a class="dropdown-item" href="#">Action</a>--}}
                                    {{--                                        <a class="dropdown-item" href="#">Another action</a>--}}
                                    {{--                                        <a class="dropdown-item" href="#">Something else here</a>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="text-center my-3">
                <a href="javascript:void(0);" class="text-success"><i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
            </div>
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    </div>
@endsection
