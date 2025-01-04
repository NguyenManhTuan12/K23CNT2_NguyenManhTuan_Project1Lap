@extends('_layouts.admins._master')
@section('title','Danh sách loại sản phẩm')
@section('content-body')   
    <div class="container border">
        <div class="row">
            <div class="col-12 ">
                <div class="d-flex w-100 justify-content-between"> 
                    <h2> Danh sách sản phẩm</h2>
                    <a href="{{route('nmtadmins.nmtsanpham.nmtcreate')}}"class="btn btn-success">Thêm mới</a>
                </div>
            </div>
        </div> 

        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                        <th>#</th>
                        <th>Mã sản phẩm </th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($nmtSanPhams as $item)
                <tr>
                    <td class="test-center">{{$loop->iteration}}</td>
                    <td>{{$item->nmtMaSanPham}}</td>
                    <td>{{$item->nmtTenSanPham}}</td>
                    <td>{{$item->nmtHinhAnh}}</td>
                    <td>{{$item->nmtSoLuong}}</td>
                    <td>{{$item->nmtDonGia}}</td>
                    <td>{{$item->nmtTrangThai}}</td>
                    <td>
                        <a href="/nmt-admins/nmt-san-pham/nmt-detail{{$item->id}}"class="btn btn-success">
                            View </a>
                           
                        <a href="/nmt-admins/nmt-san-pham/nmt-edit/{{$item->id}}"class="btn btn-primary">Edit</a>

                        <a href="/nmt-admins/nmt-san-pham/nmt-delete/{{$item->id}}"
                            onclick="return confirm('Bạn có chắc chắn xoá không?')"
                                class="btn btn-primary"
                            
                            >Delete </a>    
                    </td>
                </tr>
                @empty
                    
                @endforelse
            </tbody>
            </table>
        </div>
    </div>
@endsection
