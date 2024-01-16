@extends('admin.layouts.app')
@section('body')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Users List</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users List</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-4 -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 ">
                        <div class="card product-sales-main">
                            <div class="card-header border-bottom">
                                <h3 class="card-title mb-0">Blog List</h3>
                            </div>
                            <h2 class="text-lg-center text-primary">{{session('message')}}</h2>

                            <div class="card-body">
                                <div class="table-responsive" >
                                    <table id="data-table" class="table text-nowrap mb-0 table-bordered" >
                                        <thead class="table-head">
                                        <tr>
                                            <th class="bg-transparent border-bottom-0 wp-15">SL</th>
                                            <th class="bg-transparent border-bottom-0">Title</th>
                                            <th class="bg-transparent border-bottom-0">Category name</th>
                                            <th class="bg-transparent border-bottom-0">Short Description</th>
                                            <th class="bg-transparent border-bottom-0">Blog Image</th>
                                            <th class="bg-transparent border-bottom-0">Full Description</th>
                                            <th class="bg-transparent border-bottom-0">Status</th>
                                            <th class="bg-transparent border-bottom-0 text-center ">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-body" >
                                        @foreach($blogs as $blog)

                                            <tr>
                                                <td>
                                                    <div>
                                                        <div class="user-details ms-2">
                                                            <h6 class="mb-0">{{ $loop->iteration }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-14 fw-semibold" style="width: 20px; overflow: hidden;text-overflow: ellipsis ">{{$blog->title}}</td>
                                                <td class="text-muted fs-14 fw-semibold">{{$blog->categories->name}}</td>
                                                <td class="text-muted fs-14 fw-semibold" style="width: 30px">{{$blog->shortdescription}}</td>
                                                <td class="text-muted fs-13 text-center">
                                                    <span class="data-image avatar avatar-md " style="background-image: url({{asset($blog->image)}})"></span>
                                                </td>
                                                <td class="text-muted tx-13fs-14 fw-semibold">{{$blog->fulldescription}}</td>
                                                <td class="text-primary fs-14 fw-semibold text-center">
                                                    {{$blog->status ==1 ? 'Active' : 'Inactive'}}
                                                </td>

                                                <td>
                                                    <div class="d-flex align-items-stretch">
                                                        @if($blog->status ==1)
                                                            <a class="btn btn-sm btn-danger mt-3 italic" href="{{route('blog.status',['id'=>$blog->id])}}">Inactive</a>
                                                        @else
                                                            <a class="btn btn-sm btn-success mt-3 italic" href="{{route('blog.status',['id'=>$blog->id])}}">Active</a>
                                                        @endif
                                                        <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-sm btn-outline-success border me-4 ms-5" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                            </svg>
                                                        </a>
                                                        <form action="{{route('blog.delete')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$blog->id}}">
                                                            <button onclick="return confirm('Ary you sure Delete !')">
                                                                <a class="btn btn-sm btn-outline-danger border me-2 " data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
                                                                </a>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- COL END -->
                </div>
                <!-- ROW-4 END -->


            </div>
        </div>
    </div>
@endsection
