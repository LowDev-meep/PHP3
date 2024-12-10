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
                                <div class="table-responsive">
                                    <table class="table table-striped table-nowrap align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tên nhà hàng</th>
                                                <th scope="col">Hình ảnh</th>
                                                <th scope="col">Địa chỉ</th>
                                                <th scope="col">Ẩm thực</th>
                                                <th scope="col">Điểm đánh giá</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($listNhaHang as $index => $nhaHang)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $nhaHang->name }}</td>
                                                    <td>
                                                        <img src="{{ Storage::url($nhaHang->logo) }}" width="100px"
                                                            class="img-thumbnail" alt="Hình ảnh">
                                                    </td>
                                                    <td>{{ $nhaHang->location }}</td>
                                                    <td>{{ $nhaHang->cuisine }}</td>
                                                    <td>{{ $nhaHang->rating }}</td>

                                                    <td>
                                                        <a class="btn btn-sm btn-primary" href="#">Xem</a>

                                                        <a class="btn btn-sm btn-warning"
                                                            href="{{ route('nhahangs.edit', $nhaHang->id) }}">Sửa</a>

                                                        <form action="{{ route('nhahangs.destroy', $nhaHang->id) }}" method="post"
                                                            onclick="return confirm('Bạn có chắc chắn xóa nhà hàng này không?')"
                                                            class="d-inline">
                                                            @csrf
                                                            @method('delete')

                                                            <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="mt-3">
                                        {{-- {{ $listSanPham->links('pagination::bootstrap-5') }} --}}
                                    </div>
                                </div>
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
