@extends('website.layouts.master')
@section('body')

    <div class="tm-home-img-container">
        <img src="{{asset('website-assets')}}/img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
    </div>

    <section class="tm-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                    <h2 class="tm-gold-text tm-title">Introduction</h2>
                    <p class="tm-subtitle">Suspendisse ut magna vel velit cursus tempor ut nec nunc. Mauris vehicula, augue in tincidunt porta, purus ipsum blandit massa.</p>
                </div>
            </div>
            <div class="row">
                 @foreach($blogs as $blog)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                    <div class="tm-content-box">
                        <img src="{{asset($blog->image)}}" alt="Image" class="tm-margin-b-20 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">{{$blog->title}}</h4>
                        <a href="{{route('blog.detail',['id'=>$blog->id])}}" class="tm-btn text-uppercase">Detail</a>
                    </div>

                </div>
                @endforeach
            </div> <!-- row -->

            <div class="row tm-margin-t-big">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="row">
                        @foreach($blogs as $blog)
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                            <div class="tm-content-box">
                                <img src="{{asset($blog->image)}}" alt="Image" class="tm-margin-b-20 img-fluid">
                                <h4 class="tm-margin-b-20 tm-gold-text">{{$blog->title}}</h4>
                                <p class="tm-margin-b-20">{{$blog->shortdescription}}</p>
                                <a href="{{route('blog.detail',['id'=>$blog->id])}}" class="tm-btn text-uppercase">Detail</a>
                            </div>

                        </div>
                        @endforeach

                    </div> <!-- row -->
                </div>
                <hr>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                    <div class="tm-2-col-right">

                        <div class="tm-2-rows-md-swap">

                            <div class="row tm-2-rows-md-down-1 tm-margin-t-mid">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <h3 class="tm-gold-text tm-title tm-margin-b-30">Related Posts</h3>
                                    <hr>
                                    @foreach($blogs as $blog)
                                    <div class="media tm-related-post">
                                        <div class="media-left media-middle">
                                            <a href="{{route('blog.detail',['id'=>$blog->id])}}">
                                                <img class="media-object" src="{{asset($blog->image)}}" width="100px" height="100px" alt="Generic placeholder image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="{{route('blog.detail',['id'=>$blog->id])}}"><h4 class="media-heading tm-gold-text tm-margin-b-15">{{$blog->title}}</h4></a>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div> <!-- row -->

        </div>
    </section>
@endsection
