@extends('website.layouts.master')
@section('body')
<div class="tm-blog-img-container">

</div>

<section class="tm-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <div class="tm-blog-post">
                    <h3 class="tm-gold-text">{{$blog->title}}</h3>
                    <p class="fw-bold text-black">{{$blog->categories->name}}</p>
                    <p>{{$blog->shortdescription}}</p>
                    <img src="{{asset($blog->image)}}" alt="Image" class="img-fluid tm-img-post">
                    <p>{{$blog->fulldescription}} </p>
                </div>
            </div>

            <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">

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
            </aside>

        </div>

    </div>
</section>

@endsection
