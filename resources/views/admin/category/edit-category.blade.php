@extends('admin.layouts.app')
@section('body')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Category</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category Form</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Edit Category</h3>
                            </div>
                            <h2 class="text-lg-center text-primary">{{session('message')}}</h2>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
                                        <form action="{{route('category.update')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$category->id}}">
                                            <div class="card card-body pd-20 pd-md-40 border shadow-none">
                                                <h4 class="card-title">Edit Category</h4>
                                                <hr>
                                                <div class="form-group ">
                                                    <label class="form-label" for="category-name">Category Name Edit</label>
                                                    <input class="form-control" name="name" value="{{ $category->name }}" id="category-name" type="text" placeholder="Enter category Name" required>
                                                </div>
                                                <div class="form-group ">
                                                    <lable class="form-label" for="category-img" >Category Image</lable>
                                                    <input class="form-control" name="image" id="category-img" type="file" >
                                                    <img src="{{asset($category->image)}}" height="50px" width="50px" alt="">
                                                </div>
                                                <button class="btn btn-primary" type="submit">Update info</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
    </div>
@endsection
