@extends('front.master')
@section('title')

@endsection

@section('body')
    <!-- service -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- service item -->
                @foreach($services as $service)
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card text-center">
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="{{asset($service->service_image)}}" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <h4 class="card-title pt-3">{{$service->service_title}}</h4>
                                <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam
                                    quis nostrud.</p>
                                <a href="{{route('service_details',['id'=>$service->id])}}" class="btn btn-secondary translateY-25">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- /service -->
@endsection
