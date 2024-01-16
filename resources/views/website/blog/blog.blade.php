@extends('website.layouts.master')
@section('body')
<div class="tm-blog-img-container">

</div>

<section class="tm-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <div class="row tm-margin-t-big">
                    @foreach($blogs as $blog)
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                        <div class="tm-content-box">
                            <img src="{{asset($blog->image)}}" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">{{$blog->title}}</h4>
                            <p class="tm-margin-b-20">{{$blog->shortdescription}}</p>
                            <a href="{{route('blog.detail',['id'=>$blog->id])}}" class="tm-btn text-uppercase">Detail</a>
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>

            <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">

                <div class="tm-aside-container">
                    <h3 class="tm-gold-text tm-title">
                        Categories
                    </h3>
                    <nav>
                        <ul class="nav">
                            <li><a href="#" class="mb-3">Lorem ipsum dolor sit</a></li>
                            <li><a href="#" >Tincidunt non faucibus placerat</a></li>
                            <li><a href="#" >Vestibulum tempor ac lectus</a></li>
                            <li><a href="#" >Elementum egestas dui</a></li>
                            <li><a href="#" >Nam in augue consectetur</a></li>
                            <li><a href="#" >Fusce non turpis euismod</a></li>
                            <li><a href="#" >Text Link Color #006699</a></li>
                        </ul>
                    </nav>
                </div>


            </aside>

        </div>

    </div>
</section>

@endsection
