{{-- Để kế thừa lại master layout ta sử dụng extends --}}
@extends('layouts.admin')
{{-- Một file chỉ được kế thừa 1 master layout --}}

@section('title')
    Quản lý nhà hàng
@endsection

@section('CSS')
@endsection

{{-- @section: dùng để chị định phần nội dụng được hiển thị --}}
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Quản lý nhà hàng</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Danh sách nhà hàng</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col">

                <div class="h-100">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Danh sách nhà hàng</h4>
                            <a href="{{ route('nhahangs.create') }}" class="btn btn-soft-success material-shadow-none">
                                <i class="ri-add-circle-line align-middle me-1"></i>
                                Thêm nhà hàng
                            </a>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{ route('nhahangs.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="container">

                                        <div>
                                            <label for="name" class="form-label">Tên nhà hàng</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name') }}" placeholder="Tên nhà hàng...">

                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div><br>

                                        <div>
                                            <label for="location" class="form-label">Địa chỉ</label>
                                            <input type="text" class="form-control @error('location') is-invalid @enderror"
                                                id="location" name="location" value="{{ old('location') }}" placeholder="Địa chỉ...">

                                            @error('location')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div><br>

                                        <div>
                                            <label for="cuisine" class="form-label">Ẩm thực</label>
                                            <input type="text" class="form-control @error('cuisine') is-invalid @enderror"
                                                id="cuisine" name="cuisine" value="{{ old('cuisine') }}" placeholder="Ẩm thực...">

                                            @error('cuisine')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div><br>

                                        <div>
                                            <label for="rating" class="form-label">Điểm đánh giá</label>
                                            <input type="number" class="form-control @error('rating') is-invalid @enderror"
                                                id="rating" name="rating" value="{{ old('rating') }}" placeholder="0">

                                            @error('rating')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div><br>

                                        <div>
                                            <label for="logo" class="form-label">Hình ảnh</label>
                                            <input type="file" class="form-control @error('logo') is-invalid @enderror"
                                                id="logo" name="logo">

                                            @error('rating')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div><br>

                                        <div class="text-center">
                                            <a href="{{ route('nhahangs.index') }}" class="btn btn-success">Danh sách</a>
                                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div><!-- end card-body -->
                    </div><!-- end card -->

                </div> <!-- end .h-100-->

            </div> <!-- end col -->
        </div>

    </div>
@endsection

@section('JS')
@endsection
