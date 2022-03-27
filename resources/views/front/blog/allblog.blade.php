@extends('front.master')

@section('title')

@endsection

@section('body')

    <!-- blog -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- blog-item -->
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <a href="{{route('blog_view',['id'=>$blog->id])}}">
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top" src="{{asset($blog->blog_image)}}" alt="blog-thumbnail" style="height: 200px">
                            </div>
                            <div class="card-body p-0">
                                <div class="d-flex">
                                    {{--                                <div class="py-3 px-4 border-right text-center">--}}
                                    {{--                                    <h3 class="text-primary mb-0">25</h3>--}}
                                    {{--                                    <p class="mb-0">Nov</p>--}}
                                    {{--                                </div>--}}
                                    <div class="p-3">
                                        <a href="" class="h4 font-primary text-dark">{{$blog->blog_title}}</a>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- /blog -->

@endsection
