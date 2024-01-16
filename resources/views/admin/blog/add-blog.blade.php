@extends('admin.layouts.app')
@section('body')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Blog</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Blog</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-md-12">
                        <div class="card ">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Add Blog</h3>
                            </div>
                            <h2 class="text-lg-center text-primary">{{session('message')}}</h2>
                            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                        <div class="form-group">
                                            <label for="blogTitle" class="form-label text-dark">Title</label>
                                            <input type="text" name="title" class="form-control" id="blogTitle" placeholder="Enter Blog Title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="category" class="form-label text-dark">Category</label>
                                            <select name="category_id" class="form-control select2 form-select" id="category" data-placeholder="Select">
                                                <option label="default">Select</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label  class="form-label text-dark">Short Description</label>
                                            <textarea rows="3" name="shortdescription" class="form-control" placeholder="Enter the short description" required></textarea>
                                        </div>

                                        <div class="form-group ">
                                            <lable class="form-label" for="category-img" >Image</lable>
                                            <input class="form-control" name="image" id="category-img" type="file" >
                                        </div>
                                        <div class="form-group">
                                            <label  class="form-label text-dark">Full Description</label>
                                            <textarea rows="10" name="fulldescription" class="form-control" placeholder="Enter the full description" required></textarea>
                                        </div>

                                        <button class="float-end mb-5"><a class="btn btn-primary  mb-1 mb-sm-0">Publish Now</a></button>

                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- /row -->


            </div>
        </div>
    </div>
@endsection
